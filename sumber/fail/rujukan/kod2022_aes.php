<?php
###################################################################################################
//$ruStart = getrusage();# Script start. mula run php
include 'fungsi_global.php';
###################################################################################################
#--------------------------------------------------------------------------------------------------
# bina tatasusunan dari json
#--------------------------------------------------------------------------------------------------
$tajuk['produkio'] = '#,msic,noO,mcpaO,ProductsManufactured,UnitO,CodeO,'
. 'XXX,noI,mcpaI,RawMaterialConsumed,UnitI,CodeI';
$data['produkio'] = './kod2022/mcpaBuatIO.json';
#--------------------------------------------------------------------------------------------------
# bina tatasusunan dari php
include 'dataEkonomi.php';
#--------------------------------------------------------------------------------------------------
###################################################################################################
# bina tatasusunan dari fungsi
#--------------------------------------------------------------------------------------------------
$tajuk['mcpaTani'] = '#,kp,msic,mcpa baru,keterangan,kod lama,mcpa lama';
$data['mcpaTani'] = ImportCSV2Array01($filename = './kod2022/mcpa_pertanian.csv');
//$tajuk['mcpaTani02'] = '#,kp,msic,mcpa baru,keterangan,kod lama,mcpa lama';
//$data['mcpaTani02'] = ImportCSV2Array02($filename = './kod2022/mcpa_pertanian.csv');
//$data['mcpaBuat'] = ImportCSV2Array01($filename = './kod2022/mcpa_pembuatan_io.csv');
#--------------------------------------------------------------------------------------------------
###################################################################################################
# semak tatasusunan sebelum proses koding seterusnya
#--------------------------------------------------------------------------------------------------
//semakPembolehubah($tajuk['mcpaTani'],'tajuk',3);
//semakPembolehubah($data['mcpaTani01'],'data01',0);
//semakPembolehubah($data['mcpaTani02'],'data02',0);
#--------------------------------------------------------------------------------------------------
###################################################################################################
# mula koding
#--------------------------------------------------------------------------------------------------
/*
$_SERVER['PATH_INFO'] => untuk apache
$_SERVER['REQUEST_URI'] =
$_SERVER['PATH_TRANSLATED']
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
		elseif($cariApa == 'tahun'):
			$tajuk['tahun'] = '#,-,-,-,-';
			$data['tahun'] = kiraTahunJadual();
			panggilDataTable01($tajuk,$data,$cariApa);# panggil fungsi
		elseif($cariApa == 'produkio'):
			panggilDataTable02($tajuk,$data,$cariApa);# panggil fungsi
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
/*$ruEnd = getrusage();# tamat run php
echo "<hr>This process used " . rutime($ruEnd, $ruStart, "utime") .
    " ms for its computations\n";
echo "<br>It spent " . rutime($ruEnd, $ruStart, "stime") .
    " ms in system calls\n";*/
#--------------------------------------------------------------------------------------------------
# tamat koding
###################################################################################################
#--------------------------------------------------------------------------------------------------
/*
Manakah infrastruktur rangkaian di bawah terdapat di pertubuhan ini? (Boleh pilih lebih daripada satu)
Which of the following network infrastructures is available at this establishment?
(May choose more than one)
310005 (a) Intranet dalam perniagaan anda | Intranet within your business
310006 (b) Extranet di antara perniagaan anda dan organisasi lain (termasuk perniagaan yang berkenaan)
Extranet between your business and other organisations (include related businesses)
310007 (c) Rangkaian kawasan setempat | Local area network (LAN)
310008 (d) Rangkaian kawasan setempat tanpa wayar | Wireless local area network (WLAN)
310009 (e) Rangkaian kawasan luas | Wide area network (WAN)
310010 (f) Lain-lain | Others
*/
#--------------------------------------------------------------------------------------------------
###################################################################################################