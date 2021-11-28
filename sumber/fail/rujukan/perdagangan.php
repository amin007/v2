<?php
/*
#sumber
#http://significanttechno.com/export-table-data-to-excel-using-php-and-mysql-without-plugin
#############################################################################################################
include '../../../tatarajah.php';
$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
if (!$conn)
{
	die("Connection failed: " . mysqli_connect_error());
}
#############################################################################################################

#------------------------------------------------------------------------------------------
	$myTable = dpt_senarai('masco');
	$query = mysqli_query($conn, 'SELECT * FROM ' . $myTable[4] );#Get data from Database from demo table
	$delimiter = ",";
	$filename = 'fail_' . date('Ymd') . '.csv';#Create file name

	#create a file pointer
	$f = fopen('php://memory', 'w');

	#set column headers
	$fields = array('kod1', 'kod2', 'kod3', 'keterangan', 'catatan');
	fputcsv($f, $fields, $delimiter);

	#output each row of the data, format line as csv and write to file pointer
	while($row = $query->fetch_assoc())
	{
		$lineData = array($row['kod1'], $row['kod2'], $row['kod3'], $row['keterangan'], $row['catatan']);
		fputcsv($f, $lineData, $delimiter);
	}

	#move back to beginning of file
	fseek($f, 0);

	#set headers to download file rather than displayed
	header('Content-Type: text/csv');
	header('Content-Disposition: attachment; filename="' . $filename . '";');

	#output all remaining data on a file pointer
	fpassthru($f);//*/
#------------------------------------------------------------------------------------------
/*
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
	. ' kejuruteraan, pembuatan & pembinaan','',''),
	array('','0788 Program & kelayakan antara disiplin yang melibatkan'
	. ' kejuruteraan, pembuatan & pembinaan','',''),
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
	. ' pertanian, perhutanan, perikanan & veterinar','',''),
	array('','0888 Program & kelayakan antara disiplin yang melibatkan'
	. 'pertanian, perhutanan, perikanan & veterinar','',''),
	array('','089 Pertanian, perhutanan, perikanan & veterinar tidak dikelaskan di tempat lain',
	'0899 Pertanian, perhutanan, perikanan & veterinar tidak dikelaskan di tempat lain',''),
	array('','09 Kesihatan & kebajikan','',''),
	array('','090 Kesihatan & kebajikan tidak ditakrifkan lagi','',''),
	array('','0900 Kesihatan & kebajikan tidak ditakrifkan lagi','',''),
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
	array('','1029 Perkhidmatan kebersihan & kesihatan pekerjaan tidak dikelaskan di tempat lain','',''),
	array('','103 Perkhidmatan keselamatan','',''),
	array('','1030 Perkhidmatan keselamatan tidak ditakrifkan lagi','',''),
	array('','1031 Tentera & pertahanan','',''),
	array('','1032 Perlindungan orang & harta benda','',''),
	array('','1039 Perkhidmatan keselamatan tidak dikelaskan di tempat lain','',''),
	array('','104 Perkhidmatan pengangkutan','',''),
	array('','1041 Perkhidmatan pengangkutan','',''),
	array('','108 Program & kelayakan antara disiplin yang melibatkan perkhidmatan','',''),
	array('','1088 Program & kelayakan antara disiplin yang melibatkan perkhidmatan','',''),
	array('','109 Perkhidmatan tidak dikelaskan di tempat lain','',''),
	array('','1099 Perkhidmatan tidak dikelaskan di tempat lain','',''),
	array('','99 Medan tidak diketahui','',''),
	array('','999 Medan tidak diketahui','',''),
	array('','9999 Medan tidak diketahui','',''),
//*/
#------------------------------------------------------------------------------------------
