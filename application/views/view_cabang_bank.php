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
<style type="text/css">
	.th{
		text-align: center; 
	}
	.td{
		height: 60px;
	}
</style>
</head>
<body>
	<table border="0" width="100%"><tr><td style="width: 15%; padding-left: 5%;">
	<img src="<?php echo base_url("assets/img/logo.png") ?>" width="150px" height="150px">		
	</td><td style="width: 50%; padding-left: 5%;">
	<h1>PT.Tobadihon Mandiri</h1></td>
	<td style="width: 35%; padding-left: 15%;">
	<?php foreach($model['bank'] as $data){ 
				$photo = $data->Photo;
				$IDBank = $data->IDBank;
				$Nama = $data->Nama;
			} ?>
	<?php foreach($model['cabangbank'] as $data2){ 
				$NamaProvinsi = $data2->Nama;
			} ?>
	<img src="<?php echo base_url("assets/img/$photo") ?>" width="200px" height="110px"></td></tr></table>
	<br>

	<div class="container">

		<table border=0 class="table">
		<tr>
			<td style="text-align: left; width: 90%; padding-right: 5%;">
			<form method="post" id="search_category" enctype="multipart/form-data" 
					 action="<?php echo base_url()."index.php/bank/search_provinsi/".$IDBank; ?>" >
					<label>LOKASI CABANG </label><br>
					<select name="search_provinsi">
						<?php
						foreach($data_provinsi as $temp){
						echo '<option value="'.$temp['ID'].'">'.$temp['Nama'].'</option>';
						}
						?>
		            </select>
					<input type="hidden" name="IDBank" value="<?php echo $IDBank; ?>" size="25" />
					<input type="submit" name="submit" value="PILIH" class="btn btn-info" />
					</form>	
					<br><br>
			KANTOR CABANG <b><?php echo $Nama; ?></b> WILAYAH : " <?php echo $NamaProvinsi; ?> "
			</td>
			<td style="width: 10%;">
				<a href="<?php echo base_url()."index.php/nasabah/lists/".$IDBank; ?>">
				<input type="button" name="back" value="Kembali ke menu Sebelumnya" class="btn btn-info" />
				</a>
			</td>
			
		</tr>
		</table>
	<div class="table-responsive" style="float: left; width: 100%; ">
		<table class="table table-bordered" >
		<tr>

					<th class='th'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;LOKASI CABANG&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
					<th class='th'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Alamat LOKASI CABANG&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
					<th class='th'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TELEPON&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
		</tr>

		<?php
		if( ! empty($model['nasabah'])){ // Jika data pada database tidak sama dengan empty (alias ada datanya)
			foreach($model['nasabah'] as $data){ // Lakukan looping pada variabel siswa dari controller
	
				echo "<tr>";
					echo "<td class='td'>".$data->Lokasi."</td>";
					echo "<td class='td'>".$data->Alamat."</td>";
					echo "<td class='td'>".$data->Telepon."</td>";
					

				echo "</tr>";
			}
		}else{ // Jika data tidak ada
			echo "<tr><td colspan='5'>Data tidak ada</td></tr>";
		}
		?>
		</table>
	</div>
	<div class="table-responsive" style="float:left; width: 70%; height:100%; ">
	<?php
	// Tampilkan link-link paginationnya
	echo $model['pagination'];
	?><br>
	<!-- <?php if ($model['nasabah']){ ?>
	<b>Total : <?php echo $model['total_rows']; ?> Account</b>
	<?php } ?> -->
	</div>
	</div>
</body>
</html>
