<?php
###################################################################################################
include 'fungsi_global.php';
###################################################################################################
#--------------------------------------------------------------------------------------------------
$data['msicAes'] = array(
	//array('','Seksyen','Subsektor','MSIC 5 Digit','Keterangan MSIC'),
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
	array('','A','Tanaman','01150','Penanaman tembakau'),
	array('','A','Tanaman','01160','Penanaman tanaman berserat'),
	array('','A','Tanaman','01191','Penanaman bunga'),
	array('','A','Tanaman','01192','Penanaman biji benih bungaan'),
	array('','A','Tanaman','01193','Penanaman sagu (rumbia)'),
	array('','A','Tanaman','01199','Penanaman tanaman bukan kekal lain t.t.t.l'),
	array('','A','Tanaman','01210','Penanaman anggur'),
	array('','A','Tanaman','01221','Penanaman pisang'),
	array('','A','Tanaman','01222','Penanaman mangga'),
	array('','A','Tanaman','01223','Penanaman durian'),
	array('','A','Tanaman','01224','Penanaman rambutan'),
	array('','A','Tanaman','01225','Penanaman buah belimbing'),
	array('','A','Tanaman','01226','Penanaman betik'),
	array('','A','Tanaman','01227','Penanaman nenas'),
	array('','A','Tanaman','01228','Penanaman buah naga'),
	array('','A','Tanaman','01229','Penanaman buah-buahan tropika dan subtropika lain'
	. ' t.t.t.l'),
	array('','A','Tanaman','01231','Penanaman limau bali'),
	array('','A','Tanaman','01232','Penanaman lemon dan limau nipis'),
	array('','A','Tanaman','01233','Penanaman tangerin dan mandarin'),
	array('','A','Tanaman','01239','Penanaman buah-buahan sitrus lain t.t.t.l.'),
	array('','A','Tanaman','01241','Penanaman jambu batu'),
	array('','A','Tanaman','01249','Penanaman buah-buahan delima dan berbiji lain'
	. ' t.t.t.l'),
	array('','A','Tanaman','01251','Penanaman buah beri'),
	array('','A','Tanaman','01252','Penanaman biji benih buah-buahan'),
	array('','A','Tanaman','01253','Penanaman kekacang yang boleh dimakan'),
	array('','A','Tanaman','01259','Penanaman pokok dan buah-buahan bertandan lain'),
	array('','A','Tanaman','01261','Penanaman kelapa sawit (estet)'),
	array('','A','Tanaman','01262','Penanaman kelapa sawit (kebun kecil)'),
	array('','A','Tanaman','01263','Penanaman kelapa (estet dan kebun kecil)'),
	array('','A','Tanaman','01269','Penanaman buah-buah lain untuk minyak t.t.t.l.'),
	array('','A','Tanaman','01271','Penanaman kopi'),
	array('','A','Tanaman','01272','Penanaman teh'),
	array('','A','Tanaman','01273','Penanaman koko'),
	array('','A','Tanaman','01279','Penanaman tanaman minuman lain t.t.t.l.'),
	array('','A','Tanaman','01281','Penanaman lada hitam (piper nigrum)'),
	array('','A','Tanaman','01282','Penanaman cili dan lada (lada benggala spp.)'),
	array('','A','Tanaman','01283','Penanaman buah pala'),
	array('','A','Tanaman','01284','Penanaman halia'),
	array('','A','Tanaman','01285','Penanaman tanaman yang digunakan terutamanya untuk'
	. ' penghasilan minyak wangi, untuk farmasi atau untuk racun serangga, kulat atau untuk'
	. ' tujuan yang seumpamanya'),
	array('','A','Tanaman','01289','Penanaman tanaman rempah ratus dan aromatik lain'
	. ' t.t.t.l'),
	array('','A','Tanaman','01291','Penanaman pokok getah (estet)'),
	array('','A','Tanaman','01292','Penanaman pokok getah (kebun kecil)'),
	array('','A','Tanaman','01293','Penanaman pokok untuk pengekstrakan sap'),
	array('','A','Tanaman','01294','Penanaman pokok nipah'),
	array('','A','Tanaman','01295','Penanaman pokok pinang'),
	array('','A','Tanaman','01296','Penanaman pokok roselle'),
	array('','A','Tanaman','01299','Penanaman tanaman kekal lain t.t.t.l'),
	array('','A','Tanaman','01301','Penanaman tumbuhan sebagai tanaman'),
	array('','A','Tanaman','01302','Penanaman tumbuhan untuk tujuan hiasan'),
	array('','A','Tanaman','01303','Penanaman tumbuhan untuk bebawang, ubi dan akar;'
	. ' keratan dan slips; cendawan'),
	array('','A','Tanaman','01304','Operasi tapak semaian pokok (nurseries)'),
	array('','A','Tanaman','01500','Pertanian campuran'),
	array('','A','Tanaman','01610','Aktiviti pertanian untuk pengeluaran tanaman berasaskan'
	. ' yuran atau kontrak'),
	array('','A','Tanaman','01631','Penyediaan tanaman untuk pasaran utama'),
	array('','A','Tanaman','01632','Penyediaan daun tembakau'),
	array('','A','Tanaman','01633','Penyediaan biji koko'),
	array('','A','Tanaman','01634','Menjemur sayur-sayuran dan buah-buahan'),
	array('','A','Ternakan','01640','Pemprosesan benih untuk pembiakan'),
	array('','A','Ternakan','01411','Penternakan, pembiakan dan pengeluaran lembu/kerbau'),
	array('','A','Ternakan','01412','Pengeluaran susu mentah daripada lembu/kerbau'),
	array('','A','Ternakan','01413','Pengeluaran air mani lembu'),
	array('','A','Ternakan','01420','Penternakan dan pembiakan kuda, keldai, baghal'
	. ' atau hinnes'),
	array('','A','Ternakan','01430','Penternakan dan pembiakan unta (dromedary) dan'
	. ' camelid'),
	array('','A','Ternakan','01441','Penternakan, pembiakan dan pengeluaran biri-biri'
	. ' dan kambing'),
	array('','A','Ternakan','01442','Pengeluaran susu mentah biri-biri/kambing'),
	array('','A','Ternakan','01443','Pengeluaran bulu belum proses'),
	array('','A','Ternakan','01450','Penternakan, pembiakan dan pengeluaran babi'),
	array('','','A','Ternakan','01461','Penternakan, pembiakan dan pengeluaran ayam,'
	. ' ayam daging'),
	array('','A','Ternakan','01462','Penternakan, pembiakan dan pengeluaran itik'),
	array('','A','Ternakan','01463','Penternakan, pembiakan dan pengeluaran angsa'),
	array('','A','Ternakan','01464','Penternakan, pembiakan dan pengeluaran burung puyuh'),
	array('','A','Ternakan','01465','Penternakan dan pembiakan unggas lain'
	. ' t.t.t.l.'),
	array('','A','Ternakan','01466','Pengeluaran telur ayam'),
	array('','A','Ternakan','01467','Pengeluaran telur itik'),
	array('','A','Ternakan','01468','Pengeluaran telur unggas lain t.t.t.l.'),
	array('','A','Ternakan','01469','Operasi penetasan unggas'),
	array('','A','Ternakan','01491','Penternakan, pembiakan dan pengeluaran haiwan separuh'
	. ' jinak'),
	array('','A','Ternakan','01492','Pengeluaran kulit berbulu, kulit burung atau reptilia'
	. ' dari operasi ladang ternakan'),
	array('','A','Ternakan','01493','Operasi ternakan cacing, moluska, siput'),
	array('','A','Ternakan','01494','Penternakan ulat sutera dan pengeluaran hasil kepompong'
	. ' ulat sutera'),
	array('','A','Ternakan','01495','Penternakan lebah dan pengeluaran hasil madu dan lilin'
	. ' lebah'),
	array('','A','Ternakan','01496','Penternakan dan pembiakan haiwan peliharaan'),
	array('','A','Ternakan','01497','Penternakan dan pembiakan burung walit'),
	array('','A','Ternakan','01499','Penternakan pelbagai/haiwan lain t.t.t.l'),
	array('','A','Perhutanan & Pembalakan','01620','Aktiviti pertanian untuk pengeluaran'
	. ' ternakan berasaskan yuran atau kontrak'),
	array('','A','Perhutanan & Pembalakan','02101','Penanaman, penanaman semula,'
	. ' pemindahan, pengurusan dan pemuliharaan hutan dan kawasan lapang'),
	array('','A','Perhutanan & Pembalakan','02102','Penanaman untuk tunas semula,'
	. ' kayu pulpa dan kayu api'),
	array('','A','Perhutanan & Pembalakan','02103','Operasi tapak semaian pokok hutan'),
	array('','A','Perhutanan & Pembalakan','02104','Pengumpulan dan pemeliharaan hutan'
	. ' liar (spesis pokok hutan paya gambut)'),
	array('','A','Perhutanan & Pembalakan','02105','Ladang hutan'),
	array('','A','Perhutanan & Pembalakan','02201','Pengeluaran kayu balak untuk industri'
	. ' berasaskan kayu'),
	array('','A','Perhutanan & Pembalakan','02202','Pengeluaran kayu balak yang digunakan'
	. ' dalam bentuk belum proses'),
	array('','A','Perhutanan & Pembalakan','02203','Pengeluaran arang kayu dalam hutan'
	. ' (menggunakan kaedah tradisional)'),
	array('','A','Perhutanan & Pembalakan','02204','Pembalakan kayu getah'),
	array('','A','Perhutanan & Pembalakan','02301','Pengumpulan rotan, buluh'),
	array('','A','Perhutanan & Pembalakan','02302','Pemungutan sarang burung'),
	array('','A','Perhutanan & Pembalakan','02303','Pengumpulan pokok sagu liar'),
	array('','A','Perhutanan & Pembalakan','02309','Pengumpulan produk hutan bukan kayu'
	. ' t.t.t.l'),
	array('','A','Perhutanan & Pembalakan','02401','Menjalankan sebahagian operasi perhutanan'
	. ' dan ladang hutan berdasarkan bayaran atau secara kontrak untuk aktiviti perkhidmatan'
	. ' perhutanan'),
	array('','A','Perhutanan & Pembalakan','02402','Menjalankan sebahagian operasi'
	. ' perhutanan berdasarkan bayaran atau secara kontrak untuk aktiviti perkhidmatan'
	. ' pembalakan'),
	array('','A','Perikanan','03111','Perikanan komersil di laut dan perairan pantai',
	'5 Digit'),
	array('','A','Perikanan','03112','Pemungutan krustasia dan moluska laut'),
	array('','A','Perikanan','03113','Pengambilan haiwan akuatik : sea squirts, tunikat,'
	. ' landak laut'),
	array('','A','Perikanan','0311','Aktiviti atas vessel yang melibatkan penangkapan,'
	. ' pemprosesan dan pengawetan ikan'),
	array('','A','Perikanan','03115','Pengumpulan organisma perikanan dan hasil laut lain'
	. ' (tiram semulajadi, span, batu karang dan alga)'),
	array('','A','Perikanan','03119','Perikanan laut t.t.t.l.'),
	array('','A','Perikanan','03121','Perikanan komersil di darat'),
	array('','A','Perikanan','03122','Pengambilan krustasia dan moluska air tawar'),
	array('','A','Perikanan','03123','Pengambilan haiwan akuatik air tawar'),
	array('','A','Perikanan','03124','Pengumpulan flora dan fauna air tawar'),
	array('','A','Perikanan','03129','Perikanan ikan air tawar t.t.t.l.'),
	array('','A','Perikanan','03211','Ternakan ikan di laut'),
	array('','A','Perikanan','03212','Pengeluaran dwi-cangkerang spat (tiram, kupang), anak'
	. ' udang kara, anak udang dan benih ikan'),
	array('','A','Perikanan','03213','Penanaman rumpair merah dan rumpai laut lain yang'
	. ' boleh dimakan'),
	array('','A','Perikanan','03214','Pengkulturan krustasia, dwi- cangkerang, moluska'
	. ' dan haiwan akuatik lain di laut'),
	array('','A','Perikanan','03215','Aktiviti akuakultur air payau'),
	array('','A','Perikanan','0321','Aktiviti akuakultur di dalam tangki air atau'
	. ' takungan masin'),
	array('','A','Perikanan','03217','Operasi penetasan anak benih (laut)'),
	array('','A','Perikanan','03218','Operasi ladang ternakan cacing laut untuk makanan'
	. ' ikan'),
	array('','A','Perikanan','03219','Akuakultur laut t.t.t.l.'),
	array('','A','Perikanan','03221','Ternakan ikan air tawar'),
	array('','A','Perikanan','03222','Ternakan udang air tawar'),
	array('','A','Perikanan','03223','Pengkulturan krustasia, dwi-cangkerang, moluska dan'
	. ' haiwan akuatik lain di air tawar'),
	array('','A','Perikanan','03224','Operasi penetasan anak benih (air tawar)'),
	array('','A','Perikanan','03225','Penternakan katak'),
	array('','A','Perikanan','03229','Akuakultur air tawar t.t.t.l.'),
	array('','E','Bekalan Air; Pembetungan, Pengurusan Sisa & Aktiviti Pemulihan','36001',
	'Penulenan dan pengagihan air untuk tujuan bekalan air'),
	array('','E','Bekalan Air; Pembetungan, Pengurusan Sisa & Aktiviti Pemulihan','36002',
	'Penyahmasinan air laut atau bawah tanah untuk menghasilkan air sebagai kepentingan produk'
	. ' utama'),
	array('','E','Bekalan Air; Pembetungan, Pengurusan Sisa & Aktiviti Pemulihan','37000',
	'Pembetungan dan aktiviti-aktiviti yang seumpamanya'),
	array('','E','Bekalan Air; Pembetungan, Pengurusan Sisa & Aktiviti Pemulihan','38111',
	'Pengumpulan sisa pepejal yang tidak berbahaya (cth. sampah) di kawasan setempat'),
	array('','E','Bekalan Air; Pembetungan, Pengurusan Sisa & Aktiviti Pemulihan','38112',
	'Pengumpulan bahan kitar semula'),
	array('','E','Bekalan Air; Pembetungan, Pengurusan Sisa & Aktiviti Pemulihan','38113',
	'Pengumpulan sampah dalam tong sampah di kawasan awam'),
	array('','E','Bekalan Air; Pembetungan, Pengurusan Sisa & Aktiviti Pemulihan','38114',
	'Pengumpulan sisa pembinaan dan runtuhan'),
	array('','E','Bekalan Air; Pembetungan, Pengurusan Sisa & Aktiviti Pemulihan','38115',
	'Operasi stesen pemindahan pembuangan sisa tidak berbahaya'),
	array('','E','Bekalan Air; Pembetungan, Pengurusan Sisa & Aktiviti Pemulihan','38121',
	'Pengumpulan sisa berbahaya'),
	array('','E','Bekalan Air; Pembetungan, Pengurusan Sisa & Aktiviti Pemulihan','38122',
	'Operasi stesen pemindahan pembuangan bagi sisa berbahaya'),
	array('','E','Bekalan Air; Pembetungan, Pengurusan Sisa & Aktiviti Pemulihan','38210',
	'Rawatan dan pelupusan sisa tidak berbahaya'),
	array('','E','Bekalan Air; Pembetungan, Pengurusan Sisa & Aktiviti Pemulihan','38220',
	'Rawatan dan pelupusan sisa berbahaya'),
	array('','E','Bekalan Air; Pembetungan, Pengurusan Sisa & Aktiviti Pemulihan','38301',
	'Meremukkan secara mekanikal sisa logam'),
	array('','E','Bekalan Air; Pembetungan, Pengurusan Sisa & Aktiviti Pemulihan','38302',
	'Meleraikan peralatan automobil, komputer, televisyen dan peralatan lain untuk pemulihan'
	. ' bahan'),
	array('','E','Bekalan Air; Pembetungan, Pengurusan Sisa & Aktiviti Pemulihan','38303',
	'Memulih guna getah seperti tayar terpakai untuk menghasilkan bahan mentah sekunder'),
	array('','E','Bekalan Air; Pembetungan, Pengurusan Sisa & Aktiviti Pemulihan','38304',
	'Penggunaan semula produk getah'),
	array('','E','Bekalan Air; Pembetungan, Pengurusan Sisa & Aktiviti Pemulihan','38309',
	'Pemulihan bahan t.t.t.l.'),
	array('','E','Bekalan Air; Pembetungan, Pengurusan Sisa & Aktiviti Pemulihan','39000',
	'Aktiviti pemulihan dan lain-lain perkhidmatan pengurusan sisa'),
);
#--------------------------------------------------------------------------------------------------
/*KELUASAN TANAMAN Lampiran 23
MCPA|JENIS TANAMAN|"Yield(kg/ha):F1647RR=07"|"Yield(tan/ha):F1647RR=08"
*/
$data['luasTanamanLampiran23'] = array(
	array('','Mcpa','Jenis Tanaman','Yield(kg/ha)','F1647RR=07','Yield(tan/ha)','F1647RR=08'),
	array('','0113801001','Kucai (chinese chives)','Luas(kg/ha)','189,000','Luas(tan/ha)','189'),
	array('','0113204004','Labu Air','Luas(kg/ha)','23,000','Luas(tan/ha)','23'),
	array('','0113204005','Labu Manis','Luas(kg/ha)','24,000','Luas(tan/ha)','24'),
	array('','0113204003','Peria','Luas(kg/ha)','23,000','Luas(tan/ha)','23'),
	array('','0113204001','Petola','Luas(kg/ha)','22,000','Luas(tan/ha)','22'),
	array('','0113204002','Petola','Luas(kg/ha)','22,000','Luas(tan/ha)','22'),
	array('','0113102005','Chinese mustard(sawi hijau pahit)','Luas(kg/ha)','18,000',
	'Luas(tan/ha)','18'),
	array('','0113102006','Chinese white cabbage(sawi putih)','Luas(kg/ha)','18,000',
	'Luas(tan/ha)','18'),
	array('','0113102007','Leaf mustard(sawi bunga)','Luas(kg/ha)','18,000','Luas(tan/ha)','18'),
	array('','0113102008','Dwarf white mustard(sawi pendek)','Luas(kg/ha)','18,000',
	'Luas(tan/ha)','18'),
	array('','0113102009','Sawi kerinting','Luas(kg/ha)','18,000','Luas(tan/ha)','18'),
	array('','0113202001','Aubergines(egg-plants)','Luas(kg/ha)','23,000','Luas(tan/ha)','23'),
	array('','0113201001','Cucumbers and gherkins','Luas(kg/ha)','36,000','Luas(tan/ha)','36'),
	array('','0113809001','Ubi kayu,(Manioc/cassava/tapioca)','Luas(kg/ha)','31,500',
	'Luas(tan/ha)','31.5'),
	array('','0113808001','Sweet potatoes(keledek)','Luas(kg/ha)','23,000','Luas(tan/ha)','23'),
	array('','0128201001','Cili Merah','Luas(kg/ha)','24,000','Luas(tan/ha)','24'),
	array('','0113203001','Tomato','Luas(kg/ha)','49,500','Luas(tan/ha)','49.5'),
	array('','0113105002','Bayam(chinese spinach)','Luas(kg/ha)','15,000','Luas(tan/ha)','15'),
	array('','0113205001','Lady`s fingers(kacang bendi)','Luas(kg/ha)','20,000',
	'Luas(tan/ha)','20'),
	array('','0128201001','Cili Merah','Luas(kg/ha)','12,450','Luas(tan/ha)','12.45'),
	array('','0128401001','Halia Tua','Luas(kg/ha)','33,000','Luas(tan/ha)','33'),
	array('','0111102002','Jagung(sweet corn)','Luas(kg/ha)','30,000','Luas(tan/ha)','30'),
	array('','0111102001','Jagung(lain-lain jagung)','Luas(kg/ha)','30,000','Luas(tan/ha)','30'),
	array('','0111101001','Maize(corn), seed','Luas(kg/ha)','30,000','Luas(tan/ha)','30'),
	array('','0111201001','Kacang buncis','Luas(kg/ha)','14,000','Luas(tan/ha)','14'),
	array('','0111201002','Kacang panjang','Luas(kg/ha)','18,000','Luas(tan/ha)','18'),
	array('','0113102010','Chinese Kale(Kailan)','Luas(kg/ha)','15,000','Luas(tan/ha)','15'),
	array('','0113107001','Kangkong(water spinach)','Luas(kg/ha)','12,000','Luas(tan/ha)','12'),
	array('','0113102002','Round cabbages','Luas(kg/ha)','35,000','Luas(tan/ha)','35'),
	array('','0113102003','Other cabbages','Luas(kg/ha)','35,000','Luas(tan/ha)','35'),
	array('','0122201001','Mango','Luas(kg/ha)','17,500','Luas(tan/ha)','17.5'),
	array('','0122201002','Kuini','Luas(kg/ha)','17,500','Luas(tan/ha)','17.5'),
	array('','0122201003','Bacang(horse mango)','Luas(kg/ha)','17,500','Luas(tan/ha)','17.5'),
	array('','0122201004','Other Mangoes','Luas(kg/ha)','17,500','Luas(tan/ha)','17.5'),
	array('','0122904001','Manggis','Luas(kg/ha)','28,000','Luas(tan/ha)','28'),
	array('','0122701001','Nanas(Josapine, MD2, Moris & N36)*','Luas(kg/ha)','38,000',
	'Luas(tan/ha)','38'),
	array('','0122904003','Nangka','Luas(kg/ha)','33,000','Luas(tan/ha)','33'),
	array('','0122101003','Pisang berangan','Luas(kg/ha)','30,000','Luas(tan/ha)','30'),
	array('','0122101005','Other bananas','Luas(kg/ha)','30,000','Luas(tan/ha)','30'),
	array('','0122101004','Pisang embun','Luas(kg/ha)','30,000','Luas(tan/ha)','30'),
	array('','0122102001','Bananas, plantains','Luas(kg/ha)','30,000','Luas(tan/ha)','30'),
	array('','0122801001','Pitaya(Merah)','Luas(kg/ha)','30,000','Luas(tan/ha)','30'),
	array('','0122401001','Rambutan','Luas(kg/ha)','15,000','Luas(tan/ha)','15'),
	array('','0113302002','Rock Melon(Fertigasi) [SPH]','Luas(kg/ha)','28,000',
	'Luas(tan/ha)','28'),
	array('','0113301001','Tembikai','Luas(kg/ha)','25,000','Luas(tan/ha)','25'),
	array('','0113302001','Honeydew(tembikai susu)','Luas(kg/ha)','25,000','Luas(tan/ha)','25'),
	array('','0113302003','Other melons','Luas(kg/ha)','25,000','Luas(tan/ha)','25'),
	array('','0122501001','Belimbing','Luas(kg/ha)','48,000','Luas(tan/ha)','48'),
	array('','0122602001','Betik Solo','Luas(kg/ha)','46,000','Luas(tan/ha)','46'),
	array('','0122601001','Betik(Lain-lain)','Luas(kg/ha)','46,000','Luas(tan/ha)','46'),
	array('','0122904003','Cempedak','Luas(kg/ha)','48,000','Luas(tan/ha)','48'),
	array('','0122904010','Dokong','Luas(kg/ha)','17,000','Luas(tan/ha)','17'),
);//*/
#--------------------------------------------------------------------------------------------------
# LAMPIRAN 16 SENARAI UNIT KUANTITI DAN KOD 97
$data['unitKuantitiLampiran16'] = array(
	array('','Unit Kuantiti','Kod Unit Kuantiti'),
	Array('','Kilogram (Kg)','0 7',),
	Array('','Tonne/Metric Ton','0 8'),
	Array('','Joule (J)','1 6'),
	Array('','Watt (W)','1 7'),
	Array('','Gigawatt - Hour (Gwh)','1 8'),
	Array('','Kilowatt Hour (Kwh)','1 9'),
	Array('','Kilowatt (Kw)','2 0'),
	Array('','Horsepower (Hp)','2 1'),
	Array('','Pieces (Pcs)','2 2'),
	Array('','Number (No)','2 3'),
	Array('','Pair','2 5'),
	Array('','Reams','2 6'),
	Array('','Set','2 7'),
	Array('','Rolls','2 8'),
	Array('','Gross','2 9'),
	Array('','Carat','3 0'),
	array('','Kilopieces (K.pcs) (1,000 pieces)','3 1'),
	array('','Dozen (Doz)','3 2'),
	Array('','Cone','3 3'),
	Array('','Gram (G)','3 4'),
	Array('','Hectolitre','3 5'),
	Array('','1,000 Sticks','3 6'),
	Array('','1,000 Number','3 7'),
	Array('','Croy Ounze (Gold)','3 8'),
	Array('','Reels','4 1'),
	Array('','Litres (L)','4 2'),
	Array('','Metre (M)','4 3'),
	Array('','Kilometre (Km)','4 4'),
	array('','Sq. Metre Of 5 m.m','4 5'),
	array('','Cubic Metre (Cu.m)','4 6'),
	array('','Sq. Metre (Sq.m)','4 7'),
	array('','Bobbin','4 8'),
	array('','Rounds (for ammunition)','4 9'),
	array('','Drums','5 0'),
	array('','Column (for newspaper advertisement)','5 1'),
	array('','T.E.U. (Twenty Equivalent Unit, for truck containers)','5 2'),
	array('','Giga Joules (Gas)','5 3'),
	array('','Barrels','5 4'),
	array('','Mscf (Thousand Standard Cubic Feet)','5 5'),
	Array('','Unit Of Ten','5 6'),
	Array('','Unit Of 100 Metres','5 7'),
	Array('','Unit Of One Hundred','5 8'),
	Array('','Unit Of One Thousand','5 9'),
	Array('','Unit Of One Ringgit','6 0'),
	Array('','Unit','6 1'),
	Array('','Unit (Pack)','6 2'),
	Array('','No Unit Of Quantity (N.P.U.)','9 7'),
);//*/
#--------------------------------------------------------------------------------------------------
$data['sistemPertanianLampiran17'] = array(
	array('','Kod Jenis','Kod','Unit','Jenis Sistem - Lampiran 17'),
	array('','tanaman','16A','1','Fertigasi dengan Struktur Perlindungan Hujan'),
	array('','tanaman','16A','2','Fertigasi tanpa Struktur Perlindungan Hujan'),
	array('','tanaman','16A','3','Akuaponik'),
	array('','tanaman','16A','4','Hidroponik'),
	array('','tanaman','16A','5','Tradisional/Konvensional'),
	array('','tanaman','16A','9','Lain-lain'),
	array('','ternakan','16B','1','Fidlot'),
	array('','ternakan','16B','2','Padang ragut/ladang'),
	array('','ternakan','16B','3','Integrasi'),
	array('','ternakan','16B','4','Tradisional/lepas bebas'),
	array('','ternakan','16B','5','Kandang'),
	array('','ternakan','16B','6','Reban tertutup'),
	array('','ternakan','16B','7','Reban terbuka'),
	array('','ternakan','16B','8','Lain-lain'),
	array('','perikanan','16D','1','Kolam'),
	array('','perikanan','16D','2','Bekas lombong'),
	array('','perikanan','16D','3','Sangkar'),
	array('','perikanan','16D','4','Tangki simen'),
	array('','perikanan','16D','5','Kandang ikan'),
	array('','perikanan','16D','6','Tangki kanvas'),
	array('','perikanan','16D','8','Lain-lain'),
);//*/
#--------------------------------------------------------------------------------------------------
# Lampiran 18 - Jadual Potensi Hasil Tanaman Terpilih
# Sumber: Bahagian Hortikultur, DOA, MPOB
$data['potensiHasilTanamanTerpilihLampiran18'] = array(
	//array('','Jenis sayur','Hasil potensi(kg/ha)'),
	array('','Kucai (rumpun)','Hasil potensi(kg/ha)','189,000'),
	array('','Labu Air','Hasil potensi(kg/ha)','23,000'),
	array('','Labu Manis','Hasil potensi(kg/ha)','24,000'),
	array('','Peria','Hasil potensi(kg/ha)','23,000'),
	array('','Petola','Hasil potensi(kg/ha)','22,000'),
	array('','Sawi','Hasil potensi(kg/ha)','18,000'),
	array('','Terung','Hasil potensi(kg/ha)','23,000'),
	array('','Timun','Hasil potensi(kg/ha)','36,000'),
	array('','Ubi Kayu','Hasil potensi(kg/ha)','31,500'),
	array('','Ubi Keledek','Hasil potensi(kg/ha)','23,000'),
	array('','Cili Merah Fertigasi','Hasil potensi(kg/ha)','24,000'),
	array('','Tomato Fertigasi','Hasil potensi(kg/ha)','49,500'),
	array('','Bayam','Hasil potensi(kg/ha)','15,000'),
	array('','Bendi','Hasil potensi(kg/ha)','20,000'),
	array('','Cili Merah','Hasil potensi(kg/ha)','12,450'),
	array('','Halia Tua','Hasil potensi(kg/ha)','33,000'),
	array('','Jagung','Hasil potensi(kg/ha)','30,000'),
	array('','Kacang buncis','Hasil potensi(kg/ha)','14,000'),
	array('','Kacang panjang','Hasil potensi(kg/ha)','18,000'),
	array('','Kailan','Hasil potensi(kg/ha)','15,000'),
	array('','Kangkung','Hasil potensi(kg/ha)','12,000'),
	array('','Kobis','Hasil potensi(kg/ha)','35,000'),
	array('','Asparagus','Hasil potensi(kg/ha)','6,000'),
	array('','Mangga (Chok Anan)','Hasil potensi(kg/ha)','17,500'),
	array('','Mangga (Harumanis)','Hasil potensi(kg/ha)','4,500'),
	array('','Manggis','Hasil potensi(kg/ha)','28,000'),
	array('','Nanas (Josapine, MD2, Moris & N36)*','Hasil potensi(kg/ha)','38,000'),
	array('','Nangka','Hasil potensi(kg/ha)','33,000'),
	array('','Pisang (Berangan)','Hasil potensi(kg/ha)','30,000'),
	array('','Pisang (Tanduk/Lang)','Hasil potensi(kg/ha)','22,000'),
	array('','Pitaya (Merah)','Hasil potensi(kg/ha)','30,000'),
	array('','Rambutan','Hasil potensi(kg/ha)','15,000'),
	array('','Rock Melon (Fertigasi) [SPH]','Hasil potensi(kg/ha)','28,000'),
	array('','Tembikai','Hasil potensi(kg/ha)','25,000'),
	array('','Belimbing','Hasil potensi(kg/ha)','48,000'),
	array('','Betik (Sekaki)','Hasil potensi(kg/ha)','46,000'),
	array('','Cempedak','Hasil potensi(kg/ha)','48,000'),
	array('','Dokong','Hasil potensi(kg/ha)','17,000'),
	array('','Durian Belanda','Hasil potensi(kg/ha)','12,000'),
	array('','Durian (Klon)','Hasil potensi(kg/ha)','19,000'),
	array('','Durian (Kampong)','Hasil potensi(kg/ha)','10,000'),
	array('','Jambu Air','Hasil potensi(kg/ha)','32,000'),
	array('','Jambu Batu (Berbiji)','Hasil potensi(kg/ha)','50,000'),
	array('','Limau Bali','Hasil potensi(kg/ha)','10,000'),
	array('','Limau Madu/ Manis/ Langkat','Hasil potensi(kg/ha)','22,000'),
	array('','Getah','Hasil potensi(kg/ha)','3000'),
	array('','Kelapa Sawit','Hasil potensi(kg/ha)','23,000'),
);//*/
#--------------------------------------------------------------------------------------------------
# LAMPIRAN 19 - JULAT HARGA MINIMUM DAN MAKSIMUM – TANAMAN
$data['julatHargaTanamanLampiran19'] = array(
	//array('|Min(RM/Kg)|Max(RM/Kg)|Min(RM/Tonne)|Max(RM/Tonne)'),
	array('','0126101001','01262 - Kelapa Sawit (Estet)',
	'RM/Kg => Min : 400.00 | Max : 1,300.00','RM/Tonne => Min : 400,000 | Max : 1,300,000'),
	array('','0126201001','01262 - Kelapa Sawit (Kebun kecil)',
	'RM/Kg => Min : 400.00 | Max : 1,300.00','RM/Tonne => Min : 400,000 | Max : 1,300,000'),
	array('','0129101001','01291 - Getah (Estet)',
	'RM/Kg => Min : 546.00 | Max : 730.00','RM/Tonne => Min : 546,000 | Max : 730,000'),
	array('','0129201001','01292 - Getah (Kebun kecil)',
	'RM/Kg => Min : 546.00 | Max : 730.00','RM/Tonne => Min : 546,000 | Max : 730,000'),
	array('','0129101002','01291 - Rubber scrap and cup lump(Sekerap getah dan ketulan cawan)',
	'RM/Kg => Min : 450.00 | Max : 590.00','RM/Tonne => Min : 450,000 | Max : 590,000'),
	array('','0129201002','01292 - Rubber scrap and cup lump(Sekerap getah dan ketulan cawan)',
	'RM/Kg => Min : 450.00 | Max : 590.00','RM/Tonne => Min : 450,000 | Max : 590,000'),
	array('','0122301001','01223 - Durian',
	'RM/Kg => Min : 5.00 | Max : 70.00','RM/Tonne => Min : 5,000 | Max : 70,000'),
	array('','0122201004','01222 - Other Mangoes',
	'RM/Kg => Min : 20.00 | Max : 40.00','RM/Tonne => Min : 20,000 | Max : 40,000'),
	array('','0128201001','01282 - Chillies(cili)',
	'RM/Kg => Min : 1.00 | Max : 39.00','RM/Tonne => Min : 1,000 | Max : 39,000'),
	array('','0113302002','01133 - Rock Melon (Fertigasi)[SPH]',
	'RM/Kg => Min : 0.50 | Max : 35.00','RM/Tonne => Min : 500 | Max : 35,000'),
	array('','0113301001','01133 - Tembikai',
	'RM/Kg => Min : 0.50 | Max : 35.00','RM/Tonne => Min : 500 | Max : 35,000'),
	array('','0113302001','01133 - Honeydew (tembikai susu)',
	'RM/Kg => Min : 0.50 | Max : 35.00','RM/Tonne => Min : 500 | Max : 35,000'),
	array('','0113302003','01133 - Other melons',
	'RM/Kg => Min : 0.50 | Max : 35.00','RM/Tonne => Min : 500 | Max : 35,000'),
	array('','0122904011','01229 - Durian Belanda',
	'RM/Kg => Min : 3.00 | Max : 30.00','RM/Tonne => Min : 3,000 | Max : 30,000'),
	array('','0123101001','01231 - Limau Bali',
	'RM/Kg => Min : 3.00 | Max : 30.00','RM/Tonne => Min : 3,000 | Max : 30,000'),
	array('','0128907008','01289 - Petai',
	'RM/Kg => Min : 1.00 | Max : 30.00','RM/Tonne => Min : 1,000 | Max : 30,000'),
	array('','0113801001','01138 - Kucai (chinese chives)',
	'RM/Kg => Min : 0.50 | Max : 20.50','RM/Tonne => Min : 500 | Max : 20,500'),
	array('','0111102002','01111 - Jagung (sweet corn)',
	'RM/Kg => Min : 1.50 | Max : 20.00','RM/Tonne => Min : 1,500 | Max : 20,000'),
	array('','0111201001','01112 - Kacang buncis',
	'RM/Kg => Min : 1.00 | Max : 20.00','RM/Tonne => Min : 1,000 | Max : 20,000'),
	array('','0113102005','01131 - Chinese mustard (sawi hijau pahit)',
	'RM/Kg => Min : 0.50 | Max : 20.00','RM/Tonne => Min : 500 | Max : 20,000'),
	array('','0113102006','01131 - Chinese white cabbage(sawi putih)',
	'RM/Kg => Min : 0.50 | Max : 20.00','RM/Tonne => Min : 500 | Max : 20,000'),
	array('','0113102007','01131 - Leaf mustard (sawi bunga)',
	'RM/Kg => Min : 0.50 | Max : 20.00','RM/Tonne => Min : 500 | Max : 20,000'),
	array('','0113102008','01131 - Dwarf white mustard (sawi pendek)',
	'RM/Kg => Min : 0.50 | Max : 20.00','RM/Tonne => Min : 500 | Max : 20,000'),
	array('','0113102009','01131 - Sawi kerinting',
	'RM/Kg => Min : 0.50 | Max : 20.00','RM/Tonne => Min : 500 | Max : 20,000'),
	array('','0122904019','01229 - Jambu Air',
	'RM/Kg => Min : 2.00 | Max : 20.00','RM/Tonne => Min : 2,000 | Max : 20,000'),
	array('','0122904017','01229 - Jambu air madu (wax apple)',
	'RM/Kg => Min : 2.00 | Max : 20.00','RM/Tonne => Min : 2,000 | Max : 20,000'),
	array('','0124101001','01241 - Jambu Batu (Berbiji)',
	'RM/Kg => Min : 2.00 | Max : 20.00','RM/Tonne => Min : 2,000 | Max : 20,000'),
	array('','0113205001','01132 - Lady`s fingers (kacang bendi)',
	'RM/Kg => Min : 1.00 | Max : 19.00','RM/Tonne => Min : 1,000 | Max : 19,000'),
	array('','0111201002','01112 - Kacang panjang',
	'RM/Kg => Min : 1.00 | Max : 18.00','RM/Tonne => Min : 1,000 | Max : 18,000'),
	array('','0113105002','01131 - Bayam (chinese spinach)',
	'RM/Kg => Min : 0.50 | Max : 18.00','RM/Tonne => Min : 500 | Max : 18,000'),
	array('','0113204001','01132 - Angled loofah (Petola)',
	'RM/Kg => Min : 1.00 | Max : 16.50','RM/Tonne => Min : 1,000 | Max : 16,500'),
	array('','0113204002','01132 - Snake gourd (Petola ular)',
	'RM/Kg => Min : 1.00 | Max : 16.50','RM/Tonne => Min : 1,000 | Max : 16,500'),
	array('','0113202001','01132 - Aubergines (egg-plants)(terung)',
	'RM/Kg => Min : 0.50 | Max : 16.50','RM/Tonne => Min : 500 | Max : 16,500'),
	array('','0113203001','01132 - Tomato',
	'RM/Kg => Min : 0.50 | Max : 14.00','RM/Tonne => Min : 500 | Max : 14,000'),
	array('','0113107001','01131 - Kangkong (water spinach)',
	'RM/Kg => Min : 0.50 | Max : 13.00','RM/Tonne => Min : 500 | Max : 13,000'),
	array('','0128401001','01284 - Halia',
	'RM/Kg => Min : 8.00 | Max : 12.00','RM/Tonne => Min : 8,000 | Max : 12,000'),
	array('','0113102002','01131 - Round cabbages(kobis bulat)',
	'RM/Kg => Min : 1.00 | Max : 10.00','RM/Tonne => Min : 1,000 | Max : 10,000'),
	array('','0113102003','01131 - Other cabbages(kobis lain)',
	'RM/Kg => Min : 1.00 | Max : 10.00','RM/Tonne => Min : 1,000 | Max : 10,000'),
	array('','0122801001','01228 - Pitaya (Merah)',
	'RM/Kg => Min : 3.50 | Max : 10.00','RM/Tonne => Min : 3,500 | Max : 10,000'),
	array('','0122904001','01229 - Manggis',
	'RM/Kg => Min : 4.00 | Max : 10.00','RM/Tonne => Min : 4,000 | Max : 10,000'),
	array('','0122602001','01226 - Betik Solo',
	'RM/Kg => Min : 1.00 | Max : 9.00','RM/Tonne => Min : 1,000 | Max : 9,000'),
	array('','0122601001','01226 - Betik (Lain-lain)',
	'RM/Kg => Min : 1.00 | Max : 9.00','RM/Tonne => Min : 1,000 | Max : 9,000'),
	array('','0113102010','01131 - Chinese Kale (Kailan)',
	'RM/Kg => Min : 4.00 | Max : 8.00','RM/Tonne => Min : 4,000 | Max : 8,000'),
	array('','0122101003','01221 - Pisang berangan',
	'RM/Kg => Min : 0.50 | Max : 8.00','RM/Tonne => Min : 500 | Max : 8,000'),
	array('','0122101005','01221 - Other bananas',
	'RM/Kg => Min : 0.50 | Max : 8.00','RM/Tonne => Min : 500 | Max : 8,000'),
	array('','0122101004','01221 - Pisang embun',
	'RM/Kg => Min : 0.50 | Max : 8.00','RM/Tonne => Min : 500 | Max : 8,000'),
	array('','0122102001','01221 - Bananas, plantains',
	'RM/Kg => Min : 0.50 | Max : 8.00','RM/Tonne => Min : 500 | Max : 8,000'),
	array('','0128907007','01289 - Lengkuas (greater galangal)',
	'RM/Kg => Min : 2.50 | Max : 8.00','RM/Tonne => Min : 2,500 | Max : 8,000'),
	array('','0128907003','01289 - Tumeric(kunyit)',
	'RM/Kg => Min : 3.00 | Max : 8.00','RM/Tonne => Min : 3,000 | Max : 8,000'),
	array('','0122904003','01229 - Cempedak',
	'RM/Kg => Min : 2.00 | Max : 7.50','RM/Tonne => Min : 2,000 | Max : 7,500'),
	array('','0123903002','01239 - Limau Madu/Manis/Langkat',
	'RM/Kg => Min : 5.00 | Max : 7.50','RM/Tonne => Min : 5,000 | Max : 7,500'),
	array('','0113204003','01132 - Peria',
	'RM/Kg => Min : 3.00 | Max : 7.00','RM/Tonne => Min : 3,000 | Max : 7,000'),
	array('','0122401001','01224 - Rambutan',
	'RM/Kg => Min : 2.00 | Max : 7.00','RM/Tonne => Min : 2,000 | Max : 7,000'),
	array('','0122201001','01222 - Mango',
	'RM/Kg => Min : 1.50 | Max : 6.50','RM/Tonne => Min : 1,500 | Max : 6,500'),
	array('','0122201002','01222 - Kuini',
	'RM/Kg => Min : 1.50 | Max : 6.50','RM/Tonne => Min : 1,500 | Max : 6,500'),
	array('','0122904003','01229 - Nangka',
	'RM/Kg => Min : 1.50 | Max : 6.00','RM/Tonne => Min : 1,500 | Max : 6,000'),
	array('','0122904010','01229 - Dokong',
	'RM/Kg => Min : 2.00 | Max : 6.00','RM/Tonne => Min : 2,000 | Max : 6,000'),
	array('','0128907010','01289 - Serai (lemon grass)',
	'RM/Kg => Min : 2.00 | Max : 6.00','RM/Tonne => Min : 2,000 | Max : 6,000'),
	array('','0113204004','01132 - Labu Air',
	'RM/Kg => Min : 1.50 | Max : 5.00','RM/Tonne => Min : 1,500 | Max : 5,000'),
	array('','0128907006','01289 - Kantan (torch ginger)',
	'RM/Kg => Min : 0.50 | Max : 5.00','RM/Tonne => Min : 500 | Max : 5,000'),
	array('','0113204005','01132 - Labu Manis',
	'RM/Kg => Min : 1.50 | Max : 4.00','RM/Tonne => Min : 1,500 | Max : 4,000'),
	array('','0113201001','01132 - Cucumbers and gherkins(timun)',
	'RM/Kg => Min : 0.50 | Max : 4.00','RM/Tonne => Min : 500 | Max : 4,000'),
	array('','0113808001','01138 - Sweet potatoes (keledek)',
	'RM/Kg => Min : 1.50 | Max : 4.00','RM/Tonne => Min : 1,500 | Max : 4,000'),
	array('','0122501001','01225 - Belimbing',
	'RM/Kg => Min : 1.00 | Max : 4.00','RM/Tonne => Min : 1,000 | Max : 4,000'),
	array('','0122701001','01227 - Nanas(Josapine, MD2, Moris & N36)',
	'RM/Kg => Min : 1.50 | Max : 4.00','RM/Tonne => Min : 1,500 | Max : 4,000'),
	array('','0113809001','01138 - Ubi kayu(Manioc/cassava/tapioca)',
	'RM/Kg => Min : 1.00 | Max : 3.50',	'RM/Tonne => Min : 1,000 | Max : 3,500'),
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