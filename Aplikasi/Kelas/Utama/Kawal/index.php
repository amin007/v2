<?php
namespace Aplikasi\Kawal; //echo __NAMESPACE__;
class Index extends \Aplikasi\Kitab\Kawal
{
#==========================================================================================
	function __construct()
	{
		parent::__construct();
		//\Aplikasi\Kitab\Kebenaran::kawalMasuk();
		//\Aplikasi\Kitab\Kebenaran::kawalKeluar();
		$this->_folder = huruf('kecil', namaClass($this));
		//echo '<hr>Nama class :' . __METHOD__ . '<hr>';
		//echo '<hr>Nama function :' .__FUNCTION__ . '<hr>';
	}
##------------------------------------------------------------------------------------------
	public function index($tajuk = 'Tentang Amin007')
	{
		# Set pemboleubah utama
		$this->papar->Tajuk_Muka_Surat = $tajuk;
		//echo '<hr>Nama class :' . __METHOD__ . '<hr>';

		# Pergi papar kandungan
		//$this->semakPembolehubah($this->papar->senarai); # Semak data dulu
		$this->paparKandungan($this->_folder,'index',$noInclude=0);
	}
##------------------------------------------------------------------------------------------
	public function paparKandungan($folder, $fail, $noInclude)
	{
		$jenis = $this->papar->pilihTemplate($template=431);
		$this->papar->bacaTemplate(
		//$this->papar->paparTemplate(
			$this->_folder . '/' . $fail, $jenis, $noInclude); # $noInclude=0
			//'mobile/mobile',$jenis,0); # $noInclude=0
		//*/
	}
##------------------------------------------------------------------------------------------
	function logout()
	{
		//echo '<pre>sebelum:'; print_r($_SESSION); echo '</pre>';
		\Aplikasi\Kitab\Sesi::destroy();
		header('location: ' . URL);
		//exit;
	}
#==========================================================================================
#------------------------------------------------------------------------------------------
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
#------------------------------------------------------------------------------------------
	public function privasi()
	{
		# Set pemboleubah utama
		//echo '<hr>Nama class :' . __METHOD__ . '<hr>';
		$this->papar->Tajuk_Muka_Surat = 'Dasar Privasi';

		# Pergi papar kandungan
		//$this->semakPembolehubah($this->papar->senarai,'senarai');# Semak data dulu
		$this->paparKandungan($this->_folder,'privasi',$noInclude=0);
	}
#------------------------------------------------------------------------------------------
#==========================================================================================
}
