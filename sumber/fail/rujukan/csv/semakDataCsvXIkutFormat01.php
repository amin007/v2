<?php

function semakCsv(string $failCsv): array
{
    $masalah = [];

    if (!file_exists($failCsv)) {
        return ['status' => 'gagal', 'mesej' => "Fail tidak dijumpai: $failCsv"];
    }

    $kandungan = file_get_contents($failCsv);
    $baris     = explode("\n", str_replace("\r\n", "\n", $kandungan));

    $jumlahKolum   = null; // Akan ditetapkan berdasarkan baris pertama
    $dalamPetikan  = false;
    $noBarisAsal   = 0;
    $noRekodfail   = 0;

    foreach ($baris as $i => $baris_semasa) {
        $noBarisAsal++;
        $bilangPetikan = substr_count($baris_semasa, '"');

        // Kesan sama ada kita dalam medan berbilang baris
        if (!$dalamPetikan) {
            $noRekodfail++;

            // Semak bilangan kolum menggunakan separator ';'
            // Hanya semak baris yang nampak seperti rekod baru
            $kolum = str_getcsv($baris_semasa, ';', '"');
            
            if ($jumlahKolum === null) {
                $jumlahKolum = count($kolum);
            }
        }

        // Kira petikan — nombor ganjil bermakna medan masih belum ditutup
        if ($bilangPetikan % 2 !== 0) {
            if (!$dalamPetikan) {
                // Mula medan berbilang baris
                $dalamPetikan  = true;
                $barisProblema = $noBarisAsal;
            } else {
                // Medan berbilang baris ditutup
                $dalamPetikan = false;

                $masalah[] = [
                    'jenis'   => 'NEWLINE_DALAM_MEDAN',
                    'baris'   => $barisProblema,
                    'sehingga'=> $noBarisAsal,
                    'mesej'   => "Baris $barisProblema hingga $noBarisAsal: "
                               . "Nilai medan merentasi lebih dari satu baris. "
                               . "Kemungkinan ada newline tidak sengaja dalam data.",
                ];
            }
        }
    }

    // Jika masih dalam petikan lepas semua baris — petikan tidak ditutup langsung
    if ($dalamPetikan) {
        $masalah[] = [
            'jenis' => 'PETIKAN_TIDAK_DITUTUP',
            'baris' => $barisProblema,
            'mesej' => "Baris $barisProblema: Tanda petikan dibuka tetapi tidak pernah ditutup.",
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
        echo "<br>" . ($no + 1) . ". [{$item['jenis']}]\n";
        echo "   {$item['mesej']}\n\n";
    }
}
