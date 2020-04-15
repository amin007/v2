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
//<td><div id='etnik1'>Kumpulan Etnik Responden </div></td>
$data['etnik'] = array(
	array('','1100','1100 - Melayu'),
	array('','2111','2111 - Bateq'),
	array('','2112','2112 - Jahai'),
	array('','2113','2113 - Kensiu'),
	array('','2114','2114 - Kintak'),
	array('','2115','2115 - Lanoh'),
	array('','2116','2116 - Mendriq'),
	array('','2121','2121 - Che Wong'),
	array('','2122','2122 - Jahut'),
	array('','2123','2123 - Mahmeri'),
	array('','2124','2124 - Semai'),
	array('','2125','2125 - Semoq Beri'),
	array('','2126','2126 - Temiar'),
	array('','2131','2131 - Jakun'),
	array('','2132','2132 - Orang Kanaq'),
	array('','2133','2133 - Orang Kuala'),
	array('','2134','2134 - Orang Seletar'),
	array('','2135','2135 - Semalai'),
	array('','2136','2136 - Temuan'),
	array('','3110','3110 - Bajau'),
	array('','3120','3120 - Balabak/Molbog'),
	array('','3130','3130 - Bisaya/Bisayah'),
	array('','3140','3140 - Bulongan'),
	array('','3150','3150 - Dusun'),
	array('','3160','3160 - Idahan/Ida\'an'),
	array('','3170','3170 - Iranun/Ilanun'),
	array('','3180','3180 - Kadayan/Kedayan'),
	array('','3190','3190 - Kadazan'),
	array('','3200','3200 - Lundayuh/Lundayeh'),
	array('','3210','3210 - Melayu Brunei'),
	array('','3220','3220 - Murut'),
	array('','3230','3230 - Orang Sungai/Sungoi'),
	array('','3240','3240 - Rungus'),
	array('','3250','3250 - Suluk'),
	array('','3260','3260 - Tidung'),
	array('','3998','3998 - Bumiputera Sabah Lain'),
	array('','4110','4110 - Bidayuh'),
	array('','4120','4120 - Bisayah (Sarawak)'),
	array('','4130','4130 - Bukitan'),
	array('','4140','4140 - Iban'),
	array('','4150','4150 - Kadayan (Sarawak)'),
	array('','4160','4160 - Kajang'),
	array('','4170','4170 - Kanowit'),
	array('','4180','4180 - Kayan'),
	array('','4190','4190 - Kejaman'),
	array('','4200','4200 - Kalabit'),
	array('','4210','4210 - Kenyah'),
	array('','4220','4220 - Lahanan'),
	array('','4230','4230 - Lisum'),
	array('','4240','4240 - Lugat'),
	array('','4250','4250 - Lun Bawang/Murut (Sarawak)'),
	array('','4260','4260 - Melanau'),
	array('','4270','4270 - Penan'),
	array('','4280','4280 - Punan'),
	array('','4290','4290 - Sabup'),
	array('','4300','4300 - Sekapan'),
	array('','4310','4310 - Sian'),
	array('','4320','4320 - Sipeng'),
	array('','4330','4330 - Tabun'),
	array('','4340','4340 - Tagal'),
	array('','4350','4350 - Tanjong'),
	array('','4360','4360 - Ukit'),
	array('','4998','4998 - Bumiputera Sarawak Lain'),
	array('','5110','5110 - Foochow'),
	array('','5120','5120 - Hainan'),
	array('','5130','5130 - Henghua'),
	array('','5140','5140 - Hokchia'),
	array('','5150','5150 - Hokchiu'),
	array('','5160','5160 - Hokkien'),
	array('','5170','5170 - Kantonis'),
	array('','5180','5180 - Khek (Hakka)'),
	array('','5190','5190 - Kwongsai'),
	array('','5200','5200 - Teochew'),
	array('','5998','5998 - Orang Cina Lain'),
	array('','6110','6110 - India Muslim/Malabari'),
	array('','6120','6120 - Malayali'),
	array('','6130','6130 - Punjabi (kecuali Sikh)'),
	array('','6140','6140 - Sikh'),
	array('','6150','6150 - Sinhala'),
	array('','6160','6160 - Tamil India'),
	array('','6170','6170 - Tamil Sri Lanka'),
	array('','6180','6180 - Telugu'),
	array('','6998','6998 - Orang India Lain'),
	array('','7110','7110 - Arab'),
	array('','7120','7120 - Bangladesh'),
	array('','7130','7130 - Indonesia'),
	array('','7140','7140 - Jepun'),
	array('','7150','7150 - Kampuchea'),
	array('','7160','7160 - Keturunan Pulau Kokos'),
	array('','7170','7170 - Korea'),
	array('','7180','7180 - Myanmar'),
	array('','7190','7190 - Nepal'),
	array('','7200','7200 - Pakistan'),
	array('','7210','7210 - Philipina'),
	array('','7220','7220 - Thailand'),
	array('','7230','7230 - Vietnam'),
	array('','7998','7998 - Bangsa Asia lain'),
	array('','8110','8110 - Denmark'),
	array('','8120','8120 - Perancis'),
	array('','8130','8130 - Jerman'),
	array('','8140','8140 - Itali'),
	array('','8150','8150 - Sepanyol'),
	array('','8160','8160 - United Kingdom'),
	array('','8998','8998 - Bangsa Eropah Lain'),
	array('','9110','9110 - Afrika'),
	array('','9120','9120 - Amerika Syarikat'),
	array('','9130','9130 - Australia'),
	array('','9140','9140 - New Zealand'),
	array('','9150','9150 - Serani'),
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
	array('','00','00 - Pendidikan Prasekolah | Thn Pendidikan Luar Negara'),
	array('','11','11 - Tahun 1 | 1'),
	array('','12','12 - Tahun 2 | 2'),
	array('','13','13 - Tahun 3 | 3'),
	array('','14','14 - Tahun 4 | 4'),
	array('','15','15 - Tahun 5 | 5'),
	array('','16','16 - Tahun 6 | 6'),
	array('','21','21 - Kelas Peralihan | 7'),
	array('','22','22 - Tingkatan 1 | 7/8'),
	array('','23','23 - Tingkatan 2 | 8/9'),
	array('','24','24 - Tingkatan 3 | 9/10'),
	array('','31','31 - Tingkatan 4 | 10/11'),
	array('','32','32 - Tingkatan 5 | 11/12'),
	array('','33','33 - Program Kemahiran Asas | -'),
	array('','41','41 - Tingkatan 6 (rendah) | 12/13'),
	array('','42','42 - Tingkatan 6 (atas) | 13/14'),
	array('','43','43 - Matrikulasi (Prauniversiti)'),
	array('','51','51 - Program Sijil Kemahiran Khusus dan Teknikal'),
	array('','61','61 - Program Sijil oleh Badan - badan yang memberi Pengiktirafan'),
	array('','62','62 - Program Sijil dari kolej/politeknik/universiti atau setaraf dengannya'),
	array('','63','63 - Program Sijil perguruan/kejururawatan/kesihatan bersekutu'),
	array('','64','64 - Program Diploma Kemahiran Khusus dan Teknikal'),
	array('','65','65 - Program Diploma Lanjutan/Higher National Diploma Kemahiran Khusus dan Teknikal'),
	array('','66','66 - Program Diploma54 dari kolej/politeknik/universiti atau setaraf dengannya'),
	array('','67','67 - Program Diploma perguruan/kejururawatan/kesihatan bersekutu'),
	array('','71','71 - Program Ijazah Sarjana Muda/Diploma Lanjutan'),
	array('','72','72 - Program Lepasan Ijazah'),
	array('','73','73 - Program Sarjana'),
	array('','81','81 - Program Ijazah Falsafah Kedoktoran'),
	array('','82','82 - Skim Pasca Kedoktoran'),
	array('','91','91 - Pendidikan tidak formal'),
	array('','92','92 - Tiada pendidikan'),
	array('','93','93 - Masih belum bersekolah')
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
	array('','61','61 - Sijil daripada badan2 yg memberi pengiktirafan atau yg setaraf'),
	array('','62','62 - Sijil drpd kolej atau yg setaraf'),
	array('','63','63 - Sijil drpd politeknik atau yg setaraf'),
	array('','64','64 - Sijil drpd universiti atau yg setaraf'),
	array('','65','65 - Sijil perguruan/kejururawatan/kesihatan bersekutu'),

	array('','71','71 - Diploma dlm kemahiran khusus dan teknikal'),
	array('','72','72 - Diploma Lanjutan/Higher National Diploma(HND) dlm kemahiran khusus dan teknikal'),

	array('','81','81 - Diploma drpd kolej atau yg setaraf(terutama kolej swasta)'),
	array('','82','82 - Diploma drpd politeknik atau yg setaraf'),
	array('','83','83 - Diploma drpd universiti atau yg setaraf'),
	array('','84','84 - Diploma  perguruan/kejururawatan/kesihatan bersekutu'),

	array('','91','91 - Ijazah Sarjana Muda/Diploma lanjutan'),
	array('','92','92 - Diploma/Sijil pasca ijazah atau drpd badan profesional/(ACCA/CA)'),
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
				$tajuk = ($kunci==2) ? $jadual : $kunci;
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
	function binaJson($senarai)
	{
		$class = 'table table-striped table-bordered';
		foreach($senarai as $jadual => $row):
			$output = jsonDataTables($row,$jadual);
			echo "\r\t" . '<hr>' . $output . "\r\t" . '<hr>';
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
	function binaButang($senarai)
	{
		$output  = "\r\t";
		$output .= '<a class="btn btn-primary" href="../">Kembali'
		. '<i class="fa fa-binoculars"></i></a>';
		foreach($senarai as $jadual => $row):
			$output .= '<a class="btn btn-outline-secondary rounded-pill"'
			. ' href="#">'
			. ' Cari ' . $jadual . '</a>';
		endforeach;

		echo $output;
		#
	}
###################################################################################################
#--------------------------------------------------------------------------------------------------
//echo '<pre>';print_r($data);echo '</pre>';
//binaButang($data);
//binaJadual($data);
//binaJson($data);
#--------------------------------------------------------------------------------------------------
###################################################################################################
#--------------------------------------------------------------------------------------------------
include 'atas=set-001.php';
include 'diatas.php';
$tableID = 'myTable';
$tableClass = 'table table-striped table-bordered';
$tajuk = '<th>#</th><th>s</th><th>msic</th><th>keterangan</th><th>msic2000</th><th>notakaki</th>';
echo "\n" . '<table id="' . $tableID . '" class="' . $tableClass . '" style="width:100%">'
. "\n<thead><tr>$tajuk</tr></thead>\n<tfoot><tr>$tajuk</tr></tfoot>\n"
. "</table>\n";
include '../dibawah.php';
#--------------------------------------------------------------------------------------------------
###################################################################################################
