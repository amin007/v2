<?php
/* Ini class untuk
 * 1. capai fungsi $this->parseURL() dan masukkan dalam $url
 * 2. cari controller => kawal
 * 3. cari method => fungsi
 * 4. masukkan tatasusunan dalam params jika ada
 * 5. jalankan controller & method, serta kirim params jika ada
 */
namespace Aplikasi\Kitab;//echo __NAMESPACE__;
class Peta2
{
#==========================================================================================
#------------------------------------------------------------------------------------------
	protected $params = [];
#------------------------------------------------------------------------------------------
	public function semakPembolehubah($senarai,$jadual,$p='0')
	{
		echo '<pre style="background:#fff">$' . $jadual . '=><br>';
		if($p == '0') print_r($senarai);
		if($p == '1') var_export($senarai);
		if($p == '2') var_dump($senarai);
		echo '</pre><hr>';//*/
		//$this->semakPembolehubah($ujian,'ujian',0);
		#http://php.net/manual/en/function.var-export.php
		#http://php.net/manual/en/function.print-r.php
	}
#------------------------------------------------------------------------------------------
	public function parseURL()
	{
		//$this->semakPembolehubah($_GET,'_GET');
		if( isset($_GET['url']) )
		{
			$url = rtrim($_GET['url'], '/');
			$url = filter_var($url, FILTER_SANITIZE_URL);
			$url = explode('/', $url);
			return $url;
		}
	}
#------------------------------------------------------------------------------------------
	public function __construct()
	{
		# 1. capai fungsi $this->parseURL() dan masukkan dalam $url
		$url = $this->parseURL();
		list($url,$Url) = $this->semakURL($url);
		//$this->debugData($url,$Url);#semak untuk masa depan

		# 2. cari controller => kawal
		$url = $this->semakKawal($url,$Url);
		//$this->semakPembolehubah($url,'url selepas class');

		# 3. cari method => fungsi
		$url = $this->semakMethod($url);
		//$this->semakPembolehubah($url,'url selepas method');

		# 4. masukkan tatasusunan dalam params jika ada
		if(!empty($url)) $this->params = array_values($url);

		# 5. jalankan controller & method, serta kirim params jika ada
		call_user_func_array([$this->kawal,$this->method], $this->params);
	}
#------------------------------------------------------------------------------------------
	private function debugData($url, $Url = null)
	{
		# semak $url
		if($url == '') echo '<kbd>$url kosong daa</kbd><hr>';
		else
		{
			$this->semakPembolehubah($url,'url adalah tatasusunan');
		}
		# semak $Url
		if($Url == null) echo '<kbd>$Url kosong daa</kbd><hr>';
		else
		{
			$this->semakPembolehubah($Url,'class Url adalah tatasusunan ');
		}
		# mungkin akan sambung nota lagi
	}
#------------------------------------------------------------------------------------------
	function semakURL($url)
	{
		# semak sama ada $url[0] kosong * jika ya : $url[0] == 'index';
		$url[0] = (empty($url[0])) ? 'index' : $url[0];
		$arah = huruf('Depan',$url[0]);
		$Url[0] = '\\Aplikasi\Kawal\\' . $arah;
		# debug nilai $url dan $Url
		//$this->semakPembolehubah($url,'url');
		//$this->semakPembolehubah($arah,'arah');
		//$this->semakPembolehubah($Url,'class url');
		# pulangkan nilai
		return array($url,$Url);
	}
#------------------------------------------------------------------------------------------
	function semakKawal($url,$Url)
	{
		# debug nilai $url dan $Url
		//echo '<hr><kbd>Nama class :' . __METHOD__ . '</kbd><hr>';
		//$this->semakPembolehubah($url,'url');$this->semakPembolehubah($Url,'class url');
		//echo '<kbd>lokasi fail:' . KAWAL . '/' . huruf('Depan',$url[0]) . '.php</kbd><hr>';
		//$Kelas = huruf('Depan',$url[0]);
		if( file_exists(KAWAL . '/' . huruf('Depan',$url[0]) . '.php') )
		{
			$this->kawal = new $Url[0];# nilai default adalah index
			//$this->semakPembolehubah($Kelas,'Kelas');
			//$this->semakPembolehubah($this->kawal,'nama class:');
			# cari class model/tanya
			$this->kawal->jemaahTaskil($url[0]);
			unset($url[0]);
		}
		else $this->sesat();

		return $url;
	}
#------------------------------------------------------------------------------------------
	function semakMethod($url)
	{
		# jika $url[1] tak disetkan, bagi $method='index'
		$method = (isset($url[1])) ? $url[1] : 'index';

		if( isset($method) )
		{
			if( method_exists($this->kawal, $method) )
			{
				$this->method = $method;# nilai default adalah index
				//echo 'nama method:' . $method . '<hr>';
				unset($url[1]);
			}
			else $this->sesatMethod01();
		}
		else $this->sesatMethod02();

		return $url;
	}
#------------------------------------------------------------------------------------------
#==========================================================================================
#------------------------------------------------------------------------------------------
### masuk fungsi campak ke pangkal jalan jika sesat
	#--------------------------------------------------------------------------------------
	function sesat()
	{
		$kawal = new \Aplikasi\Kawal\Sesat();
		$kawal->index('Fail Kawal tidak wujud'); exit();
		//return false;
	}
	#--------------------------------------------------------------------------------------
	function sesatMethod01()
	{
		echo '<hr>Nama class :' . __METHOD__ . '<hr>'; exit();
	}
	#--------------------------------------------------------------------------------------
	function sesatMethod02()
	{
		echo '<hr>Nama class :' . __METHOD__ . '<hr>';
	}
	#--------------------------------------------------------------------------------------
	static function classTanyaTidakWujud($amaran)
	{
		echo '<hr>Nama class :' . __METHOD__ . '<hr>';
		echo "<kbd>$amaran</kbd>";
		exit(); return false;
	}
	#--------------------------------------------------------------------------------------
###
#------------------------------------------------------------------------------------------
#==========================================================================================
}