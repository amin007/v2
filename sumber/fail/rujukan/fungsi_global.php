<?php
###################################################################################################
# fungsi global
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('semakPembolehubah')):
	function semakPembolehubah($senarai,$jadual,$p='0')
	{
		echo '<hr><pre>$' . $jadual . '=><br>';
		if($p == '0') print_r($senarai);
		if($p == '1') var_export($senarai);
		echo '</pre>';//*/
		//semakPembolehubah($ujian,'ujian',0);
		#http://php.net/manual/en/function.var-export.php
		#http://php.net/manual/en/function.print-r.php
	}
endif;//*/
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('versiphp')):
	function versiphp()
	{
		//phpinfo();
		//echo PHPVERSION() . '<br>';
		//echo PHP_VERSION . '<br>';
		//echo PHP_MAJOR_VERSION . '.' . PHP_MINOR_VERSION . '.' . PHP_RELEASE_VERSION . '<br>';
		//echo '$_SERVER=><pre>'; print_r($_SERVER); echo '</pre>';
		$paparServer = array('PATH_INFO','REQUEST_URI','PATH_TRANSLATED','PHP_SELF','QUERY_STRING',
		'REQUEST_SCHEME','SERVER_PORT');
		foreach($paparServer as $pelayan):
			echo (isset($_SERVER[$pelayan])) ?
				'<br>' . $pelayan . ' = <strong>' . $_SERVER[$pelayan] . '</strong>'
				: '<br><em> pembolehubah ' . $pelayan . ' tak wujud</em>';
		endforeach;
	}
endif;//*/
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('paparVersiPhp')):
	function paparVersiPhp()
	{
		$p = 'PHP ' . PHP_MAJOR_VERSION . '.' . PHP_MINOR_VERSION
		. '.' . PHP_RELEASE_VERSION . '';
		return $p;
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
###################################################################################################
#--------------------------------------------------------------------------------------------------
	function binaSatuJadual($senarai,$pilih)
	{
		$class = 'table table-striped table-bordered';
		//$btn = 'btn btn-outline-secondary rounded-pill btn-lg btn-block';
		$btn = 'btn btn-dark btn-lg btn-block';
		foreach($senarai as $jadual => $row):
		if($jadual == $pilih):
			$output = paparSatuJadual($row,$pilih);
			echo "\r\t" . '<h2 class="' . $btn . '" >Kod ' . ucfirst($jadual) . '</h2>'
			. "\r\t" . '<table class="' . $class . '" id="allTable">'
			//echo "\r\t" . '<table border="1">'
			. "\r\t$output\r\t" . '</table>' . "\r\r";
		endif;
		endforeach;//*/
		#
	}
#--------------------------------------------------------------------------------------------------
	function paparSatuJadual($row,$jadual)
	{
		$output = null;
		$bilBaris = count($row);
		$printed_headers = false;# mula bina jadual
		#-----------------------------------------------------------------
		for ($kira=0; $kira < $bilBaris; $kira++)
		{	# print the headers once:
			if ( !$printed_headers )
			{##===========================================================
				$output .= "\n\t<thead><tr>";
				foreach ( array_keys($row[$kira]) as $kunci ) :
				$tajuk = tajukMedanJadual($jadual,$kunci);
				$output .= "\n\t" . '<th>' . ucfirst($tajuk) . '</th>';
				endforeach;
				$output .= "\n\t" . '</tr></thead>';
				$output .= "\n\t" . '<tbody>';
			##============================================================
				$printed_headers = true;
			}
		#-----------------------------------------------------------------
			# print the data row
			$output .= "\n\t<tr>";
			foreach ( $row[$kira] as $key=>$data ) :
			$output .= "\n\t" . '<td>' . $data . '</td>';
			endforeach;
			$output .= "\n\t" . '</tr>';
		}#----------------------------------------------------------------
		$output .= "\n\t" . '</tbody>';

		return $output;//*/
	}
#--------------------------------------------------------------------------------------------------
	function binaJadual($senarai)
	{
		$class = 'table table-striped table-bordered';
		foreach($senarai as $jadual => $row):
			$output = paparJadual($row,$jadual);
			//echo "\r\t" . '<table class="'.$class.'" id="allTable">'
			echo "\r\t" . '<table border="1">'
			. $output . "\r\t" . '</table>' . "\r\r";
		endforeach;
		#
	}
#--------------------------------------------------------------------------------------------------
	function tajukMedanJadual($jadual,$kunci)
	{
		if($kunci==0) $p = '#';
		elseif($kunci==1) $p = 'Kod';
		elseif($kunci==2 & $jadual!='Pendidikan&Sijil 2022') $p = $jadual;
		elseif($kunci==2 & $jadual=='Pendidikan&Sijil 2022') $p = 'Pendidikan 2022';
		elseif($kunci==3 & $jadual=='Pendidikan&Sijil 2022') $p = 'Sijil';
		else $p = $kunci;

		return $p;
	}
#--------------------------------------------------------------------------------------------------
	function paparJadual($row,$jadual)
	{
		$output = null;
		$bil_baris = count($row);
		$printed_headers = false;# mula bina jadual
		#-----------------------------------------------------------------
		for ($kira=0; $kira < $bil_baris; $kira++)
		{	# print the headers once:
			if ( !$printed_headers )
			{##===========================================================
				$output .= "\r\t<thead><tr>";
				foreach ( array_keys($row[$kira]) as $kunci ) :
				$tajuk = tajukMedanJadual($jadual,$kunci);
				$output .= "\r\t" . '<th>' . $tajuk . '</th>';
				endforeach;
				$output .= "\r\t" . '</tr></thead>';
				$output .= "\r\t" . '<tbody>';
			##============================================================
				$printed_headers = true;
			}
		#-----------------------------------------------------------------
			# print the data row
			$output .= "\r\t<tr>";
			foreach ( $row[$kira] as $key=>$data ) :
			$output .= "\r\t" . '<td>' . $data . '</td>';
			endforeach;
			$output .= "\r\t" . '</tr></tbody>';
		}#----------------------------------------------------------------

		return $output;
	}
#--------------------------------------------------------------------------------------------------
###################################################################################################
#--------------------------------------------------------------------------------------------------
	function kiraTahun()
	{
		$thnAkhir = date("Y");

		for($i = 1921;$i <= $thnAkhir; $i++):
		    $umur = str_pad(($thnAkhir - $i), 3, '0', STR_PAD_LEFT);
		    echo '' . $i . '=' . $umur . '';
		    if (($i % 4) == 0) echo "\n";
		    else echo " | ";
		endfor;
	}
#--------------------------------------------------------------------------------------------------
	function kiraTahunJadual($p0 = null)
	{
		$thnAkhir = date("Y");
		for($i = 1921;$i <= $thnAkhir; $i++):
			$umur = str_pad(($thnAkhir - $i), 3, '0', STR_PAD_LEFT);
			$kod = $i . '=' . $umur;
			if (($i % 4) == 0)
			{
				$p1[] = array(null,$p0 . $kod);
				$p0 = null;
			}
			else $p0 .= $kod . " | ";
		endfor;
		$p1[] = array('',$p0);

		return $p1;
	}
#--------------------------------------------------------------------------------------------------
###################################################################################################
#--------------------------------------------------------------------------------------------------
	function binaJson($senarai,$pilih)
	{
		foreach($senarai as $jadual => $row):
		if($jadual == $pilih):
			$output = jsonDataTables($row,$jadual);
			echo $output;
		endif;
		endforeach;
		#
	}
#--------------------------------------------------------------------------------------------------
	function jsonDataTables($row,$jadual)
	{
		$kira = count($row);
		# cara papar output guna json
		$output = array(
			"draw"	=>	intval(1),
			"recordsTotal"	=> 	$kira,
			"recordsFiltered" => $kira,
			"data" => $row
		);

		//$output = mb_convert_encoding($output, 'UTF-8', 'UTF-8');
		//debugJson($output);
		return json_encode($output, JSON_UNESCAPED_UNICODE);
	}
#--------------------------------------------------------------------------------------------------
	function debugJson($output)
	{
		//how to check Malformed UTF-8 characters in php
		//semakPembolehubah($output,'<hr>output V2 daa');
		echo json_encode($output);
		echo '<hr>' . json_last_error_msg();# Print out the error if any
		die();# halt the script //*/
		#
	}
#--------------------------------------------------------------------------------------------------
#--------------------------------------------------------------------------------------------------
###################################################################################################
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('diatas')):
	function diatas($title = 'List Folder', $urlcss)
	{
		$linkCss = masukCss($urlcss);
		$title = ($title == null) ? 'Senarai Kod' : ucfirst($title);
		print <<<END
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1,, maximum-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<title>$title</title>
$linkCss
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
# jquery dan rakan2
#--------------------------------------------------------------------------------------------------
	function gradeTable002($url)
	{
		print <<<END
	var t = $('#allTable').DataTable({
	/*"ajax": "$url/admin/gradeAction",*/
	searchHighlight: true,
	"columnDefs": [{
		"searchable": false,
		"orderable": false,
		"targets": 0
	}],
	"order": []
	});

	t.on( 'order.dt search.dt', function (){
		t.column(0, {search:'applied', order:'applied'}).nodes().
		each( function (cell, i) {cell.innerHTML = i+1;});
	}).draw();
/* ***************************************************************************************** */
END;
		#
	}
#--------------------------------------------------------------------------------------------------
	function jqueryExtendA()
	{
		print <<<END
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
#--------------------------------------------------------------------------------------------------
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
#--------------------------------------------------------------------------------------------------
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
/* ***************************************************************************************** */

END;
		#
	}
#--------------------------------------------------------------------------------------------------
###################################################################################################
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('binaButang')):
	function binaButang($senarai)
	{
		$output = "\r\t";
		$output .= '<a class="btn btn-primary" href="../">Kembali'
		. '<i class="fa fa-binoculars"></i></a>'
		. "\n\t" . '<a class="btn btn-success rounded-pill"'
		. ' target="_blank" href="../rujukan/utama/msic-cari.html">MSIC</a>'
		. "\n\t" . '<a class="btn btn-success rounded-pill"'
		. ' target="_blank" href="../rujukan/utama/masco-cari.html">MASCO</a>'
		. "\n\t" . '<a class="btn btn-info rounded-pill"'
		. ' target="_blank" href="../rujukan/utama/institut-cari.html">Institut</a>'
		. "\n\t" . '<a class="btn btn-warning rounded-pill"'
		. ' target="_blank" href="./kod00.php">kod-lama</a>'
		. "\n\t" . '<a class="btn btn-warning rounded-pill"'
		. ' target="_blank" href="./kod2022.php">kod2022</a>'
		. "\n\t" . '<a class="btn btn-warning rounded-pill"'
		. ' target="_blank" href="./kod2022_v01.php">kod2022_v01</a>'
		. "\n\t" . '<a class="btn btn-outline-secondary rounded-pill"'
		. ' href="' . URL . '?/tahun">Tahun</a>';
		foreach($senarai as $jadual => $row):
			if($jadual != 'tahun')
			$output .= "\n\t" . '<a class="btn btn-outline-secondary rounded-pill"'
			. ' href="' . URL . '?/' .$jadual. '">'
			. ucfirst($jadual) . '</a>';
		endforeach;
		$output .= "\n\t<hr>";

		echo $output;
		#
	}
endif;//*/
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('panggilDataTable')):
	function panggilDataTable($data,$pilih)
	{
		//define ('URL', dirname('http://' . $_SERVER['SERVER_NAME'] . $_SERVER['PHP_SELF']));
		define ('URL', $_SERVER['SCRIPT_NAME']);
		include 'atas-set-001.php';//include 'diatas-001.php';
		diatas($pilih, $urlcss);
		#------------------------------------------------------------------------------------------
		binaButang($data);//versiphp();
		binaSatuJadual($data,$pilih);
		#------------------------------------------------------------------------------------------
		include 'dibawah.php';
		echo "<script>\n";
		jqueryExtendA();
		jqueryExtendB();
		jqueryExtendC();
		gradeTable002(null);
		echo "\n</script>\n</body>\n</html>";
	}
endif;//*/
#--------------------------------------------------------------------------------------------------
#--------------------------------------------------------------------------------------------------