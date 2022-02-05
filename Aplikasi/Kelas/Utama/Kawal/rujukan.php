<?php
namespace Aplikasi\Kawal; //echo __NAMESPACE__;
class Rujukan extends \Aplikasi\Kitab\Kawal
{
#==================================================================================================
	function __construct()
	{
		parent::__construct();
		//\Aplikasi\Kitab\Kebenaran::kawalMasuk();
		//\Aplikasi\Kitab\Kebenaran::kawalKeluar();
		$this->_folder = huruf('kecil', namaClass($this));
		//echo '<hr>Nama class :' . __METHOD__ . '<hr>';
		//echo '<hr>Nama function :' .__FUNCTION__ . '<hr>';
	}
##-------------------------------------------------------------------------------------------------
	public function index($tajuk = 'Rujukan')
	{
		# Set pemboleubah utama
		$this->papar->Tajuk_Muka_Surat = $tajuk;
		echo '<hr>Nama class :' . __METHOD__ . '<hr>';

		# Pergi papar kandungan
		//$this->semakPembolehubah($this->papar->senarai); # Semak data dulu
		//$this->paparHeader('sumber/fail/rujukan');
		//$this->paparKandungan($this->_folder,'index',$noInclude=0);
	}
##-------------------------------------------------------------------------------------------------
	public function paparHeader($lokasi = 'pergi/mana')
	{
		//echo '<br>location: ' . URL . $lokasi;
		header('location:' . URL . $lokasi);//*/
	}
##-------------------------------------------------------------------------------------------------
	public function paparKandungan($folder, $fail, $noInclude)
	{
		$jenis = $this->papar->pilihTemplate($template=431);
		$this->papar->bacaTemplate(
		//$this->papar->paparTemplate(
			$this->_folder . '/' . $fail, $jenis, $noInclude); # $noInclude=0
			//'mobile/mobile',$jenis,0); # $noInclude=0
		//*/
	}
##-------------------------------------------------------------------------------------------------
	public function semakPembolehubah($senarai)
	{
		echo '<pre>$senarai:<br>';
		print_r($senarai);
		echo '</pre>|';//*/
	}
##-------------------------------------------------------------------------------------------------
	function logout()
	{
		//echo '<pre>sebelum:'; print_r($_SESSION); echo '</pre>';
		\Aplikasi\Kitab\Sesi::destroy();
		header('location: ' . URL);
		//exit;
	}
#==================================================================================================
#--------------------------------------------------------------------------------------------------
	public function index2($tajuk = 'Tentang Amin007') 
	{	
		# Set pemboleubah utama
		echo '<hr>Nama class :' . __METHOD__ . '<hr>';
		#$this->papar->tajuk = (empty($url[0])) ? 'index' : $url[0];
		$this->papar->Tajuk_Muka_Surat = $tajuk;
		//$this->papar->gambar = gambar_latarbelakang();

		# Pergi papar kandungan
		//$this->semakPembolehubah($this->papar->senarai); # Semak data dulu
		//$this->paparKandungan($this->_folder,'index',$noInclude=0);
	}
#--------------------------------------------------------------------------------------------------
	public function daftar()
	{
		# Set pemboleubah utama
		echo '<hr>Nama class :' . __METHOD__ . '<hr>';
		#$this->papar->tajuk = (empty($url[0])) ? 'index' : $url[0];
		$this->papar->Tajuk_Muka_Surat = $tajuk;
		//$this->papar->gambar = gambar_latarbelakang();

		# Pergi papar kandungan
		//$this->semakPembolehubah($this->papar->senarai); # Semak data dulu
		//$this->paparKandungan($this->_folder,'index',$noInclude=0);
	}
#--------------------------------------------------------------------------------------------------
	public function masuk()
	{
		# Set pemboleubah utama
		echo '<hr>Nama class :' . __METHOD__ . '<hr>';
		#$this->papar->tajuk = (empty($url[0])) ? 'index' : $url[0];
		$this->papar->Tajuk_Muka_Surat = $tajuk;
		//$this->papar->gambar = gambar_latarbelakang();

		# Pergi papar kandungan
		//$this->semakPembolehubah($this->papar->senarai); # Semak data dulu
		//$this->paparKandungan($this->_folder,'index',$noInclude=0);
	}
#--------------------------------------------------------------------------------------------------
	public function sahkan()
	{
		# Set pemboleubah utama
		echo '<hr>Nama class :' . __METHOD__ . '<hr>';
		#$this->papar->tajuk = (empty($url[0])) ? 'index' : $url[0];
		$this->papar->Tajuk_Muka_Surat = $tajuk;
		//$this->papar->gambar = gambar_latarbelakang();

		# Pergi papar kandungan
		//$this->semakPembolehubah($this->papar->senarai); # Semak data dulu
		//$this->paparKandungan($this->_folder,'index',$noInclude=0);
	}
#--------------------------------------------------------------------------------------------------
#--------------------------------------------------------------------------------------------------
#==================================================================================================
# fungsi terhad dalaman sahaja
#--------------------------------------------------------------------------------------------------
	public function email()
	{
		# Set pemboleubah utama
		echo '<hr>Nama class :' . __METHOD__ . '<hr>';
		#$this->papar->tajuk = (empty($url[0])) ? 'index' : $url[0];
		$this->papar->Tajuk_Muka_Surat = $tajuk;
		//$this->papar->gambar = gambar_latarbelakang();

		# Pergi papar kandungan
		//$this->semakPembolehubah($this->papar->senarai); # Semak data dulu
		//$this->paparKandungan($this->_folder,'index',$noInclude=0);
	}
#--------------------------------------------------------------------------------------------------
	public function nomboRandom()
	{
		# Set pemboleubah utama
		echo '<hr>Nama class :' . __METHOD__ . '<hr>';
		# Koding sikit nombor random
		$kod001 = substr(number_format(time() * rand(), 0, '', '') 0, 6);
		$this->semakPembolehubah($kod001,' semak kod random: ');
		#$this->papar->tajuk = (empty($url[0])) ? 'index' : $url[0];
		$this->papar->Tajuk_Muka_Surat = $tajuk;
		//$this->papar->gambar = gambar_latarbelakang();

		# Pergi papar kandungan
		//$this->semakPembolehubah($this->papar->senarai); # Semak data dulu
		//$this->paparKandungan($this->_folder,'index',$noInclude=0);
	}
#--------------------------------------------------------------------------------------------------
#==================================================================================================
}
