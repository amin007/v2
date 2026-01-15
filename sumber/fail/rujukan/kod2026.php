<?php
###################################################################################################
require 'fungsi_global.php';
###################################################################################################
# bina tatasusunan dari php array kepada json
#--------------------------------------------------------------------------------------------------
# bentuk tatasusunan baru 2025
$failPhp = ['responBE2026','unitKuantitiLampiran16','aup unit kuantiti','bezaUntungRugi'];
foreach($failPhp as $dataPhp):
	if($dataPhp === 'aup unit kuantiti'):
		$tajuk[$dataPhp] = '#,Butiran,Unit Kuantiti,Min,Max,AUP';
	else:
		$tajuk[$dataPhp] = '#,Kod,Keterangan (' . ucfirst($dataPhp) . ')';
	endif;
	$data[$dataPhp] = 'dataJsonEko.php?/json/' . $dataPhp;
endforeach;//*/
#--------------------------------------------------------------------------------------------------
# bina tatasusunan dari fungsi
#--------------------------------------------------------------------------------------------------
//$tajuk['namaTempat'] = '#,Kod,Nama Tempat,Daerah,Negeri';
//$data['namaTempat'] = ImportCSV2Array01($filename = './kod2022/namatempat.csv');
$tajuk['kodSv-Msic2025vs2008'] = '#,kod-kp,seksyen MSIC 2025,seksyen MSIC 2008,MSIC 2025,'
. 'keterangan 2025,MSIC 2008(sebahagian),MSIC 2008,keterangan MSIC 2008';
$data['kodSv-Msic2025vs2008'] = ImportCSV2Array01($filename = './kod2026/kodSv-Msic2025vs2008'
. '-inggeris.csv');
//$tajuk['bandinganMsicLamaBaru'] = '#,msic lama, msic baru, keterangan';
//$data['bandinganMsicLamaBaru'] = ImportCSV2Array01($filename = './kod2026/bandinganMsicLama'
//. 'Baru.csv');
$tajuk['msicLamaBaru'] = '#,s,msic 2025,keterangan bm,description item_bi,msic 2008';
$data['msicLamaBaru'] = ImportCSV2Array01($filename = './kod2026/msicLamaBaru-BMBI.csv');
#--------------------------------------------------------------------------------------------------
$tajuk['msic2008 notakaki'] = '#,s,msic,keterangan,msic2000,notakaki';
$data['msic2008 notakaki'] = './utama/msic.json';
#--------------------------------------------------------------------------------------------------
/*
//*/
#--------------------------------------------------------------------------------------------------
# setkan tatasusunan yang berkaitan dengan fail json
$dataPhpJson = ['responBE2026','unitKuantitiLampiran16','aup unit kuantiti','bezaUntungRugi'];
$dataJson = ['msic2008 notakaki'];
// buat null sebab tak wujud data json
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
			panggilDataTable04($tajuk,$data,$cariApa);# panggil fungsi
		elseif(in_array($cariApa,$dataPhpJson)):# panggil fungsi untuk tatasusunan php => json
			panggilDataTable05($tajuk,$data,$cariApa);
		elseif(in_array($cariApa,$dataJson)):
			panggilDataTable06($tajuk,$data,$cariApa);# panggil fungsi untuk data json
		else:
			panggilDataTable04($tajuk,$data,$cariApa);# panggil fungsi
		endif;
	else:
		panggilDataKosong($tajuk,$data,null);# panggil fungsi
	endif;
else:
	panggilDataKosong($tajuk,$data,null);# panggil fungsi
endif;//*/
#--------------------------------------------------------------------------------------------------
//versiphp();
#--------------------------------------------------------------------------------------------------
# tamat koding
###################################################################################################
#--------------------------------------------------------------------------------------------------
#--------------------------------------------------------------------------------------------------
###################################################################################################