<?php

// ============================================================
// Fungsi: sanitizeText
// Tujuan: Tukar aksara ';' dalam teks kepada ' / ' supaya
//         tidak bercanggah dengan pemisah CSV semicolon
// ============================================================
function sanitizeText(string $text): string
{
	return str_replace(';', ' / ', $text);
}

// ============================================================
// Fungsi: makeCsvRow
// Tujuan: Jana satu baris CSV dalam format standard:
//         "";"SEKSYEN";"KOD";"PERKARA";"MSIC2008";"NOTAKAKI"
// Nota  : Semua nilai melalui sanitizeText dan escape double-quote
// ============================================================
function makeCsvRow(
	string $seksyen,
	string $kod,
	string $perkara,
	string $msic2008 = '_',
	string $notakaki = '_'
): string {
	$escape = fn(string $s): string => '"' . str_replace('"', '""', sanitizeText($s)) . '"';
	return '""'
		. ';' . $escape($seksyen)
		. ';' . $escape($kod)
		. ';' . $escape($perkara)
		. ';' . $escape($msic2008)
		. ';' . $escape($notakaki);
}

// ============================================================
// Fungsi: parseFootnotes
// Tujuan: Urai baris-baris notakaki kepada array berkunci
//         mengikut nombor rujukan
// Input : Array baris teks mentah notakaki
// Output: ['1' => 'teks...', '2' => 'teks...', ...]
// Nota  : Baris sambungan (tanpa "(N)") dicantum ke notakaki
//         sebelumnya secara automatik
// ============================================================
function parseFootnotes(array $lines): array
{
	$footnotes   = [];
	$currentNum  = null;
	$currentText = '';

	foreach ($lines as $line) {
		$trimmed = trim($line);
		if ($trimmed === '') continue;

		// Baris baru notakaki — bermula dengan "(N)"
		if (preg_match('/^\((\d+)\)\s*(.*)/', $trimmed, $m)) {
			if ($currentNum !== null) {
				$footnotes[$currentNum] = trim($currentText);
			}
			$currentNum  = $m[1];
			$currentText = $m[2];
		} elseif ($currentNum !== null) {
			// Sambungan baris notakaki yang panjang.
			// Jika baris bermula dengan sub-item (a)(b)...(z), tambah <br> di hadapan
			if (preg_match('/^\([a-z]\)/', $trimmed)) {
				$currentText .= ' <br>' . $trimmed;
			} else {
				$currentText .= ' ' . $trimmed;
			}
		}
	}

	// Flush notakaki terakhir
	if ($currentNum !== null) {
		$footnotes[$currentNum] = trim($currentText);
	}

	return $footnotes;
}

// ============================================================
// Fungsi: flushBlockJadual
// Tujuan: Proses buffer blok FORMAT JADUAL dan jana baris CSV
//         untuk setiap kod kelas yang dijumpai
// Logik :
//   1. Urai notakaki dalam $fnLines → array berkunci
//   2. Untuk setiap baris dalam $dataLines:
//      a. Padankan pola "KOD [opsional(N)] PERKARA [MSIC2008]"
//      b. Ekstrak kod MSIC 2008 daripada hujung baris
//      c. Cari rujukan notakaki dalam KOD atau hujung PERKARA
//      d. Jana baris CSV dengan notakaki yang sepadan
// ============================================================
function flushBlockJadual(array &$rows, string $seksyen, array $dataLines, array $fnLines): void
{
	$footnotes = parseFootnotes($fnLines);

	foreach ($dataLines as $dline) {
		$dline = trim($dline);
		if ($dline === '') continue;

		// Padankan: KOD [opsional (N)] diikuti PERKARA
		// Contoh: "02101 Nama perkara 02101" atau "0210(1) Nama..."
		if (!preg_match('/^(\d{3,5}(?:\s*\(\d+\))?)\s+(.+)/', $dline, $m)) continue;

		$kod  = trim($m[1]);
		$rest = trim($m[2]);

		// ── Ekstrak kod MSIC 2008 daripada hujung baris ──────────
		// Contoh tunggal: "02101" atau "02201p"
		// Contoh berganda: "02201p,02202p,02203p,02204p"
		$msic2008 = '_';
		if (preg_match('/\s+(\d{5}[a-zA-Z]?(?:,\s*\d{5}[a-zA-Z]?)*)$/', $rest, $mm)) {
			$msic2008 = trim($mm[1]);
			$rest     = trim(substr($rest, 0, -strlen($mm[0])));
		}

		// ── Cari rujukan notakaki ─────────────────────────────────
		// Keutamaan 1: rujukan dalam KOD sendiri  → cth. "0210(1)"
		// Keutamaan 2: rujukan di hujung PERKARA  → cth. "...lapang(2)"
		$fnRef = null;
		if (preg_match('/\((\d+)\)/', $kod, $mm)) {
			$fnRef = $mm[1];
		} elseif (preg_match('/\((\d+)\)\s*$/', $rest, $mm)) {
			$fnRef = $mm[1];
		}

		$notakaki = '_';
		if ($fnRef !== null && isset($footnotes[$fnRef])) {
			$notakaki = '(' . $fnRef . ') ' . $footnotes[$fnRef];
		}

		$rows[] = makeCsvRow($seksyen, $kod, $rest, $msic2008, $notakaki);
	}
}

// ============================================================
// Parser utama — sokong FORMAT JADUAL dan FORMAT NARATIF
//
// FORMAT JADUAL  : ada baris "KELAS PERKARA KETERANGAN MSIC 2008"
//                  diikuti baris kod kelas seperti "07101 Nama... 07101"
//
// FORMAT NARATIF : "KUMPULAN XXX" huruf besar diikuti perenggan huraian
//
// Kod yang dihasilkan:
//   BAHAGIAN  → $seksyen . $noBahagian        cth. "B09"
//   KUMPULAN  → $seksyen . $noKumpulan        cth. "B091"
//   Kelas     → kod asal 5 digit              cth. "07101"
//
// Deduplication:
//   Tajuk KUMPULAN — dioutput SEKALI sahaja walaupun muncul
//   dalam kedua-dua format (naratif & jadual). Data kelas
//   dalam jadual tetap diproses tanpa halangan.
//   Tajuk BAHAGIAN — dioutput setiap kali (termasuk ulangan
//   halaman) supaya konteks kekal jelas.
// ============================================================
function parseMsic(string $raw): array
{
	$rows    = [];
	$lines   = explode("\n", $raw);
	$seksyen = 'A';

	// ── Pemboleh ubah blok semasa ─────────────────────────────
	$modBlok        = '';    // 'jadual', 'naratif', atau 'bahagian-huraian'
	$kodAktif       = '';    // kod KUMPULAN aktif dengan prefix seksyen, cth. "B091"
	$blockData      = [];    // baris data jadual (kod kelas + perkara)
	$blockFn        = [];    // baris notakaki jadual
	$blockNaratif   = [];    // baris huraian naratif Kumpulan
	$blockBahagian  = [];    // baris huraian naratif Bahagian
	$blockSeksyen   = 'A';
	$inFn           = false;

	// Rekod tajuk Kumpulan yang sudah dioutput — elak tajuk berulang
	// (naratif + jadual ada Kumpulan yang sama, data jadual tetap diproses)
	$outputtedKumpulan = [];

	// ── Closure: flush huraian BAHAGIAN sebagai baris CSV kedua ──
	// Dipanggil apabila jumpa KUMPULAN atau BAHAGIAN baharu
	$flushBahagianHuraian = function () use (
		&$rows, &$blockBahagian, &$kodAktif, &$blockSeksyen
	): void {
		if (!empty($blockBahagian)) {
			$huraian = trim(preg_replace('/\s+/', ' ', implode(' ', $blockBahagian)));
			if ($huraian !== '') {
				$rows[] = makeCsvRow($blockSeksyen, $kodAktif, $huraian, '_', '_');
			}
			$blockBahagian = [];
		}
	};

	// ── Closure: flush blok Kumpulan semasa mengikut mod ─────────
	// Dipanggil apabila jumpa BAHAGIAN, KUMPULAN baharu, atau tamat fail
	$flushCurrentBlock = function () use (
		&$rows, &$modBlok, &$kodAktif,
		&$blockData, &$blockFn, &$blockNaratif,
		&$blockBahagian, &$blockSeksyen, &$inFn,
		$flushBahagianHuraian
	): void {
		// Flush huraian BAHAGIAN yang belum dioutput
		$flushBahagianHuraian();

		if ($modBlok === 'jadual' && !empty($blockData)) {
			// Proses semua baris kelas jadual + notakaki
			flushBlockJadual($rows, $blockSeksyen, $blockData, $blockFn);
		} elseif ($modBlok === 'naratif' && !empty($blockNaratif)) {
			// Cantum huraian naratif Kumpulan jadi satu baris
			$huraian = trim(preg_replace('/\s+/', ' ', implode(' ', $blockNaratif)));
			if ($huraian !== '') {
				//$rows[] = makeCsvRow($blockSeksyen, $kodAktif, $huraian, $kodAktif, '_');
				$rows[] = makeCsvRow($blockSeksyen, $kodAktif, $huraian, '_', '_');
			}
		}

		// Reset semua buffer
		$modBlok      = '';
		$blockData    = [];
		$blockFn      = [];
		$blockNaratif = [];
		$inFn         = false;
	};

	foreach ($lines as $line) {
		$trimmed = trim($line);

		// ── 1. Kesan pengepala seksyen "MSIC 2025 SEKSYEN X" ─────
		// Kemas kini huruf seksyen aktif (A, B, C...)
		if (preg_match('/^MSIC\s+\d+\s+SEKSYEN\s+([A-Z])/i', $trimmed, $m)) {
			$seksyen = strtoupper($m[1]);
			continue;
		}

		// ── 2. Abaikan pengepala halaman "A - 22", "B - 8" ───────
		if (preg_match('/^[A-Z]\s*-\s*\d+$/', $trimmed)) continue;

		// ── 3. Kesan pengepala jadual → tetapkan mod JADUAL ──────
		// Baris "KELAS PERKARA KETERANGAN MSIC 2008" menandakan
		// permulaan bahagian data jadual
		if (preg_match('/^KELAS\s+PERKARA/i', $trimmed)) {
			$modBlok = 'jadual';
			continue;
		}

		// ── 4. Abaikan baris kosong ───────────────────────────────
		if ($trimmed === '') continue;

		// ── 5. Kesan "BAHAGIAN XX [:]  Nama..." ──────────────────
		// Output tajuk BAHAGIAN terus. Huraian selepasnya (jika ada)
		// dikumpul dalam $blockBahagian sehingga jumpa KUMPULAN
		if (preg_match('/^BAHAGIAN\s+(\d+)\s*[:\-]?\s*(.*)/i', $trimmed, $m)) {
			$flushCurrentBlock();
			$noBahagian   = trim($m[1]);
			$namaBahagian = trim($m[2]);
			$kodBahagian  = $seksyen . $noBahagian;        // cth. "B09"
			$tajuk        = 'BAHAGIAN ' . $noBahagian . ' : ' . strtoupper($namaBahagian);
			$rows[]       = makeCsvRow($seksyen, $kodBahagian, $tajuk, '_', '_');
			$kodAktif     = $kodBahagian;
			$blockSeksyen = $seksyen;
			$modBlok      = 'bahagian-huraian';
			continue;
		}

		// ── 6a. Kesan "Kumpulan XXX : Nama..." ───────────────────
		// Huruf campuran (K besar, u kecil) = FORMAT JADUAL
		// Tajuk dioutput sekali sahaja (dedup). Data jadual tetap diproses.
		if (preg_match('/^Kumpulan\s+(\d+)\s*[:\-]?\s*(.*)/i', $trimmed, $m)
			&& $trimmed[0] === 'K' && isset($trimmed[1]) && $trimmed[1] === 'u'
		) {
			$flushCurrentBlock();
			$noKumpulan   = trim($m[1]);
			$namaKumpulan = trim($m[2]);
			$kodKumpulan  = $seksyen . $noKumpulan;        // cth. "B091"

			// Output tajuk hanya jika belum pernah dioutput
			if (!isset($outputtedKumpulan[$kodKumpulan])) {
				$outputtedKumpulan[$kodKumpulan] = true;
				$tajuk  = 'Kumpulan ' . $noKumpulan . ' : ' . $namaKumpulan;
				$rows[] = makeCsvRow($seksyen, $kodKumpulan, $tajuk, '_', '_');
			}
			$kodAktif     = $kodKumpulan;
			$blockSeksyen = $seksyen;
			// Mod akan ditetapkan kepada 'jadual' apabila jumpa KELAS PERKARA
			$modBlok      = '';
			continue;
		}

		// ── 6b. Kesan "KUMPULAN XXX Nama..." ─────────────────────
		// Huruf besar semua (K dan U besar) = FORMAT NARATIF
		// Tajuk dioutput sekali sahaja (dedup). Huraian dikumpul.
		if (preg_match('/^KUMPULAN\s+(\d+)\s+(.*)/i', $trimmed, $m)
			&& $trimmed[0] === 'K' && isset($trimmed[1]) && $trimmed[1] === 'U'
		) {
			$flushCurrentBlock();
			$noKumpulan   = trim($m[1]);
			$namaKumpulan = trim($m[2]);
			$kodKumpulan  = $seksyen . $noKumpulan;        // cth. "B091"

			// Output tajuk hanya jika belum pernah dioutput
			if (!isset($outputtedKumpulan[$kodKumpulan])) {
				$outputtedKumpulan[$kodKumpulan] = true;
				$tajuk  = 'KUMPULAN ' . $noKumpulan . ' : ' . $namaKumpulan;
				$rows[] = makeCsvRow($seksyen, $kodKumpulan, $tajuk, '_', '_');
			}
			$kodAktif     = $kodKumpulan;
			$modBlok      = 'naratif';
			$blockSeksyen = $seksyen;
			continue;
		}

		// ── 7. Kesan notakaki dalam mod JADUAL "(N) ..." ─────────
		// Sebarang baris bermula "(N)" dalam blok jadual dianggap notakaki
		if ($modBlok === 'jadual' && preg_match('/^\(\d+\)/', $trimmed)) {
			$inFn = true;
		}

		// ── 8. Tambah baris ke buffer mengikut mod semasa ────────
		if ($modBlok === 'jadual') {
			if ($inFn) {
				$blockFn[] = $line;       // baris notakaki
			} else {
				$blockData[] = $line;     // baris data kelas
			}
		} elseif ($modBlok === 'naratif') {
			$blockNaratif[] = $line;      // huraian KUMPULAN naratif
		} elseif ($modBlok === 'bahagian-huraian') {
			$blockBahagian[] = $line;     // huraian BAHAGIAN
		}
	}

	// ── Flush blok terakhir dalam fail ───────────────────────────
	$flushCurrentBlock();

	return $rows;
}

// ============================================================
// Baca data mentah MSIC daripada fail luar
// Letakkan fail .txt dalam folder yang sama dengan msic_csv.php
// ============================================================
$failData = __DIR__ . '/notakaki-msic_data.txt';

if (!file_exists($failData)) {
	die(
		'<p style="font-family:sans-serif;color:red;padding:20px">'
		. '❌ Fail data tidak dijumpai: <code>' . htmlspecialchars($failData) . '</code><br>'
		. 'Sila letakkan fail <strong>msic_data.txt</strong> dalam folder yang sama.'
		. '</p>'
	);
}

$rawData = file_get_contents($failData);

// ============================================================
// Jalankan parser
// ============================================================
$csvRows = parseMsic($rawData);

?>
<!DOCTYPE html>
<html lang="ms">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>MSIC 2025 — Paparan CSV</title>
	<style>
		* {
			box-sizing: border-box;
			margin: 0;
			padding: 0;
		}

		body {
			font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
			background: #f0f2f5;
			color: #333;
			padding: 30px 20px;
		}

		h1 {
			font-size: 1.4rem;
			margin-bottom: 6px;
			color: #1a1a2e;
		}

		.subtitle {
			font-size: 0.85rem;
			color: #666;
			margin-bottom: 20px;
		}

		.stats {
			display: inline-block;
			background: #1a73e8;
			color: #fff;
			font-size: 0.78rem;
			padding: 4px 12px;
			border-radius: 20px;
			margin-bottom: 20px;
		}

		.csv-table-wrap {
			overflow-x: auto;
			background: #fff;
			border-radius: 10px;
			box-shadow: 0 2px 10px rgba(0,0,0,0.08);
		}

		table {
			width: 100%;
			border-collapse: collapse;
			font-size: 0.82rem;
		}

		thead tr {
			background: #1a73e8;
			color: #fff;
		}

		thead th {
			padding: 10px 14px;
			text-align: left;
			font-weight: 600;
			white-space: nowrap;
		}

		tbody tr:nth-child(odd) {
			background: #f9f9f9;
		}

		tbody tr:hover {
			background: #eaf2ff;
		}

		tbody td {
			padding: 8px 14px;
			vertical-align: top;
			border-bottom: 1px solid #eee;
		}

		/* Lajur 1 — Bil */
		td:nth-child(1),
		th:nth-child(1) { width: 40px; text-align: center; color: #aaa; }

		/* Lajur 2 — Seksyen */
		td:nth-child(2),
		th:nth-child(2) { width: 70px; text-align: center; }

		/* Lajur 3 — Kod */
		td:nth-child(3),
		th:nth-child(3) { width: 110px; font-family: monospace; color: #1a73e8; font-weight: 600; }

		/* Lajur 4 — Perkara */
		td:nth-child(4) { max-width: 340px; line-height: 1.6; }

		/* Lajur 5 — MSIC 2008 */
		td:nth-child(5),
		th:nth-child(5) { width: 160px; font-family: monospace; font-size: 0.75rem; color: #555; }

		/* Lajur 6 — Notakaki */
		td:nth-child(6) { max-width: 320px; font-size: 0.78rem; color: #555; line-height: 1.6; }

		/* Baris pengepala BAHAGIAN */
		tr.row-bahagian td {
			font-weight: 700;
			color: #fff;
			background: #1a1a2e;
		}

		tr.row-bahagian td:nth-child(3) {
			color: #90caf9;
		}

		/* Baris pengepala Kumpulan */
		tr.row-kumpulan td {
			font-weight: 600;
			color: #1a1a2e;
			background: #e8f0fe;
		}

		tr.row-kumpulan td:nth-child(3) {
			color: #c0392b;
		}

		/* Paparan CSV mentah */
		.raw-section {
			margin-top: 30px;
			background: #fff;
			border-radius: 10px;
			box-shadow: 0 2px 10px rgba(0,0,0,0.08);
			overflow: hidden;
		}

		.raw-header {
			background: #2d3436;
			color: #fff;
			padding: 10px 16px;
			font-size: 0.85rem;
			font-weight: 600;
			display: flex;
			justify-content: space-between;
			align-items: center;
		}

		.raw-header button {
			background: #636e72;
			color: #fff;
			border: none;
			padding: 4px 12px;
			border-radius: 4px;
			font-size: 0.78rem;
			cursor: pointer;
		}

		.raw-header button:hover {
			background: #b2bec3;
			color: #333;
		}

		pre#csvRaw {
			padding: 16px;
			font-size: 0.75rem;
			font-family: 'Courier New', monospace;
			line-height: 1.7;
			overflow-x: auto;
			white-space: pre-wrap;
			word-break: break-all;
			color: #2d3436;
			max-height: 400px;
			overflow-y: auto;
		}
	</style>
</head>
<body>

	<h1>📄 MSIC 2025 — Paparan CSV</h1>
	<p class="subtitle">
		Membaca daripada fail: <code><?= htmlspecialchars(basename($failData)) ?></code> &nbsp;|&nbsp;
		Auto-kesan format jadual &amp; naratif. Tiada fail CSV dijana.
	</p>
	<span class="stats"><?= count($csvRows) ?> baris dijana</span>

	<!-- ========================================================
	     JADUAL CSV (paparan mesra)
	======================================================== -->
	<div class="csv-table-wrap">
		<table>
			<thead>
				<tr>
					<th>#</th>
					<th>Seksyen</th>
					<th>Kod</th>
					<th>Perkara</th>
					<th>MSIC 2008</th>
					<th>Notakaki</th>
				</tr>
			</thead>
			<tbody>
				<?php
				$bil = 1;
				foreach ($csvRows as $row):
					// Parse semula baris CSV untuk paparan jadual
					$parts = str_getcsv($row, ';', '"');
					$col2  = $parts[1] ?? '';
					$col3  = $parts[2] ?? '';
					$col4  = $parts[3] ?? '';
					$col5  = $parts[4] ?? '_';
					$col6  = $parts[5] ?? '_';

					// Tentukan kelas baris berdasarkan kandungan Perkara
					$rowClass = '';
					if (str_starts_with($col4, 'BAHAGIAN')) {
						$rowClass = 'row-bahagian';
					} elseif (str_starts_with($col4, 'Kumpulan')) {
						$rowClass = 'row-kumpulan';
					}
				?>
				<tr class="<?= $rowClass ?>">
					<td><?= $bil++ ?></td>
					<td><?= htmlspecialchars($col2) ?></td>
					<td><?= htmlspecialchars($col3) ?></td>
					<td><?= htmlspecialchars($col4) ?></td>
					<td><?= htmlspecialchars($col5) ?></td>
					<td><?= $col6 !== '_' ? $col6 : '<span style="color:#ccc">_</span>' ?></td>
				</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</div><!-- /.csv-table-wrap -->

	<!-- ========================================================
	     PAPARAN CSV MENTAH
	======================================================== -->
	<div class="raw-section">
		<div class="raw-header">
			<span>📋 Format CSV Mentah</span>
			<button onclick="copyRaw()">Salin Semua</button>
		</div><!-- /.raw-header -->
		<pre id="csvRaw"><?php
			foreach ($csvRows as $row) {
				echo htmlspecialchars($row) . "\n";
			}
		?></pre>
	</div><!-- /.raw-section -->

	<script>
		function copyRaw() {
			const text = document.getElementById('csvRaw').innerText;
			navigator.clipboard.writeText(text).then(() => {
				alert('CSV berjaya disalin ke papan klip!');
			});
		}
	</script>

</body>
</html>