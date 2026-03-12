<?php

$raw = <<<END
BAHAGIAN 01 : PENGELUARAN TANAMAN DAN TERNAKAN, PEMBURUAN DAN AKTIVITI PERKHIDMATAN BERKAITAN
Kumpulan 012 : Penanaman tanaman kekal
KELAS PERKARA KETERANGAN MSIC 2008
0124 Penanaman buah-buahan delima dan buah-buahan berbiji
01241 Penanaman jambu batu 01241
01249 Penanaman buah-buahan delima dan berbiji lain t.t.t.l. 01249
0125(1) Penanaman pokok lain dan buah-buahan bertandan dan kekacang
01251 Penanaman buah beri(2) 01251
01252 Penanaman biji benih buah-buahan 01252
01253 Penanaman kekacang yang boleh dimakan(3) 01253
01259 Penanaman pokok dan buah-buahan bertandan lain(4) 01259
0126(5) Penanaman buah untuk minyak (oleaginus)
01261 Penanaman kelapa sawit (estet) 01261
01262 Penanaman kelapa sawit (kebun kecil) 01262
01263 Penanaman kelapa (estet dan kebun kecil) 01263
01269 Penanaman buah-buah lain untuk minyak t.t.t.l. 01269
0127 Penanaman tanaman minuman
01271 Penanaman kopi 01271
01272 Penanaman teh 01272
01273 Penanaman koko 01273
01279 Penanaman tanaman minuman lain t.t.t.l. 01279
(1) Tidak termasuk: (a) penanaman kelapa, lihat 01263 (b) pengutipan beri atau kekacang, lihat 02309
(2) Termasuk: strawberi, beri biru, currants, buah cermai, buah kiwi, raspberi dan buah beri lain
(3) Termasuk: penanaman badam, gajus, buah berangan, kacang hazel, kacang pistachio, walnut
(4) Termasuk: penanaman kacang belalang
(5) Tidak termasuk: penanaman kacang soya, kacang tanah dan bijian lain untuk minyak lihat 0111
END;

// -----------------------------------------------
// Fungsi tulis satu baris CSV
// -----------------------------------------------
function tulisBarisCSV(array $row): string
{
    $cells = array_map(function ($cell) {
        $cell = str_replace('"', '""', $cell);
        return '"' . $cell . '"';
    }, $row);

    return implode(';', $cells) . "\n";
}

// -----------------------------------------------
// Kumpul nota kaki dahulu
// -----------------------------------------------
$footnotes  = [];
$cleanLines = [];
$lines      = explode("\n", trim($raw));

foreach ($lines as $line) {
    $line = trim($line);
    if ($line === '') continue;

    // Padankan baris nota kaki: (1) Teks...
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

    // Baris BAHAGIAN
    if (str_starts_with($line, 'BAHAGIAN')) {
        if (preg_match('/BAHAGIAN\s+(\d+)\s*:\s*(.+)/', $line, $m)) {
            $rows[] = ['', 'A', $m[1], "BAHAGIAN {$m[1]} : " . trim($m[2]), '_', '_'];
        }
        continue;
    }

    // Baris Kumpulan
    if (str_starts_with($line, 'Kumpulan')) {
        if (preg_match('/Kumpulan\s+(\w+)\s*:\s*(.+)/', $line, $m)) {
            $rows[] = ['', 'A', $m[1], "Kumpulan {$m[1]} : " . trim($m[2]), '_', '_'];
        }
        continue;
    }

    // Skip header jadual
    if (preg_match('/^KELAS\s+PERKARA/', $line)) {
        continue;
    }

    // Baris kod: 01241 Penanaman jambu batu 01241
    //            0125(1) Penanaman pokok lain...
    if (preg_match('/^(\d{4,5})(\(\d+\))?\s+(.+?)(?:\s+(\d{5}))?$/', $line, $m)) {
        $codeRaw  = $m[1] . ($m[2] ?? '');
        $codeClean = $m[1];
        $descRaw  = trim($m[3]);
        $msicCode = isset($m[4]) && $m[4] !== '' ? $m[4] : '_';

        // Ambil nombor nota kaki dalam penerangan
        preg_match_all('/\((\d+)\)/', $descRaw, $fnMatches);
        $fnRefs = $fnMatches[1];

        // Buang tanda nota kaki dari penerangan
        $desc = trim(preg_replace('/\(\d+\)/', '', $descRaw));

        // Bina teks nota kaki
        $noteParts = [];
        foreach ($fnRefs as $fnNum) {
            if (isset($footnotes[$fnNum])) {
                $noteParts[] = $footnotes[$fnNum];
            }
        }
        $noteText = count($noteParts) > 0 ? implode('; ', $noteParts) : '_';

        // Kumpulan (4 digit) tiada kod MSIC
        if (strlen($codeClean) === 4) {
            $msicCode = '_';
        }

        $rows[] = ['', 'A', $codeClean, $desc, $msicCode, $noteText];
    }
}

// -----------------------------------------------
// Tulis ke fail CSV
// -----------------------------------------------
$outputFile = 'output.csv';
$handle     = fopen($outputFile, 'w');

// BOM untuk Excel baca UTF-8 dengan betul
fwrite($handle, "\xEF\xBB\xBF");

foreach ($rows as $row) {
    fwrite($handle, tulisBarisCSV($row));
}

fclose($handle);

echo "Siap! Fail disimpan: {$outputFile}\n";
echo "Jumlah baris: " . count($rows) . "\n";