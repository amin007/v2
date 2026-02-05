<?php
#--------------------------------------------------------------------------------------------------
# khas untuk elak dari capaian terus terhadap folder ini
//header('Location:../');
#--------------------------------------------------------------------------------------------------
/*header('Content-Type: text/plain;charset=utf-8');
header('Content-Disposition: inline');
readfile('masco2020_newss.csv');//*/
#--------------------------------------------------------------------------------------------------
	#--------------------------------------------------------------------------------------------------
	$rows = array_map(function($baris){
		return str_getcsv($baris, ';');
	},file('masco2020_newss.csv'));
	#--------------------------------------------------------------------------------------------------
	# carian dan jadual
	echo '<input type="text" name="cari" id="cari" placeholder="Cari...">'
	. "\n\t" . '<table border="1" id="t">';
	foreach($rows as $r):
		echo "\n\t" . '<tr>';
		foreach($r as $c):
			echo "\n\t\t" . '<td>' . htmlspecialchars($c) . '</td>';
		endforeach;
		echo "\n\t" . '</tr>';
	endforeach;
	echo "\n\t" . '</table>' . "\n\t";
	#--------------------------------------------------------------------------------------------------
	# script
		print <<<END
	<script>
document.getElementById('cari').addEventListener('keyup', function () {
	let v = this.value.toLowerCase();
	document.querySelectorAll('#t tr').forEach((tr, i) =>
	{
		if(i === 0) return;
		tr.style.display = tr.textContent.toLowerCase().includes(v) ? '' : 'none';
	});
});
</script>
END;
	# tamat
#--------------------------------------------------------------------------------------------------
