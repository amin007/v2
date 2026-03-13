<?php

// ============================================================
// Fungsi: Sanitize teks — tukar ; kepada ' / '
// ============================================================
function sanitizeText(string $text): string
{
	return str_replace(';', ' / ', $text);
}

// ============================================================
// Fungsi: Jana satu baris CSV
// Format: "";"SEKSYEN";"KOD";"PERKARA";"MSIC2008";"NOTAKAKI"
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
// Fungsi: Parse notakaki daripada array baris
// Pulangkan: ['1' => 'teks notakaki...', '2' => 'teks...']
// ============================================================
function parseFootnotes(array $lines): array
{
	$footnotes   = [];
	$currentNum  = null;
	$currentText = '';

	foreach ($lines as $line) {
		$trimmed = trim($line);
		if ($trimmed === '') continue;

		// Baris baru notakaki: bermula dengan (N)
		if (preg_match('/^\((\d+)\)\s*(.*)/', $trimmed, $m)) {
			if ($currentNum !== null) {
				$footnotes[$currentNum] = trim($currentText);
			}
			$currentNum  = $m[1];
			$currentText = $m[2];
		} elseif ($currentNum !== null) {
			// Sambungan baris notakaki yang panjang
			$currentText .= ' ' . $trimmed;
		}
	}

	// Flush notakaki terakhir
	if ($currentNum !== null) {
		$footnotes[$currentNum] = trim($currentText);
	}

	return $footnotes;
}

// ============================================================
// Fungsi: Proses blok data satu Kumpulan → jana baris CSV
// ============================================================
function flushBlock(array &$rows, string $seksyen, array $dataLines, array $fnLines): void
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
// Parser utama — format jadual MSIC
// ============================================================
function parseMsicTabular(string $raw): array
{
	$rows    = [];
	$lines   = explode("\n", $raw);
	$seksyen = 'A';

	// Buffer blok semasa (antara dua pengepala Kumpulan)
	$blockData    = [];
	$blockFn      = [];
	$blockSeksyen = 'A';
	$inFn         = false;

	// Rekod BAHAGIAN yang sudah dioutput — elak duplikasi pengepala halaman
	$outputtedBahagian = [];

	// Closure: flush dan kosongkan blok semasa
	$flushCurrentBlock = function () use (&$rows, &$blockData, &$blockFn, &$blockSeksyen, &$inFn): void {
		if (!empty($blockData)) {
			flushBlock($rows, $blockSeksyen, $blockData, $blockFn);
		}
		$blockData = [];
		$blockFn   = [];
		$inFn      = false;
	};

	foreach ($lines as $line) {
		$trimmed = trim($line);

		// 1. Kesan "MSIC 2025 SEKSYEN X" — kemas kini huruf seksyen
		if (preg_match('/^MSIC\s+\d+\s+SEKSYEN\s+([A-Z])/i', $trimmed, $m)) {
			$seksyen = strtoupper($m[1]);
			continue;
		}

		// 2. Abaikan pengepala halaman cth. "A - 22"
		if (preg_match('/^[A-Z]\s*-\s*\d+$/', $trimmed)) continue;

		// 3. Abaikan pengepala jadual
		if (preg_match('/^KELAS\s+PERKARA/i', $trimmed)) continue;

		// 4. Abaikan baris kosong
		if ($trimmed === '') continue;

		// 5. Kesan "BAHAGIAN XX : Nama..."
		if (preg_match('/^BAHAGIAN\s+(\d+)\s*[:\-]?\s*(.*)/i', $trimmed, $m)) {
			$noBahagian   = trim($m[1]);
			$namaBahagian = trim($m[2]);
			$key          = $noBahagian . '|' . strtolower($namaBahagian);

			if (!isset($outputtedBahagian[$key])) {
				$outputtedBahagian[$key] = true;
				$tajuk  = 'BAHAGIAN ' . $noBahagian . ' : ' . strtoupper($namaBahagian);
				$rows[] = makeCsvRow($seksyen, $noBahagian, $tajuk, '_', '_');
			}
			continue;
		}

		// 6. Kesan "Kumpulan XXX : Nama..."
		if (preg_match('/^Kumpulan\s+(\d+)\s*[:\-]?\s*(.*)/i', $trimmed, $m)) {
			$flushCurrentBlock();
			$noKumpulan   = trim($m[1]);
			$namaKumpulan = trim($m[2]);
			$tajuk        = 'Kumpulan ' . $noKumpulan . ' : ' . $namaKumpulan;
			$rows[]       = makeCsvRow($seksyen, $noKumpulan, $tajuk, '_', '_');
			$blockSeksyen = $seksyen;
			continue;
		}

		// 7. Kesan baris notakaki — bermula dengan "(N)"
		if (preg_match('/^\(\d+\)/', $trimmed)) {
			$inFn = true;
		}

		// 8. Tambah ke buffer blok semasa
		if ($inFn) {
			$blockFn[] = $line;
		} else {
			$blockData[] = $line;
		}
	}

	// Flush blok terakhir
	$flushCurrentBlock();

	return $rows;
}

// ============================================================
// Data mentah MSIC — format jadual (Bahagian 02)
// ============================================================
$rawData = <<<'EOT'
MSIC 2025 SEKSYEN B

B - 6
BAHAGIAN 06 : PENGEKSTRAKAN PETROLEUM MENTAH DAN GAS ASLI
Kumpulan 061 : Pengekstrakan petroleum mentah

KELAS PERKARA KETERANGAN MSIC 2008
0610(1) Pengekstrakan petroleum mentah
06100 Pengekstrakan petroleum mentah(1) 06101, 06102, 06103, 06104


(1) Termasuk:<br>(a) pengekstrakan minyak petroleum mentah
<br>(b) pengekstrakan bitumen atau minyak batu syal dan pasir tar
<br>(c) pengeluaran petroleum mentah daripada batu syal dan pasir berbitumen
<br>(d) proses mendapatkan minyak mentah termasuk penyaringan, penyahgaraman, penyahhidratan, penstabilan

<br><br>Tidak termasuk: <br>(a) aktiviti sokongan bagi pengekstrakan minyak dan gas, lihat 09101
<br>(b) penerokaan minyak dan gas, lihat 09101
<br>(c) pembuatan produk petroleum bertapis, lihat 19201
<br>(d) perolehan semula gas petroleum cecair semasa penapisan petroleum, lihat 19201
<br>(e) pengendalian saluran paip, lihat 49300
<br>(f) pengekstrakan kondensat*/pemeluwapan atau cecair gas asli, lihat 0620

MSIC 2025 SEKSYEN B
B - 7
BAHAGIAN 06 : PENGEKSTRAKAN PETROLEUM MENTAH DAN GAS ASLI
Kumpulan 062 : Pengekstrakan gas asli

KELAS PERKARA KETERANGAN MSIC 2008
0620(1) Pengekstrakan gas asli
06201 Pengekstrakan gas asli(1) 06201, 06203, 06204, 06205
06202 Pengekstrakan kondensat*/pemeluwapan(2) 06202

(1) Termasuk: <br>(a) pengeluaran hidrokarbon mentah bergas (gas asli)
<br>(b) pengekstrakan cecair gas asli daripada kemudahan lapangan
<br>(c) penyaliran dan pemisahan komponen hidrokarbon cecair
<br>(d) penyahsulfuran gas
<br>(e) pengekstrakan metana lombong arang batu
<br>(f) perlombongan cecair hidrokarbon, diperoleh melalui pencairan atau penguraian kimia (pyrolisis)
<br>(g) pengekstrakan gas arang batu (coal seam gas)

<br><br>Tidak termasuk: <br>(a) aktiviti sokongan bagi pengekstrakan minyak dan gas, lihat 09101
<br>(b) ekplorasi minyak dan gas, lihat 09101
<br>(c) pembuatan produk petroleum bertapis, lihat 19201
<br>(d) pengeluaran cecair gas asli daripada petroleum mentah (minyak mentah), dan perolehan semula gas petroleum cecair semasa penapisan petroleum, lihat 19201
<br>(e) pembuatan gas perindustrian, lihat 20111
<br>(f) pengendalian saluran paip, lihat 49300

(2)[kondensat* = bahasa indonedia. dulu semasa belajar fizik tingkatan 5 (spm), kondensat=pemeluwapan. Definisi : proses perubahan keadaan sesuatu bahan daripada wap(gas) kepada cecair, kon­densasi. (Kamus Dewan Edisi Keempat)]
EOT;

// ============================================================
// Jalankan parser
// ============================================================
$csvRows = parseMsicTabular($rawData);

?>
<!DOCTYPE html>
<html lang="ms">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>MSIC 2025 - Keterangan dan Notakaki</title>
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
	<p class="subtitle">Data diproses terus daripada teks mentah. Tiada fail CSV dijana.</p>
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