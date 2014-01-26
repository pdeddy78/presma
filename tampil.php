<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta charset="utf-8"></meta>    
		<link href="favicon.ico" rel="icon" type="image/x-icon">
		<link rel="stylesheet" href="css/bootstrap.css" type="text/css">
		<title>Laman Panitia - Pemilihan PresMa 2013 | STMIK RAHARJA</title>      
	</head>
<body>
	<div class="navbar">
		<div class="navbar-inner">
			<a class="brand" href="#">PilPresMaRhj 2013</a>
			<ul class="nav">
				<li class="active"><a href="laman_panitia.php">PANITIA</a></li>
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
<tr><td>Total Pemilih</td> <td>:</td> <td><?php echo $totalsemuapemilih;?></td></tr>
<tr><td>Sudah Memilih</td> <td>:</td> <td><?php echo $sudahmemilih;?></td></tr>
<tr><td>Belum Memilih</td> <td>:</td> <td><?php echo $belummemilih;?></td></tr>
</table>
	<?php
	include "koneksi.php";
	echo "<table cellpadding=8>
	<tr><th>NIM</th><th>PASSWORD</th><th>NAMA</th><th>JURUSAN</th><th>KONSENTRASI</th><th>STATUS</th><th>AKSI</th></tr>";
	$query = mysql_query ("SELECT id, nim, password, nama, jurusan, konsentrasi, status FROM pemilih ORDER BY nim;");
	$no=1;
	while ($r=mysql_fetch_array($query)){
	$nim         = $r['nim'];
	$password  =  ($r['password']);
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
	<td>$password </td>
	<td title=\"Namanya $nama\">$nama</td>
	<td align='center' title=\"$nama dari Jurusan $jurusan\">$jurusan</td>
	<td title=\"Konsentrasi $konsentrasi\">$konsentrasi</td>
	<td align='center'>$status2</td></td>
	<td><a href=\"edit.php?id=$r[0]\"onclick=\"return confirm('Apakah anda yakin akan mengubah data pemilih yang bernama $nama ?')\" title=\"Edit data $nama\">Edit</a> | <a href=\"hapus.php?id=$r[0] \"onclick=\"return confirm('Apakah anda yakin akan menghapus?')\" title=\"Hapus data $nama\">Hapus</a></td></tr>";
	$no++;
	}
	?>
</div>
</br>
<a href="tampilpemilih.php">Tambah Pemilih</a> | <a href="lihat.php">Statistik</a></br></br>
</body>
</html>