<?php include '../diatas.php'; ?>
<div class="kotakAtas">
<div class="kotakTengah">
	<ul class="nav nav-tabs" id="myTab" role="tablist">
	<li class="nav-item">
		<a class="nav-link active" id="anjung-tab" data-toggle="tab" href="#anjung" role="tab" aria-controls="anjung" aria-selected="true">Anjung</a>
	</li>
	<li class="nav-item">
		<a class="nav-link" id="warna-tab" data-toggle="tab" href="#warna" role="tab" aria-controls="warna" aria-selected="false">Warna</a>
	</li>
	<li class="nav-item">
		<a class="nav-link" id="login-tab" data-toggle="tab" href="#login" role="tab" aria-controls="login" aria-selected="false">Login</a>
	</li>
	<li class="nav-item">
		<a class="nav-link" id="daftar-tab" data-toggle="tab" href="#daftar" role="tab" aria-controls="daftar" aria-selected="false">Daftar</a>
	</li>
	</ul>
	<div class="tab-content" id="myTabContent">
		<div class="tab-pane fade show active" id="anjung" role="tabpanel" aria-labelledby="anjung-tab">
<!-- ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
<br><?php include 'borangLogin000.php'; ?>
<!-- ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
		</div>
		<div class="tab-pane fade" id="warna" role="tabpanel" aria-labelledby="warna-tab">
<!-- ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
<br><?php include 'borangWarna.php'; ?>
<!-- ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
		</div>
		<div class="tab-pane fade" id="login" role="tabpanel" aria-labelledby="login-tab">
<!-- ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
<br><?php include 'borangLogin001.php'; ?>
<!-- ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
		</div>
		<div class="tab-pane fade" id="daftar" role="tabpanel" aria-labelledby="daftar-tab">
<!-- ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
<br><?php include 'borangLogin002.php'; ?>
<!-- ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
		</div>
	</div>
</div><!-- / class="kotakTengah" -->
</div><!-- / class="kotakAtas" -->
<?php include '../dibawah.php'; ?>