<?php
###################################################################################################
require 'fungsi_global.php';
###################################################################################################
# bina tatasusunan dari php array kepada json
#--------------------------------------------------------------------------------------------------
# bentuk tatasusunan baru 2025
$tajuk['negeri'] = '#,Kod,Keterangan';
$data['negeri'] = 'dataJsonDts.php?/json/negeri';
# soalan 6. Strata (ST) (1 digit)
$tajuk['strata'] = '#,Kod,Keterangan';
$data['strata'] = 'dataJsonDts.php?/json/strata';
# soalan 10. Bulan (2 digit) 01 hingga 12
$tajuk['bulan'] = '#,Kod,Keterangan';
$data['bulan'] = 'dataJsonDts.php?/json/bulan';
# Contoh: Pejabat Operasi(PO) = Johor Bahru | Kod PO=0101
$tajuk['kodPO'] = '#,Kod,Keterangan';
$data['kodPO'] = 'dataJsonDts.php?/json/kodPO';
$tajuk['respon'] = '#,Kod,Keterangan';
$data['respon'] = 'dataJsonDts.php?/json/respon';
#--------------------------------------------------------------------------------------------------
# dts 1/2
#--------------------------------------------------------------------------------------------------
#Soalan 1. Perhubungan Dengan Ketua Isi Rumah (Pk Is) (1 Digit)
$tajuk['pkis'] = '#,Kod,Keterangan';
$data['pkis'] = 'dataJsonDts.php?/json/pkis';
$tajuk['etnik'] = '#,Kod,Keterangan';# 5. Kumpulan Etnik
$data['etnik'] = 'dataJsonDts.php?/json/etnik';
$tajuk['sijil'] = '#,Kod,Keterangan';# 8. Sijil Tertinggi
$data['sijil'] = 'dataJsonDts.php?/json/sijil';
# Soalan 10a : Perjalanan Domestik
$tajuk['jlnDomestik'] = '#,Kod,Keterangan';
$data['jlnDomestik'] = 'dataJsonDts.php?/json/jlnDomestik';
$tajuk['jlnLuarNegara'] = '#,Kod,Keterangan';# Soalan 10b : Perjalanan Luar Negara
$data['jlnLuarNegara'] = 'dataJsonDts.php?/json/jlnLuarNegara';
$tajuk['kerjaAIR'] = '#,Kod,Keterangan';# Soalan 11 : pekerjaanAIR
$data['kerjaAIR'] = 'dataJsonDts.php?/json/kerjaAIR';
$tajuk['pendapatanAIR'] = '#,Kod,Keterangan';# # Soalan 12 : pendapatanAIR
$data['pendapatanAIR'] = 'dataJsonDts.php?/json/pendapatanAIR';
# Soalan 13/14/15//16/17/18/19/20 - Perjalanan Harian Dan Bermalam
# Nh - Negeri Harian   Nm - Negeri Malam
$tajuk['negeriHariMlm'] = '#,Kod,Keterangan';
$data['negeriHariMlm'] = 'dataJsonDts.php?/json/negeriHariMlm';
#--------------------------------------------------------------------------------------------------
# dts 1/3
#--------------------------------------------------------------------------------------------------
# Soalan 4 - Jenis Perjalanan
$tajuk['jenisJln'] = '#,Kod,Keterangan';
$data['jenisJln'] = 'dataJsonDts.php?/json/jenisJln';
#--------------------------------------------------------------------------------------------------
# bina tatasusunan dari fungsi
#--------------------------------------------------------------------------------------------------
$tajuk['namaTempat'] = '#,Kod,Nama Tempat,Daerah,Negeri';
$data['namaTempat'] = ImportCSV2Array01($filename = './kod2022/namatempat.csv');
#--------------------------------------------------------------------------------------------------
# Soalan 7 - Mod Pengangkutan
$tajuk['modAngkut'] = '#,Kod,Keterangan';
$data['modAngkut'] = 'dataJsonDts.php?/json/modAngkut';
# Soalan 8 - Jenis Penginapan
$tajuk['jenisPenginapan'] = '#,Kod,Keterangan';
$data['jenisPenginapan'] = 'dataJsonDts.php?/json/jenisPenginapan';
# Soalan 9 - Dapat Maklumat
$tajuk['dptInfo'] = '#,Kod,Keterangan';
$data['dptInfo'] = 'dataJsonDts.php?/json/dptInfo';
# Soalan 10. Kaedah Tempahan Penginapan
$tajuk['tempahan'] = '#,Kod,Keterangan';
$data['tempahan'] = 'dataJsonDts.php?/json/tempahan';
$tajuk['tujuanPerjalanan'] = '#,Kod,Keterangan';
$data['tujuanPerjalanan'] = 'dataJsonDts.php?/json/tujuanPerjalanan';
# Soalan 12. Apakah Aktiviti Utama Anda Lakukan Bagi Setiap Perjalanan?
$tajuk['xtvtUtama'] = '#,Kod,Keterangan,Catatan';
$data['xtvtUtama'] = 'dataJsonDts.php?/json/xtvtUtama';
#--------------------------------------------------------------------------------------------------
# setkan tatasusunan yang berkaitan dengan fail json
$dataPhpJson = ['negeri','strata','bulan','kodPO','respon','pkis','etnik','sijil','jlnDomestik',
'jlnLuarNegara','kerjaAIR','pendapatanAIR','negeriHariMlm','jenisJln','modAngkut',
'jenisPenginapan','dptInfo','tempahan','tujuanPerjalanan','xtvtUtama'];
$dataJson = [''];// buat null sebab tak wujud data json
#--------------------------------------------------------------------------------------------------
###################################################################################################
# untuk debug sahaja
#--------------------------------------------------------------------------------------------------
/*
$_SERVER['PATH_INFO'] => untuk apache
$_SERVER['PATH_TRANSLATED'] => untuk apache
$_SERVER['REQUEST_URI'] =
$_SERVER['PHP_SELF']
$_SERVER['QUERY_STRING'] => /bandar
$_SERVER['REQUEST_SCHEME'] => https
$_SERVER['SERVER_PORT'] => 80 atau 443

$s = 'PHP_SELF';
echo $_SERVER[$s] . '|<br>';
$cari0 = explode('rujukan/',$_SERVER[$s]);
$cari2 = explode('/',$cari0[1]);
echo '<pre>'; print_r($cari2); echo '</pre>';
*/
#--------------------------------------------------------------------------------------------------
###################################################################################################
# mula koding
#--------------------------------------------------------------------------------------------------
# kaedah 1
/*if (isset($_GET['cari'])):
	$cari = $_GET['cari'];
	//echo '<pre>$cari='; print_r($cari); echo '</pre>';
	panggilDataTable($data,$cari);# panggil fungsi
else:
	panggilDataTable($data,null);# panggil fungsi
endif;//*/
#--------------------------------------------------------------------------------------------------
# kaedah 2
/*$s = 'REQUEST_URI';//$s = 'PHP_SELF';
//semakPembolehubah($_SERVER['REQUEST_URI'],'REQUEST_URI');
if (isset($_SERVER[$s])):
	$fail = explode('rujukan/',$_SERVER[$s]);//semakPembolehubah($fail,'fail');
	$cari = explode('/',$fail[1]);//semakPembolehubah($cari,'pilih');

	if(isset($cari[1])):
		$cariApa = bersih($cari[1]);
		if($cariApa == 'json'):
			$pilih = isset($cari[2]) ? $cari[2] : null;
			$cariApa = bersih($pilih);
			binaJson($data,$pilih);
		elseif($cariApa == 'tahun'):
			$data['tahun'] = kiraTahunJadual();
			panggilDataTable($data,$cariApa);# panggil fungsi
		else:
			panggilDataTable($data,$cariApa);# panggil fungsi
		endif;
	else:
		panggilDataTable($data,null);# panggil fungsi
	endif;
else:
	panggilDataTable($data,null);# panggil fungsi
endif;//*/
#--------------------------------------------------------------------------------------------------
# kaedah 2.1
$s = 'REQUEST_URI';//$s = 'PHP_SELF';//$s = 'QUERY_STRING';
//semakPembolehubah($_SERVER[$s],$s);
if (isset($_SERVER[$s])):
	$fail = explode('rujukan/',$_SERVER[$s]);//semakPembolehubah($fail,'fail');
	$cari = explode('/',$fail[1]);//semakPembolehubah($cari,'pilih');

	if(isset($cari[1])):
		$cariApa = bersih($cari[1]);
		/*semakPembolehubah($cariApa,'cariApa');
		semakPembolehubah($tajuk[$cariApa],'tajuk');
		semakPembolehubah($data[$cariApa],'data');//*/

		if($cariApa == 'json'):
			$pilih = isset($cari[2]) ? $cari[2] : null;
			$cariApa = bersih($pilih);
			binaJson($data,$cariApa);
		elseif($cariApa == 'tahun'):
			$tajuk['tahun'] = '#,-,-,-,-';
			$data['tahun'] = kiraTahunJadual();
			panggilDataTable01($tajuk,$data,$cariApa);# panggil fungsi
		elseif(in_array($cariApa,$dataPhpJson)):# panggil fungsi untuk tatasusunan php => json
			panggilDataTable03($tajuk,$data,$cariApa);
		elseif(in_array($cariApa,$dataJson)):
			panggilDataTable02($tajuk,$data,$cariApa);# panggil fungsi untuk data json
		else:
			panggilDataTable01($tajuk,$data,$cariApa);# panggil fungsi
		endif;
	else:
		panggilDataTable01($tajuk,$data,null);# panggil fungsi
	endif;
else:
	panggilDataTable01($tajuk,$data,null);# panggil fungsi
endif;//*/
#--------------------------------------------------------------------------------------------------
//versiphp();
#--------------------------------------------------------------------------------------------------
# tamat koding
###################################################################################################
#--------------------------------------------------------------------------------------------------
#--------------------------------------------------------------------------------------------------
###################################################################################################