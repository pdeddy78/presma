<?php
	include("koneksi.php");
	$id=$_POST['id'];
	$nim=$_POST['nim'];
	$pass=$_POST['password'];
	$nama=$_POST['nama'];
	$jurusan=$_POST['jurusan'];
	$konsentrasi=$_POST['konsentrasi'];
	$status=$_POST['status'];
	 
	$query = "update pemilih set nim='$nim', password=MD5('$pass'), nama='$nama', jurusan='$jurusan', konsentrasi='$konsentrasi', status='$status' where id='$id'";
	$hasil = mysql_query($query);
	if ($hasil){
	//echo '<script language="javascript">alert("Data berhasil di update")</script>';
	echo '<script language="javascript">window.location = "admin.php"</script>';
	}
?>