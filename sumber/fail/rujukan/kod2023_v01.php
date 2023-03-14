<?php
###################################################################################################
require 'fungsi_global.php';
###################################################################################################
# bina tatasusunan dari php array kepada json
#--------------------------------------------------------------------------------------------------
$tajuk['respon'] = '#,Kod,Respon';
$data['respon'] = 'dataJsonLama.php?/json/respon';
$tajuk['responEko'] = '#,Kod,ResponEko';
$data['responEko'] = 'dataJsonLama.php?/json/responEko';
$tajuk['bahasa'] = '#,Kod,Bahasa';
$data['bahasa'] = 'dataJsonLama.php?/json/bahasa';
$tajuk['AIR'] = '#,Kod,AIR';
$data['AIR'] = 'dataJsonLama.php?/json/AIR';
$tajuk['negeri'] = '#,Kod,Negeri';
$data['negeri'] = 'dataJsonLama.php?/json/negeri';
$tajuk['etnik'] = '#,Kod,Etnik';
$data['etnik'] = 'dataJsonLama.php?/json/etnik';
$tajuk['pertuturan'] = '#,Kod,Pertuturan';
$data['pertuturan'] = 'dataJsonLama.php?/json/pertuturan';
$tajuk['warganegara'] = '#,Kod,Warganegara';
$data['warganegara'] = 'dataJsonLama.php?/json/warganegara';
$tajuk['kahwin'] = '#,Kod,Kahwin';
$data['kahwin'] = 'dataJsonLama.php?/json/kahwin';
$tajuk['sekolah'] = '#,Kod,Sekolah';
$data['sekolah'] = 'dataJsonLama.php?/json/sekolah';
$tajuk['pendidikan'] = '#,Kod,Pendidikan';
$data['pendidikan'] = 'dataJsonLama.php?/json/pendidikan';
$tajuk['sijil'] = '#,Kod,Sijil';
$data['sijil'] = 'dataJsonLama.php?/json/sijil';
$tajuk['pengajian'] = '#,Kod,Pengajian';
$data['pengajian'] = 'dataJsonLama.php?/json/pengajian';
$tajuk['Aktiviti Pekerjaan'] = '#,Kod Aktiviti Pekerjaan';
$data['Aktiviti Pekerjaan'] = 'dataJsonLama.php?/json/Aktiviti Pekerjaan';
$tajuk['mascoLamaMsic'] = '#,Kod,MascoLamaMsic';
$data['mascoLamaMsic'] = 'dataJsonLama.php?/json/mascoLamaMsic';
$tajuk['aktiviti'] = '#,Kod,Aktiviti';
$data['aktiviti'] = 'dataJsonLama.php?/json/aktiviti';
$tajuk['Gaji G2'] = '#,Kod,Gaji G2';
$data['Gaji G2'] = 'dataJsonLama.php?/json/Gaji G2';
$tajuk['Bil Piece Rate'] = '#,Kod,Bil Piece Rate';
$data['Bil Piece Rate'] = 'dataJsonLama.php?/json/Bil Piece Rate';
$tajuk['Unit Kuantiti'] = '#,Kod,Unit Kuantiti';
$data['Unit Kuantiti'] = 'dataJsonLama.php?/json/Unit Kuantiti';
//$tajuk['AupAirPelincirPembakarElektrik'] = '#,Kod,AupAirPelincirPembakarElektrik';
//$data['AupAirPelincirPembakarElektrik'] = 'dataJsonLama.php?/json/AupAirPelincirPembakarElektrik';
$tajuk['bandar'] = '#,Kod Negeri,Daerah,Bandar';
$data['bandar'] = 'dataJsonLama.php?/json/bandar';
$tajuk['KodNegeriJPN'] = '#,Kod Negeri JPN';
$data['KodNegeriJPN'] = 'dataJsonLama.php?/json/KodNegeriJPN';
$tajuk['KodNegaraJPN'] = '#,Kod Negara JPN';
$data['KodNegaraJPN'] = 'dataJsonLama.php?/json/KodNegaraJPN';
#--------------------------------------------------------------------------------------------------
# bina tatasusunan untuk fail json
#--------------------------------------------------------------------------------------------------
$tajuk['komuniti'] = '#,versi,msic,kod produk,kod2,keterangan,keterangan inggeris';
$data['komuniti'] = './utama/komuniti.json';
$tajuk['produkmm'] = '#,msic,kodx,keterangan,aup-min-max';
$data['produkmm'] = './utama/produkmm.json';
$tajuk['msic'] = '#,s,msic,keterangan,msic2000,notakaki';
$data['msic'] = './utama/msic.json';
$tajuk['coicop'] = '#,kod1,kod2,keterangan';
$data['coicop'] = './utama/coicop.json';
$tajuk['masco_subutama'] = '#,kumpulan,masco_lama,jawatan';
$data['masco_subutama'] = './utama/masco_subutama.json';
$tajuk['pendidikan'] = '#,kod,keterangan_lama,nota01';
$data['pendidikan'] = './utama/pendidikan.json';
$tajuk['bandar'] = '#,Kod Negeri,Daerah,Bandar';
$data['bandar'] = './json2023/bandar.json';//$data['bandar'] = 'dataJsonLama.php?/json/bandar';
//*/
#--------------------------------------------------------------------------------------------------
# setkan tatasusunan yang berkaitan dengan fail json
$dataPhpJson = ['respon','responEko','bahasa','AIR','negeri','etnik','pertuturan','warganegara',
'kahwin','sekolah','pendidikan','sijil','pengajian','Aktiviti Pekerjaan','mascoLamaMsic',
'aktiviti','Gaji G2','Bil Piece Rate','Unit Kuantiti','AupAirPelincirPembakarElektrik',
'bandar','KodNegeriJPN','KodNegaraJPN'];
$dataJson = ['institut','coicop','pendidikan','masco_subutama','komuniti','produkmm','msic',
'ayam'];
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
