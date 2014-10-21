<?php

function dpt_url()
{
	$url = isset($_GET['url']) ? $_GET['url'] : null;
	$url = rtrim($url, '/');
	$url = filter_var($url, FILTER_SANITIZE_URL);
	$url = explode('/', $url);

	return $url;
}

function url_alamat()
{
	$url = isset($_GET['url']) ? $_GET['url'] : null;

	return $url;
}

function pecah_url($ulang)
{
	$pecah  = explode("/", $_SERVER['REQUEST_URI']);
	$tambah = ($ulang+1);
	$buang  = ($ulang-1==0) ? 1 : ($ulang-1);
	$papar  = '<a href="../' . $pecah[1] 
			. '/' . $pecah[2]
			. '/' . $pecah[3] . '/' . $pecah[4]
		    . '/' . $tambah . '">'
			. 'Tambah</a>|'
			. '<a href="../' . $pecah[1]
			. '/' . $pecah[2]
			. '/' . $pecah[3] . '/' . $pecah[4]
		    . '/' . $buang . '">'
			. 'Buang</a>';

	/*papar .= '<pre>' . print_r($pecah, 1) . '</pre>';
		$pecah = > Array
		(
			[0] => 
			[1] => ekonomi
			[2] => cari
			[3] => lokaliti
			[4] => johor
			[5] => 3
		)
	*/
	
	return $papar;
}

function dpt_ip()
{
	$IP = array('192.168.1.', '10.69.112.', 
		'127.0.0.1', '10.72.112.');

	return $IP;
}

function dpt_senarai($namajadual)
{
	if ($namajadual=='msiclama')
		$jadual = array('msic08','msic2008',
		'msic_v1','msic_bandingan',
		'msic','msic_nota_kaki');
	elseif ($namajadual=='msicbaru')
		$jadual = array('msic2008','msic2008_asas',
		'msic_v1','msic_bandingan',
		'msic2000','msic2000_notakaki');
	elseif ($namajadual=='produk')
		$jadual = array('kodproduk_aup',
		'kodproduk_mei2011');
	
	
	return $jadual;
}

function pecah_post()
{
	$papar['pilih'] = isset($_POST['pilih']) ? $_POST['pilih'] : null;
	$papar['cari'] = isset($_POST['cari']) ? $_POST['cari'] : null;
	$papar['fix'] = isset($_POST['fix']) ? $_POST['fix'] : null;
	$papar['atau'] = isset($_POST['atau']) ? $_POST['atau'] : null;
	
	$kira['pilih'] = count($papar['pilih']);
	$kira['cari'] = count($papar['cari']);
	$kira['fix'] = count($papar['fix']);
	$kira['atau'] = count($papar['atau']);
	
	return $kira;
	//echo '<pre>'; print_r($kira) . '</pre>';
}

function keterangan_medan($key)
{
	//if ($key == 'THN') $papar = 'tahun kes terpilih';
	switch ($key) 
	{// mula - pilih key
	case 'THN': case 'thn':
		$papar = 'tahun kes terpilih';
		break;
	case 'Batch': case 'batch':
		$papar = 'batch prosesan kes terpilih';
		break;
	case 'Estab': case 'estab':
		$papar = 'estab - nombor sidap kes terpilih';
		break;
	case 'Nama': case 'nama':
		$papar = 'nama syarikat';
		break;
	case 'F0003': 
		$papar = 'tahun bermula aktiviti syarikat';
		break;
	case 'F0004':
		$papar = 'tempoh operasi syarikat bermula';
		break;
	case 'F0005': 
		$papar = 'tempoh operasi syarikat berakhir';
		break;
	default: 
		$papar=$key; 
		break;
	}// tamat - pilih key
	
	return 'Ini tentang ' . $papar;
}
function cariMedanInput($ubah,$f,$row,$nama) 
{/* mula -
	$ubah = nama jadual
	$f = nombor medan
	$row = data medan
	$nama = nama medan
	
	senarai nama medan
	0-nota,1-respon,2-fe,3-tel,4-fax,		
	5-responden,6-email,7-msic,8-msic08,
	9-`id U M`,10-nama,11-sidap,12-status 
 */// papar medan yang terlibat
 
	$cariMedan = array(0,1,2,3,4,5,6,8);
	$cariText = array(0); // papar jika nota ada
	$cariMsic = array(8); // papar input text msic sahaja 
	$namaM = $ubah .'[' . $nama . ']';
		
	// tentukan medan yang ada input
	$input=in_array($f,$cariMedan)? 
	(@in_array($f,$cariMsic)? // tentukan medan yang ada msic
		'<input type="text" name="' . $namaM . '" value="' . $row[$f] . '" size=6>'
		:(@in_array($f,$cariText)? // tentukan medan yang ada input textarea
			'<textarea name="' . $namaM . '" rows=2 cols=23>' . $row[$f] . '</textarea>'
			: // tentukan medan yang bukan input textarea
			'<input type="text" name="' . $namaM . '" value="' . $row[$f] . '" size=30>'
		)
	):'<label class="papan">' . $row[$f] . '</label>';
	
	return $input;

}

function semakMedanDaftar($myTable, $nama, $jenis, $data) 
{
	return $myTable.'->'.$nama.'->'.$jenis.'='.$data;
}

function paparMedanDaftar($myTable, $nama, $jenis, $data) 
{
	$namaMedan = 'name="' . $myTable . '[' . $nama . ']" '
			   . 'id="' . $nama . '"';
	$papar = null;
	
	if ($nama == 'password')
	{
		$papar = '<input type="password" ' . $namaMedan . ' class="span3">';
	}
	elseif ($nama == 'level')
	{
		$papar = '<select ' . $namaMedan . '>';
		$senaraiLevel= array('baru');
		
		foreach ($senaraiLevel as $key => $value)
		{
			$papar .= '<option value="' . $value . '">'
				   . ucfirst(strtolower($value)) 
				   . '</option>';
		}
		$papar .= '</select>';

	}
	elseif ($nama == 'jantina')
	{
		$papar = '<select ' . $namaMedan . '>';
		$senaraiJantina = array('lelaki','perempuan');
		
		foreach ($senaraiJantina as $key => $value)
		{
			$papar .= '<option value="' . $value . '">'
				   . ucfirst(strtolower($value)) 
				   . '</option>';
		}
		$papar .= '</select>';
	}
	else
	{
		$papar = inputDaftar($jenis, $namaMedan, $data);
	}

	return $papar;
}

function inputDaftar($jenis, $namaMedan, $data)
{
		switch ($jenis) 
		{// mula - pilih type
		case 'varchar(15)':
			$papar = '<input type="text" ' . $namaMedan . ' class="span2">';
			break;
		case 'varchar(20)':
			$papar = '<input type="text" ' . $namaMedan . ' class="span3">';
			break;
		case 'varchar(35)':
			$papar = '<input type="text" ' . $namaMedan . ' class="span4">';
			break;
		case 'varchar(50)':
			$papar = '<input type="text" ' . $namaMedan . ' class="span5">';
			break;		
		case 'date':
			$papar = '<input type="text" ' . $namaMedan . ' class="input-small tarikh" readonly">';
			break;
		case 'text':
			$jenisText = $namaMedan . ' rows="3" cols="30" ';
			$papar = '<textarea ' . $jenisText . '></textarea>';
			break;
		default: 
			$papar="$namaMedan-$jenis-$data"; 
			break;
		}// tamat - pilih type

		return $papar;
}


function paparMedanDaftarSesi($myTable, $nama, $jenis, $data, $sesi) 
{
	$namaMedan = 'name="' . $myTable . '[' . $nama . ']" '
			   . 'id="' . $nama . '"';
	$papar = null;
		
	if ($nama == 'nama_penuh')
	{
		$papar = '<input type="text" ' . $namaMedan 
			   . ' value="' . $sesi['namaPenuh'] . '" class="span4">';
	}
	elseif ($nama == 'namapengguna')
	{
		$papar = '<input type="text" ' . $namaMedan 
		       . ' value="' . $sesi['pengguna'] . '" class="span4">';

	}
	elseif ($nama == 'level')
	{
		$papar = '<select ' . $namaMedan . '>';
		$senaraiPengguna= array('baru');
		
		foreach ($senaraiPengguna as $key => $value)
		{
			$papar .= '<option value="' . $value . '"';
			$papar .= ($value == $sesi['level']) ? ' selected >' : '>';
			$papar .= ucfirst(strtolower($value));
			$papar .= '</option>';
		}
		$papar .= '</select>';

	}
	elseif ($nama == 'jantina')
	{
		$papar = '<select ' . $namaMedan . '>';
		$senaraiJantina = array('lelaki','perempuan');
		
		foreach ($senaraiJantina as $key => $value)
		{
			$papar .= '<option value="' . $value . '">'
				   . ucfirst(strtolower($value)) 
				   . '</option>';
		}
		$papar .= '</select>';
	}
	elseif ($nama == 'password')
	{
		$papar = '<input type="password" ' . $namaMedan . ' class="span3">';
	}
	elseif ($nama == 'level')
	{
		$papar = '';
	}
	else
	{
		$papar = inputDaftar($jenis, $namaMedan, $data);
	}

	return $papar;
}

function ubahMedanSesi($myTable, $nama, $jenis, $data) 
{
	$namaMedan = 'name="' . $myTable . '[' . $nama . ']" '
			   . 'id="' . $nama . '"';

	//$papar = null;
		
	if ($nama == 'level')
	{
		$papar = null;
	}
	elseif ($nama == 'jantina')
	{
		$papar = '<select ' . $namaMedan . '>';
		$senaraiJantina = array('lelaki','perempuan');
		
		foreach ($senaraiJantina as $key => $value)
		{
			$papar .= '<option value="' . $value . '"';
			$papar .= ($value == $data) ? ' selected >' : '>';
			$papar .= ucfirst(strtolower($value));
			$papar .= '</option>';
		}
		$papar .= '</select>';
	}
	elseif ($nama == 'password')
	{
		$papar = '<input type="password" ' . $namaMedan . ' value="' . $data . '" class="span3">';
	}
	elseif ($nama == 'idpinjaman')
	{
		$papar = '';
	}
	else
	{
		$papar = ubahInputDaftar($jenis, $namaMedan, $data);
	}

	return $papar;
}

function ubahInputDaftar($jenis, $namaMedan, $data)
{
		switch ($jenis) 
		{// mula - pilih type
		case 'varchar(15)':
			$papar = '<input type="text" ' . $namaMedan . ' value="' . $data . '" class="span2">';
			break;
		case 'varchar(20)':
			$papar = '<input type="text" ' . $namaMedan . ' value="' . $data . '" class="span3">';
			break;
		case 'varchar(35)':
			$papar = '<input type="text" ' . $namaMedan . ' value="' . $data . '" class="span4">';
			break;
		case 'varchar(50)':
			$papar = '<input type="text" ' . $namaMedan . ' value="' . $data . '" class="span5">';
			break;
		case 'date':
			$papar = '<input type="text" ' . $namaMedan . ' value="' . $data . '" class="input-small tarikh" readonly">';
			break;
		case 'text':
			$jenisText = $namaMedan . ' rows="3" cols="30" ';
			$papar = '<textarea ' . $jenisText . '>' . $data . '</textarea>';
			break;
		default: 
			$papar="$namaMedan-$data"; 
			break;
		}// tamat - pilih type

		return $papar;
}

// mula untuk kod php+html 
function papar_jadual($row, $myTable, $pilih)
{
	if ($pilih == 1) 
	{
///////////////////////////////////////////////////////////////////////////////////////////////////
		?><!-- Jadual <?php echo $myTable ?> -->	
		<table  border="1" class="excel" id="example"><?php
		// mula bina jadual
		$printed_headers = false; 
		#-----------------------------------------------------------------
		for ($kira=0; $kira < count($row); $kira++)
		{	//print the headers once: 	
			if ( !$printed_headers ) : ?>
		<thead><tr>
		<th>#</th><?php foreach ( array_keys($row[$kira]) as $tajuk ) :
		?><th><?php echo $tajuk ?></th>
		<?php endforeach; ?>  
		</tr></thead>
		<?php
				$printed_headers = true; 
			endif;
		#-----------------------------------------------------------------		 
		//print the data row ?>
		<tbody><tr>
		<td><?php echo $kira+1 ?></td>	
		<?php foreach ( $row[$kira] as $key=>$data ) : 
		?><td><?php echo $data ?></td>
		<?php endforeach; ?>  
		</tr></tbody>
		<?php
		}
		#-----------------------------------------------------------------
		?></table><!-- Jadual <?php echo $myTable ?> --><?php
///////////////////////////////////////////////////////////////////////////////////////////////////
	}
	elseif ($pilih == 2) 
	{
///////////////////////////////////////////////////////////////////////////////////////////////////
		?><!-- Jadual <?php echo $myTable ?> -->	
		<table  border="1" class="excel" id="example"><?php
		// mula bina jadual
		$printed_headers = false; 
		#-----------------------------------------------------------------
		for ($kira=0; $kira < count($row); $kira++)
		{	//print the headers once: 	
			if ( !$printed_headers ) : ?>
		<thead><tr>
		<th>#</th><?php
				foreach ( array_keys($row[$kira]) AS $tajuk ) 
				{ 	if ( !is_int($tajuk) ) :
						$paparTajuk = ($tajuk=='nama') ?
						$tajuk . '(jadual:' . $myTable . ')'
						: $tajuk; ?>
		<th><?php echo $paparTajuk ?></th>
		<?php		endif;
				}
		?></tr></thead><?php
				$printed_headers = true; 
			endif; 
		#-----------------------------------------------------------------		 
		//print the data row ?>
		<tbody><tr>
		<td><?php echo $kira+1 ?></td>	
		<?php
			foreach ( $row[$kira] AS $key=>$data ) 
			{
				if ($key=='sidap') :
					$sidap= $data;
					$ssm = substr($data,0,12); 
				elseif ($key=='nama') :
					$syarikat = $data;
				endif;
				?><td><?php echo $data ?></td>
		<?php
			} 
			?></tr></tbody>
		<?php
		}
		#-----------------------------------------------------------------
		?></table><!-- Jadual <?php echo $myTable ?> --><?php
///////////////////////////////////////////////////////////////////////////////////////////////////
	}
	elseif ($pilih == 3) 
	{
///////////////////////////////////////////////////////////////////////////////////////////////////
		?><!-- Jadual <?php echo $myTable ?>  --><?php
		for ($kira=0; $kira < count($row); $kira++)
		{// ulang untuk $kira++ ?>
		<table border="1" class="excel" id="example">
		<tbody><?php foreach ( $row[$kira] as $key=>$data ):?>
		<tr>
		<td><span class="label"><?php echo $key ?></span></td>
		<td><?php echo $data ?></td>
		</tr>
		<?php endforeach; ?></tbody>
		</table>
		<?php
		}// ulang untuk $kira++ ?>
		<!-- Jadual <?php echo $myTable ?> --><?php
///////////////////////////////////////////////////////////////////////////////////////////////////
	} // tamat if (jadual ==3
	elseif ($jadual == 4)
	{ // mula if (jadual==4
		$bil_tajuk = $row['bil_tajuk'];// => 8
		$bil_baris = $row['bil_baris']; 

		$output  = null; 
		//$output .= '<br>$bil_tajuk=' . $bil_tajuk;
		//$output .= '<br>$bil_baris=' . $bil_baris;
		$output .= '<table border="1" class="excel" id="example">
		<thead><tr>
		<th colspan="' . $bil_tajuk . '">
		<strong>Jadual ' . $myTable . ' : ' . $bil_tajuk . '
		</strong></th>
		</tr></thead>';

		// mula bina jadual
		$printed_headers = false; 
		#-----------------------------------------------------------------
		for ($kira=0; $kira < $bil_baris; $kira++)
		{
			//print the headers once: 	
			if ( !$printed_headers ) 
			{##=============================================================
			$output .= "\r\t<thead><tr>\r\t<th>#</th>";
			foreach ( array_keys($row[$kira]) as $tajuk ) :
			$output .= "\r\t" . '<th>' . $tajuk . '</th>';
			endforeach;
			$output .= "\r\t" . '</tr></thead>';
			##=============================================================
				$printed_headers = true; 
			} 
		#-----------------------------------------------------------------		 
			//print the data row 
			$output .= "\r\t<tbody><tr>\r\t<td>" . ($kira+1) . '</td>';
			foreach ( $row[$kira] as $key=>$data ) :
			$output .= "\r\t" . '<td>' . $data . '</td>';
			endforeach; 
			$output .= "\r\t" . '</tr></tbody>';
		} 
		$output .= "\r\t" . '</table>';

		return $output;

	} // tamat if ($jadual == 4
}
// tamat untuk kod php+html 

function kira($kiraan)
{
	// pecahan kepada ratus
	return number_format($kiraan,0,'.',',');
} 

function kira2($dulu,$kini)
{
	// buat bandingan dan pecahan kepada ratus
	return @number_format((($kini-$dulu)/$dulu)*100,0,'.',',');
	//@$kiraan=(($kini-$dulu)/$dulu)*100;
}

function kira3($kira,$n) 
{
	return str_pad($kira,$n,'0',STR_PAD_LEFT);
}
function huruf($jenis , $papar) 
{
	/*
	$_POST[$jadual]['respon']=strtoupper($_POST[$jadual]['respon']);
	$_POST[$jadual]['fe']=strtolower($_POST[$jadual]['fe']);
	$_POST[$jadual]['responden']=mb_convert_case($_POST[$jadual]['responden'], MB_CASE_TITLE);
	*/
	
	switch ($jenis) 
	{// mula - pilih $jenis
	case "BESAR":
		$papar = strtoupper($papar);
		break;
	case "kecil":
		$papar = strtolower($papar);
		break;
	case "Besar_Depan":
		$papar = mb_convert_case($papar, MB_CASE_TITLE);
		break;
	}// tamat - pilih $jenis
	
	return $papar;

}

function bersih($papar) 
{
	# lepas lari aksara khas dalam SQL
	//$papar = mysql_real_escape_string($papar);
	# buang ruang kosong (atau aksara lain) dari mula & akhir 
	$papar = trim($papar);
	
	return $papar;
}

function gambar_latarbelakang()
{
	$tmpt2 = ($_SERVER['SERVER_NAME']=='www.amin007.org') ?
		'../bssu/bg/bg' // utk website amin007
		: '../../../private_html/bg/bg'; // utk localhost
		
    foreach(scandir($tmpt2) as $gambar) 
    {
        if (substr($gambar,-3) == 'jpg') 
            $papar[]=$gambar;
    }
      
    $today = rand(0, count($papar)-1); 
    return $papar[$today];
}

function cari_imej($ssm,$strDir)
{
	//require_once ('public/skrip/listfiles2/dir_functions.php');

	if ( isset($ssm) && empty($ssm) )
	{
		$cariImej = null;
	}
	else
	{
		// You can modify this in case you need a different extension
		$strExt = "tif";

		// This is the full match pattern based upon your selections above
		$pattern = "*" . $ssm . "*." . $strExt;
		//echo '<br> Fungsi.php -> $strDir=' . $strDir;
		$cariImej = GetMatchingFiles(GetContents($strDir),$pattern);
	}
	
	//print_r($cariImej);
	return $cariImej;
}
// lisfile2 - mula
function GetMatchingFiles($files, $search) 
{
	// Split to name and filetype
	if(strpos($search,".")) 
	{
		$baseexp=substr($search,0,strpos($search,"."));
		$typeexp=substr($search,strpos($search,".")+1,strlen($search));
	} 
	else 
	{ 
		$baseexp=$search;
		$typeexp="";
	} 
		
	// Escape all regexp Characters 
	$baseexp=preg_quote($baseexp); 
	$typeexp=preg_quote($typeexp); 
		
	// Allow ? and *
	$baseexp=str_replace(array("\*","\?"), array(".*","."), $baseexp);
	$typeexp=str_replace(array("\*","\?"), array(".*","."), $typeexp);
		   
	// Search for Matches
	$i=0;
	$matches=null; // $matches adalah array()
	foreach($files as $file) 
	{
		$filename=basename($file);
			  
		if(strpos($filename,".")) 
		{
			$base=substr($filename,0,strpos($filename,"."));
			$type=substr($filename,strpos($filename,".")+1,strlen($filename));
		} 
		else 
		{ 
			$base=$filename;
			$type="";
		}

		if(preg_match("/^".$baseexp."$/i",$base) && preg_match("/^".$typeexp."$/i",$type))  
		{
			$matches[$i]=$file;
			$i++;
		}
	}
	
	return $matches;
	//return $matches;
}

// Returns all Files contained in given dir, including subdirs
function GetContents($dir,$files=array()) 
{
	if(!($res=opendir($dir))) exit("$dir doesn't exist!");
		while(($file=readdir($res))==TRUE) 
		if($file!="." && $file!="..")
			if(is_dir("$dir/$file")) $files=GetContents("$dir/$file",$files);
				else array_push($files,"$dir/$file");
		 
	closedir($res);
	return $files;
}
// listfile2 - tamat
