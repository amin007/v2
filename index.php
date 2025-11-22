<?php
#--------------------------------------------------------------------------------------------------
/*
 * Ini fail index.php 
 * Dalam ini kita isytiharkan
 * 1. laporan tahap kesilapan kod PHP 
 * 2. zon masa kita pada Asia/Kuala Lumpur
 * 3. setkan tatarajah sistem
 * 4. masukkan semua fail class dari folder Aplikasi/Kelas
 * 5. istihar class Mulakan
 */
#--------------------------------------------------------------------------------------------------
# 1. laporan tahap kesilapan kod PHP
error_reporting(E_ALL);

# 2. isytiharkan zon masa => Asia/Kuala Lumpur
date_default_timezone_set('Asia/Kuala_Lumpur');
#--------------------------------------------------------------------------------------------------
# 3. semak sama ada wujud tatarajah sistem
if (!file_exists('tatarajah.php'))
{
echo '<!DOCTYPE html>
<html lang="ms">
<head>
<meta charset="utf-8">
<title>Ralat - Fail Tidak Dijumpai</title>
<style>
body {
	font-family: Arial, sans-serif; background: #f8f9fa; padding: 50px; text-align: center;
}
.error-box
{
	max-width: 600px; margin: 0 auto; padding: 30px;
	background: white; border-radius: 10px;
	box-shadow: 0 5px 15px rgba(0,0,0,0.1);
}
h1 { color: #dc3545; }
</style>
</head>
<body>
<div class="error-box">
	<h1> Fail Hilang!</h1>
	<p>Maaf, sistem tidak dapat mencari fail <strong>tatarajah.php</strong>.</p>
	<p>Sila:</p>
		<ol style="text-align: left; display: inline-block;">
		<li>Buat fail bernama <code>tatarajah.php</code></li>
		<li>Letakkan dalam folder yang sama dengan <code>index.php</code></li>
		<li>Refresh semula halaman ini</li>
		</ol>
	<hr><small>Untuk pembangun: ' . dirname(__FILE__) . '\tatarajah.php</small>
</div>
</body>
</html>';
	exit;
}
#--------------------------------------------------------------------------------------------------
# 3.2 setkan tatarajah sistem
require 'tatarajah.php'; // baru require kalau dah confirm wujud
#--------------------------------------------------------------------------------------------------
/* 4. masukkan semua fail class dari folder Aplikasi/Class
** URL : http://www.php-fig.org/psr/psr-4/examples/
** Contoh pelaksanaan projek khusus.
**
** @param string $class nama class yang sebenar tanpa namespace.
** @return void
**/
spl_autoload_register(function ($namaClass)
{
	# buat pecahan tatasusunan $namaClass
	$class = explode('\\', $namaClass); //print_r($class) . '<br>';
	# semak kewujudan class
	//echo '<hr><kbd>nama class:' . $class[count($class)-1] . ' | </kbd>';
	$cariFail = GetMatchingFiles(GetContents('Aplikasi/Kelas'),$class[count($class)-1] . '.php');
	# jika fail wujud, masukkan
	foreach($cariFail as $kitabApa)
	{	//echo '<kbd>index:38=>$kitabApa->' . $kitabApa . '</kbd><br>';
		if (file_exists($kitabApa)) require $kitabApa;
		//echo '<kbd>index:40=>$kitabApa->' . $kitabApa . '</kbd><br>';
		//else echo 'tidak jumpa daa<br>';
	}//*/
});
#--------------------------------------------------------------------------------------------------
/* 5. istihar class
** Selepas mendaftar fungsi autoload ini dengan SPL, baris berikut
** akan menyebabkan fungsi untuk cuba untuk memuatkan kelas \Foo\Bar\Baz\Qux
** dari /path/to/project/src/Baz/Qux.php:
**
**      new \Foo\Bar\Baz\Qux;
**/
//$aplikasi = new \Aplikasi\Kitab\Mulakan();
$aplikasi = new \Aplikasi\Kitab\Peta2();
#--------------------------------------------------------------------------------------------------