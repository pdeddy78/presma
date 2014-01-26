<?php
	//Start session
	session_start();
	if (!$_SESSION['username'] && !$_SESSION['password']){
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" id='login'>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta charset="utf-8"></meta>    
		<link href="../favicon.ico" rel="icon" type="image/x-icon">
		<!-- Styles -->
		<link rel="stylesheet" href="../css/reset.css" type="text/css">
		<link rel="stylesheet" href="../css/styles.css" type="text/css">
		<title>Login Admin - Pemilihan PresMa 2013 | STMIK RAHARJA</title>      
	</head>
  
  <body id="login">
    <!--Container-->
    <div id="content" class="container animated popIn">    
      <!-- Logo -->
      <a href="/presma/admin/index.php" id="logo" class="clearfix">      
        <img src="../img/admin.png">        
        <span>ADMIN LOGIN</span>        
      <!--End #logo-->
      </a>        
      <!--Login-->
      <div class="login clearfix">        
      <form name="loginform" method="post" action="login.php">		
			<!--Email-->
			  <p class="email field">
				<input tabindex="1" type="text" name="username" value="" placeholder="Username" autofocus />
			  </p>
			<!--Password-->
			  <p class="password field">
				<input tabindex="2" type="password" name="password" value="" placeholder="Password" />
			  </p>
			<!--Submit-->
				<p align="center"><input type="submit" tabindex="3" class="button blue" value="LOGIN" /></p>  
	   </form> 
				</br>
				<p align="center"><button class="button green" onclick="window.location.href='../index.php'"/>Kembali ke laman pemilih</p>
      <!--End .login-->
      </div>                          
    <!--End #content-->
    </div>  
  </body>    
</html>
<?php
}else{
    header("location:admin.php");
}
?>