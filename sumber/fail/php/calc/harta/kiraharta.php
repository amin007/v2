<?php
#==================================================================================================
include '../../fungsi_global.php';
#==================================================================================================
#--------------------------------------------------------------------------------------------------
$nilaiBuku = array(
	'0410'=>'Awal',//'Nilai buku bersih seperti pada 1.1.2021',
	'0411'=>'Baru',//'Baru termasuk import (baru & terpakai)',
	'0412'=>'Terpakai',//'Aset terpakai Malaysia',
	'0413'=>'Buat',//'Membuat / membina sendiri',
	'0414'=>'Jual Harta',//'Harta yang dijual atau ditamatkan penggunaannya dalam tahun 2021',
	'0415'=>'+-Jual Harta',//'Keuntungan (+) / kerugian (-) daripada jualan / penilaian semula harta',
	'0416'=>'Susut nilai',//'Susut nilai / perlunasan semasa',
	'0417'=>'Akhir',//'Nilai buku bersih seperti pada 31.12.2021
	'0419'=>'Borang',
	'0420'=>'Beza',
);
#--------------------------------------------------------------------------------------------------
$nilaiHarta = array(
	'01'=>'Tanah',
	'02'=>'Rumah',//'Tempat kediaman',
	'03'=>'Stor/pejabat',//'Bukan tempat kediaman (cth. stor, pejabat dsb.)',
	'04'=>'Binaan Lain',//'Binaan lain kecuali pembagunan tanah',
	'05'=>'Pembangunan Tanah',
	'06'=>'Kereta penumpang',
	'07'=>'Lori, van, pikap dsb.',
	'08'=>'Angkut Lain-lain',
	'09'=>'Perkakasan komputer',
	'10'=>'Perisian komputer',
	'11'=>'Peralatan telekomunikasi',
	'12'=>'Jentera dan kelengkapan',
	'13'=>'Drone',
	'14'=>'Perabot dan pemasangan',
	'15'=>'Paten',
	'16'=>'Muhibah/Goodwill',
	'17'=>'Kerja dalam pelaksanaan',
	'18'=>'Lain-lain',
	'99'=>'JUMLAH',
	'99A'=>'Borang',
	'99B'=>'Beza',
);
#--------------------------------------------------------------------------------------------------
$tajuk = array('harta','00','Awal','Baru','Terpakai','Buat','Jual Harta','+-Jual Harta',
'Susut nilai','Akhir','Borang','Beza');
$tajuk2 = array('jadual','','0410','0411','0412','0413','0414','0415',
'0416','0417','Borang','Beza');
#--------------------------------------------------------------------------------------------------
function data01($kira,$kunci,$nilai,$kunci2,$nilai2)
{
	return $nilai;
}
#--------------------------------------------------------------------------------------------------
function data02($kira,$kunci,$nilai,$kunci2,$nilai2)
{
	$kira = 0;
	return  '<input type="number" name="z' . $kunci . $kunci2 . '"'
		. ' value="' . $kira . '">';
}
#--------------------------------------------------------------------------------------------------
function data03($kira,$kunci,$nilai,$kunci2,$nilai2)
{
	return '<output name="z' . $kunci . $kunci2 . '"></output>';
}
#--------------------------------------------------------------------------------------------------
function cariData($kira,$kunci,$nilai,$kunci2,$nilai2)
{
	if($kunci2 == '0417'): $data = data03($kira,$kunci,$nilai,$kunci2,$nilai2);
	elseif($kunci2 == '0420'): $data = data03($kira,$kunci,$nilai,$kunci2,$nilai2);
	elseif($kunci == '99'): $data = data03($kira,$kunci,$nilai,$kunci2,$nilai2);
	elseif($kunci == '99B'): $data = data03($kira,$kunci,$nilai,$kunci2,$nilai2);
	else: $data = data02($kira,$kunci,$nilai,$kunci2,$nilai2);
	endif;
	return '<td>' . $data . '</td>';
}
#--------------------------------------------------------------------------------------------------
#==================================================================================================
#--------------------------------------------------------------------------------------------------
function kiraNilai01($bil)
{
	$harta = 'z010417.value = parseInt(z010410.value)+parseInt(z010411.value)'
	. '+parseInt(z010412.value)+parseInt(z010413.value)'
	. '-parseInt(z010414.value)+parseInt(z010415.value)'
	. '-parseInt(z010416.value)';

	$beza = 'z010420.value = parseInt(z010417.value)-parseInt(z010419.value)';

	return array($harta,$beza);
}
#--------------------------------------------------------------------------------------------------
function kiraNilai02($bil)
{
	$harta = 'z'.$bil.'0417.value = parseInt(z'.$bil.'0410.value)+parseInt(z'.$bil.'0411.value)'
	. '+parseInt(z'.$bil.'0412.value)+parseInt(z'.$bil.'0413.value)'
	. '-parseInt(z'.$bil.'0414.value)+parseInt(z'.$bil.'0415.value)'
	. '-parseInt(z'.$bil.'0416.value)';

	$beza = 'z'.$bil.'0420.value = parseInt(z'.$bil.'0417.value)-parseInt(z'.$bil.'0419.value)';

	return array($harta,$beza);
}
#--------------------------------------------------------------------------------------------------
function kiraNilai03($nilaiHarta,$col)
{
	$harta = '0';
	foreach($nilaiHarta as $kira => $angka):
		if(!in_array($kira,array('99','99A','99B'))):
		$harta .= '+parseInt(z'.$kira.$col.'.value)';
		endif;
	endforeach;

	$beza = 0;
	return array($harta,$beza);
}
#--------------------------------------------------------------------------------------------------
#==================================================================================================
diatasKompleks('Kira Harta');
#==================================================================================================
$kira = 1;
?>
<p>sumber = https://www.tutorialspoint.com/How-to-include-the-result-of-a-calculation-in-HTML5</p>
<form oninput="sumresult.value = parseInt(z1.value)+parseInt(z2.value)+parseInt(z3.value)">
<input type="range" name="z1" value = "0" /> +
<input type="number" name="z2" value = "30" /> +
<input type="number" name="z3" value = "60" /><br />
The output is: <output name="sumresult"></output>
</form>
<hr>
<p> 0417 = 0410+0411+0412+0413 -(0414) +(0415) -(0416)</p>
<table class="excel"><tr><td>
<?php
$kira2 = '0410';
//foreach($nilaiBuku as $kira2 => $angka2):
list($harta,$beza) = kiraNilai03($nilaiHarta,$kira2);
//echo "$harta;\n$beza;\n";
echo "z99$kira2.value = $harta;<hr>";
//endforeach;
?>
The output is: <output name="z990410"></output>
</td></tr></table>


<?php
echo '<form oninput="';
foreach($nilaiHarta as $kira => $angka):
	list($harta,$beza) = kiraNilai02($kira);
	echo "$harta;\n$beza;\n";
endforeach;
echo '">';
?>
<table class="excel">
<?php
#==================================================================================================
$kira = 1;
#--------------------------------------------------------------------------------------------------
echo '<tr>';
foreach($tajuk2 as $kunci => $nilai):
	echo '<td>'.  $nilai . '</td>';
endforeach;
echo '</tr>';
#--------------------------------------------------------------------------------------------------
foreach($nilaiHarta as $key => $val):
	echo "\n<tr>\n\t";
	echo '<td>-</td><td>' . $key . '</td>';
	//echo '<td>'.  $val . '</td><td>' . $key . '</td>';
	foreach($nilaiBuku as $key2 => $val2):
		$data = cariData($kira,$key,$val,$key2,$val2);
		echo "\n\t" . $data;
	endforeach;
	echo "\n</tr>";
endforeach;
#--------------------------------------------------------------------------------------------------
#==================================================================================================
?></table>
</form>

</body>
</html>