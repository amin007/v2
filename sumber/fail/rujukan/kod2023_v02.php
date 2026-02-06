<?php
###################################################################################################
require 'fungsi_global.php';
###################################################################################################
# bina tatasusunan dari php array kepada json
#--------------------------------------------------------------------------------------------------
# bentuk tatasusunan baru 2023
$tajuk['respon'] = '#,Kod,Respon';
$data['respon'] = 'dataJsonLama.php?/json/respon';
$tajuk['etnik'] = '#,Kod,Etnik';
$data['etnik'] = 'dataJsonLama.php?/json/etnik';
$tajuk['pertuturan'] = '#,Kod,Pertuturan';
$data['pertuturan'] = 'dataJsonLama.php?/json/pertuturan';
$tajuk['AIR'] = '#,Kod,AIR';
$data['AIR'] = 'dataJsonLama.php?/json/AIR';
$tajuk['jantina'] = '#,Kod,Jantina';
$data['jantina'] = 'dataJsonLama.php?/json/jantina';
$tajuk['warganegara'] = '#,Kod,Warganegara';
$data['warganegara'] = 'dataJsonLama.php?/json/warganegara';
$tajuk['negeri'] = '#,Kod,Negeri';
$data['negeri'] = 'dataJsonLama.php?/json/negeri';
$tajuk['negara'] = '#,Kod,Negara,Nota';
$data['negara'] = './utama/negara.json';
$tajuk['kahwin'] = '#,Kod,Kahwin';
$data['kahwin'] = 'dataJsonLama.php?/json/kahwin';
$tajuk['sekolah'] = '#,Kod,Sekolah';
$data['sekolah'] = 'dataJsonLama.php?/json/sekolah';
$tajuk['sekolah'] = '#,Kod,Sekolah';
$data['sekolah'] = 'dataJsonLama.php?/json/sekolah';
#--------------------------------------------------------------------------------------------------
$tajuk['Pendidikan 2022'] = '#,Kod,Keterangan,Nota';
$data['Pendidikan 2022'] = 'dataJsonBaru.php?/json/Pendidikan 2022';
$tajuk['sijil 2022'] = '#,Kod,Keterangan,Nota';
$data['sijil 2022'] = 'dataJsonBaru.php?/json/sijil 2022';
$tajuk['PendidikanSijil 2022'] = '#,Kod,Pendidikan,Sijil';
$data['PendidikanSijil 2022'] = 'dataJsonBaru.php?/json/PendidikanSijil 2022';
#--------------------------------------------------------------------------------------------------
# 3.20 Ruangan 18 - INSTITUSI PENGAJIAN (IP)
$tajuk['institut'] = '#,kod,keterangan,nota01';
$data['institut'] = './utama/institut.json';
#--------------------------------------------------------------------------------------------------
$tajuk['Pengajian 2022'] = '#,Kumpulan Bidang Utama &amp; Sub-utama,Perincian Bidang Pengajian';
$data['Pengajian 2022'] = 'dataJsonBaru.php?/json/Pengajian 2022';
$tajuk['Bidang'] = '#,Kumpulan Bidang Utama &amp; Sub-utama,Perincian Bidang Pengajian';
$data['Bidang'] = 'dataJsonBaru.php?/json/Bidang';
$tajuk['programLatihan'] = '#,Kod,Bidang Pengajian';
$data['programLatihan'] = 'dataJsonBaru.php?/json/programLatihan';
$tajuk['mascoMsicV2'] = '#,Pekerjaan,Industri,Masco,Msic';
$data['mascoMsicV2'] = 'dataJsonBaru.php?/json/mascoMsicV2';
#--------------------------------------------------------------------------------------------------
# bina tatasusunan dari fungsi
#--------------------------------------------------------------------------------------------------
$tajuk['mascoBMBI'] = '#,Seksyen,Kod,Masco Melayu,Masco Inggeris,TahunV01,KodV01,TahunV02,KodV02';
$data['mascoBMBI'] = ImportCSV2Array01($filename = './kod2022/masco2020_all.csv');
//$data['mascoBanci'] = ImportCSV2Array($filename = './kod2022/masco2020_banci.csv');
$tajuk['mascoNewss'] = '#,Kod,Masco Melayu,Masco Inggeris';
$data['mascoNewss'] = ImportCSV2Array01($filename = './kod2022/masco2020_newss.csv');
$tajuk['mascoSeksyen'] = '#,Tahun,Kod,Seksyen,Keterangan Melayu,Keterangan Inggeris';
$data['mascoSeksyen'] = ImportCSV2Array01($filename = './kod2022/masco2020_seksyen.csv');
#--------------------------------------------------------------------------------------------------
$tajuk['msic'] = '#,s,msic,keterangan,msic2000,notakaki';
$data['msic'] = './utama/msic.json';
#--------------------------------------------------------------------------------------------------
$tajuk['Gaji G2'] = '#,Kod,Gaji G2';
$data['Gaji G2'] = 'dataJsonLama.php?/json/Gaji G2';
$tajuk['Bil Piece Rate'] = '#,Kod,Bil Piece Rate';
$data['Bil Piece Rate'] = 'dataJsonLama.php?/json/Bil Piece Rate';
$tajuk['bandar'] = '#,Kod Negeri,Daerah,Bandar Besar 2024';
$data['bandar'] = 'dataJsonLama.php?/json/bandar2024';
$tajuk['bandar kecil'] = '#,Kod Negeri,Daerah,Bandar Kecil(801(TL BD)/802(TI BD))';
$data['bandar kecil'] = 'dataJsonLama.php?/json/bandarkecil2024';
$tajuk['Migrasi M6-PSM'] = '#,Kod,Migrasi M6-PSM';
$data['Migrasi M6-PSM'] = 'dataJsonLama.php?/json/Gaji G2';
$tajuk['psm'] = '#,Kod,Keterangan PSM';
$data['psm'] = 'dataJsonLama.php?/json/psmjr7';
$tajuk['daerah'] = '#,Versi,Negeri,Kod Daerah Pentadbiran,Status Rekod';
$data['daerah'] = 'dataJsonLama.php?/json/daerah';
//*/
#--------------------------------------------------------------------------------------------------
# setkan tatasusunan yang berkaitan dengan fail json
$dataPhpJson = ['respon','bahasa','pertuturan','AIR','jantina','negeri','etnik','warganegara',
'kahwin','sekolah','pendidikan','sijil','pengajian','Aktiviti Pekerjaan','mascoLamaMsic','psm',
'aktiviti','Gaji G2','Bil Piece Rate','Unit Kuantiti','responEko','AupAirPelincirPembakarElektrik',
'bandar','bandar kecil','KodNegeriJPN','KodNegaraJPN','Pendidikan 2022','sijil 2022','daerah',
'PendidikanSijil 2022','Pengajian 2022','Bidang','programLatihan','mascoMsicV2','Migrasi M6-PSM'];
$dataJson = ['negara','institut','coicop','pendidikan','masco_subutama','komuniti','produkmm',
'msic','ayam'];
#--------------------------------------------------------------------------------------------------
# bina tatasusunan dari fungsi
#--------------------------------------------------------------------------------------------------
$tajuk['mascoBMBI'] = '#,Seksyen,Kod,Masco Melayu,Masco Inggeris,TahunV01,KodV01,TahunV02,KodV02';
$failD['mascoBMBI'] = './kod2022/masco2020_all.csv';
$data['mascoBMBI'] = ImportCSV2Array01($failD['mascoBMBI']);
//$data['mascoBanci'] = ImportCSV2Array($filename = './kod2022/masco2020_banci.csv');
$tajuk['mascoNewss'] = '#,Kod,Masco Melayu,Masco Inggeris';
$failD['mascoNewss'] = './kod2022/masco2020_newss.csv';
$data['mascoNewss'] = ImportCSV2Array01($failD['mascoNewss']);
$tajuk['mascoSeksyen'] = '#,Tahun,Kod,Seksyen,Keterangan Melayu,Keterangan Inggeris';
$failD['mascoSeksyen'] = './kod2022/masco2020_seksyen.csv';
$data['mascoSeksyen'] = ImportCSV2Array01($failD['mascoSeksyen']);
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
$s = 'REQUEST_URI';//$s = 'PHP_SELF';
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
		elseif(in_array($cariApa,['mascoNewss','mascoBMBI'])):
			$data[$cariApa] = 'kod2023_v02.php?/json/' . $cariApa;
			panggilDataTable03($tajuk,$data,$cariApa);
		elseif($cariApa == 'tahun'):
			$data['tahun'] = kiraTahunJadual();
			//panggilDataTable01($tajuk = 'Tahun Daa',$data,$cariApa);# panggil fungsi
			panggilDataExcel($tajuk,$data,$cariApa);# panggil fungsi
		elseif(in_array($cariApa,$dataPhpJson)):# panggil fungsi untuk tatasusunan php => json
			//panggilDataJsonPhp($tajuk,$data,$cariApa);
			panggilDataTable03($tajuk,$data,$cariApa);
		elseif(in_array($cariApa,$dataJson)):
			panggilDataTable02($tajuk,$data,$cariApa);# panggil fungsi untuk data json
		else:
			panggilDataExcel($tajuk,$data,$cariApa);# panggil fungsi
		endif;
	else:
		panggilDataExcel($tajuk,$data,null);# panggil fungsi
	endif;
else:
	panggilDataExcel($tajuk,$data,null);# panggil fungsi
endif;//*/
#--------------------------------------------------------------------------------------------------
# kaedah 2.1
/*$s = 'REQUEST_URI';//$s = 'PHP_SELF';//$s = 'QUERY_STRING';
//semakPembolehubah($_SERVER[$s],$s);
if (isset($_SERVER[$s])):
	$fail = explode('rujukan/',$_SERVER[$s]);//semakPembolehubah($fail,'fail');
	$cari = explode('/',$fail[1]);//semakPembolehubah($cari,'pilih');

	if(isset($cari[1])):
		$cariApa = bersih($cari[1]);
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
