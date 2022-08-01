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

# 3. setkan tatarajah sistem
require 'tatarajah.php';
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