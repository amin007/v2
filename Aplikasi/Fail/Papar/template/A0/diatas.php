<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title><?php
$namaServer = $_SERVER["SERVER_NAME"];
$tajuk[0] = (($namaServer=='localhost') || ($namaServer=='sidapmuar') )? 
"Ini kat komputer kaulah":" Di Amin007 Homepage";

$tajuk[1] = $this->Tajuk_Muka_Surat; // papar title

$dpt_url = dpt_url();
$tajuk[2] = (empty($dpt_url[2])) ? null 
	: '/' . $dpt_url[2];
	
echo $tajuk[0] . '[' . $tajuk[1] . $tajuk[2] . ']' ;
 ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Nama saya Amin, berasal dari muar, johor. 
Laman web ini menceritakan tentang Dunia Imaginasi Saya dimana
saya akan paparkan kepada anda semua biodata saya, gambar-gambar saya, 
fail-fail atau perisian yang biasa saya guna, projek-projek yang sedang atau 
telah saya jalankan dan juga subdomain dalam laman web saya">
<meta name="keywords" content="idea kreatif inovatif projek link Dunia Imaginasi Saya">
<meta name="author" content="Amin007 Ledang">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="<?=FONTAWESOME?>" rel="stylesheet" type="text/css">
<link href="<?=BOOTSTRAPCSS?>" rel="stylesheet" type="text/css">
<?php
if (isset($this->css)) 
{
	foreach ($this->css as $css)
	{
		echo "\n"; // '<link rel="stylesheet" type="text/css" href="' . $css . '">';
		?><link rel="stylesheet" type="text/css" href="<?php echo SUMBER . $css ?>"><?php
	}
}
echo "\n";

?>
<style type="text/css">
table.excel {
	border-style:ridge;
	border-width:1;
	border-collapse:collapse;
	font-family:sans-serif;
	font-size:11px;
}
table.excel thead th, table.excel tbody th {
	background:#CCCCCC;
	border-style:ridge;
	border-width:1;
	text-align: center;
	vertical-align: top;
}
table.excel tbody th { text-align:center; vertical-align: top; }
table.excel tbody td { vertical-align:bottom; }
table.excel tbody td 
{ 
	padding: 0 3px; border: 1px solid #aaaaaa;
	background:#ffffff;
}
.fa-input {font-family: FontAwesome}
</style>
<script type='text/javascript'>
<!-- //Mula Papar Jam
var dayarray=new Array("Ahad","Isnin","Selasa","Rabu","Khamis","Jumaat","Sabtu")
var bulan=new Array("Januari","Februari","Mac","April","Mei","Jun",
"Julai","Ogos","September","Oktober","November","Disember")
function getthedate()
{
	var mydate=new Date()
	var year=mydate.getYear()
	if (year < 1000) year+=1900
	var day=mydate.getDay()
	var month=mydate.getMonth()
	var daym=mydate.getDate()
	if (daym<10) daym="0"+daym
	var hours=mydate.getHours()
	var minutes=mydate.getMinutes()
	var seconds=mydate.getSeconds()
	var dn="AM"
	if (hours>=12)dn="PM"
	if (hours>12){hours=hours-12}
	{
	 d = new Date(); Time24H = new Date();
	 Time24H.setTime(d.getTime() + (d.getTimezoneOffset()*60000) + 3600000);
	 InternetTime = Math.round((Time24H.getHours()*60+Time24H.getMinutes()) / 1.44);
	 if (InternetTime < 10) InternetTime = '00'+InternetTime;
	 else if (InternetTime < 100) InternetTime = '0'+InternetTime;
	}
	if (hours==0)hours=12
	if (minutes<=9)minutes="0"+minutes
	if (seconds<=9)seconds="0"+seconds
	//change font size here
	var cdate=" ["+dayarray[day]+" "+daym+" "+bulan[month]+" "+year+
	". Pukul "+hours+":"+minutes+":"+seconds+" "+dn+ " ]"

	if (document.all) 
		{document.all.masa.innerHTML=cdate;
		document.all.clock.innerHTML=cdate;}
	else if (document.getElementById)
		{document.getElementById("masa").innerHTML=cdate;
		document.getElementById("clock").innerHTML=cdate;}
	else document.write(cdate)
}
if (!document.all&&!document.getElementById) getthedate()

function goforit()
{
if (document.all||document.getElementById)
setInterval("getthedate()",1000)
}
window.onload=goforit
//function onload(){goforit();populate();} 
//  Tutup Papar Jam -->
</script><?php
$namaServer = $_SERVER["SERVER_NAME"];
if (($namaServer=='localhost') || ($namaServer=='sidapmuar') ):
	echo null;
else:?>
<!-- nuffnang -->
<script type="text/javascript">
nuffnang_bid = "2bb5639c70db0006532074b0c35f4b93";
</script>
<script type="text/javascript" src="http://synad2.nuffnang.com.my/k.js"></script>
<!-- nuffnang-->
<?php
endif;
?>
</head>  
<body<?php 
echo '  style="background-color:black;"'
//echo ' background="' . $lokasi . $this->gambar . '"' ?>>