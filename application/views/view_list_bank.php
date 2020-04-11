<html>
<head>
	<title>IMPORT EXCEL CI 3</title>
	<link rel="stylesheet" href="<?php echo base_url("css/bootstrap.min.css"); ?>">
		<script src="<?php echo base_url('js/jquery.min.js'); ?>"></script>

	<script>
	$(document).ready(function(){
		// Sembunyikan alert validasi kosong
		$("#kosong").hide();
	});
	</script>

</head>
<body>
	<table border="0" width="100%"><tr><td style="width: 15%; padding-left: 5%;">
	&nbsp;		
	</td><td style="width: 70%; text-align: center;">
	<img src="<?php echo base_url("assets/img/logo.png") ?>" width="150px" height="150px"></td>
	<td style="width: 15%; padding-right: 5%;">&nbsp;</td>
	</tr>
	<tr><td style="width: 15%; padding-left: 5%;">
	&nbsp;
	</td><td style="width: 70%; text-align: center;">
	<h1>Official Paartners PT.Tobadihon Mandiri</h1></td><td style="width: 15%; padding-right: 5%;">
	<input type='button' name='link-address' value='Logout' class='btn btn-info' /></td>
	</tr>
	<tr><td colspan="3" style="background-color: black; color: white; text-align: center; padding: 0.4%;">Silahkan pilih salah satu bank untuk membuka data</td></tr>
	</table>
	<br>

	<table border="0"  width="100%" style="text-align: center;">
		<tr>
			<td style="width: 35%"><img src="<?php echo base_url("assets/img/bank-mega.png") ?>" width="150px" height="110px"></td>
			<td style="width: 30%"><img src="<?php echo base_url("assets/img/bank-bni.png") ?>" width="200px" height="70px"></td>
			<td style="width: 35%"><img src="<?php echo base_url("assets/img/bank-bri.png") ?>" width="250px" height="70px"></td></tr>
		<tr>
			<td><a href="<?= base_url('index.php/nasabah/lists/B1'); ?>"><input type='button' name='link-address' value='Pilih' class='btn btn-info' /></a></td>
			<td><a href="<?= base_url('index.php/nasabah/lists/B2'); ?>"><input type='button' name='link-address' value='Pilih' class='btn btn-info' /></a></td>
			<td><a href="<?= base_url('index.php/nasabah/lists/B3'); ?>"><input type='button' name='link-address' value='Pilih' class='btn btn-info' /></a></td></tr>
	</table>
	<hr>
	<table border="0"  width="100%" style="text-align: center;">
		<tr>
			<td style="width: 35%"><img src="<?php echo base_url("assets/img/bank-hc.png") ?>" width="150px" height="90px"></td>
			<td style="width: 30%"><img src="<?php echo base_url("assets/img/bank-danamon.png") ?>" width="190px" height="150px"></td>
			<td style="width: 35%"><img src="<?php echo base_url("assets/img/bank-tunaiku.png") ?>" width="230px" height="150px"></td></tr>
		<tr>
			<td><a href="<?= base_url('index.php/nasabah/lists/B4'); ?>"><input type='button' name='link-address' value='Pilih' class='btn btn-info' /></a></td>
			<td><a href="<?= base_url('index.php/nasabah/lists/B5'); ?>"><input type='button' name='link-address' value='Pilih' class='btn btn-info' /></a></td>
			<td><a href="<?= base_url('index.php/nasabah/lists/B6'); ?>"><input type='button' name='link-address' value='Pilih' class='btn btn-info' /></a></td></tr>
	</table>
	<hr>
	<table border="0"  width="100%" style="text-align: center;">
		<tr>
			<td style="width: 35%"><img src="<?php echo base_url("assets/img/bank-coll.png") ?>" width="190px" height="90px"></td>
			<td style="width: 30%"><img src="<?php echo base_url("assets/img/bank-cimb.png") ?>" width="250px" height="60px"></td>
			<td style="width: 35%">&nbsp;</td></tr>
		<tr>
			<td><a href="<?= base_url('index.php/nasabah/lists/B7'); ?>"><input type='button' name='link-address' value='Pilih' class='btn btn-info' /></a></td>
			<td><a href="<?= base_url('index.php/nasabah/lists/B8'); ?>"><input type='button' name='link-address' value='Pilih' class='btn btn-info' /></a></td>
			<td>&nbsp;</td></tr>
	</table>
	<br><br>

</body>
</html>

















