<?php
function getFileList($dir)
{
	$retval = [];# array to hold return value

	# add trailing slash if missing
	if(substr($dir, -1) != "/") { $dir .= "/"; }

	# open pointer to directory and read list of files
	$d = @dir($dir) or die("getFileList: Failed opening directory {$dir} for reading");
	while(FALSE !== ($entry = $d->read()))
	{
		// skip hidden files
		if($entry{0} == ".") continue;
		if(is_dir("{$dir}{$entry}"))
		{
			$retval[] = [
				'name' => "{$dir}{$entry}/",
				'type' => filetype("{$dir}{$entry}"),
				'size' => 0,
				'lastmod' => filemtime("{$dir}{$entry}")
			];
		}
		elseif(is_readable("{$dir}{$entry}"))
		{
			$retval[] = [
			'name' => "{$dir}{$entry}",
			'type' => mime_content_type("{$dir}{$entry}"),
			'size' => filesize("{$dir}{$entry}"),
			'lastmod' => filemtime("{$dir}{$entry}")
			];
		}
	}
	$d->close();
	return $retval;
}
function paparFail()
{
	diatas();
	echo "\n" . '<ul class="fa-ul">';
	foreach(getFileList('./') as $file):
		echo ($file['type'] != 'dir') ?
		"\n<li>" . pautan($file['name']) . '</li>'
		: '';
	endforeach;
	echo "\n</ul>\n";
	dibawah();
}
function pautan($fail)
{
	return '<span class="fa-li" ><i class="far fa-folder fa-spin"></i></span>'
	. '<a target="_blank" href="' . $fail . '">' . $fail . '</a>';
}
function diatas()
{
	?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<title>Bootstrap & Font Awesome</title>
<!-- Bootstrap Core CSS -->
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
<!-- Custom Fonts -->
<link href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" rel="stylesheet" type="text/css">
</head>
<body>
<?php
}
function dibawah()
{
	?>
<!-- jQuery -->
<script src="https://code.jquery.com/jquery-2.2.3.min.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>
</html>
<?php
}