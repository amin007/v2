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
/* Kod Bahasa (LT)(2 digit)
Kod bahasa yang utama semasa temu ramah. Sila lihat Butiran 16 di Butir-Butir Pengenalan STB/LFS-1
*/
$data['kod bahasa'] = array(
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
	array('','7120','7120 - Bangladesh [Asia]'),
	array('','7130','7130 - Indonesia [Asia]'),
	array('','7140','7140 - Jepun [Asia]'),
	array('','7150','7150 - Kampuchea [Asia]'),
	array('','7160','7160 - Keturunan Pulau Kokos [Asia]'),
	array('','7170','7170 - Korea [Asia]'),
	array('','7180','7180 - Myanmar [Asia]'),
	array('','7190','7190 - Nepal [Asia]'),
	array('','7200','7200 - Pakistan [Asia]'),
	array('','7210','7210 - Philipina [Asia]'),
	array('','7220','7220 - Thailand [Asia]'),
	array('','7230','7230 - Vietnam [Asia]'),
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
	array('','00','00 - Pendidikan Prasekolah','Thn Pendidikan Luar Negara'),
	array('','11','11 - Tahun 1','1'),
	array('','12','12 - Tahun 2','2'),
	array('','13','13 - Tahun 3','3'),
	array('','14','14 - Tahun 4','4'),
	array('','15','15 - Tahun 5 | 11 - UPKK','5'),
	array('','16','16 - Tahun 6 | 12 - UPSR/UPSRA','6'),
	array('','21','21 - Kelas Peralihan','7'),
	array('','22','22 - Tingkatan 1','7/8'),
	array('','23','23 - Tingkatan 2','8/9'),
	array('','24','24 - Tingkatan 3','9/10'),
	array('','31','31 - Tingkatan 4','10/11'),
	array('','32','32 - Tingkatan 5 | 33 - SPM/MCE/SC/FMCE/CSC','11/12'),
	array('','33','33 - Program Kemahiran Asas','-'),
	array('','41','41 - Tingkatan 6 (rendah)','12/13'),
	array('','42','42 - Tingkatan 6 (atas) | 42 - STPM/STP/HSC','13/14'),
	array('','43','43 - Matrikulasi (Prauniversiti)',''),
	array('','51','51 - Program Sijil Kemahiran Khusus dan Teknikal',''),
	array('','61','61 - Program Sijil oleh Badan2 yang memberi Pengiktirafan',''),
	array('','62','62 - Program Sijil dari kolej/politeknik/universiti @ setaraf dgnnya',''),
	array('','63','63 - Program Sijil perguruan/kejururawatan/kesihatan bersekutu',''),
	array('','64','64 - Program Diploma Kemahiran Khusus dan Teknikal',''),
	array('','65','65 - Program Dip. Lanjutan/Higher National Diploma Kemahiran Khusus dan Teknikal',''),
	array('','66','66 - Program Diploma dari kolej/politeknik/universiti @ setaraf dgnnya',''),
	array('','67','67 - Program Diploma perguruan/kejururawatan/kesihatan bersekutu',''),
	array('','71','71 - Program Ijazah Sarjana Muda/Diploma Lanjutan',''),
	array('','72','72 - Program Lepasan Ijazah',''),
	array('','73','73 - Program Sarjana',''),
	array('','81','81 - Program Ijazah Falsafah Kedoktoran',''),
	array('','82','82 - Skim Pasca Kedoktoran',''),
	array('','91','91 - Pendidikan tidak formal',''),
	array('','92','92 - Tiada pendidikan',''),
	array('','93','93 - Masih belum bersekolah','')
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
	array('','84','84 - Diploma  perguruan/kejururawatan/kesihatan bersekutu'),

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
	array('','21X','Kemanusiaan',''),
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
	array('','381','381 - Undang-undang (am, antarabangsa)','Undang-undang'),
	array('','382','382 - Undang-undang syariah','Undang-undang'),
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
###################################################################################################
#--------------------------------------------------------------------------------------------------
	function binaSatuJadual($senarai,$pilih)
	{
		$class = 'table table-striped table-bordered';
		foreach($senarai as $jadual => $row):
		if($jadual == $pilih):
			$output = paparSatuJadual($row,$pilih);
			echo "\r\t" . '<table class="'.$class.'" id="allTable">'
			//echo "\r\t" . '<table border="1">'
			. $output . "\r\t" . '</table>' . "\r\r";
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
		elseif($kunci==2) $p = $jadual;
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
	function binaButang($senarai)
	{
		$output = "\r\t";
		$output .= '<a class="btn btn-primary" href="../">Kembali'
		. '<i class="fa fa-binoculars"></i></a>';
		$output .= "\n\t" . '<a class="btn btn-success rounded-pill"'
		. ' target="_blank" href="../utama/msic-cari.html">MSIC</a>';
		foreach($senarai as $jadual => $row):
			$output .= "\n\t" . '<a class="btn btn-outline-secondary rounded-pill"'
			. ' href="' . URL . '?cari=' .$jadual. '">'
			. ucfirst($jadual) . '</a>';
		endforeach;
		$output .= "\n\t<hr>";

		echo $output;
		#
	}
#--------------------------------------------------------------------------------------------------
###################################################################################################
# fungsi global
#--------------------------------------------------------------------------------------------------
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
#--------------------------------------------------------------------------------------------------
function versiphp()
{
	//phpinfo();
	//echo PHPVERSION() . '<br>';
	//echo PHP_VERSION . '<br>';
	//echo PHP_MAJOR_VERSION . '.' . PHP_MINOR_VERSION . '.' . PHP_RELEASE_VERSION . '<br>';
	//echo '$_SERVER=><pre>'; print_r($_SERVER); echo '</pre>';
	echo '<h1>' . $_SERVER['SCRIPT_NAME'] . '</h1>';
	echo '<h1>' . $_SERVER['PATH_INFO'] . '</h1>';
}
#--------------------------------------------------------------------------------------------------
function paparVersiPhp()
{
	$p = 'PHP ' . PHP_MAJOR_VERSION . '.' . PHP_MINOR_VERSION
	. '.' . PHP_RELEASE_VERSION . '';
	return $p;
}
#--------------------------------------------------------------------------------------------------
###################################################################################################
#--------------------------------------------------------------------------------------------------
//echo '<pre>';print_r($data);echo '</pre>';
//binaButang($data);
//binaJadual($data);
//binaJson($data);
#--------------------------------------------------------------------------------------------------
###################################################################################################
#--------------------------------------------------------------------------------------------------
	function panggilDataTable($data,$pilih)
	{
		//define ('URL', dirname('http://' . $_SERVER['SERVER_NAME'] . $_SERVER['PHP_SELF']));
		define ('URL', $_SERVER['SCRIPT_NAME']);
		include 'atas-set-001.php';
		include 'diatas-001.php';
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
#--------------------------------------------------------------------------------------------------
###################################################################################################
#--------------------------------------------------------------------------------------------------
/*
$_SERVER['PATH_INFO'] => untuk apache
$_SERVER['REQUEST_URI'] =
$_SERVER['PATH_TRANSLATED']
$_SERVER['PHP_SELF']

$s = 'PHP_SELF';
echo $_SERVER[$s] . '|<br>';
$cari0 = explode('kod00.php',$_SERVER[$s]);
$cari2 = explode('/',$cari0[1]);
echo '<pre>'; print_r($cari2); echo '</pre>';
*/
#--------------------------------------------------------------------------------------------------
/*if (isset($_SERVER[$s])):
	$fail = explode('kod00.php',$_SERVER[$s]);
	$cari = explode('/',$fail[1]);
	//semakPembolehubah($cari,'pilih');
	if(isset($cari[1])):
		if($cari[1] == 'json'):
			$pilih = isset($cari[2]) ? $cari[2] : null;
			binaJson($data,$pilih);
		else:
			panggilDataTable($data,$cari[1]);# panggil fungsi
		endif;
	else:
		panggilDataTable($data,null);# panggil fungsi
	endif;
//*/
#--------------------------------------------------------------------------------------------------
if (isset($_GET['cari'])):
	$cari = $_GET['cari'];
	//echo '<pre>$cari='; print_r($cari); echo '</pre>';
	panggilDataTable($data,$cari);# panggil fungsi
else:
	panggilDataTable($data,null);# panggil fungsi
endif;
#--------------------------------------------------------------------------------------------------