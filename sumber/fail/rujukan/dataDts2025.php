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
	['','98','98 - Luar Negara'],
];//*/
#--------------------------------------------------------------------------------------------------
# soalan 6. Strata (ST) (1 digit) - Kod bagi strata adalah seperti berikut
$tajuk['strata'] = '#,kod,keterangan';
$data['strata'] = [
	['','SM = 0','Semenanjung Malaysia'],
	['','SM = 1','Metropolitan'],
	['','SM = 2','Bandar Besar'],
	['','SM = 3','Bandar Kecil'],
	['','SM = 4','Luar Bandar'],
	['','SS = 0','Sabah dan Sarawak'],
	['','SS = 1','Metropolitan'],
	['','SS = 2','Bandar Besar'],
	['','SS = 3','Bandar Kecil'],
	['','SS = 5','Luar Bandar 1'],
	['','SS = 6','Luar Bandar 2'],
	['','SS = 7','Luar Bandar 3'],
	['','SS = 8','Luar Bandar 4'],
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
	['','01xx','Johor'],
	['','0101','Johor Bahru'],
	['','0102','Kluang'],
	['','0103','Muar'],
	['','0104','Batu Pahat'],
	['','02xx','Kedah'],
	['','0201','Alor Setar'],
	['','0202','Sungai Petani'],
	['','0203','Langkawi'],
	['','03xx','Kelantan'],
	['','0301','Kota Bharu'],
	['','0302','Kuala Krai'],
	['','04xx','Melaka'],
	['','0401','Melaka'],
	['','05xx','Negeri Sembilan'],
	['','0501','Negeri Sembilan'],
	['','06xx','Pahang'],
	['','0601','Kuantan'],
	['','0602','Temerloh'],
	['','0603','Bentong'],
	['','07xx','Pulau Pinang'],
	['','0701','Georgetown'],
	['','0702','Seberang Perai'],
	['','08xx','Perak'],
	['','0801','Ipoh'],
	['','0802','Taiping'],
	['','0803','Teluk Intan'],
	['','0804','Sungkai'],
	['','09xx','Perlis'],
	['','0901','Perlis'],
	['','10xx','Selangor'],
	['','1001','Shah Alam'],
	['','1002','Gombak'],
	['','1003','Kajang'],
	['','11xx','Terengganu'],
	['','1101','Kuala Terengganu'],
	['','1102','Besut'],
	['','1103','Dungun'],
	['','12xx','Sabah'],
	['','1201','Kota Kinabalu'],
	['','1202','Tawau'],
	['','1203','Lahad Datu'],
	['','1204','Sandakan'],
	['','1205','Kota Marudu'],
	['','1206','Keningau'],
	['','13xx','Sarawak'],
	['','1301','Kuching'],
	['','1302','Sri Aman'],
	['','1303','Sarikei'],
	['','1304','Sibu'],
	['','1305','Bintulu'],
	['','1306','Miri'],
	['','1307','Limbang'],
	['','1308','Kapit'],
	['','14xx','W.P. Kuala Lumpur'],
	['','1401','W.P. Kuala Lumpur'],
	['','15xx','W.P. Labuan'],
	['','1501','W.P. Labuan'],
	['','16xx','W.P. Putrajaya'],
	['','1601','W.P. Putrajaya'],
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
	['','1','Ketua Isi Rumah'],
	['','2','Suami / Isteri'],
	['','3','Anak'],
	['','4','Ibu Bapa'],
	['','5','Lain-lain Ahli Keluarga'],
	['','6','Pembantu Rumah'],
	['','7','Orang lain yang tidak bersaudara'],
];//*/
#--------------------------------------------------------------------------------------------------
# 5. Kumpulan Etnik
$tajuk['etnik'] = '#,kod,keterangan';
$data['etnik'] = [
	['','01','Melayu'],
	['','02','Cina'],
	['','03','India'],
	['','04','Iban'],
	['','05','Bidayuh'],
	['','06','Melanau'],
	['','07','Kadazan / Dusun'],
	['','08','Bajau'],
	['','09','Murut'],
	['','10','Bumiputera Lain Semenanjung'],
	['','11','Bumiputera Lain Sabah / Sarawak'],
	['','12','Warganegara Lain-lain'],
	['','13','Bukan Warganegara'],
];# data baru akan datang//*/
#--------------------------------------------------------------------------------------------------
# 6. Sijil Tertinggi yang Diperoleh Di Sekolah, Maktab atau Universiti (SJ) (1 digit)
/*Catatan:
1. Sijil ikhtisas seperti ACCA, CA dll. hendaklah
disamakan dengan kod ‘4’ atau ‘5’ mengikut taraf
sijil tersebut.
2. Untuk ahli yang pernah bersekolah tetapi tidak
mempunyai sijil dan ahli yang sedang
bersekolah tetapi tidak mempunyai sebarang sijil
lagi (contohnya, orang yang masih belajar dalam
darjah 5) hendaklah dikodkan ‘7’.
3. Tiada Pendidikan Rasmi atau Pendidikan
Agama sahaja hendaklah dikodkan '6'.
*/
$tajuk['sijil'] = '#,kod,keterangan';
$data['sijil'] = [
	['','1','PMR / SRP'],
	['','2','SPM / SPM(V)'],
	['','3','STPM / HSC'],
	['','4','Diploma / Sijil'],
	['','5','Ijazah dan ke atas'],
	['','6','Tidak berkenaan'],
	['','7','Tiada Sijil'],
	['','8','Tidak diketahui'],
];
];#--------------------------------------------------------------------------------------------------
/*$tajuk['xxx'] = '#,kod,keterangan';
	['','zzzzzz','zzzzzz','xxxxxx','xxxxx'],
	['','zzzzzz','zzzzzz','xxxxxx','xxxxx'],
];# data baru akan datang//*/
#--------------------------------------------------------------------------------------------------
/*$tajuk['xxx'] = '#,kod,keterangan';
$data['xxx'] = [
	['','zzzzzz','zzzzzz','xxxxxx','xxxxx'],
	['','zzzzzz','zzzzzz','xxxxxx','xxxxx'],
];# data baru akan datang//*/
#--------------------------------------------------------------------------------------------------
/*$tajuk['xxx'] = '#,kod,keterangan';
$data['xxx'] = [
	['','zzzzzz','zzzzzz','xxxxxx','xxxxx'],
	['','zzzzzz','zzzzzz','xxxxxx','xxxxx'],
];# data baru akan datang//*/
#--------------------------------------------------------------------------------------------------
/*$tajuk['xxx'] = '#,kod,keterangan';
$data['xxx'] = [
	['','zzzzzz','zzzzzz','xxxxxx','xxxxx'],
	['','zzzzzz','zzzzzz','xxxxxx','xxxxx'],
];# data baru akan datang//*/
#--------------------------------------------------------------------------------------------------
/*$tajuk['xxx'] = '#,a,b,c,d';
$data['xxx'] = [
	['','zzzzzz','zzzzzz','xxxxxx','xxxxx'],
	['','zzzzzz','zzzzzz','xxxxxx','xxxxx'],
];# data baru akan datang//*/
#--------------------------------------------------------------------------------------------------