<?php
###################################################################################################
include '../fungsi_global.php';
include '../atas-set-001.php';
include '../diatas.php';
$tableID = 'myTable';
$tableClass = '';//'table table-striped table-bordered';
$tajuk = pecahArrayKeTH('#,BilM8,Negeri,Kod Negeri,Daerah,Kod DP,Mukim,Kod Mukim,PBT,Kod PBT,'
.'Bandar,Kod Bandar,DB00,BP00,Jenis BP00,Strata00,DB10,LB10,BP10,NGDBBP10,Jenis BP10,Strata10,'
.'DB20,LB20,BPSem20,NGDBBP20Sem,BPMuk20,NGDBBP20Muk,Jenis BP20,Strata20,JumTK10,JumPen10,'
.'JumTK20,JumPen20,Kod Perbandaran 2010,Nama PBT 2010,Kod Perbandaran 2020,Nama PBT 2020,DPN,'
.'Kod DPN,Wilayah Pem WP,Kod WP,Catatan');
echo "\n" . '<table id="' . $tableID . '" class="' . $tableClass . '" style="width:100%">'
. "\n<thead><tr>$tajuk</tr></thead>\n<tfoot><tr>$tajuk</tr></tfoot>\n"
. "</table>\n";
include '../dibawah.php';
//$datajson = '../../../../../cari/coicopjson';
$datajson = 'kodalamat02.json';
###################################################################################################
?>
<script type="text/javascript">
/////////////////////////////////////////////////////////////
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
/////////////////////////////////////////////////////////////
	var t = $('#myTable').DataTable({
	"ajax": "<?php echo $datajson ?>",
	searchHighlight: true,
	"columnDefs": [{
		"searchable": false,
		"orderable": false,
		"targets": 0
	}],
	"order": [[ 1, 'asc' ]]
    });

	t.on( 'order.dt search.dt', function (){
		t.column(0, {search:'applied', order:'applied'}).nodes().
		each( function (cell, i) {cell.innerHTML = i+1;});
    }).draw();
/////////////////////////////////////////////////////////////
</script>
</body>
</html><?php
	/*"columns": [
		{ "data": "bil" },
		{ "data": "s" },
		{ "data": "msic" },
		{ "data": "keterangan" },
		{ "data": "msic2000" },
		{ "data": "notakaki" }
	]*/
