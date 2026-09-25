<?php
###################################################################################################
# fungsi global
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('semakPembolehubah')):
	function semakPembolehubah($senarai,$jadual='entahlah',$p=2)
	{
		# semak $senarai adalah array atau tidak
		$semak = is_array($senarai) ? 'array' : 'bukan';
		if($semak == 'array'):
			echo '<pre>$' . $jadual . '=><br>';
			if($p == '0') print_r($senarai);
			if($p == '1') var_export($senarai);
			echo '</pre>' . "\n";
		else:
			//echo tagVar($senarai,$jadual,$p);
			echo tagVar2($senarai,$jadual,$p);
		endif;
		//$this->semakPembolehubah($ujian,'ujian',0);
		//semakPembolehubah($ujian,'ujian');
		#http://php.net/manual/en/function.var-export.php
		#http://php.net/manual/en/function.print-r.php
	}
endif;//*/
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('tagVar')):
	function tagVar($senarai,$jadual,$pilih)
	{
		# set pembolehubah utama
		$p1 = 'pre';#https://www.w3schools.com/tags/tag_var.asp
		$p2 = 'kbd';
		$p3 = 'code';
		$p4 = 'samp';
		$p5 = 'var';
		# setkan tatasusunan
		$p[0] = "<$p1>\$$jadual = $senarai</$p1><br>\n";
		$p[1] = "<$p1>\$$jadual = $senarai</$p1><br>\n";
		$p[2] = "<$p2>\$$jadual = $senarai</$p2><br>\n";
		$p[3] = "<$p3>\$$jadual = $senarai</$p3><br>\n";
		$p[4] = "<$p4>\$$jadual = $senarai</$p4><br>\n";
		$p[5] = "<$p5>\$$jadual = $senarai</$p5><br>\n";
		#
		return $p[$pilih];
	}
endif;//*/
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('tagVar2')):
	function tagVar2($senarai,$jadual,$pilih)
	{
		# set pembolehubah utama
		$tag = [#https://www.w3schools.com/tags/tag_var.asp
			1 => 'pre',
			2 => 'kbd',
			3 => 'code',
			4 => 'samp',
			5 => 'var',
		];
		# setkan tatasusunan
		$pilih = $tag[$pilih] ?? 'pre'; // default selamat
		#
		return "<$pilih>\$$jadual = $senarai</$pilih><br>\n";
	}
endif;//*/
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('bersih')):
	/** */
	function bersih($papar)
	{
		# lepas lari aksara khas dalam SQL
		//$papar = mysql_real_escape_string($papar);
		# buang ruang kosong (atau aksara lain) dari mula & akhir
		$papar = trim($papar);
		# tukar kod %20 kepada space
		$papar = myUrlEncode($papar);

		return $papar;
	}
endif;
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('myUrlEncode')):
	function myUrlEncode($string)
	{
		# https://www.php.net/urlencode
		$entities = array('%20', '%21', '%2A', '%27', '%28', '%29', '%3B', '%3A', '%40', '%26',
		'%3D', '%2B', '%24', '%2C', '%2F', '%3F', '%25', '%23', '%5B', '%5D');
		$replacements = array(' ', '!', '*', "'", "(", ")", ";", ":", "@", "&", "=", "+", "$",
		",", "/", "?", "%", "#", "[", "]");

		//return str_replace($entities, $replacements, urlencode($string));
		return str_replace($entities, $replacements, $string);
	}
endif;//*/
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('linkBt5CssJs')):
	function linkBt5CssJs()
	{
		# setkan jquery, bootstrap dan font awesome sama ada local atau cdn
		## cdn jquery =============================================================================
		//$jquery_cdn = '//code.jquery.com/jquery-2.2.3.min.js';
		$jquery_cdn = '//code.jquery.com/jquery-3.3.1.js';
		## cdn bootstrap 3.3.7 ====================================================================
		$bootstrapJS_cdn = '//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js';
		$bootstrapCSS_cdn = '//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css';
		$ceruleanCSS_cdn = '//maxcdn.bootstrapcdn.com/bootswatch/3.3.7/cerulean/bootstrap.min.css';
		$fontawesome_cdn = '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min'
		. '.css';
		## cdn bootstrap 4.1.3 ====================================================================
		$bootstrapJS_413 = '//stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js';
		$bootstrapCSS_413 = '//stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css';
		$ceruleanCSS_413 = '//stackpath.bootstrapcdn.com/bootswatch/4.1.3/cerulean/bootstrap.min'
		. '.css';
		## cdn bootstrap aka bt5 5.3.8 ============================================================
		$bt538_CSS = '//cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css';
		$bt538_JS = '//cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js';
		## cdn fontawesome aka fa =================================================================
		$fontawesome_510 = '//use.fontawesome.com/releases/v5.1.0/css/all.css';
		$fontawesome_5140 = '//use.fontawesome.com/releases/v5.14.0/css/all.css';
		$fa_701 = '//use.fontawesome.com/releases/v7.0.1/css/all.css';
		$fa701_cdn = '//cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/fontawesome.min.css';
		## datatables  ============================================================================
		$datatablesCSS = '//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css';
		$datatablesJSS = '//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js';
		$searchHighlightCSS = '//cdn.datatables.net/plug-ins/1.10.11/features/searchHighlight/'
		. 'dataTables.searchHighlight.css';
		$searchHighlightJSS = '//cdn.datatables.net/plug-ins/1.10.11/features/searchHighlight/'
		. 'dataTables.searchHighlight.min.js';
		###########################################################################################
		$urlcss = array($bt538_CSS,$fa_701,$datatablesCSS,$searchHighlightCSS);
		$urljs = array($jquery_cdn,$bt538_JS,$datatablesJSS,$searchHighlightJSS);
		###########################################################################################

		return array($urlcss,$urljs);//list($urlcss,$urljs) = linkBt5CssJs();
	}
endif;
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('linkBt5Dt3CssJs')):
	function linkBt5Dt3CssJs()
	{
		# setkan jquery, bootstrap dan font awesome sama ada local atau cdn
		## cdn bootstrap aka bt5 5.3.8 ============================================================
		$bt538_CSS = '//cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css';
		$bt538_JS = '//cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js';
		## cdn fontawesome aka fa =================================================================
		$fontawesome_510 = '//use.fontawesome.com/releases/v5.1.0/css/all.css';
		$fontawesome_5140 = '//use.fontawesome.com/releases/v5.14.0/css/all.css';
		$fa_701 = '//use.fontawesome.com/releases/v7.0.1/css/all.css';
		$fa701_cdn = '//cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/fontawesome.min.css';
		## datatables  ============================================================================
		$datatablesCSS = '//cdn.datatables.net/v/dt/dt-3.1.1/datatables.min.css';
		$datatablesJSS = '//cdn.datatables.net/v/dt/dt-3.1.1/datatables.min.js';
		$searchHighlightCSS = '//cdn.datatables.net/plug-ins/2.3.2/features/searchHighlight/'
		. 'dataTables.searchHighlight.css';
		$searchHighlightJSS = '//cdn.datatables.net/plug-ins/2.3.2/features/searchHighlight/'
		. 'dataTables.searchHighlight.min.js';
		/*$searchHighlightCSS = '//cdn.datatables.net/plug-ins/3.1.1/features/searchHighlight/'
		. 'dataTables.searchHighlight.css';
		$searchHighlightJSS = '//cdn.datatables.net/plug-ins/3.1.1/features/searchHighlight/'
		. 'dataTables.searchHighlight.min.js';*/
		$bartazJSS = '//bartaz.github.io/sandbox.js/jquery.highlight.js';
		###########################################################################################
		$urlcss = array($bt538_CSS,$fa_701,$datatablesCSS,$searchHighlightCSS);
		$urljs = array($bt538_JS,$datatablesJSS,$searchHighlightJSS,$bartazJSS);
		###########################################################################################

		return array($urlcss,$urljs);//list($urlcss,$urljs) = linkBt5CssJs();
	}
endif;
#--------------------------------------------------------------------------------------------------
###################################################################################################
# untuk semak tajuk medan berasaskan json
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('binaJadualJson')):
	function binaJadualJson($tajuk,$pilih)
	{
		if(isset($tajuk[$pilih])):
			janaJadualJson($tajuk[$pilih],$pilih);
		else:
			//echo 'Jadual tak wujud';
		endif;
	}
endif;//*/
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('janaJadualJson')):
	function janaJadualJson($tajuk,$pilih)
	{
		//$btn = 'btn btn-outline-secondary rounded-pill btn-lg btn-block';
		$btn = 'btn btn-dark btn-lg btn-block';
		$tableID = 'myTable';
		$tableClass = 'table table-striped table-bordered border border-black';
		$namaMedan = pecahArrayKeTH($tajuk);//semakPembolehubah($tajuk[$pilih],'tajuk',2);
		//semakPembolehubah($namaMedan,'namaMedan',2);
		#------------------------------------------------------------------------------------------
		echo "\n<!-- Table \n================================================================="
		. '============================== -->'
		. "\n\t" . '<h2 class="' . $btn . '" >Kod ' . ucfirst($pilih) . '</h2>'
		. "\n" . '<table id="' . $tableID . '" class="' . $tableClass . '" style="width:100%">'
		. "\n<thead><tr>$namaMedan</tr></thead>\n<tfoot><tr>$namaMedan</tr></tfoot>\n"
		. "</table>\n";
		#------------------------------------------------------------------------------------------
	}
endif;//*/
#--------------------------------------------------------------------------------------------------
# bina tajuk medan
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('pecahArrayKeTH')):
	function pecahArrayKeTH($data)
	{
		$tajuk = null;
		$data1 = explode(',',$data);
		foreach($data1 as $d):
			$tajuk .= '<th>' . $d . '</th>';
		endforeach;

		return $tajuk;
	}
endif;//*/
#--------------------------------------------------------------------------------------------------
###################################################################################################
# buat style khas dalam <head> bawah <link>
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('masukStyle')):
	function masukStyle($pilih)
	{
		$p = '';
		//semakPembolehubah('function masukStyle','fungsi',2);
		//semakPembolehubah($pilih,'pilih',2);
		#
		if ($pilih === 'kodSv-Msic2025vs2008'):
			$p = "\r\n" . '<style>'
			. "\r\n" . '/* Medan ke-5 => hijau muda */'
			. "\r\n" . 'table.dataTable tbody td:nth-child(5),'
			. "\r\n" . 'table.dataTable thead th:nth-child(5),'
			. "\r\n" . 'table.dataTable tfoot th:nth-child(5)'
			. "\r\n" . '{ background-color: #d8f3dc; /* hijau muda */ }'
			. "\r\n"
			. "\r\n" . '/* Medan ke-7 & ke-8 => sirap bandung Muar */'
			. "\r\n" . 'table.dataTable tbody td:nth-child(7),'
			. "\r\n" . 'table.dataTable thead th:nth-child(7),'
			. "\r\n" . 'table.dataTable tfoot th:nth-child(7),'
			. "\r\n" . 'table.dataTable tbody td:nth-child(8),'
			. "\r\n" . 'table.dataTable thead th:nth-child(8),'
			. "\r\n" . 'table.dataTable tfoot th:nth-child(8)'
			. "\r\n" . '{ background-color: #f7b2c4; /* pink sirap bandung */ }'
			. "\r\n" . '</style>';
		elseif ($pilih === 'msic2008 notakaki'):
			$p = "\r\n" . '<style>'
			//. "\r\n" . '/* Medan ke-5 => hijau muda '
			//. "\r\n" . 'table.dataTable tbody td:nth-child(5),'
			//. "\r\n" . 'table.dataTable thead th:nth-child(5),'
			//. "\r\n" . 'table.dataTable tfoot th:nth-child(5)'
			//. "\r\n" . '{ background-color: #d8f3dc; hijau muda}*/'
			//. "\r\n"
			. "\r\n" . '/* Medan ke-7 & ke-8 => sirap bandung Muar */'
			. "\r\n" . 'table.dataTable tbody td:nth-child(3),'
			. "\r\n" . 'table.dataTable thead th:nth-child(3),'
			. "\r\n" . 'table.dataTable tfoot th:nth-child(3)'
			. "\r\n" . '{ background-color: #f7b2c4; /* pink sirap bandung */ }'
			. "\r\n" . '</style>';
		elseif ($pilih === 'msic2025 notakaki'):
			$p = "\r\n" . '<style>'
			. "\r\n" . '/* Medan ke-5 => hijau muda */'
			. "\r\n" . 'table.dataTable tbody td:nth-child(3),'
			. "\r\n" . 'table.dataTable thead th:nth-child(3),'
			. "\r\n" . 'table.dataTable tfoot th:nth-child(3)'
			. "\r\n" . '{ background-color: #d8f3dc; /* hijau muda */}'
			. "\r\n"
			. "\r\n" . '/* Medan ke-7 & ke-8 => sirap bandung Muar */'
			. "\r\n" . 'table.dataTable tbody td:nth-child(5),'
			. "\r\n" . 'table.dataTable thead th:nth-child(5),'
			. "\r\n" . 'table.dataTable tfoot th:nth-child(5)'
			. "\r\n" . '{ background-color: #f7b2c4; /* pink sirap bandung */ }'
			. "\r\n" . '</style>';
		elseif ($pilih === 'msicLamaBaru') :
			$p = "\r\n" . '<style>'
			. "\r\n" . '/* Medan ke-5 => hijau muda */'
			. "\r\n" . 'table.dataTable tbody td:nth-child(3),'
			. "\r\n" . 'table.dataTable thead th:nth-child(3),'
			. "\r\n" . 'table.dataTable tfoot th:nth-child(3)'
			. "\r\n" . '{ background-color: #d8f3dc; hijau muda}'
			. "\r\n"
			. "\r\n" . '/* Medan ke-7 & ke-8 => sirap bandung Muar */'
			. "\r\n" . 'table.dataTable tbody td:nth-child(6),'
			. "\r\n" . 'table.dataTable thead th:nth-child(6),'
			. "\r\n" . 'table.dataTable tfoot th:nth-child(6)'
			. "\r\n" . '{ background-color: #f7b2c4; /* pink sirap bandung */ }'
			. "\r\n" . '</style>';
		elseif ($pilih === 'kodKp-MsicLamaBaru') :
			$p = "\r\n" . '<style>'
			. "\r\n" . '/* Medan ke-5 => hijau muda */'
			. "\r\n" . 'table.dataTable tbody td:nth-child(5),'
			. "\r\n" . 'table.dataTable thead th:nth-child(5),'
			. "\r\n" . 'table.dataTable tfoot th:nth-child(5)'
			. "\r\n" . '{ background-color: #d8f3dc; hijau muda}'
			. "\r\n"
			. "\r\n" . '/* Medan ke-7 & ke-8 => sirap bandung Muar */'
			. "\r\n" . 'table.dataTable tbody td:nth-child(7),'
			. "\r\n" . 'table.dataTable thead th:nth-child(7),'
			. "\r\n" . 'table.dataTable tfoot th:nth-child(7)'
			. "\r\n" . '{ background-color: #f7b2c4; /* pink sirap bandung */ }'
			. "\r\n" . '</style>';
		else :
		endif;

		return $p;
	}
endif;//*/
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('tukarWarnaButang')):
	function tukarWarnaButang($pilih)
	{
		$p = null;
		if(in_array($pilih,['mascoMsicV2','mascoBMBI','mascoNewss','msic'])):
			$p = 'success';
		elseif(in_array($pilih,['bandar','negeri','negara','produkmm'])):
			$p = 'info';
		else:
			$p = 'outline-secondary';
		endif;

		return $p;
	}
endif;//*/
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('binaPautan')):
	function binaPautan()
	{
		$folder = '../rujukan/utama/';
		$koleksi = array(
			array('a'=>'primary','b'=>'../','c'=>'Kembalilah<i class="fa fa-binoculars"></i>'),
			array('a'=>'success','b'=>$folder . 'msic-cari.html','c'=>'MSIC2008'),
			//array('a'=>'success','b'=>$folder . 'masco-cari.html','c'=>'MASCO2013'),
			//array('a'=>'success','b'=>$folder . 'masco2020-cari.html','c'=>'MASCO2020'),
			//array('a'=>'info','b'=>$folder . 'institut-cari.html','c'=>'Institut'),
			array('a'=>'info','b'=>$folder . 'negara-cari.html','c'=>'Negara'),
			array('a'=>'info','b'=>$folder . 'produkmm-cari.html','c'=>'ProdukMM'),
			array('a'=>'warning','b'=>'./kod00.php','c'=>'kod-lama'),
			array('a'=>'warning','b'=>'./kod2022_aes.php','c'=>'AES'),
			//array('a'=>'warning','b'=>'./kod2023.php','c'=>'kod2023'),
			array('a'=>'warning','b'=>'./kod2025.php','c'=>'DTS2025'),
			array('a'=>'secondary','b'=>'./kodStb2026.php','c'=>'kodStb2026'),
			array('a'=>'warning','b'=>'./kod2026.php','c'=>'BE2026'),
			array('a'=>'outline-secondary','b'=>URL . '?/tahun','c'=>'Tahun'),
		);

		return $koleksi;
	}
endif;//*/
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('binaButang')):
	function binaButang($senarai)
	{
		$output = '';
		foreach(binaPautan() as $masa => $kini):
			$output .= "\n\t" . '<a class="btn btn-' . $kini['a'] . ' rounded-pill"'
			. ' href="' . $kini['b'] . '">'
			. ucfirst($kini['c']) . '</a>';
		endforeach;
		foreach($senarai as $jadual => $row):
			$warnaButang = tukarWarnaButang($jadual);
			if($jadual != 'tahun')
			$output .= "\n\t" . '<a class="btn btn-' . $warnaButang . ' rounded-pill"'
			. ' href="' . URL . '?/' .$jadual. '">'
			. ucfirst($jadual) . '</a>';
		endforeach;
		$output .= "\n\t<hr>";

		echo "\n<!-- Pautan \n================================================================="
		. "============================== -->$output";
		#
	}
endif;//*/
#--------------------------------------------------------------------------------------------------
###################################################################################################
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('diatas')):
	function diatas($title, $urlcss)
	{
		$linkCss = masukCss($urlcss);
		$styleCss = masukStyle($title);
		$title = empty($title) ? 'Senarai Kod' : ucfirst($title);
		print <<<END
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1,, maximum-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<meta name="robots" content="noindex, nofollow">
<title>$title</title>
$linkCss
$styleCss
</head>
<body>
END;
		#
	}
endif;//*/
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('masukCss')):
	function masukCss($urlcss)
	{
		$p = '';
		#
		if (isset($urlcss))
		{
			foreach ($urlcss as $css)
			{
				$p .= "\n" . '<link rel="stylesheet" type="text/css" href="' . $css .'">';
			}
		}
		#
		return $p;
	}
endif;//*/
#--------------------------------------------------------------------------------------------------
###################################################################################################
#--------------------------------------------------------------------------------------------------
# jquery dan rakan2
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('gradeTable002')):
	function gradeTable002($url)
	{
		$papar = jsBuatLimitPage($pilih=2);
		print <<<END
	var t = $('#allTable').DataTable({
	searchHighlight: true,
	"columnDefs": [{
		"searchable": false,
		"orderable": false,
		"targets": 0
	}],
	$papar
	"order": []
	/* gradeTable002 */
	});
/* ***************************************************************************************** */
	/* var cariData = $('#cariData').text(); => jika cari elemen dalam paparan teks */
	var cariData = $('#cariData').data('cari');/* jika cari kod html atribut data-* */

	/* Tetapkan nilai carian dan jana semula jadual */
	if (cariData){
		t.search(cariData).draw();
	}
/* ***************************************************************************************** */
	t.on( 'order.dt search.dt', function (){
		t.column(0, {search:'applied', order:'applied'}).nodes().
		each( function (cell, i) {cell.innerHTML = i+1;});
	}).draw();
/* ***************************************************************************************** */
END;
		#
/* asal
	var t = $('#allTable').DataTable({
	/*"ajax": "$url/admin/gradeAction",*/
//*/
		#
	}
endif;//*/
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('jsPanggilFailJson')):
	function jsPanggilFailJson($failJson)
	{
		print <<<END
	var t = $('#myTable').DataTable({
	"ajax": "$failJson",
	searchHighlight: true,
	"columnDefs": [{
		"searchable": false,
		"orderable": false,
		"targets": 0
	}],
	"order": [[ 1, 'asc' ]]
    });
/* ***************************************************************************************** */
	/* var cariData = $('#cariData').text(); => jika cari elemen dalam paparan teks */
	var cariData = $('#cariData').data('cari');/* jika cari kod html atribut data-* */

	/* Tetapkan nilai carian dan jana semula jadual */
	if (cariData){
		t.search(cariData).draw();
	}
/* ***************************************************************************************** */
	t.on( 'order.dt search.dt', function (){
		t.column(0, {search:'applied', order:'applied'}).nodes().
		each( function (cell, i) {cell.innerHTML = i+1;});
    }).draw();
/* ***************************************************************************************** */

END;
	}
endif;//*/
#--------------------------------------------------------------------------------------------------
/*
// Buat DataTable Tanpa Jquery
const table = new DataTable('#myTable', {
	ajax: './utama/msic2025_notakaki.json',
	searchHighlight: true,
	columnDefs: [{
		searchable: false,
		orderable: false,
		targets: 0
	}],
	pageLength: 10,
	lengthMenu: [[5, 10, 25, 50, 100, 200, -1],[5, 10, 25, 50, 100, 200, "All"]],
	order: [[1, 'asc']]
});
//*/
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('jsPanggilFailJsonV02')):
	function jsPanggilFailJsonV02($failJson)
	{
		$papar = jsBuatLimitPage($pilih=1);
		print <<<END
/* ***************************************************************************************** */
// Buat DataTable Tanpa Jquery -> jsPanggilFailJsonV02
const table = new DataTable('#myTable', {
	ajax: './utama/msic2025_notakaki.json',
	searchHighlight: true,
	columnDefs: [{
		searchable: false,
		orderable: false,
		targets: 0
	}],
	pageLength: 10,
	lengthMenu: [[5, 10, 25, 50, 100, 200, -1],[5, 10, 25, 50, 100, 200, "All"]],
	order: [[1, 'asc']]
});
/* ***************************************************************************************** */
	/* var cariData = $('#cariData').text(); => jika cari elemen dalam paparan teks */
	var cariData = $('#cariData').data('cari');/* jika cari kod html atribut data-* */

	/* Tetapkan nilai carian dan jana semula jadual */
	if (cariData){
		t.search(cariData).draw();
	}
/* ***************************************************************************************** */
	t.on( 'order.dt search.dt', function (){
		t.column(0, {search:'applied', order:'applied'}).nodes().
		each( function (cell, i) {cell.innerHTML = i+1;});
    }).draw();
/* ***************************************************************************************** */

END;
	}
endif;//*/
#--------------------------------------------------------------------------------------------------
# jawapan kenapa data php yang tukar json, datatables tak boleh baca
#https://stackoverflow.com/questions/33582203/datatables-warning-table-usertable-invalid-json-response
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('jsPhpJson')):
	function jsPhpJson($failJson)
	{
		print <<<END
	var t = $('#myTable').DataTable({
	"ajax" : {
		"url" : "$failJson",
		"type" : "POST",
	},
	searchHighlight: true,
	"columnDefs": [{
		"searchable": false,
		"orderable": false,
		"targets": 0
	}],
	"order": [[ 1, 'asc' ]]
    });
/* ***************************************************************************************** */
	/* var cariData = $('#cariData').text(); => jika cari elemen dalam paparan teks */
	var cariData = $('#cariData').data('cari');/* jika cari kod html atribut data-* */

	/* Tetapkan nilai carian dan jana semula jadual */
	if (cariData){
		t.search(cariData).draw();
	}
/* ***************************************************************************************** */
	t.on( 'order.dt search.dt', function (){
		t.column(0, {search:'applied', order:'applied'}).nodes().
		each( function (cell, i) {cell.innerHTML = i+1;});
    }).draw();
/* ***************************************************************************************** */

END;
	}
endif;//*/
#--------------------------------------------------------------------------------------------------
# nota untuk function jsBuatLimitPage($pilih=1)
#https://stackoverflow.com/questions/9443773/how-to-show-all-rows-by-default-in-jquery-datatable
#https://datatables.net/forums/discussion/69141/set-default-page-length-option-to-100-show-entries
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('jsBuatLimitPage')):
	function jsBuatLimitPage($pilih=1)
	{
		$papar[] = '';
		$papar[] = 'pageLength: 10,' . "\n\t"
		. 'aLengthMenu: [[5, 10, 25, 50, 100, 200, -1],'
		. '[5, 10 ,25, 50, 100, 200, "All"]],'
		//. "\n\t". 'iDisplayLength: -1,'
		. '';
		$papar[] = 'pageLength: 10,' . "\n\t"
		. 'aLengthMenu: [[5, 10, 25, 50, 100, 200, 300, -1],'
		. '[5, 10 ,25, 50, 100, 200, 300, "All"]],'
		//. "\n\t". 'iDisplayLength: -1,'
		. '';

		return $papar[$pilih];
	}
endif;//*/
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('jqueryExtendA')):
	function jqueryExtendA()
	{
		print <<<END
/* ***************************************************************************************** */
jQuery.extend({
	highlight: function (node, re, nodeName, className)
	{
		if (node.nodeType === 3)
		{
			var match = node.data.match(re);
			if (match)
			{
				var highlight = document.createElement(nodeName || 'span');
				highlight.className = className || 'highlight';
				var wordNode = node.splitText(match.index);
				wordNode.splitText(match[0].length);
				var wordClone = wordNode.cloneNode(true);
				highlight.appendChild(wordClone);
				wordNode.parentNode.replaceChild(highlight, wordNode);
				return 1; //skip added node in parent
			}
		}
		else if ((node.nodeType === 1 && node.childNodes) && //only element nodes that have children
			!/(script|style)/i.test(node.tagName) && //ignore script and style nodes
			!(node.tagName === nodeName.toUpperCase() && node.className === className))
		{//skip if already highlighted
			for (var i = 0; i < node.childNodes.length; i++)
			{
				i += jQuery.highlight(node.childNodes[i], re, nodeName, className);
			}
		}
		return 0;
	}
});
/* ***************************************************************************************** */

END;
		#
	}
endif;//*/
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('jqueryExtendB')):
	function jqueryExtendB()
	{
		print <<<END
jQuery.fn.unhighlight = function (options)
{
	var settings = { className: 'highlight', element: 'span' };
	jQuery.extend(settings, options);

	return this.find(settings.element + "." + settings.className).each(function ()
	{
		var parent = this.parentNode;
		parent.replaceChild(this.firstChild, this);
		parent.normalize();
	}).end();
};
/* ***************************************************************************************** */

END;
		#
	}
endif;//*/
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('jqueryExtendC')):
	function jqueryExtendC()
	{
		print <<<END
jQuery.fn.highlight = function (words, options)
{
	var settings = { className: 'highlight', element: 'span', caseSensitive: false, wordsOnly: false };
	jQuery.extend(settings, options);

	if (words.constructor === String){words = [words];}
	words = jQuery.grep(words, function(word, i){return word != '';});
	words = jQuery.map(words, function(word, i)
	{
		return word.replace(/[-[\]{}()*+?.,\\^$|#\s]/g, "\\$&");
	});
	if (words.length == 0) { return this; };

	var flag = settings.caseSensitive ? "" : "i";
	var pattern = "(" + words.join("|") + ")";
	if (settings.wordsOnly){pattern = "\\b" + pattern + "\\b";}
	var re = new RegExp(pattern, flag);

	return this.each(function ()
	{
		jQuery.highlight(this, re, settings.element, settings.className);
	});
};

/* *********** https://bartaz.github.io/sandbox.js/jquery.highlight.js ********************* */
/* ***************************************************************************************** */

END;
		#
	}
endif;//*/
#--------------------------------------------------------------------------------------------------
###################################################################################################
# dari html ke body, dari atas ke bawah
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('panggilDataKosong')):
	function panggilDataKosong($tajuk,$data,$pilih)
	{
		//define ('URL', dirname('http://' . $_SERVER['SERVER_NAME'] . $_SERVER['PHP_SELF']));
		define ('URL', $_SERVER['SCRIPT_NAME']);// bootstrap baru 5.3.8 dan tiada data
		list($urlcss,$urljs) = linkBt5CssJs();
		diatas($pilih, $urlcss);
		#------------------------------------------------------------------------------------------
		binaButang($data);//versiphp();
		binaSatuJadual($data,$pilih);
		#------------------------------------------------------------------------------------------
		echo "\n" . '<!-- Aluan ' . "\n"
		. '==================================================================================='
		. '============ -->'
		. "\n\t" . '<h1 class="display-1">Selamat datang ke halaman kami</h1><br>'
		. "\n\t" . '<figure>'
		. "\n\t" . '<blockquote class="blockquote">'
		. "\n\t\t" . '<p>Macam mana <mark>kehidupan</mark> anda pada hari ini?<br>'
		. "\n\t\t" . 'Semoga anda ceria sepanjang masa.</p>'
		. "\n\t" . '</blockquote>'
		. "\n\t" . '<figcaption class="blockquote-footer">'
		. "\n\t\t" . 'Sila Pilih<cite title="Source Title"> Pautan </cite>Berkaitan'
		. "\n\t" . '</figcaption>'
		. "\n\t" . '</figure>'
		. "\n\t<hr>";//*/
		//binaNotaKaki($tajuk,$data,$pilih);
		#------------------------------------------------------------------------------------------
		dibawah($pilih,$urljs);
		echo "<script>\n";
		jqueryExtendA();
		jqueryExtendB();
		jqueryExtendC();
		gradeTable002(null);
		echo "\n</script>\n</body>\n</html>";
	}
endif;//*/
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('panggilDataTable07')):
	function panggilDataTable07($tajuk,$data,$pilih)
	{
		//define ('URL', dirname('http://' . $_SERVER['SERVER_NAME'] . $_SERVER['PHP_SELF']));
		define ('URL', $_SERVER['SCRIPT_NAME']);// bootstrap baru 5.3.8 dan fail json
		list($urlcss,$urljs) = linkBt5Dt3CssJs();
		diatas($pilih, $urlcss);
		#------------------------------------------------------------------------------------------
		binaButang($data);//versiphp();
		#------------------------------------------------------------------------------------------
		//echo '<h1>Table06 - ' . $pilih . ' </h1>';# buat tajuk besar
		// PHP paparkan nilai dalam atribut data
		/*echo 'cariData:<span id="cariData" data-cari="' . $cariData . '"'
		. ' class="alert alert-warning">' . $cariData . '</span>';*/
		#------------------------------------------------------------------------------------------
		if($pilih != '') binaJadualJson($tajuk,$pilih);
		//binaNotaKaki($tajuk,$data,$pilih);
		#------------------------------------------------------------------------------------------
		dibawah($pilih,$urljs);
		echo "<script>\n";
		//jqueryExtendA();jqueryExtendB();jqueryExtendC();
		jsPanggilFailJsonV02($data[$pilih]);
		echo "\n</script>\n</body>\n</html>";
	}
endif;//*/
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('dibawah')):
	function dibawah($pilih,$urljs)
	{
		//$theme = (isset($theme)) ? $theme : null;# Null coalescing operator
		$theme = ( !isset($pilih) ) ? 'Asal Bootstrap Twitter' : $pilih;
		$senaraiJS = binaSenaraiJs($urljs);

		echo "\n";
		print <<<END
<!-- Footer
=============================================================================================== -->
<footer class="footer">
	<div class="container">
		<span class="badge badge-info text-bg-info">
		&copy; Hak Cipta Terperihara 2019. Theme $theme </span>
	</div>
</footer>

<!-- khas untuk jquery dan js2 lain
=============================================================================================== -->
$senaraiJS
END;
		#
	}
endif;//*/
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('binaSenaraiJs')):
	function binaSenaraiJs($urljs)
	{
		$p = '';
		if (isset($urljs))
		foreach ($urljs as $js)
			$p .= '<script type="text/javascript" src="' . $js . '"></script>' . "\n";
		$p .= "\n";

		return $p;
	}
endif;//*/
#--------------------------------------------------------------------------------------------------
###################################################################################################
#--------------------------------------------------------------------------------------------------
# mula pangggil data
$tajuk['msic2025 notakaki'] = '#,s,msic,keterangan,msic2008,notakaki';
$data['msic2025 notakaki'] = './utama/msic2025_notakaki.json';
#--------------------------------------------------------------------------------------------------
# setkan tatasusunan yang berkaitan dengan fail json
$dataPhpJson = ['responBE2026','unitKuantitiLampiran16','aup unit kuantiti','bezaUntungRugi'];
$dataJson = ['kodstrata','msic2025 notakaki','msic2008 notakaki','mcpa'];
// buat null sebab tak wujud data json
#--------------------------------------------------------------------------------------------------
###################################################################################################
#--------------------------------------------------------------------------------------------------
# kaedah 2.1
$s = 'REQUEST_URI';//$s = 'PHP_SELF';//$s = 'QUERY_STRING';
//semakPembolehubah($_SERVER[$s],$s);
if (isset($_SERVER[$s])):
	$fail = explode('rujukan/',$_SERVER[$s]);semakPembolehubah($fail,'fail');
	$cari = explode('/',$fail[1]);semakPembolehubah($cari,'pilih');

	if(isset($cari[1])):
		$cariApa = bersih($cari[1]);
		// $cariData = bersih($cari[2] ?? ''); # Null Coalescing Operator ??
		$cariData = isset($cari[2]) ? bersih($cari[2]) : '';
		/*semakPembolehubah($cariApa,'cariApa');
		semakPembolehubah($tajuk[$cariApa],'tajuk');
		semakPembolehubah($data[$cariApa],'data');//*/

		if($cariApa == 'json'):
			$pilih = isset($cari[2]) ? $cari[2] : null;
			$cariApa = bersih($pilih);
			binaJson($data,$cariApa);
		elseif($cariApa == 'tahun'):
			$tajuk['tahun'] = '#,-,-,-,-';
			$data['tahun'] = kiraTahunJadual();
			panggilDataTable04($tajuk,$data,$cariApa);# panggil fungsi
		elseif(in_array($cariApa,$dataPhpJson)):# panggil fungsi untuk tatasusunan php => json
			panggilDataTable05($tajuk,$data,$cariApa);
		elseif(in_array($cariApa,$dataJson)):
			panggilDataTable07($tajuk,$data,$cariApa);# panggil fungsi untuk data json
		else:
			panggilDataTable04($tajuk,$data,$cariApa);# panggil fungsi
		endif;
	else:
		panggilDataKosong($tajuk,$data,null);# panggil fungsi
	endif;
else:
	panggilDataKosong($tajuk,$data,null);# panggil fungsi
endif;//*/
#--------------------------------------------------------------------------------------------------