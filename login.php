<?php
	$mysql_hostname = "localhost";
	$mysql_user = "root";
	$mysql_password = "1234";
	$mysql_database = "presma";
	$mysql_table = "pemilih";
	$mysql_table2 = "panitia";
	$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Could not connect database");
	mysql_select_db($mysql_database, $bd) or die("Could not select database");
?>