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
<h1>LAPORAN PEMILIH</h1>

<?php
include "koneksi.php";
$totalsemua = mysql_query("select count(*) as tot from pemilih");
list($totalsemuapemilih) = mysql_fetch_row($totalsemua);
 
$totalsudah = mysql_query("select count(*) as tot from pemilih where status='1'");
list($sudahmemilih) = mysql_fetch_row($totalsudah);
 
$totalbelum = mysql_query("select count(*) as tot from pemilih where status='0'");
list($belummemilih) = mysql_fetch_row($totalbelum);

?>
<table>
<div>
<tr><td>Total Pemilih </td> <td> : </td> <td><?php echo $totalsemuapemilih;?> mahasiswa</td></tr>
<tr><td>Sudah Memilih </td> <td> : </td> <td><?php echo $sudahmemilih;?> mahasiswa</td></tr>
<tr><td>Belum Memilih </td> <td> : </td> <td><?php echo $belummemilih;?> mahasiswa</td></tr>
</div>
</table>
</br>
<a href="tampil.php">Tampil Pemilih</a> | <a href="lihat.php">Statistik</a></br></br>
</div>
</body>
</html>