<?php
###################################################################################################
include 'fungsi_global.php';
###################################################################################################
#--------------------------------------------------------------------------------------------------
//versiphp();
#--------------------------------------------------------------------------------------------------
//$arr = get_defined_functions_in_file('fungsi_global.php');
//semakPembolehubah($arr,'semak fungsi',0);
#--------------------------------------------------------------------------------------------------
function get_defined_functions_in_file($file)
{
	$source = file_get_contents($file);
	$tokens = token_get_all($source);
	$functions = array();
	$nextStringIsFunc = false;
	$inClass = false;
	$bracesCount = 0;

	foreach($tokens as $token){
		switch($token[0]) {
			case T_CLASS:
				$inClass = true;
				break;
			case T_FUNCTION:
				if(!$inClass) $nextStringIsFunc = true;
				break;
			case T_STRING:
				if($nextStringIsFunc) {
					$nextStringIsFunc = false;
					$functions[] = $token[1];
				}
				break;
			# Anonymous functions
			case '(':
			case ';':
				$nextStringIsFunc = false;
				break;
			# Exclude Classes
			case '{':
				if($inClass) $bracesCount++;
				break;
			case '}':
				if($inClass) {
					$bracesCount--;
					if($bracesCount === 0) $inClass = false;
				}
				break;
			}
	}
	return $functions;
}
#--------------------------------------------------------------------------------------------------
###################################################################################################
#--------------------------------------------------------------------------------------------------
/*
$arr=Array
(
    [0] => semakPembolehubah
    [1] => tagVar
    [2] => versiphp
    [3] => paparVersiPhp
    [4] => bersih
    [5] => myUrlEncode
    [6] => ImportCSV2Array01
    [7] => binaSatuJadual
    [8] => paparSatuJadual
    [9] => binaJadual
    [10] => tajukMedanJadual
    [11] => paparJadual
    [12] => kiraTahun
    [13] => kiraTahunJadual
    [14] => kiraJadualTahun
    [15] => binaJson
    [16] => jsonDataTables
    [17] => debugJson
    [18] => diatas
    [19] => masukCss
    [20] => gradeTable002
    [21] => jqueryExtendA
    [22] => jqueryExtendB
    [23] => jqueryExtendC
    [24] => binaButangV00
    [25] => binaPautan
    [26] => binaButang
    [27] => panggilDataTable
)*/
#--------------------------------------------------------------------------------------------------
/*echo '<hr>';
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
semakPembolehubah($functions_list,'functions_list',0);//*/
#--------------------------------------------------------------------------------------------------
###################################################################################################
#--------------------------------------------------------------------------------------------------
/*echo '<hr>';
$arr = get_defined_vars();
semakPembolehubah($arr,'semak pembolehubah',0);//*/
#--------------------------------------------------------------------------------------------------