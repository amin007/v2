<?php
#--------------------------------------------------------------------------------------------------
	function semakPembolehubah($senarai,$jadual='entahlah',$p='0')
	{
		# semak $senarai adalah array atau tidak
		$semak = is_array($senarai) ? 'array' : 'bukan';
		if($semak == 'array'):
			echo '<pre>$' . $jadual . '=><br>';
			if($p == '0') print_r($senarai);
			if($p == '1') var_export($senarai);
			echo '</pre>' . "\n";
		else:
			echo tagVar($senarai,$jadual,2);
		endif;
		//$this->semakPembolehubah($ujian,'ujian',0);
		#http://php.net/manual/en/function.var-export.php
		#http://php.net/manual/en/function.print-r.php
	}
#--------------------------------------------------------------------------------------------------
	function tagVar($senarai,$jadual,$pilih=2)
	{
		# set pembolehubah utama
		$p1 = 'pre';#https://www.w3schools.com/tags/tag_var.asp
		$p2 = 'kbd';
		$p3 = 'code';
		$p4 = 'samp';
		# setkan tatasusunan
		$p[1] = "<$p1>\$$jadual = $senarai</$p1><br>\n";
		$p[2] = "<$p2>\$$jadual = $senarai</$p2><br>\n";
		$p[3] = "<$p3>\$$jadual = $senarai</$p3><br>\n";
		$p[4] = "<$p4>\$$jadual = $senarai</$p4><br>\n";
		#
		return $p[$pilih];
	}
#--------------------------------------------------------------------------------------------------
$string = file_get_contents('../kod2022/masco2020_newss.json');
$data = json_decode($string, true);
semakPembolehubah($data,'data json');
#--------------------------------------------------------------------------------------------------
/*
2519 - PEMBANGUN DAN JURUANALISIS PERISIAN DAN APLIKASI YANG TIDAK DIKELASKAN DI MANA-MANA
311950","Juruteknik Perkakas
***
2149";;"PROFESIONAL KEJURUTERAAN (TIDAK TERMASUK ELEKTROTEKNOLOGI)
YANG TIDAK DIKELASKAN DI MANA-MANA
2519";;"PEMBANGUN DAN JURUANALISIS PERISIAN DAN
282511";"Penganjur Kebajikan Wanita
311950";"Juruteknik Perkakas
3719";;"PROFESIONAL BERSEKUTU BADAN PENGAWALATURAN
511101";"Atendan Kabin Kapal
"";"6 DIGIT";;;
634104";"Pengutip Sarang Burung"
811319";"Pembantu Operator
8159";;"OPERATOR MESIN PRODUK TEKSTIL, BULU, DAN KULIT YANG TIDAK DIKELASKAN DI MANA-MANA
9332";;"PEMANDU KENDERAAN DAN JENTERA TARIKAN-HAIWAN"
***
013149;Jurupulih Perubatan Cara Kerja
#022113;Anggota Petugas Wisma Pegawai;Member Of Officers
#;111402;Presiden Persekutuan Majikan-Majikan;President Of Employers
1219xx;Pengurus Perkhidmatan Perniagaan Dan Pentadbiran
#132136;Ketua Rawatan Panas (Logam);Head Of Heat Treatment
#282511;Penganjur Kebajikan Wanita;Women
#311950;Juruteknik Perkakas;Tooling Technician
3639xx;Profesional Bersekutu Kesenian Dan Kebudayaan Yang Tidak Dikelaskan Di
#511101;Atendan Kabin Kapal;Ship
%
;6-Pekerja Kemahiran Pertanian, Perhutanan, Penternakan Dan Perikanan-Skilled Agricultural, Forestry, Livestock And Fishery Workers;611108;Penanam Buah Naga;Grower, Dragon Fruit;2020;611108;2013;611108
;1-Pengurus-Managers;611109;Pengarah Syarikat;Company Director;2020;611109;2013;112106
%
#634104;Pengutip Sarang Burung;Collector, Bird
#811319;Pembantu Operator - L&Pi
834309;Orang Yang Bertanggungjawab
#;2-Profesional-Professionals;Jumud;;;2020;Jumud;2013;218239
*/
#--------------------------------------------------------------------------------------------------