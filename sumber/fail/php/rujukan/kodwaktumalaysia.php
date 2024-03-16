<?php
#--------------------------------------------------------------------------------------------------
# 1. laporan tahap kesilapan kod PHP
error_reporting(E_ALL);

# 2. isytiharkan zon masa => Asia/Kuala Lumpur
date_default_timezone_set('Asia/Kuala_Lumpur');
#--------------------------------------------------------------------------------------------------
# masa diambil dari sirim Malaysia
$str = file_get_contents('https://mst.sirim.my/getTime.php');
#--------------------------------------------------------------------------------------------------
# kod dari https://www.php.net/manual/en/function.strtotime.php
if (($timestamp = strtotime($str)) === false)
	echo "The string ($str) is bogus";
else
	echo "$str = " . date("Y-m-d H:i:s", $timestamp);
#--------------------------------------------------------------------------------------------------
# kod dari https://www.php.net/manual/en/function.date.php
echo "<hr>$str = " . date('Y-m-d H:i:s', $str) . ' <= Standard MYSQL date time';
#--------------------------------------------------------------------------------------------------
# setelah amin godek
echo "<hr>$str = " . date('\H\a\r\i \i\n\i j F Y \p\u\k\u\l g:i:s a', $str);
#--------------------------------------------------------------------------------------------------
# reload setiap 5 saat https://www.tutorialrepublic.com/faq/how-to-refresh-a-page-periodically-using-php.php
header("refresh: 2;");