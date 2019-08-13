<html>
<head>
<link href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<style>
/*https://stackoverflow.com/questions/34692557/how-to-create-a-vertical-dotted-line-between-icons-with-example-image*/
.icon {
	text-align: center;
	width: 50px;
	background: lightgray;
	border-radius: 50%;
	border: 2px solid grey;
}

.icon > i {
	margin: 33% auto;
}

.dotted:after {
	content:"";
	position: absolute;
	z-index: -1;
	top: 0;
	bottom: 0;
	left: 50%;
	height: 100%;
	height: inherit;
	border-left: 2px dotted lightgrey;
}

.dotted {
	position: relative;
	margin: 10px auto;
	width: 50px;
}
</style>
<style>
/*https://stackoverflow.com/questions/37940355/how-to-create-a-vertical-line-between-icons-with-example-image*/
.timeline {
	position: relative;
	margin: 10px 0;
	padding: 0;
	list-style: none;
	counter-reset: section;
}
.timeline:before {
	content: '';
	position: absolute;
	top: 0;
	bottom: 0;
	width: 3px;
	background: #fdb839;
	left: 32px;
	margin: 0;
	border-radius: 2px;
}
.timeline > li {
	position: relative;
	margin-right: 10px;
	margin-bottom: 50px;
	padding-top: 18px;
	box-sizing: border-box;
	padding-left: 90px;
}
.timeline > li:before,
.timeline > li:after {
	display: block;
}

.timeline > li:before {
	counter-increment: section;
	content: counter(section);
	background: #fdb839;
	width: 70px;
	height: 70px;
	position: absolute;
	top: 0;
	border-radius: 50%;
	left: -1px;
	display: flex;
	justify-content: center;
	align-items: center;
	color: #Fff;
	font-size: 22px;
	font-weight: bold;
	border: 15px solid #fff;
	box-sizing: border-box;
}
.timeline > li:after {
	clear: both;
}
</style>
</head>
<body><h1 class="display-1">Perjalanan Hidup Ini</h1>
<hr>
<!-- ################################################################################################################################################################################################# -->
<div class="row">
	<div class="col-lg-1">&nbsp;</div>
	<div class="col-lg-2">
		<i class="fas fa-user"></i>
		<h5><small class="text-muted">Langkah 1</small><br>
			Siapa nama anda?</h5>
	</div>
	<div class="col-lg-2 text-middle"><i class="far fa-circle"></i></div>
	<div class="col-lg-6">
		<h2><small class="text-muted">Langkah 1</small><br>
			Nama anda</h2>
		<!-- ############################################################################################################################ -->
		<div class="input-group mb-3">
			<div class="input-group-prepend">
				<span class="input-group-text" id="basic-addon1">First Name</span>
			</div>
			<input type="text" class="form-control" placeholder="First Name">
		</div>
		<!-- ############################################################################################################################ -->
	</div>
</div><!-- / class="row" -->
<!-- ################################################################################################################################################################################################# -->
<div class="row">
	<div class="col-lg-1">&nbsp;</div>
	<div class="col-lg-2">
		<i class="fas fa-users"></i>
		<h5><small class="text-muted">Langkah 2</small><br>
			Penyertaan</h5>
	</div>
	<div class="col-lg-2 text-middle"><i class="far fa-circle"></i></div>
	<div class="col-lg-6">
		<br><br><br><br><br><br>
	</div>
</div><!-- / class="row" -->
<!-- ################################################################################################################################################################################################# -->
<div class="row">
	<div class="col-lg-1">&nbsp;</div>
	<div class="col-lg-2">
		<i class="fab fa-fort-awesome"></i>
		<h5><small class="text-muted">Langkah 3</small><br>
			Tema Acara</h5>
	</div>
	<div class="col-lg-2 text-middle"><i class="far fa-circle"></i></div>
	<div class="col-lg-6">
		<br><br><br><br><br><br>
	</div>
</div><!-- / class="row" -->
<!-- ################################################################################################################################################################################################# -->
<div class="row">
	<div class="col-lg-1">&nbsp;</div>
	<div class="col-lg-2">
		<i class="far fa-calendar-alt"></i>
		<h5><small class="text-muted">Langkah 4</small><br>
			Tarikh</h5>
	</div>
	<div class="col-lg-2 text-middle"><i class="far fa-circle"></i></div>
	<div class="col-lg-6">
		<br><br><br><br><br><br>
	</div>
</div><!-- / class="row" -->
<!-- ################################################################################################################################################################################################# -->
<div class="row">
	<div class="col-lg-1">&nbsp;</div>
	<div class="col-lg-2">
		<i class="fas fa-map-marker"></i>
		<h5><small class="text-muted">Langkah 5</small><br>
			Lokasi</h5>
	</div>
	<div class="col-lg-2 text-middle"><i class="far fa-circle"></i></div>
	<div class="col-lg-6">
	</div>
</div><!-- / class="row" -->
<!-- ################################################################################################################################################################################################# -->
<hr>
<table class="table">
<tr>
<td>&nbsp;</td>
<td>
	<i class="fas fa-user"></i>
	<h5><small class="text-muted">Langkah 1</small><br>
	Siapa nama anda?</h5>
	<br><br><br><br><br>
	<i class="fas fa-users"></i>
	<h5><small class="text-muted">Langkah 2</small><br>
	Penyertaan</h5>
	<br><br><br><br><br>
	<i class="fab fa-fort-awesome"></i>
	<h5><small class="text-muted">Langkah 3</small><br>
	Tema Acara</h5>
	<br><br><br><br><br>
	<i class="far fa-calendar-alt"></i>
	<h5><small class="text-muted">Langkah 4</small><br>
	Tarikh</h5>
	<br><br><br><br><br>
	<i class="fas fa-map-marker"></i>
	<h5><small class="text-muted">Langkah 5</small><br>
	Lokasi</h5>
</td>
<td class="text-left">
	<div class="dotted">
		<div class="icon"><i class="fa fa-camera-retro"></i></div>
		<br><br><br><br><br><br>
		<div class="icon"><i class="fa fa-camera-retro"></i></div>
		<br><br><br><br><br><br>
		<div class="icon"><i class="far fa-circle"></i></div>
	</div>
</td>
<td>&nbsp;</td>
</tr>
</table>
<!-- ################################################################################################################################################################################################# -->
<hr>
<ul class="timeline">
	<li>Langkah Pertama</li>
	<li>Langkah Kedua</li>
	<li>Langkah Ketiga</li>
	<li>Langkah Keempat</li>
	<li>Langkah Kelima</li>
</ul>
<!-- Untuk jquery 
////////////////////////////////////////////////////////////////////////////////////////////// -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>