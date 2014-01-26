<?php
	//Start session
	session_start();
	if (!$_SESSION['username'] && !$_SESSION['password']){
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" id='login'>
	<head>
		<meta charset="utf-8"></meta>    
		<link href="../favicon.ico" rel="icon" type="image/x-icon">
		<link rel="stylesheet" href="../css/styles.css" type="text/css">
		<title>Login Panitia- Pemilihan PresMa 2013 | STMIK RAHARJA</title>
		
	</head>  
	<body id="login">
    <!--Container-->
    <div id="content" class="container animated popIn">    
      <!-- Logo -->
      <a href="/presma" id="logo" class="clearfix">             
        <h1>Panitia Pemilihan Presma 2013</h1>
      <!--End #logo-->
      </a>        
      <!--Login-->	  
      <div class="login clearfix">        
		<form name="loginform" action="cekpanitia.php" onsubmit="return validate(this)" method="post">
		<!--USERNAME-->
		<p class="email field">
		<input tabindex="1" type="text" name="username"  value="" placeholder="Username" autofocus/>
		<a href="../index.php" tabindex="5" class="action button register" title="Laman login untuk pemilih.">Pemilih</a>
		</p>
		<p class="password field">
		<input tabindex="2" type="password" name="password" value="" placeholder="Password"/></p>
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
<?php
}else{
    header("location:panitia.php");
}
?>