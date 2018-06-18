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
</head>  
<body<?php 
echo '  style="background-color:black;"'
//echo ' background="' . $lokasi . $this->gambar . '"' ?>>