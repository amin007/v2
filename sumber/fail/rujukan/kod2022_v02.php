<?php
###################################################################################################
include 'fungsi_global.php';
###################################################################################################
#--------------------------------------------------------------------------------------------------
$arr = get_defined_functions();
$kira = count($arr['internal']);
$kira2 = count($arr['user']);
#--------------------------------------------------------------------------------------------------
semakPembolehubah($kira,'jum internal');
semakPembolehubah($kira2,'jum user');
semakPembolehubah($arr['user'],'semak fungsi',0);
#--------------------------------------------------------------------------------------------------
/*
$arr['user']=Array
(
    [0] => semakpembolehubah
    [1] => tagvar
    [2] => versiphp
    [3] => paparversiphp
    [4] => bersih
    [5] => myurlencode
    [6] => importcsv2array01
    [7] => binasatujadual
    [8] => paparsatujadual
    [9] => binajadual
    [10] => tajukmedanjadual
    [11] => paparjadual
    [12] => kiratahun
    [13] => kiratahunjadual
    [14] => kirajadualtahun
    [15] => binajson
    [16] => jsondatatables
    [17] => debugjson
    [18] => diatas
    [19] => masukcss
    [20] => gradetable002
    [21] => jqueryextenda
    [22] => jqueryextendb
    [23] => jqueryextendc
    [24] => binabutangv00
    [25] => binapautan
    [26] => binabutang
    [27] => panggildatatable
)*/
#--------------------------------------------------------------------------------------------------