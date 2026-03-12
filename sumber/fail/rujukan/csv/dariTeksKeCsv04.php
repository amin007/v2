<?php

$raw = <<<EOT
BAHAGIAN 01 : PENGELUARAN TANAMAN DAN TERNAKAN, PEMBURUAN DAN AKTIVITI PERKHIDMATAN BERKAITAN
Kumpulan 017 : Pemburuan, penjeratan dan aktiviti perkhidmatan berkaitan

KELAS PERKARA KETERANGAN MSIC 2008
0170(1) Pemburuan, penjeratan dan aktiviti perkhidmatan berkaitan
01701 Pemburuan dan penjeratan haiwan secara komersial(1) 01701
01702 Penangkapan haiwan liar (hidup atau mati)(2) 01702

(1) Termasuk: pengeluaran kulit daripada pemburuan dan penjeratan haiwan <br>Tidak termasuk: <br>(a) pengeluaran kulit berbulu, kulit burung atau reptilia dari operasi  ladang ternakan, lihat 01492 <br>(b) operasi pemeliharaan haiwan untuk sukan di ladang ternakan, lihat 0149 <br>(c) penangkapan ikan paus, lihat 0311 <br>(d) pengeluaran kulit daripada rumah penyembelihan, lihat 1010 <br>(e) pemburuan untuk aktiviti sukan atau rekreasi dan aktiviti perkhidmatan berkaitan, lihat 93199 <br>(f) aktiviti perkhidmatan untuk mempromosi pemburuan dan penjeratan haiwan, lihat 94990

(2) Termasuk: penangkapan haiwan liar (hidup atau mati) untuk makanan, bulu, kulit, untuk kawalan populasi haiwan atau digunakan dalam penyelidikan, di zoo atau haiwan peliharaan

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
		$rows[] = ['', 'A', $kodPapar, $desc, $msicCode, $noteText];
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