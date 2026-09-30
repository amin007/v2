<?php
###################################################################################################
require '../fungsi_global.php';
###################################################################################################
/* untuk ujikaji
$cariApa = 'msic2025';
$tajuk[$cariApa] = '#,s, msic 2025, keterangan, msic 2008, nota kaki';
$data[$cariApa] = ImportCSV2Array01($filename = 'nota-kaki-msic2025.csv');//
$cariApa = 'mcpaSemua';
$data[$cariApa] = ImportCSV2Array01($filename = 'kod mcpa newss.csv');//*/
//$data[$cariApa] = ImportCSV2Array01($filename = '../kod2022/masco2020_tugasan.csv');//*/
###################################################################################################
//$cariApa = 'mcpaBandingan'; $data['mcpaBandingan'] = ImportCSV2Array01($filename = 'mcpa bandingan2.csv');
$cariApa = 'mcpaCorete'; $data['mcpaCorete'] = ImportCSV2Array01($filename = 'mcpa corete.csv');
###################################################################################################
header('Content-Type: application/json; charset=utf-8');
binaJson($data,$cariApa);
