	<style>
		.navbar.transparent {
			padding: 15px;
		}

		#up {
			background-image: url("<?php echo base_url(); ?>assets/img/bg.jpg");
			background-position: 10% 50%;
			background-size: 1350px;
			height: 680px;
			background-repeat: no-repeat;
		}

		#nav>li>a {
			color: white;
			margin: 12px;
			font-family: Cereal-M;
			font-size: 14px;
		}
		#nav>li:hover {
			border-bottom: 2px solid white;
		}
		#nav {
			margin-right: -22px;
		}
		label {
			font-family: Cereal-M;
			font-size: 12px;
		}
	</style>
</head>
<body>
<div id="up">
	<nav class="navbar navbar-expand-lg">
		<div class="container-fluid" >
			<div class="navbar-header">
				<a class="navbar-brand" href="#" ><img style="width: 31px;" src="<?php echo base_url();?>assets/img/logo_white.png"></a>
			</div>
			<ul class="nav navbar-nav" id="nav">
				<li class="nav-item"><a class="nav-link" href="#">Menjadi tuan rumah</a></li>
				<li class="nav-item"><a class="nav-link" href="#">Bantuan</a></li>
				<li class="nav-item"><a class="nav-link" href="#">Daftar</a></li>
				<li class="nav-item"><a class="nav-link" href="#">Masuk</a></li>
			</ul>
	</nav>
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<div class="card" style="width: 442px; height: 480px; padding: 30px; border-radius: 5px; margin-top: 45px; margin-left: 35px;">
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
	<p style="margin-left: 1170px;"><a href="#" style="color: white;text-align: right; font-family: Cereal-M; font-size: 14px;">Lebih dari 300 <br/> rumah unik di Oregon</a></p>
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
  	<div class="col-sm-3">
    	<div class="card">
      	<div class="card-body">
					<img src="<?php echo base_url(); ?>assets/img/rumah-cat.jpg" width="110px" style="float: left;">
					<a href="" style="font-family: Cereal-B; color: black; float: right;">Rumah</a>
      	</div>
    	</div>
  	</div>
  	<div class="col-sm-3">
    	<div class="card">
      	<div class="card-body">
					<img src="<?php echo base_url(); ?>assets/img/naik-sepeda.jpg" width="110px" style="float: left;">
					<a href="" style="font-family: Cereal-B; color: black; float: right;">Pengalaman</a>
      	</div>
    	</div>
  	</div>
		<div class="col-sm-3">
    	<div class="card">
      	<div class="card-body">
					<img src="<?php echo base_url(); ?>assets/img/restoran.jpg" width="110px" style="float: left;">
					<a href="" style="font-family: Cereal-B; color: black; float: right;">Restoran</a>
      	</div>
    	</div>
  	</div>
	</div>
	<br/>
	<br/>
	<br/>
	<div class="row">
		<div class="col-md-5">
			<p style="font-family: Cereal-B; font-size: 25px;">Direkomendasikan Untuk Anda</p>
		</div>
		<div class="col-md-3">

		</div>
		<div class="col-md-3">

		</div>
	</div>
	<br/>
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
	<div class="row">
		<p>Ini bagian bawah nya lagi</p><br/>
	</div>
</div>

</body>
</html>
