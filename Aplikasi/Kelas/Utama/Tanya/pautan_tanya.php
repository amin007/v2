<?php
namespace Aplikasi\Tanya; //echo __NAMESPACE__;
class Pautan_Tanya extends \Aplikasi\Kitab\Tanya
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
	function getIdea001()
	{
		$papar = array(
			'[jQuery]'=>'http://jquery.com',
			'[Bootstrap]'=>'http://getbootstrap.com',
			'[PicoCss]'=>'https://picocss.com',
			'[Sample Database]'=>'https://dataedo.com/kb/databases/mysql/sample-databases',
			'[animate.css]'=>'https://daneden.github.io/animate.css',
			'[Sweet Alert]'=>'http://t4t5.github.io/sweetalert',
			'[FontAwesome]'=>'http://fortawesome.github.io/Font-Awesome',
			'[Fsymbols]'=>'https://fsymbols.com',
			'[backstretch]'=>'http://srobbin.com/jquery-plugins/backstretch',
			'[jQuery.Form]'=>'http://malsup.com/jquery/form',
			'[Pixabay]'=>'https://pixabay.com',
			'[Pexels]'=>'https://pexels.com',
			'[Unslpash]'=>'https://unsplash.com',
			'[Vecteezy]'=>'https://www.vecteezy.com',
			'[7-themes]'=>'http://7-themes.com',
		);

		return $papar;
	}
#--------------------------------------------------------------------------------------------------
	function getIdea002()
	{
		$papar = array(
			'[GITN Test]'=>'//speedtest.gitn.net.my',
			'[TM Test]'=>'//speedtest.tm.com.my',
			'[Fast.com]'=>'//fast.com',
			'[Speedtest.net]'=>'https://www.speedtest.net',
			'[nPerf]'=>'https://www.nperf.com',
			'[Web Whatsapp]'=>'//web.whatsapp.com',
			'[Kalendar]'=>'https://www.mysumber.com/cuti-umum.html',
			'[Borang Bootstrap]'=>'./?q=borang',
			//'[Semak DNS]'=>'./?q=semakDNS',
			'[Free MP3]'=>'https://freemp3cloud.com',
			'[Loop Youtube]'=>'https://looptube.io',
			'[Forvo]'=>'https://forvo.com',
			'[Facebook]'=>'//www.facebok.com',
			'[Youtube]'=>'//www.youtube.com',
			'[Twitter]'=>'//www.twitter.com',
			'[Amazon]'=>'//www.amazon.com',
			'[AliExpress]'=>'//www.aliexpress.com',
			'[Booking]'=>'//www.booking.com',
			'[Agoda]'=>'//www.agoda.com',
		);

		return $papar;
	}
#--------------------------------------------------------------------------------------------------
	function koleksi001()
	{
		$papar = array(
			'[Proxmox]'=>'https://www.proxmox.com/en/proxmox-ve',
			'[Pi-hole]'=>'https://pi-hole.net',
			'cashapp in malaysia'=>'https://whomadewhat.org/is-cashapp-available-in-malaysia/',
			'10 ewallets-malaysia'=>'https://wise.com/my/blog/10-ewallets-malaysia',
			'excel match'=>'https://www.wallstreetmojo.com/how-to-match-data-in-excel',
			'check laptops bateri'=>'https://sea.pcmag.com/batteries-power/42459/how-to-check-your-'
			. 'laptops-battery-health-in-windows-10',
			'[lazada001]'=>'4S professional s110 cordless screwdriver drill 3.6v + bosch 33 pcs',
			'[ssm4u]'=>'https://ssm4u.com.my',
			'[RHB]'=>'For more information about Send Money via PayPal, please call Internet'
			. ' Banking Customer Service number at 03-92068228 or visit www.rhb.com.my',
			'[Paypal]'=>'For more information about PayPal Account and its services, please'
			. ' call PayPal Support Centre at 03-77237155 or visit www.paypal.com',
			'marketplaces'=>'Get paid by leading marketplaces including Upwork, Fiverr, Envato,'
			. 'Shutterstock, Getty Images, and more',
			'10-top-sites-for-freelance-services'=>'https://www.business.com/articles/'
			. '10-top-sites-for-freelance-services/',
			'[Freelance.com]'=>'https://www.freelancer.com',
			'[Workana]'=>'https://www.workana.com',
			'[Fiverr]'=>'https://www.fiverr.com',
			'[install-chocolatey]'=>'https://www.how2shout.com/how-to/how-to-install-chocolatey'
			. '-package-manager-on-windows-10-8-7.html',
			'[payoneer]'=>'https://www.payoneer.com',
			'[invisionapp]'=>'https://www.invisionapp.com',
			'[shapr3d]'=>'https://www.shapr3d.com',
			'[sketchup]'=>' https://app.sketchup.com',
			'[Git Tool Submodules]'=>'https://git-scm.com/book/en/v2/Git-Tools-Submodules',
			'[Spring Java]'=>'https://start.spring.io',
			'[best screen recorders windows 7]'=>'https://www.screencapture.com/blog/'
			. 'best-screen-recorders-windows-7.html',
			'[Panopto]'=>'https://www.panopto.com',
			'[Happyscribe]'=>'https://www.happyscribe.com',
			'[Veed]'=>'https://www.veed.io',
			'[Fliki]'=>'https://fliki.ai',
			'[Transkriptor]'=>'https://transkriptor.com',
			'[Go-Transcribe]'=>'https://go-transcribe.com',
			'[Geekflare]'=>'https://geekflare.com',
			'[owncloud]'=>'https://owncloud.com',
			'[Pos.My-track-label]'=>'https://shop.pos.com.my/tracked-label-international.html',
			'[Pos.My-flexipack]'=>'https://shop.pos.com.my/flexipack-international-zone-2-xs.html',
			'[Chatgpt]'=>'https://chatgpt.com',
			'[Perplexity]'=>'https://perplexity.ai',
			'[Claude]'=>'https://claude.ai',
			//'[]'=>'',
		);

		return $papar;
	}
#--------------------------------------------------------------------------------------------------
	function dnschanger()
	{
		$data['dns01'] = '|Streamyx | 202.188.18.188 | 1.9.1.9';
		$data['dns02'] = '|Google DNS | 8.8.8.8 | 8.8.4.4';
		$data['dns03'] = '|Cloudflare DNS | 1.1.1.1 | 1.0.0.1';
		$data['dns04'] = '|Cloudflare3 DNS | 1.1.1.3 | 1.0.0.3';
		$data['dns05'] = '|OpenDNS | 208.67.222.123 | 208.67.222.220';
		$data['dns06'] = '|OpenDNS Home | 208.67.222.222 | 208.67.220.220';
		$data['dns07'] = '|Quad9 | 9.9.9.9 | 149.112.112.112';
		$data['dns08'] = '|CleanBrowsing | 185.228.168.9 | 185.228.169.9';
		$data['dns09'] = '|Verisign | 64.6.64.6 | 64.6.65.6';
		$data['dns10'] = '|Alternate DNS | 198.101.242.72 | 23.253.163.53';
		$data['dns11'] = '|AdGuard DNS | 176.103.130.130 | 176.103.130.131';
		$data['dns12'] = '|Level 3 | 209.244.0.3 | 209.244.0.3';
		$data['dns13'] = '|Norton ConnectSafe | 199.85.126.10 | 199.85.127.10';
		$data['dns14'] = '|OpenNic | 10.150.40.234 | 50.116.23.211';
		$data['dns15'] = '|DNS Advantage | 156.154.70.1 | 156.154.71.1';
		$data['dns16'] = '|DNS Watch | 84.200.69.80 | 84.200.70.40';
		$data['dns17'] = '|Comodo Secure DNS | 8.26.56.26 | 8.20.247.20';
		$data['dns18'] = '|GreenTeamDNS | 81.218.119.11 | 209.88.198.133';
		$data['dns19'] = '|SafeDNS | 195.46.39.39 | 195.46.39.40';
		$data['dns20'] = '|SmartViper | 208.76.50.50 | 208.76.51.51';
		$data['dns21'] = '|Dyn | 216.146.35.35 | 216.146.36.36';
		//*/
		return $data;
	}
#--------------------------------------------------------------------------------------------------
	function tetikus()
	{
		/*
		Logitech MX Master 2S
		Logitech signature m650
		Logitech M590
		Logitech Amywhere
		Logitech Unifying Receiver
		razer basilisk x hyperspeed
		*/
	}
#--------------------------------------------------------------------------------------------------
#==================================================================================================
}
