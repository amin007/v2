<?php
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
$data['Pengajian 2022'] = array(
	array('','xx : Kumpulan Bidang Utama<br>xxx : Kumpulan Bidang Sub-utama<br>',
	'xxxx - Perincian Bidang Pengajian'),
	array('','00 : Program asas/ umum<br>000 : Program <em>generic</em><br>',
	'0000 - <em>Programmes and qualifications generic not further defined</em>'),
	array('','001 : Program asas/umum<br>','0011 - Program asas/umum'),
	array('','002 : Literasi & kefahaman asas<br>','0021 - Literasi & numerasi'),
	array('','003 : Kemahiran personal<br>',
	'0031 :- Kemahiran personal<br>− Pengurusan masa<br>'
	. '− Pengurusan kerjaya<br>− Teknik pengucapan awam'),
	array('','009 : Program <em>generic</em> lain<br>','0099 - Program <em>generic</em> lain'),
	array('','01 : Pendidikan',''),
	array('','011 : Pendidikan',
	'0110 - Pengajaran<br>'
	. '0111 - Sains pendidikan<br>'
	. '0012 - Latihan perguruan untuk guru pra-sekolah<br>'
	. '0113 - Latihan perguruan peringkat asas<br>'
	. '0114 - Latihan perguruan dengan pengkhususan subjek<br>'
	. '0119 - Latihan perguruan untuk subjek vokasional/praktikal'),
	array('','018 : Program <em>inter-disciplinary</em>',
	'0188 - Program <em>inter-disciplinary</em> yang melibatkan pendidikan'),
	array('','02 : Kemanusiaan & kesenian<br>020 : Kemanusiaan & kesenian<br>',
	'0200 - Kemanusiaan & kesenian'),
	array('','02 : Kemanusiaan & kesenian<br>021 : Kesenian<br>',
	'0211 - Produksi media & teknik audio-visual<br>'
	. '0212 - Rekabentuk fesyen, dalaman & perindustrian<br>'
	. '0213 - Seni lukis<br>'
	. '0214 - Seni halus<br>'
	. '0215 - Muzik & persembahan kesenian<br>'
	. '0216 - Pengajian filem, televisyen & skrin<br>'
	. '0219 - Kesenian-kesenian lain'),
	array('','02 : Kemanusiaan & kesenian<br>022 : Kemanusiaan',
	'0221 - Agama & theology<br>'
	. '0222 - Sejarah & arkeologi<br>'
	. '0223 - Falsafah & etika<br>'
	. '0224 - Pengajian islam<br>'
	. '0229 - Kemanusiaan'),
	array('','02 : Kemanusiaan & kesenian<br>023 : Bahasa',
	'0231 - Pengajian bahasa<br>'
	. '0232 - Kesusasteraan & linguistics<br>'
	. '0233 - Bahasa Kebangsaan (Bahasa Malaysia)<br>'
	. '0239 - Bahasa-bahasa lain'),
	array('','02 : Kemanusiaan & kesenian<br>'
	. '028 : Program <em>inter-discpilinary</em> yang melibatkan kemanusiaan & kesenian',
	'0288 - Program <em>inter-discpilinary</em> yamg melibatkan kemanusiaan & kesenian'),
	array('','02 : Kemanusiaan & kesenian<br>'
	. '029 : Kemanusiaan & kesenian lain',
	'0299 - Kemanusiaan & kesenian lain'),
	array('','03 : Sains sosial, kewartawanan & maklumat<br>'
	. '030 : Sains sosial, kewartawanan & maklumat<br>',
	'0300 - Sains sosial, kewartawanan & maklumat'),
	array('','031 : Sains sosial & tingkah laku',
	'0311 - Ekonomi<br>'
	. '0312 - Sains politik & sivik<br>'
	. '0313 - Psikologi<br>'
	. '0314 - Pengajian sosiologi & kebudayaan<br>'
	. '0319 - Sains sosial & tingkah laku<br>'),
	array('','032 : Kewartawanan & maklumat',
	'0321 - Kewartawanan & pelaporan<br>'
	. '0322 - Perpustakaan, maklumat & arkib<br>'
	. '0323 - Media & komunikasi<br>'
	. '0329 - Kewartawanan & maklumat lain<br>'),
	array('','038 Program <em>inter-discplinary</em> yang melibatkan sains sosial,'
	. ' kewartawanan & maklumat<br>',
	'0388 - Program <em>inter-discplinary</em> yang melibatkan sains sosial,'
	. ' kewartawanan & maklumat'),
	array('','039 Sains sosial, kewartawanan & maklumat lain<br>',
	'0399 - Sains sosial, kewartawanan & maklumat lain'),
	array('','04 Perniagaan, pentadbiran & undang-undang<br>'
	. ' 040 Perniagaan, pentadbiran & undang-undang',
	'0400 - Perniagaan, pentadbiran & undang-undang'),
	array('','041 Perniagaan & pentadbiran',
	'0411 - Perakaunan, percukaian & pengauditan<br>'
	. '0412 - Kewangan, perbankan & insurans<br>'
	. '0413 - Kewangan & perbankan islam<br>'
	. '0414 - Pengurusan & pentadbiran<br>'
	. '0415 - Pemasaran & pengiklanan<br>'
	. '0416 - Kesetiausahaan & perkeranian<br>'
	. '0417 - Kemahiran kerja<br>'
	. '0419 - Perniagaan & pentadbiran lain'),
	array('','042 Undang-undang (<em>LAW</em>)<br>',
	'0421 - Undang-undang (<em>LAW</em>)'),
	array('','048 Program <em>inter-discplinary</em> yang melibatkan perniagaan,'
	. ' pentadbiran & undang-undang<br>',
	'0488 - Program <em>inter-discplinary</em> yang melibatkan perniagaan,'
	. ' pentadbiran & undang-undang'),
	array('','049 Perniagaan, pentadbiran & undang-undang lain<br>',
	'0499 - Perniagaan, pentadbiran & undang-undang lain'),
	array('','05 Sains tulen, matematik & statistik<br>'
	. '050 Sains tulen, matematik & statistik<br>',
	'0500 - Sains tulen, matematik & statistik'),
	array('','05 Sains tulen, matematik & statistik<br>'
	. '051 Biologi & sains berkaitan',
	'0511 - Biologi<br>'
	. '0512 - Biokimia<br>'
	. '0519 - Biologi & sains berkaitan lain'),
	array('','05 Sains tulen, matematik & statistik<br>'
	. '052 Sains persekitaran',
	'0521 - Sains persekitaran<br>'
	. '0522 - Persekitaran semula jadi & hidupan liar<br>'
	. '0529 - Sains persekitaran lain'),
	array('','05 Sains tulen, matematik & statistik<br>'
	. '053 Sains fizikal',
	'0531 - Kimia<br>'
	. '0532 - Sains hayat<br>'
	. '0533 - Fizik<br>'
	. '0539 - Sains fizik lain'),
	array('','05 Sains tulen, matematik & statistik<br>'
	. '054 Matematik & statistik',
	'0540 - Matematik & statistik<br>'
	. '0541 - Matematik<br>'
	. '0542 - Statistik'),
	array('','058 Program <em>inter-discplinary</em> yang melibatkan sains tulen,'
	. ' matematik & statistik<br>',
	'0588 - Program <em>inter-discplinary</em> yang melibatkan sains tulen,'
	. ' matematik & statistik'),
	array('','059 Sains tulen, matematik & statistik lain<br>',
	'0599 - Sains tulen, matematik & statistik lain'),
	array('','06 Teknologi maklumat & komunikasi<br>'
	. '061 Teknologi maklumat & komunikasi',
	'0610 - Teknologi maklumat & komunikasi<br>'
	. '0611 - Teknologi & sistem maklumat<br>'
	. '0612 - Kejuruteraan perisian<br>'
	. '0613 - Sains pengkomputeran<br>'
	. '0614 - Penggunaan komputer<br>'
	. '0619 - Teknologi maklumat & komunikasi lain'),
	array('','06 Teknologi maklumat & komunikasi<br>'
	. '068 Program <em>inter-discplinary</em> yang melibatkan'
	. ' teknologi maklumat & komunikasi<br>',
	'0688 - Program <em>inter-discplinary</em> yang melibatkan'
	. ' teknologi maklumat & komunikasi'),
	array('','07 Kejuruteraan, pembuatan & pembinaan<br>'
	. '070 Kejuruteraan, pembuatan & pembinaan<br>',
	'0700 - Kejuruteraan, pembuatan & pembinaan'),
	array('','07 Kejuruteraan, pembuatan & pembinaan<br>'
	. '071 Kejuruteraan & kejuruteraan dagangan',
	'0711 - Kejuruteraan kimia & proses<br>'
	. '0712 - Tenaga & elektrik<br>'
	. '0713 - Elektronik & pengautomasian<br>'
	. '0714 - Mekanik & kerja logam<br>'
	. '0715 - Kenderaan bermotor, kapal & kapal terbang<br>'
	. '0716 - Kejuruteraan awam<br>'
	. '0717 - Teknologi perlindungan alam sekitar<br>'
	. '0719 - Kejuruteraan & kejuruteraan dagangan lain'),
	array('','07 Kejuruteraan, pembuatan & pembinaan<br>'
	. '072 Pembuatan & pemprosesan',
	'0721 - Pemprosesan makanan<br>'
	. '0722 - Bahan(gelas, kertas, plastik & kayu)<br>'
	. '0723 - Tekstil (pakaian, pakaian kaki & kulit)<br>'
	. '0724 - Perlombongan & galian<br>'
	. '0729 - Pembuatan & pemprosesan lain'),
	array('','07 Kejuruteraan, pembuatan & pembinaan<br>'
	. '073 Senibina & perancang bandar',
	'0731 - Senibina<br>'
	. '0732 - Perancangan bandar & wilayah<br>'
	. '0733 - Pembinaan & bangunan<br>'
	. '0734 - <em>Surveying</em>'),
	array('','07 Kejuruteraan, pembuatan & pembinaan<br>'
	. '074 Teknologi kejuruteraan',
	'0741 - Teknologi kejuruteraan'),
	array('','07 Kejuruteraan, pembuatan & pembinaan<br>'
	. '078 Program <em>inter-discplinary</em> yang melibatkan kejuruteraan,'
	. ' pembuatan & pembinaan<br>',
	'0788 - Program <em>inter-discplinary</em> yang melibatkan kejuruteraan,'
	. ' pembuatan & pembinaan'),
	array('','07 Kejuruteraan, pembuatan & pembinaan<br>'
	. '079 Kejuruteraan, pembuatan & pembinaan lain<br>',
	'0799 - Kejuruteraan, pembuatan & pembinaan lain'),
	array('','08 Pertanian, perhutanan, perikanan & veterinar<br>'
	. '080 Pertanian, perhutanan, perikanan & veterinar<br>',
	'0800 - Pertanian, perhutanan, perikanan & veterinar'),
	array('','081 Pertanian',
	'0811 - Pengeluaran ternakan & tanaman<br>'
	. '0812 - Horticulture<br>'
	. '0819 - Pertanian lain'),
	array('','082 Perhutanan','0821 - Perhutanan'),
	array('','083 Perikanan','0831 - Perikanan'),
	array('','084 Veterinar','0841 - Veterinar'),
	array('','088 Program <em>inter-discplinary</em> yang melibatkan pertanian,'
	. ' perhutanan, perikanan & veterinar<br>',
	'0888 - Program <em>inter-discplinary</em> yang melibatkan pertanian,'
	. ' perhutanan, perikanan & veterinar'),
	array('','089 Pertanian, perhutanan, perikanan & veterinar lain<br>',
	'0899 - Pertanian, perhutanan, perikanan & veterinar lain'),
	array('','09 Kesihatan & kebajikan<br>090 Kesihatan & kebajikan<br>',
	'0900 - Kesihatan & kebajikan'),
	array('','091 Kesihatan',
	'0911 - Pengajian pergigian<br>'
	. '0912 - Perubatan<br>'
	. '0913 - Kejururawatan & penjagaan<br>'
	. '0914 - Teknologi rawatan & perubatan diagnostik<br>'
	. '0915 - Terapi & pemulihan<br>'
	. '0916 - Farmasi<br>'
	. '0917 - Perubatan & terapi tradisional<br>'
	. '0919 - Kesihatan lain'),
	array('','092 Perkhidmatan sosial',
	'0921 - Penjagaan orang-orang tua & orang kurang upaya<br>'
	. '0922 - Perkhidmatan asuhan kanak-kanak & belia<br>'
	. '0923 - Kerja sosial & kaunseling<br>'
	. '0929 - Perkhidmatan sosial lain<br>'),
	array('','098 Program <em>inter-discplinary</em> yang melibatkan kesihatan & kebajikan',
	'0988 - Program <em>inter-discplinary</em> yang melibatkan kesihatan & kebajikan'),
	array('','099 Kesihatan & kebajikan lain','0999 - Kesihatan & kebajikan lain'),
	array('','10 Perkhidmatan<br>100 Perkhidmatan','1000 - Perkhidmatan'),
	array('','101 Perkhidmatan personel',
	'1011 - Perkhidmatan domestik<br>'
	. '1012 - Perkhidmatan pendandanan & kecantikan<br>'
	. '1013 - Hotel, restoran & katering<br>'
	. '1014 - Sukan<br>'
	. '1015 - Pengembaraan, pelancongan & rekreasi<br>'
	. '1019 - Perkhidmatan personel lain'),
	array('','102 : Perkhidmatan kebersihan & kesihatan pekerjaan',
	'1021 - Sanitasi komuniti<br>'
	. '1022 - Keselamatan & kesihatan pekerjaan<br>'
	. '1029 - Perkhidmatan kebersihan & kesihatan pekerjaan lain'),
	array('','103 : Perkhidmatan keselamatan',
	'1031 - Ketenteraan & pertahanan<br>'
	. '1032 - Perlindungan diri & harta benda<br>'
	. '1039 - Perkhidmatan keselamatan lain'),
	array('','104 : Perkhidmatan pengangkutan<br>',
	'1041 - Perkhidmatan pengangkutan'),
	array('','108 : Program <em>inter-discplinary</em> yang melibatkan perkhidmatan<br>',
	'1088 - Program <em>inter-discplinary</em> yang melibatkan perkhidmatan'),
	array('','109 : Perkhidmatan lain<br>','1099 - Perkhidmatan lain'),
	array('','99 : Lain-lain<br>999 : Lain-lain<br>','9999 - Lain-lain'),
);
#--------------------------------------------------------------------------------------------------