<?php
###################################################################################################
include 'fungsi_global.php';
###################################################################################################
#--------------------------------------------------------------------------------------------------
//semakPembolehubah($arr,'semak pembolehubah',0);//*/
#--------------------------------------------------------------------------------------------------
$s = 'REQUEST_URI';
semakPembolehubah($_SERVER[$s],$s,2);
if (isset($_SERVER[$s])):
	$fail = explode('rujukan/',$_SERVER[$s]);
	semakPembolehubah($fail,'fail',0);
	$cari = explode('/',$fail[1]);
	semakPembolehubah($cari,'pilih',0);
endif; echo '<hr>';
#--------------------------------------------------------------------------------------------------
$s = 'PHP_SELF';
semakPembolehubah($_SERVER[$s],$s,2);
if (isset($_SERVER[$s])):
	$fail01 = explode('rujukan/',$_SERVER[$s]);
	semakPembolehubah($fail01,'fail',0);
	$cari01 = explode('/',$fail01[1]);
	semakPembolehubah($cari01,'pilih',0);
endif; echo '<hr>';//*/
#--------------------------------------------------------------------------------------------------
$s = 'QUERY_STRING';
semakPembolehubah($_SERVER[$s],$s,2);
if (isset($_SERVER[$s])):
	$fail02 = explode('/',$_SERVER[$s]);
	semakPembolehubah($fail02,'fail',0);
	//$cari02 = explode('/',$fail02[1]);
	//semakPembolehubah($cari02,'pilih',0);
endif; echo '<hr>';//*/
#--------------------------------------------------------------------------------------------------
