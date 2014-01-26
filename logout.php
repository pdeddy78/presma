<?php
	session_start();
	unset($_SESSION['nim']);
	echo "<script language='javascript'>document.location='index.php'</script>";
?>