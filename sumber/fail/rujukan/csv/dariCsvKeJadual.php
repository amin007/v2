<?php
#--------------------------------------------------------------------------------------------------
# 1. laporan tahap kesilapan kod PHP
error_reporting(E_ALL);

# 2. isytiharkan zon masa => Asia/Kuala Lumpur
date_default_timezone_set('Asia/Kuala_Lumpur');
#--------------------------------------------------------------------------------------------------
#--------------------------------------------------------------------------------------------------
###################################################################################################
require '../fungsi_global.php';
###################################################################################################
$tajuk['mcpaBandingan'] = '#,SECTION 2025,MSIC 2025,MCPA 2009v2.0-29.05.2026,MCPA 2009 v2.0-09.06.2026,'
. 'DESC NEW,CPC 3.0,DESC CPC 3.0,MSIC 2008,MCPA 2009,DESC OLD,CPC 2.0,DESC CPC 2.0,'
. 'HS 2022 (10D),DESC HS 2022 (10D)';
$data['mcpaBandingan'] = ImportCSV2Array01($filename = 'mcpa bandingan2.csv');
$tajuk['mcpaCorete'] = '#,SECTION,MSIC 2025,CLASS,CLASS DESCRIPTION,MCPA 2009v2.0-29.05.2026,'
. 'MCPA 2009 v2.0-09.06.2026,DESCRIPTION,MCPA 2009v1.1,nota';
$data['mcpaCorete'] = ImportCSV2Array01($filename = 'mcpa corete.csv');
$pilih = 'mcpaCorete';
###################################################################################################
//$data['mcpaBandingan1'] = ImportCSV2Array00($fail02);
//$data['mcpaBandingan2'] = ImportCSV2Array002($fail02);
//$data['mcpaBandingan3'] = ImportCSV2Array03($fail01);
#--------------------------------------------------------------------------------------------------
//semakPembolehubah($fail01,'fail01');
//semakPembolehubah($pilih,'pilih');
//semakPembolehubah($tajuk,'tajuk',0);
//semakPembolehubah($data['mcpaBandingan'],'mcpaBandingan',0);
//semakPembolehubah($data['mcpaCorete'],'mcpaCorete',0);
#--------------------------------------------------------------------------------------------------
		//define ('URL', dirname('http://' . $_SERVER['SERVER_NAME'] . $_SERVER['PHP_SELF']));
		define ('URL', $_SERVER['SCRIPT_NAME']);// bootstrap baru 5.3.8 dan fail json
		list($urlcss,$urljs) = linkBt5CssJs();
		diatas($pilih, $urlcss);
		#------------------------------------------------------------------------------------------
		binaButang($data);//versiphp();
		#------------------------------------------------------------------------------------------
		echo '<h1>TableExcel - ' . $pilih . ' </h1>';# buat tajuk besar
		if($pilih != '') binaSatuJadualExcelUmum($tajuk,$data,$pilih);
		#------------------------------------------------------------------------------------------
		dibawah($pilih,$urljs);
		echo "<script>\n";
		//jqueryExtendA();jqueryExtendB();jqueryExtendC();
		echo "\n</script>\n</body>\n</html>";
//*/
#--------------------------------------------------------------------------------------------------
