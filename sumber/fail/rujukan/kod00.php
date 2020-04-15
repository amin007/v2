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
	array('','15','15 - Tahun 5','5'),
	array('','16','16 - Tahun 6','6'),
	array('','21','21 - Kelas Peralihan','7'),
	array('','22','22 - Tingkatan 1','7/8'),
	array('','23','23 - Tingkatan 2','8/9'),
	array('','24','24 - Tingkatan 3','9/10'),
	array('','31','31 - Tingkatan 4','10/11'),
	array('','32','32 - Tingkatan 5','11/12'),
	array('','33','33 - Program Kemahiran Asas','-'),
	array('','41','41 - Tingkatan 6 (rendah)','12/13'),
	array('','42','42 - Tingkatan 6 (atas)','13/14'),
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
	//array('','','Industri (MSIC 2008)	Pengekodan Aktiviti Pekerjaan'),
	array('','','01610 - Aktiviti membersihkan kebun tanaman seperti menebas, meracun rumput, mengumpul daun kering (tidak terlibat dengan pengeluaran tanaman di kebun tersebut)'),
	array('','','01261/01262 - Aktiviti mengait/memotong buah kelapa sawit'),
	array('','','01285 - Aktiviti penanaman pokok sireh'),
	array('','','01631 - Aktiviti pengasingan biji pinang daripada kulitnya'),
	array('','','02309 - Aktiviti pengumpulan air nira/daun pisang/pucuk paku/ ulam- ulaman'),
	array('','','03115 - Aktiviti pemungutan telur penyu'),
	array('','','03121 - Aktiviti penangkapan ikan di darat (sungai/pedalaman)'),
	array('','','10202 - Aktiviti pengeluaran ikan masin/jeruk'),
	array('','','10302 - Aktiviti pengeluaran santan kelapa'),
	array('','','10306 - Aktiviti pengeluaran tempe/taucu daripada soya'),
	array('','','10713 - Aktiviti pembuatan kuih karas/loyang/cakar ayam'),
	array('','','10750 - Aktiviti pembuatan sate (memotong daging, merempah, memerap dan mencucuk di lidi)'),
	array('','','10793 - Aktiviti pembuatan kuah rojak'),
	array('','','10799 - Aktiviti pembuatan tapai'),
	array('','','12000 - Aktiviti pembuatan rokok daripada daun nipah'),
	array('','','13921 - Aktiviti pembuatan bantal kekabu'),
	array('','','13940 - Aktiviti pembuatan guni/bakul daripada anyaman tali'),
	array('','','13120 - Aktiviti penenunan songket'),
	array('','','14109 - Aktiviti jahitan songkok/tudung'),
	array('','','14103 - Aktiviti jahitan baju kurung/baju melayu lelaki'),
	array('','','16230 - Aktiviti pembuatan kayu palet'),
	array('','','16292 - Aktiviti pembuatan tikar mengkuang/bekas anyaman produk kayu'),
	array('','','16292 - Aktiviti pembuatan penyapu lidi'),
	array('','','16292 - Aktiviti pembuatan atap nipah'),
	array('','','17094 - Aktiviti pembuatan kertas sembahyang kaum Cina'),
	array('','','18110 - Aktiviti pengeluaran kad jemputan kahwin (termasuk rekaan grafik dan mencetak)'),
	array('','','82196 - Aktiviti fotokopi (salinan dokumen)'),
	array('','','21009 - Aktiviti pembuatan minyak untuk kegunaan perubatan tradisional daripada ekstrak tumbuhan'),
	array('','','22203 - Aktiviti pengeluaran bekas plastik dengan tali rafia'),
	array('','','32909 - Aktiviti pembuatan bunga tiruan (artificial flower)'),
	array('','','32909 - Aktiviti pembuatan keranda (daripada kayu atau artikel lain)'),
	array('','','37000 - Aktiviti pembentungan (Cth: Syarikat Indah Water Konsortium Sdn Bhd)'),
	array('','','41002 - Aktiviti pembinaan reban ayam'),
	array('','','43214 - Aktiviti perkhidmatan pemasangan piring ASTRO (tidak terlibat dengan penjualan perkhidmatan siaran ASTRO)'),
	array('','','43224 - Aktiviti perkhidmatan pemasangan sistem paip kepada isi rumah'),
	array('','','43909 - Aktiviti pemasangan papan iklan (tanpa perkhidmatan rekaan iklan dan percetakan iklan)'),
	array('','','47114 - Aktiviti jualan runcit di Kedai 7 Eleven'),
	array('','','47191 - Aktiviti jualan runcit gedung serbaneka (Cth: ISETAN, SOGO, METROJAYA, PARKSON)'),
	array('','','47192 - Aktiviti jualan runcit gedung serbaneka dan pasar raya (Cth: JUSCO)'),
	array('','','47193 - Aktiviti jualan runcit hypermarket (Cth: Mydin Hypermarket, TESCO, GIANT, AEON Big)'),
	array('','','47595 - Aktiviti jual runcit barangan elektrik di lot kedai untuk kegunaan isi rumah (Cth: SenQ)'),
	array('','','47591 - Aktiviti jual runcit perabot isi rumah untuk kegunaan isi rumah (Cth: Court Mammoth, Chan, etc)'),
	array('','','47721 - Aktiviti jual runcit produk farmaseutikal (Cth: Guardian, Watsons)'),
	array('','','47722 - Aktiviti jual runcit produk kosmetik, kelengkapan dandanan diri dan pewangi (Cth: AVON)'),
	array('','','49110 - Aktiviti pengangkutan penumpang antara bandar melalui laluan rel (Cth: KTM Berhad, Jabatan Keretapi Negeri Sabah)'),
	array('','','49223 - Aktiviti pengangkutan kanak-kanak sekolah'),
	array('','','49224 - Aktiviti pengangkutan e-hailing'),
	array('','','51101 - Aktiviti pengangkutan melalui udara (Cth: Malaysia Airlines, Air Asia)'),
	array('','','52213 - Aktiviti perkhidmatan penyediaan meletak kenderaan (Cth: Metro Parking Sdn Bhd)'),
	array('','','52221	Operasi perkhidmatan pelabuhan dan limbungan (Cth: Penang Port Sdn. Bhd, Johor Port Bhd, Bintulu Port Sdn. Bhd, Pelabuhan Tanjung Pelapas Sdn. Bhd., Kuantan Port Consortium Sdn. Bhd'),
	array('','','52232 - Aktiviti lapangan terbang dan kawalan trafik udara (Cth: Malaysia Airports Holdings Berhad)'),
	array('','','56106 - Aktiviti gerai/warung penjaja makanan (Cth: jual pisang goreng, laksa, cendol, putu mayam dan lain-lain hidangan makanan bukan di lot restoran)'),
	array('','','56107 - Aktiviti gerai/penjaja makanan di pasar tani dan pasar malam'),
	array('','','56290 - Aktiviti menyediakan hidangan makanan di rumah sendiri yang ditempah oleh isi rumah lain atau pertubuhan'),
	array('','','56301 - Aktiviti gerai/warung makan dengan kemudahan karaoke'),
	array('','','56302 - Aktiviti kedai ‘kopitiam’'),
	array('','','60100/60200 - Aktiviti di Radio Televisyen Malaysia (RTM)'),
	array('','','84136 - Aktiviti di Jabatan Penyiaran Malaysia'),
	array('','','63910 - Aktiviti agensi dan bilik berita (Cth: BERNAMA)'),
	array('','','64193 - Aktiviti di Labuan Financial Services Authority (LFSA)'),
	array('','','64195	Aktivit peruntukan modal dan kemudahan kredit bagi mempromosikan pembangunan dalam perindustrian, pertanian, komersil atau sektor ekonomi lain (Cth: TEKUN Nasional, Amanah Ikhtiar Malaysia)'),
	array('','','65301 - Aktiviti di Kumpulan Wang Simpanan Pekerja (KWSP)'),
	array('','','66221 - Aktiviti ejen insurans yang beroperasi sendiri'),
	array('','','66124 - Aktiviti broker forex (foreign exchange)'),
	array('','','88901 - Aktiviti kaunseling kredit dan pengurusan hutang konsumer'),
	array('','','68101/68102 - Aktiviti pembangunan hartanah (Cth: SP Setia Bhd, IOI Properties Bhd, Glomac Bhd, Uda Holdings Bhd, Sunway City Bhd, etc)'),
	array('','','68201 - Aktiviti ejen/broker hartanah'),
	array('','','84112 - Aktiviti di Jabatan Penilaian & Perkhidmatan Harta'),
	array('','','71103 - Aktiviti perkhidmatan juru ukur tanah'),
	array('','','74904 - Aktiviti perkhidmatan juru ukur bahan'),
	array('','','71101 - Aktiviti perkhidmatan pelukis pelan'),
	array('','','71200 - Aktiviti di Pusat Pemeriksaan Kenderaan Berkomputer (PUSPAKOM)'),
	array('','','73100 - Aktiviti melibatkan ciptaan dan rekaan iklan, perkhidmatan kreatif, perancangan dan pembelian media cetak/elektronik'),
	array('','','77101 - Aktiviti penyewaan kereta (tanpa pemandu)'),
	array('','','77102 - Aktiviti penyewaan lori/trak/treler (tanpa pemandu)'),
	array('','','77293 - Aktiviti penyewaan set kemudahan karaoke, hiasan pelamin untuk majlis perkahwinan/cukur jambul'),
	array('','','77291 - Aktiviti penyewaan set pakaian perkahwinan (pakaian, kasut, aksesori pakaian)'),
	array('','','77299 - Aktiviti penyewaan kanopi/khemah, kerusi, meja, kipas, lampu untuk kegunaan majlis perkahwinan/keramaian'),
	array('','','79110 - Aktiviti travel agency (Cth: Membawa jemaah haji)'),
	array('','','81100 - Aktiviti gabungan pelbagai kemudahan (Cth: Radicare (M) Sdn. Bhd., Propel Berhad)'),
	array('','','81210 - Aktiviti pembersihan/mengemas dari rumah ke rumah beroperasi sendiri'),
	array('','','81296 - Aktiviti perkhidmatan cuci pinggan mangkuk untuk tujuan komersil'),
	array('','','81300 - Aktiviti memotong rumput bagi pembersihan halaman rumah atau persekitaran awam'),
	array('','','82301 - Aktiviti pengurusan konvensyen/pameran perdagangan (Cth: Putrajaya International Convention Center (PICC), Kuala Lumpur Convention Center (KLCC), Malaysia International Exhibition & Convention Centre (MIECC), Shah Alam Convention Centre (SACC), Sime Darby Convention Centre, Persada Johor International Convention Centre.'),
	array('','','82920 - Aktiviti pembungkusan sebarang produk pembuatan yang beroperasi sendiri berdasarkan kontrak/yuran'),
	array('','','52299 - Aktiviti pembungkusan sampingan untuk penghantaran muatan/pengangkutan yang beroperasi sendiri berdasarkan kontrak/yuran'),
	array('','','82990 - Aktiviti runner (melakukan kerja untuk sokongan perniagaan seperti penghantaran surat/bi/bayaran, dll)'),
	array('','','84111 - Aktiviti di Jabatan Perdana Menteri (JPM), Pejabat Setiausaha Kerajaan Negeri (SUK), Kementerian Kewangan'),
	array('','','84112 - Aktiviti di Lembaga Hasil Dalam Negeri (LHDN)'),
	array('','','64191 - Aktiviti di Bank Simpanan Nasional (BSN)'),
	array('','','84131 - Aktiviti di Kastam Diraja Malaysia'),
	array('','','84121 - Aktiviti di Kementerian Pendidikan Malaysia, Jabatan Pendidikan Negeri, Pejabat Pelajaran Daerah'),
	array('','','84122 - Aktiviti di Kementerian Kesihatan Malaysia, Jabatan Kesihatan Negeri, Pejabat Kesihatan Daerah'),
	array('','','84123 - Aktiviti di Kementerian Kesejahteraan Bandar, Perumahan & Kerajaan  Tempatan  Malaysia,  Kementerian  Wilayah Persekutuan, Majlis Perbandaran/Bandaraya, Pejabat Daerah'),
	array('','','84124 - Aktiviti di Kementerian Belia & Sukan, Jabatan Belia &'),
	array('','','	Sukan Negara, Majlis Sukan Negara, Jabatan Warisan Negara, Istana Budaya, Jabatan Kebudayaan & Kesenian Negara'),
	array('','','84125 - Aktiviti di Jabatan Kemajuan Islam Malaysia, Jabatan Hal Ehwal Islam Negeri, Majlis Agama Islam Negeri'),
	array('','','84126 - Aktiviti di Kementerian Pembangunan Wanita, Keluarga & Masyarakat (KPWKM), Jabatan Kebajikan Masyarakat (JKM), Lembaga Penduduk & Pembangunan Keluarga Negara (LPPKN)'),
	array('','','84129 - Aktiviti pentadbiran kawasan setempat oleh Penghulu/Ketua Kampung/Tok Batin/Pemaju Mukim di mukim/kampung'),
	array('','','88909 - Aktiviti kerja sosial/keselamatan masyarakat setempat/kampung (Cth: JKKK)'),
	array('','','84131 - Aktiviti di Kementerian Perdagangan Dalam Negeri, Koperasi & Kepenggunaan (KPDNKK), Kementerian Perdagangan Antarabangsa & Industri (MITI)'),
	array('','','84132 - Aktiviti di Kementerian Pertanian & Industri Asas Tani (MOA), Kementerian Perusahaan Perladangan & Komoditi (MPIC) dan Kementerian Kemajuan Luar Bandar dan Wilayah (KKLW)'),
	array('','','84133 - Aktiviti di Kementerian Sumber Asli & Alam Sekitar (NRE) iaitu Jabatan Perhutanan, Jabatan Perlindungan Hidupan Liar & Taman Negara (PERHILITAN), Jabatan Alam Sekitar, Jabatan Mineral & Geosains, Jabatan Ketua Pengarah Tanah & Galian'),
	array('','','84134 - Aktiviti di Kementerian Kerja Raya, Jabatan Pengairan & Saliran (JPS), Jabatan Ukur & Pemetaan (JUPEM)'),
	array('','','84135 - Aktiviti di Kementerian Pengangkutan, Jabatan Pengangkutan Jalan (JPJ), Jabatan Penerbangan Awam (DCA), Jabatan Keselamatan Jalan Raya, Lembaga Pelabuhan Klang/Johor/Bintulu/Kuantan'),
	array('','','84136 - Aktiviti di Kementerian Tenaga, Teknologi Hijau & Air (KETTHA), Kementerian Komunikasi & Multimedia Malaysia (KKMM)'),
	array('','','84137 - Aktiviti di Kementerian Pelancongan Malaysia'),
	array('','','84138 - Aktiviti di Kementerian Sumber Manusia'),
	array('','','84220 - Aktiviti di Kementerian Pertahanan (MOD), Jabatan Latihan Khidmat Negara (JLKN)'),
	array('','','84239 - Aktiviti di Agensi Antidadah Kebangsaan (AADK), Jabatan Pertahanan Awam (JPAM), Jabatan Pendaftaran Pertubuhan (ROS), Jabatan Sukarelawan Malaysia (RELA)'),
	array('','','85221 - Aktiviti di Kolej Vokasional di bawah Kementerian Pendidikan Malaysia'),
	array('','','85301 - Aktiviti di Kolej Komuniti dan Politeknik'),
	array('','','85301 - Aktiviti di Institut Pendidikan Guru Malaysia'),
	array('','','85493 - Aktiviti di Sekolah Agama Rakyat di bawah Kerajaan Negeri'),
	array('','','85493 - Aktiviti pengajaran Al-Quran yang beroperasi di rumah sendiri atau pondok'),
	array('','','85491 - Aktiviti pengajaran tuisyen yang beroperasi di rumah sendiri atau di rumah pelanggan'),
	array('','','85411 - Aktiviti pengajaran sukan oleh guru atau jurulatih persendirian (renang, yoga, dll)'),
	array('','','85499 - Aktiviti pendidikan keusahawanan'),
	array('','','85500 - Aktiviti di Pusat Kegiatan Guru (yang berasingan daripada sekolah atau Pejabat Pendidikan)'),
	array('','','85500 - Aktiviti di Lembaga Peperiksaan Malaysia, Institut Aminuddin Baki (IAB), Agensi Kelayakan Malaysia (MQA)'),
	array('','','86201 - Aktiviti di Klinik Kesihatan Daerah di bawah Kementerian Kesihatan'),
	array('','','86202 - Aktiviti di Klinik Pakar Kanak-Kanak, Klinik Pakar Wanita, Klinik Pakar Kulit yang dijalankan oleh agensi swasta'),
	array('','','86909 - Aktiviti pengamal perubatan tradisional oleh bidan kampung atau tukang urut yang biasanya beroperasi secara sendiri'),
	array('','','87909 - Aktiviti rumah/institusi masalah juvana'),
	array('','','88109 - Aktiviti kerja sosial harian (tanpa penginapan) kepada orang-orang kurang upaya (Cth: Pusat Pemulihan Dalam Komuniti)'),
	array('','','88902 - Aktiviti penjagaan harian bayi/kanak-kanak di rumah sendiri'),
	array('','','91021 - Aktiviti muzium dan pameran sains & teknologi (Cth: Pusat Sains)'),
	array('','','93111 - Aktiviti operasi kemudahan sukan futsal (dewan)'),
	array('','','93118 - Aktiviti di fitness center (gym)'),
	array('','','93120 - Aktiviti Persatuan Bola Sepak Malaysia (FAM), Persatuan Badminton Malaysia (BAM)'),
	array('','','93296 - Aktiviti perkhidmatan persembahan tarian naga/singa oleh kaum Cina'),
	array('','','94120 - Aktiviti dijalankan oleh Pertubuhan Arkitek Malaysia, Persatuan Jurutera Perunding Malaysia'),
	array('','','94200 - Aktiviti dijalankan oleh Persatuan Nelayan setempat'),
	array('','','94910 - Aktiviti di masjid/tokong/gereja seperti imam, bilal, nuja/siak, pastor/paderi, sami, dll'),
	array('','','95111 - Aktiviti membaik pulih komputer kepada isi rumah oleh orang perseorangan'),
	array('','','95221 - Aktiviti penyelenggaraan dan membaik pulih penghawa dingin bilik yang digunakan oleh isi rumah'),
	array('','','96011 - Aktiviti perkhidmatan mencuci dan menggosok pakaian yang dijalankan dari rumah ke rumah'),
	array('','','96032 - Aktiviti menggali kubur untuk pengebumian'),
	array('','','96035 - Aktiviti membersihkan halaman kubur seperti menebas, mengumpul daun kering'),
	array('','','96091 - Aktiviti pusat kecantikan seperti urutan refleksologi, sauna, mandian stim'),
	array('','','96092 - Aktiviti ramalan dan tukang tilik'),
	array('','','97000 - Aktiviti pembantu rumah yang bekerja dengan majikan isi rumah (termasuk amah, tukang kebun, pengawal peribadi)'),
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
				$output .= "\r\t<thead><tr>";
				foreach ( array_keys($row[$kira]) as $kunci ) :
				$tajuk = ($kunci==2) ? $jadual : $kunci;
				$output .= "\r\t" . '<th>' . ucfirst($tajuk) . '</th>';
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
			$output .= "\r\t" . '</tr>';
		}#----------------------------------------------------------------
		$output .= "\r\t" . '</tbody>';

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
		foreach($senarai as $jadual => $row):
			$output .= "\r\t" . '<a class="btn btn-outline-secondary rounded-pill"'
			. ' href="' . URL . '/' .$jadual. '">'
			. ucfirst($jadual) . '</a>';
		endforeach;
		$output .= "\r\t<hr>";

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
###################################################################################################
#--------------------------------------------------------------------------------------------------
//echo '<pre>';print_r($data);echo '</pre>';
//binaButang($data);
//binaJadual($data);
//binaJson($data);
#--------------------------------------------------------------------------------------------------
###################################################################################################
#--------------------------------------------------------------------------------------------------
//define ('URL', dirname('http://' . $_SERVER['SERVER_NAME'] . $_SERVER['PHP_SELF']));
define ('URL', $_SERVER['SCRIPT_NAME']);
include 'atas-set-001.php';
include 'diatas-001.php';
#--------------------------------------------------------------------------------------------------
$cari = explode('/',$_SERVER['PATH_INFO']);
//semakPembolehubah($cari,'cari');
binaButang($data);
//versiphp();
binaSatuJadual($data,$cari[1]);
#--------------------------------------------------------------------------------------------------
include 'dibawah.php';
echo "<script>\n";
jqueryExtendA();
jqueryExtendB();
jqueryExtendC();
gradeTable002(null);
echo "\n</script>\n</body>\n</html>";
#--------------------------------------------------------------------------------------------------
###################################################################################################