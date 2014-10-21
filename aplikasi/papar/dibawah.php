<!-- Nota Kaki --><br>
<footer>
<div class="container" style="background-color:#d44413;text-align:center;color:yellow;font-size:16px;">
	&copy; Hak Cipta Terperihara. <span id="clock">Clock</span>
</div><div class="container" style="text-align:center;color:yellow;font-size:16px;">
	<?php //=$takwim;
	$style = 'style="color:red;font-size:16px;"';
	$alamatIP ='Alamat IP : <span ' . $style . '>' . $_SERVER['REMOTE_ADDR'] . '</span>'; 
	$hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);
	$server=$_SERVER["SERVER_NAME"];
	$namaPC = ' Nama PC : <span ' . $style . '>' . $hostname . '</span>';
	$namaServer = 'Server : <span ' . $style . '>' . $server . '</span>';
	$span = '<span class="divider"></span>';
	$spanSemak = '<span class="divider">| Semak</span>';
	$spanAmp = '<span class="divider"> &amp;</span>';
	$spanW3C = '<span class="divider"> di W3C</span>';
	?>
	<ul class="pager">
    <li><a href="#"><?php echo $alamatIP ?></a></li>
	<li><a href="#"><?php echo $namaPC ?></a></li>
	<li><a href="#"><?php echo $namaServer ?></a></li>
	</ul>
	<ul class="pager">
	<li><a target="_top" href="http://english.amin007.org">English</a></li>
	<li><a target="_top" href="http://www.amin007.org/melayu">Malay</a></li>
	<li><a target="_top" href="http://localhost">Muka Depan</a><?php echo $spanSemak ?></li>
	<li><a target='_blank' href='http://validator.w3.org/check/referer'>HTML</a><?php echo $spanAmp ?></li>
	<li><a target='_blank' href='http://jigsaw.w3.org/css-validator/check/referer'>CSS</a><?php echo $spanW3C ?></li>
	</ul>
       
</div>
</footer>
<!-- Tempat Javascrip -->
<script src="http://www.google-analytics.com/urchin.js" type="text/javascript"></script>
<script type="text/javascript">_uacct = "UA-2514377-1";urchinTracker();</script>
<?php
if (isset($this->js)) 
{
	foreach ($this->js as $js)
	{
		echo "\n" . '<script type="text/javascript" src="' . JS . $js .'"></script>';
	}
}

include 'tadbir/div_float.php'; echo "\n"; 
$style = 'style="color:yellow;font-size:16px;"';
$dptUrl = url_alamat();
if ($dptUrl[2]<>'pautan') { ?>
<div id="divBottomLeft" style="border:3px double #FFFFFF; position:absolute; 
bgcolor=#ffffff;background-color:#d44413;">
<a <?php echo $style ?> href="#atas">Atas</a><br>
<a <?php echo $style ?> href="#bawah">Bawah</a><br>
<a <?php echo $style ?> href="pautan/papar" target="_blank">Tambah Koleksi</a>
</div>
<?php } else {echo '';} ?>
<a name="bawah"></a>
</body>
</html>

