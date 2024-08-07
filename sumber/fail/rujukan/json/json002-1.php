<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1,, maximum-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<title>Senarai Kod</title>

<link rel="stylesheet" type="text/css" href="//stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="//use.fontawesome.com/releases/v5.1.0/css/all.css">
<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/plug-ins/1.10.11/features/searchHighlight/dataTables.searchHighlight.css">
</head>
<body>
	<a class="btn btn-primary" href="../">Kembali<i class="fa fa-binoculars"></i></a>
	<a class="btn btn-success rounded-pill" target="_blank" href="../rujukan/utama/msic-cari.html">MSIC</a>
	<a class="btn btn-success rounded-pill" target="_blank" href="../rujukan/utama/masco-cari.html">MASCO</a>
	<a class="btn btn-info rounded-pill" target="_blank" href="../rujukan/utama/institut-cari.html">Institut</a>
<hr>
	<table id="allTable" class="table table-striped table-bordered" style="width:100%">
	<thead><tr><th>#</th><th>a</th><th>b</th><th>c</th><th>d</th><th>e</th><th>f</th><th>g</th><th>h</th></tr></thead>
	</table>
<hr>
<!-- Footer
================================================== -->
<footer class="footer">
	<div class="container">
		<span class="badge badge-info">
		&copy; Hak Cipta Terperihara 2019. Theme Asal Bootstrap Twitter</span>
	</div>
</footer>
<!-- khas untuk jquery dan js2 lain
================================================== -->

<script type="text/javascript" src="//code.jquery.com/jquery-3.3.1.js"></script>
<script type="text/javascript" src="//stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script type="text/javascript" src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="//cdn.datatables.net/plug-ins/1.10.11/features/searchHighlight/dataTables.searchHighlight.min.js"></script>

<script>
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
jQuery.fn.highlight = function (words, options)
{
	var settings = { className: 'highlight', element: 'span', caseSensitive: false, wordsOnly: false };
	jQuery.extend(settings, options);

	if (words.constructor === String){words = [words];}
	words = jQuery.grep(words, function(word, i){return word != '';});
	words = jQuery.map(words, function(word, i)
	{
		return word.replace(/[-[\]{}()*+?.,\^$|#\s]/g, "\$&");
	});
	if (words.length == 0) { return this; };

	var flag = settings.caseSensitive ? "" : "i";
	var pattern = "(" + words.join("|") + ")";
	if (settings.wordsOnly){pattern = "\b" + pattern + "\b";}
	var re = new RegExp(pattern, flag);

	return this.each(function ()
	{
		jQuery.highlight(this, re, settings.element, settings.className);
 });
};
/* ***************************************************************************************** */
	var t = $('#allTable').DataTable({
	"ajax": "kod2022/masco2020_v01.json",
	/*"ajax": "/admin/gradeAction",*/
	searchHighlight: true,
	"columnDefs": [{
		"searchable": false,
		"orderable": false,
		"targets": 0
	}],
	"order": []
	});
/* ***************************************************************************************** */
	// untuk carian
	t.on( 'order.dt search.dt', function (){
		t.column(0, {search:'applied', order:'applied'}).nodes().
		each( function (cell, i) {cell.innerHTML = i+1;});
	}).draw();
/* ***************************************************************************************** */
	/*for ( var i=0 ; i<9 ; i++ )
	{
		alert( 'Column index '+i+' is '+
			(t.column( i ).visible() === true ? 'visible' : 'not visible')
		);
	}*/
/* ***************************************************************************************** *
	for ( var i=0 ; i<9 ; i++ ) {
		t.column( i ).visible( false, false );
	}
	t.columns.adjust().draw( false ); // adjust column sizing and redraw
/* ***************************************************************************************** *
// Get data from the first row
var data = table.rows().data()[0]; // same as row(0).data()
var data = table.rows().data()[0]; // same as row(0).col()
/* ***************************************************************************************** */
	/*put column names into thead
	$('#allTable thead tr').empty();
		var cols=res.col;
		for (var i=0; i<cols.length; i++) {
			$('#alltable thead tr').append('<th>'+cols[i]+'</th>');
	}
	// untuk tajuk
	t.on( 'thead tr', function (){

	}).draw();*/

/* ***************************************************************************************** */
</script>
</body>
</html>