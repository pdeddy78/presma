<?php
	//Start session
	session_start();	
	//Unset the variables stored in session
	unset($_SESSION['nim']);
	unset($_SESSION['password']);
	unset($_SESSION['status']);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" id='login'>
	<head>
		<meta charset="utf-8"></meta>    
		<link href="favicon.ico" rel="icon" type="image/x-icon">
		<link rel="stylesheet" href="css/styles.css" type="text/css">
		<title>Login - Pemilihan PresMa 2013 | STMIK RAHARJA</title>
		
	</head>  
	<body id="login">
    <!--Container-->
    <div id="content" class="container animated popIn">    
      <!-- Logo -->
      <a href="/presma" id="logo" class="clearfix">             
        <h1>Pemilihan Presma 2013</h1>
      <!--End #logo-->
      </a>        
      <!--Login-->	  
      <div class="login clearfix">        
		<form name="loginform" action="cekpemilih.php" onsubmit="return validate(this)" method="post">
		<!--USERNAME-->
		<p class="email field">
		<input tabindex="1" type="text" name="nim"  value="" placeholder="Nomor Induk Mahasiswa" autofocus/>
		<a href="panitia" tabindex="5" class="action button register" title="Laman login untuk panitia.">Panitia</a>
		</p>
		<p class="password field">
		<input tabindex="2" type="password" name="password" value="" placeholder="Tanggal Lahir Mahasiswa 'DDMMYYY'"/></p>
		<p align="center"><input tabindex="3" type="submit" class="button blue" value="Login" />
		<input tabindex="4" type="reset" class="button red" value="Reset" /></p>
		<!--Validasi Input-->
				 <?php
					if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
					echo '<div class="error">';
					foreach($_SESSION['ERRMSG_ARR'] as $msg) {
						echo "<font color='red'>",'<li>',$msg,'</li>'; 
						}
					echo '</div>';
					unset($_SESSION['ERRMSG_ARR']);
					}
				?>
		</form>			
	  <!--End .login-->
      </div>
	<!--End #content-->
    </div>  
	</body>    
</html>