<?php
#--------------------------------------------------------------------------------------------------
# 1. laporan tahap kesilapan kod PHP
error_reporting(E_ALL);

# 2. isytiharkan zon masa => Asia/Kuala Lumpur
date_default_timezone_set('Asia/Kuala_Lumpur');
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('dariCSV2Array01')):
	function dariCSV2Array01($filename)
	{
		# baca fail csv dan convert kepada tatasusunan
		# https://stackoverflow.com/questions/37213674/create-array-from-file-get-contents-value
		$data = array();
		$file = file_get_contents($filename, true);
		$file = str_replace('"', '', $file);//semakPembolehubah($file,'file',1);
		$row = explode(PHP_EOL,$file);

		foreach ($row as $key => $val)
		{
			$val02 = bersih($val);
			$data[$key] = explode("|",$val02);
		}
		//semakPembolehubah($data,'data');

		return $data;//*/
	}
endif;//*/
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('dariCSV2Array02')):
	function dariCSV2Array02($filename)
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
		$file = fopen($filename, "r");
		while(! feof($file))
		{
			$data[] = fgetcsv($file,2000,";");
		}
		fclose($file);//semakPembolehubah($data,'data');

		return $data;//*/
	}
endif;//*/
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('dariCsv2Array03')):
	function dariCsv2Array03($filename)
	{
		$data = [];
		$i = 0;
		if (( $handle = fopen($filename, "r")) !== false)
		{
			$columns = fgetcsv($handle, 2000, ",");
			while ( $row = fgetcsv($handle, 2000, ",") !== false )
			{
				$data[$i] = array_combine($columns, $row);
				$i++;
			}
			fclose($handle);
		}
		return $data;//*/
	}
endif;//*/
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('binaSatuJadualExcelUmum')):
	function binaSatuJadualExcelUmum($tajuk,$senarai,$pilih)
	{
		# bina css excel
		$class = 'excel';
		# bina tajuk jadual
		$namaMedan = isset($tajuk[$pilih]) ? pecahArrayKeTH($tajuk[$pilih]) : null;
		# bina tatasusunan kepada jadual
		foreach($senarai as $jadual => $row):
		if($jadual == $pilih):
			$output = '<thead>' . $namaMedan . '</thead>';
			$output .= binaJadualTanpaKepalaKaki($row,$pilih);
			$output .= binaKakiJadual($row,$pilih);
			echo '<h2>Kod ' . ucfirst($jadual) . '</h2>'
			. "\n\n\t" . '<table class="' . $class . '" id="semuaJadual">'
			//. "\n\n\t" . '<table border="1" id="semuaJadual">'
			. "\r\t$output\r\n\t</table>\r\r";
		endif;
		endforeach;//*/
		#
	}
endif;
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('binaJadualTanpaKepalaKaki')):
	function binaJadualTanpaKepalaKaki($row,$jadual)
	{
		$output = null;
		$bilBaris = count($row);
		$cetak_tajuk_utama = false;# mula bina jadual
		$output = "\n\t" . '<tbody>';
		#----------------------------------------------------------------------
		for ($kira=0; $kira < $bilBaris; $kira++)
		{#---------------------------------------------------------------------
			# papar baris data dari tatasusunan
			$output .= "\n\t<tr>";
			foreach ( $row[$kira] as $key=>$data ) :
				$output .= ($key === 0 ) ? "\n\t\t" . '<td>' . $kira . '</td>'
				: "\n\t\t" . '<td>' . $data . '</td>';
				$output .= "<!-- $key|$kira -->";
			endforeach;
			$output .= "\n\t" . '</tr>';
		}#---------------------------------------------------------------------
		$output .= "\n\t" . '</tbody>';

		return $output;//*/
	}
endif;
#--------------------------------------------------------------------------------------------------
###################################################################################################
require '../fungsi_global.php';
###################################################################################################
$tajuk['mcpaBandinganDua'] = '#,S,MSIC 2025,MCPA 2009v2.0 as at 29.05.2026,'
. 'MCPA 2009v2.0 as at 09.06.2026,DESC MCPA 2009 v2.0,MSIC 2008,MCPA 2009,DESC MCPA 2009 v1.1,'
. 'CPC 2.0,DESC CPC 2.0,CPC 3.0,DESC CPC 3.0,HS 2022 (10D),DESC HS 2022 (10D)';
$data['mcpaBandinganDua'] = dariCSV2Array01($filename = 'mcpa bandingan2.txt');
$tajuk['mcpaCorete'] = '#,SECTION,MSIC 2025,CLASS,CLASS DESCRIPTION,MCPA 2009v2.0-29.05.2026,'
. 'MCPA 2009 v2.0-09.06.2026,DESCRIPTION,MCPA 2009v1.1,nota';
$data['mcpaCorete'] = dariCSV2Array01($filename = 'mcpa corete.csv');
$pilih = 'mcpaBandinganDua';
//$pilih = 'mcpaCorete';
###################################################################################################
//$data['mcpaBandingan1'] = dariCSV2Array00($fail02);
//$data['mcpaBandingan2'] = dariCSV2Array002($fail02);
//$data['mcpaBandingan3'] = dariCSV2Array03($fail01);
#--------------------------------------------------------------------------------------------------
//semakPembolehubah($fail01,'fail01');
//semakPembolehubah($pilih,'pilih');
//semakPembolehubah($tajuk,'tajuk',0);
//semakPembolehubah($data['mcpaBandinganDua'],'mcpaBandinganDua',0);
//semakPembolehubah($data['mcpaCorete'],'mcpaCorete',0);
#--------------------------------------------------------------------------------------------------
		//define ('URL', dirname('http://' . $_SERVER['SERVER_NAME'] . $_SERVER['PHP_SELF']));
		define ('URL', $_SERVER['SCRIPT_NAME']);// bootstrap baru 5.3.8 dan fail json
		list($urlcss,$urljs) = linkBt5CssJs();
		diatas($pilih, $urlcss);
		#------------------------------------------------------------------------------------------
		binaButang($data);//versiphp();
		#------------------------------------------------------------------------------------------
		echo '<div class="input-group mb-3 w-50">'
		. "\n\t" . '<span class="input-group-text"><i class="fa fa-search"></i></span>'
		. "\n\t" . '<input type="search" id="carian" class="form-control" placeholder="Cari dalam jadual...">'
		. "\n\t" . '<span class="input-group-text" id="bilanganPadan"></span><!-- / id="bilanganPadan" -->'
		. "\n\t" . '</div><!-- / class="input-group mb-3 w-50" -->'
		. "\n\t" . '<style>table.excel span.highlight { background-color: #ffff00; }</style>'
		. "\n";
		#------------------------------------------------------------------------------------------
		echo '<h1>TableExcel - ' . $pilih . ' </h1>';# buat tajuk besar
		if($pilih != '') binaSatuJadualExcelUmum($tajuk,$data,$pilih);
		#------------------------------------------------------------------------------------------
		dibawah($pilih,$urljs);
		echo "<script>\n";
		jqueryExtendA();jqueryExtendB();jqueryExtendC();jqueryCarian();
		echo "\n</script>\n</body>\n</html>";
//*/
#--------------------------------------------------------------------------------------------------
	function jqueryCarian()
	{
		print <<<END
/* ***************************************************************************************** */
$(function () {
	var \$jadual = $('table.excel');
	var \$baris = \$jadual.find('tbody tr');
	var pemasa;

	$('#carian').on('input', function () {
		var kata = $.trim(this.value);
		clearTimeout(pemasa);
		pemasa = setTimeout(function () { tapis(kata); }, 200);
	});

	function tapis(kata) {
		\$jadual.unhighlight();
		if (kata === '') {
			\$baris.show();
			$('#bilanganPadan').text('');
			return;
		}
		var padan = 0;
		var kataKecil = kata.toLowerCase();
		\$baris.each(function () {
			// td sahaja, supaya nombor baris (th) tidak turut dicari
			var ada = $(this).find('td').text().toLowerCase().indexOf(kataKecil) > -1;
			$(this).toggle(ada);
			if (ada) { padan++; }
		});
		\$baris.filter(':visible').highlight(kata);
		$('#bilanganPadan').text(padan + ' baris');
	}
});
/* ***************************************************************************************** */
END;
		#
	}
#--------------------------------------------------------------------------------------------------
