<?php

$raw = <<<EOT
BAHAGIAN 01 : PENGELUARAN TANAMAN DAN TERNAKAN, PEMBURUAN DAN AKTIVITI PERKHIDMATAN BERKAITAN
Kumpulan 012 : Penanaman tanaman kekal

KELAS PERKARA KETERANGAN MSIC 2008
0128(1) Penanaman rempah ratus, aromatik dan tanaman untuk ubat
01281 Penanaman lada hitam (piper nigrum) 01281
01282 Penanaman sacha inchi 01289p
01283 Penanaman buah pala 01283
01284 Penanaman halia 01284
01285 Penanaman tanaman untuk perubatan, farmaseutikal, minyak wangi, racun serangga dan seumpamanya(2) 01285
01289 Penanaman tanaman rempah ratus dan aromatik lain t.t.t.l.(3) 01289
0129 Penanaman tanaman kekal lain
01291 Penanaman pokok getah (estet) 01291
01292 Penanaman pokok getah (kebun kecil) 01292
01293 Penanaman pokok untuk pengekstrakan sap(4) 01293
01294 Penanaman pokok nipah 01294
01295 Penanaman pokok pinang 01295
01299 Penanaman tanaman kekal lain t.t.t.l. (5) 01299


(1) Tidak termasuk: pengeringan rempah ratus, tumbuhan aromatik, perubatan dan  farmaseutikal secara pengeringan matahari jika dijalankan oleh unit yang berbeza, lihat 0163

(2) Termasuk: penanaman serai wangi, daun pandan dan bunga tanjung

(3) Termasuk: (a) penanaman pokok misai kucing (b) penanaman pokok tongkat ali (c) penanaman kayu manis dan bunga cengkih

(4) Tidak pengumpulan getah atau getah pokok daripada tumbuh-tumbuhan liar, termasuk: lihat 02309

(5) Termasuk: (a) penanaman pokok krismas (b) penanaman bahan tumbuhan yang lazim digunakan untuk dianyam (cth. mengkuang, buluh, rotan)
EOT;

// -----------------------------------------------
// Kumpul nota kaki dahulu
// -----------------------------------------------
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

	if (str_starts_with($line, 'BAHAGIAN')) {
		if (preg_match('/BAHAGIAN\s+(\d+)\s*:\s*(.+)/', $line, $m)) {
			$rows[] = ['', 'A', $m[1], "BAHAGIAN {$m[1]} : " . trim($m[2]), '_', '_'];
		}
		continue;
	}

	if (str_starts_with($line, 'Kumpulan')) {
		if (preg_match('/Kumpulan\s+(\w+)\s*:\s*(.+)/', $line, $m)) {
			$rows[] = ['', 'A', $m[1], "Kumpulan {$m[1]} : " . trim($m[2]), '_', '_'];
		}
		continue;
	}

	if (preg_match('/^KELAS\s+PERKARA/', $line)) {
		continue;
	}

	if (preg_match('/^(\d{4,5})(\(\d+\))?\s+(.+?)(?:\s+(\d{5}))?$/', $line, $m)) {
		$codeClean = $m[1];
		$descRaw   = trim($m[3]);
		$msicCode  = isset($m[4]) && $m[4] !== '' ? $m[4] : '_';

		preg_match_all('/\((\d+)\)/', $descRaw, $fnMatches);
		$desc = $descRaw;

		$noteParts = [];
		foreach ($fnMatches[1] as $fnNum) {
			if (isset($footnotes[$fnNum])) {
				$noteParts[] = $footnotes[$fnNum];
			}
		}
		$noteText = count($noteParts) > 0 ? implode('; ', $noteParts) : '_';

		if (strlen($codeClean) === 4) {
			$msicCode = '_';
		}

		$rows[] = ['', 'A', $codeClean, $desc, $msicCode, $noteText];
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