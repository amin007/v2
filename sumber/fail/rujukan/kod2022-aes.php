<?php
###################################################################################################
include 'fungsi_global.php';
###################################################################################################
#--------------------------------------------------------------------------------------------------
$data['msicAes'] = array(
	//array('','Bil.','Seksyen','Subsektor','MSIC 5 Digit','Keterangan MSIC',
	//'Peringkat Liputan MSIC (2/3/5 Digit)'),
	array('','A','Tanaman','01111','Penanaman jagung'),
	array('','A','Tanaman','01112','Penanaman tanaman kekacang'),
	array('','A','Tanaman','01113','Penanaman bijian berminyak'),
	array('','A','Tanaman','01119','Penanaman bijirin lain t.t.t.l'),
	array('','A','Tanaman','01120','Penanaman padi'),
	array('','A','Tanaman','01131','Penanaman sayur-sayuran berdaun atau berbatang'),
	array('','A','Tanaman','01132','Penanaman sayur-sayuran berbuah'),
	array('','A','Tanaman','01133','Penanaman tembikai'),
	array('','A','Tanaman','01134','Penanaman cendawan dan truffles'),
	array('','A','Tanaman','01135','Penanaman benih sayuran, kecuali benih bit'),
	array('','A','Tanaman','01136','Penanaman sayur-sayuran lain'),
	array('','A','Tanaman','01137','Penanaman ubi gula'),
	array('','A','Tanaman','01138','Penanaman tumbuhan berakar, ubi-ubian, bebawang atau'
	. ' sayur-sayuran berubi'),
	array('','A','Tanaman','01140','Penanaman tebu'),
	array('''A','Tanaman','01150','Penanaman tembakau'),
	array('','A','Tanaman','01160','Penanaman tanaman berserat'),
	array('''A','Tanaman','01191','Penanaman bunga'),
	array('','A','Tanaman','01192','Penanaman biji benih bungaan'),
	array('','A','Tanaman','01193','Penanaman sagu (rumbia)'),
	array('','A','Tanaman','01199','Penanaman tanaman bukan kekal lain t.t.t.l'),
	array('','21','A','Tanaman','01210','Penanaman anggur'),
	array('','22','A','Tanaman','01221','Penanaman pisang'),
	array('','23','A','Tanaman','01222','Penanaman mangga'),
	array('','24','A','Tanaman','01223','Penanaman durian'),
	array('','25','A','Tanaman','01224','Penanaman rambutan'),
	array('','26','A','Tanaman','01225','Penanaman buah belimbing'),
	array('','27','A','Tanaman','01226','Penanaman betik'),
	array('','28','A','Tanaman','01227','Penanaman nenas'),
	array('','29','A','Tanaman','01228','Penanaman buah naga'),
	array('','30','A','Tanaman','01229','Penanaman buah-buahan tropika dan subtropika lain'
	. ' t.t.t.l'),
	array('','31','A','Tanaman','01231','Penanaman limau bali'),
	array('','32','A','Tanaman','01232','Penanaman lemon dan limau nipis'),
	array('','33','A','Tanaman','01233','Penanaman tangerin dan mandarin'),
	array('','34','A','Tanaman','01239','Penanaman buah-buahan sitrus lain t.t.t.l.'),
	array('','35','A','Tanaman','01241','Penanaman jambu batu'),
	array('','36','A','Tanaman','01249','Penanaman buah-buahan delima dan berbiji lain'
	. ' t.t.t.l'),
	array('','37','A','Tanaman','01251','Penanaman buah beri'),
	array('','38','A','Tanaman','01252','Penanaman biji benih buah-buahan'),
	array('','39','A','Tanaman','01253','Penanaman kekacang yang boleh dimakan'),
	array('','40','A','Tanaman','01259','Penanaman pokok dan buah-buahan bertandan lain'),
	array('','41','A','Tanaman','01261','Penanaman kelapa sawit (estet)'),
	array('','42','A','Tanaman','01262','Penanaman kelapa sawit (kebun kecil)'),
	array('','43','A','Tanaman','01263','Penanaman kelapa (estet dan kebun kecil)'),
	array('','44','A','Tanaman','01269','Penanaman buah-buah lain untuk minyak t.t.t.l.'),
	array('','45','A','Tanaman','01271','Penanaman kopi'),
	array('','46','A','Tanaman','01272','Penanaman teh'),
	array('','47','A','Tanaman','01273','Penanaman koko'),
	array('','48','A','Tanaman','01279','Penanaman tanaman minuman lain t.t.t.l.'),
	array('','49','A','Tanaman','01281','Penanaman lada hitam (piper nigrum)'),
	array('','50','A','Tanaman','01282','Penanaman cili dan lada (lada benggala spp.)'),
	array('','51','A','Tanaman','01283','Penanaman buah pala'),
	array('','52','A','Tanaman','01284','Penanaman halia'),
	array('','53','A','Tanaman','01285','Penanaman tanaman yang digunakan terutamanya untuk'
	. ' penghasilan minyak wangi, untuk farmasi atau untuk racun serangga, kulat atau untuk'
	. ' tujuan yang seumpamanya'),
	array('','54','A','Tanaman','01289','Penanaman tanaman rempah ratus dan aromatik lain'
	. ' t.t.t.l'),
	array('','55','A','Tanaman','01291','Penanaman pokok getah (estet)'),
	array('','56','A','Tanaman','01292','Penanaman pokok getah (kebun kecil)'),
	array('','57','A','Tanaman','01293','Penanaman pokok untuk pengekstrakan sap'),
	array('','58','A','Tanaman','01294','Penanaman pokok nipah'),
	array('','59','A','Tanaman','01295','Penanaman pokok pinang'),
	array('','60','A','Tanaman','01296','Penanaman pokok roselle'),
	array('','61','A','Tanaman','01299','Penanaman tanaman kekal lain t.t.t.l'),
	array('','62','A','Tanaman','01301','Penanaman tumbuhan sebagai tanaman'),
	array('','63','A','Tanaman','01302','Penanaman tumbuhan untuk tujuan hiasan'),
	array('','64','A','Tanaman','01303','Penanaman tumbuhan untuk bebawang, ubi dan akar;'
	. ' keratan dan slips; cendawan'),
	array('','65','A','Tanaman','01304','Operasi tapak semaian pokok (nurseries)'),
	array('','66','A','Tanaman','01500','Pertanian campuran'),
	array('','67','A','Tanaman','01610','Aktiviti pertanian untuk pengeluaran tanaman berasaskan'
	. ' yuran atau kontrak'),
	array('','68','A','Tanaman','01631','Penyediaan tanaman untuk pasaran utama'),
	array('','69','A','Tanaman','01632','Penyediaan daun tembakau'),
	array('','70','A','Tanaman','01633','Penyediaan biji koko'),
	array('','71','A','Tanaman','01634','Menjemur sayur-sayuran dan buah-buahan'),
	array('','72','A','Ternakan','01640','Pemprosesan benih untuk pembiakan'),
	array('','73','A','Ternakan','01411','Penternakan, pembiakan dan pengeluaran lembu/kerbau'),
	array('','74','A','Ternakan','01412','Pengeluaran susu mentah daripada lembu/kerbau'),
	array('','75','A','Ternakan','01413','Pengeluaran air mani lembu'),
	array('','76','A','Ternakan','01420','Penternakan dan pembiakan kuda, keldai, baghal'
	. ' atau hinnes'),
	array('','77','A','Ternakan','01430','Penternakan dan pembiakan unta (dromedary) dan'
	. ' camelid'),
	array('','78','A','Ternakan','01441','Penternakan, pembiakan dan pengeluaran biri-biri'
	. ' dan kambing'),
	array('','79','A','Ternakan','01442','Pengeluaran susu mentah biri-biri/kambing'),
	array('','80','A','Ternakan','01443','Pengeluaran bulu belum proses'),
	array('','81','A','Ternakan','01450','Penternakan, pembiakan dan pengeluaran babi'),
	array('','82','A','Ternakan','01461','Penternakan, pembiakan dan pengeluaran ayam,'
	. ' ayam daging'),
	array('','83','A','Ternakan','01462','Penternakan, pembiakan dan pengeluaran itik'),
	array('','84','A','Ternakan','01463','Penternakan, pembiakan dan pengeluaran angsa'),
	array('','85','A','Ternakan','01464','Penternakan, pembiakan dan pengeluaran burung puyuh'),
	array('','86','A','Ternakan','01465','Penternakan dan pembiakan unggas lain'
	. ' t.t.t.l.'),
	array('','87','A','Ternakan','01466','Pengeluaran telur ayam'),
	array('','88','A','Ternakan','01467','Pengeluaran telur itik'),
	array('','89','A','Ternakan','01468','Pengeluaran telur unggas lain t.t.t.l.'),
	array('','90','A','Ternakan','01469','Operasi penetasan unggas'),
	array('','91','A','Ternakan','01491','Penternakan, pembiakan dan pengeluaran haiwan separuh'
	. ' jinak'),
	array('','92','A','Ternakan','01492','Pengeluaran kulit berbulu, kulit burung atau reptilia'
	. ' dari operasi ladang ternakan'),
	array('','93','A','Ternakan','01493','Operasi ternakan cacing, moluska, siput'),
	array('','94','A','Ternakan','01494','Penternakan ulat sutera dan pengeluaran hasil kepompong'
	. ' ulat sutera'),
	array('','95','A','Ternakan','01495','Penternakan lebah dan pengeluaran hasil madu dan lilin'
	. ' lebah'),
	array('','96','A','Ternakan','01496','Penternakan dan pembiakan haiwan peliharaan'),
	array('','97','A','Ternakan','01497','Penternakan dan pembiakan burung walit'),
	array('','98','A','Ternakan','01499','Penternakan pelbagai/haiwan lain t.t.t.l'),
	array('','99','A','Perhutanan & Pembalakan','01620','Aktiviti pertanian untuk pengeluaran'
	. ' ternakan berasaskan yuran atau kontrak'),
	array('','100','A','Perhutanan & Pembalakan','02101','Penanaman, penanaman semula,'
	. ' pemindahan, pengurusan dan pemuliharaan hutan dan kawasan lapang'),
	array('','101','A','Perhutanan & Pembalakan','02102','Penanaman untuk tunas semula,'
	. ' kayu pulpa dan kayu api'),
	array('','102','A','Perhutanan & Pembalakan','02103','Operasi tapak semaian pokok hutan'),
	array('','103','A','Perhutanan & Pembalakan','02104','Pengumpulan dan pemeliharaan hutan'
	. ' liar (spesis pokok hutan paya gambut)'),
	array('','104','A','Perhutanan & Pembalakan','02105','Ladang hutan'),
	array('','105','A','Perhutanan & Pembalakan','02201','Pengeluaran kayu balak untuk industri'
	. ' berasaskan kayu'),
	array('','106','A','Perhutanan & Pembalakan','02202','Pengeluaran kayu balak yang digunakan'
	. ' dalam bentuk belum proses'),
	array('','107','A','Perhutanan & Pembalakan','02203','Pengeluaran arang kayu dalam hutan'
	. ' (menggunakan kaedah tradisional)'),
	array('','108','A','Perhutanan & Pembalakan','02204','Pembalakan kayu getah'),
	array('','109','A','Perhutanan & Pembalakan','02301','Pengumpulan rotan, buluh'),
	array('','110','A','Perhutanan & Pembalakan','02302','Pemungutan sarang burung'),
	array('','111','A','Perhutanan & Pembalakan','02303','Pengumpulan pokok sagu liar'),
	array('','112','A','Perhutanan & Pembalakan','02309','Pengumpulan produk hutan bukan kayu'
	. ' t.t.t.l'),
	array('','113','A','Perhutanan & Pembalakan','02401','Menjalankan sebahagian operasi perhutanan'
	. ' dan ladang hutan berdasarkan bayaran atau secara kontrak untuk aktiviti perkhidmatan'
	. ' perhutanan'),
	array('','114','A','Perhutanan & Pembalakan','02402','Menjalankan sebahagian operasi'
	. ' perhutanan berdasarkan bayaran atau secara kontrak untuk aktiviti perkhidmatan'
	. ' pembalakan'),
	array('','115','A','Perikanan','03111','Perikanan komersil di laut dan perairan pantai',
	'5 Digit'),
	array('','116','A','Perikanan','03112','Pemungutan krustasia dan moluska laut'),
	array('','117','A','Perikanan','03113','Pengambilan haiwan akuatik : sea squirts, tunikat,'
	. ' landak laut'),
	array('','118','A','Perikanan','03114','Aktiviti atas vessel yang melibatkan penangkapan,'
	. ' pemprosesan dan pengawetan ikan'),
	array('','119','A','Perikanan','03115','Pengumpulan organisma perikanan dan hasil laut lain'
	. ' (tiram semulajadi, span, batu karang dan alga)'),
	array('','120','A','Perikanan','03119','Perikanan laut t.t.t.l.'),
	array('','121','A','Perikanan','03121','Perikanan komersil di darat'),
	array('','122','A','Perikanan','03122','Pengambilan krustasia dan moluska air tawar'),
	array('','123','A','Perikanan','03123','Pengambilan haiwan akuatik air tawar'),
	array('','124','A','Perikanan','03124','Pengumpulan flora dan fauna air tawar'),
	array('','125','A','Perikanan','03129','Perikanan ikan air tawar t.t.t.l.'),
	array('','126','A','Perikanan','03211','Ternakan ikan di laut'),
	array('','127','A','Perikanan','03212','Pengeluaran dwi-cangkerang spat (tiram, kupang), anak'
	. ' udang kara, anak udang dan benih ikan'),
	array('','128','A','Perikanan','03213','Penanaman rumpair merah dan rumpai laut lain yang'
	. ' boleh dimakan'),
	array('','129','A','Perikanan','03214','Pengkulturan krustasia, dwi- cangkerang, moluska'
	. ' dan haiwan akuatik lain di laut'),
	array('','130','A','Perikanan','03215','Aktiviti akuakultur air payau'),
	array('','131','A','Perikanan','03216','Aktiviti akuakultur di dalam tangki air atau'
	. ' takungan masin'),
	array('','132','A','Perikanan','03217','Operasi penetasan anak benih (laut)'),
	array('','133','A','Perikanan','03218','Operasi ladang ternakan cacing laut untuk makanan'
	. ' ikan'),
	array('','134','A','Perikanan','03219','Akuakultur laut t.t.t.l.'),
	array('','135','A','Perikanan','03221','Ternakan ikan air tawar'),
	array('','136','A','Perikanan','03222','Ternakan udang air tawar'),
	array('','137','A','Perikanan','03223','Pengkulturan krustasia, dwi-cangkerang, moluska dan'
	. ' haiwan akuatik lain di air tawar'),
	array('','138','A','Perikanan','03224','Operasi penetasan anak benih (air tawar)'),
	array('','139','A','Perikanan','03225','Penternakan katak'),
	array('','140','A','Perikanan','03229','Akuakultur air tawar t.t.t.l.'),
	array('','141','E','Bekalan Air; Pembetungan, Pengurusan Sisa & Aktiviti Pemulihan','36001',
	'Penulenan dan pengagihan air untuk tujuan bekalan air'),
	array('','142','E','Bekalan Air; Pembetungan, Pengurusan Sisa & Aktiviti Pemulihan','36002',
	'Penyahmasinan air laut atau bawah tanah untuk menghasilkan air sebagai kepentingan produk'
	. ' utama'),
	array('','143','E','Bekalan Air; Pembetungan, Pengurusan Sisa & Aktiviti Pemulihan','37000',
	'Pembetungan dan aktiviti-aktiviti yang seumpamanya'),
	array('','144','E','Bekalan Air; Pembetungan, Pengurusan Sisa & Aktiviti Pemulihan','38111',
	'Pengumpulan sisa pepejal yang tidak berbahaya (cth. sampah) di kawasan setempat'),
	array('','145','E','Bekalan Air; Pembetungan, Pengurusan Sisa & Aktiviti Pemulihan','38112',
	'Pengumpulan bahan kitar semula'),
	array('','146','E','Bekalan Air; Pembetungan, Pengurusan Sisa & Aktiviti Pemulihan','38113',
	'Pengumpulan sampah dalam tong sampah di kawasan awam'),
	array('','147','E','Bekalan Air; Pembetungan, Pengurusan Sisa & Aktiviti Pemulihan','38114',
	'Pengumpulan sisa pembinaan dan runtuhan'),
	array('','148','E','Bekalan Air; Pembetungan, Pengurusan Sisa & Aktiviti Pemulihan','38115',
	'Operasi stesen pemindahan pembuangan sisa tidak berbahaya'),
	array('','149','E','Bekalan Air; Pembetungan, Pengurusan Sisa & Aktiviti Pemulihan','38121',
	'Pengumpulan sisa berbahaya'),
	array('','150','E','Bekalan Air; Pembetungan, Pengurusan Sisa & Aktiviti Pemulihan','38122',
	'Operasi stesen pemindahan pembuangan bagi sisa berbahaya'),
	array('','151','E','Bekalan Air; Pembetungan, Pengurusan Sisa & Aktiviti Pemulihan','38210',
	'Rawatan dan pelupusan sisa tidak berbahaya'),
	array('','152','E','Bekalan Air; Pembetungan, Pengurusan Sisa & Aktiviti Pemulihan','38220',
	'Rawatan dan pelupusan sisa berbahaya'),
	array('','153','E','Bekalan Air; Pembetungan, Pengurusan Sisa & Aktiviti Pemulihan','38301',
	'Meremukkan secara mekanikal sisa logam'),
	array('','154','E','Bekalan Air; Pembetungan, Pengurusan Sisa & Aktiviti Pemulihan','38302',
	'Meleraikan peralatan automobil, komputer, televisyen dan peralatan lain untuk pemulihan'
	. ' bahan'),
	array('','155','E','Bekalan Air; Pembetungan, Pengurusan Sisa & Aktiviti Pemulihan','38303',
	'Memulih guna getah seperti tayar terpakai untuk menghasilkan bahan mentah sekunder'),
	array('','156','E','Bekalan Air; Pembetungan, Pengurusan Sisa & Aktiviti Pemulihan','38304',
	'Penggunaan semula produk getah'),
	array('','157','E','Bekalan Air; Pembetungan, Pengurusan Sisa & Aktiviti Pemulihan','38309',
	'Pemulihan bahan t.t.t.l.'),
	array('','158','E','Bekalan Air; Pembetungan, Pengurusan Sisa & Aktiviti Pemulihan','39000',
	'Aktiviti pemulihan dan lain-lain perkhidmatan pengurusan sisa'),
);
#--------------------------------------------------------------------------------------------------
$data['mcpaPertanian'] = array(
	array('','',''),
	array('','',''),
	array('','',''),
);//*/
#--------------------------------------------------------------------------------------------------
/*$data['xxx'] = array(
	array('','',''),
	array('','',''),
	array('','',''),
);//*/
#--------------------------------------------------------------------------------------------------
/*$data['xxx'] = array(
	array('','',''),
	array('','',''),
	array('','',''),
);//*/
#--------------------------------------------------------------------------------------------------
/*$data['xxx'] = array(
	array('','',''),
	array('','',''),
	array('','',''),
);//*/
#--------------------------------------------------------------------------------------------------
###################################################################################################
# mula koding
#--------------------------------------------------------------------------------------------------
/*
$_SERVER['PATH_INFO'] => untuk apache
$_SERVER['REQUEST_URI'] =
$_SERVER['PATH_TRANSLATED']
$_SERVER['PHP_SELF']
$_SERVER['QUERY_STRING'] => /bandar
$_SERVER['REQUEST_SCHEME'] => https
$_SERVER['SERVER_PORT'] => 80 atau 443

$s = 'PHP_SELF';
echo $_SERVER[$s] . '|<br>';
$cari0 = explode('rujukan/',$_SERVER[$s]);
$cari2 = explode('/',$cari0[1]);
echo '<pre>'; print_r($cari2); echo '</pre>';
*/
#--------------------------------------------------------------------------------------------------
# kaedah 1
/*if (isset($_GET['cari'])):
	$cari = $_GET['cari'];
	//echo '<pre>$cari='; print_r($cari); echo '</pre>';
	panggilDataTable($data,$cari);# panggil fungsi
else:
	panggilDataTable($data,null);# panggil fungsi
endif;//*/
#--------------------------------------------------------------------------------------------------
# kaedah 2
$s = 'REQUEST_URI';//$s = 'PHP_SELF';
//semakPembolehubah($_SERVER['REQUEST_URI'],'REQUEST_URI');
if (isset($_SERVER[$s])):
	$fail = explode('rujukan/',$_SERVER[$s]);//semakPembolehubah($fail,'fail');
	$cari = explode('/',$fail[1]);//semakPembolehubah($cari,'pilih');

	if(isset($cari[1])):
		$cariApa = bersih($cari[1]);
		if($cariApa == 'json'):
			$pilih = isset($cari[2]) ? $cari[2] : null;
			$cariApa = bersih($pilih);
			binaJson($data,$pilih);
		elseif($cariApa == 'tahun'):
			$data['tahun'] = kiraTahunJadual();
			panggilDataTable($data,$cariApa);# panggil fungsi
		else:
			panggilDataTable($data,$cariApa);# panggil fungsi
		endif;
	else:
		panggilDataTable($data,null);# panggil fungsi
	endif;
else:
	panggilDataTable($data,null);# panggil fungsi
endif;//*/
#--------------------------------------------------------------------------------------------------
//versiphp();
#--------------------------------------------------------------------------------------------------
# tamat koding
###################################################################################################
#--------------------------------------------------------------------------------------------------
#--------------------------------------------------------------------------------------------------
###################################################################################################