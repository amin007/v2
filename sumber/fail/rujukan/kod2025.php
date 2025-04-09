<?php
###################################################################################################
require 'fungsi_global.php';
###################################################################################################
# bina tatasusunan dari php array kepada json
#--------------------------------------------------------------------------------------------------
# bentuk tatasusunan baru 2025
$failPhp = ['negeri','strata','bulan','kodPO','respon','pkis','etnik','sijil','jlnDomestik',
'jlnLuarNegara','kerjaAIR','pendapatanAIR','negeriHariMlm','jenisJln','xLakuJalan'];
foreach($failPhp as $dataPhp):
	$tajuk[$dataPhp] = '#,Kod,Keterangan';
	$data[$dataPhp] = 'dataJsonDts.php?/json/' . $dataPhp;
endforeach;
#--------------------------------------------------------------------------------------------------
# bina tatasusunan dari fungsi
#--------------------------------------------------------------------------------------------------
$tajuk['namaTempat'] = '#,Kod,Nama Tempat,Daerah,Negeri';
$data['namaTempat'] = ImportCSV2Array01($filename = './kod2022/namatempat.csv');
#--------------------------------------------------------------------------------------------------
$failPhp2 = ['modAngkut','jenisPenginapan','dptInfo','tempahan','tujuanPerjalanan','xtvtUtama',
'xLakuJalan'];
foreach($failPhp2 as $dataPhp2):
	$tajuk[$dataPhp2] = ($dataPhp2 === 'xtvtUtama') ?
	'#,Kod,Keterangan,Catatan':'#,Kod,Keterangan';
	$data[$dataPhp2] = 'dataJsonDts.php?/json/' . $dataPhp2;
endforeach;
#--------------------------------------------------------------------------------------------------
# setkan tatasusunan yang berkaitan dengan fail json
$dataPhpJson = ['negeri','strata','bulan','kodPO','respon','pkis','etnik','sijil','jlnDomestik',
'jlnLuarNegara','kerjaAIR','pendapatanAIR','negeriHariMlm','jenisJln',
'modAngkut','jenisPenginapan','dptInfo','tempahan','tujuanPerjalanan','xtvtUtama','xLakuJalan'];
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