<?php
###################################################################################################
# simpan kod data DTS tahun 2025
###################################################################################################
#--------------------------------------------------------------------------------------------------
# soalan 2 - negeri
$tajuk['negeri'] = '#,kod,keterangan';
$data['negeri'] = [
	['','01','01 - Johor'],
	['','02','02 - Kedah'],
	['','03','03 - Kelantan'],
	['','04','04 - Melaka'],
	['','05','05 - Negeri Sembilan'],
	['','06','06 - Pahang'],
	['','07','07 - Pulau Pinang'],
	['','08','08 - Perak'],
	['','09','09 - Perlis'],
	['','10','10 - Selangor'],
	['','11','11 - Terengganu'],
	['','12','12 - Sabah'],
	['','13','13 - Sarawak'],
	['','14','14 - WP Kuala Lumpur'],
	['','15','15 - WP Labuan'],
	['','16','16 - WP Putrajaya'],
];//*/
#--------------------------------------------------------------------------------------------------
# soalan 6. Strata (ST) (1 digit) - Kod bagi strata adalah seperti berikut
$tajuk['strata'] = '#,kod,keterangan';
$data['strata'] = [
	['','SM = 0','Semenanjung Malaysia'],
	['','SM = 1','1 - Metropolitan'],
	['','SM = 2','2 - Bandar Besar'],
	['','SM = 3','3 - Bandar Kecil'],
	['','SM = 4','4 - Luar Bandar'],
	['','SS = 0','Sabah dan Sarawak'],
	['','SS = 1','1 - Metropolitan'],
	['','SS = 2','2 - Bandar Besar'],
	['','SS = 3','3 - Bandar Kecil'],
	['','SS = 5','5 - Luar Bandar 1'],
	['','SS = 6','6 - Luar Bandar 2'],
	['','SS = 7','7 - Luar Bandar 3'],
	['','SS = 8','8 - Luar Bandar 4'],
];//*/
#--------------------------------------------------------------------------------------------------
# soalan 10. Bulan (2 digit) 01 hingga 12| Catatan: Rujukan bulan semasa aktiviti pelancongan.
$tajuk['bulan'] = '#,kod,keterangan';
$data['bulan'] = [
	['','01','Januari / January'],
	['','02','Februari / February'],
	['','03','Mac / March'],
	['','04','April / April'],
	['','05','Mei / May'],
	['','06','Jun / June'],
	['','07','Julai / July'],
	['','08','Ogos / August'],
	['','09','September / September'],
	['','10','Oktober / October'],
	['','11','November / November'],
	['','12','Disember / December'],
];//*/
#--------------------------------------------------------------------------------------------------
#soalan 12. Kod PO Nota: Bagi tangkapan data (Prosesan Komputer), perlu mengisi 4 digit kod PO,
# iaitu : Dua digit pertama: Kod Negeri | Dua digit terakhir: Kod PO
# Contoh: Pejabat Operasi = Johor Bahru | Kod PO=0101
$tajuk['kodPO'] = '#,kod,keterangan';
$data['kodPO'] = [
	['','0100','01 - Johor'],
	['','0101','0101 - Johor Bahru'],
	['','0102','0102 - Kluang'],
	['','0103','0103 - Muar'],
	['','0104','0104 - Batu Pahat'],
	['','0200','02 - Kedah'],
	['','0201','0201 - Alor Setar'],
	['','0202','0202 - Sungai Petani'],
	['','0203','0203 - Langkawi'],
	['','0300','03 - Kelantan'],
	['','0301','0301 - Kota Bharu'],
	['','0302','0302 - Kuala Krai'],
	['','0400','04 - Melaka'],
	['','0401','0401 - Melaka'],
	['','0500','05 - Negeri Sembilan'],
	['','0501','0501 - Negeri Sembilan'],
	['','0600','06 - Pahang'],
	['','0601','0601 - Kuantan'],
	['','0602','0602 - Temerloh'],
	['','0603','0603 - Bentong'],
	['','0700','07 - Pulau Pinang'],
	['','0701','0701 - Georgetown'],
	['','0702','0702 - Seberang Perai'],
	['','0800','08 - Perak'],
	['','0801','0801 - Ipoh'],
	['','0802','0802 - Taiping'],
	['','0803','0803 - Teluk Intan'],
	['','0804','0804 - Sungkai'],
	['','0900','09 - Perlis'],
	['','0901','0901 - Perlis'],
	['','1000','10 - Selangor'],
	['','1001','1001 - Shah Alam'],
	['','1002','1002 - Gombak'],
	['','1003','1003 - Kajang'],
	['','1100','11 - Terengganu'],
	['','1101','1101 - Kuala Terengganu'],
	['','1102','1102 - Besut'],
	['','1103','1103 - Dungun'],
	['','1200','12 - Sabah'],
	['','1201','1201 - Kota Kinabalu'],
	['','1202','1202 - Tawau'],
	['','1203','1203 - Lahad Datu'],
	['','1204','1204 - Sandakan'],
	['','1205','1205 - Kota Marudu'],
	['','1206','1206 - Keningau'],
	['','1300','13 - Sarawak'],
	['','1301','1301 - Kuching'],
	['','1302','1302 - Sri Aman'],
	['','1303','1303 - Sarikei'],
	['','1304','1304 - Sibu'],
	['','1305','1305 - Bintulu'],
	['','1306','1306 - Miri'],
	['','1307','1307 - Limbang'],
	['','1308','1308 - Kapit'],
	['','1400','14 - W.P. Kuala Lumpur'],
	['','1401','1401 - W.P. Kuala Lumpur'],
	['','1500','15 - W.P. Labuan'],
	['','1501','1501 - W.P. Labuan'],
	['','1600','16 - W.P. Putrajaya'],
	['','1601','1601 - W.P. Putrajaya'],
];//*/
#--------------------------------------------------------------------------------------------------
$tajuk['respon'] = '#,kod,keterangan';
$data['respon'] = [
	['','01','01 - Selesai'],
	['','02','02 - TK Kosong'],
	['','03','03 - Tiada orang di rumah'],
	['','04','04 - Rumah dalam pembinaan'],
	['','05','05 - Bukan TK/TK Institusi'],
	['','06','06 - TK Telah Roboh/TK Rumah Usang'],
	['','07','07 - Tidak Layak//Persinggahan(TKP)'],
	['','08','08 - Enggan Bekerjasama'],
	['','09','09 - Lain-lain'],
	['','00','00 - Lain-Lain Didiami'],
];//*/
#--------------------------------------------------------------------------------------------------
###################################################################################################
# dts 1/2
#--------------------------------------------------------------------------------------------------
#soalan 1. Perhubungan Dengan Ketua Isi Rumah (PK IS) (1 digit)
$tajuk['pkis'] = '#,kod,keterangan';
$data['pkis'] = [
	['','1','1 - Ketua Isi Rumah'],
	['','2','2 - Suami / Isteri'],
	['','3','3 - Anak'],
	['','4','4 - Ibu Bapa'],
	['','5','5 - Lain-lain Ahli Keluarga'],
	['','6','6 - Pembantu Rumah'],
	['','7','7 - Orang lain yang tidak bersaudara'],
];//*/
#--------------------------------------------------------------------------------------------------
# 5. Kumpulan Etnik
$tajuk['etnik'] = '#,kod,keterangan';
$data['etnik'] = [
	['','01','01 - Melayu'],
	['','02','02 - Cina'],
	['','03','03 - India'],
	['','04','04 - Iban'],
	['','05','05 - Bidayuh'],
	['','06','06 - Melanau'],
	['','07','07 - Kadazan / Dusun'],
	['','08','08 - Bajau'],
	['','09','09 - Murut'],
	['','10','10 - Bumiputera Lain Semenanjung'],
	['','11','11 - Bumiputera Lain Sabah / Sarawak'],
	['','12','12 - Warganegara Lain-lain'],
	['','13','13 - Bukan Warganegara'],
];# data baru akan datang//*/
#--------------------------------------------------------------------------------------------------
# 8. Sijil Tertinggi yang Diperoleh Di Sekolah, Maktab atau Universiti (SJ) (1 digit)
/*Catatan:
1. Sijil ikhtisas seperti ACCA, CA dll. hendaklah disamakan dengan kod 4 atau 5 mengikut taraf
sijil tersebut.
2. Untuk ahli yang pernah bersekolah tetapi tidak mempunyai sijil dan ahli yang sedang
bersekolah tetapi tidak mempunyai sebarang sijil lagi (contohnya, orang yang masih belajar dalam
darjah 5) hendaklah dikodkan 7.
3. Tiada Pendidikan Rasmi atau Pendidikan Agama sahaja hendaklah dikodkan 6.
*/
$tajuk['sijil'] = '#,kod,keterangan';
$data['sijil'] = [
	['','1','1 - PMR / SRP'],
	['','2','2 - SPM / SPM(V)'],
	['','3','3 - STPM / HSC'],
	['','4','4 - Diploma / Sijil'],
	['','5','5 - Ijazah dan ke atas'],
	['','6','6 - Tidak berkenaan'],
	['','7','7 - Tiada Sijil'],
	['','8','8 - Tidak diketahui'],
	['','x1','x1 - Sijil ikhtisas seperti ACCA, CA dll. hendaklah disamakan dengan kod=4 atau 5'
	. ' mengikut taraf sijil tersebut.'],
	['','x2','x2 - Untuk ahli yang pernah bersekolah tetapi tidak mempunyai sijil dan ahli yang'
	. ' sedang bersekolah tetapi tidak mempunyai sebarang sijil lagi (contohnya, orang yang'
	. ' masih belajar dalam darjah 5) hendaklah kod=7'],
	['','x3','x3 - Tiada Pendidikan Rasmi atau Pendidikan Agama sahaja hendaklah kod=6'],
];
#--------------------------------------------------------------------------------------------------
# Soalan 10a : perjalananDomestik
$tajuk['jlnDomestik'] = '#,kod,keterangan';
$data['jlnDomestik'] = [
	['','1','1 - Perjalanan harian'],
	['','2','2 - Perjalanan Bermalam'],
	['','4','4 - Perjalanan harian &amp; bermalam'],
	['','0','0 - Tiada perjalanan domestik'],
];//*/
#--------------------------------------------------------------------------------------------------
# Soalan 10b : perjalananLuarNegara
$tajuk['jlnLuarNegara'] = '#,kod,keterangan';
$data['jlnLuarNegara'] = [
	['','3','3 - Ya'],
	['','0','0 - Tidak'],
];//*/
#--------------------------------------------------------------------------------------------------
# Soalan 11 : pekerjaanAIR
$tajuk['kerjaAIR'] = '#,kod,keterangan';
$data['kerjaAIR'] = [
	['','1','1 - Pengurus'],
	['','2','2 - Profesional'],
	['','3','3 - Juruteknik &amp; Profesional Bersekutu'],
	['','4','4 - Pekerja Sokongan Perkeranian'],
	['','5','5 - Pekerja Perkhidmatan dan Jualan'],
	['','6','6 - Pekerja Mahir Pertanian, Perhutanan dan Perikanan'],
	['','7','7 - Pekerja Kemahiran dan Pekerja Pertukangan yang Berkaitan'],
	['','8','8 - Operator loji dan mesin dan pemasangan'],
	['','9','9 - Pekerja Asas'],
	['','10','10 - Suri rumah'],
	['','11','11 - Pelajar'],
	['','12','12 - Pesara'],
	['','13','13 - Tidak bekerja'],
	['','0','0 - Tidak berkaitan'],
];//*/
#--------------------------------------------------------------------------------------------------
# Soalan 12 : pendapatanAIR
$tajuk['pendapatanAIR'] = '#,kod,keterangan';
$data['pendapatanAIR'] = [
	['','0','0 - Tidak berkenaan'],
	['','1','1 - &lt;= 1,000'],
	['','2','2 - 1,001 - 2,000'],
	['','3','3 - 2,001 - 3,000'],
	['','4','4 - 3,001 - 4,000'],
	['','5','5 - 4,001 - 5,000'],
	['','6','6 - 5,001 - 10,000'],
	['','7','7 - &gt; 10,000'],
];//*/
#--------------------------------------------------------------------------------------------------
# soalan 13/14/15//16/17/18/19/20 - perjalanan harian dan bermalam
# NH - Negeri Harian   NM - Negeri Malam
$tajuk['negeriHariMlm'] = '#,kod,keterangan';
$data['negeriHariMlm'] = [
	['','01','01 - Johor'],
	['','02','02 - Kedah'],
	['','03','03 - Kelantan'],
	['','04','04 - Melaka'],
	['','05','05 - Negeri Sembilan'],
	['','06','06 - Pahang'],
	['','07','07 - Pulau Pinang'],
	['','08','08 - Perak'],
	['','09','09 - Perlis'],
	['','10','10 - Selangor'],
	['','11','11 - Terengganu'],
	['','12','12 - Sabah'],
	['','13','13 - Sarawak'],
	['','14','14 - WP Kuala Lumpur'],
	['','15','15 - WP Labuan'],
	['','16','16 - WP Putrajaya'],
];//*/
#--------------------------------------------------------------------------------------------------
###################################################################################################
# dts 1/3
#--------------------------------------------------------------------------------------------------
# soalan 4 - jenis perjalanan
$tajuk['S4jenisJln'] = '#,kod,keterangan';
$data['S4jenisJln'] = [
	['','1','1 - Individu'],
	['','2','2 - Bersama keluarga'],
	['','3','3 - Bersama IR TK Lain'],
];//*/
#--------------------------------------------------------------------------------------------------
# soalan 7 - mod pengangkutan
$tajuk['S7modAngkut'] = '#,kod,keterangan';
$data['S7modAngkut'] = [
	['','1','1 - Udara'],
	['','2','2 - Air'],
	['','3','3 - Kenderaan persendirian'],
	['','4','4 - Teksi'],
	['','5','5 - E-hailing'],
	['','6','6 - Kenderaan sewa'],
	['','7','7 - Bas'],
	['','8','8 - Keretapi'],
	['','9','9 - Lain-lain pengangkutan darat'],
	['','10','10 - Lain-lain kenderaan persendirian (tidak menggunakan petrol)/ Berjalan kaki'],
];//*/
#--------------------------------------------------------------------------------------------------
# soalan 8 - jenis penginapan
$tajuk['S8jenisPenginapan'] = '#,kod,keterangan';
$data['S8jenisPenginapan'] = [
	['','1','1 - Hotel / Resort'],
	['','2','2 - Motel'],
	['','3','3 - Hotel apartmen'],
	['','4','4 - Chalet'],
	['','5','5 - Rumah rehat'],
	['','6','6 - Homestay'],
	['','7','7 - Penginapan lain (bed and breakfast unit, asrama, tapak perkhemahan, dll.)'],
	['','8','8 - Penginapan (rumah ibu bapa / saudara-mara / rakan / rumah persinggahan)'],
];//*/
#--------------------------------------------------------------------------------------------------
# soalan 9 - dapat maklumat
$tajuk['S9dptInfo'] = '#,kod,keterangan';
$data['S9dptInfo'] = [
	['','1','1 - Agensi pelancongan'],
	['','2','2 - Internet'],
	['','3','3 - Akhbar &amp; majalah'],
	['','4','4 - Brosor pelancongan'],
	['','5','5 - Radio'],
	['','6','6 - Karnival pelancongan'],
	['','7','7 - Keluarga &amp; rakan'],
	['','8','8 - Pusat informasi pelancongan'],
	['','9','9 - Televisyen'],
	['','10','10 - Lain-lain'],
	['','11','11 - Tidak berkenaan'],
];//*/
#--------------------------------------------------------------------------------------------------
# soalan 10. Kaedah tempahan penginapan
$tajuk['S10tempahan'] = '#,kod,keterangan';
$data['S10tempahan'] = [
	['','1','1 - Internet - Laman Web hotel '],
	['','2','2 - Internet - Airbnb'],
	['','3','3 - Internet - Trivago, Agoda, Booking.com dll'],
	['','4','4 - Agensi pelancongan '],
	['','5','5 - Tempahan secara manual (telefon, walk-in, emel dll)'],
	['','6','6 - Tempahan secara pakej oleh organisasi (majikan, persatuan dll)'],
	['','7','7 - Tidak berkenaan'],
];//*/
#--------------------------------------------------------------------------------------------------
# soalan 11. Apakah tujuan utama perjalanan anda?
$tajuk['S11tujuanPerjalanan'] = '#,kod,keterangan';
$data['S11tujuanPerjalanan'] = [
	['','1','1 - Menghantar / Melawat rakan &amp; saudara'],
	['','2','2 - Percutian'],
	['','3','3 - Mesyuarat, Persidangan &amp; Pameran'],
	['','4','4 - Amal ibadat'],
	['','5','5 - Melawat rumah ibadat (cth.: masjid, kuil, gereja)'],
	['','6','6 - Hiburan / menghadiri acara khas - (cth.: festival, persembahan, konsert &amp;'
	. ' konvokesyen dll.)'],
	['','7','7 - Sukan &amp; Rekreasi'],
	['','8','8 - Membeli belah'],
	['','9','9 - Perniagaan'],
	['','10','10 - Pendidikan (cth.: lawatan lapangan, kursus jangka pendek dll.)'],
	['','11','11 - Rawatan perubatan'],
	['','12','12 - Kesihatan (cth.: spa, rawatan kecantikan dll.)'],
	['','13','13 - Perjalanan insentif'],
	['','14','14 - Makan-makan'],
	['','15','15 - Lain-lain (nyatakan)'],
];//*/
#--------------------------------------------------------------------------------------------------
# soalan 12. Apakah aktiviti utama anda lakukan bagi setiap perjalanan?
$tajuk['S12xtvtUtama'] = '#,kod,keterangan,catatan,aktiviti';
$data['S12xtvtUtama'] = [
	['','01','01 - Aktiviti pantai / laut','Semua kegiatan yang dilakukan di persisiran pantai,'
	. ' misalnya berjemur di pantai, bermain bola tampar pantai dan jet ski. Tidak termasuk'
	. ' aktiviti berkelah, selam scuba dan memancing.','luar/alam semulajadi'],
	['','02','02 - Aktiviti sungai / air terjun / tasik','Aktiviti seperti bersampan, berkayak,'
	. '  berenang dan lain-lain yang berkaitan. Tidak termasuk berkelah dan memancing.',
	'luar/alam semulajadi'],
	['','03','03 - Memancing','Memancing yang dilakukan di sungai, laut dan tasik sama ada berbayar'
	. ' atau percuma. Termasuk juga aktiviti mencandat sotong.','luar/alam semulajadi'],
	['','04','04 - Sukan','Kegiatan-kegiatan yang berkaitan dengan aktiviti sukan seperti menyertai'
	. ' atau menyaksikan acara sukan, misalnya acara padang. Kod ini termasuk aktiviti renang dan'
	. ' sukan akuatik yang diadakan di kolam renang. Tidak termasuk sukan golf.',
	'luar/alam semulajadi'],
	['','05','05 - Berkelah','Aktiviti bersuka-suka dan berjamu beramai-ramai di luar rumah seperti'
	. ' di kawasan rekreasi. Misalnya berkelah di tepi pantai, taman rekreasi atau tempat'
	. ' perkelahan.','luar/alam semulajadi'],
	['','06','06 - Aktiviti mendaki','Aktiviti memanjat dan mendaki, umpamanya mendaki Gunung'
	. ' Kinabalu, Gunung Tahan,Bukit Broga dan sebagainya.','luar/alam semulajadi'],
	['','07','07 - Taman haiwan/taman safari(cth:Zoo,taman burung,taman buaya)','Lawatan ke'
	. ' taman-taman haiwan/ taman safari dan taman burung. Misalnya zoo, taman buaya, taman safari,'
	. ' taman rusa dan lain-lain.','luar/alam semulajadi'],
	['','08','08 - Melawat taman hiburan/taman tema','Taman hiburan bermaksud tempat bersuka ria'
	. ' dan terdapat berbagai jenis permainan. Sesetengah taman hiburan dilengkapi dengan tempat'
	. ' menari, meluncur ais dan sebagainya. Taman tema biasanya dilengkapi dengan alatan'
	. ' permainan outdoor game dan indoor game. Contohnya Sunway Lagoon, Gambang Water Park,'
	. ' Genting Theme Park dan Taman Air A’Famosa.','luar/alam semulajadi'],
	['','09','09 - Melawat taman negara/taman negeri/taman hidupan liar','Ia adalah taman yang'
	. ' diwartakan oleh pihak kerajaan. Taman negara dan taman negeri biasanya adalah hutan'
	. ' simpan yang dipelihara oleh Jabatan Perhutanan seperti Taman Negara Endau Rompin dan'
	. ' Taman Negara Niah. Taman hidupan liar, taman pemuliharaan (sanctuary) atau tempat'
	. ' perlindungan selalunya dipelihara oleh Jabatan Perhilitan dan Hidupan Liar di habitat'
	. ' semulajadi dan berfungsi untuk menempatkan haiwan-haiwan yang semakin pupus seperti'
	. ' Taman Orang Utan Sepilok dan Pusat Pemuliharaan Tuntung Bota.','luar/alam semulajadi'],
	['','10','10 - Menikmati pemandangan dari menara/tempat tinggi(cth:Bukit Bendera,MenaraKl)',
	'Aktiviti menikmati keindahan pemandangan dari menara seperti Menara Kuala Lumpur atau'
	. ' Menara Petronas. Termasuk juga menikmati pemandangan dari Bukit Bendera & sebagainya.',
	'luar/alam semulajadi'],
	['','11','11 - Ekspedisi','Aktiviti kembara menjelajah ke sesuatu tempat untuk mengenali'
	. ' dan mempelajari keindahan budaya setempat.','luar/alam semulajadi'],
	['','12','12 - Belayar','Aktiviti pelayaran seperti menyertai kelab layar, menaiki kapal,'
	. ' misalnya Tasik Cruise Putrajaya, Mines Cruise dan sebagainya.','luar/alam semulajadi'],
	['','13','13 - Golf','Aktiviti yang khusus melibatkan kegiatan berkaitan golf.',
	'luar/alam semulajadi'],
	['','14','14 - Selam skuba','Aktiviti menyelam di dasar laut untuk menikmati keistimewaan'
	. ' hidupan di bawah permukaan laut.','luar/alam semulajadi'],
	['','21','21 - Menghadiri aktiviti kesenian atau warisan / pesta / pameran seni / majlis'
	. ' kebudayaan (cth.: konsert, Citrawarna atau lain-lain persembahan kesenian)','Aktiviti'
	. ' kesenian dan warisan seperti menghadiri konsert atau lain-lain persembahan seni seperti'
	. ' persembahan nyanyian, tarian dan teater.','kesenian/warisan/pesta/tarikan pelancong'],
	['','22','22 - Melawat muzium / galeri seni','Muzium adalah bangunan tempat menyimpan,'
	. ' memelihara, mengkaji atau mempamerkan objek-objek yang mempunyai nilai sejarah, seni,'
	. ' saintifik dan sebagainya. <br>Galeri pula adalah sebuah bangunan atau bilik tempat'
	. ' pameran karya-karya seni dan sebagainya. Muzium atau geleri termasuk kepunyaan kerajaan'
	. ' dan swasta. Contoh: Muzium Negara dan Balai Seni Lukis Negara.',
	'kesenian/warisan/pesta/tarikan pelancong'],
	['','23','23 - Melawat bangunan bersejarah/warisan/tapak bersejarah/monumen','Bangunan'
	. ' bersejarah/ warisan/ tapak bersejarah/ monumen adalah berbeza dengan muzium kerana'
	. ' muzium adalah tempat menyimpan barang bersejarah manakala bangunan bersejarah adalah'
	. ' bangunan yang mengandungi kesan tinggalan sejarah. Contoh: Tapak Bersejarah Pasir Salak,'
	. ' Bangunan Sultan Ibrahim.','kesenian/warisan/pesta/tarikan pelancong'],
	['','24','24 - Melawat industry tarikan pelancong(cth:kilang piuter/batik,menganyam bakul)',
	'Lawatan ke pusat industri tarikan pelancong seperti kilang batik, kilang piuter, pusat kraf'
	. ' tangan, kilang kerepek, kilang coklat.','kesenian/warisan/pesta/tarikan pelancong'],
	['','41','41 - Melawat saudara mara &amp; rakan','Mengunjungi rakan-rakan dan saudara sama ada'
	. ' di rumah mereka atau pun melawat mereka di hospital. Ini termasuk menghadiri acara kenduri,'
	. ' majlis perkahwinan dan lain-lain majlis yang diadakan sama ada di rumah atau pun'
	. ' tempat-tempat lain seperti dewan.','sosial'],
	['','42','42 - Makan di luar/restoran','Makan di luar seperti di gerai, kedai makan, restoran'
	. ' atau hotel.','sosial'],
	['','43','43 - Wayang gambar','Menonton wayang gambar sama ada di pawagam atau di cineplex,'
	. ' iaitu bilik kecil yang disediakan skrin besar yang mana banyak terdapat di pusat membeli'
	. ' belah dewasa ini.','sosial'],
	['','44','44 - Kelab,pub,disko,karaoke dll','Mengunjungi pusat hiburan seperti kelab, pub,'
	. ' disko, karoke dan lain-lain.','sosial'],
	['','45','45 - Perjudian/Kasino','Tempat perjudian seperti di Genting Highland Casino.',
	'sosial'],
	['','46','46 - Berehat &amp; bersiar-siar','Merehatkan diri dan bersiar-siar.','sosial'],
	['','47','47 - Mendapat rawatan perubatan','Mendapat rawatan perubatan secara klinikal'
	. ' moden atau perubatan tradisional dan alternatif.','sosial'],
	['','48','48 - Kesihatan/spa','Aktiviti yang berkaitan kesihatan selain rawatan perubatan'
	. ' seperti mendapatkan rawatan kecantikan di pusat spa atau sauna.','sosial'],
	['','61','61 - Membeli-belah','Aktiviti membeli barangan/ perkhidmatan di pusat-pusat beli'
	. ' belah, kedai atau pasaraya.','lain-lain'],
	['','62','62 - Perniagaan','Aktiviti yang berkaitan dengan urusan perniagaan. Misalnya'
	. ' perbincangan tentang perniagaan, meninjau potensi dan barangan perniagaan.','lain-lain'],
	['','63','63 - Pendidikan/kursus','Semua aktiviti yang terlibat dengan pendidikan seperti'
	. ' menghadiri sesuatu sesi pendidikan seperti mendengar ceramah agama dan motivasi.',
	'lain-lain'],
	['','64','64 - Temuduga','Aktiviti perjalanan responden bagi menghadiri temuduga pekerjaan'
	. ' atau lain-lain temuduga.','lain-lain'],
	['','65','65 - Persidangan/seminar/mesyuarat/pameran','Aktiviti ini adalah sama ada'
	. ' menghadiri, menganjur atau mengurus konvensyen/ seminar/mesyuarat/ pameran.','lain-lain'],
	['','66','66 - Amal ibadat','Aktiviti yang berkaitan dengan amal ibadat/aktiviti keagamaan.'
	. ' Contohnya mengerjakan haji dan umrah bagi umat Islam dan pergi ke Batu Caves untuk'
	. ' perayaan Thaipusam bagi penganut Hindu.','lain-lain'],
	['','67','67 - Melawat rumah ibadat(cth: masjid,kuil,gereja)','Aktiviti ini termasuk melawat'
	. ' masjid, tokong, kuil, gereja atau lain-lain rumah ibadat. Misalnya melawat Masjid Putra'
	. ' di Putrajaya dan Kek Lok Si di Pulau Penang. Melawat rumah ibadat tidak semestinya'
	. ' melakukan amal ibadat.','lain-lain'],
	['','68','68 - Acara khusus(cth:konvokesyen)','Menghadiri acara khusus umpamanya acara'
	. ' konvokesyen, acara berbuka puasa dan acara penganugerahan pingat.','lain-lain'],
	['','99','99 - Lain-lain(Nyatakan)','Lain-lain aktiviti yang tidak dikelaskan di'
	. ' mana-mana kod.','lain-lain'],
];//*/
#--------------------------------------------------------------------------------------------------
# 15. Apakah sebab utama tidak melakukan perjalanan (pada bulan rujukan)?
$tajuk['S15xLakuJalan'] = '#,kod,keterangan';
$data['S15xLakuJalan'] = [
	['','1','1 - Tiada kemahuan untuk melakukan perjalanan'],
	['','2','2 - Tidak mampu dari segi kewangan'],
	['','3','3 - Tiada tempat untuk dilawati'],
	['','4','4 - Tiada kesempatan/sibuk'],
	['','5','5 - Telah membuat perjalanan kurang dari 50km/kurang dari 4 jam'],
	['','6','6 - Cuaca tidak mengizinkan'],
	['','7','7 - Lain-lain'],
];//*/
#--------------------------------------------------------------------------------------------------
/*$tajuk['xxx'] = '#,kod,keterangan';
$data['xxx'] = [
	['','zzzzzz','zzzzzz','xxxxxx','xxxxx'],
	['','zzzzzz','zzzzzz','xxxxxx','xxxxx'],
];//*/
#--------------------------------------------------------------------------------------------------
/*$tajuk['xxx'] = '#,kod,keterangan';
$data['xxx'] = [
	['','zzzzzz','zzzzzz','xxxxxx','xxxxx'],
	['','zzzzzz','zzzzzz','xxxxxx','xxxxx'],
];//*/
#--------------------------------------------------------------------------------------------------