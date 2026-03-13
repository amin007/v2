<?php

// ============================================================
// Data mentah MSIC
// ============================================================
$rawData = <<<EOT
MSIC 2025 SEKSYEN B
B - 5
BAHAGIAN 06 PENGEKSTRAKAN PETROLEUM MENTAH DAN GAS ASLI

Bahagian ini termasuk pengeluaran petroleum mentah, perlombongan dan
pengekstrakan minyak daripada minyak batu syal dan pasir minyak dan
pengeluaran gas asli dan perolehan semula cecair hidrokarbon. Ini termasuk
keseluruhan aktiviti pengoperasian dan/atau pembangunan kelengkapan
lapangan minyak dan gas, termasuklah aktiviti seperti penggerudian,
penyiapan
dan melengkapkan telaga, operasi pengasingan, pemisahan emulsi, peralatan
penyahkelodak dan penyambungan aktiviti lapangan untuk petroleum mentah
dan semua aktiviti dalam penyediaan minyak dan gas sehingga ke tempat
penghantaran daripada pusat pengeluaran.

<br><br>Bahagian ini tidak termasuk aktiviti sokongan bagi pengekstrakan
petroleum dan
gas seperti perkhidmatan lapangan minyak dan gas, yang dibuat berdasarkan
kontrak atau bayaran, eksplorasi telaga minyak dan gas dan ujian
penggerudian
dan aktiviti penggerekan (boring) (lihat kelas 0910). Bahagian ini juga
tidak
termasuk penapisan produk petroleum (lihat kelas 1920) dan aktiviti
pengukuran
geofizikal, geologi dan seismic (lihat kelas 7110).

KUMPULAN 061 Pengekstrakan petroleum mentah

Kumpulan ini termasuk pengekstrakan minyak petroleum mentah,
pengekstrakan bitumen atau syal minyak dan pasir tar, pengeluaran petroleum
mentah daripada syal bitumen dan pasir, proses untuk mendapatkan minyak
mentah cth. penyaringan, penyahgaraman, penyahhidratan, penstabilan.

<br><br>Kumpulan ini tidak termasuk aktiviti sokongan untuk pengekstrakan minyak
dan
gas asli (lihat kelas 0910). Penerokaan minyak dan gas juga dikecualikan
dan
berada di bawah kelas yang sama 0910. Pembuatan produk petroleum bertapis,
serta pemulihan gas petroleum cecair semasa penapisan petroleum (lihat
kelas
1920). Operasi saluran paip diliputi di bawah kelas 4930, manakala
pengekstrakan kondensat atau cecair gas asli (lihat kelas 0620).

KUMPULAN 062 Pengekstrakan gas asli

Kumpulan ini termasuk pengeluaran hidrokarbon gas mentah (gas asli),
pengekstrakan cecair gas asli dari kemudahan lapangan, penyaliran dan
pengasingan pecahan hidrokarbon cecair, penyahsulfuran gas, pengekstrakan
metana lombong arang batu, perlombongan cecair hidrokarbon, diperoleh
melalui pencairan atau pirolisis dan pengekstrakan gas arang batu (coal
seam
gas).

<br><br>Kumpulan ini tidak termasuk, aktiviti sokongan untuk pengekstrakan
minyak dan
gas asli (lihat kelas 0910). Penerokaan minyak dan gas (lihat kelas 0910).
Pengeluaran cecair gas asli daripada petroleum mentah (minyak mentah), dan
pemulihan gas petroleum cecair dalam penapisan petroleum (lihat kelas
1920).
Pembuatan gas perindustrian (lihat kelas 2011), dan pengendalian saluran
paip
(lihat kelas 4930).

EOT;

// ============================================================
// Fungsi: Bersihkan spasi berlebihan & cantumkan baris jadi satu
// ============================================================
function cleanText(string $text): string
{
	// Gantikan newline & tab dengan satu ruang
	$text = preg_replace('/\s+/', ' ', $text);
	return trim($text);
}

// ============================================================
// Fungsi: Jana satu baris CSV dalam format "";"X";"KOD";"TEKS";"_";"_"
// ============================================================
function makeCsvRow(string $seksyen, string $kod, string $teks): string
{
	// Escape double-quote dalam teks dengan dua double-quote
	$seksyen = str_replace('"', '""', $seksyen);
	$kod     = str_replace('"', '""', $kod);
	$teks    = str_replace('"', '""', $teks);

	// Gantikan ; dalam teks dengan / supaya tidak bercanggah dengan pemisah CSV
	$teks    = str_replace(';', ' /', $teks);

	return '"";' . "\"$seksyen\";\"$kod\";\"$teks\";\"_\";\"_\"";
}

// ============================================================
// Parser utama
// ============================================================
function parseMsic(string $raw): array
{
	$rows    = [];
	$lines   = explode("\n", $raw);

	$seksyen       = '';   // contoh: A
	$currentKod    = '';   // contoh: A02 atau A021
	$currentTajuk  = '';   // tajuk bahagian / kumpulan
	$bufferHuraian = [];   // baris huraian sedang dikumpul
	$mod           = '';   // 'bahagian' atau 'kumpulan'

	// Fungsi dalaman: flush buffer huraian ke $rows
	$flush = function () use (&$rows, &$seksyen, &$currentKod, &$bufferHuraian) {
		if (!empty($bufferHuraian)) {
			$huraian = cleanText(implode(' ', $bufferHuraian));
			if ($huraian !== '') {
				$rows[] = makeCsvRow($seksyen, $currentKod, $huraian);
			}
			$bufferHuraian = [];
		}
	};

	foreach ($lines as $line) {
		$line = rtrim($line);

		// ----------------------------------------------------------
		// 1. Kesan "MSIC 2025 SEKSYEN X" — ambil huruf seksyen
		// ----------------------------------------------------------
		if (preg_match('/^MSIC\s+\d+\s+SEKSYEN\s+([A-Z])/i', $line, $m)) {
			$seksyen = strtoupper($m[1]);
			continue;
		}

		// ----------------------------------------------------------
		// 2. Kesan "BAHAGIAN XX ..."
		// ----------------------------------------------------------
		if (preg_match('/^BAHAGIAN\s+(\d+)\s+(.+)/i', $line, $m)) {
			$flush();
			$noBahagian   = $m[1];
			$namaBahagian = trim($m[2]);
			$currentKod   = $seksyen . $noBahagian;   // cth: A02
			$tajuk        = "BAHAGIAN $noBahagian : " . strtoupper($namaBahagian);
			$rows[]       = makeCsvRow($seksyen, $currentKod, $tajuk);
			$mod          = 'bahagian';
			continue;
		}

		// ----------------------------------------------------------
		// 3. Kesan "KUMPULAN XXX ..."
		// ----------------------------------------------------------
		if (preg_match('/^KUMPULAN\s+(\d+)\s+(.+)/i', $line, $m)) {
			$flush();
			$noKumpulan   = $m[1];
			$namaKumpulan = trim($m[2]);
			$currentKod   = $seksyen . $noKumpulan;   // cth: A021
			$tajuk        = "KUMPULAN $noKumpulan : $namaKumpulan";
			$rows[]       = makeCsvRow($seksyen, $currentKod, $tajuk);
			$mod          = 'kumpulan';
			continue;
		}

		// ----------------------------------------------------------
		// 4. Abaikan baris pengepala halaman cth. "A - 19"
		// ----------------------------------------------------------
		if (preg_match('/^[A-Z]\s*-\s*\d+$/', trim($line))) {
			continue;
		}

		// ----------------------------------------------------------
		// 5. Baris kosong — abaikan sahaja (jangan flush di sini)
		// ----------------------------------------------------------
		if (trim($line) === '') {
			continue;
		}

		// ----------------------------------------------------------
		// 6. Baris huraian biasa — tambah ke buffer
		// ----------------------------------------------------------
		if ($currentKod !== '') {
			$bufferHuraian[] = $line;
		}
	}

	// Flush akhir
	$flush();

	return $rows;
}

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

		/* Lajur 1 — kosong */
		td:nth-child(1), th:nth-child(1) { width: 40px; text-align: center; color: #aaa; }

		/* Lajur 2 — Seksyen */
		td:nth-child(2), th:nth-child(2) { width: 70px; text-align: center; }

		/* Lajur 3 — Kod */
		td:nth-child(3), th:nth-child(3) { width: 90px; font-family: monospace; color: #1a73e8; font-weight: 600; }

		/* Lajur 4 — Teks */
		td:nth-child(4) { max-width: 600px; line-height: 1.6; }

		/* Lajur 5 & 6 */
		td:nth-child(5), td:nth-child(6),
		th:nth-child(5), th:nth-child(6) { width: 50px; text-align: center; color: #bbb; }

		/* Baris tajuk (BAHAGIAN / KUMPULAN) */
		tr.row-tajuk td {
			font-weight: 700;
			color: #1a1a2e;
			background: #e8f0fe;
		}

		tr.row-tajuk td:nth-child(3) {
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

	<!-- ======================================================
		 JADUAL CSV (paparan mesra)
	====================================================== -->
	<div class="csv-table-wrap">
		<table>
			<thead>
				<tr>
					<th>#</th>
					<th>Seksyen</th>
					<th>Kod</th>
					<th>Teks</th>
					<th>_</th>
					<th>_</th>
				</tr>
			</thead>
			<tbody>
				<?php
				$bil = 1;
				foreach ($csvRows as $row):
					// Parse balik baris CSV untuk paparan jadual
					// Format: "";"A";"A02";"TEKS";"_";"_"
					$parts = str_getcsv($row, ';', '"');
					$col1  = $parts[0] ?? '';
					$col2  = $parts[1] ?? '';
					$col3  = $parts[2] ?? '';
					$col4  = $parts[3] ?? '';
					$col5  = $parts[4] ?? '_';
					$col6  = $parts[5] ?? '_';

					// Tentukan sama ada baris tajuk atau huraian
					$isTajuk = str_starts_with($col4, 'BAHAGIAN')
							|| str_starts_with($col4, 'KUMPULAN');
					$rowClass = $isTajuk ? 'row-tajuk' : '';
				?>
				<tr class="<?= $rowClass ?>">
					<td><?= $bil++ ?></td>
					<td><?= htmlspecialchars($col2) ?></td>
					<td><?= htmlspecialchars($col3) ?></td>
					<td><?= htmlspecialchars($col4) ?></td>
					<td><?= htmlspecialchars($col5) ?></td>
					<td><?= htmlspecialchars($col6) ?></td>
				</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</div><!-- /.csv-table-wrap -->

	<!-- ======================================================
		 PAPARAN CSV MENTAH
	====================================================== -->
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