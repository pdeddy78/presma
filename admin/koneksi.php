<?php
	$host="localhost";
	$user="root";
	$passwd="1234";
	$db="presma";
	$koneksi=mysql_connect("localhost","root","1234") or die (mysql_error());
	mysql_select_db("presma",$koneksi)or die (mysql_error());
?>