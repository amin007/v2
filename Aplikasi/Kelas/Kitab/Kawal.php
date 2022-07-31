<?php
namespace Aplikasi\Kitab; //echo __NAMESPACE__;
class Kawal
{
#==========================================================================================
	function __construct()
	{
		//echo '<br>class Kawal';
		$this->papar = new \Aplikasi\Kitab\Papar();
	}
#==========================================================================================
	public function jemaahTaskil($nama)
	{
		//echo '<hr><kbd>Nama class :' . __METHOD__ . '</kbd><hr>';
		//$this->semakPembolehubah($nama,'nama');
		list($tanya,$tanda,$Nama) = $this->semakPencam($nama);
		if (file_exists($tanya))
		{
			$tanyaNama = '\\Aplikasi\Tanya\\' . $Nama . '_Tanya';
			//echo '<hr><kbd>$tanyaNama->' . $tanyaNama . '</kbd><hr>';

			if(class_exists($tanyaNama))
				$this->tanya = new $tanyaNama();
			else
			{
				$amaran = 'class ' . $tanyaNama . ' tidak wujud tetapi fail '
				. $tanya . ' wujud.';
				Peta2::classTanyaTidakWujud($amaran);
				//trigger_error("Tidak boleh muatkan class: $tanyaNama", E_USER_WARNING);
				//exit();
			}
		}//*/
	}
#------------------------------------------------------------------------------------------
	function semakPencam($nama)
	{
		$failTanya = GetMatchingFiles(GetContents(TANYA),$nama . '_tanya.php');
		$tanya = $failTanya[0];
		$Nama = huruf('Besar_Depan', $nama);
		$tanda = 'fail ' . $nama . '_tanya tidak wujud';

		/*echo '<br> class Kawal :: $nama : ' . $nama . '|';
		echo '$Nama->' . $Nama . '|TANYA->' . TANYA . '';
		echo '<pre>$failTanya->'; print_r($failTanya); echo '</pre>';
		echo '$tanya->' . $tanya . '<br>';
		//*/
		return array($tanya,$tanda,$Nama);
	}
#------------------------------------------------------------------------------------------
	public function semakPembolehubah($senarai,$jadual,$p='0')
	{
		echo '<pre style="background:#fff">$' . $jadual . '=><br>';
		if($p == '0') print_r($senarai);
		if($p == '1') var_export($senarai);
		echo '</pre>';//*/
		//$this->semakPembolehubah($ujian,'ujian',0);
		#http://php.net/manual/en/function.var-export.php
		#http://php.net/manual/en/function.print-r.php
	}
#------------------------------------------------------------------------------------------
#==========================================================================================
}