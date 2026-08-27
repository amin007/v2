<?php
###################################################################################################
require '../fungsi_global.php';
###################################################################################################
#--------------------------------------------------------------------------------------------------
# bina tatasusunan dari fungsi
#--------------------------------------------------------------------------------------------------
// untuk ujikaji
/*$tajuk['Msic2025-notakaki'] = '#,s, perkara, keterangan, msic 2008, nota kaki';
$data['Msic2025-notakaki'] = ImportCSV2Array01($filename = './csv/nota-kaki-msic2025.csv');
$tajuk['kodstrata'] = '#,kod,pecahan,negeri,Strata 2020';
$data['kodstrata'] = ImportCSV2Array01($filename = './kod2026/kodStrataDaa.csv');
$tajuk['masco2020'] = '#,kod,keterangan';
$data['masco2020'] = ImportCSV2Array01($filename = './csv/mascoBM-v06.csv');
$tajuk['ogcs'] = '#,kod,keterangan ogcs,bahagian';
$data['ogcs'] = ImportCSV2Array01($filename = './csv/kod ogcs.csv');//*/
//$tajuk['mcpa'] = '#,V,Mcpa_Class_Code,Mcpa Code,Mcpa_Melayu,Mcpa_En,Cpc,Hs,Sitc,Ahtn,Unit,Catatan';
$data['mcpa'] = ImportCSV2Array01($filename = '../csv/kod mcpa 2009 v1.1.4.csv');
#--------------------------------------------------------------------------------------------------
###################################################################################################
# untuk debug sahaja
#--------------------------------------------------------------------------------------------------
/*$masalahStruktur = ValidasiCsv01($data['mcpa'], 12);
$masalah10Digit = ValidasiCSV10Digit01($data['mcpa']);
if (count($masalahStruktur) > 0)
	semakPembolehubah($masalahStruktur,'masalah',0);
if (count($masalah10Digit) > 0)
	semakPembolehubah($masalah10Digit,'masalah',0);
//*/
#--------------------------------------------------------------------------------------------------
###################################################################################################
# mula koding
#--------------------------------------------------------------------------------------------------
//echo dariCsvPanjangKeJson($filename,$panjangTeks = 2000);
echo jsonDataTables($data['mcpa']);
#--------------------------------------------------------------------------------------------------
//versiphp();
#--------------------------------------------------------------------------------------------------
# tamat koding
###################################################################################################