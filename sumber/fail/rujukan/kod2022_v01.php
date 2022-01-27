<?php
###################################################################################################
include 'fungsi_global.php';
###################################################################################################
#--------------------------------------------------------------------------------------------------
$data['test001'] = array(
	array('','01','01 - Selesai'),
	array('','02','02 - Kosong'),
	array('','03','03 - Tiada orang di rumah'),
	array('','04','04 - Rumah  sedang dalam pembinaan'),
	array('','05','05 - Bukan TK/TK Institusi'),
	array('','06','06 - Telah Roboh/Rumah Usang'),
	array('','07','07 - Tidak Layak'),
	array('','08','08 - Enggan Bekerjasama'),
	array('','09','09 - Lain-lain'),
	array('','00','00 - Lain-Lain Didiami'),
);
#--------------------------------------------------------------------------------------------------
$data['tahun'] = kiraTahunJadual();
$data['masco2020'] = ImportCSV2Array($filename = './utama/masco2020_all.csv');
$data['mascoBanci'] = ImportCSV2Array($filename = './utama/masco2020_banci.csv');
$data['mascoNewss'] = ImportCSV2Array($filename = './utama/masco2020_newss.csv');
$data['mascoSeksyen'] = ImportCSV2Array($filename = './utama/masco2020_seksyen.csv');
#--------------------------------------------------------------------------------------------------
#--------------------------------------------------------------------------------------------------
#--------------------------------------------------------------------------------------------------
#--------------------------------------------------------------------------------------------------
###################################################################################################
# mula koding
#--------------------------------------------------------------------------------------------------
/*
$_SERVER['PATH_INFO'] => untuk apache
$_SERVER['REQUEST_URI'] =
$_SERVER['PATH_TRANSLATED']
$_SERVER['PHP_SELF']
$_SERVER['QUERY_STRING'] => /bandar
$_SERVER['REQUEST_SCHEME'] => https
$_SERVER['SERVER_PORT'] => 80 atau 443

$s = 'PHP_SELF';
echo $_SERVER[$s] . '|<br>';
$cari0 = explode('kod00.php',$_SERVER[$s]);
$cari2 = explode('/',$cari0[1]);
echo '<pre>'; print_r($cari2); echo '</pre>';
*/
#--------------------------------------------------------------------------------------------------
# kaedah 1
/*if (isset($_GET['cari'])):
	$cari = $_GET['cari'];
	//echo '<pre>$cari='; print_r($cari); echo '</pre>';
	panggilDataTable($data,$cari);# panggil fungsi
else:
	panggilDataTable($data,null);# panggil fungsi
endif;//*/
#--------------------------------------------------------------------------------------------------
# kaedah 2
$s = 'REQUEST_URI';//$s = 'PHP_SELF';
//semakPembolehubah($_SERVER['REQUEST_URI'],'REQUEST_URI');
if (isset($_SERVER[$s])):
	$fail = explode('kod2022_v01.php',$_SERVER[$s]);
	$cari = explode('/',$fail[1]);//semakPembolehubah($fail,'fail');
	//semakPembolehubah($cari,'pilih');

	if(isset($cari[1])):
		$cariApa = bersih($cari[1]);
		if($cariApa == 'json'):
			$pilih = isset($cari[2]) ? $cari[2] : null;
			$cariApa = bersih($pilih);
			binaJson($data,$pilih);
		else:
			panggilDataTable($data,$cariApa);# panggil fungsi
		endif;
	else:
		panggilDataTable($data,null);# panggil fungsi
	endif;
else:
	panggilDataTable($data,null);# panggil fungsi
endif;//*/
	//versiphp();
#--------------------------------------------------------------------------------------------------
# tamat koding
###################################################################################################
#--------------------------------------------------------------------------------------------------
/*$filename = './utama/masco2020_all.txt';
echo '<hr>';
$data['masco2020'] = ImportCSV2Array($filename);
semakPembolehubah($data,'data');//*/
###################################################################################################
# baca fail csv dan convert kepada tatasusunan
#--------------------------------------------------------------------------------------------------
	//https://lonewolfonline.net/php-import-csv-array/
	function ImportCSV2Array($filename, $long = 4096, $delimiter = ";")
	{
		$row = $col = 0;
		$results = array();

		$handle = @fopen($filename, "r");
		if ($handle)
		{
			while (($row = fgetcsv($handle, $long, $delimiter)) !== false)
			{
				if (empty($fields))
				{
					$fields = $row;
					continue;
				}

				foreach ($row as $k=>$value)
				{
					$results[$col][$fields[$k]] = $value;
				}

				$col++;
				unset($row);
			}

			if (!feof($handle))
			{
				echo "Error: unexpected fgets() failn";
			}
			fclose($handle);
		}

		return $results;
	}
#--------------------------------------------------------------------------------------------------
	//https://stackoverflow.com/questions/37213674/create-array-from-file-get-contents-value
	function ImportCSV2Array3($filename)
	{
		$file = file_get_contents($filename, true);
		$file = str_replace('"', '', $file);
		$a1 = explode(';',$file);
		semakPembolehubah($a1,'a1');
	}
#--------------------------------------------------------------------------------------------------
###################################################################################################
#--------------------------------------------------------------------------------------------------
	// https://www.php.net/manual/en/function.fgetcsv.php
	function ImportCSV2Array2($filename)
	{
		$row = 1;
		if (($handle = fopen($filename, "r")) !== FALSE)
		{
			while (($data = fgetcsv($handle, 1000, ",")) !== FALSE)
			{
				$num = count($data);
				echo "<p> $num fields in line $row: <br /></p>\n";
				$row++;
				for ($c=0; $c < $num; $c++)
				{
					echo $data[$c] . "|\n";
				}
			}
			fclose($handle);
		}
		#
	}
#--------------------------------------------------------------------------------------------------
	function bacaFailkeTatasusunan($file = null)
	{
		$file='./utama/masco2020_all.txt';
		//$file="140724.txt";

		$fopen = fopen($file, 'r');
		$fread = fread($fopen,filesize($file));
		fclose($fopen);

		$remove = "\n";
		$split = explode($remove, $fread);

		$array[] = null;
		$tab = "\t";

		foreach ($split as $string)
		{
			$row = explode($tab, $string);
			array_push($array,$row);
		}
		echo "<pre>";
		print_r($array);
		echo "</pre>";
	}
#--------------------------------------------------------------------------------------------------