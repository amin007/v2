<?php
#--------------------------------------------------------------------------------------------------
# khas untuk elak dari capaian terus terhadap folder ini
//header('Location:../');
#--------------------------------------------------------------------------------------------------
/*header('Content-Type: text/plain;charset=utf-8');
header('Content-Disposition: inline');
readfile('namatempat.csv');//*/
#--------------------------------------------------------------------------------------------------
?><!doctype html>
<html lang="en">
<head>
<title>Nama Tempat</title>
<style>
.highlight { background-color : yellow; }
body { padding : 20px }
</style>
</head>
<body>

<!-- khas untuk carian
=============================================================================================== -->
<input type="text" name="cari" id="searchBox" placeholder="Cari...">

<!-- khas untuk senarai jadual
=============================================================================================== -->
<?php
$rows = array_map(function($baris){
		return str_getcsv($baris, ';');
	},file('namatempat.csv'));
?>
<table border="1" id="jadualNinja">
<tbody>
<?php
foreach($rows as $r): echo "\n\t"; ?>
<tr><?php
	foreach($r as $c): echo "\n\t"; ?>
	<td><?php htmlspecialchars($c) ?></td><?php echo "\n\t";
	endforeach; ?>
</tr><?php echo "\n\t";
endforeach; ?>
</tbody>
</table>

<!-- khas untuk jquery dan js2 lain
=============================================================================================== -->
<script>
/* ambil element input dan jadual */
const searchBox = document.getElementById('searchBox');
const table = document.getElementById('jadualNinja').getElementByTagName('tbody');

/* fungsi search dan highlight */
searchBox.addEventListener('input', function () {
	const searchText = this.value.toLowerCase();
	/* loop semua row */
	for (let row of table.rows)
	{
		let found = false;
		/* loop semua cell dalam row */
		for (let cell of rows.cells)
		{
			let text = cell.textContent.toLowerCase();
			/* highlight perkataan yang sama */
			if (text.includes(searchText) && textContent !== '')
			{
				cell.innerHTML = cell.textContent.replace(new
				RegExp(searchText, 'gi'), match =>
				'<span class="highlight">${match}</span>');
				found = true;
			}
			else
			{/* reset kalau tak match */
				cell.innerHTML = cell.textContent;
			}
		}

		/* sembunyi row jika tiada match */
		row.style.display = found || searchText === '' ? '' : 'none';
	}
});
</script>

<!-- khas untuk nota kaki
=============================================================================================== -->
</body>
</html>
