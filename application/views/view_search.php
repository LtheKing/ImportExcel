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
			} ?>
	<img src="<?php echo base_url("assets/img/$photo") ?>" width="200px" height="110px"></td></tr></table>
	<br>

	<div class="container">

		<table border=0 class="table">
		<tr>
			<td style="width: 10%;">
			&nbsp;
			</td>
			<td style="text-align: left; width: 80%; padding-right: 5%;">
			Pencarian pada <b>Nomor / Nama Nasabah</b> dengan kata kunci " <?php echo "$keyword"; ?> "
			</td>
			<td style="width: 10%;">
				<a href="<?php echo base_url()."index.php/nasabah/lists/".$IDBank; ?>">
				<input type="button" name="back" value="Kembali ke menu Sebelumnya" class="btn btn-info" />
				</a>
			</td>
			
		</tr>
		</table>
	<div class="table-responsive" style="float: left; width: 75%; ">
		<table class="table table-bordered" >
		<tr>

					<th class='th'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nomor_Kartu&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
					<th class='th'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nama_Nasabah&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
					<th class='th'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Status&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
					<th class='th'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Action&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
					<th class='th'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tanggal_Turun_Account&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
					<th class='th'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Open_Date&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
					<th class='th'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;WO_Date&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
					<th class='th'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;DOB&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
					<th class='th'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Last_Payment_Date&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
					<th class='th'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Last_Payment&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
					<th class='th'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Limit&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
					<th class='th'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OS_Ball&&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
					<th class='th'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Principal&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
					<th class='th'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nomor_HP&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
					<th class='th'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nomor_Rumah&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
					<th class='th'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nomor_Kantor&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
					<th class='th'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nomor_EC&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
					<th class='th'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Email&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
					<th class='th'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ibu_Kandung&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
					<th class='th'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Jenis_Kelamin&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
					<th class='th'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Alamat_rumah_1&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
					<!-- <th class='th'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Alamat_rumah_2&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
					<th class='th'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Alamat_rumah_3&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
					<th class='th'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Alamat_rumah_4&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th> -->
					<th class='th'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nama_Kantor&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
					<th class='th'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Alamat_Kantor_1&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
					<!-- <th class='th'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Alamat_Kantor_2&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
					<th class='th'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Alamat_Kantor_3&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
					<th class='th'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Alamat_Kantor_4&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th> -->
					<th class='th'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nama_EC&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
					<th class='th'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Alamat_EC&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
					<th class='th'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Regional&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
					<th class='th'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Permanent_Message&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
					<!-- <th class='th'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Last_Report&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>-->

			<!-- 		<th class='th'>Nomor Kartu</th>
					<th class='th'>Nama Nasabah</th>
					<th class='th'>Status</th>
					<th class='th'>Action</th>
					<th class='th'>Tanggal Turun Account</th>
					<th class='th'>Open Date</th>
					<th class='th'>WO Date</th>
					<th class='th'>DOB</th>
					<th class='th'>Last Payment Date</th>
					<th class='th'>Last Payment</th>
					<th class='th'>Limit</th>
					<th class='th'>OS Ball</th>
					<th class='th'>Principal</th>
					<th class='th'>Nomor HP</th>
					<th class='th'>Nomor Rumah</th>
					<th class='th'>Nomor Kantor</th>
					<th class='th'>Nomor EC</th>
					<th class='th'>Email</th>
					<th class='th'>Ibu Kandung</th>
					<th class='th'>Jenis Kelamin</th>
					<th class='th'>Alamat rumah 1</th>
					<th class='th'>Alamat rumah 2</th>
					<th class='th'>Alamat rumah 3</th>
					<th class='th'>Alamat rumah 4</th>
					<th class='th'>Nama Kantor</th>
					<th class='th'>Alamat Kantor 1</th>
					<th class='th'>Alamat Kantor 2</th>
					<th class='th'>Alamat Kantor 3</th>
					<th class='th'>Alamat Kantor 4</th>
					<th class='th'>Nama EC</th>
					<th class='th'>Alamat EC</th>
					<th class='th'>Regional</th>
					<th class='th'>Permanent Message</th>
					<th class='th'>Last Report</th>		 -->
		</tr>

		<?php
		if( ! empty($model['nasabah'])){ // Jika data pada database tidak sama dengan empty (alias ada datanya)
			foreach($model['nasabah'] as $data){ // Lakukan looping pada variabel siswa dari controller
	
				echo "<tr>";
				echo "<td class='td'>".$data->NomorKartu."</td>";
					echo "<td class='td'>".$data->NamaNasabah."</td>";
					echo "<td class='td'>".$data->Status."</td>";
					echo "<td class='td'>".$data->Action."</td>";
					echo "<td class='td'>".$data->TglTurunAccount."</td>";
					echo "<td class='td'>".$data->OpenDate."</td>";
					echo "<td class='td'>".$data->WODate."</td>";
					echo "<td class='td'>".$data->DateOfBirth."</td>";
					echo "<td class='td'>".$data->LastPaymentDate."</td>";
					echo "<td class='td'>".$data->LastPaymentNominal."</td>";
					echo "<td class='td'>".$data->Limitasi."</td>";
					echo "<td class='td'>".$data->OSBall."</td>";
					echo "<td class='td'>".$data->Principall."</td>";
					echo "<td class='td'>".$data->NomorHP."</td>";
					echo "<td class='td'>".$data->NomorTeleponRumah."</td>";
					echo "<td class='td'>".$data->NomorTeleponKantor."</td>";
					echo "<td class='td'>".$data->NomorEC."</td>";
					echo "<td class='td'>".$data->Email."</td>";
					echo "<td class='td'>".$data->IbuKandung."</td>";
					echo "<td class='td'>".$data->JenisKelamin."</td>";
					echo "<td class='td'>".$data->AlamatRumah1."</td>";
					// echo "<td class='td'>".$data->AlamatRumah2."</td>";
					// echo "<td class='td'>".$data->AlamatRumah3."</td>";
					// echo "<td class='td'>".$data->AlamatRumah4."</td>";
					echo "<td class='td'>".$data->NamaKantor."</td>";
					echo "<td class='td'>".$data->AlamatKantor1."</td>";
					// echo "<td class='td'>".$data->AlamatKantor2."</td>";
					// echo "<td class='td'>".$data->AlamatKantor3."</td>";
					// echo "<td class='td'>".$data->AlamatKantor4."</td>";
					echo "<td class='td'>".$data->NamaEC."</td>";
					echo "<td class='td'>".$data->AlamatEC."</td>";
					echo "<td class='td'>".$data->Regional."</td>";
					echo "<td class='td'>".$data->PermanentMessage."</td>";
					// echo "<td class='td'>".$data->LastReport."</td>";

				echo "</tr>";
			}
		}else{ // Jika data tidak ada
			echo "<tr><td colspan='5'>Data tidak ada</td></tr>";
		}
		?>
		</table>
	</div>
	<div class="table-responsive" style="float:right; width: 20%; ">
		<table class="table" >
		<tr>
					<th class='th' colspan="3">AKSI&nbsp;</th>		
		</tr>

		<?php
		if( ! empty($model['nasabah'])){ // Jika data pada database tidak sama dengan empty (alias ada datanya)
			foreach($model['nasabah'] as $data){ // Lakukan looping pada variabel siswa dari controller
				echo "<tr>";
				echo "<td class='td'><input type='button' name='link-address' value='Lihat' class='btn btn-info' /></td>";
				echo "<td class='td'><input type='button' name='link-address' value='Edit' class='btn btn-info' /></td>";
				echo "<td class='td'><input type='button' name='link-address' value='Delete' class='btn btn-info' /></td>";
				echo "</tr>";
			}
		}else{ // Jika data tidak ada
			echo "<tr><td colspan='5'>&nbsp;</td></tr>";
		}
		?>
		</table>
	</div>
	<div class="table-responsive" style="float:left; width: 70%; height:100%; ">
	<?php
	// Tampilkan link-link paginationnya
	echo $model['pagination'];
	?><br>
	<?php if ($model['nasabah']){ ?>
	<b>Total : <?php echo $model['total_rows']; ?> Account</b>
	<?php } ?>
	</div>
	</div>
</body>
</html>
