<?php

function semakCsv(string $failCsv, string $pemisah = ';'): array
{
    $masalah = [];

    if (!file_exists($failCsv)) {
        return ['status' => 'gagal', 'mesej' => "Fail tidak dijumpai: $failCsv"];
    }

    $kandungan = file_get_contents($failCsv);
    $baris     = explode("\n", str_replace("\r\n", "\n", $kandungan));

    $dalamPetikan = false;

    foreach ($baris as $i => $baris_semasa) {
        $noBaris       = $i + 1;
        $bilangPetikan = substr_count($baris_semasa, '"');

        if (!$dalamPetikan) {

            // --------------------------------------------------------
            // Semakan 1: Medan tanpa kepungan tanda petikan
            // --------------------------------------------------------
            $senaraiMedan = explode($pemisah, $baris_semasa);

            foreach ($senaraiMedan as $j => $nilai) {
                $nilai    = trim($nilai);
                $noMedan  = $j + 1;

                // Medan kosong tanpa petikan — boleh terima
                if ($nilai === '') {
                    continue;
                }

                // Medan ada kandungan tapi tiada petikan langsung
                if (!str_starts_with($nilai, '"')) {
                    $masalah[] = [
                        'baris' => $noBaris,
                        'jenis' => 'TIADA_PETIKAN_BUKA',
                        'mesej' => "Baris $noBaris, Medan $noMedan: Nilai tidak dikepung dengan tanda petikan — dijumpai: \"$nilai\"",
                        'data'  => trim($baris_semasa),
                    ];
                    continue;
                }

                // Medan ada petikan buka tapi tiada petikan tutup
                // (berbeza dengan isu newline — ini satu medan, satu baris)
                if (str_starts_with($nilai, '"') && !str_ends_with($nilai, '"')) {
                    // Ini akan ditangkap oleh semakan newline di bawah
                    // Jadi kita biarkan — elak laporan berganda
                    continue;
                }
            }

            // --------------------------------------------------------
            // Semakan 2: Newline dalam medan (petikan ganjil)
            // --------------------------------------------------------
            if ($bilangPetikan % 2 !== 0) {
                $dalamPetikan = true;

                $masalah[] = [
                    'baris' => $noBaris,
                    'jenis' => 'NEWLINE_DALAM_MEDAN',
                    'mesej' => "Baris $noBaris: Medan dibuka tetapi tidak ditutup — kemungkinan ada newline tidak sengaja.",
                    'data'  => trim($baris_semasa),
                ];
            }

        } else {

            // --------------------------------------------------------
            // Semakan 3: Sambungan baris haram
            // --------------------------------------------------------
            $masalah[] = [
                'baris' => $noBaris,
                'jenis' => 'SAMBUNGAN_BARIS_HARAM',
                'mesej' => "Baris $noBaris: Sambungan haram dari baris sebelumnya — sepatutnya sebahagian dari satu rekod yang sama.",
                'data'  => trim($baris_semasa),
            ];

            if ($bilangPetikan % 2 !== 0) {
                $dalamPetikan = false;
            }
        }
    }

    // --------------------------------------------------------
    // Semakan 4: Petikan dibuka tapi tidak pernah ditutup
    // --------------------------------------------------------
    if ($dalamPetikan) {
        $masalah[] = [
            'baris' => count($baris),
            'jenis' => 'PETIKAN_TIDAK_DITUTUP',
            'mesej' => "Baris " . count($baris) . ": Tanda petikan dibuka tetapi tidak pernah ditutup hingga akhir fail.",
            'data'  => '',
        ];
    }

    if (empty($masalah)) {
        return [
            'status' => 'ok',
            'mesej'  => "Fail CSV kelihatan sempurna. Tiada masalah dikesan.",
        ];
    }

    return [
        'status'  => 'rosak',
        'mesej'   => "Fail CSV mempunyai " . count($masalah) . " masalah dikesan.",
        'masalah' => $masalah,
    ];
}


// ============================================================
// Guna fungsi
// ============================================================

$hasil = semakCsv('mascoBM-v06.csv');

echo "<br>Line Akhir :  \n";
echo "<br>Status : " . strtoupper($hasil['status']) . "\n";
echo "<br>Mesej  : " . $hasil['mesej'] . "\n";

if (!empty($hasil['masalah'])) {
    echo "\nSenarai Masalah:\n";
    echo str_repeat('-', 60) . "\n";

    foreach ($hasil['masalah'] as $no => $item) {
        echo "<br>" . ($no + 1) . ". Baris {$item['baris']} [{$item['jenis']}]\n";
        echo " => Mesej : {$item['mesej']}\n";
        echo " => Data  : {$item['data']}\n\n";
    }
}
