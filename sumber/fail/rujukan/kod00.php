<?php
#--------------------------------------------------------------------------------------------------
//<select id="respon" name="respon" class="chzn-select" style="width:250px;">
$data['respon'] = array(
	array('','01','01 - Selesai'),
	array('','02','02 - Kosong'),
	array('','03','03 - Tiada orang di rumah'),
	array('','04','04 - Rumah  sedang dalam pembinaan'),
	array('','05','05 - Bukan TK/TK Institusi'),
	array('','06','06 - Telah Roboh/Rumah Usang'),
	array('','07','07 - Tidak Layak'),
	array('','08','08 - Enggan Bekerjasama'),
	array('','09','09 - Lain-lain'),
	array('','00','00 - Lain-Lain Didiami'),
);
#--------------------------------------------------------------------------------------------------
$data['responEko'] = array(
	array('','11','11 - Borang Lengkap'),
	array('','31','31 - Tidak menjalankan operasi'),
	array('','40','40 - Telah tutup'),
	array('','60','60 - Pendua'),
	array('','13','13 - Enggan bekerjasama'),
	array('','14','14 - Diliputi di bawah syarikat (cover under)'),
	array('','21','21 - Alamat tidak dapat dikesan'),
	array('','22','22 - Tidak terdapat pertubuhan di alamat yang diberi'),
	array('','23','23 - Berpindah ke alamat yang tidak dapat diketahui'),
	array('','32','32 - Under receivership/ Syarikat di bawah tanggungan'),
	array('','71','71 - Berjanji untuk menghantar laporan'),
	array('','12','12 - Tidak menjalankan perusahaan pada tempoh rujukan tetapi beroperasi pada tempoh penyiasatan'),
	array('','72','72 - Pemilik atau pengurus tiada'),
	array('','73','73 - Akaun belum selesai'),
	array('','74','74 - Berpindah ke alamat lain di Negeri/PO sama'),
	array('','75','75 - Berpindah ke Negeri/PO lain'),
	array('','76','76 - Dalam proses lengkap'),
	array('','77','77 - Lain-lain keputusan'),
	array('','50','50 - Salah penyiasatan'),
	array('','15','15 - Luar liputan industri tetapi masih dalam penyiasatan yang sama'),
	array('','99','99 - Kes yang dikecualikan bagi suku tahun ketiga 2020'),
);
#--------------------------------------------------------------------------------------------------
/* Kod Bahasa (LT)(2 digit)
Kod bahasa yang utama semasa temu ramah. Sila lihat Butiran 16 di Butir-Butir Pengenalan STB/LFS-1
*/
$data['bahasa'] = array(
	array('','10','10 - Melayu'),
	array('','20','20 - Inggeris'),
	array('','30','30 - Mandarin'),
	array('','31','31 - Hokkien'),
	array('','32','32 - Kantonis'),
	array('','33','33 - Hakka'),
	array('','34','34 - Teochew'),
	array('','35','35 - Hainan'),
	array('','36','36 - Foochow'),
	array('','40','40 - Tamil'),
	array('','41','41 - India lain'),
	array('','50','50 - Iban'),
	array('','51','51 - Bidayuh'),
	array('','52','52 - Melanau'),
	array('','53','53 - Murut'),
	array('','60','60 - Kadazan'),
	array('','61','61 - Dusun'),
	array('','62','62 - Bajau'),
	array('','63','63 - Rungus'),
	array('','64','64 - Brunei'),
	array('','70','70 - Lain-lain'),
);
#--------------------------------------------------------------------------------------------------
//<tr class="table-primary"><td colspan="2">Kod AIR</td></tr>
$data['AIR'] = array(
	array('','01','01 - Ketua isi rumah aka KIR'),
	array('','02','02 - Isteri/ suami ketua'),
	array('','03','03 - Anak KIR yg belum berkahwin'),
	array('','04','04 - Anak KIR yg telah berkahwin'),
	array('','05','05 - Menantu perempuan/ lelaki KIR'),
	array('','06','06 - Cucu KIR'),
	array('','07','07 - Bapa, ibu KIR @ kepada isteri/ suami KIR'),
	array('','08','08 - Datuk/ nenek KIR @ kepada isteri/ suami KIR'),
	array('','09','09 - Abang kakak/ adik KIR @kepada isteri/suamI KIR'),
	array('','10','10 - Orang Lain yg bersaudara dgn KIR @ isteri/suami KIR'),
	array('','11','11 - Pembantu rumah'),
	array('','12','12 - Orang Iain yg tidak bersaudara dgn KIR & isteri/ suami KIR'),
);
#--------------------------------------------------------------------------------------------------
//<tr class="table-primary"><td colspan="2">Kod Negeri'),
$data['negeri'] = array(
	array('','01','01 - Johor'),
	array('','02','02 - Kedah'),
	array('','03','03 - Kelantan'),
	array('','04','04 - Melaka'),
	array('','05','05 - Negeri Sembilan'),
	array('','06','06 - Pahang'),
	array('','07','07 - Pulau Pinang'),
	array('','08','08 - Perak'),
	array('','09','09 - Perlis'),
	array('','10','10 - Selangor'),
	array('','11','11 - Terengganu'),
	array('','12','12 - Sabah'),
	array('','13','13 - Sarawak'),
	array('','14','14 - WP Kuala Lumpur'),
	array('','15','15 - WP Labiran'),
	array('','16','16 - WP Putrajaya'),
	array('','98','98 - Luar Negara'),
);
#--------------------------------------------------------------------------------------------------
//<td><div id='etnik1'>Kumpulan Etnik Responden </div></td>
$data['etnik'] = array(
	array('','1100','1100 - Melayu'),
	array('','2111','2111 - Bateq (Negrito)'),
	array('','2112','2112 - Jahai (Negrito)'),
	array('','2113','2113 - Kensiu (Negrito)'),
	array('','2114','2114 - Kintak (Negrito)'),
	array('','2115','2115 - Lanoh (Negrito)'),
	array('','2116','2116 - Mendriq (Negrito)'),
	array('','2121','2121 - Che Wong (Senoi)'),
	array('','2122','2122 - Jahut (Senoi)'),
	array('','2123','2123 - Mahmeri (Senoi)'),
	array('','2124','2124 - Semai (Senoi)'),
	array('','2125','2125 - Semoq Beri (Senoi)'),
	array('','2126','2126 - Temiar (Senoi)'),
	array('','2131','2131 - Jakun (Melayu Asli)'),
	array('','2132','2132 - Orang Kanaq (Melayu Asli)'),
	array('','2133','2133 - Orang Kuala (Melayu Asli)'),
	array('','2134','2134 - Orang Seletar (Melayu Asli)'),
	array('','2135','2135 - Semalai (Melayu Asli)'),
	array('','2136','2136 - Temuan (Melayu Asli)'),
	array('','3110','3110 - Bajau [Sabah]'),
	array('','3120','3120 - Balabak/Molbog [Sabah]'),
	array('','3130','3130 - Bisaya/Bisayah [Sabah]'),
	array('','3140','3140 - Bulongan [Sabah]'),
	array('','3150','3150 - Dusun [Sabah]'),
	array('','3160','3160 - Idahan/Ida\'an [Sabah]'),
	array('','3170','3170 - Iranun/Ilanun [Sabah]'),
	array('','3180','3180 - Kadayan/Kedayan [Sabah]'),
	array('','3190','3190 - Kadazan [Sabah]'),
	array('','3200','3200 - Lundayuh/Lundayeh [Sabah]'),
	array('','3210','3210 - Melayu Brunei [Sabah]'),
	array('','3220','3220 - Murut [Sabah]'),
	array('','3230','3230 - Orang Sungai/Sungoi [Sabah]'),
	array('','3240','3240 - Rungus [Sabah]'),
	array('','3250','3250 - Suluk [Sabah]'),
	array('','3260','3260 - Tidung [Sabah]'),
	array('','3998','3998 - Bumiputera Sabah Lain'),
	array('','4110','4110 - Bidayuh [Sarawak]'),
	array('','4120','4120 - Bisayah [Sarawak]'),
	array('','4130','4130 - Bukitan [Sarawak]'),
	array('','4140','4140 - Iban [Sarawak]'),
	array('','4150','4150 - Kadayan [Sarawak]'),
	array('','4160','4160 - Kajang [Sarawak]'),
	array('','4170','4170 - Kanowit [Sarawak]'),
	array('','4180','4180 - Kayan [Sarawak]'),
	array('','4190','4190 - Kejaman [Sarawak]'),
	array('','4200','4200 - Kalabit [Sarawak]'),
	array('','4210','4210 - Kenyah [Sarawak]'),
	array('','4220','4220 - Lahanan [Sarawak]'),
	array('','4230','4230 - Lisum [Sarawak]'),
	array('','4240','4240 - Lugat [Sarawak]'),
	array('','4250','4250 - Lun Bawang/Murut [Sarawak]'),
	array('','4260','4260 - Melanau [Sarawak]'),
	array('','4270','4270 - Penan [Sarawak]'),
	array('','4280','4280 - Punan [Sarawak]'),
	array('','4290','4290 - Sabup [Sarawak]'),
	array('','4300','4300 - Sekapan [Sarawak]'),
	array('','4310','4310 - Sian [Sarawak]'),
	array('','4320','4320 - Sipeng [Sarawak]'),
	array('','4330','4330 - Tabun [Sarawak]'),
	array('','4340','4340 - Tagal [Sarawak]'),
	array('','4350','4350 - Tanjong [Sarawak]'),
	array('','4360','4360 - Ukit [Sarawak]'),
	array('','4998','4998 - Bumiputera Sarawak Lain'),
	array('','5110','5110 - Foochow [Cina]'),
	array('','5120','5120 - Hainan [Cina]'),
	array('','5130','5130 - Henghua [Cina]'),
	array('','5140','5140 - Hokchia [Cina]'),
	array('','5150','5150 - Hokchiu [Cina]'),
	array('','5160','5160 - Hokkien [Cina]'),
	array('','5170','5170 - Kantonis [Cina]'),
	array('','5180','5180 - Khek (Hakka) [Cina]'),
	array('','5190','5190 - Kwongsai [Cina]'),
	array('','5200','5200 - Teochew [Cina]'),
	array('','5998','5998 - Orang Cina Lain'),
	array('','6110','6110 - India Muslim/Malabari [India]'),
	array('','6120','6120 - Malayali [India]'),
	array('','6130','6130 - Punjabi (kecuali Sikh) [India]'),
	array('','6140','6140 - Sikh [India]'),
	array('','6150','6150 - Sinhala [India]'),
	array('','6160','6160 - Tamil India [India]'),
	array('','6170','6170 - Tamil Sri Lanka [India]'),
	array('','6180','6180 - Telugu [India]'),
	array('','6998','6998 - Orang India Lain'),
	array('','7110','7110 - Arab [Asia]'),
	array('','7120','7120 - Bangladesh [Asia] | 050 => Kod Negara'),
	array('','7130','7130 - Indonesia [Asia] | 360 => Kod Negara'),
	array('','7140','7140 - Jepun [Asia] | 392 => Kod Negara'),
	array('','7150','7150 - Kampuchea [Asia] | 116 => Kod Negara Cambodia'),
	array('','7160','7160 - Keturunan Pulau Kokos [Asia]'),
	array('','7170','7170 - Korea [Asia]'),
	array('','7180','7180 - Myanmar [Asia] | 104 => Kod Negara'),
	array('','7190','7190 - Nepal [Asia] | 524 => Kod Negara'),
	array('','7200','7200 - Pakistan [Asia] | 586 => Kod Negara'),
	array('','7210','7210 - Philipina [Asia] | 608 => Kod Negara'),
	array('','7220','7220 - Thailand [Asia] | 764 => Kod Negara'),
	array('','7230','7230 - Vietnam [Asia] | 704 => Kod Negara'),
	array('','7998','7998 - Bangsa Asia lain'),
	array('','8110','8110 - Denmark [Eropah]'),
	array('','8120','8120 - Perancis [Eropah]'),
	array('','8130','8130 - Jerman [Eropah]'),
	array('','8140','8140 - Itali [Eropah]'),
	array('','8150','8150 - Sepanyol [Eropah]'),
	array('','8160','8160 - United Kingdom [Eropah]'),
	array('','8998','8998 - Bangsa Eropah Lain'),
	array('','9110','9110 - Afrika [Lain]'),
	array('','9120','9120 - Amerika Syarikat [Lain]'),
	array('','9130','9130 - Australia [Lain]'),
	array('','9140','9140 - New Zealand [Lain]'),
	array('','9150','9150 - Serani [Lain]'),
	array('','9998','9998 - Lain-lain')
);
#--------------------------------------------------------------------------------------------------
// bahasa pertuturan
$data['pertuturan'] = array(
	array('','10','10 - Melayu'),
	array('','20','20 - Inggeris'),
	array('','30','30 - Mandarin'),
	array('','31','31 - Hokkien'),
	array('','31','32 - Kantonis'),
	array('','33','33 - Hakka'),
	array('','34','34 - Teochew'),
	array('','35','35 - Hainan'),
	array('','36','36 - Foochow'),
	array('','40','40 - Tamil'),
	array('','41','41 - India lain'),
	array('','50','50 - Iban'),
	array('','51','51 - Bidayuh'),
	array('','52','52 - Melanau'),
	array('','53','53 - Murut'),
	array('','60','60 - Kadazan'),
	array('','61','61 - Dusun'),
	array('','62','62 - Bajau'),
	array('','63','63 - Rungus'),
	array('','64','64 - Brunei'),
	array('','70','70 - Lain-lain')
);
#--------------------------------------------------------------------------------------------------
//<td> Kewarganegaraan </td>
$data['warganegara'] = array(
	array('','1','1 - Warganegara Malaysia'),
	array('','2','2 - Bukan Warganegara Malaysia')
);
#--------------------------------------------------------------------------------------------------
//<td>Taraf Perkahwinan </td>
$data['kahwin'] = array(
	array('','1','1 - Tidak pernah berkahwin'),
	array('','2','2 - Berkahwin'),
	array('','3','3 - Balu/Duda'),
	array('','4','4 - Bercerai'),
	array('','5','5 - Berpisah')
);
#--------------------------------------------------------------------------------------------------
//<td> Persekolahan </td>
$data['sekolah'] = array(
	array('','1','1 - Tidak bersekolah'),
	array('','2','2 - Bersekolah (sepenuh masa)'),
	array('','3','3 - Bersekolah (separuh masa)'),
	array('','4','4 - Tamat persekolahan')
);
#--------------------------------------------------------------------------------------------------
//<td> Taraf Pendidikan Rasmi Tertinggi</td>
$data['pendidikan'] = array(
	array('','00','00 - Pendidikan Prasekolah | 02 - Tiada Sijil','Thn Pendidikan Luar Negara'),
	array('','11','11 - Tahun 1 | 02 - Tiada Sijil','1'),
	array('','12','12 - Tahun 2 | 02 - Tiada Sijil','2'),
	array('','13','13 - Tahun 3 | 02 - Tiada Sijil','3'),
	array('','14','14 - Tahun 4 | 02 - Tiada Sijil','4'),
	array('','15','15 - Tahun 5 | 11 - UPKK','5'),
	array('','16','16 - Tahun 6 | 12 - UPSR/UPSRA','6'),
	array('','21','21 - Kelas Peralihan','7'),
	array('','22','22 - Tingkatan 1','7/8'),
	array('','23','23 - Tingkatan 2','8/9'),
	array('','24','24 - Tingkatan 3 | 22 - PT3/PMR/SRP/LCE','9/10'),
	array('','31','31 - Tingkatan 4','10/11'),
	array('','32','32 - Tingkatan 5 | 33 - SPM/MCE/SC/FMCE/CSC','11/12'),
	array('','33','33 - Program Kemahiran Asas','-'),
	array('','41','41 - Tingkatan 6 (rendah)','12/13'),
	array('','42','42 - Tingkatan 6 (atas) | 42 - STPM/STP/HSC','13/14'),
	array('','43','43 - Matrikulasi (Prauniversiti) | 44 - Sijil Matrikulasi',''),
	array('','51','51 - Program Sijil Kemahiran Khusus dan Teknikal',''),
	array('','61','61 - Program Sijil oleh Badan2 yang memberi Pengiktirafan',''),
	array('','62','62 - Program Sijil dari kolej/politeknik/universiti @ setaraf dgnnya',''),
	array('','63','63 - Program Sijil perguruan/kejururawatan/kesihatan bersekutu','65 - Sijil perguruan/kejururawatan/kesihatan bersekutu'),
	array('','64','64 - Program Diploma Kemahiran Khusus dan Teknikal',''),
	array('','65','65 - Program Dip. Lanjutan/Higher National Diploma Kemahiran Khusus dan Teknikal',''),
	array('','66','66 - Program Diploma dari kolej/politeknik/universiti @ setaraf dgnnya',''),
	array('','67','67 - Program Diploma perguruan/kejururawatan/kesihatan bersekutu','84 - Diploma perguruan/kejururawatan/kesihatan bersekutu'),
	array('','71','71 - Program Ijazah Sarjana Muda/Diploma Lanjutan','91 - Ijazah Sarjana Muda/Diploma lanjutan'),
	array('','72','72 - Program Lepasan Ijazah',''),
	array('','73','73 - Program Sarjana(Master)','93 - Ijazah Sarjana(Master)'),
	array('','81','81 - Program Ijazah Falsafah Kedoktoran','94 - Doktor Falsafah(PhD)'),
	array('','82','82 - Skim Pasca Kedoktoran','95 - Diploma/Sijil pasca kedoktoran'),
	array('','91','91 - Pendidikan tidak formal | 03 - Tiada berkenaan',''),
	array('','92','92 - Tiada pendidikan | 03 - Tiada berkenaan',''),
	array('','93','93 - Masih belum bersekolah | 01 - Masih belum bersekolah','')
);
#--------------------------------------------------------------------------------------------------
//<td> Sijil Tertinggi Yang Diperolehi di sekolah,maktab / universiti</td>
$data['sijil'] = array(
	array('','11','11 - UPKK'),
	array('','12','12 - UPSR/UPSRA'),
	array('','21','21 - SRA'),
	array('','22','22 - PT3/PMR/SRP/LCE'),
	array('','31','31 - SMA/SMU'),
	array('','32','32 - 4 Thanawi'),
	array('','33','33 - SPM/MCE/SC/FMCE/CSC'),
	array('','34','34 - SPVM/SPM(V)/MVC'),
	array('','35','35 - GCE `O` Level'),
	array('','36','36 - Sijil Kemahiran Asas/Giat Mara'),
	array('','41','41 - STA/STAM/STU'),
	array('','42','42 - STPM/STP/HSC'),
	array('','43','43 - GCE `A` Level'),
	array('','44','44 - Sijil Matrikulasi'),
	array('','51','51 - Sijil kemahiran khusus dan teknikal'),
	array('','61','61 - Sijil drpd badan2 yg memberi pengiktirafan @ yg setaraf'),
	array('','62','62 - Sijil drpd kolej @ yg setaraf'),
	array('','63','63 - Sijil drpd politeknik @ yg setaraf'),
	array('','64','64 - Sijil drpd universiti @ yg setaraf'),
	array('','65','65 - Sijil perguruan/kejururawatan/kesihatan bersekutu'),

	array('','71','71 - Diploma dlm kemahiran khusus dan teknikal'),
	array('','72','72 - Diploma Lanjutan/Higher National Diploma(HND) dlm kemahiran khusus dan teknikal'),

	array('','81','81 - Diploma drpd kolej @ yg setaraf(terutama kolej swasta)'),
	array('','82','82 - Diploma drpd politeknik @ yg setaraf'),
	array('','83','83 - Diploma drpd universiti @ yg setaraf'),
	array('','84','84 - Diploma perguruan/kejururawatan/kesihatan bersekutu'),

	array('','91','91 - Ijazah Sarjana Muda/Diploma lanjutan'),
	array('','92','92 - Diploma/Sijil pasca ijazah @ drpd badan profesional/(ACCA/CA)'),
	array('','93','93 - Ijazah Sarjana'),
	array('','94','94 - Doktor Falsafah(PhD)'),
	array('','95','95 - Diploma/Sijil pasca kedoktoran'),
	array('','01','01 - Masih belum bersekolah'),
	array('','02','02 - Tiada Sijil'),
	array('','03','03 - Tiada berkenaan')
);
#--------------------------------------------------------------------------------------------------
// bidang pengajian
$data['pengajian'] = array(
	array('','010','010 - Program asas/umum','Program asas/umum'),
	array('','080','080 - Literasi dan numerasi','Literasi dan numerasi'),
	array('','090','090 - Kemahiran personal','Kemahiran personal'),
	//Latihan perguruan dan sains pendidikan
	array('','14X','Latihan perguruan dan sains pendidikan',''),
	array('','141','141 - Pengajaran dan latihan','Latihan perguruan dan sains pendidikan'),
	array('','142','142 - Sains pendidikan','Latihan perguruan dan sains pendidikan'),
	array('','143','143 - Latihan perguruan untuk guru pra-sekolah','Latihan perguruan dan sains pendidikan'),
	array('','144','144 - Latihan perguruan untuk guru peringkat asas','Latihan perguruan dan sains pendidikan'),
	array('','145','145 - Latihan perguruan untuk guru dengan pengkhususan subjek','Latihan perguruan dan sains pendidikan'),
	array('','146','146 - Latihan perguruan untuk guru dengan subjek vokasional/praktikal','Latihan perguruan dan sains pendidikan'),
	//Kesenian
	array('','21X','Kesenian',''),
	array('','211','211 - Seni halus, lukisan, khat, calligraphy','Kesenian'),
	array('','212','212 - Muzik dan persembahan kesenian (nyanyian, lakonan, drama, tarian, teater)','Kesenian'),
	array('','213','213 - Produksi media dan teknik audio-visual (animasi, fotografi, cinematografi, produksi radio dan TV, graphic design, computer graphic, percetakan dan penerbitan)','Kesenian'),
	array('','214','214 - Rekaan (fashion and costume design, interior design, stage design)','Kesenian'),
	array('','215','215 - Kemahiran tukangan (kraftangan, jahitan, tenunan, ukiran)','Kesenian'),
	//Kemanusiaan
	array('','22X','Kemanusiaan',''),
	array('','221','221 - Agama (pengajian agama, sejarah agama, study of sacred books i.e. Al-Quran)','Kemanusiaan'),
	array('','222','222 - Pengajian bahasa','Kemanusiaan'),
	array('','223','223 - Bahasa kebangsaan (Bahasa Malaysia)','Kemanusiaan'),
	array('','224','224 - Bahasa-bahasa lain (linguistics, literature, translation, interpretation, bahasa isyarat)','Kemanusiaan'),
	array('','225','225 - Sejarah dan arkeologi','Kemanusiaan'),
	array('','226','226 - Falsafah dan etika','Kemanusiaan'),
	array('','227','227 - Sejarah, falsafah dan subjek berkaitan','Kemanusiaan'),
	//Sains sosial dan sains gelagat
	array('','31X','31X - Sains sosial dan sains gelagat',''),
	array('','311','311 - Psikologi','Sains sosial dan sains gelagat'),
	array('','312','312 - Pengajian sosiologi dan kajian kebudayaan (antropologi, demografi, regional cultures)','Sains sosial dan sains gelagat'),
	array('','313','313 - Sains politik dan sivik (hak asasi manusia, hubungan antarabangsa, keamanan)','Sains sosial dan sains gelagat'),
	array('','314','314 - Ekonomi (mikroekonomi, makroekonomi, ekonomi antarabangsa, ekonometrik, national accounts)','Sains sosial dan sains gelagat'),
	//Kewartawanan dan maklumat
	array('','32X','Kewartawanan dan maklumat','Kewartawanan dan maklumat'),
	array('','321','321 - Kewartawanan dan pelaporan (broadcast journalism, mass communication)','Kewartawanan dan maklumat'),
	array('','322','322 - Perpustakaan, maklumat dan arkib (archival science, documentation, information science, librarianship training, museum documentation)','Kewartawanan dan maklumat'),
	//Perniagaan dan pentadbiran
	array('','34X','34X - Perniagaan dan pentadbiran',''),
	array('','341','341 - Jualan borong dan runcit (buying, selling, consumer service, dairy retailing, demonstration techniques, property sales, purchasing, procurement, contracts, real- estate, sales representatives, stock keeping, telephone selling, ware-housing, wholesaling)','Perniagaan dan pentadbiran'),
	array('','342','342 - Pemasaran dan pengiklanan (advertising, marketing, merchandising, market research, public relation)','Perniagaan dan pentadbiran'),
	array('','343','343 - Kewangan, perbankan, insurans, pelaburan','Perniagaan dan pentadbiran'),
	array('','344','344 - Perakaunan, percukaian, pengauditan, simpan kira','Perniagaan dan pentadbiran'),
	array('','345','345 - Pengurusan dan pentadbiran (human resource management, office management, personnel management, quality management, recruitment, enterprise training, public administration)','Perniagaan dan pentadbiran'),
	array('','346','346 - Kesetiausahaan dan perkeranian (clerical programmes, typing, stenography, shorthand, receptionist training, legal secretary)','Perniagaan dan pentadbiran'),
	array('','347','347 - Kehidupan kerja (clients` needs, company knowledge, industrial relations, quality assurance, work development)','Perniagaan dan pentadbiran'),
	array('','38X','38X - Undang-undang',''),
	array('','381','380 - Undang-undang (am, antarabangsa)','Undang-undang'),
	array('','381','381 - Undang-undang syariah','Undang-undang'),
	array('','42X','42X - Sains hayat',''),
	array('','421','421 - Biologi dan biokimia (bioteknologi, genetik, mikrobiologi, zoologi, entomologi)','Sains hayat'),
	array('','422','442 - Sains persekitaran (ekologi)','Sains hayat'),
	array('','44X','44X - Sains fizikal',''),
	array('','441','441 - Fizik (sains fizik, astronomi, sains nuklear, optik, sains angkasa)','Sains fizikal'),
	array('','442','442 - Kimia (kimia organik, polimer, petroleum)','Sains fizikal'),
	array('','443','443 - Sains (earth science, atmosphere, geography (physical), geophysic, geoscience, geology, hydrologi, sains marin, oceanography, palentology, meteorology, mineralogy, seismology)','Sains fizikal'),
	array('','46X','46X - Matematik dan statistik',''),
	array('','461','461 - Matematik (algebra, matematik gunaan, geometri, penyelidikan operasi, analisis berangka)','Matematik dan statistik'),
	array('','462','462 - Statistik (teori kebarangkalian, statistik gunaan, survey sampling, survey design, sains aktuari)','Matematik dan statistik'),
	array('','48','48X - Pengkomputeran',''),
	array('','481','481 - Sains komputer (programming, programming language C++, system analysis, system design, informatics, network administration, operating system, software localisation)','Pengkomputeran'),
	array('','482','482 - Penggunaan komputer (computer software use, internet use programmes, spreadsheets, software for data processing, desktop publishing and word processing)','Pengkomputeran'),
	array('','52','52X - Kejuruteraan dan kejuruteraan dagangan',''),
	array('','521','521 - Mekanik dan kerja logam (bicycle production, boiler, welding, gunsmithing, hydraulics, repairing, mechanical engineering, metallurgical technology, steel, precision mechanics)','Kejuruteraan dan kejuruteraan dagangan'),
	array('','522','522 - Tenaga dan elektrik (air-conditioning programmes, electrical appliances repairing, fitting, engineering, power generation, gas distribution, nuclear, hydraulic and thermal energy, power production, powerline installation, refrigeration programmes, solar energy)','Kejuruteraan dan kejuruteraan dagangan'),
	array('','523','523 - Elektronik dan pengautomasian (broadcasting electronics, communication systems, installation, equiment maintenance, computer engineering, repairing, control engineering, digital technologi, network technology, robotics, telecommunication technology, television and radio repairing)','Kejuruteraan dan kejuruteraan dagangan'),
	array('','524','524 - Kimia dan proses (chemical engineering, laboratory technology, oil refining, oil/gas/petrochemicals processing, plant and machine operation)','Kejuruteraan dan kejuruteraan dagangan'),
	array('','525','525 - Kenderaan bermotor, kapal dan kapal terbang (aeronautical/aerospace engineering, agriculture machinery, air-craft engineering, automotive engineering, helicopter / marine/ motorcycle / naval engineering, shipbuilding, vehicle and motor engineering)','Kejuruteraan dan kejuruteraan dagangan'),
	array('','526','526 - Kejuruteraan awam (bridge/building construction, dock and harbour engineering, quantity surveying, road building, technical drawings, water supply and sewerage engineering)','Kejuruteraan dan kejuruteraan dagangan'),
	array('','527','527 - Kejuruteraan bahan','Kejuruteraan dan kejuruteraan dagangan'),
	//Pembuatan dan pemprosesan
	array('','54','54X - Pembuatan dan pemprosesan',''),
	array('','541','541 - Pemprosesan / teknologi  makanan (baking, confectionary, dairy foods, distilling, food processing, food hygiene, food preservation and packaging, pastry cooking)','Pembuatan dan pemprosesan'),
	array('','542','542 - Tekstil, pakaian, pakaian kaki, kulit (apparel and textile working, tailoring, dressmaking, footwear making, shoemaking, spinning)','Pembuatan dan pemprosesan'),
	array('','543','543 - Bahan (kayu, kertas, plastik, kaca) (boat building, cabinet making, carpentry, furniture craft, glass production, paper and plastics manufacturing, synthetic fibre manufacturing, timber technology, wood technology)','Pembuatan dan pemprosesan'),
	array('','544','544 - Perlombongan dan galian (coal mining, oil & gas/raw material extraction)','Pembuatan dan pemprosesan'),
	array('','545','545 - Sains gunaan (environmental/ marine/ polymer, plantation technology)','Pembuatan dan pemprosesan'),
	array('','58','58X - Senibina dan bangunan',''),
	array('','581','581 - Senibina dan perancang bandar (architecture, cartography/land surveying, landscape, topography, urban planning)','Senibina dan bangunan'),
	array('','582','582 - Bangunan (bricklaying, carpentry & joinery, cement working, demolition, floor & wall tiling, glazing, plumbing, satitation, roof fixing, painting & wall covering)','Senibina dan bangunan'),
	array('','62','62X - Pertanian, perhutanan dan perikanan',''),
	array('','621','621 - Pengeluaran ternakan dan tanaman (agronomy, pembiakan haiwan, farming, orchards construction, vegetable plantation)','Pertanian, perhutanan dan perikanan'),
	array('','622','622 - Perkebunan (horticulture, floriculture, gardening, greenhouse, nursery management)','Pertanian, perhutanan dan perikanan'),
	array('','623','623 - Perhutanan','Pertanian, perhutanan dan perikanan'),
	array('','624','624 - Perikanan (akuakultur, pembiakan ikan/haiwan kerang-kerangan)','Pertanian, perhutanan dan perikanan'),
	array('','64','64X - Veterinar',''),
	array('','641','641 Penjagaan kesihatan haiwan, reproduction, veterinary assisting and medicine','Veterinar'),
	array('','72','72X - Kesihatan',''),
	array('','721','721 - Perubatan','Kesihatan'),
	array('','722','722 - Perkhidmatan perubatan (diagnostik, teknologi perawatan, terapi dan pemulihan, farmasi)','Kesihatan'),
	array('','723','723 - Kejururawatan dan penjagaan','Kesihatan'),
	array('','724','724 - Pengajian pergigian','Kesihatan'),
	array('','725','725 - Teknologi rawatan dan perubatan diagnostik (emergency para-medical technology, medical laboratory, x-ray technology, radiotherapy, hearing aid technology)','Kesihatan'),
	array('','726','726 - Terapi dan pemulihan (nutrisi & dietetik, urutan perubatan, kesihatan mental, optometry, refleksologi, fisioterapi)','Kesihatan'),
	array('','727','727 - Farmasi','Kesihatan'),
	array('','76','76X - Perkhidmatan sosial',''),
	array('','761','761 - Perkhidmatan asuhan kanak-kanak dan belia','Perkhidmatan sosial'),
	array('','762','762 - Kerja sosial dan kaunseling (career advising, social studies, kaunseling perkahwinan dan keluarga)','Perkhidmatan sosial'),
	array('','81','81X - Perkhidmatan personal',''),
	array('','811','811 - Hotel, restoran dan katering (seni kulinari, masakan, penyediaan makanan, perkhidmatan hospitaliti)','Perkhidmatan personal'),
	array('','812','812 - Pengembaraan, pelancongan dan rekreasi','Perkhidmatan personal'),
	array('','813','813 - Sukan (gymnastik, diving, sports coaching)','Perkhidmatan personal'),
	array('','814','814 - Perkhidmatan domestik (housekeeping, homeservice, laundry)','Perkhidmatan personal'),
	array('','815','815 - Perkhidmatan pendandanan dan kecantikan (perkhidmatan kosmetik, fitness & weight control, dandanan rambut, persolekan, manicure & pedicure, perkhidmatan salon, urutan kecantikan)','Perkhidmatan personal'),
	array('','84','84X - Perkhidmatan pengangkutan',''),
	array('','840','840 - Air crew programmes, aircraft operation, aviation, cabin crew training, crane, truck & fork-lift driving, nautical science, postal service, railway operations, seamanship, ship operation','Perkhidmatan pengangkutan'),
	array('','85','85X - Kawalan alam sekitar',''),
	array('','851','851 - Teknologi kawalan alam sekitar (teknologi dan kawalan pencemaran, kitar semula)','Kawalan alam sekitar'),
	array('','852','852 - Alam semula jadi dan hidupan liar (pengurusan taman negara dan hidupan liar)','Kawalan alam sekitar'),
	array('','853','853 - Perkhidmatan sanitari komuniti','Kawalan alam sekitar'),
	array('','86','86X - Perkhidmatan keselamatan',''),
	array('','861','861 - Perlindungan diri dan harta benda (security guarding, police work, fire technology, civil security)','Perkhidmatan keselamatan'),
	array('','862','862 - Kesihatan dan keselamatan pekerjaan (job safety, ergonomics, kebajikan pekerja)','Perkhidmatan keselamatan'),
	array('','863','863 - Ketenteraan dan pertahanan (latihan ketenteraan, sains militari, national security)','Perkhidmatan keselamatan'),
);
#--------------------------------------------------------------------------------------------------
// bidang pengajian ISCED-F 2013: List of possible codes
$data['isced-f 2013'] = array(
	array('','Broad field','Narrow field','Detailed field'),
	array('','00-Generic programmes & qualifications','',''),
	array('','000-Generic programmes & qualifications not further defined',
	'0000 Generic programmes & qualifications not further defined',''),
	array('','001-Basic programmes & qualifications',
	'0011 Basic programmes & qualifications',''),
	array('','002-Literacy & numeracy','0021 Literacy & numeracy',''),
	array('','003-Personal skills & development ','0031 Personal skills & development',''),
	array('','009 Generic programmes & qualifications not elsewhere classified',
	'0099 Generic programmes & qualifications not elsewhere classified',''),
	array('','01-Education','',''),
	array('','0110 Education not further defined','',''),
	array('','0111 Education science','',''),
	array('','0112 Training for pre-school teachers','',''),
	array('','0113 Teacher training without subject specialisation','',''),
	array('','0114 Teacher training with subject specialisation','',''),
	array('','0119 Education not elsewhere classified','',''),
	array('','018 Inter-disciplinary programmes & qualifications involving education','',''),
	array('','0188 Inter-disciplinary programmes & qualifications involving education','',''),
	array('','02 Arts & humanities','',''),
	array('','021 Arts & humanities not further defined','',''),
	array('','0200 Arts & humanities not further defined','',''),
	array('','021 Arts','',''),
	array('','0210 Arts not further defined','',''),
	array('','0211 Audio-visual techniques & media production','',''),
	array('','0212 Fashion, interior & industrial design','',''),
	array('','0213 Fine arts','',''),
	array('','0214 Handicrafts','',''),
	array('','0215 Music & performing arts ','',''),
	array('','0219 Arts not elsewhere classified ','',''),
	array('','022 Humanities (except languages)','',''),
	array('','0220 Humanities (except languages) not further defined','',''),
	array('','0221 Religion & theology','',''),
	array('','0222 History & archaeology','',''),
	array('','0223 Philosophy & ethics','',''),
	array('','0229 Humanities (except languages) not elsewhere classified','',''),
	array('','023 Languages','',''),
	array('','0230 Languages not further defined','',''),
	array('','0231 Language acquisition','',''),
	array('','0232 Literature & linguistics','',''),
	array('','0239 Languages not elsewhere classified','',''),
	array('','028 Inter-disciplinary programmes & qualifications involving'
	. ' arts & humanities','',''),
	array('','0288 Inter-disciplinary programmes & qualifications involving'
	. ' arts & humanities','',''),
	array('','029 Arts & humanities not elsewhere classified','',''),
	array('','0299 Arts & humanities not elsewhere classified','',''),
	array('','03 Social sciences, journalism & information','',''),
	array('','030 Social sciences, journalism & information not further defined','',''),
	array('','0300 Social sciences, journalism & information not further defined','',''),
	array('','031 Social & behavioural sciences','',''),
	array('','0310 Social & behavioural sciences not further defined','',''),
	array('','0311 Economics','',''),
	array('','0312 Political sciences & civics','',''),
	array('','0313 Psychology','',''),
	array('','0314 Sociology & cultural studies','',''),
	array('','0319 Social & behavioural sciences not elsewhere classified','',''),
	array('','032 Journalism & information','',''),
	array('','0320 Journalism & information not further defined','',''),
	array('','0321 Journalism & reporting','',''),
	array('','0322 Library, information & archival studies','',''),
	array('','0329 Journalism & information not elsewhere classified','',''),
	array('','038 Inter-disciplinary programmes & qualifications involving'
	. ' social sciences, journalism & information','',''),
	array('','0388 Inter-disciplinary programmes & qualifications involving'
	. ' social sciences, journalism & information','',''),
	array('','039 Social sciences, journalism & information not elsewhere classified','',''),
	array('','0399 Social sciences, journalism & information not elsewhere classified ','',''),
	array('','04 Business, administration & law','',''),
	array('','040 Business, administration & law not further defined','',''),
	array('','0400 Business, administration & law not further defined','',''),
	array('','041 Business & administration','',''),
	array('','0410 Business & administration not further defined','',''),
	array('','0411 Accounting & taxation','',''),
	array('','0412 Finance, banking & insurance','',''),
	array('','0413 Management & administration','',''),
	array('','0414 Marketing & advertising','',''),
	array('','0415 Secretarial & office work','',''),
	array('','0416 Wholesale & retail sales','',''),
	array('','0417 Work skills','',''),
	array('','0419 Business & administration not elsewhere classified','',''),
	array('','042 Law','',''),
	array('','0421 Law','',''),
	array('','048 Inter-disciplinary programmes & qualifications involving business,'
	. ' administration & law','',''),
	array('','0488 Inter-disciplinary programmes & qualifications involving business,'
	. ' administration & law','',''),
	array('','049 Business, administration & law not elsewhere classified','',''),
	array('','0499 Business, administration & law not elsewhere classified','',''),
	array('','05 Natural sciences, mathematics & statistics','',''),
	array('','050 Natural sciences, mathematics & statistics not further defined','',''),
	array('','0500 Natural sciences, mathematics & statistics not further defined','',''),
	array('','051 Biological & related sciences','',''),
	array('','0510 Biological & related sciences not further defined','',''),
	array('','0511 Biology','',''),
	array('','0512 Biochemistry','',''),
	array('','0519 Biological & related sciences not elsewhere classified','',''),
	array('','052 Environment','',''),
	array('','0520 Environment not further defined','',''),
	array('','0521 Environmental sciences','',''),
	array('','0522 Natural environments & wildlife','',''),
	array('','0529 Environment not elsewhere classified','',''),
	array('','053 Physical sciences','',''),
	array('','0530 Physical sciences not further defined','',''),
	array('','0531 Chemistry','',''),
	array('','0532 Earth sciences','',''),
	array('','0533 Physics','',''),
	array('','0539 Physical sciences not elsewhere classified','',''),
	array('','054 Mathematics & statistics','',''),
	array('','0540 Mathematics & statistics not further defined','',''),
	array('','0541 Mathematics','',''),
	array('','0542 Statistics','',''),
	array('','058 Inter-disciplinary programmes & qualifications involving natural'
	. ' sciences, mathematics & statistics','',''),
	array('','0588 Inter-disciplinary programmes & qualifications involving natural'
	. ' sciences, mathematics & statistics','',''),
	array('','059 Natural sciences, mathematics & statistics not elsewhere classified','',''),
	array('','0599 Natural sciences, mathematics & statistics not elsewhere classified','',''),

	array('','06 Information & Communication Technologies (ICTs)','',''),
	array('','061 Information & Communication Technologies (ICTs)','',''),
	array('','0610 Information & Communication Technologies (ICTs) not further defined','',''),
	array('','0611 Computer use','',''),
	array('','0612 Database & network design & administration','',''),
	array('','0613 Software & applications development & analysis','',''),
	array('','0619 Information & Communication Technologies (ICTs)'
	. '  not elsewhere classified','',''),
	array('','068 Inter-disciplinary programmes & qualifications involving'
	. ' Information & Communication Technologies (ICTs)','',''),
	array('','0688 Inter-disciplinary programmes & qualifications involving'
	. ' Information & Communication Technologies (ICTs)','',''),
	array('','07 Engineering, manufacturing & construction','',''),
	array('','070 Engineering, manufacturing & construction not further defined','',''),
	array('','0700 Engineering, manufacturing & construction not further defined','',''),
	array('','071 Engineering & engineering trades','',''),
	array('','0710 Engineering & engineering trades not further defined','',''),
	array('','0711 Chemical engineering & processes','',''),
	array('','0712 Environmental protection technology','',''),
	array('','0713 Electricity & energy','',''),
	array('','0714 Electronics & automation','',''),
	array('','0715 Mechanics & metal trades','',''),
	array('','0716 Motor vehicles, ships & aircraft','',''),
	array('','0719 Engineering & engineering trades not elsewhere classified','',''),
	array('','072 Manufacturing & processing','',''),
	array('','0720 Manufacturing & processing not further defined','',''),
	array('','0721 Food processing','',''),
	array('','0722 Materials (glass, paper, plastic & wood)','',''),
	array('','0723 Textiles (clothes, footwear & leather)','',''),
	array('','0724 Mining & extraction','',''),
	array('','0729 Manufacturing & processing not elsewhere classified','',''),
	array('','073 Architecture & construction','',''),
	array('','0730 Architecture & construction not further defined','',''),
	array('','0731 Architecture & town planning','',''),
	array('','0732 Building & civil engineering','',''),
	array('','078 Inter-disciplinary programmes & qualifications involving'
	. ' engineering, manufacturing & construction','',''),
	array('','0788 Inter-disciplinary programmes & qualifications involving'
	. ' engineering, manufacturing & construction','',''),
	array('','079 Engineering, manufacturing & construction not elsewhere classified ','',''),
	array('','0799 Engineering, manufacturing & construction not elsewhere classified','',''),
	array('','08 Agriculture, forestry, fisheries & veterinary','',''),
	array('','080 Agriculture, forestry, fisheries & veterinary not further defined','',''),
	array('','0800 Agriculture, forestry, fisheries & veterinary not further defined','',''),
	array('','081 Agriculture','',''),
	array('','0810 Agriculture not further defined','',''),
	array('','0811 Crop & livestock production','',''),
	array('','0812 Horticulture','',''),
	array('','0819 Agriculture not elsewhere classified','',''),
	array('','082 Forestry','0821 Forestry',''),
	array('','083 Fisheries','0831 Fisheries',''),
	array('','084 Veterinary','0841 Veterinary',''),
	array('','088 Inter-disciplinary programmes & qualifications involving'
	. ' agriculture, forestry, fisheries & veterinary','',''),
	array('','0888 Inter-disciplinary programmes & qualifications involving'
	. 'agriculture, forestry, fisheries & veterinary','',''),
	array('','089 Agriculture, forestry, fisheries & veterinary not elsewhere classified',
	'0899 Agriculture, forestry, fisheries & veterinary not elsewhere classified',''),
	array('','09 Health & welfare','',''),
	array('','090 Health & welfare not further defined','',''),
	array('','0900 Health & welfare not further defined','',''),
	array('','091 Health','',''),
	array('','0910 Health not further defined','',''),
	array('','0911 Dental studies','',''),
	array('','0912 Medicine','',''),
	array('','0913 Nursing & midwifery','',''),
	array('','0914 Medical diagnostic & treatment technology','',''),
	array('','0915 Therapy & rehabilitation','',''),
	array('','0916 Pharmacy','',''),
	array('','0917 Traditional & complementary medicine & therapy','',''),
	array('','0919 Health not elsewhere classified','',''),
	array('','092 Welfare','',''),
	array('','0920 Welfare not further defined','',''),
	array('','0921 Care of the elderly & of disabled adults','',''),
	array('','0922 Child care & youth services','',''),
	array('','0923 Social work & counselling','',''),
	array('','0929 Welfare not elsewhere classified','',''),
	array('','098 Inter-disciplinary programmes & qualifications'
	. ' involving health & welfare','',''),
	array('','0988 Inter-disciplinary programmes & qualifications'
	. ' involving health & welfare','',''),
	array('','099 Health & welfare not elsewhere classified','',''),
	array('','0999 Health & welfare not elsewhere classified','',''),
	array('','10 Services','',''),
	array('','100 Services not further defined','',''),
	array('','1000 Services not further defined','',''),
	array('','101 Personal services','',''),
	array('','1010 Personal services not further defined','',''),
	array('','1011 Domestic services','',''),
	array('','1012 Hair & beauty services','',''),
	array('','1013 Hotel, restaurants & catering','',''),
	array('','1014 Sports','',''),
	array('','1015 Travel, tourism & leisure','',''),
	array('','1019 Personal services not elsewhere classified','',''),
	array('','102 Hygiene & occupational health services','',''),
	array('','1020 Hygiene & occupational health services not further defined','',''),
	array('','1021 Community sanitation','',''),
	array('','1022 Occupational health & safety','',''),
	array('','1029 Hygiene & occupational health services not elsewhere classified','',''),
	array('','103 Security services','',''),
	array('','1030 Security services not further defined','',''),
	array('','1031 Military & defence','',''),
	array('','1032 Protection of persons & property','',''),
	array('','1039 Security services not elsewhere classified','',''),
	array('','104 Transport services','1041 Transport services',''),
	array('','108 Inter-disciplinary programmes & qualifications involving services','',''),
	array('','1088 Inter-disciplinary programmes & qualifications involving services','',''),
	array('','109 Services not elsewhere classified','',''),
	array('','1099 Services not elsewhere classified','',''),
	array('','99 Field unknown','',''),
	array('','999 Field unknown','',''),
	array('','9999 Field unknown','',''),
);
#--------------------------------------------------------------------------------------------------
//
$data['test123'] = array(
	array('','00-program & kelayakan generik','',''),
	array('','000-program & kelayakan generik tidak ditakrifkan lagi',
	'0000 program & kelayakan generik tidak ditakrifkan lagi',''),
	array('','001-Program & kelayakan asas',
	'0011 Program & kelayakan asas',''),
	array('','002-Literasi & numerasi','0021 Literasi & numerasi',''),
	array('','003-Kemahiran & pembangunan peribadi ','0031 Kemahiran & pembangunan peribadi',''),
	array('','009 Program & kelayakan generik yang tidak dikelaskan di tempat lain',
	'0099 Program & kelayakan generik yang tidak dikelaskan di tempat lain',''),
	array('','01-Pendidikan','',''),
	array('','0110 Pendidikan tidak ditakrifkan lagi','',''),
	array('','0111 Sains pendidikan','',''),
	array('','0112 Latihan untuk guru prasekolah','',''),
	array('','0113 Latihan guru tanpa pengkhususan mata pelajaran','',''),
	array('','0114 Latihan guru dengan pengkhususan mata pelajaran','',''),
	array('','0119 Pendidikan tidak dikelaskan di tempat lain','',''),
	array('','018 Program & kelayakan antara disiplin yang melibatkan pendidikan','',''),
	array('','0188 Program & kelayakan antara disiplin yang melibatkan pendidikan','',''),
	array('','02 Seni & kemanusiaan','',''),
	array('','021 Seni & kemanusiaan tidak ditakrifkan lagi','',''),
	array('','0200 Seni & kemanusiaan tidak ditakrifkan lagi','',''),
	array('','021 Seni','',''),
	array('','0210 Seni tidak ditakrifkan lagi','',''),
	array('','0211 Teknik audio-visual & penghasilan media','',''),
	array('','0212 Fesyen, reka bentuk dalaman & perindustrian','',''),
	array('','0213 Seni halus','',''),
	array('','0214 Kraftangan','',''),
	array('','0215 Muzik & seni persembahan ','',''),
	array('','0219 Seni tidak dikelaskan di tempat lain ','',''),
	array('','022 Kemanusiaan (kecuali bahasa)','',''),
	array('','0220 Kemanusiaan (kecuali bahasa) tidak ditakrifkan lagi','',''),
	array('','0221 Agama & teologi','',''),
	array('','0222 Sejarah & arkeologi','',''),
	array('','0223 Falsafah & etika','',''),
	array('','0229 Kemanusiaan (kecuali bahasa) tidak dikelaskan di tempat lain','',''),
	array('','023 Bahasa','',''),
	array('','0230 Bahasa tidak ditakrifkan lagi','',''),
	array('','0231 Pemerolehan bahasa','',''),
	array('','0232 Kesusasteraan & linguistik','',''),
	array('','0239 Bahasa tidak dikelaskan di tempat lain','',''),
	array('','028 Program & kelayakan antara disiplin yang melibatkan'
	. 'seni & kemanusiaan','',''),
	array('','0288 Program & kelayakan antara disiplin yang melibatkan'
	. 'seni & kemanusiaan','',''),
	array('','029 Seni & kemanusiaan tidak dikelaskan di tempat lain','',''),
	array('','0299 Seni & kemanusiaan tidak dikelaskan di tempat lain','',''),
	array('','03 Sains sosial, kewartawanan & maklumat','',''),
	array('','030 Sains sosial, kewartawanan & maklumat tidak ditakrifkan lagi','',''),
	array('','0300 Sains sosial, kewartawanan & maklumat tidak ditakrifkan lagi','',''),
	array('','031 Sains sosial & tingkah laku','',''),
	array('','0310 Sains sosial & tingkah laku tidak ditakrifkan lagi','',''),
	array('','0311 Ekonomi','',''),
	array('','0312 Sains politik & sivik','',''),
	array('','0313 Psikologi','',''),
	array('','0314 Sosiologi & kajian budaya','',''),
	array('','0319 Sains sosial & tingkah laku tidak dikelaskan di tempat lain','',''),
	array('','032 Kewartawanan & maklumat','',''),
	array('','0320 Kewartawanan & maklumat tidak ditakrifkan lagi','',''),
	array('','0321 Kewartawanan & pelaporan','',''),
	array('','0322 Perpustakaan, maklumat & kajian arkib','',''),
	array('','0329 Kewartawanan & maklumat tidak diklasifikasikan di tempat lain','',''),
	array('','038 Program & kelayakan antara disiplin yang melibatkan'
	. ' sains sosial, kewartawanan & maklumat','',''),
	array('','0388 Program & kelayakan antara disiplin yang melibatkan'
	. ' sains sosial, kewartawanan & maklumat','',''),
	array('','039 Sains sosial, kewartawanan & maklumat tidak dikelaskan di tempat lain','',''),
	array('','0399 Sains sosial, kewartawanan & maklumat tidak dikelaskan di tempat lain ','',''),
	array('','04 Perniagaan, pentadbiran & undang-undang','',''),
	array('','040 Perniagaan, pentadbiran & undang-undang tidak ditakrifkan lagi','',''),
	array('','0400 Perniagaan, pentadbiran & undang-undang tidak ditakrifkan lagi','',''),
	array('','041 Perniagaan & pentadbiran','',''),
	array('','0410 Perniagaan & pentadbiran tidak ditakrifkan lagi','',''),
	array('','0411 Perakaunan & percukaian','',''),
	array('','0412 Kewangan, perbankan & insurans','',''),
	array('','0413 Pengurusan & pentadbiran','',''),
	array('','0414 Pemasaran & pengiklanan','',''),
	array('','0415 Kesetiausahaan & kerja pejabat','',''),
	array('','0416 Jualan borong & runcit','',''),
	array('','0417 Kemahiran kerja','',''),
	array('','0419 Perniagaan & pentadbiran tidak dikelaskan di tempat lain','',''),
	array('','042 Undang-undang [Law]','',''),
	array('','0421 Undang-undang [Law]','',''),
	array('','048 Program & kelayakan antara disiplin yang melibatkan perniagaan,'
	. ' pentadbiran & undang-undang','',''),
	array('','0488 Program & kelayakan antara disiplin yang melibatkan perniagaan,'
	. ' pentadbiran & undang-undang','',''),
	array('','049 Perniagaan, pentadbiran & undang-undang tidak dikelaskan di tempat lain','',''),
	array('','0499 Perniagaan, pentadbiran & undang-undang tidak dikelaskan di tempat lain','',''),
	array('','05 Sains semula jadi, matematik & statistik','',''),
	array('','050 Sains semula jadi, matematik & statistik tidak ditakrifkan lagi','',''),
	array('','0500 Sains semula jadi, matematik & statistik tidak ditakrifkan lagi','',''),
	array('','051 Biologi & sains berkaitan','',''),
	array('','0510 Sains biologi & berkaitan tidak ditakrifkan lagi','',''),
	array('','0511 Biologi','',''),
	array('','0512 Biokimia','',''),
	array('','0519 Sains biologi & berkaitan tidak dikelaskan di tempat lain','',''),
	array('','052 Persekitaran','',''),
	array('','0520 Persekitaran tidak ditakrifkan lagi','',''),
	array('','0521 Sains alam sekitar','',''),
	array('','0522 Persekitaran semula jadi & hidupan liar','',''),
	array('','0529 Persekitaran tidak dikelaskan di tempat lain','',''),
	array('','053 Sains fizik','',''),
	array('','0530 Sains fizikal tidak ditakrifkan lagi','',''),
	array('','0531 Kimia','',''),
	array('','0532 Sains bumi','',''),
	array('','0533 Fizik','',''),
	array('','0539 Sains fizikal tidak dikelaskan di tempat lain','',''),
	array('','054 Matematik & statistik','',''),
	array('','0540 Matematik & statistik tidak ditakrifkan lagi','',''),
	array('','0541 Matematik','',''),
	array('','0542 Statistik','',''),
	array('','058 Program & kelayakan antara disiplin yang melibatkan semula jadi'
	. ' sains, matematik & statistik','',''),
	array('','0588 Program & kelayakan antara disiplin yang melibatkan semula jadi'
	. ' sains, matematik & statistik','',''),
	array('','059 Sains semula jadi, matematik & statistik tidak dikelaskan di tempat lain','',''),
	array('','0599 Sains semula jadi, matematik & statistik tidak dikelaskan di tempat lain','',''),

	array('','06 Teknologi Maklumat & Komunikasi (ICT)','',''),
	array('','061 Teknologi Maklumat & Komunikasi (ICT)','',''),
	array('','0610 Teknologi Maklumat & Komunikasi (ICT) tidak ditakrifkan lagi','',''),
	array('','0611 Penggunaan komputer','',''),
	array('','0612 Reka bentuk & pentadbiran pangkalan data & rangkaian','',''),
	array('','0613 Pembangunan & analisis perisian & aplikasi','',''),
	array('','0619 Teknologi Maklumat & Komunikasi (ICT)'
	. ' tidak dikelaskan di tempat lain','',''),
	array('','068 Program & kelayakan antara disiplin yang melibatkan'
	. ' Teknologi Maklumat & Komunikasi (ICT)','',''),
	array('','0688 Program & kelayakan antara disiplin yang melibatkan'
	. ' Teknologi Maklumat & Komunikasi (ICT)','',''),
	array('','07 Kejuruteraan, pembuatan & pembinaan','',''),
	array('','070 Kejuruteraan, pembuatan & pembinaan tidak ditakrifkan lagi','',''),
	array('','0700 Kejuruteraan, pembuatan & pembinaan tidak ditakrifkan lagi','',''),
	array('','071 Kejuruteraan & perdagangan kejuruteraan','',''),
	array('','0710 Perdagangan kejuruteraan & kejuruteraan tidak ditakrifkan lagi','',''),
	array('','0711 Kejuruteraan kimia & proses','',''),
	array('','0712 Teknologi perlindungan alam sekitar','',''),
	array('','0713 Elektrik & tenaga','',''),
	array('','0714 Elektronik & automasi','',''),
	array('','0715 Mekanik & perdagangan logam','',''),
	array('','0716 Kenderaan bermotor, kapal & pesawat','',''),
	array('','0719 Perdagangan kejuruteraan & kejuruteraan tidak dikelaskan di tempat lain','',''),
	array('','072 Pembuatan & pemprosesan','',''),
	array('','0720 Pembuatan & pemprosesan tidak ditakrifkan lagi','',''),
	array('','0721 Pemprosesan makanan','',''),
	array('','0722 Bahan (kaca, kertas, plastik & kayu)','',''),
	array('','0723 Tekstil (pakaian, kasut & kulit)','',''),
	array('','0724 Perlombongan & pengekstrakan','',''),
	array('','0729 Pembuatan & pemprosesan tidak dikelaskan di tempat lain','',''),
	array('','073 Seni bina & pembinaan','',''),
	array('','0730 Seni bina & pembinaan tidak ditakrifkan lagi','',''),
	array('','0731 Seni bina & perancangan bandar','',''),
	array('','0732 Bangunan & kejuruteraan awam','',''),
	array('','078 Program & kelayakan antara disiplin yang melibatkan'
	. ' kejuruteraan, pembuatan & pembinaan',
	'0788 Program & kelayakan antara disiplin yang melibatkan'
	. ' kejuruteraan, pembuatan & pembinaan',''),
	array('','079 Kejuruteraan, pembuatan & pembinaan tidak dikelaskan di tempat lain ','',''),
	array('','0799 Kejuruteraan, pembuatan & pembinaan tidak dikelaskan di tempat lain','',''),
	array('','08 Pertanian, perhutanan, perikanan & veterinar','',''),
	array('','080 Pertanian, perhutanan, perikanan & veterinar tidak ditakrifkan lagi','',''),
	array('','0800 Pertanian, perhutanan, perikanan & veterinar tidak ditakrifkan lagi','',''),
	array('','081 Pertanian','',''),
	array('','0810 Pertanian tidak ditakrifkan lagi','',''),
	array('','0811 Pengeluaran tanaman & ternakan','',''),
	array('','0812 Hortikultur','',''),
	array('','0819 Pertanian tidak dikelaskan di tempat lain','',''),
	array('','082 Perhutanan','0821 Perhutanan',''),
	array('','083 Perikanan','0831 Perikanan',''),
	array('','084 Veterinar','0841 Veterinar',''),
	array('','088 Program & kelayakan antara disiplin yang melibatkan'
	. ' pertanian, perhutanan, perikanan & veterinar',
	'0888 Program & kelayakan antara disiplin yang melibatkan'
	. 'pertanian, perhutanan, perikanan & veterinar','',''),
	array('','089 Pertanian, perhutanan, perikanan & veterinar tidak dikelaskan di tempat lain',
	'0899 Pertanian, perhutanan, perikanan & veterinar tidak dikelaskan di tempat lain',''),
	array('','09 Kesihatan & kebajikan','',''),
	array('','090 Kesihatan & kebajikan tidak ditakrifkan lagi',
	'0900 Kesihatan & kebajikan tidak ditakrifkan lagi',''),
	array('','091 Kesihatan','',''),
	array('','0910 Kesihatan tidak ditakrifkan lagi','',''),
	array('','0911 Kajian pergigian','',''),
	array('','0912 Ubat','',''),
	array('','0913 Kejururawatan & perbidanan','',''),
	array('','0914 Teknologi diagnostik & rawatan perubatan','',''),
	array('','0915 Terapi & pemulihan','',''),
	array('','0916 Farmasi','',''),
	array('','0917 Perubatan & terapi tradisional & pelengkap','',''),
	array('','0919 Kesihatan tidak dikelaskan di tempat lain','',''),
	array('','092 Kebajikan','',''),
	array('','0920 Kebajikan tidak ditakrifkan lagi','',''),
	array('','0921 Penjagaan warga emas & OKU dewasa','',''),
	array('','0922 Perkhidmatan penjagaan kanak-kanak & belia','',''),
	array('','0923 Kerja sosial & kaunseling','',''),
	array('','0929 Kebajikan tidak dikelaskan di tempat lain','',''),
	array('','098 Program & kelayakan antara disiplin'
	. ' melibatkan kesihatan & kebajikan','',''),
	array('','0988 Program & kelayakan antara disiplin'
	. ' melibatkan kesihatan & kebajikan','',''),
	array('','099 Kesihatan & kebajikan tidak dikelaskan di tempat lain','',''),
	array('','0999 Kesihatan & kebajikan tidak dikelaskan di tempat lain','',''),
	array('','10 Perkhidmatan','',''),
	array('','100 Perkhidmatan tidak ditakrifkan lagi','',''),
	array('','1000 Perkhidmatan tidak ditakrifkan lagi','',''),
	array('','101 Perkhidmatan peribadi','',''),
	array('','1010 Perkhidmatan peribadi tidak ditakrifkan lagi','',''),
	array('','1011 Perkhidmatan domestik','',''),
	array('','1012 Rambut & perkhidmatan kecantikan','',''),
	array('','1013 Hotel, restoran & katering','',''),
	array('','1014 Sukan','',''),
	array('','1015 Perjalanan, pelancongan & riadah','',''),
	array('','1019 Perkhidmatan peribadi tidak dikelaskan di tempat lain','',''),
	array('','102 Perkhidmatan kebersihan & kesihatan pekerjaan','',''),
	array('','1020 Perkhidmatan kebersihan & kesihatan pekerjaan tidak ditakrifkan lagi','',''),
	array('','1021 Kebersihan komuniti','',''),
	array('','1022 Kesihatan & keselamatan pekerjaan','',''),
	array('','1029 Perkhidmatan kebersihan & kesihatan pekerjaan tidak dikelaskan'
	. 'di tempat lain','',''),
	array('','103 Perkhidmatan keselamatan','',''),
	array('','1030 Perkhidmatan keselamatan tidak ditakrifkan lagi','',''),
	array('','1031 Tentera & pertahanan','',''),
	array('','1032 Perlindungan orang & harta benda','',''),
	array('','1039 Perkhidmatan keselamatan tidak dikelaskan di tempat lain','',''),
	array('','104 Perkhidmatan pengangkutan','1041 Perkhidmatan pengangkutan','',''),
	array('','108 Program & kelayakan antara disiplin yang melibatkan perkhidmatan',
	'1088 Program & kelayakan antara disiplin yang melibatkan perkhidmatan',''),
	array('','109 Perkhidmatan tidak dikelaskan di tempat lain','',''),
	array('','1099 Perkhidmatan tidak dikelaskan di tempat lain','',''),
	array('','99 Bidang pengajian tidak diketahui','',''),
	array('','999 Bidang pengajian tidak diketahui','',''),
	array('','9999 Bidang pengajian tidak diketahui','',''),
);
#--------------------------------------------------------------------------------------------------
//Pengekodan Aktiviti Pekerjaan
$data['Aktiviti Pekerjaan'] = array(
	//array('','Industri (MSIC 2008) - Pengekodan Aktiviti Pekerjaan'),
	array('','01610 - Aktiviti membersihkan kebun tanaman seperti menebas, meracun rumput, mengumpul daun kering (tidak terlibat dengan pengeluaran tanaman di kebun tersebut)'),
	array('','01261/01262 - Aktiviti mengait/memotong buah kelapa sawit'),
	array('','01285 - Aktiviti penanaman pokok sireh'),
	array('','01631 - Aktiviti pengasingan biji pinang daripada kulitnya'),
	array('','02309 - Aktiviti pengumpulan air nira/daun pisang/pucuk paku/ ulam- ulaman'),
	array('','03115 - Aktiviti pemungutan telur penyu'),
	array('','03121 - Aktiviti penangkapan ikan di darat (sungai/pedalaman)'),
	array('','10202 - Aktiviti pengeluaran ikan masin/jeruk'),
	array('','10302 - Aktiviti pengeluaran santan kelapa'),
	array('','10306 - Aktiviti pengeluaran tempe/taucu daripada soya'),
	array('','10713 - Aktiviti pembuatan kuih karas/loyang/cakar ayam'),
	array('','10750 - Aktiviti pembuatan sate (memotong daging, merempah, memerap dan mencucuk di lidi)'),
	array('','10793 - Aktiviti pembuatan kuah rojak'),
	array('','10799 - Aktiviti pembuatan tapai'),
	array('','12000 - Aktiviti pembuatan rokok daripada daun nipah'),
	array('','13921 - Aktiviti pembuatan bantal kekabu'),
	array('','13940 - Aktiviti pembuatan guni/bakul daripada anyaman tali'),
	array('','13120 - Aktiviti penenunan songket'),
	array('','14109 - Aktiviti jahitan songkok/tudung'),
	array('','14103 - Aktiviti jahitan baju kurung/baju melayu lelaki'),
	array('','16230 - Aktiviti pembuatan kayu palet'),
	array('','16292 - Aktiviti pembuatan tikar mengkuang/bekas anyaman produk kayu'),
	array('','16292 - Aktiviti pembuatan penyapu lidi'),
	array('','16292 - Aktiviti pembuatan atap nipah'),
	array('','17094 - Aktiviti pembuatan kertas sembahyang kaum Cina'),
	array('','18110 - Aktiviti pengeluaran kad jemputan kahwin (termasuk rekaan grafik dan mencetak)'),
	array('','82196 - Aktiviti fotokopi (salinan dokumen)'),
	array('','21009 - Aktiviti pembuatan minyak untuk kegunaan perubatan tradisional daripada ekstrak tumbuhan'),
	array('','22203 - Aktiviti pengeluaran bekas plastik dengan tali rafia'),
	array('','32909 - Aktiviti pembuatan bunga tiruan (artificial flower)'),
	array('','32909 - Aktiviti pembuatan keranda (daripada kayu atau artikel lain)'),
	array('','37000 - Aktiviti pembentungan (Cth: Syarikat Indah Water Konsortium Sdn Bhd)'),
	array('','41002 - Aktiviti pembinaan reban ayam'),
	array('','43214 - Aktiviti perkhidmatan pemasangan piring ASTRO (tidak terlibat dengan penjualan perkhidmatan siaran ASTRO)'),
	array('','43224 - Aktiviti perkhidmatan pemasangan sistem paip kepada isi rumah'),
	array('','43909 - Aktiviti pemasangan papan iklan (tanpa perkhidmatan rekaan iklan dan percetakan iklan)'),
	array('','47114 - Aktiviti jualan runcit di Kedai 7 Eleven'),
	array('','47191 - Aktiviti jualan runcit gedung serbaneka (Cth: ISETAN, SOGO, METROJAYA, PARKSON)'),
	array('','47192 - Aktiviti jualan runcit gedung serbaneka dan pasar raya (Cth: JUSCO)'),
	array('','47193 - Aktiviti jualan runcit hypermarket (Cth: Mydin Hypermarket, TESCO, GIANT, AEON Big)'),
	array('','47595 - Aktiviti jual runcit barangan elektrik di lot kedai untuk kegunaan isi rumah (Cth: SenQ)'),
	array('','47591 - Aktiviti jual runcit perabot isi rumah untuk kegunaan isi rumah (Cth: Court Mammoth, Chan, etc)'),
	array('','47721 - Aktiviti jual runcit produk farmaseutikal (Cth: Guardian, Watsons)'),
	array('','47722 - Aktiviti jual runcit produk kosmetik, kelengkapan dandanan diri dan pewangi (Cth: AVON)'),
	array('','49110 - Aktiviti pengangkutan penumpang antara bandar melalui laluan rel (Cth: KTM Berhad, Jabatan Keretapi Negeri Sabah)'),
	array('','49223 - Aktiviti pengangkutan kanak-kanak sekolah'),
	array('','49224 - Aktiviti pengangkutan e-hailing'),
	array('','51101 - Aktiviti pengangkutan melalui udara (Cth: Malaysia Airlines, Air Asia)'),
	array('','52213 - Aktiviti perkhidmatan penyediaan meletak kenderaan (Cth: Metro Parking Sdn Bhd)'),
	array('','52221 - Operasi perkhidmatan pelabuhan dan limbungan (Cth: Penang Port Sdn. Bhd, Johor Port Bhd, Bintulu Port Sdn. Bhd, Pelabuhan Tanjung Pelapas Sdn. Bhd., Kuantan Port Consortium Sdn. Bhd'),
	array('','52232 - Aktiviti lapangan terbang dan kawalan trafik udara (Cth: Malaysia Airports Holdings Berhad)'),
	array('','56106 - Aktiviti gerai/warung penjaja makanan (Cth: jual pisang goreng, laksa, cendol, putu mayam dan lain-lain hidangan makanan bukan di lot restoran)'),
	array('','56107 - Aktiviti gerai/penjaja makanan di pasar tani dan pasar malam'),
	array('','56290 - Aktiviti menyediakan hidangan makanan di rumah sendiri yang ditempah oleh isi rumah lain atau pertubuhan'),
	array('','56301 - Aktiviti gerai/warung makan dengan kemudahan karaoke'),
	array('','56302 - Aktiviti kedai ‘kopitiam’'),
	array('','60100/60200 - Aktiviti di Radio Televisyen Malaysia (RTM)'),
	array('','84136 - Aktiviti di Jabatan Penyiaran Malaysia'),
	array('','63910 - Aktiviti agensi dan bilik berita (Cth: BERNAMA)'),
	array('','64193 - Aktiviti di Labuan Financial Services Authority (LFSA)'),
	array('','64195 - Aktiviti peruntukan modal dan kemudahan kredit bagi mempromosikan pembangunan dalam perindustrian, pertanian, komersil atau sektor ekonomi lain (Cth: TEKUN Nasional, Amanah Ikhtiar Malaysia)'),
	array('','65301 - Aktiviti di Kumpulan Wang Simpanan Pekerja (KWSP)'),
	array('','66221 - Aktiviti ejen insurans yang beroperasi sendiri'),
	array('','66124 - Aktiviti broker forex (foreign exchange)'),
	array('','88901 - Aktiviti kaunseling kredit dan pengurusan hutang konsumer'),
	array('','68101/68102 - Aktiviti pembangunan hartanah (Cth: SP Setia Bhd, IOI Properties Bhd, Glomac Bhd, Uda Holdings Bhd, Sunway City Bhd, etc)'),
	array('','68201 - Aktiviti ejen/broker hartanah'),
	array('','84112 - Aktiviti di Jabatan Penilaian & Perkhidmatan Harta'),
	array('','71103 - Aktiviti perkhidmatan juru ukur tanah'),
	array('','74904 - Aktiviti perkhidmatan juru ukur bahan'),
	array('','71101 - Aktiviti perkhidmatan pelukis pelan'),
	array('','71200 - Aktiviti di Pusat Pemeriksaan Kenderaan Berkomputer (PUSPAKOM)'),
	array('','73100 - Aktiviti melibatkan ciptaan dan rekaan iklan, perkhidmatan kreatif, perancangan dan pembelian media cetak/elektronik'),
	array('','77101 - Aktiviti penyewaan kereta (tanpa pemandu)'),
	array('','77102 - Aktiviti penyewaan lori/trak/treler (tanpa pemandu)'),
	array('','77293 - Aktiviti penyewaan set kemudahan karaoke, hiasan pelamin untuk majlis perkahwinan/cukur jambul'),
	array('','77291 - Aktiviti penyewaan set pakaian perkahwinan (pakaian, kasut, aksesori pakaian)'),
	array('','77299 - Aktiviti penyewaan kanopi/khemah, kerusi, meja, kipas, lampu untuk kegunaan majlis perkahwinan/keramaian'),
	array('','79110 - Aktiviti travel agency (Cth: Membawa jemaah haji)'),
	array('','81100 - Aktiviti gabungan pelbagai kemudahan (Cth: Radicare (M) Sdn. Bhd., Propel Berhad)'),
	array('','81210 - Aktiviti pembersihan/mengemas dari rumah ke rumah beroperasi sendiri'),
	array('','81296 - Aktiviti perkhidmatan cuci pinggan mangkuk untuk tujuan komersil'),
	array('','81300 - Aktiviti memotong rumput bagi pembersihan halaman rumah atau persekitaran awam'),
	array('','82301 - Aktiviti pengurusan konvensyen/pameran perdagangan (Cth: Putrajaya International Convention Center (PICC), Kuala Lumpur Convention Center (KLCC), Malaysia International Exhibition & Convention Centre (MIECC), Shah Alam Convention Centre (SACC), Sime Darby Convention Centre, Persada Johor International Convention Centre.'),
	array('','82920 - Aktiviti pembungkusan sebarang produk pembuatan yang beroperasi sendiri berdasarkan kontrak/yuran'),
	array('','52299 - Aktiviti pembungkusan sampingan untuk penghantaran muatan/pengangkutan yang beroperasi sendiri berdasarkan kontrak/yuran'),
	array('','82990 - Aktiviti runner (melakukan kerja untuk sokongan perniagaan seperti penghantaran surat/bi/bayaran, dll)'),
	array('','84111 - Aktiviti di Jabatan Perdana Menteri (JPM), Pejabat Setiausaha Kerajaan Negeri (SUK), Kementerian Kewangan'),
	array('','84112 - Aktiviti di Lembaga Hasil Dalam Negeri (LHDN)'),
	array('','64191 - Aktiviti di Bank Simpanan Nasional (BSN)'),
	array('','84131 - Aktiviti di Kastam Diraja Malaysia'),
	array('','84121 - Aktiviti di Kementerian Pendidikan Malaysia, Jabatan Pendidikan Negeri, Pejabat Pelajaran Daerah'),
	array('','84122 - Aktiviti di Kementerian Kesihatan Malaysia, Jabatan Kesihatan Negeri, Pejabat Kesihatan Daerah'),
	array('','84123 - Aktiviti di Kementerian Kesejahteraan Bandar, Perumahan & Kerajaan  Tempatan  Malaysia,  Kementerian  Wilayah Persekutuan, Majlis Perbandaran/Bandaraya, Pejabat Daerah'),
	array('','84124 - Aktiviti di Kementerian Belia & Sukan, Jabatan Belia & Sukan Negara, Majlis Sukan Negara, Jabatan Warisan Negara, Istana Budaya, Jabatan Kebudayaan & Kesenian Negara'),
	array('','84125 - Aktiviti di Jabatan Kemajuan Islam Malaysia, Jabatan Hal Ehwal Islam Negeri, Majlis Agama Islam Negeri'),
	array('','84126 - Aktiviti di Kementerian Pembangunan Wanita, Keluarga & Masyarakat (KPWKM), Jabatan Kebajikan Masyarakat (JKM), Lembaga Penduduk & Pembangunan Keluarga Negara (LPPKN)'),
	array('','84129 - Aktiviti pentadbiran kawasan setempat oleh Penghulu/Ketua Kampung/Tok Batin/Pemaju Mukim di mukim/kampung'),
	array('','88909 - Aktiviti kerja sosial/keselamatan masyarakat setempat/kampung (Cth: JKKK)'),
	array('','84131 - Aktiviti di Kementerian Perdagangan Dalam Negeri, Koperasi & Kepenggunaan (KPDNKK), Kementerian Perdagangan Antarabangsa & Industri (MITI)'),
	array('','84132 - Aktiviti di Kementerian Pertanian & Industri Asas Tani (MOA), Kementerian Perusahaan Perladangan & Komoditi (MPIC) dan Kementerian Kemajuan Luar Bandar dan Wilayah (KKLW)'),
	array('','84133 - Aktiviti di Kementerian Sumber Asli & Alam Sekitar (NRE) iaitu Jabatan Perhutanan, Jabatan Perlindungan Hidupan Liar & Taman Negara (PERHILITAN), Jabatan Alam Sekitar, Jabatan Mineral & Geosains, Jabatan Ketua Pengarah Tanah & Galian'),
	array('','84134 - Aktiviti di Kementerian Kerja Raya, Jabatan Pengairan & Saliran (JPS), Jabatan Ukur & Pemetaan (JUPEM)'),
	array('','84135 - Aktiviti di Kementerian Pengangkutan, Jabatan Pengangkutan Jalan (JPJ), Jabatan Penerbangan Awam (DCA), Jabatan Keselamatan Jalan Raya, Lembaga Pelabuhan Klang/Johor/Bintulu/Kuantan'),
	array('','84136 - Aktiviti di Kementerian Tenaga, Teknologi Hijau & Air (KETTHA), Kementerian Komunikasi & Multimedia Malaysia (KKMM)'),
	array('','84137 - Aktiviti di Kementerian Pelancongan Malaysia'),
	array('','84138 - Aktiviti di Kementerian Sumber Manusia'),
	array('','84220 - Aktiviti di Kementerian Pertahanan (MOD), Jabatan Latihan Khidmat Negara (JLKN)'),
	array('','84239 - Aktiviti di Agensi Antidadah Kebangsaan (AADK), Jabatan Pertahanan Awam (JPAM), Jabatan Pendaftaran Pertubuhan (ROS), Jabatan Sukarelawan Malaysia (RELA)'),
	array('','85221 - Aktiviti di Kolej Vokasional di bawah Kementerian Pendidikan Malaysia'),
	array('','85301 - Aktiviti di Kolej Komuniti dan Politeknik'),
	array('','85301 - Aktiviti di Institut Pendidikan Guru Malaysia'),
	array('','85493 - Aktiviti di Sekolah Agama Rakyat di bawah Kerajaan Negeri'),
	array('','85493 - Aktiviti pengajaran Al-Quran yang beroperasi di rumah sendiri atau pondok'),
	array('','85491 - Aktiviti pengajaran tuisyen yang beroperasi di rumah sendiri atau di rumah pelanggan'),
	array('','85411 - Aktiviti pengajaran sukan oleh guru atau jurulatih persendirian (renang, yoga, dll)'),
	array('','85499 - Aktiviti pendidikan keusahawanan'),
	array('','85500 - Aktiviti di Pusat Kegiatan Guru (yang berasingan daripada sekolah atau Pejabat Pendidikan)'),
	array('','85500 - Aktiviti di Lembaga Peperiksaan Malaysia, Institut Aminuddin Baki (IAB), Agensi Kelayakan Malaysia (MQA)'),
	array('','86201 - Aktiviti di Klinik Kesihatan Daerah di bawah Kementerian Kesihatan'),
	array('','86202 - Aktiviti di Klinik Pakar Kanak-Kanak, Klinik Pakar Wanita, Klinik Pakar Kulit yang dijalankan oleh agensi swasta'),
	array('','86909 - Aktiviti pengamal perubatan tradisional oleh bidan kampung atau tukang urut yang biasanya beroperasi secara sendiri'),
	array('','87909 - Aktiviti rumah/institusi masalah juvana'),
	array('','88109 - Aktiviti kerja sosial harian (tanpa penginapan) kepada orang-orang kurang upaya (Cth: Pusat Pemulihan Dalam Komuniti)'),
	array('','88902 - Aktiviti penjagaan harian bayi/kanak-kanak di rumah sendiri'),
	array('','91021 - Aktiviti muzium dan pameran sains & teknologi (Cth: Pusat Sains)'),
	array('','93111 - Aktiviti operasi kemudahan sukan futsal (dewan)'),
	array('','93118 - Aktiviti di fitness center (gym)'),
	array('','93120 - Aktiviti Persatuan Bola Sepak Malaysia (FAM), Persatuan Badminton Malaysia (BAM)'),
	array('','93296 - Aktiviti perkhidmatan persembahan tarian naga/singa oleh kaum Cina'),
	array('','94120 - Aktiviti dijalankan oleh Pertubuhan Arkitek Malaysia, Persatuan Jurutera Perunding Malaysia'),
	array('','94200 - Aktiviti dijalankan oleh Persatuan Nelayan setempat'),
	array('','94910 - Aktiviti di masjid/tokong/gereja seperti imam, bilal, nuja/siak, pastor/paderi, sami, dll'),
	array('','95111 - Aktiviti membaik pulih komputer kepada isi rumah oleh orang perseorangan'),
	array('','95221 - Aktiviti penyelenggaraan dan membaik pulih penghawa dingin bilik yang digunakan oleh isi rumah'),
	array('','96011 - Aktiviti perkhidmatan mencuci dan menggosok pakaian yang dijalankan dari rumah ke rumah'),
	array('','96032 - Aktiviti menggali kubur untuk pengebumian'),
	array('','96035 - Aktiviti membersihkan halaman kubur seperti menebas, mengumpul daun kering'),
	array('','96091 - Aktiviti pusat kecantikan seperti urutan refleksologi, sauna, mandian stim'),
	array('','96092 - Aktiviti ramalan dan tukang tilik'),
	array('','97000 - Aktiviti pembantu rumah yang bekerja dengan majikan isi rumah (termasuk amah, tukang kebun, pengawal peribadi)'),
);
#--------------------------------------------------------------------------------------------------
# masco msic
$data['mascoMsic'] = array(
	array('','1','PENGURUS','PASARAYA','1','112120','47112'),
	array('','4','PENIAGA','KATERING','4','141206','56210'),
	array('','3','PENGURUS','RUNCIT','3','142103','47111'),
	array('','4','PENIAGA AKSESORI KERETA','KEDAI AKSESORI KERETA','4','142103','45300'),
	array('','4','PENIAGA KEDAI','SEMBAHYAHNG CINA','4','142103','47735'),
	array('','4','PENGURUS PENCUCIAN','AKTIVITI PERKHIDMATAN LAIN T.T.T.L.','4','162202','96099'),
	array('','4','PENJUAL UBAT','JUAL UBAT','4','223101','47721'),
	array('','3','FARMASI','KESIHATAN','3','226205','47721'),
	array('','2','GURU','SEK. MEN','2','233102','85211'),
	array('','3','GURU','TASKA','3','234202','85101'),
	array('','3','GURU','TADIKA SWASTA','3','234202','85101'),
	array('','3','GURU','GURU PUSAT TUISYEN','3','239911','85491'),
	array('','3','JURUTERA MEKANIKAL','KILANG KITAR SEMULA','3','311507','38112'),
	array('','3','PENYELIA KILANG','KILANG PERABUT','3','312904','31001'),
	array('','3','PENYELIA STOR','KEDAI PERABUT','3','312906','47216'),
	array('','4','EJEN INSURAN','INSURAN AM','4','332101','65121'),
	array('','4','EKSEKUTIF RANTAIAN PEMBEKALAN','PENGELUAR PRODUK KIMIA','4','332213','20299'),
	array('','3','JURUTEKNIK','TM','3','352203','61101'),
	array('','5','KERANI','BENGKEL KERETA','5','411109','45201'),
	array('','3','KERANI','GUAMAN','3','411109','69100'),
	array('','3','KERANI AM','KEDAI BRG2 HARDWARE','3','411109','47520'),
	array('','3','KERANI','KILANG KAYU','3','411111','16230'),
	array('','3','KERANI','KILANG PERABUT','3','411111','31001'),
	array('','3','KERANI','KEDAI PERABOT','3','411111','47591'),
	array('','3','KERANI','PERABOT','3','411111','47591'),
	array('','3','KERANI','KILANG PERABOT','3','411111','31001'),
	array('','3','KERANI TIMBANGAN','JUAL BORONG SAWIT','3','432122','46202'),
	array('','3','KERANI PENGELUARAN','KEDAI PERCETAKAN','3','432201','18110'),
	array('','3','KERANI JUALAN','HIASAN DALAMAN','3','441906','74101'),
	array('','3','PEMANDU LORI DAA','PENGANGKUTAN MUATAN MELALUI JALAN RAYA','3','511302','49230'),
	array('','5','PEM. KATERING','KATERING','5','512110','56210'),
	array('','3','TUKANG GUNTING','RAMBUT','3','514103','96020'),
	array('','3','JURUSOLEK','SALON KECANTIKAN','3','514202','96020'),
	array('','4','PENIAGA','JUAL IKAN','4','521107','47215'),
	array('','4','PENJAJA MAKANAN','GERAI/PENJAJA MAKANAN','4','521201','56106'),
	array('','4','JUAL','BURGER','4','521202','56106'),
	array('','5','PEMBUAT KUIH','GERAI','5','521202','56106'),
	array('','4','PENIAGA','GERAI GORENG PISANG','4','521202','56106'),
	array('','4','PENIAGA KEDAI','KEDAI MAKAN','4','521202','56106'),
	array('','4','PENIAGA KEDAI MAKAN','KEDAI MAKAN & MINUM','4','521202','56106'),
	array('','3','PENYELIA','STESEN MINYAK','3','522201','47300'),
	array('','3','PENYELARAS JUALAN ','HOTEL','3','522202','55101'),
	array('','3','PENYELIA ','PASARAYA','3','522203','47112'),
	array('','3','OPERATOR','KILANG ROTI','3','522301','10712'),
	array('','5','KERANI','ANGKUT SAYUR','5','522302','49230'),
	array('','3','KERANI AM','KILANG PERABUT','3','522302','47216'),
	array('','4','KERANI AM','S. TELEMARKERTING','4','522302','73200'),
	array('','3','PEKERJA','PASARAYA','3','522302','47112'),
	array('','3','PEMBANTU KEDAI','KEDAI RUNCIT','3','522302','47111'),
	array('','3','PEMBANTU KEDAI','KEDAI KEK/MENJUAL KEK','3','522302','47216'),
	array('','3','PEMBANTU KEDAI','PASAR MINI','3','522302','47113'),
	array('','5','PEMBANTU KEDAI','KEDAI MAKAN','5','522302','56106'),
	array('','3','PEMBANTU KEDAI','RESTORAN','3','522302','56101'),
	array('','3','PEMBANTU KEDAI','KEDAI MAKAN','3','522302','56106'),
	array('','3','JURUJUAL','JUAL PAKAIAN','3','522303','47711'),
	array('','3','JURUJUAL','KEDAI JUAL KASUT','3','522303','47712'),
	array('','3','SALE EXEC','UMOBILE','3','522303','47413'),
	array('','3','ATENDAN PAM MINYAK','STESEN MINYAK','3','524501','47300'),
	array('','3','PEGAWAI KESELAMATAN','KAWALAN KESELAMATAN','3','541411','80100'),
	array('','4','PENANAM','KELAPA SAWIT','4','611104','01262'),
	array('','4','PEKEBUN KECIL','SAYUR','4','611301','01131'),
	array('','4','TUKANG RUMAH','BUAT RUMAH','4','711101','41001'),
	array('','4','CAT KERETA','BENGKEL','4','713203','45202'),
	array('','4','TUKANG BESI','KIMPALAN BESI','3','722102','24109'),
	array('','4','MEKANIK MOTOSIKAL','PEMBAIKAN DAN PENYELENGGARAAN MOTOSIKAL',
	'4','723105','45403'),
	array('','1','MEKANIK','BENGKEL KERETA','1','723106','45201'),
	array('','3','MEKANIK','BENGKEL KERETA','3','723106','45201'),
	array('','4','MEKANIK','BENGKEL KERETA','4','723106','45201'),
	array('','4','BUAT','KABINET','4','761202','43301'),
	array('','3','OPERATOR','KILANG PERABUT','3','761305','31001'),
	array('','3','PENJAHIT','KILANG PAKAIAN','3','762108','14102'),
	array('','3','OPERATOR','JUBIN','3','811407','23921'),
	array('','3','OPERATOR KILANG','KILANG PLASTIK','3','814209','22202'),
	array('','3','OPERATOR','KILANG KAIN','3','815201','13120'),
	array('','3','OPERATOR MESIN','KILANG BISKUT','3','816103','10711'),
	array('','3','OPERATOR','ELEKTRONIK','3','818911','26109'),
	array('','3','PENGHANTAR BARANG','JNT EXPRESS','3','832102','53200'),
	array('','4','PEMANDU','TEKSI','4','832204','49224'),
	array('','3','PEMANDU LORI','JUALAN RUNCIT BARANG ELEKTRIK DAN ELEKTRONIK TERPAKAI',
	'3','833201','47742'),
	array('','3','PEMANDU LORI','KEDAI PERABOT','3','833201','47591'),
	array('','3','PEMANDU LORI','TRANSPORT','3','833201','49230'),
	array('','3','PEMANDU LORI','HARDWARE','3','833201','46639'),
	array('','3','PEMANDU LORI','LADANG SAWIT','3','833201','01261'),
	array('','3','OPERATOR, JENGKAUT','PENGGALIAN LALUAN AIR','3','834210','42904'),
	array('','3','PENOREH GETAH','LADANG GETAH','3','921116','01291'),
	array('','3','PEMBERSIH KEBUN','KHIDMAT PEMBERSIHAN','3','921406','81300'),
	array('','2','PEMBANTU AM (PERKHIDMATAN AM) GRED 1','PENDIDIKAN SEKOLAH MENENGAH',
	'2','962203','85211'),
	array('','3','PEKERJA','PASARAYA','3','522302','47112'),
	array('','3','PEMBANTU','KEDAI MAKAN','3','522302','56106'),
	array('','3','OPERATOR MESIN','KILANG BISKUT','3','816103','10711'),
	array('','3','PEM KEDAI','MENJUAL KEK','3','522302','47216'),
	array('','4','TUKANG BESI','KIMPALAN BESI','3','722102','24109'),
	array('','3','PENGHANTAR CEPAT','KURIER/POSLAJU','3','832102','53200'),
	array('','3','PENGHANTAR CEPAT','RUNNER','3','832102','82990'),
	array('','3','OPERATOR MESIN','KILANG BISKUT','3','816103','10711'),
	array('','3','KERANI JUALAN','HIASAN DALAMAN','3','441906','74101'),
	array('','3','KERANI AM','KILANG PERABUT','3','522302','47216'),
	array('','3','PENYELARAS JUALAN ','HOTEL','3','522202','55101'),
	array('','3','PEMBANTU KEDAI','KEDAI KEK','3','522302','47216'),
	array('','3','KERANI PENGELUARAN','PHOTOSTAT','3','432201','82196'),
	array('','3','KERANI PENGELUARAN','KILANG CETAK','3','432201','18110'),
	array('','3','PENJAHIT','KILANG PAKAIAN','3','762108','14102'),
	array('','4','CAT KERETA','BENGKEL','4','713203','45202'),
	array('','3','OPERATOR KILANG','KILANG PAPAN','3','817201','16211'),
	array('','3','OPERATOR KILANG','KILANG PLASTIK','3','814209','22202'),
	array('','3','PENYELIA ','PASARAYA','3','522203','47112'),
	array('','4','PENOREH GETAH','GETAH BEKU','4','921106','01292'),
	array('','4','PEMANDU','TEKSI','4','832204','49224'),
	array('','3','PEMANDU LORI','KEDAI PERABOT','3','833201','47591'),
	array('','3','KERANI','KEDAI PERABOT','3','411111','47591'),
	array('','3','OPERATOR','ELEKTRONIK','3','818911','26109'),
	array('','3','FARMASI','KESIHATAN','3','226205','47721'),
	array('','3','JURUJUAL','JUAL PAKAIAN','3','522303','47711'),
	array('','3','JURUTERA MEKANIKAL','KILANG KITAR SEMULA','3','311507','38112'),
	array('','4','PEKEBUN KECIL','SAYUR','4','611301','01131'),
	array('','3','PENYELIA STOR','KILANG PERABUT','3','312906','31001'),
	array('','3','KERANI','KILANG PERABUT','3','411111','31001'),
	array('','3','KERANI','KILANG KAYU','3','411111','16230'),
	array('','4','JUAL MAKANAN','GERAI','4','521202','56106'),
	array('','5','PEMBANTU KEDAI','GERAI','5','522302','56106'),
	array('','4','BEKEBUN','KELAPA SAWIT','4','611104','01262'),
	array('','2','GURU SEKOLAH RENDAH','PENDIDIKAN RENDAH (AWAM)/'
	. 'SEKOLAH RENDAH KEBANGSAAN, SEK. KEB.','2','234102','85103'),
	array('','4','MEKANIK AUTOMOTIF/KERETA/KENDERAAN','BENGKEL KERETA/KENDERAAN',
	'4','723111','45201'),
	array('','4','JURUJUAL INTERNET / PENIAGA ONLINE','JUAL BARANG ONLINE','4','524409','47912'),
	array('','4','PENIAGA PASAR MALAM','JUAL TOPI/BEG/PAKAIAN','4','521101','47820'),
	array('','2','PEGAWAI POLIS','PERKHIDMATAN POLIS','2','371504','84231'),
	array('','3','PENGAWAL KESELAMATAN','JAGA BANGUNAN','3','541411','80100'),
	array('','4','PEKEDAI RUNCIT','KEDAI RUNCIT','4','522102','47111'),
	array('','3','PENGURUS BANK','BANK PERDADANGAN','3','161604','64191'),
	array('','3','EKSEKUTIF PEGAWAI BANK','BANK PERDADANGAN','3','241209','64191'),
	array('','3','KERANI BANK','BANK PERDADANGAN','3','421107','64191'),
	array('','3','OPERATOR PENGELUARAN','KILANG STMICROELECTRONICS','3','818907','26102'),
	// masco msic
);
#--------------------------------------------------------------------------------------------------
/*
2.2.5 Soalan G2 - Apakah pekerjaan biasa anda pada bulan lepas _____?
* Tapisan keempat: Soalan ini bagi menentukan status pekerjaan ahli isi rumah dalam bulan rujukan,
di mana pekerjaan tersebut merupakan pekerjaan biasa dalam bulan rujukan yang dilakukan
secara sepenuh masa.
Maklumat gaji & upah tidak dipungut bagi responden berikut:
a. majikan;
b. bekerja sendiri;
c. pekerja keluarga tanpa gaji;
d. pekerja domestik di isi rumah sebagai majikan seperti pembantu rumah, tukang kebun, pemandu
isi rumah persendirian dan jururawat persendirian;
e. pekerja sambilan seperti pelajar yang bekerja di restoran makanan segera dan menerima upah
mengikut jam bekerja;
f. seorang perantis yang menerima elaun dalam bulan rujukan;
g. sukarelawan SELAIN daripada JPAM, RELA dan Tentera Wataniah;
h. pekerja (kerajaan atau swasta) yang bercuti separuh gaji atau tanpa gaji dalam bulan rujukan,
walaupun akan kembali bekerja;
i. pekerja yang menerima gaji terlalu rendah daripada biasa. Contohnya, disebabkan berhenti kerja
dan tamat kontrak;
j. Pekerja Sambilan Harian (PSH) di sektor kerajaan; dan
k. pekerja kasual.
TINDAKAN :
Berikan kod seperti berikut:
Soalan G1 = 'Tidak' (kod 2) dan
G2 = 000001 - Majikan; 000004 - Bekerja sendiri;
000005 - Pekerja keluarga tanpa gaji; 000006 - Penganggur;
000007 - Suri rumah; 000008 - Pelajar; 000009 - Pesara; dan
000010 - Lain-lain (Nyatakan).
Kod ini termasuk jenis responden (d) hingga (k).
TAMATKAN temuramah bagi ahli isi rumah ini.
*/
$data['Gaji G2'] = array(
	array('','000001','000001 – Majikan'),
	array('','000004','000004 – Bekerja sendiri'),
	array('','000005','000005 – Pekerja keluarga tanpa gaji'),
	array('','000006','000006 – Penganggur'),
	array('','000007','000007 – Suri rumah'),
	array('','000008','000008 – Pelajar'),
	array('','000009','000009 – Pesara'),
	array('','000010','000010 – Lain-lain (Nyatakan)')
);
#--------------------------------------------------------------------------------------------------
/*
2.2.8 : Soalan G5
* Soalan ini hanya perlu dijawab bagi responden yang menyatakan bahawa
  bayaran yang diterima adalah mengikut piece rate.
* Soalan G5(a) - Bilangan yang dihasilkan pada bulan lepas.
* Soalan G5(b) - Sila nyatakan unit yang digunakan.
* Catatkan bilangan piece rate yang dihasilkan pada bulan rujukan di ruangan G5(a).
* Nyatakan unit yang digunakan (G5b) dan kodkan sebagai:
*/
$data['Bil Piece Rate'] = array(
	array('','01','01 - batang'),
	array('','02','02 - keping'),
	array('','03','03 - tan'),
	array('','04','04 - kilogram'),
	array('','05','05 - ikat'),
	array('','06','06 - bundle'),
	array('','07','07 - trip'),
	array('','08','08 - biji'),
	array('','09','09 - kotak'),
	array('','10','10 - helai'),
	array('','11','11 - pasang'),
	array('','12','12 - guni'),
	array('','13','13 - lain-lain'),
);
#--------------------------------------------------------------------------------------------------
// kod bandar
$data['bandar'] = array(
	array('','Johor (Kod Negeri: 01)','',''),
	array('','01 - Johor','01 - Batu Pahat','001 - Bandar Penggaram'),
	array('','01 - Johor','01 - Batu Pahat','002 - Bandar Penggaram t-bina'),
	array('','01 - Johor','01 - Batu Pahat','003 - Yong Peng'),
	array('','01 - Johor','01 - Batu Pahat','004 - Yong Peng t-bina'),
	array('','01 - Johor','01 - Batu Pahat','005 - Tongkang Pechah'),
	array('','01 - Johor','01 - Batu Pahat','006 - Tongkang Pechah t-bina'),
	array('','01 - Johor','01 - Batu Pahat','007 - Parit Raja'),
	array('','01 - Johor','01 - Batu Pahat','008 - Parit Raja t-bina'),
	array('','01 - Johor','01 - Batu Pahat','058 - Kluang t-bina'),
	array('','01 - Johor','02 - Johor Bahru','009 - Pasir Gudang'),
	array('','01 - Johor','02 - Johor Bahru','010 - Pasir Gudang t-bina'),
	array('','01 - Johor','02 - Johor Bahru','011 - Ulu Tiram'),
	array('','01 - Johor','02 - Johor Bahru','012 - Ulu Tiram t-bina'),
	array('','01 - Johor','02 - Johor Bahru','013 - Johor Bahru'),
	array('','01 - Johor','02 - Johor Bahru','014 - Johor Bahru t-bina'),
	array('','01 - Johor','02 - Johor Bahru','015 - Gelang Patah'),
	array('','01 - Johor','02 - Johor Bahru','016 - Gelang Patah t-bina'),
	array('','01 - Johor','02 - Johor Bahru','017 - Kangkar Pulai (Sebahagian)'),
	array('','01 - Johor','02 - Johor Bahru','018 - Kangkar Pulai t-bina'),
	array('','01 - Johor','02 - Johor Bahru','019 - Skudai'),
	array('','01 - Johor','02 - Johor Bahru','020 - Skudai t-bina'),
	array('','01 - Johor','02 - Johor Bahru','021 - Ulu Choh (Sebahagian)'),
	array('','01 - Johor','02 - Johor Bahru','022 - Ulu Choh t-bina'),
	array('','01 - Johor','02 - Johor Bahru','059 - Lima Kedai'),
	array('','01 - Johor','02 - Johor Bahru','060 - Lima Kedai t-bina'),
	array('','01 - Johor','03 - Kluang','023 - Kluang'),
	array('','01 - Johor','03 - Kluang','024 - Kluang t-bina'),
	array('','01 - Johor','03 - Kluang','025 - Simpang Renggam'),
	array('','01 - Johor','03 - Kluang','026 - Simpang Renggam t-bina'),
	array('','01 - Johor','04 - Kota Tinggi','027 - Kota Tinggi'),
	array('','01 - Johor','04 - Kota Tinggi','028 - Kota Tinggi t-bina'),
	array('','01 - Johor','04 - Kota Tinggi','029 - Bandar Tenggara'),
	array('','01 - Johor','05 - Mersing','030 - Mersing'),
	array('','01 - Johor','05 - Mersing','031 - Mersing t-bina'),
	array('','01 - Johor','06 - Muar','032 - Bukit Bakri'),
	array('','01 - Johor','06 - Muar','033 - Bukit Bakri t-bina'),
	array('','01 - Johor','06 - Muar','034 - Bandar Maharani (Sebahagian)'),
	array('','01 - Johor','06 - Muar','035 - Bandar Maharani t-bina'),
	array('','01 - Johor','07 - Pontian','036 - Pontian Kechil'),
	array('','01 - Johor','07 - Pontian','037 - Pontian Kechil t-bina'),
	array('','01 - Johor','07 - Pontian','038 - Pekan Nenas'),
	array('','01 - Johor','07 - Pontian','039 - Pekan Nenas t-bina'),
	array('','01 - Johor','08 - Segamat','040 - Labis'),
	array('','01 - Johor','08 - Segamat','041 - Labis t-bina'),
	array('','01 - Johor','08 - Segamat','044 - Segamat'),
	array('','01 - Johor','08 - Segamat','045 - Segamat t-bina'),
	array('','01 - Johor','08 - Segamat','046 - Buloh Kasap'),
	array('','01 - Johor','08 - Segamat','047 - Buloh Kasap t-bina'),
	array('','01 - Johor','09 - Kulaijaya','048 - Kelapa Sawit'),
	array('','01 - Johor','09 - Kulaijaya','049 - Kelapa Sawit t-bina'),
	array('','01 - Johor','09 - Kulaijaya','050 - Kulai'),
	array('','01 - Johor','09 - Kulaijaya','051 - Kulai t-bina'),
	array('','01 - Johor','09 - Kulaijaya','052 - Senai'),
	array('','01 - Johor','09 - Kulaijaya','053 - Senai t-bina'),
	array('','01 - Johor','09 - Kulaijaya','061 - Kangkar Pulai (Sebahagian)'),
	array('','01 - Johor','09 - Kulaijaya','062 - Ulu Choh (Sebahagian)'),
	array('','01 - Johor','09 - Kulaijaya','063 - Skudai t-bina'),
	array('','01 - Johor','10 - Ledang','054 - Bandar Maharani (Sebahagian)'),
	array('','01 - Johor','10 - Ledang','055 - Bandar Maharani t-bina'),
	array('','01 - Johor','10 - Ledang','056 - Tangkak'),
	array('','01 - Johor','10 - Ledang','057 - Tangkak t-bina'),
	array('','01 - Johor','10 - Ledang','064 - Bukit Gambir'),
	array('','01 - Johor','10 - Ledang','065 - Bukit Gambir t-bina'),
	array('','Kedah (Kod Negeri: 02)','-','-'),
	array('','02 - Kedah','01 - Baling','101 - Baling'),
	array('','02 - Kedah','01 - Baling','102 - Baling t-bina'),
	array('','02 - Kedah','01 - Baling','102 - Kupang'),
	array('','02 - Kedah','01 - Baling','143 - Kupang t-bina'),
	array('','02 - Kedah','01 - Baling','102 - Pulai'),
	array('','02 - Kedah','01 - Baling','102 - Simpang Empat'),
	array('','02 - Kedah','01 - Baling','103 - Kuala Ketil'),
	array('','02 - Kedah','01 - Baling','104 - Kuala Ketil t-bina'),
	array('','02 - Kedah','02 - Bandar Baharu','105 - Serdang'),
	array('','02 - Kedah','02 - Bandar Baharu','106 - Serdang t-bina'),
	array('','02 - Kedah','03 - Kota Setar','107 - Alor Setar'),
	array('','02 - Kedah','03 - Kota Setar','108 - Alor Setar t-bina'),
	array('','02 - Kedah','03 - Kota Setar','108 - Anak Bukit'),
	array('','02 - Kedah','03 - Kota Setar','108 - Langgar'),
	array('','02 - Kedah','03 - Kota Setar','109 - Kuala Kedah'),
	array('','02 - Kedah','03 - Kota Setar','110 - Kuala Kedah t-bina'),
	array('','02 - Kedah','04 - Kuala Muda','111 - Bedong'),
	array('','02 - Kedah','04 - Kuala Muda','112 - Bedong t-bina'),
	array('','02 - Kedah','04 - Kuala Muda','113 - Sungai Petani'),
	array('','02 - Kedah','04 - Kuala Muda','114 - Sungai Petani t-bina'),
	array('','02 - Kedah','04 - Kuala Muda','115 - Gurun'),
	array('','02 - Kedah','04 - Kuala Muda','116 - Gurun t-bina'),
	array('','02 - Kedah','04 - Kuala Muda','117 - Merbok'),
	array('','02 - Kedah','04 - Kuala Muda','118 - Merbok t-bina'),
	array('','02 - Kedah','04 - Kuala Muda','119 - Tikam Batu'),
	array('','02 - Kedah','04 - Kuala Muda','120 - Tikam Batu t-bina'),
	array('','02 - Kedah','05 - Kubang Pasu','121 - Jitra'),
	array('','02 - Kedah','05 - Kubang Pasu','122 - Jitra t-bina'),
	array('','02 - Kedah','05 - Kubang Pasu','141 - Changlun'),
	array('','02 - Kedah','05 - Kubang Pasu','142 - Changlun t-bina'),
	array('','02 - Kedah','06 - Kulim','123 - Kulim'),
	array('','02 - Kedah','06 - Kulim','124 - Kulim t-bina'),
	array('','02 - Kedah','06 - Kulim','124 - Lunas'),
	array('','02 - Kedah','06 - Kulim','124 - Sungai Seluang'),
	array('','02 - Kedah','06 - Kulim','125 - Padang Serai'),
	array('','02 - Kedah','06 - Kulim','126 - Padang Serai t-bina'),
	array('','02 - Kedah','06 - Kulim','127 - Sungai Karangan'),
	array('','02 - Kedah','06 - Kulim','128 - Sungai Karangan t-bina'),
	array('','02 - Kedah','06 - Kulim','129 - Sungai Kob'),
	array('','02 - Kedah','06 - Kulim','130 - Sungai Kob t-bina'),
	array('','02 - Kedah','07 - Langkawi','131 - Kuah'),
	array('','02 - Kedah','07 - Langkawi','132 - Kuah t-bina'),
	array('','02 - Kedah','10 - Yan','133 - Pekan Yan'),
	array('','02 - Kedah','10 - Yan','134 - Pekan Yan t-bina'),
	array('','02 - Kedah','10 - Yan','135 - Guar Cempedak'),
	array('','02 - Kedah','10 - Yan','136 - Guar chempedak t-bina'),
	array('','02 - Kedah','11 - Pendang','137 - Pendang'),
	array('','02 - Kedah','11 - Pendang','138 - Pendang t-bina'),
	array('','02 - Kedah','12 - Pokok Sena','139 - Pokok Sena'),
	array('','02 - Kedah','12 - Pokok Sena','140 - Pokok Sena t-bina'),
	array('','Kelantan (Kod Negeri: 03)','-','-'),
	array('','03 - Kelantan','02 - Kota Bharu','150 - Kadok'),
	array('','03 - Kelantan','02 - Kota Bharu','151 - Kadok t-bina'),
	array('','03 - Kelantan','02 - Kota Bharu','152 - Kota Bharu'),
	array('','03 - Kelantan','02 - Kota Bharu','153 - Kota Bharu t-bina'),
	array('','03 - Kelantan','02 - Kota Bharu','154 - Mulong'),
	array('','03 - Kelantan','02 - Kota Bharu','155 - Mulong t-bina'),
	array('','03 - Kelantan','02 - Kota Bharu','156 - Pangkal Kalong'),
	array('','03 - Kelantan','02 - Kota Bharu','157 - Kubang Kerian'),
	array('','03 - Kelantan','02 - Kota Bharu','158 - Peringat'),
	array('','03 - Kelantan','02 - Kota Bharu','159 - Peringat t-bina'),
	array('','03 - Kelantan','03 - Machang','160 - Machang'),
	array('','03 - Kelantan','03 - Machang','161 - Machang t-bina'),
	array('','03 - Kelantan','04 - Pasir Mas','162 - Pasir Mas'),
	array('','03 - Kelantan','04 - Pasir Mas','163 - Pasir Mas t-bina'),
	array('','03 - Kelantan','05 - Pasir Puteh','164 - Pasir Puteh'),
	array('','03 - Kelantan','05 - Pasir Puteh','165 - Pasir Puteh t-bina'),
	array('','03 - Kelantan','06 - Tanah Merah','166 - Tanah Merah'),
	array('','03 - Kelantan','06 - Tanah Merah','167 - Tanah Merah t-bina'),
	array('','03 - Kelantan','07 - Tumpat','168 - Tumpat'),
	array('','03 - Kelantan','07 - Tumpat','169 - Tumpat t-bina'),
	array('','03 - Kelantan','07 - Tumpat','170 - Wakaf Baharu'),
	array('','03 - Kelantan','07 - Tumpat','171 - Wakaf Baharu t-bina'),
	array('','03 - Kelantan','08 - Gua Musang','172 - Gua Musang'),
	array('','03 - Kelantan','08 - Gua Musang','173 - Gua Musang t-bina'),
	array('','03 - Kelantan','09 - Kuala Krai','174 - Kuala Krai & Guchil'),
	array('','03 - Kelantan','09 - Kuala Krai','175 - Kuala Krai & Guchil t-bina'),
	array('','Melaka (Kod Negeri: 04)','-','-'),
	array('','04 - Melaka','01 - Alor Gajah','180 - Alor Gajah'),
	array('','04 - Melaka','01 - Alor Gajah','181 - Alor Gajah t-bina'),
	array('','04 - Melaka','01 - Alor Gajah','182 - Durian Tunggal'),
	array('','04 - Melaka','01 - Alor Gajah','183 - Durian Tunggal t-bina'),
	array('','04 - Melaka','01 - Alor Gajah','184 - Kuala Sungai Baru'),
	array('','04 - Melaka','01 - Alor Gajah','185 - Kuala Sungai Baru t-bina'),
	array('','04 - Melaka','01 - Alor Gajah','186 - Masjid Tanah'),
	array('','04 - Melaka','01 - Alor Gajah','187 - Masjid Tanah t-bina'),
	array('','04 - Melaka','01 - Alor Gajah','188 - Pulau Sebang'),
	array('','04 - Melaka','01 - Alor Gajah','189 - Pulau Sebang t-bina'),
	array('','04 - Melaka','02 - Jasin','190 - Bemban'),
	array('','04 - Melaka','02 - Jasin','191 - Bemban t-bina'),
	array('','04 - Melaka','02 - Jasin','192 - Jasin'),
	array('','04 - Melaka','02 - Jasin','193 - Jasin t-bina'),
	array('','04 - Melaka','02 - Jasin','194 - Merlimau'),
	array('','04 - Melaka','02 - Jasin','195 - Merlimau t-bina'),
	array('','04 - Melaka','03 - Melaka Tengah','196 - Ayer Keroh'),
	array('','04 - Melaka','03 - Melaka Tengah','197 - Ayer Keroh t-bina'),
	array('','04 - Melaka','03 - Melaka Tengah','198 - Ayer Molek'),
	array('','04 - Melaka','03 - Melaka Tengah','199 - Ayer Molek t-bina'),
	array('','04 - Melaka','03 - Melaka Tengah','200 - Bukit Baru'),
	array('','04 - Melaka','03 - Melaka Tengah','201 - Bukit Baru t-bina'),
	array('','04 - Melaka','03 - Melaka Tengah','202 - Bukit Rambai'),
	array('','04 - Melaka','03 - Melaka Tengah','203 - Bukit Rambai t-bina'),
	array('','04 - Melaka','03 - Melaka Tengah','204 - Batu Berendam'),
	array('','04 - Melaka','03 - Melaka Tengah','205 - Batu Berendam t-bina'),
	array('','04 - Melaka','03 - Melaka Tengah','205 - Paya Rumput'),
	array('','04 - Melaka','03 - Melaka Tengah','206 - Klebang'),
	array('','04 - Melaka','03 - Melaka Tengah','207 - Klebang t-bina'),
	array('','04 - Melaka','03 - Melaka Tengah','207 - Tanjong Kling'),
	array('','04 - Melaka','03 - Melaka Tengah','208 - Melaka'),
	array('','04 - Melaka','03 - Melaka Tengah','209 - Melaka t-bina'),
	array('','04 - Melaka','03 - Melaka Tengah','209 - Kandang'),
	array('','04 - Melaka','03 - Melaka Tengah','210 - Sungai Udang'),
	array('','04 - Melaka','03 - Melaka Tengah','211 - Sungai Udang t-bina'),
	array('','04 - Melaka','03 - Melaka Tengah','212 - Tangga Batu'),
	array('','04 - Melaka','03 - Melaka Tengah','213 - Tangga Batu t-bina'),
	array('','Negeri Sembilan (Kod Negeri: 05)','-','-'),
	array('','05 - Negeri Sembilan','02 - Kuala Pilah','230 - Kuala Pilah'),
	array('','05 - Negeri Sembilan','02 - Kuala Pilah','231 - Kuala Pilah t-bina'),
	array('','05 - Negeri Sembilan','03 - Port Dickson','232 - Lukut'),
	array('','05 - Negeri Sembilan','03 - Port Dickson','233 - Lukut t-bina'),
	array('','05 - Negeri Sembilan','03 - Port Dickson','234 - Port Dickson'),
	array('','05 - Negeri Sembilan','03 - Port Dickson','235 - Port Dickson t-bina'),
	array('','05 - Negeri Sembilan','05 - Seremban','236 - Batang Benar'),
	array('','05 - Negeri Sembilan','05 - Seremban','237 - Batang Benar t-bina'),
	array('','05 - Negeri Sembilan','05 - Seremban','238 - Mantin'),
	array('','05 - Negeri Sembilan','05 - Seremban','239 - Mantin t-bina'),
	array('','05 - Negeri Sembilan','05 - Seremban','240 - Nilai'),
	array('','05 - Negeri Sembilan','05 - Seremban','241 - Nilai t-bina'),
	array('','05 - Negeri Sembilan','05 - Seremban','242 - Rantau'),
	array('','05 - Negeri Sembilan','05 - Seremban','243 - Rantau t-bina'),
	array('','05 - Negeri Sembilan','05 - Seremban','244 - Seremban'),
	array('','05 - Negeri Sembilan','05 - Seremban','245 - Seremban t-bina'),
	array('','05 - Negeri Sembilan','05 - Seremban','246 - Mambau'),
	array('','05 - Negeri Sembilan','05 - Seremban','247 - Paroi'),
	array('','05 - Negeri Sembilan','05 - Seremban','248 - Rahang'),
	array('','05 - Negeri Sembilan','05 - Seremban','249 - Rasah'),
	array('','05 - Negeri Sembilan','05 - Seremban','250 - Sikamat'),
	array('','05 - Negeri Sembilan','06 - Tampin','251 - Gemas'),
	array('','05 - Negeri Sembilan','06 - Tampin','252 - Gemas t-bina'),
	array('','05 - Negeri Sembilan','06 - Tampin','253 - Tampin'),
	array('','05 - Negeri Sembilan','06 - Tampin','254 - Tampin t-bina'),
	array('','05 - Negeri Sembilan','07 - Jempol','255 - Bahau'),
	array('','05 - Negeri Sembilan','07 - Jempol','256 - Bahau t-bina'),
	array('','Pahang (Kod Negeri: 06)','-','-'),
	array('','06 - Pahang','01 - Bentong','270 - Bukit Tinggi'),
	array('','06 - Pahang','01 - Bentong','271 - Bukit Tinggi t-bina'),
	array('','06 - Pahang','01 - Bentong','272 - Karak'),
	array('','06 - Pahang','01 - Bentong','273 - Karak t-bina'),
	array('','06 - Pahang','01 - Bentong','274 - Bentong'),
	array('','06 - Pahang','01 - Bentong','275 - Bentong t-bina'),
	array('','06 - Pahang','02 - Cameron Highlands','295 - Tanah Rata'),
	array('','06 - Pahang','02 - Cameron Highlands','296 - Tanah Rata t-bina'),
	array('','06 - Pahang','03 - Jerantut','276 - Jerantut'),
	array('','06 - Pahang','03 - Jerantut','277 - Jerantut t-bina'),
	array('','06 - Pahang','04 - Kuantan','278 - Kuantan'),
	array('','06 - Pahang','04 - Kuantan','279 - Kuantan t-bina'),
	array('','06 - Pahang','04 - Kuantan','280 - Beserah'),
	array('','06 - Pahang','04 - Kuantan','281 - Gambang'),
	array('','06 - Pahang','04 - Kuantan','282 - Tanjong Lumpur'),
	array('','06 - Pahang','05 - Lipis','283 - Kuala Lipis'),
	array('','06 - Pahang','05 - Lipis','284 - Kuala Lipis t-bina'),
	array('','06 - Pahang','06 - Pekan','285 - Pekan'),
	array('','06 - Pahang','06 - Pekan','286 - Pekan t-bina'),
	array('','06 - Pahang','07 - Raub','287 - Raub'),
	array('','06 - Pahang','07 - Raub','288 - Raub t-bina'),
	array('','06 - Pahang','08 - Temerloh','289 - Mentakab'),
	array('','06 - Pahang','08 - Temerloh','290 - Mentakab t-bina'),
	array('','06 - Pahang','08 - Temerloh','291 - Temerloh'),
	array('','06 - Pahang','08 - Temerloh','292 - Temerloh t-bina'),
	array('','06 - Pahang','09 - Rompin','293 - Muadzam Shah'),
	array('','06 - Pahang','10 - Maran','294 - Bandar Pusat Jengka'),
	array('','06 - Pahang','11 - Bera','297 - Triang'),
	array('','06 - Pahang','11 - Bera','298 - Triang t-bina'),
	array('','Pulau Pinang (Kod Negeri: 07)','-','-'),
	array('','07 - Pulau Pinang','01 - Seberang Perai Tengah','310 - Bukit Mertajam'),
	array('','07 - Pulau Pinang','01 - Seberang Perai Tengah','311 - Bukit Mertajam t-bina'),
	array('','07 - Pulau Pinang','01 - Seberang Perai Tengah','311 - Berapit'),
	array('','07 - Pulau Pinang','01 - Seberang Perai Tengah','311 - Machang Bubok'),
	array('','07 - Pulau Pinang','01 - Seberang Perai Tengah','311 - Permatang Pauh'),
	array('','07 - Pulau Pinang','01 - Seberang Perai Tengah','311 - Permatang Tinggi'),
	array('','07 - Pulau Pinang','01 - Seberang Perai Tengah','311 - Pertama'),
	array('','07 - Pulau Pinang','01 - Seberang Perai Tengah','311 - Spg. 4 Bukit Tengah'),
	array('','07 - Pulau Pinang','01 - Seberang Perai Tengah','312 - Perai'),
	array('','07 - Pulau Pinang','01 - Seberang Perai Tengah','313 - Perai t-bina'),
	array('','07 - Pulau Pinang','01 - Seberang Perai Tengah','314 - Juru'),
	array('','07 - Pulau Pinang','01 - Seberang Perai Tengah','315 - Juru t-bina'),
	array('','07 - Pulau Pinang','01 - Seberang Perai Tengah','316 - Kubang Semang'),
	array('','07 - Pulau Pinang','01 - Seberang Perai Tengah','317 - Kubang Semang t-bina'),
	array('','07 - Pulau Pinang','02 - Seberang Perai Utara','318 - Butterworth'),
	array('','07 - Pulau Pinang','02 - Seberang Perai Utara','319 - Butterworth t-bina'),
	array('','07 - Pulau Pinang','02 - Seberang Perai Utara','319 - Sungai Dua'),
	array('','07 - Pulau Pinang','02 - Seberang Perai Utara','319 - Sungai Puyu'),
	array('','07 - Pulau Pinang','02 - Seberang Perai Utara','320 - Permatang Kuching'),
	array('','07 - Pulau Pinang','02 - Seberang Perai Utara','321 - Permatang Kuching t-bina'),
	array('','07 - Pulau Pinang','02 - Seberang Perai Utara','321 - Telok Air Tawar'),
	array('','07 - Pulau Pinang','02 - Seberang Perai Utara','322 - Kepala Batas'),
	array('','07 - Pulau Pinang','02 - Seberang Perai Utara','323 - Kepala Batas t-bina'),
	array('','07 - Pulau Pinang','02 - Seberang Perai Utara','324 - Tasek Gelugor'),
	array('','07 - Pulau Pinang','02 - Seberang Perai Utara','340 - Tasek Gelugor t-bina'),
	array('','07 - Pulau Pinang','03 - Seberang Perai Selatan','325 - Nibong Tebal'),
	array('','07 - Pulau Pinang','03 - Seberang Perai Selatan','326 - Nibong Tebal t-bina'),
	array('','07 - Pulau Pinang','03 - Seberang Perai Selatan','326 - Permatang Keling'),
	array('','07 - Pulau Pinang','03 - Seberang Perai Selatan','326 - Permatang To` Mahat'),
	array('','07 - Pulau Pinang','03 - Seberang Perai Selatan','327 - Val D`or'),
	array('','07 - Pulau Pinang','03 - Seberang Perai Selatan','328 - Val D`or t-bina'),
	array('','07 - Pulau Pinang','03 - Seberang Perai Selatan','328 - Jawi'),
	array('','07 - Pulau Pinang','03 - Seberang Perai Selatan','328 - Sungai Bakap'),
	array('','07 - Pulau Pinang','04 - Timur Laut','329 - Ayer Itam'),
	array('','07 - Pulau Pinang','04 - Timur Laut','330 - Ayer Itam t-bina'),
	array('','07 - Pulau Pinang','04 - Timur Laut','331 - Georgetown'),
	array('','07 - Pulau Pinang','04 - Timur Laut','332 - Tg. Bunga'),
	array('','07 - Pulau Pinang','04 - Timur Laut','333 - Tg. Bunga t-bina'),
	array('','07 - Pulau Pinang','04 - Timur Laut','333 - Batu Feringgi'),
	array('','07 - Pulau Pinang','04 - Timur Laut','334 - Gelugor'),
	array('','07 - Pulau Pinang','04 - Timur Laut','335 - Gelugor t-bina'),
	array('','07 - Pulau Pinang','04 - Timur Laut','335 - Sungai Nibong'),
	array('','07 - Pulau Pinang','04 - Timur Laut','336 - Tg. Tokong'),
	array('','07 - Pulau Pinang','04 - Timur Laut','337 - Tg. Tokong t-bina'),
	array('','07 - Pulau Pinang','05 - Barat Daya','335 - Sungai Nibong'),
	array('','07 - Pulau Pinang','05 - Barat Daya','338 - Sungai Ara'),
	array('','07 - Pulau Pinang','05 - Barat Daya','339 - Sungai Ara t-bina'),
	array('','07 - Pulau Pinang','05 - Barat Daya','339 - Telok Kumbar'),
	array('','Perak (Kod Negeri: 08)','-','-'),
	array('','08 - Perak','01 - Batang Padang','350 - Tanjung Malim'),
	array('','08 - Perak','01 - Batang Padang','351 - Tanjung Malim t-bina'),
	array('','08 - Perak','01 - Batang Padang','351 - Behrang Stesen'),
	array('','08 - Perak','01 - Batang Padang','352 - Tapah'),
	array('','08 - Perak','01 - Batang Padang','353 - Banir'),
	array('','08 - Perak','01 - Batang Padang','353 - Bukit Pagar'),
	array('','08 - Perak','01 - Batang Padang','353 - Chenderiang'),
	array('','08 - Perak','01 - Batang Padang','353 - Tapah Road'),
	array('','08 - Perak','01 - Batang Padang','353 - Tapah t-bina'),
	array('','08 - Perak','01 - Batang Padang','353 - Temoh'),
	array('','08 - Perak','01 - Batang Padang','353 - Temoh Stesen'),
	array('','08 - Perak','01 - Batang Padang','354 - Bidor'),
	array('','08 - Perak','01 - Batang Padang','355 - Bidor Stesen'),
	array('','08 - Perak','01 - Batang Padang','355 - Bidor t-bina'),
	array('','08 - Perak','01 - Batang Padang','355 - Kg. Coldstream'),
	array('','08 - Perak','01 - Batang Padang','355 - Sungkai'),
	array('','08 - Perak','02 - Manjung','356 - Ayer Tawar'),
	array('','08 - Perak','02 - Manjung','357 - Ayer Tawar t-bina'),
	array('','08 - Perak','02 - Manjung','357 - Kampong Jering'),
	array('','08 - Perak','02 - Manjung','358 - Manjung'),
	array('','08 - Perak','02 - Manjung','358 - Kampong Koh'),
	array('','08 - Perak','02 - Manjung','359 - Kampong Koh t-bina'),
	array('','08 - Perak','02 - Manjung','359 - Batu Lapan Lekir'),
	array('','08 - Perak','02 - Manjung','359 - Kampong China'),
	array('','08 - Perak','02 - Manjung','359 - Kg. Pasir Panjang Laut'),
	array('','08 - Perak','02 - Manjung','359 - Kg. Simpang Lima'),
	array('','08 - Perak','02 - Manjung','359 - Pekan Gurney'),
	array('','08 - Perak','02 - Manjung','359 - Simpang Dua'),
	array('','08 - Perak','02 - Manjung','360 - Lumut'),
	array('','08 - Perak','02 - Manjung','361 - Lumut t-bina'),
	array('','08 - Perak','02 - Manjung','362 - Pantai Remis'),
	array('','08 - Perak','02 - Manjung','363 - Pantai Remis t-bina'),
	array('','08 - Perak','02 - Manjung','363 - Pengkalan Bharu'),
	array('','08 - Perak','02 - Manjung','363 - Sungai Batu'),
	array('','08 - Perak','02 - Manjung','364 - Simpang Empat'),
	array('','08 - Perak','02 - Manjung','365 - Simpang Empat t-bina'),
	array('','08 - Perak','03 - Kinta','366 - Chemor'),
	array('','08 - Perak','03 - Kinta','367 - Jelapang'),
	array('','08 - Perak','03 - Kinta','368 - Lahat'),
	array('','08 - Perak','03 - Kinta','369 - Ipoh'),
	array('','08 - Perak','03 - Kinta','370 - Ipoh t-bina'),
	array('','08 - Perak','03 - Kinta','370 - Papan'),
	array('','08 - Perak','03 - Kinta','371 - Simpang Pulai'),
	array('','08 - Perak','03 - Kinta','372 - Sungai Raya'),
	array('','08 - Perak','03 - Kinta','373 - Tambun'),
	array('','08 - Perak','03 - Kinta','374 - Tanjung Rambutan'),
	array('','08 - Perak','03 - Kinta','375 - Batu Gajah'),
	array('','08 - Perak','03 - Kinta','376 - Batu Gajah t-bina'),
	array('','08 - Perak','03 - Kinta','376 - Kg. Perpaduan'),
	array('','08 - Perak','03 - Kinta','376 - Pusing & Gunong Hijau'),
	array('','08 - Perak','04 - Kerian','377 - Bagan Serai'),
	array('','08 - Perak','04 - Kerian','378 - Bagan Serai t-bina'),
	array('','08 - Perak','04 - Kerian','378 - Sungai Bogak'),
	array('','08 - Perak','04 - Kerian','379 - Parit Buntar'),
	array('','08 - Perak','04 - Kerian','380 - Parit Buntar t-bina'),
	array('','08 - Perak','04 - Kerian','380 - Simpang 3'),
	array('','08 - Perak','04 - Kerian','380 - Simpang 4 (Mukim Parit Buntar)'),
	array('','08 - Perak','04 - Kerian','380 - Simpang 5'),
	array('','08 - Perak','04 - Kerian','380 - Titi Serong'),
	array('','08 - Perak','04 - Kerian','381 - PondokTanjong (Sebahagian)'),
	array('','08 - Perak','05 - Kuala Kangsar','382 - Kuala Kangsar'),
	array('','08 - Perak','05 - Kuala Kangsar','383 - Kuala Kangsar t-bina'),
	array('','08 - Perak','05 - Kuala Kangsar','383 - Jerlun'),
	array('','08 - Perak','05 - Kuala Kangsar','384 - Sg. Siput Utara'),
	array('','08 - Perak','05 - Kuala Kangsar','385 - Sg. Siput Utara t-bina'),
	array('','08 - Perak','05 - Kuala Kangsar','385 - Rimba Panjang'),
	array('','08 - Perak','05 - Kuala Kangsar','385 - Simpang Jalong'),
	array('','08 - Perak','06 - Larut & Matang','386 - Aulong'),
	array('','08 - Perak','06 - Larut & Matang','387 - Ayer Terjun'),
	array('','08 - Perak','06 - Larut & Matang','388 - Batu Kurau'),
	array('','08 - Perak','06 - Larut & Matang','389 - Changkat Jering'),
	array('','08 - Perak','06 - Larut & Matang','390 - Jelai'),
	array('','08 - Perak','06 - Larut & Matang','391 - Jelutong'),
	array('','08 - Perak','06 - Larut & Matang','392 - Kampong Pinang'),
	array('','08 - Perak','06 - Larut & Matang','393 - Kuala Sepetang'),
	array('','08 - Perak','06 - Larut & Matang','394 - Matang'),
	array('','08 - Perak','06 - Larut & Matang','395 - Padang Gajah'),
	array('','08 - Perak','06 - Larut & Matang','396 - Pokok Assam'),
	array('','08 - Perak','06 - Larut & Matang','397 - Pondok Tanjong (Sebahagian)'),
	array('','08 - Perak','06 - Larut & Matang','398 - Simpang'),
	array('','08 - Perak','06 - Larut & Matang','399 - Sungai Rotan'),
	array('','08 - Perak','06 - Larut & Matang','400 - Taiping'),
	array('','08 - Perak','06 - Larut & Matang','401 - Pekan Temerlok'),
	array('','08 - Perak','06 - Larut & Matang','402 - Terong'),
	array('','08 - Perak','06 - Larut & Matang','403 - Ulu Sepetang'),
	array('','08 - Perak','07 - Hilir Perak','404 - Hutan Melintang'),
	array('','08 - Perak','07 - Hilir Perak','405 - Hutan Melintang t-bina'),
	array('','08 - Perak','07 - Hilir Perak','406 - Teluk Intan'),
	array('','08 - Perak','07 - Hilir Perak','407 - Teluk Intan t-bina'),
	array('','08 - Perak','07 - Hilir Perak','407 - Batak Rabit'),
	array('','08 - Perak','07 - Hilir Perak','408 - Langkap'),
	array('','08 - Perak','07 - Hilir Perak','409 - Langkap t-bina'),
	array('','08 - Perak','09 - Perak Tengah','410 - Seri Iskandar'),
	array('','08 - Perak','09 - Perak Tengah','411 - Seri Iskandar t-bina'),
	array('','08 - Perak','10 - Kampar','412 - Gopeng'),
	array('','08 - Perak','10 - Kampar','413 - Gopeng t-bina'),
	array('','08 - Perak','10 - Kampar','413 - Kopisan Baharu'),
	array('','08 - Perak','10 - Kampar','413 - Lawan Kuda Baharu'),
	array('','08 - Perak','10 - Kampar','414 - Kampar'),
	array('','08 - Perak','10 - Kampar','415 - Kampar t-bina'),
	array('','08 - Perak','10 - Kampar','415 - Jeram'),
	array('','08 - Perak','10 - Kampar','415 - Kuala Dipang'),
	array('','08 - Perak','10 - Kampar','415 - Malim Nawar'),
	array('','08 - Perak','10 - Kampar','415 - Mambang Di-Awan'),
	array('','Perlis (Kod Negeri: 09)','-','-'),
	array('','09 - Perlis','01 - Kangar','440 - Kangar'),
	array('','09 - Perlis','01 - Kangar','441 - Kangar t-bina'),
	array('','09 - Perlis','01 - Kangar','442 - Kuala Perlis'),
	array('','09 - Perlis','01 - Kangar','443 - Kuala Perlis t-bina'),
	array('','Selangor (Kod Negeri: 10)','-','-'),
	array('','10 - Selangor','01 - Gombak','460 - Ampang/Ulu Kelang'),
	array('','10 - Selangor','01 - Gombak','461 - Ampang/Ulu Kelang t-bina'),
	array('','10 - Selangor','01 - Gombak','462 - Batu Arang'),
	array('','10 - Selangor','01 - Gombak','463 - Batu Arang t-bina'),
	array('','10 - Selangor','01 - Gombak','464 - Gombak Setia/ Tmn.Perwira'),
	array('','10 - Selangor','01 - Gombak','465 - Gombak Setia/ Tmn.Perwira t-bina'),
	array('','10 - Selangor','01 - Gombak','466 - Rawang'),
	array('','10 - Selangor','01 - Gombak','467 - Kg. Baru Rawang'),
	array('','10 - Selangor','01 - Gombak','467 - Rawang t-bina'),
	array('','10 - Selangor','01 - Gombak','468 - Kuang'),
	array('','10 - Selangor','01 - Gombak','469 - Kuang t-bina'),
	array('','10 - Selangor','01 - Gombak','470 - Pengkalan Kundang'),
	array('','10 - Selangor','01 - Gombak','471 - Pengkalan Kundang t-bina'),
	array('','10 - Selangor','01 - Gombak','472 - Selayang Baru'),
	array('','10 - Selangor','01 - Gombak','473 - Selayang Baru t-bina'),
	array('','10 - Selangor','01 - Gombak','473 - Batu Caves (sebahagian)'),
	array('','10 - Selangor','01 - Gombak','474 - Tmn.Greenwood/ Tmn. Gombak'),
	array('','10 - Selangor','01 - Gombak','475 - Tmn.Greenwood/ Tmn. Gombak t-bina'),
	array('','10 - Selangor','02 - Klang','476 - Klang'),
	array('','10 - Selangor','02 - Klang','477 - Klang t-bina'),
	array('','10 - Selangor','02 - Klang','478 - Kapar'),
	array('','10 - Selangor','02 - Klang','479 - Meru'),
	array('','10 - Selangor','03 - Kuala Langat','480 - Banting'),
	array('','10 - Selangor','03 - Kuala Langat','481 - Banting t-bina'),
	array('','10 - Selangor','03 - Kuala Langat','481 - Sg. Manggis'),
	array('','10 - Selangor','03 - Kuala Langat','481 - Telok Datok'),
	array('','10 - Selangor','03 - Kuala Langat','482 - Jenjarom'),
	array('','10 - Selangor','03 - Kuala Langat','483 - Jenjarom t-bina'),
	array('','10 - Selangor','03 - Kuala Langat','484 - Telok Panglima Garang'),
	array('','10 - Selangor','03 - Kuala Langat','485 - Telok Panglima Garang t-bina'),
	array('','10 - Selangor','03 - Kuala Langat','550 - Bandar Saujana Putra'),
	array('','10 - Selangor','04 - Kuala Selangor','486 - Batang Berjuntai'),
	array('','10 - Selangor','04 - Kuala Selangor','487 - Batang Berjuntai t-bina'),
	array('','10 - Selangor','04 - Kuala Selangor','488 - Kuala Selangor'),
	array('','10 - Selangor','04 - Kuala Selangor','489 - Kuala Selangor t-bina'),
	array('','10 - Selangor','04 - Kuala Selangor','489 - Assam Jawa'),
	array('','10 - Selangor','04 - Kuala Selangor','489 - Kuala Sg. Buluh'),
	array('','10 - Selangor','04 - Kuala Selangor','489 - Pasir Penambang'),
	array('','10 - Selangor','04 - Kuala Selangor','490 - Bandar Saujana Utama'),
	array('','10 - Selangor','04 - Kuala Selangor','491 - Bandar Puncak Alam'),
	array('','10 - Selangor','04 - Kuala Selangor','494 - Tanjong Karang'),
	array('','10 - Selangor','04 - Kuala Selangor','495 - Tanjong Karang t-bina'),
	array('','10 - Selangor','05 - Petaling','496 - Bandar Petaling Jaya'),
	array('','10 - Selangor','05 - Petaling','497 - Bandar Petaling Jaya t-bina'),
	array('','10 - Selangor','05 - Petaling','497 - Kg. Cempaka'),
	array('','10 - Selangor','05 - Petaling','498 - Kg. Sungai Penchala (Sebahagian)'),
	array('','10 - Selangor','05 - Petaling','499 - Sg. Way Subang'),
	array('','10 - Selangor','05 - Petaling','500 - Seri Setia'),
	array('','10 - Selangor','05 - Petaling','501 - Shah Alam'),
	array('','10 - Selangor','05 - Petaling','502 - Shah Alam t-bina'),
	array('','10 - Selangor','05 - Petaling','502 - Batu Tiga'),
	array('','10 - Selangor','05 - Petaling','502 - Kg. Melayu Kebun Bunga'),
	array('','10 - Selangor','05 - Petaling','503 - Kg. Baru Sg. Buloh'),
	array('','10 - Selangor','05 - Petaling','504 - Kg. Baru Sg. Buloh t-bina'),
	array('','10 - Selangor','05 - Petaling','504 - Pekan Sg.Buloh'),
	array('','10 - Selangor','05 - Petaling','505 - Subang/ Kg.Baru Subang/ Kg.Melayu'),
	array('','10 - Selangor','05 - Petaling','506 - Subang/ Kg.Baru Subang/ Kg.Melayu t-bina'),
	array('','10 - Selangor','05 - Petaling','507 - Kg. Baru Puchong'),
	array('','10 - Selangor','05 - Petaling','508 - Kg. Baru Puchong t-bina'),
	array('','10 - Selangor','05 - Petaling','508 - Puchong Bt. 12'),
	array('','10 - Selangor','05 - Petaling','509 - Kuchai'),
	array('','10 - Selangor','05 - Petaling','510 - Kuchai t-bina'),
	array('','10 - Selangor','05 - Petaling','511 - Seri Kembangan'),
	array('','10 - Selangor','05 - Petaling','512 - Seri Kembangan t-bina'),
	array('','10 - Selangor','05 - Petaling','512 - Serdang Lama'),
	array('','10 - Selangor','05 - Petaling','513 - Subang Jaya'),
	array('','10 - Selangor','05 - Petaling','514 - Subang Jaya t-bina'),
	array('','10 - Selangor','06 - Sabak Bernam','515 - Sekinchan'),
	array('','10 - Selangor','06 - Sabak Bernam','516 - Sungai Besar'),
	array('','10 - Selangor','07 - Sepang','517 - Dengkil'),
	array('','10 - Selangor','07 - Sepang','518 - Dengkil t-bina'),
	array('','10 - Selangor','07 - Sepang','519 - Bandar Baru Salak Tinggi'),
	array('','10 - Selangor','07 - Sepang','520 - Cyberjaya'),
	array('','10 - Selangor','07 - Sepang','521 - Cyberjaya t-bina'),
	array('','10 - Selangor','07 - Sepang','522 - Seri Kembangan t-bina'),
	array('','10 - Selangor','08 - Hulu Langat','526 - Ampang'),
	array('','10 - Selangor','08 - Hulu Langat','527 - Ampang t-bina'),
	array('','10 - Selangor','08 - Hulu Langat','527 - Lembah Jaya'),
	array('','10 - Selangor','08 - Hulu Langat','527 - Yayasan Mara'),
	array('','10 - Selangor','08 - Hulu Langat','528 - Kg. Pandan Dalam'),
	array('','10 - Selangor','08 - Hulu Langat','529 - Kg. Pandan Dalam t-bina'),
	array('','10 - Selangor','08 - Hulu Langat','530 - Balakong'),
	array('','10 - Selangor','08 - Hulu Langat','531 - Balakong t-bina'),
	array('','10 - Selangor','08 - Hulu Langat','532 - Kajang & Sg. Chua'),
	array('','10 - Selangor','08 - Hulu Langat','533 - Kajang & Sg. Chua t-bina'),
	array('','10 - Selangor','08 - Hulu Langat','533 - Bangi'),
	array('','10 - Selangor','08 - Hulu Langat','533 - Bukit Angkat'),
	array('','10 - Selangor','08 - Hulu Langat','533 - Taman Mesra'),
	array('','10 - Selangor','08 - Hulu Langat','534 - Beranang'),
	array('','10 - Selangor','08 - Hulu Langat','535 - Beranang t-bina'),
	array('','10 - Selangor','08 - Hulu Langat','536 - Bt.9 Cheras/ Sg.Raya/ Tmn. Suntex'),
	array('','10 - Selangor','08 - Hulu Langat','537 - Bt.9 Cheras/ Sg.Raya/ Tmn. Suntex t-bina'),
	array('','10 - Selangor','08 - Hulu Langat','537 - Bt.11 Cheras'),
	array('','10 - Selangor','08 - Hulu Langat','537 - Hulu Langat'),
	array('','10 - Selangor','08 - Hulu Langat','538 - Semenyih'),
	array('','10 - Selangor','08 - Hulu Langat','539 - Semenyih t-bina'),
	array('','10 - Selangor','08 - Hulu Langat','540 - Tarun (Broga)'),
	array('','10 - Selangor','08 - Hulu Langat','541 - Tarun (Broga) t-bina'),
	array('','10 - Selangor','09 - Hulu Selangor','542 - Bukit Beruntung'),
	array('','10 - Selangor','09 - Hulu Selangor','543 - Kuala Kubu Baru'),
	array('','10 - Selangor','09 - Hulu Selangor','544 - Serendah'),
	array('','10 - Selangor','09 - Hulu Selangor','545 - Serendah t-bina'),
	array('','10 - Selangor','09 - Hulu Selangor','547 - Batang Kali'),
	array('','10 - Selangor','09 - Hulu Selangor','548 - Batang Kali t-bina'),
	array('','10 - Selangor','09 - Hulu Selangor','549 - Rasa'),
	array('','Terengganu (Kod Negeri: 11)','-','-'),
	array('','11 - Terengganu','01 - Besut','561 - Jerteh'),
	array('','11 - Terengganu','01 - Besut','562 - Jerteh t-bina'),
	array('','11 - Terengganu','01 - Besut','563 - Kuala Besut'),
	array('','11 - Terengganu','01 - Besut','564 - Kuala Besut t-bina'),
	array('','11 - Terengganu','02 - Dungun','565 - Dungun'),
	array('','11 - Terengganu','02 - Dungun','566 - Dungun t-bina'),
	array('','11 - Terengganu','02 - Dungun','567 - Paka'),
	array('','11 - Terengganu','02 - Dungun','568 - Paka t-bina'),
	array('','11 - Terengganu','03 - Kemaman','569 - Chukai'),
	array('','11 - Terengganu','03 - Kemaman','570 - Chukai t-bina'),
	array('','11 - Terengganu','03 - Kemaman','571 - Kerteh'),
	array('','11 - Terengganu','03 - Kemaman','572 - Kerteh t-bina'),
	array('','11 - Terengganu','03 - Kemaman','572 - Kemasik (Kerteh t-bina)'),
	array('','11 - Terengganu','04 - Kuala Terengganu','573 - Batu Enam'),
	array('','11 - Terengganu','04 - Kuala Terengganu','574 - Batu Rakit & Mengabang Telipot'),
	array('','11 - Terengganu','04 - Kuala Terengganu','575 - Cenering'),
	array('','11 - Terengganu','04 - Kuala Terengganu','576 - Kuala Terengganu Tengah'),
	array('','11 - Terengganu','04 - Kuala Terengganu','577 - Kuala Terengganu'),
	array('','11 - Terengganu','04 - Kuala Terengganu','578 - Kuala Terengganu t-bina'),
	array('','11 - Terengganu','04 - Kuala Terengganu','579 - Manir'),
	array('','11 - Terengganu','04 - Kuala Terengganu','580 - Seberang Takir'),
	array('','11 - Terengganu','04 - Kuala Terengganu','581 - Tepoh'),
	array('','11 - Terengganu','05 - Marang','582 - Bukit Payong'),
	array('','11 - Terengganu','05 - Marang','583 - Bukit Payong t-bina'),
	array('','11 - Terengganu','05 - Marang','584 - Marang'),
	array('','11 - Terengganu','05 - Marang','585 - Marang t-bina'),
	array('','Sabah (Kod Negeri: 12)','-','-'),
	array('','12 - Sabah','01 - Tawau','610 - Tawau'),
	array('','12 - Sabah','01 - Tawau','611 - Tawau t-bina'),
	array('','12 - Sabah','02 - Lahad Datu','612 - Lahad Datu'),
	array('','12 - Sabah','02 - Lahad Datu','613 - Lahad Datu t-bina'),
	array('','12 - Sabah','03 - Semporna','614 - Semporna'),
	array('','12 - Sabah','03 - Semporna','615 - Semporna t-bina'),
	array('','12 - Sabah','04 - Sandakan','616 - Sandakan'),
	array('','12 - Sabah','04 - Sandakan','617 - Sandakan t-bina'),
	array('','12 - Sabah','05 - Kinabatangan','618 - Kota Kinabatangan'),
	array('','12 - Sabah','05 - Kinabatangan','619 - Kota Kinabatangan t-bina'),
	array('','12 - Sabah','06 - Beluran','620 - Beluran'),
	array('','12 - Sabah','06 - Beluran','621 - Beluran t-bina'),
	array('','12 - Sabah','07 - Kota Kinabalu','622 - Kota Kinabalu'),
	array('','12 - Sabah','07 - Kota Kinabalu','623 - Kota Kinabalu t-bina'),
	array('','12 - Sabah','07 - Kota Kinabalu','650 - Inanam'),
	array('','12 - Sabah','07 - Kota Kinabalu','652 - Menggatal'),
	array('','12 - Sabah','08 - Ranau','624 - Ranau'),
	array('','12 - Sabah','08 - Ranau','625 - Ranau t- bina'),
	array('','12 - Sabah','09 - Kota Belud','626 - Kota Belud'),
	array('','12 - Sabah','09 - Kota Belud','627 - Kota Belud t-bina'),
	array('','12 - Sabah','10 - Tuaran','628 - Tuaran'),
	array('','12 - Sabah','10 - Tuaran','629 - Tuaran t-bina'),
	array('','12 - Sabah','11 - Penampang','630 - Donggongon'),
	array('','12 - Sabah','11 - Penampang','631 - Donggongon t-bina'),
	array('','12 - Sabah','11 - Penampang','631 - Kasigui'),
	array('','12 - Sabah','11 - Penampang','651 - Kepayan'),
	array('','12 - Sabah','12 - Papar','632 - Kinarut'),
	array('','12 - Sabah','12 - Papar','633 - Kinarut t-bina'),
	array('','12 - Sabah','12 - Papar','634 - Papar'),
	array('','12 - Sabah','12 - Papar','635 - Papar t-bina'),
	array('','12 - Sabah','13 - Kudat','636 - Kudat'),
	array('','12 - Sabah','13 - Kudat','637 - Kudat t-bina'),
	array('','12 - Sabah','14 - Kota Marudu','638 - Kota Marudu'),
	array('','12 - Sabah','14 - Kota Marudu','639 - Kota Marudu t-bina'),
	array('','12 - Sabah','16 - Beaufort','640 - Beaufort'),
	array('','12 - Sabah','16 - Beaufort','641 - Beaufort t-bina'),
	array('','12 - Sabah','18 - Sipitang','642 - Sipitang'),
	array('','12 - Sabah','18 - Sipitang','643 - Sipitang t-bina'),
	array('','12 - Sabah','21 - Keningau','644 - Keningau'),
	array('','12 - Sabah','21 - Keningau','645 - Keningau t-bina'),
	array('','12 - Sabah','23 - Kunak','646 - Kunak'),
	array('','12 - Sabah','23 - Kunak','647 - Kunak t-bina'),
	array('','12 - Sabah','25 - Putatan','648 - Putatan'),
	array('','12 - Sabah','25 - Putatan','649 - Putatan t-bina'),
	array('','Sarawak (Kod Negeri: 13)','-','-'),
	array('','13 - Sarawak','01 - Kuching','660 - Bandaraya Kuching Utara'),
	array('','13 - Sarawak','01 - Kuching','661 - Bandaraya Kuching Utara t- bina'),
	array('','13 - Sarawak','01 - Kuching','662 - Bandaraya Kuching Selatan'),
	array('','13 - Sarawak','01 - Kuching','663 - Bandaraya Kuching Selatan t-bina'),
	array('','13 - Sarawak','01 - Kuching','664 - Batu Kawa Bazaar'),
	array('','13 - Sarawak','01 - Kuching','664 - Bt. Kitang Bazaar'),
	array('','13 - Sarawak','01 - Kuching','664 - Kota Padawan'),
	array('','13 - Sarawak','01 - Kuching','664 - Kota Sentosa'),
	array('','13 - Sarawak','01 - Kuching','664 - Sg. Maong Bazaar'),
	array('','13 - Sarawak','01 - Kuching','689 - Siburan Bazaar'),
	array('','13 - Sarawak','01 - Kuching','690 - Siburan Bazaar t-bina'),
	array('','13 - Sarawak','04 - Samarahan','665 - Batu 8 Bazaar'),
	array('','13 - Sarawak','04 - Samarahan','666 - Batu 8 Bazaar t-bina'),
	array('','13 - Sarawak','04 - Samarahan','667 - Kota Samarahan Townland'),
	array('','13 - Sarawak','04 - Samarahan','668 - Kota Samarahan Townland t-bina'),
	array('','13 - Sarawak','05 - Serian','669 - Serian Townland'),
	array('','13 - Sarawak','05 - Serian','670 - Serian Townland t-bina'),
	array('','13 - Sarawak','07 - Sri Aman','671 - Sri Aman Townland'),
	array('','13 - Sarawak','07 - Sri Aman','672 - Sri Aman Townland t-bina'),
	array('','13 - Sarawak','11 - Sarikei','673 - Sarikei Townland'),
	array('','13 - Sarawak','11 - Sarikei','674 - Sarikei Townland t-bina'),
	array('','13 - Sarawak','12 - Maradong','691 - Bintangor Townland'),
	array('','13 - Sarawak','12 - Maradong','692 - Bintangor Townland t-bina'),
	array('','13 - Sarawak','15 - Sibu','675 - Sibu'),
	array('','13 - Sarawak','15 - Sibu','676 - Sibu t-bina'),
	array('','13 - Sarawak','15 - Sibu','677 - Taman Bandar Sibu Baru'),
	array('','13 - Sarawak','17 - Mukah','678 - Mukah Townland'),
	array('','13 - Sarawak','17 - Mukah','679 - Mukah Townland t-bina'),
	array('','13 - Sarawak','19 - Bintulu','680 - Bintulu Townland'),
	array('','13 - Sarawak','19 - Bintulu','681 - Bintulu Townland t-bina'),
	array('','13 - Sarawak','21 - Kapit','682 - Kapit Townland'),
	array('','13 - Sarawak','21 - Kapit','683 - Kapit Townland t-bina'),
	array('','13 - Sarawak','24 - Miri','684 - Kuala Baram Bazaar'),
	array('','13 - Sarawak','24 - Miri','685 - Miri Townland'),
	array('','13 - Sarawak','24 - Miri','686 - Miri Townland t-bina'),
	array('','13 - Sarawak','24 - Miri','686 - Lambir Bazaar'),
	array('','13 - Sarawak','26 - Limbang','687 - Limbang Townland'),
	array('','13 - Sarawak','26 - Limbang','688 - Limbang Townland t-bina'),
	array('','Wilayah Persekutuan Kuala Lumpur (Kod Negeri: 14)','-','-'),
	array('','14 - Kuala Lumpur','01 - Kuala Lumpur','695 - Batu Caves (Sebahagian)'),
	array('','14 - Kuala Lumpur','01 - Kuala Lumpur','695 - Jinjang'),
	array('','14 - Kuala Lumpur','01 - Kuala Lumpur','695 - Kampung Batu'),
	array('','14 - Kuala Lumpur','01 - Kuala Lumpur','695 - Kampung Kepong'),
	array('','14 - Kuala Lumpur','01 - Kuala Lumpur','695 - Kg. Sg. Penchala (Sebahagian)'),
	array('','14 - Kuala Lumpur','01 - Kuala Lumpur','695 - Kuala Lumpur'),
	array('','14 - Kuala Lumpur','01 - Kuala Lumpur','695 - Salak Selatan'),
	array('','14 - Kuala Lumpur','01 - Kuala Lumpur','695 - Sungai Besi'),
	array('','Wilayah Persekutuan Labuan (Kod Negeri: 15)','-','-'),
	array('','15 - Labuan','01 - Labuan','700 - Labuan'),
	array('','15 - Labuan','01 - Labuan','701 - Labuan t-bina'),
	array('','Wilayah Persekutuan Putrajaya (Kod Negeri: 16)','-','-'),
	array('','16 - Putrajaya','01 - Putrajaya','710 - Putrajaya'),
);
#--------------------------------------------------------------------------------------------------
// https://www.jpn.gov.my/kod-negeri
$data['KodNegeriJPN'] = array(
	array('','Johor - 01, 21, 22, 23, 24'),
	array('','Kedah - 02, 25, 26, 27'),
	array('','Kelantan - 03, 28, 29'),
	array('','Melaka - 04, 30'),
	array('','Negeri Sembilan - 05, 31, 59'),
	array('','Pahang - 06, 32, 33'),
	array('','Pulau Pinang - 07, 34, 35'),
	array('','Perak - 08, 36, 37, 38 , 39'),
	array('','Perlis - 09, 40'),
	array('','Selangor - 10, 41, 42, 43, 44'),
	array('','Terengganu - 11, 45, 46'),
	array('','Sabah - 12, 47, 48, 49'),
	array('','Sarawak - 13, 50, 51, 52, 53'),
	array('','Wilayah Persekutuan (Kuala Lumpur) - 14, 54, 55, 56, 57'),
	array('','Wilayah Persekutuan (Labuan) - 15, 58'),
	array('','Wilayah Persekutuan (Putrajaya) - 16'),
	array('','Negeri Tidak Diketahui - 82'),
	array('','LUAR NEGARA - 71, 72'),
	array('','Tanpa Negara - 98'),
	array('','MAKLUMAT TIADA - 99'),
);
#--------------------------------------------------------------------------------------------------
// https://www.jpn.gov.my/kod-negara/
$data['KodNegaraJPN'] = array(
	array('','<a target="_blank" href="https://www.jpn.gov.my/kod-negara">https://www.jpn.gov.my/kod-negara</a> 0123456789'),
	array('','AFGHANISTAN - 93'),
	array('','ANTARTICA - 93'),
	array('','AFRIKA SELATAN - 85'),
	array('','ANTIGUA &amp; BARBUDA - 93'),
	array('','AFRIKA - 85'),
	array('','ARAB SAUDI - 77'),
	array('','ALBANIA - 92'),
	array('','ARGENTINA - 84'),
	array('','ALGERIA - 85'),
	array('','ARMENIA - 86'),
	array('','AMERICAN SAMOA - 83'),
	array('','ARUBA - 84'),
	array('','AMERIKA UTARA - 91'),
	array('','ASIA PASIFIK - 83'),
	array('','AMERIKA SELATAN - 84'),
	array('','AUSTRALIA - 83'),
	array('','ANDORRA/ANDORA - 93'),
	array('','AUSTRIA - 86'),
	array('','ANGOLA - 85'),
	array('','AZERBAIJAN - 93'),
	array('','ANGUILLA - 84'),
	array('','BAHAMAS - 90'),
	array('','BOSNIA HERZEGOVINA - 92'),
	array('','BAHRAIN - 88'),
	array('','BOTSWANA - 85'),
	array('','BANGLADESH - 79'),
	array('','BOUVET ISLAND - 93'),
	array('','BARBADOS - 90'),
	array('','BRAZIL - 84'),
	array('','BELARUS - 92'),
	array('','BRITAIN - 87'),
	array('','BELGIUM - 86'),
	array('','BRITISH INDIAN OCEAN TERRITORY - 93'),
	array('','BELIZE - 90'),
	array('','BRUNEI - 60'),
	array('','BENIN - 93'),
	array('','BULGARIA - 92'),
	array('','BERMUDA - 93'),
	array('','BURKINA FASO/BURKINA - 93'),
	array('','BHUTAN - 93'),
	array('','BURMA - 64'),
	array('','BOLIVIA - 84'),
	array('','BURUNDI - 85'),
	array('','BORA-BORA - 93'),
	array('','BYELORUSSIA - 92'),
	array('','CAMBODIA - 62'),
	array('','COLOMBIA - 84'),
	array('','CAMEROON - 85'),
	array('','COMOROS - 93'),
	array('','CANADA - 91'),
	array('','CONGO-BRAZZAVILLE - 85'),
	array('','CAPE VERDE - 93'),
	array('','CONGO-KINSHASA - 85'),
	array('','CARIBBEAN - 90'),
	array('','COOK ISLANDS - 83'),
	array('','CAYMAN ISLANDS - 93'),
	array('','COSTA RICA - 90'),
	array('','CENTRAL AFRICAN REPUBLIC - 85'),
	array('','CROATIA - 92'),
	array('','CHAD - 85'),
	array('','CUBA - 90'),
	array('','CHILE - 84'),
	array('','CYPRUS - 86'),
	array('','CHINA - 74'),
	array('','CZECH REPUBLIC - 92'),
	array('','CHRISTMAS ISLAND - 83'),
	array('','CZECHOSLOVAKIA - 92'),
	array('','COCOS(KEELING) ISLANDS - 83'),
	array('','DJIBOUTI - 85'),
	array('','DOMINICA - 90'),
	array('','DEMOCRATIC KAMPUCHE - 62'),
	array('','DAHOMEY - 93'),
	array('','DENMARK - 86'),
	array('','DOMINICAN REPUBLIC - 90'),
	array('','ECUADOR - 84'),
	array('','ESTONIA - 92'),
	array('','EGYPT - 85'),
	array('','ETHIOPIA - 85'),
	array('','EL SALVADOR - 90'),
	array('','EUROPAH - 86'),
	array('','EQUATORIAL GUINEA - 93'),
	array('','ERITREA - 85'),
	array('','FIJI - 83'),
	array('','FAEROE ISLANDS - 86'),
	array('','FRANCE - 86'),
	array('','FINLAND, METROPOLITAN - 86'),
	array('','FINLAND - 86'),
	array('','FRENCH POLYNESIA - 83'),
	array('','FALKLAND ISLANDS - 93'),
	array('','FRENCH SOUTHERN TERRITORIES - 93'),
	array('','FRENCH GUIANA - 84'),
	array('','GABON - 85'),
	array('','GERMANY (DEM.REP) - 86'),
	array('','GAMBIA - 85'),
	array('','GERMANY (FED.REP) - 86'),
	array('','GUINEA - 85'),
	array('','GEORGIA - 92'),
	array('','GUINEA-BISSAU - 93'),
	array('','GIBRALTAR - 93'),
	array('','GHANA - 85'),
	array('','GREAT BRITAIN - 87'),
	array('','GRENADA - 90'),
	array('','GREENLAND - 91'),
	array('','GUYANA - 84'),
	array('','GUADELOUPE - 84'),
	array('','GUATEMALA - 90'),
	array('','GUAM - 83'),
	array('','GREECE - 86'),
	array('','GERMANY - 86'),
	array('','HAITI - 90'),
	array('','HONDURAS - 90'),
	array('','HUNGARY - 92'),
	array('','HONG KONG - 93'),
	array('','HEARD AND MCDONALD ISLANDS - 83'),
	array('','HOLY SEE (VATICAN CITY) - 86'),
	array('','INDONESIA - 61'),
	array('','IVORY COAST - 93'),
	array('','IRAN - 88'),
	array('','ISRAEL - 88'),
	array('','IRAQ - 88'),
	array('','IRELAND - 87'),
	array('','INDIA - 75'),
	array('','ITALY - 86'),
	array('','INDONESIA - 61'),
	array('','ICELAND - 93'),
	array('','JORDAN - 88'),
	array('','JAMAICA - 90'),
	array('','JAPAN - 89'),
	array('','KAMPUCHEA - 62'),
	array('','KUWAIT - 88'),
	array('','KENYA - 85'),
	array('','KIRIBATI - 93'),
	array('','KOREA (SELATAN) - 89'),
	array('','KOREA (UTARA) - 89'),
	array('','KAZAKHSTAN - 93'),
	array('','KYRGYZSTAN - 93'),
	array('','LEBANON - 88'),
	array('','LUXEMBOURG - 86'),
	array('','LIBYA - 93'),
	array('','LATVIA - 92'),
	array('','LESOTHO - 93'),
	array('','LIECHTENSTEIN - 93'),
	array('','LAOS - 63'),
	array('','LITHUANIA - 92'),
	array('','LIBERIA - 85'),
	array('','LUAR NEGARA - 71,72'),
	array('','MALI - 85'),
	array('','MONGOLIA - 93'),
	array('','MALDIVES - 93'),
	array('','MAGHRIBI - 93'),
	array('','MAURITANIA - 85'),
	array('','MONACO - 86'),
	array('','MOROCCO - 85'),
	array('','MONTSERRAT - 93'),
	array('','MALAWI - 85'),
	array('','MICRONESIA - 83'),
	array('','MALTA - 86'),
	array('','MYANMAR - 64'),
	array('','MADAGASCAR - 93'),
	array('','MACAU - 93'),
	array('','MAURITIUS - 93'),
	array('','MARSHALL ISLANDS - 83'),
	array('','MEKAH - 99'),
	array('','MACEDONIA - 86'),
	array('','MEDITERANEAN - 86'),
	array('','MARTINIQUE - 90'),
	array('','MEXICO - 90'),
	array('','MAYOTTE - 85'),
	array('','MOZAMBIQUE - 85'),
	array('','MONTENEGRO - 92'),
	array('','MALAGASY - 93'),
	array('','MAKLUMAT TIADA - 99'),
	array('','NIGER - 85'),
	array('','NAMIBIA - 85'),
	array('','NAURU - 93'),
	array('','NETHERLANDS ANTILLES - 91'),
	array('','NEW ZEALAND - 83'),
	array('','NEUTRAL ZONE - 99'),
	array('','NIGERIA - 85'),
	array('','NEW CALEDONIA - 83'),
	array('','NEPAL - 93'),
	array('','NIUE - 83'),
	array('','NICARAGUA - 90'),
	array('','NORFOLK ISLANDS - 83'),
	array('','NETHERLANDS - 86'),
	array('','NORTHERN MARIANAS ISLANDS - 93'),
	array('','NORWAY - 86'),
	array('','OMAN - 88'),
	array('','OUTER MONGOLIA - 93'),
	array('','PAKISTAN - 76'),
	array('','PHILIPPINES - 65'),
	array('','PAPUA NEW GUINEA - 83'),
	array('','POLAND - 92'),
	array('','PALESTINE - 93'),
	array('','PORTUGAL - 86'),
	array('','PANAMA - 90'),
	array('','PITCAIRN ISLANDS - 93'),
	array('','PARAGUAY - 84'),
	array('','PUERTO RICO - 90'),
	array('','PERU - 84'),
	array('','PALAU - 93'),
	array('','QATAR - 88'),
	array('','ROMANIA - 92'),
	array('','REFUGEE - 99'),
	array('','RWANDA - 85'),
	array('','REP. OF MOLDOVA - 86'),
	array('','REUNION - 85'),
	array('','REPUBLIC OF YEMEN - 88'),
	array('','RUSSIAN FEDERATION - 92'),
	array('','REPUBLIC OF KOSOVO - 92'),
	array('','REFUGEE ARTICLE 1/1951 - 99'),
	array('','SENEGAL - 85'),
	array('','SPAIN - 86'),
	array('','SIERRA LEONE - 85'),
	array('','SWAPO - 93'),
	array('','SOMALIA - 85'),
	array('','SWITZERLAND - 86'),
	array('','SUDAN - 85'),
	array('','ST. HELENA - 93'),
	array('','SYRIA - 88'),
	array('','ST. KITTS AND NEVIS - 90'),
	array('','ST.LUCIA - 93'),
	array('','SERBIA - 92'),
	array('','ST.VICENT - 93'),
	array('','SAN MARINO - 93'),
	array('','SEYCHELLES - 93'),
	array('','SLOVAKIA - 86'),
	array('','SINGAPURA - 66'),
	array('','SLOVENIA - 86'),
	array('','SOLOMON ISLANDS - 93'),
	array('','SOUTH GEORGIA &amp; THE SOUTH SANDWICH ISLANDS - 84'),
	array('','SRI LANKA - 78'),
	array('','STATELESS PERSON ARTICLE 1/1954 - 98'),
	array('','SWAZILAND - 85'),
	array('','SVALBARD AND JAN MAYEN ISLANDS - 93'),
	array('','SAMOA - 93'),
	array('','ST. PIERRE AND MIQUELON - 91'),
	array('','SAO TOME &amp; PRINCIPE - 93'),
	array('','ST. VINCENT AND THE GRENADINES - 90'),
	array('','SAUDI ARABIA - 77'),
	array('','ST. LUCIA - 90'),
	array('','SURINAME - 84'),
	array('','SWEDEN - 86'),
	array('','SAMAO BARAT - 93'),
	array('','TUNISIA - 85'),
	array('','TAIWAN - 89'),
	array('','TURKEY - 88'),
	array('','TAJIKISTAN - 93'),
	array('','TANZANIA - 85'),
	array('','TURKMENISTAN - 93'),
	array('','TONGA - 85'),
	array('','TIMUR TENGAH - 88'),
	array('','TRINIDAD &amp; TOBAGO - 90'),
	array('','TIMUR JAUH - 89'),
	array('','TUVALU - 93'),
	array('','TIMOR LESTE - 83'),
	array('','THAILAND - 67'),
	array('','TOKELAU - 83'),
	array('','TOGO - 85'),
	array('','TURKS AND CAICOS ISLANDS - 90'),
	array('','Tanpa Negara - 98'),
	array('','UGANDA - 85'),
	array('','UK-NATIONAL OVERSEAS - 86'),
	array('','UNITED ARAB EMIRATE - 88'),
	array('','UK-OVERSEAS CITIZEN - 86'),
	array('','UPPER VOLTA - 93'),
	array('','UK-PROTECTED PERSON - 86'),
	array('','URUGUAY - 84'),
	array('','UK-SUBJECT - 86'),
	array('','U.S.S.R / RUSIA - 92'),
	array('','UN SPECIALIZED AGENCY - 99'),
	array('','UKRAINE - 92'),
	array('','UNITED NATIONS ORGANIZATION - 99'),
	array('','UNITED STATES OF AMERICA - 91'),
	array('','UNITED STATES MINOR OUTLYING ISLANDS - 83'),
	array('','UZBEKISTAN - 93'),
	array('','UNSPECIFIED NATIONALITY - 99'),
	array('','UK-DEPENDENT TERRITORIES CIT - 86'),
	array('','VANUATU - 93'),
	array('','VENEZUELA - 84'),
	array('','VIETNAM - 68'),
	array('','VATICAN CITY - 93'),
	array('','VIRGIN ISLANDS (BRITISH) - 93'),
	array('','VIRGIN ISLANDS (USA) - 90'),
	array('','WALLIS AND FUTUNA ISLANDS - 83'),
	array('','WESTERN SAHARA - 85'),
	array('','WESTERN SAMOA - 93'),
	array('','YEMEN ARAB REP. - 88'),
	array('','YEMEN PEOPLE DEM.RE - 88'),
	array('','YUGOSLAVIA - 93'),
	array('','ZAIRE - 85'),
	array('','ZAMBIA - 85'),
	array('','ZIMBABWE - 85'),
);
#--------------------------------------------------------------------------------------------------
//<td> Status Aktiviti </td>
$data['aktiviti'] = array(
	array('','01','01 - Majikan'),
	array('','02','02 - Pekerja Kerajaan'),
	array('','03','03 - Pekerja swasta'),
	array('','04','04 - Bekerja sendiri'),
	array('','05','05 - Pekerja keluarga tanpa gaji'),
	array('','06','06 - Penganggur'),
	array('','07','07 - Suri rumah/menjaga rumah'),
	array('','08','08 - Pelajar'),
	array('','09','09 - Pesara'),
	array('','10','10 - Lain-lain(terangkan)'),
	array('','11','11 - Kanak-kanak tidak bersekolah')
);
#--------------------------------------------------------------------------------------------------
#3.18 Ruangan 16 - Taraf Pendidikan Rasmi Tertinggi (PT)
$data['Pendidikan 2022'] = array(
	array('','001','001 - Pendidikan awal kanak-kanak( kurang dari 3 tahun',''),
	array('','002','002 - Pendidikan pra-sekolah',
	'- Merupakan program pendidikan awal terancang yang direka untuk memperkenalkan kanak-kanak kepada persekitaran sekolah.<br>'
	. '- Mesti dijalankan di premis sekolah atau pusat untuk memenuhi keperluan perkembangan kanak-kanak yang berumur kurang dari 6 tahun dan staf yang mempunyai kelayakan untuk mengajar kanak-kanak peringkat umur muda.<br>'
	. '- Tiada kelayakan masuk.<br>'
	. '- Setelah tamat program ini, murid-murid akan menyambung pendidikan di peringkat rendah.<br>'
	. '- Pendidikan pra-sekolah TERMASUK di bawah takrif pendidikan rasmi/formal. Ianya dikodkan bertujuan untuk mendapatkan maklumat penduduk yang telah/sedang mengikuti pendidikan pra-sekolah. Ini kerana mereka yang menduduki pra-sekolah telah mendapat pendedahan kepada persekitaran sekolah dan pengetahuan asas berbanding mereka yang tidak pernah bersekolah. Oleh itu, Ruangan 13 (Persekolahan) dikodkan sebagai ‛2’ manakala Ruangan 15 (Sijil Tertinggi Diperoleh) dikodkan ‛020’.'
	.''),
	array('','003','003 - Pendidikan tidak formal',
	'Merujuk kepada seseorang yang mendapat pendidikan selain daripada pendidikan rasmi atau formal seperti yang didefinisikan pada muka surat 27. Contohnya, seseorang yang bersekolah di sekolah pondok dan mendapat pendidikan agama sahaja akan dikategorikan sebagai ‛Pendidikan tidak formal’.'),
	array('','004','004 - Tiada pendidikan',
	'Merujuk kepada seseorang yang berumur sembilan tahun dan lebih dan masih belum bersekolah.'),
	array('','005','005 - Masih belum bersekolah',
	'Merujuk kepada kanak-kanak yang berumur kurang daripada sembilan tahun dan masih belum bersekolah.'),
	array('','006','006 - Pendidikan bukan formal',
	'Merujuk kepada pendidikan yang disusun dan dilaksanakan di luar daripada sistem pendidikan formal yang bertujuan memberi pembelajaran yang terpilih untuk sesuatu kumpulan di dalam masyarakat. Pendidikan ini boleh diperoleh melalui program seperti latihan, kursus dalam perkhidmatan, seminar, bengkel, forum dan persidangan.'),
	/*
	(umur pelajar: 6-12 tahun); (pengajian terkumpul: 1-6 tahun)
	- Direkabentuk untuk menyediakan pendidikan umum bertujuan melengkapkan murid-murid dengan kemahiran asas membaca, menulis dan mengira (3M) serta mewujudkan individu yang seimbang.
	- Murid-murid akan mengambil ujian penilaian di peringkat akhir pendidikan rendah, sebelum menyambung pelajaran ke peringkat menengah rendah.
	- Tempoh pengajian enam tahun tetapi boleh tamat diikuti dalam tempoh lima hingga tujuh tahun.
	- Kelayakan masuk mengikut peraturan yang ditetapkan oleh kerajaan atau sekolah rendah berkenaan.
	- Permulaan aktiviti pembacaan sahaja bukan kriteria untuk klasifikasi program pendidikan ini.
	*/
	array('','101','101 - Darjah / Tahun 1','Pendidikan rendah'),
	array('','102','102 - Darjah / Tahun 2','Pendidikan rendah'),
	array('','103','103 - Darjah / Tahun 3','Pendidikan rendah'),
	array('','104','104 - Darjah / Tahun 4','Pendidikan rendah'),
	array('','105','105 - Darjah / Tahun 5','Pendidikan rendah'),
	array('','106','106 - Darjah / Tahun 6','Pendidikan rendah'),
	/*
	(umur pelajar: 12-15 tahun); (pengajian terkumpul: 7-10 tahun)
	- Meneruskan program pendidikan asas yang dijalankan di peringkat rendah.
	- Disediakan dengan memberi lebih masa kepada murid-murid untuk menguasai dan melengkapkan diri dengan pendidikan umum yang bersepadu.
	- Mesti mengikut masa di mana ianya dirancang berorientasikan subjek menggunakan guru yang berkelayakan khusus untuk bidang/subjek yang diajar.
	- Tempoh pengajian selama 3/4 tahun.
	- Turut menyediakan program peralihan bagi pelajar aliran bahasa Cina dan Tamil untuk menguasai Bahasa Malaysia sebelum meneruskan pengajian ke Tingkatan 1 iaitu ‘Kelas Peralihan’.
	- Pelajar akan menduduki peperiksaan penilaian di peringkat akhir pendidikan menengah rendah, sebelum menyambung pelajaran ke peringkat menengah atas.
	*/
	array('','201','201 - Kelas Peralihan','Pendidikan menengah rendah'),
	array('','202','202 - Tingkatan 1','Pendidikan menengah rendah'),
	array('','203','203 - Tingkatan 2','Pendidikan menengah rendah'),
	array('','204','204 - Tingkatan 3','Pendidikan menengah rendah'),
	/*
	(umur pelajar: 15-17 tahun); (pengajian terkumpul: 10-12 tahun)
	- Merupakan kesinambungan program menengah rendah.
	- Tempoh pengajian selama 2 tahun.
	- Selain menerima pendidikan umum, pelajar juga diberi pilihan untuk menjurus dalam aliran sastera, sains, vokasional, teknikal atau agama.
	- Pendidikan vokasional adalah seperti dalam bidang pertukangan, pertanian, sains rumah tangga dan perdagangan. Kursus vokasional yang diberi adalah mengikut peluang-peluang pekerjaan di Malaysia. Bermula tahun 1997, sekolah vokasional telah dinaik taraf sebagai sekolah teknik.
	- Pelajar akan menduduki peperiksaan penilaian (SPM/ SPMV/ SMA/ SMU/ GCE ‛O’ Level atau yang setaraf) di peringkat akhir pendidikan menengah atas sebelum menyambung pengajian peringkat tertiari atau memilih memasuki pasaran buruh.
	- Terdapat juga pelajar sekolah vokasional/ teknik yang hanya menduduki peperiksaan Sijil Kemahiran Malaysia.
	*/
	array('','205','206 - Tingkatan 4','Pendidikan menengah atas'),
	array('','206','206 - Tingkatan 5','Pendidikan menengah atas'),
	array('','207','207 - Program kemahiran asas',
	'(umur pelajar antara 15-40 tahun)<br>'
	. '- Syarat minimum kemasukan ke program ini adalah boleh membaca, menulis dan mengira.<br>'
	. '- Merupakan program berbentuk modular, praktikal (hands-on) dan employable skills mengikut keperluan semasa.<br>'
	. '- Tempoh pengajian sekurang-kurangnya 6 bulan.<br>'
	. '- Pelajar yang telah menamatkan program peringkat ini boleh memasuki pasaran buruh atau mengikuti latihan lanjutan pendidikan vokasional/ teknik.<br>'
	. '- Program yang dikelaskan di bawah kategori ini adalah seperti kursus GIAT MARA.<br>'
	. ''),
	/*
	Bidang vokasional memberikan peluang kepada pelajar yang berpencapaian baik atau sederhana dalam akademik dan berminat kepada pembelajaran bercorak vokasional (berkaitan pekerjaan). Isi kandungan bidang vokasional mempunyai komponen teori dan praktikal yang seimbang. Objektif aliran ini adalah untuk membantu melahirkan separa profesional (juruteknik/pembantu teknik) dalam bidang kejuruteraan dan bukan kejuruteraan. Setelah tamat pengajian, pelajar berpeluang ke IPTA, IPTS, dan institut latihan kemahiran awam dan swasta, atau terus ke alam pekerjaan.
	- Program ini merangkumi 2 tahun pengajian di peringkat Sijil dan 2 tahun 6 bulan di peringkat Diploma (termasuk lima 5 bulan On The Job Training)
	- Pelajar yang berjaya di peringkat Sijil akan dianugerahkan Sijil Vokasional Malaysia (SVM)
	- Pelajar yang dianugerahkan SVM dan melepasi syarat kemasukan layak menyambung pengajian di peringkat Diploma di Kolej Vokasional yang sama
	- Pelajar yang tidak melepasi syarat kemasukan ke peringkat Diploma akan menyambung pengajian di Kolej Vokasional yang sama dalam bidang kemahiran dan dianugerahkan Sijil Kemahiran Malaysia (SKM) berdasarkan tahap kompetensi yang dicapai
	- Pelajar yang lulus pengajian di peringkat Diploma akan dianugerahkan Diploma oleh Senat Kolej Vokasional, Kementerian Pendidikan Malaysia
	- Matlamat Program Kolej Vokasional untuk melahirkan tenaga kerja yang mahir dan kompeten bagi memenuhi keperluan industri dan entrepreneur
	*/
	array('','208','208 - Kolej vokasional Tahun 1',''),
	array('','208','209 - Kolej vokasional Tahun 2',''),
	array('','301','301 - Tingkatan 6 rendah',
	'(umur pelajar: 17-19 tahun); (pengajian terkumpul: 12-14 tahun)<br>'
	. '- Pelajar telah tamat pendidikan menengah atas.<br>'
	. '- Tempoh pengajian selama 1-2 tahun.<br>'
	. '- Pelajar yang telah menamatkan pendidikan di peringkat ini boleh meneruskan pengajian di peringkat diploma/ ijazah atau memasuki pasaran buruh.'),
	array('','302','302 - Tingkatan 6 atas',''),
	array('','303','303 - Matrikulasi',''),
	array('','304','304 - Program persediaan',''),
	array('','305','305 - Pra universiti',''),
	/*
	(umur pelajar: 17-19 tahun); (pengajian terkumpul: 12-14 tahun)
	- Pelajar telah tamat pendidikan menengah atas.
	- Pengajian peringkat matrikulasi merupakan persediaan untuk pengajian peringkat ijazah dalam negara dan termasuk program persediaan bagi melanjutkan pelajaran ke luar negara.
	- Tempoh pengajian selama 1–2 tahun.
	- Ini termasuk pengajian tahap alpha dan beta di Universiti Multimedia (MMU) yang merupakan pengajian tahun asas (foundation year) pertama dan kedua.
	*/
	array('','306','306 - Diploma Tahun 1',''),
	array('','307','307 - Diploma Tahun 2',''),
	array('','308','308 - Kolej vokasional Tahun 3',''),
	array('','309','309 - Kolej vokasional Tahun 4',''),
	array('','310','310 - Institusi latihan kemahiran Tahun 1',''),
	array('','311','311 - Institusi latihan kemahiran Tahun 2',''),
	array('','401','401 - Program sijil kemahiran khusus dan teknikal',
	'(umur pelajar: 18 tahun dan lebih)<br>'
	. '- Kemasukan ke program sijil kemahiran khusus dan teknikal kebiasaannya memerlukan kepada sekurang-kurangnya menamatkan pendidikan menengah atas seperti tamat Tingkatan 5 atau lulus peperiksaan SPM/ SPM(V). Terdapat juga kursus yang mana syarat kemasukannya hanya lulus PMR atau setaraf dengannya.<br>'
	. '- Merujuk kepada program sijil yang dijalankan oleh institusi latihan kemahiran khusus dan teknikal yang menggunakan pensijilan yang diiktiraf oleh badan-badan tertentu seperti Jabatan Perkhidmatan Awam (JPA), Majlis Latihan Vokasional Kebangsaan (MLVK)/ Jabatan Pembangunan Kemahiran (JPK) (Sijil Kemahiran Malaysia (SKM) Tahap 1 hingga 3), Majlis Latihan Pertanian Kebangsaan (NATC), Majlis Amanah Rakyat (MARA) dan London Chamber of Commerce and Industry International Qualifications (LCCI) (Tahap 1 dan 2).<br>'
	. '- Contoh institusi : Institut Kemahiran Mara (IKM), Institut Kemahiran Belia Negara (IKBN), Institut Latihan Perindustrian (ILP), Kolej Komuniti, State Skill Development Centre (TATI, PSDC, NSSDC, KISMEC, PUSPATRI dll), Institut Pertanian dan kolej swasta yang berkenaan.<br>'
	. '- Tempoh kursus sekurang-kurangnya 6 bulan.<br>'
	. '- Program ini menyediakan pelajar dengan kemahiran teknikal tertentu untuk memasuki pasaran buruh atau meneruskan pengajian di peringkat yang lebih tinggi.<br>'
	. '- Tidak termasuk dalam kategori ini adalah sijil yang diperoleh daripada politeknik, universiti atau badan-badan yang memberi pengiktirafan atau yang setaraf dengannya (kod 401–403).<br>'
	. ''),
	array('','402','402 - Program sijil oleh badan-badan yang memberi pengiktirafan',
	'- Kemasukan ke program sijil dari badan-badan yang memberi pengiktirafan atau yang setaraf dengannya memerlukan seseorang pelajar lulus peperiksaan SPM/ SPM(V) atau dengan kelayakan tambahan dari kod 51.<br>'
	. '- Lebih berorientasi amali dan spesifik kepada pekerjaan.<br>'
	. '- Tempoh pengajian sekurang-kurangnya 6 bulan hingga 2 tahun.<br>'
	. '- Kategori ini juga merangkumi program pensijilan daripada badan-badan yang memberi pengiktirafan seperti program pensijilan daripada Telekom Malaysia, Suruhanjaya Tenaga, Jabatan Kesihatan dan Keselamatan Pekerja dan agensi-agensi lain.<br>'
	. ''),
	array('','403','403 - Program sijil dari kolej/ politeknik/ universiti atau setaraf dengannya',
	'- Kemasukan ke program sijil dari kolej/ politeknik/ universiti atau yang setaraf memerlukan seseorang pelajar lulus peperiksaan SPM/SPM(V) atau dengan kelayakan tambahan dari kod 51.<br>'
	. '- Lebih berorientasi amali dan spesifik kepada pekerjaan.<br>'
	. '- Tempoh pengajian sekurang-kurangnya 6 bulan hingga 2 tahun.<br>'
	. '- Merujuk kepada program pensijilan yang ditawarkan oleh institusi pengajian tinggi awam (IPTA) dan swasta (IPTS) khususnya di peringkat universiti/kolej termasuk politeknik.<br>'
	. '- Contoh: Kursus pensijilan ekonomi, perniagaan dan pengurusan, sains komputer & teknologi maklumat, senibina dan perancangan bandar & ukur yang ditawarkan oleh kolej/politeknik/universiti.<br>'
	. ''),
	array('','404','404 - Program sijil perguruan/kejururawatan/ kesihatan bersekutu',
	'- Kemasukan ke program sijil perguruan/ kejururawatan/ kesihatan bersekutu memerlukan seseorang pelajar lulus peperiksaan SPM/ SPM(V).<br>'
	. '- Lebih berorientasi amali dan spesifik kepada pekerjaan.<br>'
	. '- Tempoh pengajian sekurang-kurangnya 6 bulan hingga 2 tahun.<br>'
	. '- Merujuk kepada program pensijilan yang ditawarkan oleh institusi pengajian awam dan swasta termasuk institusi di bawah Kementerian Pelajaran dan Kementerian Kesihatan.<br>'
	. '- Contoh institusi: Institusi Perguruan Malaysia, Sekolah Kejururawatan, Institut Kesihatan Umum, MASTERSKILL College of Nursing and Health, Kolej MAHSA dll.<br>'
	. ''),
	array('','501','501 - Program diploma kemahiran khusus dan teknikal',
	'- Kemasukan ke program diploma kemahiran khusus dan teknikal kebiasaannya memerlukan sekurang-kurangnya menamatkan program sijil kemahiran khusus dan teknikal (kod 352).<br>'
	. '- Merujuk kepada program diploma yang dijalankan oleh institusi latihan kemahiran khusus dan teknikal yang menggunakan pensijilan yang diiktiraf oleh badan-badan tertentu seperti Majlis Latihan Vokasional Kebangsaan (MLVK)/ Jabatan Pembangunan Kemahiran (JPK) (Diploma Kemahiran Malaysia), Majlis Latihan Pertanian Kebangsaan (NATC), Majlis Amanah Rakyat (MARA) dan London Chamber of Commerce and Industry International Qualifications (LCCI) (Tahap 3 dan 4).<br>'
	. '- Contoh institusi: Institut Kemahiran Tinggi Belia Negara (IKTBN), Advanced Technology Training Centre (ADTEC), State Skill Development Centre (TATI, PSDC, NSSDC, KISMEC, PUSPATRI dll) dan kolej swasta yang berkenaan.<br>'
	. '- Program ini menyediakan pelajar dengan kemahiran teknikal tertentu.<br>'
	. '- Tempoh pengajian sekurang-kurangnya 2 tahun.'
	. ''),
	array('','502','502 - Program diploma lanjutan/ Higher National Diploma kemahiran khusus dan teknikal',
	'- Kemasukan ke program diploma lanjutan/ Higher National Diploma kemahiran khusus dan teknikal kebiasaannya memerlukan sekurang-kurangnya tamat program diploma kemahiran khusus dan teknikal (kod 356).<br>'
	. '- Merujuk kepada program diploma yang dijalankan oleh institusi latihan kemahiran khusus dan teknikal yang menggunakan pensijilan yang diiktiraf oleh badan-badan tertentu seperti Majlis Latihan Vokasional Kebangsaan/ Jabatan Pembangunan Kemahiran (Diploma Lanjutan Kemahiran Malaysia) dan Majlis Amanah Rakyat (MARA).<br>'
	. '- Contoh institusi: Institusi Kemahiran Tinggi Belia Negara (IKTBN), Advanced Technology Training Centre (ADTEC) dan kolej swasta yang berkenaan.<br>'
	. '- Program ini menyediakan pelajar dengan kemahiran teknikal tertentu.<br>'
	. '- Tempoh pengajian sekurang-kurangnya 3 tahun.<br>'
	. ''),
	array('','503','503 - Program diploma dari kolej/ politeknik/ universiti atau setaraf dengannya',
	'- Kemasukan ke program diploma dari kolej/ politeknik/ universiti atau yang setaraf dengannya memerlukan seseorang pelajar lulus peperiksaan SPM/SPM(V) atau tamat program sijil dari kolej/ politeknik/ universiti atau yang setaraf dengannya.<br>'
	. '- Merujuk kepada program diploma yang ditawarkan oleh institusi pengajian tinggi awam (IPTA) dan swasta (IPTS) khususnya di peringkat universiti/ kolej termasuk politeknik.<br>'
	. '- Lebih berorientasi amali dan spesifik kepada pekerjaan.<br>'
	. '- Tempoh pengajian sekurang-kurangnya 2 tahun.'
	. ''),
	array('','504','504 - Program diploma perguruan/ kejururawatan/ kesihatan bersekutu',
	'- Kemasukan ke program diploma perguruan/ kejururawatan/ kesihatan bersekutu memerlukan seseorang pelajar lulus peperiksaan SPM/ SPM(V).<br>'
	. '- Lebih berorientasi amali dan spesifik kepada pekerjaan.<br>'
	. '- Tempoh pengajian sekurang-kurangnya 2 tahun.<br>'
	. '- Merujuk kepada program diploma yang ditawarkan oleh institusi pengajian tinggi awam dan swasta termasuk institusi di bawah Kementerian Pelajaran dan Kementerian Kesihatan.<br>'
	. '- Contoh institusi: Institut Perguruan Malaysia (IPG), Kolej Kejururawatan/Sains Kesihatan Bersekutu dan lain-lain di bawah Kementerian Kesihatan Malaysia, Institut Kesihatan Umum, MASTERKILL College of Nursing and Health, Kolej MAHSA dll.<br>'
	. ''),
	array('','601','601 - Program ijazah sarjana muda/ diploma lanjutan',
	'- Kemasukan di peringkat ini memerlukan seseorang pelajar lulus Tingkatan 6 Atas, matrikulasi atau diploma.<br>'
	. '- Terdapat juga kemasukan terus ke program ijazah sarjana muda selepas lulus SPM/ SPM(V). Bagaimanapun, golongan ini akan melalui kursus asas (foundation course) pada tahun pertama pengajian. Contohnya, kursus peringkat ijazah sarjana muda di Universiti Teknologi Malaysia.<br>'
	. '- Merujuk kepada program ijazah sarjana muda/ diploma lanjutan yang ditawarkan oleh institusi pengajian tinggi awam (IPTA) dan swasta (IPTS) khususnya di peringkat universiti/ kolej dalam dan luar negara yang diiktiraf.<br>'
	. '- Program ini lebih bersifat teori dan adalah untuk menyediakan kelayakan yang mencukupi untuk memasuki program penyelidikan lanjutan dan profesion yang berkemahiran tinggi.<br>'
	. '- Program ini mempunyai jangka masa terkumpul untuk teori (di peringkat tertiari) selama tiga tahun sepenuh masa. Melibatkan penulisan tesis atau kertas projek di tahun akhir pengajian.<br>'
	. '- Terdapat pelbagai pendekatan laluan yang boleh diikuti oleh seseorang pelajar untuk mendapatkan ijazah pertama mereka. Selain daripada program pengajian biasa, terdapat juga program lain seperti program berkembar (3+0 atau 2+1) dan francais.<br>'
	. '- Kursus diploma lanjutan, diploma dalam bidang sebaran am dan diploma dalam bidang seni lukis dan seni reka dari UiTM adalah setaraf dengan ijazah.<br>'
	. ''),
	array('','701','701 - Program lepasan ijazah',
	'- Kemasukan di peringkat ini memerlukan seseorang pelajar lulus ijazah sarjana muda atau diploma lanjutan.<br>'
	. '- Merujuk kepada program lepasan ijazah yang ditawarkan oleh institusi pengajian tinggi awam (IPTA) dan badan-badan profesional dalam bidang-bidang tertentu.<br>'
	. '- Program ini lebih bersifat aplikasi untuk memasuki profesion tertentu seperti perguruan atau mendapat pengiktirafan bagi profesion yang berkenaan seperti kejuruteraan, perakaunan, perundangan, arkitek, perubatan dan lain-lain.<br>'
	. '- Pensijilan diperoleh melalui kursus/ peperiksaan/ latihan amali. Contohnya, latihan amali bagi bidang undang-undang ialah chambering.<br>'
	. '- Termasuk juga dalam kategori ini ialah kursus lepasan ijazah seperti Kursus Perguruan Lepasan Ijazah (KPLI), Association of Chartered Certified Accountants (ACCA) dan Bachelor of Laws (LLB).<br>'
	. ''),
	array('','702','702 - Program sarjana (Master)',
	'- Kemasukan di peringkat ini memerlukan seseorang pelajar tamat pengajian ijazah sarjana muda.<br>'
	. '- Program ini mempunyai jangka masa terkumpul untuk teori, penulisan tesis dan/atau kertas projek sekurang-kurangnya satu tahun sepenuh masa.<br>'
	. '- Merujuk kepada program ijazah sarjana yang ditawarkan oleh institusi pengajian tinggi awam (IPTA) dan swasta (IPTS) khususnya di peringkat universiti/kolej dalam dan luar negara yang diiktiraf.<br>'
	. ''),
	array('','801','801 - Program ijazah falsafah kedoktoran',
	'- Kemasukan di peringkat ini memerlukan seseorang pelajar tamat pengajian ijazah sarjana.<br>'
	. '- Merujuk kepada program ijazah falsafah kedoktoran yang ditawarkan di peringkat universiti dalam dan luar negara yang diiktiraf.<br>'
	. '- Peringkat ini dikhaskan untuk program pendidikan tertiari yang membawa kepada penganugerahan kelayakan penyelidikan lanjutan. Program ditumpukan kepada penyelidikan sendiri dan pengajian lanjutan.<br>'
	. '- Memerlukan penyerahan tesis atau disertasi yang bermutu yang boleh diterbitkan dan hasil penyelidikan sendiri yang merupakan sumbangan yang signifikan kepada ilmu pengetahuan. Tidak sepenuhnya berasaskan kepada kerja kursus.<br>'
	. ''),
	array('','802','802 - Skim pasca kedoktoran',
	'- Kemasukan peringkat ini memerlukan seseorang pelajar mempunyai ijazah falsafah kedoktoran (Ph.D), menjalankan penyelidikan dalam bidang berkaitan dan telah menghasilkan beberapa penerbitan di peringkat nasional dan antarabangsa.<br>'
	. '- Peringkat ini dikhaskan kepada program pendidikan/penyelidikan selepas seseorang itu telah memperolehi ijazah falsafah kedoktoran bertujuan untuk memperoleh kemahiran profesional yang diperlukan dalam kemajuan kerjaya.<br>'
	. '- Pelajar yang mengikuti program ini akan memegang jawatan postdoctoral fellow bagi tempoh 6 bulan hingga 5 tahun yang dikhususkan untuk menjalankan penyelidikan. Program ini juga telah ditawarkan kepada mereka yang memfokuskan kerjaya dalam bidang pendidikan yang dikenali sebagai "teaching post-docs".'
	. ''),
);
#--------------------------------------------------------------------------------------------------
//<td> Sijil Tertinggi Yang Diperolehi di sekolah,maktab / universiti</td>
$data['sijil 2022'] = array(
	array('','101','101 - UPKK',''),
	array('','102','102 - UPSR/UPSRA',''),
	array('','241','241 - SRA',''),
	array('','242','242 - PT3/PMR/SRP/LCE',''),
	array('','341','341 - SMA/SMU',''),
	array('','342','342 - 4 Thanawi',''),
	array('','343','343 - SPM/MCE/SC/FMCE/CSC',''),
	array('','344','344 - SPVM/SPM(V)/MVC',''),
	array('','345','345 - GCE `O` Level',''),
	array('','351','351 - Sijil Kemahiran Asas/Giat Mara',''),
	array('','346','346 - STA/STAM/STU',''),
	array('','347','347 - STPM/STP/HSC',''),
	array('','348','348 - GCE `A` Level',''),
	array('','349','349 - Sijil Matrikulasi',''),
	array('','352','352 - Sijil kemahiran khusus dan teknikal',''),
	array('','353','353 - Sijil drpd badan2 yg memberi pengiktirafan @ yg setaraf',''),
	array('','354','354 - Sijil drpd kolej @ yg setaraf',''),
	array('','355','355 - Sijil drpd politeknik @ yg setaraf',''),
	array('','356','356 - Sijil drpd universiti @ yg setaraf',''),
	array('','357','357 - Sijil perguruan/kejururawatan/kesihatan bersekutu',''),
	array('','551','551 - Diploma dlm kemahiran khusus dan teknikal',''),
	array('','552','552 - Diploma Lanjutan/Higher National Diploma(HND) dlm kemahiran khusus & teknikal',''),
	array('','553','553 - Diploma drpd kolej @ yg setaraf(terutama kolej swasta)',''),
	array('','554','554 - Diploma drpd politeknik @ yg setaraf',''),
	array('','555','555 - Diploma drpd universiti @ yg setaraf',''),
	array('','556','556 - Diploma perguruan/kejururawatan/kesihatan bersekutu',''),

	array('','665','665 - Ijazah Sarjana Muda/Diploma lanjutan',''),
	array('','667','667 - Diploma/Sijil pasca ijazah @ drpd badan profesional/(ACCA/CA)',''),
	array('','767','767 - Ijazah Sarjana',''),
	array('','861','861 - Doktor Falsafah(PhD)',''),
	array('','862','862 - Diploma/Sijil pasca kedoktoran',''),
	array('','021','021 - Masih belum bersekolah',
	'Merujuk kepada responden yang dikategorikan sebagai `Masih belum bersekolah` (Kod 021) pada Ruangan 15 iaitu kanak-kanak yang berumur kurang daripada sembilan tahun dan masih belum bersekolah'),
	array('','020','020 - Tiada Sijil','Merujuk kepada seseorang yang masih bersekolah atau telah tamat persekolahan tanpa memperoleh sebarang sijil.'),
	array('','022','022 - Tiada berkenaan','- Merujuk kepada responden yang dicatatkan sebagai `Tiada pendidikan` (Kod 004) atau `Pendidikan tidak formal` (Kod 003) pada Ruangan 15 kecuali mereka yang memiliki sijil dari badan-badan yang memberi pengiktirafan tanpa melalui pendidikan rasmi.<br>'
	. '- Termasuk juga mereka yang memperoleh sijil agama sahaja.'),
	array('','023','023 - Sijil Pendidikan Bukan Formal','- Merujuk kepada mereka yang menerima sijil melalui program seperti latihan, kursus dalam perkhidmatan, seminar, bengkel, forum dan persidangan.<br>'
	. '- Tidak tertakluk kepada responden yang dicatatkan sebagai ‘Pendidikan Bukan Formal` (Kod 006) sahaja pada Ruangan 16.'),
);
#--------------------------------------------------------------------------------------------------
$data['Pendidikan&Sijil 2022'] = array(
	array('','001','001 - Pendidikan awal kanak-kanak( kurang dari 3 tahun','020 - Tiada Sijil'),
	array('','002','002 - Pendidikan pra-sekolah','020 - Tiada Sijil'),
	array('','003','003 - Pendidikan tidak formal','020 - Tiada Sijil<br>'
	. '- Merujuk kepada seseorang yang masih bersekolah atau telah tamat persekolahan tanpa'
	. ' memperoleh sebarang sijil.'),
	array('','004','004 - Tiada pendidikan','022 - Tiada berkenaan<br>'
	. '- Merujuk kepada responden yang dicatatkan sebagai `Tiada pendidikan` (Kod 004) atau'
	. ' `Pendidikan tidak formal` (Kod 003) pada Ruangan 15 kecuali mereka yang memiliki sijil'
	. ' dari badan-badan yang memberi pengiktirafan tanpa melalui pendidikan rasmi.<br>'
	. '- Termasuk juga mereka yang memperoleh sijil agama sahaja.'),
	array('','005','005 - Masih belum bersekolah','021 - Masih belum bersekolah<br>'
	. '- Merujuk kepada responden yang dikategorikan sebagai `Masih belum bersekolah` (Kod 021)'
	. ' pada Ruangan 15 iaitu kanak-kanak yang berumur kurang daripada sembilan tahun dan'
	. ' masih belum bersekolah'),
	array('','006','006 - Pendidikan bukan formal','023 - Sijil Pendidikan Bukan Formal<br>'
	. '- Merujuk kepada mereka yang menerima sijil melalui program seperti latihan, kursus dalam'
	. ' perkhidmatan, seminar, bengkel, forum dan persidangan.<br>'
	. '- Tidak tertakluk kepada responden yang dicatatkan sebagai ‘Pendidikan Bukan Formal`'
	. ' (Kod 006) sahaja pada Ruangan 16.'),
	array('','101','101 - Darjah / Tahun 1',''),
	array('','102','102 - Darjah / Tahun 2',''),
	array('','103','103 - Darjah / Tahun 3',''),
	array('','104','104 - Darjah / Tahun 4',''),
	array('','105','105 - Darjah / Tahun 5','101 - UPKK'),
	array('','106','106 - Darjah / Tahun 6','102 - UPSR/UPSRA'),
	array('','201','201 - Kelas Peralihan',''),
	array('','202','202 - Tingkatan 1',''),
	array('','203','203 - Tingkatan 2',''),
	array('','204','204 - Tingkatan 3','242 - PT3/PMR/SRP/LCE'),
	array('','205','206 - Tingkatan 4',''),
	array('','206','206 - Tingkatan 5','343 - SPM/MCE/SC/FMCE/CSC'),
	array('','207','207 - Program kemahiran asas',''),
	array('','208','208 - Kolej vokasional Tahun 1',''),
	array('','208','209 - Kolej vokasional Tahun 2',''),
	array('','301','301 - Tingkatan 6 rendah',''),
	array('','302','302 - Tingkatan 6 atas','347 - STPM/STP/HSC'),
	array('','303','303 - Matrikulasi','349 - Sijil Matrikulasi'),
	array('','304','304 - Program persediaan',''),
	array('','305','305 - Pra universiti',''),
	array('','306','306 - Diploma Tahun 1',''),
	array('','307','307 - Diploma Tahun 2',''),
	array('','308','308 - Kolej vokasional Tahun 3',''),
	array('','309','309 - Kolej vokasional Tahun 4',''),
	array('','310','310 - Institusi latihan kemahiran Tahun 1',''),
	array('','311','311 - Institusi latihan kemahiran Tahun 2',''),
	array('','401','401 - Program sijil kemahiran khusus dan teknikal',
	'352 - Sijil kemahiran khusus dan teknikal'),
	array('','402','402 - Program sijil oleh badan-badan yang memberi pengiktirafan',
	'353 - Sijil drpd badan2 yg memberi pengiktirafan @ yg setaraf'),
	array('','403','403 - Program sijil dari kolej/politeknik/universiti @ setaraf dengannya',
	'354 - Sijil drpd kolej @ yg setaraf<br>'
	. '355 - Sijil drpd politeknik @ yg setaraf<br>'
	. '356 - Sijil drpd universiti @ yg setaraf<br>'
	. ''),
	array('','404','404 - Program sijil perguruan/kejururawatan/ kesihatan bersekutu',
	'357 - Sijil perguruan/kejururawatan/kesihatan bersekutu'),
	array('','501','501 - Program diploma kemahiran khusus & teknikal',
	'551 - Diploma dlm kemahiran khusus & teknikal'),
	array('','502','502 - Program diploma lanjutan/ Higher National Diploma'
	. ' kemahiran khusus & teknikal',
	'552 - Diploma Lanjutan/Higher National Diploma(HND) dlm kemahiran khusus & teknikal'),
	array('','503','503 - Program diploma dari kolej/politeknik/universiti @ setaraf dengannya',
	'553 - Diploma drpd kolej @ yg setaraf(terutama kolej swasta)<br>'
	. '554 - Diploma drpd politeknik @ yg setaraf<br>'
	. '555 - Diploma drpd universiti @ yg setaraf'),
	array('','504','504 - Program diploma perguruan/ kejururawatan/ kesihatan bersekutu',
	'556 - Diploma perguruan/kejururawatan/kesihatan bersekutu'),
	array('','601','601 - Program ijazah sarjana muda/ diploma lanjutan',
	'665 - Ijazah Sarjana Muda/Diploma lanjutan'),
	array('','701','701 - Program lepasan ijazah',
	'667 - Diploma/Sijil pasca ijazah @ drpd badan profesional/(ACCA/CA)'),
	array('','702','702 - Program sarjana (Master)','767 - Ijazah Sarjana'),
	array('','801','801 - Program ijazah falsafah kedoktoran','861 - Doktor Falsafah(PhD)'),
	array('','802','802 - Skim pasca kedoktoran','862 - Diploma/Sijil pasca kedoktoran'),
);
#--------------------------------------------------------------------------------------------------
//3.21 Ruangan 19 – Bidang Pengajian (FS)
$data['Bidang Pengajian 2022'] = array(
	array('','xx : Kumpulan Bidang Utama'),
	array('','xxx : Kumpulan Bidang Sub-utama'),
	array('','xxxx - Perincian Bidang Pengajian'),
	array('','00 : Program asas/ umum'),
	array('','000 : Program <em>generic</em>'),
	array('','0000 - <em>Programmes and qualifications generic not further defined</em>'),
	array('','001 : Program asas/umum'),
	array('','0011 - Program asas/umum'),
	array('','002 : Literasi & kefahaman asas'),
	array('','0021 - Literasi & numerasi'),
	array('','003 : Kemahiran personal'),
	array('','0031 :- Kemahiran personal<br>'
	'− Pengurusan masa<br>− Pengurusan kerjaya<br>− Teknik pengucapan awam'),
	array('','009 : Program <em>generic</em> lain'),
	array('','0099 - Program <em>generic</em> lain'),
	array('','01 : Pendidikan'),
	array('','011 : Pendidikan'),
	array('','0110 - Pengajaran'),
	array('','0111 - Sains pendidikan'),
	array('','0012 - Latihan perguruan untuk guru pra-sekolah'),
	array('','0113 - Latihan perguruan peringkat asas'),
	array('','0114 - Latihan perguruan dengan pengkhususan subjek'),
	array('','0119 - Latihan perguruan untuk subjek vokasional/praktikal'),
	array('','018 : Program <em>inter-disciplinary</em>'),
	array('','0188 - Program <em>inter-disciplinary</em> yang melibatkan pendidikan'),
	array('','02 : Kemanusiaan & kesenian'),
	array('','020 : Kemanusiaan & kesenian'),
	array('','0200 - Kemanusiaan & kesenian'),
	array('','021 Kesenian'),
	array('','0211 - Produksi media & teknik audio-visual'),
	array('','0212 - Rekabentuk fesyen, dalaman & perindustrian'),
	array('','0213 - Seni lukis'),
	array('','0214 - Seni halus'),
	array('','0215 - Muzik & persembahan kesenian'),
	array('','0216 - Pengajian filem, televisyen & skrin'),
	array('','0219 - Kesenian-kesenian lain'),
	array('','022 : Kemanusiaan'),
	array('','0221 - Agama & theology'),
	array('','0222 - Sejarah & arkeologi'),
	array('','0223 - Falsafah & etika'),
	array('','0224 - Pengajian islam'),
	array('','0229 - Kemanusiaan 023'),
	array('','023 : Bahasa'),
	array('','0231 - Pengajian bahasa'),
	array('','0232 - Kesusasteraan & linguistics'),
	array('','0233 - Bahasa Kebangsaan (Bahasa Malaysia)'),
	array('','0239 - Bahasa-bahasa lain'),
	array('','028 : Program <em>inter-discpilinary</em> yamg melibatkan kemanusiaan & kesenian'),
	array('','0288 - Program <em>inter-discpilinary</em> yamg melibatkan kemanusiaan & kesenian'),
	array('','029 : Kemanusiaan & kesenian lain'),
	array('','0299 - Kemanusiaan & kesenian lain'),
	array('','03 : Sains sosial, kewartawanan & maklumat'),
	array('','030 : Sains sosial, kewartawanan & maklumat'),
	array('','0300 - Sains sosial, kewartawanan & maklumat'),
	array('','031 : Sains sosial & tingkah laku'),
	array('','0311 - Ekonomi'),
	array('','0312 - Sains politik & sivik'),
	array('','0313 - Psikologi'),
	array('','0314 - Pengajian sosiologi & kebudayaan'),
	array('','0319 - Sains sosial & tingkah laku'),
	array('','032 : Kewartawanan & maklumat'),
	array('','0321 - Kewartawanan & pelaporan'),
	array('','0322 - Perpustakaan, maklumat & arkib'),
	array('','0323 - Media & komunikasi'),
	array('','0329 - Kewartawanan & maklumat lain'),
	array('','038 Program <em>inter-discplinary</em> yang melibatkan sains sosial,'
	. ' kewartawanan & maklumat'),
	array('','0388 - Program <em>inter-discplinary</em> yang melibatkan sains sosial,'
	. ' kewartawanan & maklumat'),
	array('','039 Sains sosial, kewartawanan & maklumat lain'),
	array('','0399 - Sains sosial, kewartawanan & maklumat lain'),
	array('','04 Perniagaan, pentadbiran & undang-undang'),
	array('','040 Perniagaan, pentadbiran & undang-undang'),
	array('','0400 - Perniagaan, pentadbiran & undang-undang'),
	array('','041 Perniagaan & pentadbiran '),
	array('','0411 - Perakaunan, percukaian & pengauditan'),
	array('','0412 - Kewangan, perbankan & insurans'),
	array('','0413 - Kewangan & perbankan islam'),
	array('','0414 - Pengurusan & pentadbiran'),
	array('','0415 - Pemasaran & pengiklanan'),
	array('','0416 - Kesetiausahaan & perkeranian'),
	array('','0417 - Kemahiran kerja'),
	array('','0419 - Perniagaan & pentadbiran lain'),
	array('','042 Undang-undang'),
	array('','0421 - Undang-undang'),
	array('','048 Program <em>inter-discplinary</em> yang melibatkan perniagaan,'
	. ' pentadbiran & undang-undang'),
	array('','0488 - Program <em>inter-discplinary</em> yang melibatkan perniagaan,'
	. ' pentadbiran & undang-undang'),
	array('','049 Perniagaan, pentadbiran & undang-undang lain'),
	array('','0499 - Perniagaan, pentadbiran & undang-undang lain'),
	array('','05 Sains tulen, matematik & statistik'),
	array('','050 Sains tulen, matematik & statistik'),
	array('','0500 - Sains tulen, matematik & statistik'),
	array('','051 Biologi & sains berkaitan'),
	array('','0511 - Biologi'),
	array('','0512 - Biokimia'),
	array('','0519 - Biologi & sains berkaitan lain'),
	array('','052 Sains persekitaran'),
	array('','0521 - Sains persekitaran'),
	array('','0522 - Persekitaran semula jadi & hidupan liar'),
	array('','0529 - Sains persekitaran lain'),
	array('','053 Sains fizikal'),
	array('','0531 - Kimia'),
	array('','0532 - Sains hayat'),
	array('','0533 - Fizik'),
	array('','0539 - Sains fizik lain'),
	array('','054 Matematik & statistik'),
	array('','0540 - Matematik & statistik'),
	array('','0541 - Matematik'),
	array('','0542 - Statistik'),
	array('','058 Program <em>inter-discplinary</em> yang melibatkan sains tulen,'
	. ' matematik & statistik'),
	array('','0588 - Program <em>inter-discplinary</em> yang melibatkan sains tulen,'
	. ' matematik & statistik'),
	array('','059 Sains tulen, matematik & statistik lain'),
	array('','0599 - Sains tulen, matematik & statistik lain'),
	array('','06 Teknologi maklumat & komunikasi'),
	array('','061 Teknologi maklumat & komunikasi'),
	array('','0610 - Teknologi maklumat & komunikasi'),
	array('','0611 - Teknologi & sistem maklumat'),
	array('','0612 - Kejuruteraan perisian'),
	array('','0613 - Sains pengkomputeran'),
	array('','0614 - Penggunaan komputer'),
	array('','0619 - Teknologi maklumat & komunikasi lain'),
	array('','068 Program <em>inter-discplinary</em> yang melibatkan'
	. ' teknologi maklumat & komunikasi'),
	array('','0688 - Program <em>inter-discplinary</em> yang melibatkan'
	. ' teknologi maklumat & komunikasi'),
	array('','07 Kejuruteraan, pembuatan & pembinaan'),
	array('','070 Kejuruteraan, pembuatan & pembinaan'),
	array('','0700 - Kejuruteraan, pembuatan & pembinaan'),
	array('','071 Kejuruteraan & kejuruteraan dagangan'),
	array('','0711 - Kejuruteraan kimia & proses'),
	array('','0712 - Tenaga & elektrik'),
	array('','0713 - Elektronik & pengautomasian'),
	array('','0714 - Mekanik & kerja logam'),
	array('','0715 - Kenderaan bermotor, kapal & kapal terbang'),
	array('','0716 - Kejuruteraan awam'),
	array('','0717 - Teknologi perlindungan alam sekitar'),
	array('','0719 - Kejuruteraan & kejuruteraan dagangan lain'),
	array('','072 Pembuatan & pemprosesan'),
	array('','0721 - Pemprosesan makanan'),
	array('','0722 - Bahan(gelas, kertas, plastik & kayu)'),
	array('','0723 - Tekstil (pakaian, pakaian kaki & kulit)'),
	array('','0724 - Perlombongan & galian'),
	array('','0729 - Pembuatan & pemprosesan lain'),
	array('','073 Senibina & perancang bandar'),
	array('','0731 - Senibina'),
	array('','0732 - Perancangan bandar & wilayah'),
	array('','0733 - Pembinaan & bangunan'),
	array('','0734 - <em>Surveying</em>'),
	array('','074 Teknologi kejuruteraan'),
	array('','0741 - Teknologi kejuruteraan'),
	array('','078 Program <em>inter-discplinary</em> yang melibatkan kejuruteraan,'
	. ' pembuatan & pembinaan'),
	array('','0788 - Program <em>inter-discplinary</em> yang melibatkan kejuruteraan,'
	. ' pembuatan & pembinaan'),
	array('','079 Kejuruteraan, pembuatan & pembinaan lain'),
	array('','0799 - Kejuruteraan, pembuatan & pembinaan lain'),
	array('','08 Pertanian, perhutanan, perikanan & veterinar'),
	array('','080 Pertanian, perhutanan, perikanan & veterinar'),
	array('','0800 - Pertanian, perhutanan, perikanan & veterinar'),
	array('','081 Pertanian'),
	array('','0811 - Pengeluaran ternakan & tanaman'),
	array('','0812 - Horticulture'),
	array('','0819 - Pertanian lain'),
	array('','082 Perhutanan'),
	array('','0821 - Perhutanan'),
	array('','083 Perikanan'),
	array('','0831 - Perikanan'),
	array('','084 Veterinar'),
	array('','0841 - Veterinar'),
	array('','088 Program <em>inter-discplinary</em> yang melibatkan pertanian,'
	. ' perhutanan, perikanan & veterinar'),
	array('','0888 - Program <em>inter-discplinary</em> yang melibatkan pertanian,'
	. ' perhutanan, perikanan & veterinar'),
	array('','089 Pertanian, perhutanan, perikanan & veterinar lain'),
	array('','0899 - Pertanian, perhutanan, perikanan & veterinar lain'),
	array('','09 Kesihatan & kebajikan'),
	array('','090 Kesihatan & kebajikan'),
	array('','0900 - Kesihatan & kebajikan'),
	array('','091 Kesihatan'),
	array('','0911 - Pengajian pergigian'),
	array('','0912 - Perubatan'),
	array('','0913 - Kejururawatan & penjagaan'),
	array('','0914 - Teknologi rawatan & perubatan diagnostik'),
	array('','0915 - Terapi & pemulihan'),
	array('','0916 - Farmasi'),
	array('','0917 - Perubatan & terapi tradisional'),
	array('','0919 - Kesihatan lain'),
	array('','092 Perkhidmatan sosial'),
	array('','0921 - Penjagaan orang-orang tua & orang kurang upaya'),
	array('','0922 - Perkhidmatan asuhan kanak-kanak & belia'),
	array('','0923 - Kerja sosial & kaunseling'),
	array('','0929 - Perkhidmatan sosial lain'),
	array('','098 Program <em>inter-discplinary</em> yang melibatkan kesihatan & kebajikan'),
	array('','0988 - Program <em>inter-discplinary</em> yang melibatkan kesihatan & kebajikan'),
	array('','099 Kesihatan & kebajikan lain'),
	array('','0999 - Kesihatan & kebajikan lain'),
	array('','10 Perkhidmatan'),
	array('','100 Perkhidmatan'),
	array('','1000 - Perkhidmatan'),
	array('','101 Perkhidmatan personel'),
	array('','1011 - Perkhidmatan domestik'),
	array('','1012 - Perkhidmatan pendandanan & kecantikan'),
	array('','1013 - Hotel, restoran & katering'),
	array('','1014 - Sukan'),
	array('','1015 - Pengembaraan, pelancongan & rekreasi'),
	array('','1019 - Perkhidmatan personel lain'),
	array('','102 : Perkhidmatan kebersihan & kesihatan pekerjaan'),
	array('','1021 - Sanitasi komuniti'),
	array('','1022 - Keselamatan & kesihatan pekerjaan'),
	array('','1029 - Perkhidmatan kebersihan & kesihatan pekerjaan lain'),
	array('','103 : Perkhidmatan keselamatan'),
	array('','1031 - Ketenteraan & pertahanan'),
	array('','1032 - Perlindungan diri & harta benda'),
	array('','1039 - Perkhidmatan keselamatan lain'),
	array('','104 : Perkhidmatan pengangkutan'),
	array('','1041 - Perkhidmatan pengangkutan'),
	array('','108 : Program <em>inter-discplinary</em> yang melibatkan perkhidmatan'),
	array('','1088 - Program <em>inter-discplinary</em> yang melibatkan perkhidmatan'),
	array('','109 : Perkhidmatan lain'),
	array('','1099 - Perkhidmatan lain'),
	array('','99 : Lain-lain'),
	array('','999 : Lain-lain'),
	array('','9999 - Lain-lain'),
);
#--------------------------------------------------------------------------------------------------
###################################################################################################
#--------------------------------------------------------------------------------------------------
	function binaSatuJadual($senarai,$pilih)
	{
		$class = 'table table-striped table-bordered';
		//$btn = 'btn btn-outline-secondary rounded-pill btn-lg btn-block';
		$btn = 'btn btn-dark btn-lg btn-block';
		foreach($senarai as $jadual => $row):
		if($jadual == $pilih):
			$output = paparSatuJadual($row,$pilih);
			echo "\r\t" . '<h2 class="' . $btn . '" >Kod ' . ucfirst($jadual) . '</h2>'
			. "\r\t" . '<table class="' . $class . '" id="allTable">'
			//echo "\r\t" . '<table border="1">'
			. "\r\t$output\r\t" . '</table>' . "\r\r";
		endif;
		endforeach;//*/
		#
	}
#--------------------------------------------------------------------------------------------------
	function paparSatuJadual($row,$jadual)
	{
		$output = null;
		$bilBaris = count($row);
		$printed_headers = false;# mula bina jadual
		#-----------------------------------------------------------------
		for ($kira=0; $kira < $bilBaris; $kira++)
		{	# print the headers once:
			if ( !$printed_headers )
			{##===========================================================
				$output .= "\n\t<thead><tr>";
				foreach ( array_keys($row[$kira]) as $kunci ) :
				$tajuk = tajukMedanJadual($jadual,$kunci);
				$output .= "\n\t" . '<th>' . ucfirst($tajuk) . '</th>';
				endforeach;
				$output .= "\n\t" . '</tr></thead>';
				$output .= "\n\t" . '<tbody>';
			##============================================================
				$printed_headers = true;
			}
		#-----------------------------------------------------------------
			# print the data row
			$output .= "\n\t<tr>";
			foreach ( $row[$kira] as $key=>$data ) :
			$output .= "\n\t" . '<td>' . $data . '</td>';
			endforeach;
			$output .= "\n\t" . '</tr>';
		}#----------------------------------------------------------------
		$output .= "\n\t" . '</tbody>';

		return $output;//*/
	}
#--------------------------------------------------------------------------------------------------
	function binaJadual($senarai)
	{
		$class = 'table table-striped table-bordered';
		foreach($senarai as $jadual => $row):
			$output = paparJadual($row,$jadual);
			//echo "\r\t" . '<table class="'.$class.'" id="allTable">'
			echo "\r\t" . '<table border="1">'
			. $output . "\r\t" . '</table>' . "\r\r";
		endforeach;
		#
	}
#--------------------------------------------------------------------------------------------------
	function tajukMedanJadual($jadual,$kunci)
	{
		if($kunci==0) $p = '#';
		elseif($kunci==1) $p = 'Kod';
		elseif($kunci==2 & $jadual!='Pendidikan&Sijil 2022') $p = $jadual;
		elseif($kunci==2 & $jadual=='Pendidikan&Sijil 2022') $p = 'Pendidikan 2022';
		elseif($kunci==3 & $jadual=='Pendidikan&Sijil 2022') $p = 'Sijil';
		else $p = $kunci;

		return $p;
	}
#--------------------------------------------------------------------------------------------------
	function paparJadual($row,$jadual)
	{
		$output = null;
		$bil_baris = count($row);
		$printed_headers = false;# mula bina jadual
		#-----------------------------------------------------------------
		for ($kira=0; $kira < $bil_baris; $kira++)
		{	# print the headers once:
			if ( !$printed_headers )
			{##===========================================================
				$output .= "\r\t<thead><tr>";
				foreach ( array_keys($row[$kira]) as $kunci ) :
				$tajuk = tajukMedanJadual($jadual,$kunci);
				$output .= "\r\t" . '<th>' . $tajuk . '</th>';
				endforeach;
				$output .= "\r\t" . '</tr></thead>';
				$output .= "\r\t" . '<tbody>';
			##============================================================
				$printed_headers = true;
			}
		#-----------------------------------------------------------------
			# print the data row
			$output .= "\r\t<tr>";
			foreach ( $row[$kira] as $key=>$data ) :
			$output .= "\r\t" . '<td>' . $data . '</td>';
			endforeach;
			$output .= "\r\t" . '</tr></tbody>';
		}#----------------------------------------------------------------

		return $output;
	}
#--------------------------------------------------------------------------------------------------
###################################################################################################
#--------------------------------------------------------------------------------------------------
	function kiraTahun()
	{
		$thnAkhir = date("Y");

		for($i = 1921;$i <= $thnAkhir; $i++):
		    $umur = str_pad(($thnAkhir - $i), 3, '0', STR_PAD_LEFT);
		    echo '' . $i . '=' . $umur . '';
		    if (($i % 4) == 0) echo "\n";
		    else echo " | ";
		endfor;
	}
#--------------------------------------------------------------------------------------------------
###################################################################################################
#--------------------------------------------------------------------------------------------------
	function binaJson($senarai,$pilih)
	{
		//$class = 'table table-striped table-bordered';
		foreach($senarai as $jadual => $row):
		if($jadual == $pilih):
			$output = jsonDataTables($row,$jadual);
			echo $output;
		endif;
		endforeach;
		#
	}
#--------------------------------------------------------------------------------------------------
	function jsonDataTables($row,$jadual)
	{
		$kira = count($row);
		# cara papar output guna json
		$output = array(
			"draw"	=>	intval(1),
			"recordsTotal"	=> 	$kira,
			"recordsFiltered" => $kira,
			"data" => $row
		);

		//echo json_encode($output);
		return json_encode($output);
	}
#--------------------------------------------------------------------------------------------------
###################################################################################################
#--------------------------------------------------------------------------------------------------
	function gradeTable002($url)
	{
		print <<<END
	var t = $('#allTable').DataTable({
	/*"ajax": "$url/admin/gradeAction",*/
	searchHighlight: true,
	"columnDefs": [{
		"searchable": false,
		"orderable": false,
		"targets": 0
	}],
	"order": []
	});

	t.on( 'order.dt search.dt', function (){
		t.column(0, {search:'applied', order:'applied'}).nodes().
		each( function (cell, i) {cell.innerHTML = i+1;});
	}).draw();
/* ***************************************************************************************** */
END;
		#
	}
#--------------------------------------------------------------------------------------------------
	function jqueryExtendA()
	{
		print <<<END
jQuery.extend({
	highlight: function (node, re, nodeName, className)
	{
		if (node.nodeType === 3)
		{
			var match = node.data.match(re);
			if (match)
			{
				var highlight = document.createElement(nodeName || 'span');
				highlight.className = className || 'highlight';
				var wordNode = node.splitText(match.index);
				wordNode.splitText(match[0].length);
				var wordClone = wordNode.cloneNode(true);
				highlight.appendChild(wordClone);
				wordNode.parentNode.replaceChild(highlight, wordNode);
				return 1; //skip added node in parent
			}
		}
		else if ((node.nodeType === 1 && node.childNodes) && //only element nodes that have children
			!/(script|style)/i.test(node.tagName) && //ignore script and style nodes
			!(node.tagName === nodeName.toUpperCase() && node.className === className))
		{//skip if already highlighted
			for (var i = 0; i < node.childNodes.length; i++)
			{
				i += jQuery.highlight(node.childNodes[i], re, nodeName, className);
			}
		}
		return 0;
	}
});
/* ***************************************************************************************** */

END;
		#
	}
#--------------------------------------------------------------------------------------------------
	function jqueryExtendB()
	{
		print <<<END
jQuery.fn.unhighlight = function (options)
{
	var settings = { className: 'highlight', element: 'span' };
	jQuery.extend(settings, options);

	return this.find(settings.element + "." + settings.className).each(function ()
	{
		var parent = this.parentNode;
		parent.replaceChild(this.firstChild, this);
		parent.normalize();
	}).end();
};
/* ***************************************************************************************** */

END;
		#
	}
#--------------------------------------------------------------------------------------------------
	function jqueryExtendC()
	{
		print <<<END
jQuery.fn.highlight = function (words, options)
{
	var settings = { className: 'highlight', element: 'span', caseSensitive: false, wordsOnly: false };
	jQuery.extend(settings, options);

	if (words.constructor === String){words = [words];}
	words = jQuery.grep(words, function(word, i){return word != '';});
	words = jQuery.map(words, function(word, i)
	{
		return word.replace(/[-[\]{}()*+?.,\\^$|#\s]/g, "\\$&");
	});
	if (words.length == 0) { return this; };

	var flag = settings.caseSensitive ? "" : "i";
	var pattern = "(" + words.join("|") + ")";
	if (settings.wordsOnly){pattern = "\\b" + pattern + "\\b";}
	var re = new RegExp(pattern, flag);

	return this.each(function ()
	{
		jQuery.highlight(this, re, settings.element, settings.className);
 });
};
/* ***************************************************************************************** */

END;
		#
	}
#--------------------------------------------------------------------------------------------------
###################################################################################################
# fungsi global
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('semakPembolehubah')):
	function semakPembolehubah($senarai,$jadual,$p='0')
	{
		echo '<hr><pre>$' . $jadual . '=><br>';
		if($p == '0') print_r($senarai);
		if($p == '1') var_export($senarai);
		echo '</pre>';//*/
		//semakPembolehubah($ujian,'ujian',0);
		#http://php.net/manual/en/function.var-export.php
		#http://php.net/manual/en/function.print-r.php
	}
endif;//*/
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('versiphp')):
	function versiphp()
	{
		//phpinfo();
		//echo PHPVERSION() . '<br>';
		//echo PHP_VERSION . '<br>';
		//echo PHP_MAJOR_VERSION . '.' . PHP_MINOR_VERSION . '.' . PHP_RELEASE_VERSION . '<br>';
		//echo '$_SERVER=><pre>'; print_r($_SERVER); echo '</pre>';
		$paparServer = array('PATH_INFO','REQUEST_URI','PATH_TRANSLATED','PHP_SELF','QUERY_STRING',
		'REQUEST_SCHEME','SERVER_PORT');
		foreach($paparServer as $pelayan):
			echo (isset($_SERVER[$pelayan])) ?
				'<br>' . $pelayan . ' = <strong>' . $_SERVER[$pelayan] . '</strong>'
				: '<br><em> pembolehubah ' . $pelayan . ' tak wujud</em>';
		endforeach;
	}
endif;//*/
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('paparVersiPhp')):
	function paparVersiPhp()
	{
		$p = 'PHP ' . PHP_MAJOR_VERSION . '.' . PHP_MINOR_VERSION
		. '.' . PHP_RELEASE_VERSION . '';
		return $p;
	}
endif;//*/
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('bersih')):
	/** */
	function bersih($papar)
	{
		# lepas lari aksara khas dalam SQL
		//$papar = mysql_real_escape_string($papar);
		# buang ruang kosong (atau aksara lain) dari mula & akhir
		$papar = trim($papar);
		# tukar kod %20 kepada space
		$papar = myUrlEncode($papar);

		return $papar;
	}
endif;
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('myUrlEncode')):
	function myUrlEncode($string)
	{
		# https://www.php.net/urlencode
		$entities = array('%20', '%21', '%2A', '%27', '%28', '%29', '%3B', '%3A', '%40', '%26',
		'%3D', '%2B', '%24', '%2C', '%2F', '%3F', '%25', '%23', '%5B', '%5D');
		$replacements = array(' ', '!', '*', "'", "(", ")", ";", ":", "@", "&", "=", "+", "$",
		",", "/", "?", "%", "#", "[", "]");

		//return str_replace($entities, $replacements, urlencode($string));
		return str_replace($entities, $replacements, $string);
	}
endif;//*/
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('diatas')):
	function diatas($title = 'List Folder', $urlcss)
	{
		$linkCss = masukCss($urlcss);
		$title = ($title == null) ? 'Senarai Kod' : ucfirst($title);
		print <<<END
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1,, maximum-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<title>$title</title>
$linkCss
</head>
<body>
END;
		#
	}
endif;//*/
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('masukCss')):
	function masukCss($urlcss)
	{
		$p = '';
		#
		if (isset($urlcss))
		{
			foreach ($urlcss as $css)
			{
				$p .= "\n" . '<link rel="stylesheet" type="text/css" href="' . $css .'">';
			}
		}
		#
		return $p;
	}
endif;//*/
#--------------------------------------------------------------------------------------------------
###################################################################################################
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('binaButang')):
	function binaButang($senarai)
	{
		$output = "\r\t";
		$output .= '<a class="btn btn-primary" href="../">Kembali'
		. '<i class="fa fa-binoculars"></i></a>';
		$output .= "\n\t" . '<a class="btn btn-success rounded-pill"'
		. ' target="_blank" href="../rujukan/utama/msic-cari.html">MSIC</a>'
		. "\n\t" . '<a class="btn btn-success rounded-pill"'
		. ' target="_blank" href="../rujukan/utama/masco-cari.html">MASCO</a>'
		. "\n\t" . '<a class="btn btn-info rounded-pill"'
		. ' target="_blank" href="../rujukan/utama/institut-cari.html">Institut</a>';
		foreach($senarai as $jadual => $row):
			$output .= "\n\t" . '<a class="btn btn-outline-secondary rounded-pill"'
			. ' href="' . URL . '?/' .$jadual. '">'
			. ucfirst($jadual) . '</a>';
		endforeach;
		$output .= "\n\t<hr>";

		echo $output;
		#
	}
endif;//*/
#--------------------------------------------------------------------------------------------------
if ( ! function_exists('panggilDataTable')):
	function panggilDataTable($data,$pilih)
	{
		//define ('URL', dirname('http://' . $_SERVER['SERVER_NAME'] . $_SERVER['PHP_SELF']));
		define ('URL', $_SERVER['SCRIPT_NAME']);
		include 'atas-set-001.php';//include 'diatas-001.php';
		diatas($pilih, $urlcss);
		#------------------------------------------------------------------------------------------
		binaButang($data);//versiphp();
		binaSatuJadual($data,$pilih);
		#------------------------------------------------------------------------------------------
		include 'dibawah.php';
		echo "<script>\n";
		jqueryExtendA();
		jqueryExtendB();
		jqueryExtendC();
		gradeTable002(null);
		echo "\n</script>\n</body>\n</html>";
	}
endif;//*/
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
$cari0 = explode('kod00.php',$_SERVER[$s]);
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
	$fail = explode('kod00.php',$_SERVER[$s]);
	$cari = explode('/',$fail[1]);//semakPembolehubah($fail,'fail');
	//semakPembolehubah($cari,'pilih');

	if(isset($cari[1])):
		$cariApa = bersih($cari[1]);
		if($cariApa == 'json'):
			$pilih = isset($cari[2]) ? $cari[2] : null;
			$cariApa = bersih($pilih);
			binaJson($data,$pilih);
		else:
			panggilDataTable($data,$cariApa);# panggil fungsi
		endif;
	else:
		panggilDataTable($data,null);# panggil fungsi
	endif;
else:
	panggilDataTable($data,null);# panggil fungsi
endif;
	//versiphp();
#--------------------------------------------------------------------------------------------------
# tamat koding
###################################################################################################
