<?php

function semakCsv(string $failCsv): array
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
            // Baris baru — semak jika medan terus tidak ditutup
            if ($bilangPetikan % 2 !== 0) {
                $dalamPetikan = true;

                $masalah[] = [
                    'baris' => $noBaris,
                    'jenis' => 'NEWLINE_DALAM_MEDAN',
                    'mesej' => "Baris $noBaris: Medan dibuka tetapi tidak ditutup pada baris ini — kemungkinan ada newline tidak sengaja.",
                    'data'  => trim($baris_semasa),
                ];
            }
        } else {
            // Kita dalam medan berbilang baris
            $masalah[] = [
                'baris' => $noBaris,
                'jenis' => 'SAMBUNGAN_BARIS_HARAM',
                'mesej' => "Baris $noBaris: Baris ini adalah sambungan haram dari baris sebelumnya — sepatutnya sebahagian dari satu rekod yang sama.",
                'data'  => trim($baris_semasa),
            ];

            // Semak sama ada medan ditutup pada baris ini
            if ($bilangPetikan % 2 !== 0) {
                $dalamPetikan = false;
            }
        }
    }

    // Jika masih dalam petikan selepas semua baris habis
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

echo "<br>Status : " . strtoupper($hasil['status']) . "\n";
echo "<br>Mesej  : " . $hasil['mesej'] . "\n";

if (!empty($hasil['masalah'])) {
    echo "\nSenarai Masalah:\n";
    echo str_repeat('-', 60) . "\n";

    foreach ($hasil['masalah'] as $no => $item) {
        echo "<br>" . ($no + 1) . ". Baris {$item['baris']} [{$item['jenis']}]\n";
        echo "   Mesej : {$item['mesej']}\n";
        echo "   Data  : {$item['data']}\n\n";
    }
}
