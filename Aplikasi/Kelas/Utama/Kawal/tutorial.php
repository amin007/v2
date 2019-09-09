<?php
namespace Aplikasi\Kawal; //echo __NAMESPACE__;
class Tutorial extends \Aplikasi\Kitab\Kawal
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
	public function index($apa=null)
	{
		# Set pemboleubah utama
		//echo '<hr>Nama class :' . __METHOD__ . '<hr>';
		list($t,$folder,$fail) = $this->tentang($apa);
		$this->papar->Tajuk_Muka_Surat = $t;
		//echo '$folder:' . $folder . '<br>';
		//echo '$fail:' . $fail . '<br>';

		# Pergi papar kandungan
		//$this->semakPembolehubah($this->papar->senarai,'senarai');# Semak data dulu
		$this->paparKandungan($folder,$fail,$noInclude=0);
	}
##------------------------------------------------------------------------------------------
	public function paparHeader($lokasi = 'pergi/mana')
	{
		//$this->paparHeader('sumber/fail/rujukan');
		////$this->semakPembolehubah($ujian,'ujian',0);# Semak data dulu
		//echo '<br>location: ' . URL . $lokasi;
		header('location:' . URL . $lokasi);//*/
	}
##------------------------------------------------------------------------------------------
	public function paparKandungan($folder, $fail, $noInclude)
	{
		$jenis = $this->papar->pilihTemplate($template=431);
		//$this->papar->bacaTemplate(
		$this->papar->paparTemplate(
			$folder . '/' . $fail, $jenis, $noInclude); # $noInclude=0
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
	function tentang($apa=null)
	{
		##---------------------------------------------------------------------------------
		if($apa == 'mvc-melayu'):
			$t = 'Tutorial Tentang MVC_Melayu';
			$f = $this->_folder . '/tentang/mvc-melayu';
			$p = 'index';
		else:
			$t = 'Tutorial Tentang Apa Ya?';
			$f = $this->_folder;
			$p = 'index';
		endif;
		##---------------------------------------------------------------------------------
		return array($t,$f,$p);
	}
#------------------------------------------------------------------------------------------
	public function mvcmelayu($apa=null)
	{
		# Set pemboleubah utama
		//echo '<hr>Nama class :' . __METHOD__ . '<hr>';
		list($t,$folder,$fail) = $this->tentang('mvc-melayu');
		$this->papar->Tajuk_Muka_Surat = $t;
		//echo '$folder:' . $folder . '<br>';
		//echo '$fail:' . $fail . '<br>';

		# Pergi papar kandungan
		//$this->semakPembolehubah($this->papar->senarai,'senarai');# Semak data dulu
		$this->paparKandungan($folder,$fail,$noInclude=0);
	}
#------------------------------------------------------------------------------------------
	public function mediasosial($a=null)
	{
		# Set pemboleubah utama
		$this->papar->Tajuk_Muka_Surat = 'Media Sosial';
		//echo '<hr>Nama class :' . __METHOD__ . '<hr>';

		# Pergi papar kandungan
		//$this->semakPembolehubah($this->papar->senarai,'senarai');# Semak data dulu
		//$this->paparKandungan($this->_folder,'mediasosial',$noInclude=0);
	}
#------------------------------------------------------------------------------------------
#==========================================================================================
}
