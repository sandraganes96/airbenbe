  <style>
  #nav>li>a, #nav>li>div>a {
    color: black;
    margin: 12px;
    font-family: Cereal-M;
    font-size: 14px;
  }
  #nav>li:hover {
    border-bottom: 2px solid black;
  }
  #nav {
    margin-right: -22px;
  }
  .register{
    text-decoration: none;
    display: block;
    padding: 15px;
    color: white;
    transition: color 1000ms;
  }
  .register:hover{
    color: black;
  }
  .modal_container{
    width:100%;
    height: 90%;
    position: fixed;
    background:transparent;
    opacity: 0;
    font-family: sans-serif;
    pointer-events: none;
  }

  .modal_container:target{
    opacity: 1;
    pointer-events: auto;
  }
  .modal{
        height: 600px;
        margin:auto;
        position: absolute;
        top:0px; bottom: 0px;
        right: 0px; left:0px;
        background:transparent;

    }

    .modal_heading{
        width: 100%;
        display: block;
        height: 10px;
        margin-bottom: 30px;
        padding: 10px;
        text-align: center;
        font-size: 14px;
        font-weight: bold;
        color:#484848;
        border-bottom: 2px solid #fefefe;
    }

    .modal-body>form>input{
        margin-bottom: 15px;
        padding: 10px;
        width: 100%;
        box-sizing: border-box;
        border-radius: 5px;
        height: 50px;
        border: 1px solid;
        font-size: 15px;
    }
    input:checked{
        background:#ffb400;
    }

    input:focus{
        outline-color: none;
        border: #007a87 1px solid;
    }

    select{
        margin-bottom: 5px;
        padding: 10px;
        width: 32.5%;
        box-sizing: border-box;
        border-radius: 5px;
        height: 50px;
        border: 1px solid;
        font-size: 15px;
    }
    .btnRegister{
        background: #ff5a5f;
        color:#fff;
        font-size: 14pt;
        margin-top: 10px;
        height: 50px;
        border-radius: 5px;
        border:1px solid #e6e6e6;
        font-weight: bold;
    }
    .close{
        color:black;
        position: absolute;
        background: white;
        text-decoration: none;
        top:20px;
        left: 20px;
        border-radius: 50%;
        transition: 500ms;
    }

    .close:hover{
        cursor: pointer;
    }

    .modal_footer{
        display: block;
        text-align: left;
        font-size: 15px;
    }

    #email{
        background-image: url(mail.png);
        background-repeat: no-repeat;
        background-position: right;
    }

    #depan,#belakang{
        background-image: url(ppl.png);
        background-repeat: no-repeat;
        background-position: right;
    }

    #pass{
        background-image: url(pass.png);
        background-repeat: no-repeat;
        background-position: right;
    }
  </style>
</head>
<body>
  <div class="modal fade" id="myModal" role="dialog">
	    <div class="modal-dialog">
	    <div class="modal-content">
	        <div class="modal-header">
	          <button type="button" class="close" data-dismiss="modal">X</button> <br><br>
	          <span class="modal_heading">Daftar dengan
	            <a href="#" class="FB" style="color:#007a87;text-decoration-line: none;">Facebook</a> atau
	            <a href="#" class="FB" style="color:#007a87;text-decoration-line: none;">Google</a>
	            <br> <p>atau</p>
	    			</span>
	        </div>
	        <div class="modal-body">
	            <form>
	                <input id="email" type="text" placeholder="Alamat email" ><br>
	                <input id="depan" type="text" placeholder="Nama depan" ><br>
	                <input id="belakang" type="text" placeholder="Nama belakang" ><br>
	                <input id="pass" type="password" placeholder="Buat kata sandi" >
	                <p style="font-size: 11pt; font-weight: bold">Tanggal Lahir</p>
	                <p style="font-size: 10pt;">Anda harus berusia setidaknya 18 tahun. Orang lain tidak akan melihat tanggal lahir Anda.</p>
	                    <select name="Bulan">
	                        <option>Bulan</option>
	                        <option value="Januari">Januari</option>
	                        <option value="Februari">Februari</option>
	                        <option value="Maret">Maret</option>
	                        <option value="April">April</option>
	                        <option value="Mei">Mei</option>
	                        <option value="Juni">Juni</option>
	                        <option value="Juli">Juli</option>
	                        <option value="Agustus">Agustus</option>
	                        <option value="September">September</option>
	                        <option value="Okbtober">Oktober</option>
	                        <option value="November">November</option>
	                        <option value="Desember">Desember</option>
	                    </select>
	                    <select name="Hari">
	                        <option>Hari</option>
	                        <option value="1">1</option>
	                        <option value="2">2</option>
	                        <option value="3">3</option>
	                        <option value="4">4</option>
	                        <option value="5">5</option>
	                        <option value="6">6</option>
	                        <option value="7">7</option>
	                        <option value="8">8</option>
	                        <option value="9">9</option>
	                        <option value="10">10</option>
	                        <option value="11">11</option>
	                        <option value="12">12</option>
	                        <option value="13">13</option>
	                        <option value="14">14</option>
	                        <option value="15">15</option>
	                        <option value="16">16</option>
	                        <option value="17">17</option>
	                        <option value="18">18</option>
	                        <option value="19">19</option>
	                        <option value="10">20</option>
	                        <option value="21">21</option>
	                        <option value="22">22</option>
	                        <option value="23">23</option>
	                        <option value="24">24</option>
	                        <option value="25">25</option>
	                        <option value="26">26</option>
	                        <option value="27">27</option>
	                        <option value="28">28</option>
	                        <option value="29">29</option>
	                        <option value="30">30</option>
	                        <option value="31">31</option>
	                    </select>
	                    <select name="Tahun">
	                        <option>Tahun</option>
	                        <option value="1991">1991</option>
	                        <option value="1992">1992</option>
	                        <option value="1993">1993</option>
	                        <option value="1994">1994</option>
	                        <option value="1995">1995</option>
	                        <option value="1996">1996</option>
	                        <option value="1997">1997</option>
	                        <option value="1998">1998</option>
	                        <option value="1999">1999</option>
	                        <option value="2000">2000</option>
	                        <option value="2001">2001</option>
	                    </select>
	                <p style="font-size: 10pt">Kami akan mengirimkan promo pemasaran, penawaran khusus,inspirasi, dan pembaruan kebijakan melalui email.</p>
	                <input type="submit" class="btnRegister" value="Daftar">
	                <p style="font-size: 10pt"> Saya tidak ingin menerima pesan pemasaran dari Airbnb. Saya juga bisa memilih untuk berhenti menerima pesan seperti
	                ini kapan pun dengan menyetel pengaturan akun saya atau melalui tautan di pesan tersebut.</p>
	            </form>
	        	</div>
	        	<div class="modal-footer">
	            <span class="modal_footer">Sudah punya akun Airbnb?
	                <a href="#" style="color:#007a87;text-decoration-line: none;">Log masuk</a>
	            </span>
						</div>
	    </div>
			</div>
		</div>
</div>
  <nav class="navbar navbar-expand-lg navbar-light">
		<div class="container-fluid" >
			<div class="navbar-header">
				<a class="navbar-brand" href="<?php echo base_url(); ?>" ><img style="width: 31px;" src="<?php echo base_url();?>assets/img/logo.png"></a>
        <input type="text" name="" value="">
			</div>
			<ul class="nav navbar-nav" id="nav">
				<li class="nav-item">
					<div class="dropdown">
						<a class="nav-link" data-toggle="dropdown" href="#">Menjadi tuan rumah</a>
						<ul class="dropdown-menu">
							<li><a href="#">lalala</a></li>
						</ul>
					</div>
				</li>
				<li class="nav-item"><a class="nav-link" href="#">Bantuan</a></li>
				<li class="nav-item"><a class="nav-link" href="" data-toggle="modal" data-target="#myModal">Daftar</a></li>
				<li class="nav-item"><a class="nav-link" href="<?php echo site_url('c_login/index'); ?>">Masuk</a></li>
			</ul>
	</nav>
</body>
