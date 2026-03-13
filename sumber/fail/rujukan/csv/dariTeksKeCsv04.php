<?php

$raw = <<<EOT
MSIC 2025 SEKSYEN A
BAHAGIAN 02 : PERHUTANAN DAN PEMBALAKAN
Kumpulan 021 : Silvikultur dan aktiviti perhutanan lain

KELAS PERKARA KETERANGAN MSIC 2008
0210(1) Silvikultur dan aktiviti perhutanan lain
02101 Penanaman, penanaman semula, pemindahan, pengurusan dan pemuliharaan hutan dan kawasan lapang(2) 02101
02102 Penanaman untuk tunas semula, kayu pulpa dan kayu api 02102
02103 Operasi tapak semaian pokok hutan(3) 02103
02104 Pengumpulan dan pemeliharaan hutan liar(spesis pokok hutan paya gambut) 02104
02105 Ladang hutan 02105

(1) Tidak termasuk:<br>(a) penanaman pokok krismas, lihat 01299 <br>(b) operasi tapak semaian pokok (bukan hutan), lihat 01304 <br>(c) pengumpulan produk hasil hutan bukan kayu yang tumbuh liar, lihat 0230 <br>(d) pengeluaran reja kayu dan partikel, lihat 16100 <br>(e) aktiviti berkaitan penjagaan pokok hiasan dan arborikultur, lihat 8130

(2) Termasuk:<br>(a) penanaman semula penambahbaikan (enrichment planting) <br>(b) penanaman pokok bakau <br>(c) penanaman rotan <br>(d) penanaman di kawasan lapang <br>(e) penanaman buluh <br>(f) penanaman di lebuh raya <br>(g) penanaman di persisiran pantai <br>(h) penanaman pokok nibong/pokok sagu

(3) Termasuk: tapak semaian untuk ladang hutan

MSIC 2025 SEKSYEN A
A - 22
BAHAGIAN 02 : PERHUTANAN DAN PEMBALAKAN
Kumpulan 022 : Pembalakan

KELAS PERKARA KETERANGAN MSIC 2008
0220(11) Pembalakan
02201 Pengeluaran kayu balak untuk industri berasaskan kayu 02201p
02202 Pengeluaran kayu balak yang digunakan dalam bentuk belum proses(22) 02202p
02203 Pengeluaran arang kayu dalam hutan (kaedah tradisional)(33) 02203p
02204 Pembalakan kayu getah 02204p
02205 Pengumpulan kayu balak (44) 02201p,02202p,02203p,02204p

(11) Tidak termasuk:<br>(a) penanaman pokok krismas, lihat 01299 <br>(b) penuaian pokok berputar cepat untuk tanaman tenaga (cth. pokok poplar dan willow) secara berasaskan bayaran atau kontrak, lihat 0161 <br>(c) penanaman dirian pokok: penanaman, penanaman semula, pemindahan, penjarangan dan pemuliharaan hutan serta kawasan kayu balak, lihat 02101 <br>(d) pengumpulan produk hasil hutan bukan kayu yang tumbuh liar, lihat 0230 <br>(e) pengeluaran reja kayu dan partikel yang tidak berkaitan dengan pembalakan, lihat 16100 <br>(f) pengeluaran arang melalui distilasi kayu, lihat 16291 

(22) Termasuk: kayu cerucuk, kayu pagar dan kayu jaras
(33) Termasuk: pengumpulan kulit kayu (spesies hutan darat, hutan paya laut dan gelam) dan kayu api
(44) Termasuk: pengumpulan dan pengeluaran sisa penuaian hutan oleh isi rumah sahaja, cth. ranting kecil, tunggul, serpihan kayu daripada pembalakan dan sisa hutan lain untuk tenaga

MSIC 2025 SEKSYEN A
A - 23
BAHAGIAN 02 : PERHUTANAN DAN PEMBALAKAN
Kumpulan 023 : Pengumpulan produk hasil hutan bukan kayu

KELAS PERKARA KETERANGAN MSIC 2008
0230(111) Pengumpulan produk hasil hutan bukan kayu
02301 Pengumpulan rotan, buluh 02301
02302 Pemungutan sarang burung 02302
02303 Pengumpulan pokok sagu liar 02303
02309 Pengumpulan produk hutan bukan kayu t.t.t.l.(222) 02309

(111) Tidak <br>(a) mengurus pengeluaran bagi mana-mana produk ini (kecuali termasuk: penanaman pokok gabus), lihat bahagian 01 <br>(b) penanaman cendawan atau trufel, lihat 01134 <br>(c) penanaman buah beri atau buah berkulit keras, lihat 0125 <br>(d) pengumpulan kayu api, lihat 02203

(222) Termasuk: <br>(a) pengumpulan sap daripada pokok liar (cth. damar) <br>(b) berserat atau buah-buahan (cth. berangan, keranji, kerdas, petai) <br>(c) daun (cth. bertam, nipah, kajang, kubin, daun kecil) <br>(d) minyak daripada kayu hutan (cth. keruing dll.) <br>(e) akar (cth. akar laka) <br>(f) lilin lebah dan madu <br>(g) cendawan atau trufel <br>(h) buah beri atau kekacang <br>(i) getah balata dan getah seakan getah asli yang lain, gabus, lak dan resin, balsam, biji buah oak, buah berangan kuda, lumut serta liken <br>(j) rambut sayur/rumpai laut (eelgrass) <br>(k) penuaian herba liar dan pengeringan semula jadi yang berkaitan

EOT;
// -----------------------------------------------
// Kumpul nota kaki dahulu
// -----------------------------------------------
$seksyen = '';
$footnotes  = [];
$cleanLines = [];
$lines      = explode("\n", trim($raw));

foreach ($lines as $line) {
	$line = trim($line);
	if ($line === '') continue;

	if (preg_match('/^\((\d+)\)\s+(.+)/', $line, $m)) {
		$footnotes[$m[1]] = trim($m[2]);
	} else {
		$cleanLines[] = $line;
	}
}

// -----------------------------------------------
// Parse setiap baris
// -----------------------------------------------
$rows = [];

foreach ($cleanLines as $line) {
	
	// ----------------------------------------------------------
	// 1. Kesan "MSIC 2025 SEKSYEN X" — ambil huruf seksyen
	// ----------------------------------------------------------
	if (str_starts_with($line, 'MSIC')) {
		if (preg_match('/^MSIC\s+\d+\s+SEKSYEN\s+([A-Z])/i', $line, $m)) {
			$seksyen = strtoupper($m[1]);
		}
		continue;
	}


	if (str_starts_with($line, 'BAHAGIAN')) {
		if (preg_match('/BAHAGIAN\s+(\d+)\s*:\s*(.+)/', $line, $m)) {
			$rows[] = ['', $seksyen, $m[1], "BAHAGIAN {$m[1]} : " . trim($m[2]), '_', '_'];
		}
		continue;
	}

	if (str_starts_with($line, 'Kumpulan')) {
		if (preg_match('/Kumpulan\s+(\w+)\s*:\s*(.+)/', $line, $m)) {
			$rows[] = ['', $seksyen, $m[1], "Kumpulan {$m[1]} : " . trim($m[2]), '_', '_'];
		}
		continue;
	}

	if (preg_match('/^KELAS\s+PERKARA/', $line)) {
		continue;
	}

	if (preg_match('/^(\d{4,5})(\(\d+\))?\s+(.+?)(?:\s+(\d{5}[a-zA-Z]?))?$/', $line, $m)) {
		$codeClean    = $m[1];
		$codeFnSuffix = $m[2] ?? '';   // contoh: (1) pada 0128(1)
		$descRaw      = trim($m[3]);
		$msicCode     = isset($m[4]) && $m[4] !== '' ? $m[4] : '_';

		// Kumpul nombor nota kaki: dari bahagian kod DAN dari penerangan
		preg_match_all('/\((\d+)\)/', $codeFnSuffix . ' ' . $descRaw, $fnMatches);
		$desc = $descRaw;

		$noteParts = [];
		foreach ($fnMatches[1] as $fnNum) {
			if (isset($footnotes[$fnNum])) {
				$noteParts[] = "($fnNum)" . $footnotes[$fnNum];
			}
		}
		$noteText = count($noteParts) > 0 ? implode('; ', $noteParts) : '_';

		if (strlen($codeClean) === 4) {
			$msicCode = '_';
		}

		$kodPapar = $codeClean . $codeFnSuffix;
		$rows[] = ['', $seksyen, $kodPapar, $desc, $msicCode, $noteText];
	}
}

// -----------------------------------------------
// Fungsi format satu baris CSV
// -----------------------------------------------
function formatCSV(array $row): string
{
	$cells = array_map(function ($cell) {
		$cell = str_replace('"', '""', $cell);
		return '"' . $cell . '"';
	}, $row);

	return implode(';', $cells);
}

?>
<!DOCTYPE html>
<html lang="ms">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Semak Output CSV</title>
	<style>
		body {
			font-family: monospace;
			font-size: 14px;
			background: #1e1e1e;
			color: #d4d4d4;
			padding: 20px;
		}

		h2 {
			font-family: sans-serif;
			color: #9cdcfe;
			margin-bottom: 4px;
		}

		.info {
			font-family: sans-serif;
			font-size: 13px;
			color: #888;
			margin-bottom: 16px;
		}

		.baris {
			display: flex;
			gap: 10px;
			align-items: baseline;
			padding: 4px 8px;
			border-radius: 4px;
		}

		.baris:hover {
			background: #2a2a2a;
		}

		.no {
			color: #555;
			min-width: 32px;
			text-align: right;
			user-select: none;
		}

		.csv-text {
			color: #ce9178;
			word-break: break-all;
		}

		/* Warna berbeza ikut jenis baris */
		.baris.bahagian .csv-text { color: #4ec9b0; }
		.baris.kumpulan .csv-text { color: #9cdcfe; }
		.baris.kelas    .csv-text { color: #dcdcaa; }
		.baris.item     .csv-text { color: #ce9178; }
	</style>
</head>
<body>

	<h2>Semak Output CSV</h2>
	<p class="info">Jumlah baris: <?= count($rows) ?> &nbsp;|&nbsp; Warna: <span style="color:#4ec9b0">■ Bahagian</span> &nbsp;<span style="color:#9cdcfe">■ Kumpulan</span> &nbsp;<span style="color:#dcdcaa">■ Kelas</span> &nbsp;<span style="color:#ce9178">■ Item</span></p>

	<?php foreach ($rows as $i => $row):
		$kod   = $row[2];
		$jenis = 'item';

		if (str_starts_with($row[3], 'BAHAGIAN')) {
			$jenis = 'bahagian';
		} elseif (str_starts_with($row[3], 'Kumpulan')) {
			$jenis = 'kumpulan';
		} elseif (strlen($kod) === 4) {
			$jenis = 'kelas';
		}
	?>
		<div class="baris <?= $jenis ?>">
			<span class="no"><?= $i + 1 ?></span>
			<span class="csv-text"><?= htmlspecialchars(formatCSV($row)) ?></span>
		</div>
	<?php endforeach; ?>

</body>
</html>