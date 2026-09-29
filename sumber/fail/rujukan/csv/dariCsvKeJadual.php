<?php
#--------------------------------------------------------------------------------------------------
# 1. laporan tahap kesilapan kod PHP
error_reporting(E_ALL);

# 2. isytiharkan zon masa => Asia/Kuala Lumpur
date_default_timezone_set('Asia/Kuala_Lumpur');
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('ImportCSV2Array00')):
	function ImportCSV2Array00($filename)
	{
		# baca fail csv dan convert kepada tatasusunan
		# https://stackoverflow.com/questions/37213674/create-array-from-file-get-contents-value
		$data = array();
		$file = file_get_contents($filename, true);//semakPembolehubah($filename,'filename',1);
		$file = str_replace('"', '', $file);//semakPembolehubah($file,'file',1);
		$row = explode(PHP_EOL,$file);semakPembolehubah(count($row),'jumlah row',2);

		foreach ($row as $key => $val)
		{
			//semakPembolehubah($key,'key',2);
			$val02 = bersih($val);//semakPembolehubah($val02,'val02',3);
			$data[$key] = explode(";",$val02);//semakPembolehubah($data,'data01',0);
		}
		//semakPembolehubah($data,'data');

		return $data;//*/
	}
endif;//*/
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('ImportCSV2Array002')):
	function ImportCSV2Array002($filename)
	{
		# baca fail csv dan convert kepada tatasusunan
		# https://www.tutorialspoint.com/php/php_function_fgetcsv.htm
		# https://www.plus2net.com/php_tutorial/string-fgetcsv.php
		/*	fgetcsv(): Getting data from CSV file
			fgetcsv(f_pointer,int $length,string $delimiter, string $encloser,string $escape);
			Parameter : DESCRIPTION
			f_pointer : Required : a successful file pointer
			$length : Optional : Must be greater than the maximum line length
			$delimiter : Optional : One char only
			$encloser : Optional : Field encloser char
			$escape : Optional : escape parmeter sets the escape char
		//*/
		$data = [];
		$file = fopen($filename, "r");//semakPembolehubah($file,'file',1);
		while(! feof($file))
		{
			$data[] = fgetcsv($file,2000,";");
		}
		fclose($file);semakPembolehubah($data,'data');

		return $data;//*/
	}
endif;//*/
#--------------------------------------------------------------------------------------------------
###################################################################################################
require '../fungsi_global.php';
###################################################################################################
$tajuk['mcpaBandingan'] = 'SECTION 2025,MSIC 2025,MCPA 2009v2.0-29.05.2026,MCPA 2009 v2.0-09.06.2026,'
. 'DESC NEW,CPC 3.0,DESC CPC 3.0,MSIC 2008,MCPA 2009,DESC OLD,CPC 2.0,DESC CPC 2.0,'
. 'HS 2022 (10D),DESC HS 2022 (10D)';
$fail01 = 'mcpa bandingan2.csv';
$tajuk['mcoaCoretr'] = 'SECTION,MSIC 2025,CLASS,CLASS DESCRIPTION,MCPA 2009v2.0-29.05.2026,'
. 'MCPA 2009 v2.0-09.06.2026,DESCRIPTION,MCPA 2009v1.1,nota';
$fail02 = 'mcpa corete.csv';
###################################################################################################
$pilih = 'mcpaBandingan';
$data['mcpaBandingan1'] = ImportCSV2Array00($fail02);
//$data['mcpaBandingan2'] = ImportCSV2Array002($fail02);
//$data['mcpaBandingan3'] = ImportCSV2Array03($fail01);
#--------------------------------------------------------------------------------------------------
//semakPembolehubah($fail01,'fail01');
//semakPembolehubah($pilih,'pilih');
semakPembolehubah($data['mcpaBandingan1'],'dataLaa');
#--------------------------------------------------------------------------------------------------
/*		//define ('URL', dirname('http://' . $_SERVER['SERVER_NAME'] . $_SERVER['PHP_SELF']));
		define ('URL', $_SERVER['SCRIPT_NAME']);// bootstrap baru 5.3.8 dan fail json
		list($urlcss,$urljs) = linkBt5CssJs();
		diatas($pilih, $urlcss);
		#------------------------------------------------------------------------------------------
		binaButang($data);//versiphp();
		#------------------------------------------------------------------------------------------
		#------------------------------------------------------------------------------------------
		if($pilih != '') binaJadualJson($tajuk,$pilih);
		//binaNotaKaki($tajuk,$data,$pilih);
		#------------------------------------------------------------------------------------------
		dibawah($pilih,$urljs);
		echo "<script>\n";
		jqueryExtendA();
		jqueryExtendB();
		jqueryExtendC();
		jsPanggilFailJsonV02($data[$pilih]);
		echo "\n</script>\n</body>\n</html>";
//*/
#--------------------------------------------------------------------------------------------------
