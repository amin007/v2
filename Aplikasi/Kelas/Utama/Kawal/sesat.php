<?php
namespace Aplikasi\Kawal; //echo __NAMESPACE__;
class Sesat extends \Aplikasi\Kitab\Kawal
{
#==================================================================================================
##-------------------------------------------------------------------------------------------------
	function __construct()
	{
		parent::__construct();
		//\Aplikasi\Kitab\Kebenaran::kawalMasuk();
		//\Aplikasi\Kitab\Kebenaran::kawalKeluar();
		$this->_tajukAtas = 'Enjin - Sesat';
		$this->_folder = huruf('kecil', namaClass($this));
		//echo '<hr>Nama class :' . __METHOD__ . '<hr>';
		//echo '<hr>Nama function :' .__FUNCTION__ . '<hr>';
	}
##-------------------------------------------------------------------------------------------------
	public function index($p = null)
	{
		# Set pemboleubah utama//'<hr>Nama class :' . __METHOD__ . '<hr>'
		$this->papar->Tajuk_Muka_Surat = 'Sesat Daa';
		$this->papar->mesej = '<hr>' . $p . '<hr>';

		# Pergi papar kandungan
		//$this->_folder = '';
		//$this->paparKandungan($this->_folder, 'index');
		$this->paparKhas($this->_folder, 'index');
	}
##-------------------------------------------------------------------------------------------------
	public function paparKandungan($folder, $fail, $noInclude=1)
	{	# Pergi papar kandungan
		$jenis = $this->papar->pilihTemplate($template=0);
		$this->papar->bacaTemplate(
		//$this->papar->paparTemplate(
			$this->_folder . '/' . $fail, $jenis, $noInclude); # $noInclude=0
			//'mobile/mobile',$jenis,0); # $noInclude=0
		//*/
	}
##-------------------------------------------------------------------------------------------------
	public function paparKhas($folder, $fail, $noInclude=0)
	{	# Pergi papar kandungan
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
##-------------------------------------------------------------------------------------------------
#==================================================================================================
#--------------------------------------------------------------------------------------------------
	function parameter()
	{
		$this->papar->mesej = 'Class wujud tapi parameter/method/fungsi tidak wujud';

		# Pergi papar kandungan
		//$this->semakPembolehubah($this->papar->mesej); # Semak data dulu
		$this->paparKandungan($this->_folder, 'index');
	}
#--------------------------------------------------------------------------------------------------
	function classTidakWujud($amaran)
	{
		$this->papar->mesej = $amaran;
		$this->papar->Tajuk_Muka_Surat = $this->_tajukAtas . $this->papar->mesej;

		# Pergi papar kandungan
		//$this->semakPembolehubah($this->papar->mesej); # Semak data dulu
		$this->paparKandungan($this->_folder, 'index');
		//exit();
	}
#--------------------------------------------------------------------------------------------------
	function methodTanyaTidakWujud($amaran,$class,$method)
	{
		$this->papar->mesej = $amaran
			. "|class=$class|fungsi=$method|";
		$this->papar->Tajuk_Muka_Surat = $this->_tajukAtas . $this->papar->mesej;

		# Pergi papar kandungan
		//$this->semakPembolehubah($this->papar->mesej); # Semak data dulu
		$this->paparKandungan($this->_folder, 'index');
	}
#--------------------------------------------------------------------------------------------------
	function folderPaparTidakWujud()
	{
		$this->papar->mesej = 'folder tidak wujud dalam PAPAR';
		$this->papar->Tajuk_Muka_Surat = $this->_tajukAtas . $this->papar->mesej;

		# Pergi papar kandungan
		//$this->semakPembolehubah($this->papar->mesej); # Semak data dulu
		$this->paparKandungan($this->_folder, 'index');
	}
#--------------------------------------------------------------------------------------------------
	function failTidakWujud()
	{
		$this->papar->mesej = 'Fail tidak wujud dalam PAPAR';
		$this->papar->Tajuk_Muka_Surat = $this->_tajukAtas . $this->papar->mesej;

		# Pergi papar kandungan
		//$this->semakPembolehubah($this->papar->mesej); # Semak data dulu
		$this->paparKandungan($this->_folder, 'index');
	}
#--------------------------------------------------------------------------------------------------
	function masalahDB($amaran)
	{
		$this->papar->mesej = $amaran;
		$this->papar->Tajuk_Muka_Surat = $this->_tajukAtas . $this->papar->mesej;

		# Pergi papar kandungan
		//$this->semakPembolehubah($this->papar->mesej); # Semak data dulu
		$this->paparKandungan($this->_folder, 'index');
	}
#--------------------------------------------------------------------------------------------------
#==================================================================================================
}