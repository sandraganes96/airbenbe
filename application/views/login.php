<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="<?php echo base_url(); ?>assets/img/logo.png"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>Log In / Sign Up to Airbenbe</title>
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
			background-position: 10% 50%;
			background-size: 1350px;
			height: 680px;
			background-repeat: no-repeat;

		}
		#nav>a {
			color: white;
			margin: 13px;
			font-family: Cereal-M;
			font-size: 14px;

		}
		#nav {
			margin-right: -110px;
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
		<a style="margin-left:-180px;" class="navbar-footer" href="#" ><img style="width: 33px;" src="<?php echo base_url();?>assets/img/logo.png"></a>
		<!-- <a style="margin-left:-650px;" class="navbar-footer" href="#" ><img style="width: 20px;" src="<?php echo base_url();?>assets/img/search.png"></a> -->
			<div style="margin-left: -680px;">
  				<span class="fa fa-search"></span>
  					<input placeholder="Search">
			</div>
			<div id="nav">
				<a style="padding:15px; color:black"href="#">Become a host</a>
				<a style="padding:10px; color:black"href="#">Help</a>
				<a style="padding:10px; color:black"href="#">Sign Up</a>
				<a style="padding:10px; color:black"href="#">Log in</a>			
			</div>		
	</nav>
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<div class="card" style="width: 442px; height: 400px; padding: 15px; border-radius: 5px; margin-top: 45px; margin-left: 375px;">
					<div></div>
					<div style=""class="panel-body signup-login-form__extra-panel-body first">
					<a style="background-color:#3B5998; width:375px; color:white;" href="#" class="fb btn">
         				<i style="background-color:#3B5998; float:left; padding-top:5px; color:white;" class="fa fa-facebook fa-fw"></i> Login with Facebook
					 </a>
					 <a style="background-color:#white; width:375px; color:black; border:1px solid;"href="#" class="google btn">
						 <i style="background-color:white; float:left; padding-top:5px;" class="fa fa-google fa-fw">
          				</i> Login with Google
        			</a>
			<hr>
		  <!-- <div class="signup-or-separator">
			<span class="h6 signup-or-separator--text">or</span>
			<hr aria-hidden="true">
		  </div> -->
		
		<form style="padding:20px;" accept-charset="UTF-8" action="/authenticate" class="login-form " data-action="Signin" method="post"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="✓"><input name="authenticity_token" type="hidden" value="V4$.airbnb.com$3UHNINS3dqg$jpzTx_bZkypJrWvpcy7PKubbOHF7Ud5g2W152oKiRDI="></div>
		  <input id="from" name="from" type="hidden" value="email_login">
		  <input id="airlock_id" name="airlock_id" type="hidden" value=""> 
			<div style="padding-bottom:7px;" class="control-group space-1">
			 	 <input style="width:370px;" class="decorative-input inspectletIgnore" id="signin_email" name="email" placeholder="Email Address" type="email">
			</div>
		 	<div class="control-group space-2">
				<input style="width:370px;" autocomplete="off" class="decorative-input inspectletIgnore" id="signin_password" name="password" placeholder="Password" type="password">
		  	</div>
			<div class="clearfix space-1">
			<div class="checkbox">
					<label><input type="checkbox" name="remember"> Remember me</label>
					<a style="float:right; color:black;" href="#" class="forgot-password">Forgot Password?</a>
			</div>
		
		  <button style="padding-bottom:10px; width:375px;  background-color:#ff5a5f; color:white; border-radius:3pt; border-color:#ff5a5f; " type="submit" >
			Log in
		  </button>
		
		</form>
		
		
				  <div class="panel-body signup-login-form__extra-panel-body">
					<div style="padding-top:20px;" class="signup-login-form__switch-copy">
					  	Don’t have an account?
					  	<button style="float:right; background-color:white; color:#ff5a5f; border-radius:3pt; border-color:#ff5a5f;" type="submit"  id="user-sign-btn">
							Sign Up
		  				</button>
					</div>
					
				  </div>
			  </div>
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
	<br/>
</div>
<footer  style="float:c">
<div class="container text-center text-md-left" id='footer'>

<div class="row"style="padding-left : 120px">

  <br>
  <div class="col-md-3" >

	<h5 class="font-weight-bold mt-3 mb-4" id="fonttitlefooter">Airbenbr</h5>

	<ul class="list-unstyled">
	  <li>
		<a style="color:black; " href="#!">Careers</a>
	  </li>
	  <li>
		<a style="color:black;   " href="#!">Press</a>
	  </li>
	  <li>
		<a style="color:black;   " href="#!">Policies</a>
	  </li>
	  <li>
		<a style="color:black;   " href="#!">Help</a>
	  </li>
	  <li>
		<a style="color:black;   " href="#!">Diversity & Belonging</a>
	  </li>
	</ul>

  </div>

  <div class="col-md-3 mx-auto">


	<h5 class="font-weight-bold mt-3 mb-4" id="fonttitlefooter">Discover</h5>

	<ul class="list-unstyled" >
	  <li>
		<a style="color:black;   " href="#!">Trust & Safety</a>
	  </li>
	  <li>
		<a style="color:black;   " href="#!">Travel Credit</a>
	  </li>
	  <li>
		<a style="color:black;   " href="#!">Gift Cards</a>
	  </li>
	  <li>
		<a style="color:black;   " href="#!">Airbenbe Citizen</a>
	  </li>
	  <li>
		<a style="color:black;   " href="#!">Business Trabel</a>
	  </li>
	  <li>
		<a style="color:black;   " href="#!">Guidebooks</a>
	  </li>
	  <li>
		<a style="color:black;   " href="#!">Airbenbemag</a>
	  </li>
	  <li>
		<a style="color:black;   " href="#!">Events</a>
	  </li>
	</ul>

  </div>
  <div class="col-md-3 mx-auto">

	<h5 class="font-weight-bold mt-3 mb-4" id="fonttitlefooter">Hosting</h5>

	<ul class="list-unstyled">
	  <li>
		<a style="color:black;   " href="#!">Why Host</a>
	  </li>
	  <li>
		<a style="color:black;   " href="#!">Hospitality</a>
	  </li>
	  <li>
		<a style="color:black;   " href="#!">Reponsibility Hosting</a>
	  </li>
	  <li>
		<a style="color:black;   " href="#!">Community Center</a>
	  </li>
	  <li>
		<a style="color:black;   " href="#!">Host an Experience</a>
	  </li>
	  <li>
		<a style="color:black;   " href="#!">Open Homes</a>
	  </li>
	</ul>

  </div>
  <div class="col-md-3 mx-auto">


	<h5 class="font-weight-bold mt-3 mb-4" id="fonttitlefooter">Support</h5>

	<ul class="list-unstyled">
	  <li>
		<a style="color:black;   " href="#!">Terms</a>
	  </li>
	  <li>
		<a style="color:black;   " href="#!">Privacy</a>
	  </li>
	  <li>
		<a style="color:black;   " href="#!">Site Map</a>
	  </li>
	</ul>

  </div>
  
		</footer>
		<hr>
		<div id="footer">
			<a style="padding-left:300px;" class="navbar-footer" href="#" ><img style="width: 25px;" src="<?php echo base_url();?>assets/img/logo.png"></a>
			<a style="padding-right:475px" dir="ltr" class="_1rbmiub1">© 2019 Airbnb, Inc. All rights reserved.</a>
			
			<button style="right:100px; background-color:white;  border-radius:3pt; border-color:black 1px;" type="submit"  id="user-sign-btn">
				English
			</button>
			<button style="right:100px; background-color:white;  border-radius:3pt; border-color:black 1px;" type="submit"  id="user-sign-btn">
				IDR
			</button>				  
		</div>
		<br>
		<br>
		<br>
		
		
</ul>
</div>
</div>
</div>

</body>
</html>