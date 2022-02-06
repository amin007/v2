<?php
/*
https://stackoverflow.com/questions/58222905/datatable-js-set-column-title-dynamically-from-json-data

0


I'm using Datatabls for displaying table data via ajax. But sometimes column names are different. So I get them from the server in array list with the json data. Now using empty thead and want to put actual column names there.

My JS:

$('#DTable').DataTable({
    "processing": true,
    "serverSide": true,
    "ajax": {
        "url": "data.php",
        "type": "POST",
        "dataType": "json",
        "dataSrc": "data"
    }
});
My JSON:

{
"col": [
    "A",
    "B",
    "C",
    "D",
    "E"
],
"data": [
    [
        "Umn(i4(5P~",
        "wA~W70Vtmj",
        "^taMfGgmKC",
        "klPx6XrZR*",
        "H6ooRlotEB"
    ],
    [
        "DrUE)Z234C",
        "udN2BJOSpn",
        "GWjU3~*hbr",
        "IFIk1t1!m(",
        "kH*Yypo5)E"
    ],
    [
              .........
    ]
]}
Suppose I need to use:

        "dataFilter": function(res) {
            res.col.....
        }
and

"columnDefs": [
      { "title": "My custom title", "targets": 0 }
]
But my data strange comes not in json datatype and I cant use res.col to list and put them and also don't know how exactly....


#--------------------------------------------------------------------------------------------------
OK. I found a solution. Maybe not the best, but its working.

// First call standard ajax request for getting column names
$.ajax({
    url: "data.php",
    type: "POST",
    dataType: "json",
    success: function(res) {

        //put column names into thead
        $('#DTable thead tr').empty();
        var cols=res.col;
        for (var i=0; i<cols.length; i++) {
            $('#DTable thead tr').append('<th>'+cols[i]+'</th>');
        }

        // initialise Datatable
        $('#DTable').DataTable({
            processing: true,
            serverSide: true,
            deferRender: true,
            ajax: {
                url: "data.php",
                type: "POST",
                dataType: "json",
                dataSrc: "data"
            }
        });
    }
});

#--------------------------------------------------------------------------------------------------
https://datatables.net/reference/type/DataTables.Api
#--------------------------------------------------------------------------------------------------
"col": ["#","Seksyen","Kod","Keterangan","Inggeris","versiBaru","v2020","versiLama","v2013"],
#--------------------------------------------------------------------------------------------------
line 365 - 1219xx ,- semak data asal
line 4333 - 3639xx
6671 - 834309
*/