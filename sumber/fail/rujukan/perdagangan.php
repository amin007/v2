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
Appendix I - ISCED-F 2013: List of possible codes

array('','02 Arts and humanities','',''),
array('','021 Arts and humanities not further defined','',''),
array('','0200 Arts and humanities not further defined','',''),
array('','021 Arts','',''),
array('','0210 Arts not further defined','',''),
array('','0211 Audio-visual techniques and media production','',''),
array('','0212 Fashion, interior and industrial design','',''),
array('','0213 Fine arts','',''),
array('','0214 Handicrafts','',''),
array('','0215 Music and performing arts ','',''),
array('','0219 Arts not elsewhere classified ','',''),

array('','022 Humanities (except languages)','',''),
array('','0220 Humanities (except languages) not further defined','',''),
array('','0221 Religion and theology','',''),
array('','0222 History and archaeology','',''),
array('','0223 Philosophy and ethics','',''),
array('','0229 Humanities (except languages) not elsewhere classified','',''),
array('','023 Languages','',''),
array('','0230 Languages not further defined','',''),
array('','0231 Language acquisition','',''),
array('','0232 Literature and linguistics','',''),
array('','0239 Languages not elsewhere classified','',''),
array('','028 Inter-disciplinary programmes and qualifications involving arts and humanities','',''),
array('','0288 Inter-disciplinary programmes and qualifications involving arts and humanities','',''),
array('','029 Arts and humanities not elsewhere classified','',''),
array('','0299 Arts and humanities not elsewhere classified','',''),
array('','03 Social sciences, journalism and information','',''),
array('','030 Social sciences, journalism and information not further defined','',''),
array('','0300 Social sciences, journalism and information not further defined','',''),
array('','031 Social and behavioural sciences','',''),
array('','0310 Social and behavioural sciences not further defined','',''),
array('','0311 Economics','',''),
array('','0312 Political sciences and civics','',''),
array('','0313 Psychology','',''),
array('','0314 Sociology and cultural studies','',''),
array('','0319 Social and behavioural sciences not elsewhere classified','',''),
array('','032 Journalism and information','',''),
array('','0320 Journalism and information not further defined','',''),
array('','0321 Journalism and reporting','',''),
array('','0322 Library, information and archival studies','',''),
array('','0329 Journalism and information not elsewhere classified','',''),
array('','038 Inter-disciplinary programmes and qualifications involving social sciences, journalism and information','',''),
array('','0388 Inter-disciplinary programmes and qualifications involving social sciences, journalism and 
information','',''),
array('','039 Social sciences, journalism and information not elsewhere classified','',''),
array('','0399 Social sciences, journalism and information not elsewhere classified 0400 Business, 
administration and law not further defined','',''),
array('','04 Business, administration and law','',''),
array('','040 Business, administration and law not further defined','',''),
array('','041 Business and administration','',''),
array('','0410 Business and administration not further defined','',''),
array('','0411 Accounting and taxation','',''),
array('','0412 Finance, banking and insurance','',''),
array('','0413 Management and administration','',''),
array('','0414 Marketing and advertising','',''),
array('','0415 Secretarial and office work','',''),
array('','0416 Wholesale and retail sales','',''),
array('','0417 Work skills','',''),
array('','0419 Business and administration not elsewhere classified','',''),
array('','042 Law','',''),
array('','0421 Law','',''),
array('','048 Inter-disciplinary programmes and qualifications involving business,'
. ' administration and law','',''),
array('','0488 Inter-disciplinary programmes and qualifications involving business,'
. ' administration and law','',''),
array('','049 Business, administration and law not elsewhere classified','',''),
array('','0499 Business, administration and law not elsewhere classified','',''),
array('','05 Natural sciences, mathematics and statistics','',''),
array('','050 Natural sciences, mathematics and statistics not further defined','',''),
array('','0500 Natural sciences, mathematics and statistics not further defined','',''),
array('','051 Biological and related sciences','',''),
array('','0510 Biological and related sciences not further defined','',''),
array('','0511 Biology','',''),
array('','0512 Biochemistry','',''),
array('','0519 Biological and related sciences not elsewhere classified','',''),
array('','052 Environment','',''),
array('','0520 Environment not further defined','',''),
array('','0521 Environmental sciences','',''),
array('','0522 Natural environments and wildlife','',''),
array('','0529 Environment not elsewhere classified','',''),
array('','053 Physical sciences','',''),
array('','0530 Physical sciences not further defined','',''),
array('','0531 Chemistry','',''),
array('','0532 Earth sciences','',''),
array('','0533 Physics','',''),
array('','0539 Physical sciences not elsewhere classified','',''),
array('','054 Mathematics and statistics','',''),
array('','0540 Mathematics and statistics not further defined','',''),
array('','0541 Mathematics','',''),
array('','0542 Statistics','',''),
array('','058 Inter-disciplinary programmes and qualifications involving natural'
. ' sciences, mathematics and statistics','',''),
array('','0588 Inter-disciplinary programmes and qualifications involving natural'
. ' sciences, mathematics and statistics','',''),
array('','059 Natural sciences, mathematics and statistics not elsewhere classified','',''),
array('','0599 Natural sciences, mathematics and statistics not elsewhere classified','',''),

array('','06 Information and Communication Technologies (ICTs)','',''),
array('','061 Information and Communication Technologies (ICTs)','',''),
array('','0610 Information and Communication Technologies (ICTs) not further defined','',''),
array('','0611 Computer use','',''),
array('','0612 Database and network design and administration','',''),
array('','0613 Software and applications development and analysis','',''),
array('','0619 Information and Communication Technologies (ICTs) not elsewhere classified','',''),
array('','068 Inter-disciplinary programmes and qualifications involving'
. ' Information and Communication Technologies (ICTs)','',''),
array('','0688 Inter-disciplinary programmes and qualifications involving'
. ' Information and Communication Technologies (ICTs)','',''),
array('','07 Engineering, manufacturing and construction','',''),
array('','070 Engineering, manufacturing and construction not further defined','',''),
array('','0700 Engineering, manufacturing and construction not further defined','',''),
array('','071 Engineering and engineering trades','',''),
array('','0710 Engineering and engineering trades not further defined','',''),
array('','0711 Chemical engineering and processes','',''),
array('','0712 Environmental protection technology','',''),
array('','0713 Electricity and energy','',''),
array('','0714 Electronics and automation','',''),
array('','0715 Mechanics and metal trades','',''),
array('','0716 Motor vehicles, ships and aircraft','',''),
array('','0719 Engineering and engineering trades not elsewhere classified','',''),
array('','072 Manufacturing  and processing','',''),
array('','0720 Manufacturing and processing not further defined','',''),
array('','0721 Food processing','',''),
array('','0722 Materials (glass, paper, plastic and wood)','',''),
array('','0723 Textiles (clothes, footwear and leather)','',''),
array('','0724 Mining and extraction','',''),
array('','0729 Manufacturing and processing not elsewhere classified','',''),
array('','073 Architecture and construction','',''),
array('','0730 Architecture and construction not further defined','',''),
array('','0731 Architecture and town planning','',''),
array('','0732 Building and civil engineering','',''),
array('','078 Inter-disciplinary programmes and qualifications involving'
. ' engineering, manufacturing and construction','',''),
array('','0788 Inter-disciplinary programmes and qualifications involving'
. ' engineering, manufacturing and construction','',''),
array('','079 Engineering,  manufacturing and construction not elsewhere classified ','',''),
array('','0799 Engineering, manufacturing and construction not elsewhere classified','',''),
array('','08 Agriculture, forestry, fisheries and veterinary','',''),
array('','080 Agriculture, forestry, fisheries and veterinary not further defined','',''),
array('','0800 Agriculture, forestry, fisheries and veterinary not further defined','',''),
array('','081 Agriculture','',''),
array('','0810 Agriculture not further defined','',''),
array('','0811 Crop and livestock production','',''),
array('','0812 Horticulture','',''),
array('','0819 Agriculture not elsewhere classified','',''),
array('','082 Forestry','',''),
array('','0821 Forestry','',''),
array('','083 Fisheries','',''),
array('','0831 Fisheries','',''),
array('','084 Veterinary','',''),
array('','0841 Veterinary','',''),
array('','088 Inter-disciplinary programmes and qualifications involving'
. ' agriculture, forestry, fisheries and veterinary','',''),
array('','0888 Inter-disciplinary programmes and qualifications involving'
, 'agriculture, forestry, fisheries and veterinary','',''),
array('','089 Agriculture, forestry, fisheries and veterinary not elsewhere classified','',''),
array('','0899 Agriculture, forestry, fisheries and veterinary not elsewhere classified','',''),
array('','09 Health and welfare','',''),
array('','090 Health and welfare not further defined','',''),
array('','0900 Health and welfare not further defined','',''),
array('','091 Health','',''),
array('','0910 Health not further defined','',''),
array('','0911 Dental studies','',''),
array('','0912 Medicine','',''),
array('','0913 Nursing and midwifery','',''),
array('','0914 Medical diagnostic and treatment technology','',''),
array('','0915 Therapy and rehabilitation','',''),
array('','0916 Pharmacy','',''),
array('','0917 Traditional and complementary medicine and therapy','',''),
array('','0919 Health not elsewhere classified','',''),
array('','092 Welfare','',''),
array('','0920 Welfare not further defined','',''),
array('','0921 Care of the elderly and of disabled adults','',''),
array('','0922 Child care and youth services','',''),
array('','0923 Social work and counselling','',''),
array('','0929 Welfare not elsewhere classified','',''),
array('','098 Inter-disciplinary programmes and qualifications'
. ' involving health and welfare','',''),
array('','0988 Inter-disciplinary programmes and qualifications'
. ' involving health and welfare','',''),
array('','099 Health and welfare not elsewhere classified','',''),
array('','0999 Health and welfare not elsewhere classified','',''),
array('','','',''),
array('','','',''),
array('','','',''),
array('','','',''),
array('','','',''),
array('','','',''),
array('','','',''),

10 Services 
100 Services not further defined 101 Personal services
1000 Services not further defined 1010 Personal services not further defined
1011 Domestic services
1012 Hair and beauty services
1013 Hotel, restaurants and catering 1014 Sports
1015 Travel, tourism and leisure
1019 Personal services not elsewhere classified

102 Hygiene and occupational health services
1020 Hygiene and occupational health services not further defined
1021 Community sanitation
1022 Occupational health and safety
1029 Hygiene and occupational health services not elsewhere 
classified
103 Security services
1030 Security services not further defined
1031 Military and defence
1032 Protection of persons and property
1039 Security services not elsewhere classified
104 Transport services
1041 Transport services
108 Inter-disciplinary programmes and qualifications involving services 
1088 Inter-disciplinary programmes and qualifications involving services
109 Services not elsewhere classified
1099 Services not elsewhere classified 
#--------------------------------------------------------------------------------------------------
array('','99 Field unknown','',''),
array('','999 Field unknown','',''),
array('','9999 Field unknown','',''),
array('','','',''),



//*/
#------------------------------------------------------------------------------------------
