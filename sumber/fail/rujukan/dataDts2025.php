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
	['','01xx','Johor'],
	['','0101','0101 - Johor Bahru'],
	['','0102','0102 - Kluang'],
	['','0103','0103 - Muar'],
	['','0104','0104 - Batu Pahat'],
	['','02xx','Kedah'],
	['','0201','0201 - Alor Setar'],
	['','0202','0202 - Sungai Petani'],
	['','0203','0203 - Langkawi'],
	['','03xx','Kelantan'],
	['','0301','0301 - Kota Bharu'],
	['','0302','0302 - Kuala Krai'],
	['','04xx','Melaka'],
	['','0401','0401 - Melaka'],
	['','05xx','Negeri Sembilan'],
	['','0501','0501 - Negeri Sembilan'],
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
$tajuk['nh-nm-1234'] = '#,kod,keterangan';
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
###################################################################################################
# dts 1/3
#--------------------------------------------------------------------------------------------------
# soalan 4 - jenis perjalanan
$tajuk['jenisJln'] = '#,kod,keterangan';
$data['jenisJln'] = [
	['','1','1 - Individu'],
	['','2','2 - Bersama keluarga'],
	['','3','3 - Bersama IR TK Lain'],
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
/*$tajuk['xxx'] = '#,kod,keterangan';
$data['xxx'] = [
	['','zzzzzz','zzzzzz','xxxxxx','xxxxx'],
	['','zzzzzz','zzzzzz','xxxxxx','xxxxx'],
];//*/
#--------------------------------------------------------------------------------------------------