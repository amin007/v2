<?php

$raw = <<<EOT
BAHAGIAN 01 : PENGELUARAN TANAMAN DAN TERNAKAN, PEMBURUAN DAN AKTIVITI PERKHIDMATAN BERKAITAN
Kumpulan 014 : Pengeluaran ternakan

KELAS PERKARA KETERANGAN MSIC 2008
0141(1) Penternakan lembu dan kerbau
01411 Penternakan, pembiakan dan pengeluaran lembu(2) 01411p, 01413
01412 Penternakan, pembiakan dan pengeluaran kerbau 01411p
01413 Pengeluaran susu mentah daripada lembu atau kerbau 01412
0142(3) Penternakan kuda dan kuda lumba lain
01420 Penternakan dan pembiakan kuda, keldai, baghal atau hinnes 01420
0143 Penternakan unta dan camelid
01430 Penternakan dan pembiakan unta (dromedary) dan camelid 01430
0144(4) Penternakan biri-biri dan kambing
01441 Penternakan, pembiakan dan pengeluaran biri-biri 01441p
01442 Penternakan, pembiakan dan pengeluaran kambing 01441p
01443 Pengeluaran susu mentah biri-biri atau kambing 01442
01444 Pengeluaran bulu belum proses 01443
0145 Penternakan babi
01450 Penternakan, pembiakan dan pengeluaran babi 01450

(1) Tidak termasuk: pemprosesan susu, lihat 1050
(2) Termasuk: pengeluaran air mani lembu
(3) Termasuk: kuda lumba<br>Tidak termasuk: operasi kandang untuk kuda perlumbaan dan tunggangan, lihat 9319
(4) Tidak termasuk:<br>(a) pengguntingan bulu biri-biri berasaskan yuran atau kontrak, lihat  0162 <br>(b) pengeluaran bulu biri-biri, lihat 10103 <br>(c) pemprosesan susu, lihat 1050
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
				$noteParts[] = $footnotes[$fnNum];
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