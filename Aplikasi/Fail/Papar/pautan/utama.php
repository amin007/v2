<?php
# semak pembolehubah dulu #########################################################################
###################################################################################################
#--------------------------------------------------------------------------------------------------
$arr = get_defined_functions();
$kira = count($arr['internal']);
$kira2 = count($arr['user']);
#--------------------------------------------------------------------------------------------------
//$this->semakPembolehubah($kira,'jum internal');
//$this->semakPembolehubah($kira2,'jum user');
//$this->semakPembolehubah($arr['user'],'semak fungsi',0);
//$this->semakPembolehubah($senarai,'senarai');# Semak data dulu
//$this->semakPembolehubah($this->senarai,'senarai');# Semak data dulu
#--------------------------------------------------------------------------------------------------
###################################################################################################
#--------------------------------------------------------------------------------------------------
	function pautan($name,$web)
	{
		$icon1 = '<i class="fas fa-globe-asia fa-spin"></i>';
		$icon2 = '<i class="far fa-folder fa-spin"></i>';
		$icon = ($name != $web) ? $icon1 : $icon2;
		$link = ($web == null) ? $name : '<a target="_blank" href="' . $web
		. '">' . $name . '</a>';
		return "\n" . '&nbsp;&nbsp;' . $icon . $link . '<hr>';
	}
#--------------------------------------------------------------------------------------------------
	function kiraPaparan()
	{
		$kira[01] = $kira[02] = $kira[03] = 0;
		//$kira[02] = 16;$kira[03] = 16;
		foreach($this->dns as $name => $web):
			$data = explode('|', $web);
			//$data0 = strlen($data[0]);
			if(strlen($data[1]) > $kira[01]) $kira[01] = strlen($data[1]);
			if(strlen($data[2]) > $kira[02]) $kira[02] = strlen($data[2]);
			if(strlen($data[3]) > $kira[03]) $kira[03] = strlen($data[3]);
		endforeach;

		return $kira;
	}
#--------------------------------------------------------------------------------------------------
	function paparan($web, $test)
	{
		# set pembolehubah utama
		$p1 = 'pre';#https://www.w3schools.com/tags/tag_var.asp
		$p2 = 'kbd';
		$p3 = 'code';
		$p4 = 'samp';
		$kira = kiraPaparan();
		$data = explode('|', $web);
		$semak01 = ($kira[01] - strlen($data[1]) + 1);
		$semak02 = ($kira[02] - strlen($data[2]) + 1);
		$semak03 = ($kira[03] - strlen($data[3]) + 1);
		# papar
			$p = "\n<$p2>| " . $data[1];
			for($i = 1; $i < $semak01; $i++): $p .= "&nbsp;"; endfor;
			$p .=  "|" . $data[2];
			for($i = 1; $i < $semak02; $i++): $p .= "&nbsp;"; endfor;
			$p .= "|" . $data[3];
			for($i = 1; $i < $semak03; $i++): $p .= "&nbsp;"; endfor;
			$p .= "&nbsp;|</$p2><hr>";
		#
		return $p;
	}
#--------------------------------------------------------------------------------------------------
?>
<h1><a class="btn btn-outline-secondary btn-lg butangBulat" href="http://jpmuar07-pc/v3/">
<small>Kembali ke pangkal jalan</small></a></h1>

<hr>
<h1 class="text-center">&nbsp;<span class="bg-secondary butangBulat">&nbsp;<?php
echo $this->Tajuk_Muka_Surat ?>&nbsp;</span></h1>
<!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
<div class="container bg-light text-dark">
<?php
# papar data 
###################################################################################################
#--------------------------------------------------------------------------------------------------
foreach($this->senarai as $kunci => $jadual):
foreach($jadual as $name => $web):
	echo pautan($name,$web);
endforeach;
endforeach;
#--------------------------------------------------------------------------------------------------
foreach($this->dns as $kunci => $jadual):
foreach($jadual as $name => $web):
	echo paparan($name,null);
endforeach;
endforeach;
#--------------------------------------------------------------------------------------------------
?>
</div><!-- / class="container" -->
<!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->