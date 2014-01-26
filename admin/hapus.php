<?php
	include_once 'koneksi.php';
	$id=$_GET['id'];
	mysql_query("delete from pemilih where id='$id'")or die (mysql_error());
	header("location:admin.php");
?>