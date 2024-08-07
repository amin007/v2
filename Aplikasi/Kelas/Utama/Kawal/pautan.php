<?php
namespace Aplikasi\Kawal; //echo __NAMESPACE__;
class Pautan extends \Aplikasi\Kitab\Kawal
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
	public function index($a=null)
	{
		# Set pemboleubah utama
		//$this->papar->Tajuk_Muka_Surat = $tajuk;
		//echo '<hr>Nama class :' . __METHOD__ . '<hr>';

		# Pergi papar kandungan
		$this->paparHeader($this->_folder . '/utama');
		//$this->semakPembolehubah($this->papar->senarai,'senarai');# Semak data dulu
		//$this->paparKandungan($this->_folder,'index',$noInclude=0);
	}
##-------------------------------------------------------------------------------------------------
	public function paparHeader($lokasi = 'pergi/mana')
	{
		//$this->paparHeader('sumber/fail/rujukan');
		////$this->semakPembolehubah($ujian,'ujian',0);# Semak data dulu
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
	function logout()
	{
		//echo '<pre>sebelum:'; print_r($_SESSION); echo '</pre>';
		\Aplikasi\Kitab\Sesi::destroy();
		header('location: ' . URL);
		//exit;
	}
#==================================================================================================
#--------------------------------------------------------------------------------------------------
	public function utama($a=null)
	{
		# Set pemboleubah utama
		$this->papar->Tajuk_Muka_Surat = 'Pautan Utama';
		$senarai[] = $this->tanya->getIdea001();
		$senarai[] = $this->tanya->getIdea002();
		$senarai[] = $this->tanya->koleksi001();
		$dns[] = $this->tanya->dnschanger();
		$this->papar->senarai = $senarai;
		$this->papar->dns = $dns;
		//echo '<hr>Nama class :' . __METHOD__ . '<hr>';

		# Pergi papar kandungan
		//$this->semakPembolehubah($senarai,'senarai');# Semak data dulu
		//$this->semakPembolehubah($this->papar->senarai,'senarai');# Semak data dulu
		$this->paparKandungan($this->_folder,'utama',$noInclude=0);
	}
#--------------------------------------------------------------------------------------------------
	public function dns($a=null)
	{
		# Set pemboleubah utama
		$this->papar->Tajuk_Muka_Surat = 'IP DNS';
		$this->papar->senarai = $this->tanya->dnschanger();
		//echo '<hr>Nama class :' . __METHOD__ . '<hr>';

		# Pergi papar kandungan
		//$this->semakPembolehubah($this->papar->senarai,'senarai');# Semak data dulu
		$this->paparKandungan($this->_folder,'dns',$noInclude=0);
	}//*/
#--------------------------------------------------------------------------------------------------
	public function latihan($tajuk = '001')
	{
		# Set pemboleubah utama
		$this->papar->Tajuk_Muka_Surat = 'Latihan' . $tajuk;
		$namaFail = 'latihan' . $tajuk;
		//echo '<hr>Nama class :' . __METHOD__ . '<hr>';

		# Pergi papar kandungan
		//$this->semakPembolehubah($this->papar->senarai); # Semak data dulu
		$this->paparKandungan($this->_folder,$namaFail,$noInclude=0);
	}
#--------------------------------------------------------------------------------------------------
	public function cuddle($a=null)
	{
		# Set pemboleubah utama
		$this->papar->Tajuk_Muka_Surat = 'CUDDLE APPLICATION';
		$namaFail = 'cuddle';
		//echo '<hr>Nama class :' . __METHOD__ . '<hr>';

		# Pergi papar kandungan
		//$this->semakPembolehubah($this->papar->senarai); # Semak data dulu
		$this->paparKandungan($this->_folder,$namaFail,$noInclude=0);
	}
#--------------------------------------------------------------------------------------------------
	/*public function mediasosial($a=null)
	{
		# Set pemboleubah utama
		$this->papar->Tajuk_Muka_Surat = 'Media Sosial';
		//echo '<hr>Nama class :' . __METHOD__ . '<hr>';

		# Pergi papar kandungan
		//$this->semakPembolehubah($this->papar->senarai,'senarai');# Semak data dulu
		$this->paparKandungan($this->_folder,'mediasosial',$noInclude=0);
	}//*/
#--------------------------------------------------------------------------------------------------
#==================================================================================================
#--------------------------------------------------------------------------------------------------
	public function processCuddle($a=null)
	{
		# Set pemboleubah utama
		//echo '<hr>Nama class :' . __METHOD__ . '<hr>';
		$this->semakPembolehubah($_POST,'POST',0);

		# Pergi papar kandungan
		//$this->semakPembolehubah($this->papar->senarai); # Semak data dulu
		//$this->paparKandungan($this->_folder,$namaFail,$noInclude=0);
	}
#--------------------------------------------------------------------------------------------------
/*
		$POST[cuddle]
		[name] => cute girl
		[age] => 20
		[gender] => female
		[phone] => 0123456789
		[address1] => a
		[address2] => b
		[movies1] => a
		[movies2] => b
		[movies3] => c
		[movies4] => d
		[movies5] => e
		[facts1] => 1
		[facts2] => 2
		[facts3] => 3
		[facts4] => 4
		[facts5] => 5
		[cutename] => yes
		[fort] => no
		[food] => yes
		[kiss] => no
		[ms-instagram] => cute_girl
		[ms-twitter] => cute_girl
		[ms-tumblr] => cute_girl
		[ms-snapchat] => cute_girl
		[ms-tiktok] => cute_girl
		[signature] => cute_girl
		[face-photo] =>
*/
#--------------------------------------------------------------------------------------------------
#==================================================================================================
}
