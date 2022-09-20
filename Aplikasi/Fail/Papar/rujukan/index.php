<?php
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('semakPembolehubahA')):
	function semakPembolehubahA($senarai,$jadual='entahlah',$p=2)
	{
		# semak $senarai adalah array atau tidak
		$semak = is_array($senarai) ? 'array' : 'bukan';
		if($semak == 'array'):
			echo '<pre>$' . $jadual . '=><br>';
			if($p == '0') print_r($senarai);
			if($p == '1') var_export($senarai);
			echo '</pre>' . "\n";
		else:
			echo tagVar($senarai,$jadual,$p);
		endif;
		//$this->semakPembolehubah($ujian,'ujian',0);
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
		# setkan tatasusunan
		$p[1] = "<$p1>\$$jadual = $senarai</$p1><br>\n";
		$p[2] = "<$p2>\$$jadual = $senarai</$p2><br>\n";
		$p[3] = "<$p3>\$$jadual = $senarai</$p3><br>\n";
		$p[4] = "<$p4>\$$jadual = $senarai</$p4><br>\n";
		#
		return $p[$pilih];
	}
endif;//*/
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('binaSatuJadual')):
	function binaSatuJadual($senarai,$pilih)
	{
		$class = 'excel';//'table table-striped table-bordered';
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
endif;
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('paparSatuJadual')):
	function paparSatuJadual($row,$jadual)
	{
		$output = null;
		$bilBaris = count($row);
		$cetak_tajuk_utama = false;# mula bina jadual
		#-----------------------------------------------------------------
		for ($kira=0; $kira < $bilBaris; $kira++)
		{	# papar tajuk jadual sekali sahaja :
			if ( !$cetak_tajuk_utama )
			{##===========================================================
				$output .= "\n\t<thead><tr>";
				foreach ( array_keys($row[$kira]) as $tajuk ) :
				$output .= "\n\t" . '<th>' . ucfirst($tajuk) . '</th>';
				endforeach;
				$output .= "\n\t" . '</tr></thead>';
				$output .= "\n\t" . '<tbody>';
			##============================================================
				$cetak_tajuk_utama = true;
			}
		#-----------------------------------------------------------------
			# papar baris data dari tatasusunan
			$output .= "\n\t<tr>";
			foreach ( $row[$kira] as $key=>$data ) :
			$output .= "\n\t\t" . '<td>' . $data . '</td>';
			endforeach;
			$output .= "\n\t" . '</tr>';
		}#----------------------------------------------------------------
		$output .= "\n\t" . '</tbody>';

		return $output;//*/
	}
endif;
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('tajukMedanJadual')):
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
endif;//*/
#--------------------------------------------------------------------------------------------------
?>
<h1> Tajuk daa </h1>
<div style="background:#ffffff">
<?php
//semakPembolehubahA($this->senarai,'senarai');
binaSatuJadual($this->senarai,$this->jadual);
?>
</div>