<?php

class Index extends Kawal 
{

	function __construct() 
	{
		parent::__construct();
	}
	
	public function index($tajuk = 'Tentang Amin007') 
	{	
		// set pembolehubah
		#$this->papar->tajuk = (empty($url[0])) ? 'index' : $url[0];
		$this->papar->Tajuk_Muka_Surat = $tajuk;
		$this->papar->gambar = gambar_latarbelakang();
		
		// papar kandungan
		$this->papar->baca('index/index', 0);
	}
		
}
