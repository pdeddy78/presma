<?php
	//Start session
	session_start();
 
	//Include database connection details
	require_once('login.php');
 
	//Array to store validation errors
	$errmsg_arr = array();
 
	//Validation error flag
	$errflag = false;
 
	//Function to sanitize values received from the form. Prevents SQL injection
	function clean($str) {
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		return mysql_real_escape_string($str);
	}
 
	//Sanitize the POST values
	$nim = clean($_POST['nim']);
	$password = clean($_POST['password']);
 
	//Input Validations
	if($nim == '') {
		$errmsg_arr[] = 'Username belum di isi';
		$errflag = true;
	}
	if($password == '') {
		$errmsg_arr[] = 'Password belum di isi';
		$errflag = true;
	}
	//If there are input validations, redirect back to the login form
	if($errflag) {
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		session_write_close();
		header("location: index.php");
		exit();
	}
	//md5
	$md5=md5($password);
	//Create query
	$qry="SELECT * FROM $mysql_table WHERE nim='$nim' AND password='$md5'";
	$data = mysql_fetch_array(mysql_query("select status from pemilih where nim='$nim'"));
	$status= $data['status'];
	$result=mysql_query($qry);
	
	//Time SERVER,
	date_default_timezone_set('Asia/Jakarta');
	$jam=date("H:i:s");
	echo "<center>"."JAM : <b>". $jam."<br>"."</b>";
	$a = date ("H.i");
	
	//Check whether the query was successful or not
if (($a>=8.00) && ($a<=21.00)){
	if($result) {
		if(mysql_num_rows($result) > 0) {
			if($status=='1') {
				$errmsg_arr[] = 'Maaf, Anda sudah memilih.';
				$errflag = true;
				if($errflag) {
					$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
					session_write_close();
					header("location: index.php");
					exit();}
			}
			elseif($status=='0') {
			//Login Successful
			session_regenerate_id();
			$member = mysql_fetch_assoc($result);
			$_SESSION['nim'] = $nim;
			$_SESSION['status'] = $status;
			session_write_close();
			header("location: pemilih.php");
			exit();}		
		}
			
		else {
			//Login failed
			$errmsg_arr[] = 'Username dan Password salah';
			$errflag = true;
			if($errflag) {
				$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
				session_write_close();
				header("location: index.php");
				exit();
			}
		}
	}else {
		die("Query failed");
	}
}else {
echo "</br>";
echo "MOHON MAAF... ANDA TIDAK BISA MEMILIH";
echo "</br>";
echo "KARENA MELEBIHI BATAS WAKTU PEMILIHAN";
}
?>