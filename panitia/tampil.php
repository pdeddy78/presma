<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta charset="utf-8"></meta>    
		<link href="../favicon.ico" rel="icon" type="image/x-icon">
		<link rel="stylesheet" href="../css/bootstrap.css" type="text/css">
		<title>Laman Panitia - Pemilihan PresMa 2013 | STMIK RAHARJA</title>      
	</head>
<body>
	<div class="navbar">
		<div class="navbar-inner">
			<a class="brand" href="#">PilPresMaRhj 2013</a>
			<ul class="nav">
				<li class="active"><a href="panitia.php">PANITIA</a></li>
				<li><a href="logout.php">KELUAR</a></li>
			</ul>
		</div>
	</div>
<div class="container" align="center">
<h1>DATA PEMILIH</h1>
	<?php
	include "koneksi.php";
	echo "<table cellpadding=8>
	<tr><th>NIM</th><th>NAMA</th><th>JURUSAN</th><th>KONSENTRASI</th><th>STATUS</th></tr>";
	$query = mysql_query ("SELECT id, nim, password, nama, jurusan, konsentrasi, status FROM pemilih ORDER BY nim;");
	$no=1;
	while ($r=mysql_fetch_array($query)){
	$nim         = $r['nim'];
	$nama             = $r['nama'];
	$jurusan         = $r['jurusan'];
	$konsentrasi     = $r['konsentrasi'];
	$status         = $r['status'];
	if($status=='0'){
	$status2="<font color=green title=\"$nama Belum Memilih\">Belum</font>";
	}
	else{
	$status2="<font color=red title=\"$nama Sudah Memilih\">Sudah</font>";
	}
	if(($no % 2)==0){
	$warna="#A6D000";
	}
	else{
	$warna="#D5F35B";
	}
	echo "<tr bgcolor=$warna>
	<td title=\"NIM $nama = $nim\">$nim </td>
	<td title=\"Namanya $nama\">$nama</td>
	<td align='center' title=\"$nama dari Jurusan $jurusan\">$jurusan</td>
	<td title=\"Konsentrasi $konsentrasi\">$konsentrasi</td>
	<td align='center'>$status2</td></td></tr>";
	
	$no++;
	}
	echo "</br>";
	echo "<tr><td colspan='6' align='center'><a href='panitia.php'>KEMBALI</a></td></tr>";
	?>
</div>
</br>
</body>
</html>