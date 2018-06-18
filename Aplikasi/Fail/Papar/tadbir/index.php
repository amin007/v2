<style type="text/css">
.form-signin {
  max-width: 300px;
  padding: 19px 29px 29px;
  margin: 0 auto 20px;
  background-color: #fff;
  border: 1px solid #e5e5e5;
  -webkit-border-radius: 5px;
     -moz-border-radius: 5px;
    border-radius: 5px;
  -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
     -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
    box-shadow: 0 1px 2px rgba(0,0,0,.05);
}
.form-signin .form-signin-heading,
.form-signin .checkbox { margin-bottom: 10px;}
.form-signin input[type="text"],
.form-signin input[type="password"] {
  font-size: 16px;
  height: auto;
  margin-bottom: 15px;
  padding: 7px 9px;
}
</style>

<div class="container">
    <div class="row">
    <div class="span12">
	<h1 style="text-align:center;color:white;">
	Silalah Masuk Dengan Kebenaran</h1><br>
	<div class="row">
		<div class="span10">
			<form class="form-signin">
			<input type="text" class="input-block-level" placeholder="Nama Anda">
			<input type="password" class="input-block-level" placeholder="Kata Laluam">
			<label class="checkbox">
			<input type="checkbox" value="remember-me"> Ingati daku dalam doamu
			</label>
			<button class="btn btn-large btn-primary" type="submit">Apa lagi, masuklah</button>
			</form>
		</div>
		<div class="span1"><?php 
$namaServer = $_SERVER['SERVER_NAME'];
if (($namaServer=='localhost') || ($namaServer=='sidapmuar') ):
	echo null;
else:?>
		<!-- nuffnang -->
		<script type="text/javascript">nuffnang_bid = "2bb5639c70db0006532074b0c35f4b93";</script>
		<script type="text/javascript" src="http://synad2.nuffnang.com.my/lmn.js"></script>
		<!-- nuffnang-->
<?php
endif;
?>
		</div>
	</div>
    </div>
    </div>
</div>