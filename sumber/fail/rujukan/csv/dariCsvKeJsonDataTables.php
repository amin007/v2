<?php
###################################################################################################
require '../fungsi_global.php';
###################################################################################################
// untuk ujikaji
$cariApa = 'msic2025';
$tajuk[$cariApa] = '#,s, msic 2025, keterangan, msic 2008, nota kaki';
$data[$cariApa] = ImportCSV2Array01($filename = 'nota-kaki-msic2025.csv');
###################################################################################################
header('Content-Type: application/json; charset=utf-8');
binaJson($data,$cariApa);
