<?php
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
				foreach ( $row[$kira] as $tajuk=>$data ) :
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
binaSatuJadual($this->senarai,$this->jadual);
?>
</div>