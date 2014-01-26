<?php
	session_start();
	ob_start();
	include 'cek.php';
	include 'koneksi.php';
	include 'class-captcha.php';
 
	$captcha1 = new mathcaptcha();
	 
	$nim      = ($_SESSION['nim']);
	$voting   = $_REQUEST['voting'];
	$query    = mysql_query("select * from calon");
	$data     = mysql_fetch_array($query);
	
	if ($captcha1->resultcaptcha() == $_POST['kode'])
	{
	echo "<p><b>Selamat Anda Telah Berhasil Memilih</b></p>";
	
	if($voting=='calon_I')
	{
	$nilai=$data[calon_I]+1;
	mysql_query("UPDATE calon SET calon_I='$nilai'");
	mysql_query("UPDATE pemilih SET status='1' WHERE nim = '$nim'");
	header('Location:success.php');
	}
	 
	else if($voting=='calon_II')
	{
	$nilai=$data[calon_II]+1;
	mysql_query("update calon set calon_II='$nilai'");
	mysql_query("UPDATE pemilih SET status='1' WHERE nim = '$nim'");
	header('Location:success.php');
	}
	 
	else if($voting=='calon_III')
	{
	$nilai=$data[calon_III]+1;
	mysql_query("update calon set calon_III='$nilai'");
	mysql_query("UPDATE pemilih SET status='1' WHERE nim = '$nim'");
	header('Location:success.php');
	}
	 
	else if($voting=='calon_IV')
	{
	$nilai=$data[calon_IV]+1;
	mysql_query("update calon set calon_IV='$nilai'");
	mysql_query("UPDATE pemilih SET status='1' WHERE nim = '$nim'");
	header('Location:success.php');
	}
	 
	else
	{
	$nilai=$data[calon_V]+1;
	mysql_query("update calon set calon_V='$nilai'");
	mysql_query("UPDATE pemilih SET status='1' WHERE nim = '$nim'");
	header('Location:success.php');
	}
	}
	else
	{
	// jika kode captcha salah
	echo "</br><h2><center><b>Kode verifikasi salah, data gagal disimpan</b></h2>";
	echo "<center>"."<img src='img/loading.gif' alt='' width='200' height='200' border='0' />";
	}
	header('Refresh: 3; url=pilihcalon.php');
	ob_end_flush();
?>