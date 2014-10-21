<div class="container" style="background-color:white;">
    <div class="row">
    <div class="span12">
	<h1 style="text-align:center;background-color:white;">
	<?php echo $this->Tajuk_Muka_Surat; ?></h1><br>
	<div class="row">
		<div class="span11">
		{Tengah}
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

<div class="container" style="background-color:white;">
    <div class="row">
    <div class="span12" align="center">
	<h1><?php echo $this->Tajuk_Muka_Surat; ?></h1>
	</div>
	</div>
</div>