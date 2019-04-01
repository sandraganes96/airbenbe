<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="<?php echo base_url(); ?>assets/img/logo.png"/>
	<title>Persewaan Liburan, Rumah, Pengalaman & Tempat - AirBeNBe</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
	<script src="<?php echo base_url(); ?>assets/jquery-3.3.1.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
	<style type="text/css">
		@font-face {
			font-family: "Cereal-M";
			src: url("<?php echo base_url() ?>assets/fonts/AirbnbCereal-Medium.ttf");
		}
		@font-face {
			font-family: "Cereal-L";
			src: url("<?php echo base_url() ?>assets/fonts/AirbnbCereal-Light.ttf");
		}
		@font-face {
			font-family: "Cereal-B";
			src: url("<?php echo base_url() ?>assets/fonts/AirbnbCereal-Bold.ttf");
		}
		@font-face {
			font-family: "Cereal-Bk";
			src: url("<?php echo base_url() ?>assets/fonts/AirbnbCereal-Book.ttf");
		}
		.navbar.transparent {
			padding: 15px;

		}
		#up {
			background-image: url("<?php echo base_url(); ?>assets/img/bg.jpg");
			background-position: 10% 80%;
			background-size: 1366px;
			background-repeat: no-repeat;

		}
		#nav>a {
			color: white;
			margin: 13px;
			font-family: Cereal-M;
			font-size: 14px;

		}
		#nav {
			margin-right: -120px;
		}
		#brand {
			margin-left: -103px;
		}
		label {
			font-family: Cereal-M;
			font-size: 12px;

		}
  	</style>
</head>
<body>
<div id="up">
	<nav class="navbar transparent navbar-dark navbar-fixed-top">
		<div class="container" >
			<div id="brand"><a class="navbar-brand" href="#" ><img style="width: 31px;" src="<?php echo base_url();?>assets/img/logo_white.png"></a></div>
			<div id="nav">
				<a href="#">Menerima tamu di rumah</a>
				<a href="#">Adakan sebuah pengalaman</a>
				<a href="#">Bantuan</a>
				<a href="#">Daftar</a>
				<a href="#">Masuk</a>			
			</div>		
	</nav>
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<div class="card" style="width: 442px; height: 480px; padding: 30px; border-radius: 5px; margin-top: 45px; margin-left: 30px;">
					<div></div>
					<h2 style="font-family: Cereal-B; font-size: 30px;">Pesan rumah dan pengalaman unik.</h2>
					<form>
						<div class="form-group">
							<label for="lokasi">LOKASI</label><br/>
							<input type="text" class="form-control" name="lokasi">
						</div>
						<div class="form-group">
							<label for="tgl_checkin">CHECK-IN</label>
							<input type="date" class="form-control" name="tgl_checkin">
							<label for="tgl_checkin">CHECK-OUT</label>
							<input type="date" class="form-control" name="tgl_checkout">
						</div>
						<div class="form-group">
							<label>TAMU</label>
							<select class="form-control">
								<option>1 tamu</option>
							</select>
						</div>
						<button class="btn btn-danger btn-lg" style="margin-left: 300px;font-family: Cereal-B; margin-top: -10px;">Cari</button>
					</form>
				</div>
			</div>
			<div class="col-md-3">
			
			</div>
			<div class="col-md-3">
				
			</div>
		</div>
	</div>
	<br/>
	<br/>
	<p style="margin-left: 1100px;"><a href="#">Lebih dari 300 rumah unik di Oregon</a></p>
	<br/>
	<br/>
	<br/>
</div>
	
<div class="container" style="margin-top: 40px;">
	<div class="row">
		
		<div class="col-md-3">
			<p style="font-family: Cereal-B; font-size: 25px;">Jelajahi AirBeNBe</p>
		</div>
		<div class="col-md-3">
			
		</div>
		<div class="col-md-3">
			
		</div>
	</div>
	<div class="row">
		<div class="col-md-3">
			<div class="card" style="width: 200px; height: 75px;"></div>
		</div>
		<div class="col-md-3">
			<div class="card" style="width: 200px; height: 75px; margin-left: -60px;"></div>
		</div>
		<div class="col-md-3">
			<div class="card" style="width: 200px; height: 75px; margin-left: -120px;"></div>
		</div>

	</div>
	<div class="row">
		<p>Ini bagian bawah nya lagi</p>
	</div>
	<div class="row">
		<p>Ini bagian bawah nya lagi</p><br/>
	</div>
	<div class="row">
		<p>Ini bagian bawah nya lagi</p><br/>
	</div>
	<div class="row">
		<p>Ini bagian bawah nya lagi</p><br/>
	</div>
	<div class="row">
		<p>Ini bagian bawah nya lagi</p><br/>
	</div>
	<div class="row">
		<p>Ini bagian bawah nya lagi</p><br/>
	</div>
</div>

</body>
</html>