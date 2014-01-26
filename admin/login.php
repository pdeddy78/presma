<?php
session_start();
include ("koneksi.php");
if (!$_SESSION['username'] && !$_SESSION['password']){

$username = $_POST['username'];
$password = $_POST['password'];

if (!empty($username)){
    if (!empty($password)){
        $sql = mysql_query("SELECT * FROM admin WHERE username='".$username."' AND password='".$password."'");
        $tes = mysql_num_rows($sql);
            if ($tes == 1){
                $hasil = mysql_fetch_assoc($sql);
                $_SESSION['username'] = $hasil['username'];
                $_SESSION['password'] = $hasil['password'];
                header("location:admin.php");
            }else{
                echo "<center>"."</br>"."<h2>"."Kombinasi username dan password tidak cocok"."</h2>";
				echo "<center>"."<img src='../img/loading.gif' alt='' width='200' height='200' border='0' />";
				header('Refresh: 2; url=index.php');
            }
    }else{
        echo "<center>"."</br>"."<h2>"."Anda belum mengisi password"."</h2>";
		echo "<center>"."<img src='../img/loading.gif' alt='' width='200' height='200' border='0' />";
		header('Refresh: 2; url=index.php');
    }
}else{
    echo "<center>"."</br>"."<h2>"."Anda belum mengisi username"."</h2>";
	echo "<center>"."<img src='../img/loading.gif' alt='' width='200' height='200' border='0' />";
	header('Refresh: 2; url=index.php');
}
}else{
    header("location:admin.php");
}
?>