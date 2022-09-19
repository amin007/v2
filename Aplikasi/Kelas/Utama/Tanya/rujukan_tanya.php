<?php
namespace Aplikasi\Tanya; //echo __NAMESPACE__;
class Rujukan_Tanya extends \Aplikasi\Kitab\Tanya
{
#==================================================================================================
##-------------------------------------------------------------------------------------------------
	public function __construct()
	{
		parent::__construct();
		//echo '<hr>' . __LINE__ . ')Nama class :' . __METHOD__ . '<hr>';
	}
##-------------------------------------------------------------------------------------------------
	function data_contoh($pilih)
	{
		$data = array(
			'namaPendek' => 'james007',
			'namaPenuh' => 'Polan Bin Polan',
			'level' => 'pelawat'
		); # dapatkan medan terlibat
		$kira = 1; # kira jumlah data

		return ($pilih==1) ? $kira : $data; # pulangkan nilai
	}
##-------------------------------------------------------------------------------------------------
	//public $getIdea000 = 'ini adalah cubaan';
##-------------------------------------------------------------------------------------------------
###################################################################################################
#--------------------------------------------------------------------------------------------------
	public function pilihJadual($pilih,$idBorang)
	{
		//$pilih = null;
		if($pilih == 'semuaAES'): //echo "\$pilih = $pilih <br>";
			list($myTable, $medan, $carian, $susun) = $this->jadualAES($idBorang);
		elseif($pilih == 'infoIctHasil'): //echo "\$pilih = $pilih <br>";
			list($myTable, $medan, $carian, $susun) = $this->jadualInfoIctHasil($idBorang);
		elseif($pilih == 'medanKP'): //echo "\$pilih = $pilih <br>";
			list($myTable, $medan, $carian, $susun) = $this->jadualMedanKP($idBorang);
		elseif($pilih == 'pertubuhan'): //echo "\$pilih = $pilih <br>";
			list($myTable, $medan, $carian, $susun) = $this->jadualPertubuhan($idBorang);
		elseif($pilih == 'limaPerangkaan'): //echo "\$pilih = $pilih <br>";
			list($myTable, $medan, $carian, $susun) = $this->jaduaLimaPerangkaan($idBorang);
		elseif($pilih == 'semuaBE'): //echo "\$pilih = $pilih <br>";
			list($myTable, $medan, $carian, $susun) = $this->jadualSemuaBE($idBorang);
		elseif($pilih == 'hasilBE'): //echo "\$pilih = $pilih <br>";
			list($myTable, $medan, $carian, $susun) = $this->jadualHasilBE($idBorang);
		elseif($pilih == 'belanjaBE'): //echo "\$pilih = $pilih <br>";
			list($myTable, $medan, $carian, $susun) = $this->jadualBelanjaBE($idBorang);
		elseif($pilih == 'stafBE'): //echo "\$pilih = $pilih <br>";
			list($myTable, $medan, $carian, $susun) = $this->jadualStafBE($idBorang);
		elseif($pilih == 'staf02BE'): //echo "\$pilih = $pilih <br>";
			list($myTable, $medan, $carian, $susun) = $this->jadualStafBE($idBorang);
		else: //echo "\$pilih = $pilih <br>";
			$myTable = $medan = $carian = $susun = null;
		endif;

		return array($myTable, $medan, $carian, $susun); # pulangkan nilai
	}
#--------------------------------------------------------------------------------------------------
	function jadualAES($medanID,$dataID)
	{
		//echo '<hr>Nama class :' . __METHOD__ . '()<hr>';
		//list($idUser,$namaPendek) = $this->tanyaDataSesi();
		$myTable = null;
		$medan = '*';
		$carian = $susun = null;
		# semak database
			$carian[] = array('fix'=>'x=', # cari x= / %like% / xlike
				'atau'=>'WHERE', # WHERE / OR / AND
				'medan' => $medanID, # cari dalam medan apa
				'apa' => $dataID); # benda yang dicari//*/

		return array($myTable, $medan, $carian, $susun); # pulangkan nilai
	}
#--------------------------------------------------------------------------------------------------
#==================================================================================================
}
