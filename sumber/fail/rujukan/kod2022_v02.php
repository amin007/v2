<?php
###################################################################################################
include 'fungsi_global.php';
###################################################################################################
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('getClientIp')):
	function getClientIp($pilih = 1)
	{# Function to get the client IP address
		$ipaddress = '';
		if (isset($_SERVER['HTTP_CLIENT_IP']))
			$ipaddress = $_SERVER['HTTP_CLIENT_IP'];
		else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
			$ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
		else if(isset($_SERVER['HTTP_X_FORWARDED']))
			$ipaddress = $_SERVER['HTTP_X_FORWARDED'];
		else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
			$ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
		else if(isset($_SERVER['HTTP_FORWARDED']))
			$ipaddress = $_SERVER['HTTP_FORWARDED'];
		else if(isset($_SERVER['REMOTE_ADDR']))
			$ipaddress = $_SERVER['REMOTE_ADDR'];
		else
			$ipaddress = 'UNKNOWN';
		#
		$ip = ($pilih == 1) ? $ipaddress . "<br>\n" : $ipaddress;
		#
		return $ip;
	}
endif;//*/
#--------------------------------------------------------------------------------------------------
#--------------------------------------------------------------------------------------------------
###################################################################################################
$arr = get_defined_functions();
$kira = count($arr['internal']);
$kira2 = count($arr['user']);
#--------------------------------------------------------------------------------------------------
semakPembolehubah($kira,'jum internal');
semakPembolehubah($kira2,'jum user');
semakPembolehubah($arr['user'],'semak fungsi',0);
#--------------------------------------------------------------------------------------------------
/*
$arr['user']=Array
(
    [0] => semakpembolehubah
    [1] => tagvar
    [2] => versiphp
    [3] => paparversiphp
    [4] => bersih
    [5] => myurlencode
    [6] => importcsv2array01
    [7] => binasatujadual
    [8] => paparsatujadual
    [9] => binajadual
    [10] => tajukmedanjadual
    [11] => paparjadual
    [12] => kiratahun
    [13] => kiratahunjadual
    [14] => kirajadualtahun
    [15] => binajson
    [16] => jsondatatables
    [17] => debugjson
    [18] => diatas
    [19] => masukcss
    [20] => gradetable002
    [21] => jqueryextenda
    [22] => jqueryextendb
    [23] => jqueryextendc
    [24] => binabutangv00
    [25] => binapautan
    [26] => binabutang
    [27] => panggildatatable
)*/
#--------------------------------------------------------------------------------------------------
# 2. isytiharkan zon masa => Asia/Kuala Lumpur
date_default_timezone_set('Asia/Kuala_Lumpur');
# 3. semak ip dan dns
$tajuk[] = date("h:i:s",$_SERVER['REQUEST_TIME']);
$tajuk[] = 'getHostName = ' . getHostName();
$tajuk[] = 'getHostByName = ' . getHostByName(getHostName());
$tajuk[] = 'getClientIp = ' . getClientIp(0);
$tajuk[] = '-------------------------------------------------';
//https://www.meridianoutpost.com/resources/articles/command-line/ipconfig.php
exec("ipconfig /all", $out, $res);
# 4. trim data dalam tatasusunan
$tajuk[] = trim($out[3]);
list($tajuk[],$tajuk[]) = explode(': ',trim($out[26]));
$tajuk[] = trim($out[27]);
echo "<hr><pre>out = \n"; print_r($tajuk);
# 5. papar tatasusunan yang bersih
exec("ipconfig /displaydns", $out3, $res);
echo "<hr>out3 = count(" . count($out3) . ")<hr>";
semakPembolehubah($out3,'out3',0);
#--------------------------------------------------------------------------------------------------