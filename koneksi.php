<?php
	$host="localhost";
	$user="root";
	$passwd="1234";
	$db="presma";
	$koneksi=mysql_connect($host,$user,$passwd) or die (mysql_error());
	mysql_select_db($db, $koneksi) or die (mysql_error());
?>