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

array('','','',''),
array('','','',''),
array('','','',''),
array('','','',''),
array('','','',''),
array('','','',''),
array('','','',''),
array('','','',''),
array('','','',''),
array('','','',''),
array('','','',''),
array('','','',''),
array('','','',''),
array('','','',''),
array('','','',''),
array('','','',''),






022 Humanities (except languages)
023 Languages
028 Inter-disciplinary programmes and qualifications involving arts and humanities
029 Arts and humanities not elsewhere classified


- 54 -

Detailed field


0220 Humanities (except 
languages) not further defined
0221 Religion and  theology 0222 History and archaeology 0223 Philosophy and ethics
0229 Humanities (except languages) not elsewhere classified
0230 Languages not further defined 0231 Language acquisition
0232 Literature and linguistics 0239 Languages not elsewhere classified
0288 Inter-disciplinary programmes and qualifications involving arts and humanities
0299 Arts and humanities not elsewhere classified




Broad field
03 Social sciences, journalism and information

















04 Business, administration and law
Narrow field
030 Social sciences, journalism and information not further defined
031 Social and behavioural sciences






032 Journalism and information





038 Inter-disciplinary programmes and qualifications involving social sciences, journalism and 
information 039 Social sciences, journalism and information not elsewhere classified 040 Business, 
administration and law not further defined

041 Business and administration








042 Law
048 Inter-disciplinary programmes and qualifications involving business, administration and law
049 Business, administration and law not elsewhere classified

















- 55 -
Detailed field
0300 Social sciences, journalism and information not further defined
0310 Social and behavioural sciences not further defined
0311 Economics
0312 Political sciences and civics 0313 Psychology
0314 Sociology and cultural studies 0319 Social and behavioural sciences not elsewhere classified
0320 Journalism and information not further defined
0321 Journalism and reporting
0322 Library, information and archival studies
0329 Journalism and information not elsewhere classified
0388 Inter-disciplinary programmes and qualifications involving social sciences, journalism and 
information
0399 Social sciences, journalism and information not elsewhere classified 0400 Business, 
administration and law not further defined

0410 Business and administration not further defined
0411 Accounting and taxation
0412 Finance, banking and insurance 0413 Management and administration 0414 Marketing and 
advertising
0415 Secretarial and office work 0416 Wholesale and retail sales 0417 Work skills
0419 Business and administration not elsewhere classified
0421 Law
0488 Inter-disciplinary programmes and qualifications involving business, administration and law
0499 Business, administration and law not elsewhere classified




Broad field
05 Natural sciences, mathematics and statistics























06 Information and Communication Technologies (ICTs)
Narrow field
050 Natural sciences, mathematics and statistics not further defined 051 Biological and related 
sciences




052 Environment



053 Physical sciences





054 Mathematics and statistics


058 Inter-disciplinary programmes and qualifications involving natural sciences, mathematics and 
statistics 059 Natural sciences, mathematics and statistics not elsewhere classified 061 
Information and Communication Technologies (ICTs)







068 Inter-disciplinary programmes and qualifications involving Information and Communication 
Technologies (ICTs)
















- 56 -
Detailed field
0500 Natural sciences, mathematics and statistics not further defined 0510 Biological and related 
sciences not further defined
0511 Biology
0512 Biochemistry
0519 Biological and related sciences not elsewhere classified
0520 Environment not further defined 0521 Environmental sciences
0522 Natural environments and wildlife 0529 Environment not elsewhere classified
0530 Physical sciences not further defined
0531 Chemistry
0532 Earth sciences
0533 Physics
0539 Physical sciences not elsewhere classified
0540 Mathematics and statistics not further defined
0541 Mathematics
0542 Statistics
0588 Inter-disciplinary programmes and qualifications involving natural
sciences, mathematics and statistics 0599 Natural sciences, mathematics and statistics not 
elsewhere classified 0610 Information and Communication Technologies (ICTs) not further defined 
0611 Computer use
0612 Database and network design and administration
0613 Software and applications development and analysis
0619 Information and Communication Technologies (ICTs) not elsewhere classified
0688 Inter-disciplinary programmes and qualifications involving Information and Communication 
Technologies (ICTs)




Broad field 07 Engineering,
manufacturing and
construction



























08 Agriculture, forestry, fisheries and veterinary
Narrow field
070 Engineering,  manufacturing and construction not further defined
071 Engineering and engineering trades








072 Manufacturing  and processing








073 Architecture and construction


078 Inter-disciplinary programmes and qualifications involving engineering, manufacturing and 
construction
079 Engineering,  manufacturing and construction not elsewhere classified 080 Agriculture, 
forestry, fisheries and veterinary not further defined
081 Agriculture



082 Forestry
083 Fisheries
084 Veterinary
088 Inter-disciplinary programmes and qualifications involving agriculture, forestry, fisheries and 
veterinary
089 Agriculture, forestry, fisheries and veterinary not elsewhere classified









- 57 -
Detailed field
0700 Engineering, manufacturing and construction not further defined
0710 Engineering and engineering trades not further defined
0711 Chemical engineering and processes
0712 Environmental protection technology
0713 Electricity and energy
0714 Electronics and automation 0715 Mechanics and metal trades
0716 Motor vehicles, ships and aircraft 0719 Engineering and engineering trades not elsewhere 
classified
0720 Manufacturing and processing not further defined
0721 Food processing
0722 Materials (glass, paper, plastic and wood)
0723 Textiles (clothes, footwear and leather)
0724 Mining and extraction
0729 Manufacturing and processing not elsewhere classified
0730 Architecture and construction not further defined
0731 Architecture and town planning 0732 Building and civil engineering 0788 Inter-disciplinary 
programmes and qualifications involving engineering, manufacturing and construction

0799 Engineering, manufacturing and construction not elsewhere classified 0800 Agriculture, 
forestry, fisheries and veterinary not further defined
0810 Agriculture not further defined 0811 Crop and livestock production 0812 Horticulture
0819 Agriculture not elsewhere classified
0821 Forestry
0831 Fisheries
0841 Veterinary
0888 Inter-disciplinary programmes and qualifications involving  agriculture, forestry, fisheries 
and veterinary

0899 Agriculture, forestry, fisheries and veterinary not elsewhere classified




Broad field
09 Health and welfare




















10 Services























99 Field unknown
Narrow field
090 Health and welfare not further defined
091 Health








092 Welfare




098 Inter-disciplinary programmes  and qualifications involving health and welfare
099 Health and welfare not elsewhere classified
100 Services not further defined 101 Personal services







102 Hygiene and occupational health services



103 Security services





104 Transport services
108 Inter-disciplinary programmes and qualifications involving services 109 Services not elsewhere 
classified
999 Field unknown







- 58 -
Detailed field
0900 Health and welfare not further defined
0910 Health not further defined 0911 Dental studies
0912 Medicine
0913 Nursing and midwifery
0914 Medical diagnostic and treatment technology
0915 Therapy and rehabilitation 0916 Pharmacy
0917 Traditional and complementary medicine and therapy
0919 Health not elsewhere classified 0920 Welfare not further defined 0921 Care of the elderly and 
of disabled adults
0922 Child care and youth services 0923 Social work and counselling 0929 Welfare not elsewhere 
classified
0988 Inter-disciplinary programmes and qualifications involving health and welfare
0999 Health and welfare not elsewhere classified
1000 Services not further defined 1010 Personal services not further defined
1011 Domestic services
1012 Hair and beauty services
1013 Hotel, restaurants and catering 1014 Sports
1015 Travel, tourism and leisure
1019 Personal services not elsewhere classified
1020 Hygiene and occupational health services not further defined
1021 Community sanitation
1022 Occupational health and safety 1029 Hygiene and occupational health services not elsewhere 
classified
1030 Security services not further defined
1031 Military and defence
1032 Protection of persons and property
1039 Security services not elsewhere classified
1041 Transport services
1088 Inter-disciplinary programmes and qualifications involving services
1099 Services not elsewhere classified 9999 Field unknown 
//*/
#------------------------------------------------------------------------------------------
