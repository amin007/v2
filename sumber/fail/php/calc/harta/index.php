<?php
#==================================================================================================
include '../../fungsi_global.php';
#==================================================================================================
?>
<!DOCTYPE html>
<html>
<head>
<title>HTML Output Tag</title>
</head>
<body>
<form oninput = "sumresult.value = parseInt(z1.value)+parseInt(z2.value)+parseInt(z3.value)">
<input type = "range" name = "z1" value = "0" /> +
<input type = "number" name = "z2" value = "30" /> +
<input type = "number" name = "z3" value = "60" /><br />
The output is: <output name = "sumresult"></output>
</form>
</body>
</html>