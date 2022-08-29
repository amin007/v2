<?php
###################################################################################################
include 'fungsi_global.php';
###################################################################################################
#--------------------------------------------------------------------------------------------------
#--------------------------------------------------------------------------------------------------
###################################################################################################
#--------------------------------------------------------------------------------------------------
/*$arr = get_defined_functions();
$kira = count($arr['internal']);
$kira2 = count($arr['user']);
#--------------------------------------------------------------------------------------------------
semakPembolehubah($kira,'jum internal');
semakPembolehubah($kira2,'jum user');
semakPembolehubah($arr['user'],'semak fungsi',0);//*/
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
echo '<hr>';
$functions = get_defined_functions();
$functions_list = array();
foreach ($functions['user'] as $func)
{
	$f = new ReflectionFunction($func);
	$args = array();
	foreach ($f->getParameters() as $param)
	{
		$tmparg = '';
			if ($param->isPassedByReference()) $tmparg = '&';
				if ($param->isOptional()) {
					$tmparg = '[' . $tmparg . '$' . $param->getName()
					. ' = ' . $param->getDefaultValue() . ']';
				} else {
					$tmparg.= '&' . $param->getName();
				}
				$args[] = $tmparg;
				unset ($tmparg);
	}
	$functions_list[] = 'function ' . $func . ' ( ' . implode(', ', $args) . ' )' . PHP_EOL;
}
//print_r($functions_list);
semakPembolehubah($functions_list,'functions_list',0);
#--------------------------------------------------------------------------------------------------

# 2. isytiharkan zon masa => Asia/Kuala Lumpur
date_default_timezone_set('Asia/Kuala_Lumpur');
# 3. semak ip dan dns
$tajuk[] = '<hr>' . date("h:i:s",$_SERVER['REQUEST_TIME']);
$tajuk[] = 'getHostName = ' . getHostName();
$tajuk[] = 'getHostByName = ' . getHostByName(getHostName());
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
/*foreach (preg_grep('/^\s*Physical Address[^:]*:\s*([0-9a-f-]+)/i', $out) as $line)
{	echo substr(strrchr($line, ' '), 1), PHP_EOL; }*/
# http://www.php.net/manual/en/function.exec.php#85930
#--------------------------------------------------------------------------------------------------
###################################################################################################
#--------------------------------------------------------------------------------------------------
echo '<hr>';
$arr = get_defined_vars();
semakPembolehubah($arr,'semak pembolehubah',0);//*/
#--------------------------------------------------------------------------------------------------