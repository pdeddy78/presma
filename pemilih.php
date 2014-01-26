<?php
session_start();
if (!isset($_SESSION['nim']))
{
echo "<script language='javascript'>document.location='index.php'</script>";
exit;
}
include 'koneksi.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>   
	<link href="favicon.ico" rel="icon" type="image/x-icon">
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title>Pemilihan PresMa 2013 | STMIK RAHARJA</title>
	<link href="css/stylepemilih.css" rel="stylesheet" type="text/css" />
</head>
<body>

<div> <center>
<?php
$nim         = ($_SESSION['nim']);
$data             = mysql_fetch_array(mysql_query("select nama, jurusan, status, konsentrasi from pemilih where nim='$nim'"));
$nama             = $data['nama'];
$jurusan         = $data['jurusan'];
$konsentrasi    = $data['konsentrasi'];
$status            = $data['status'];
 
if($status=='0'){
$status2="<font color=green><b>Belum Memilih</b></font>";
}
else{
$status2="<font color=red><b>Sudah Memilih</b></font>";
}
 
echo "<table>";
echo "<tr><td colspan='3'><div align=\"center\"><h2>DATA PEMILIH</h2></div></td></tr>";
echo "<tr><td width=\"120px\">&nbsp;&nbsp;&nbsp;NIM</td><td>:</td><td width=\"200px\">&nbsp;$nim</td></tr>";
echo "<tr><td width=\"120px\">&nbsp;&nbsp;&nbsp;Nama</td><td>:</td><td width=\"200px\">&nbsp;$nama</td></tr>";
echo "<tr><td width=\"120px\">&nbsp;&nbsp;&nbsp;Jurusan</td><td>:</td><td width=\"200px\">&nbsp;$jurusan</td></tr>";
echo "<tr><td width=\"120px\">&nbsp;&nbsp;&nbsp;Konsentrasi</td><td>:</td><td width=\"200px\">&nbsp;$konsentrasi</td></tr>";
echo "<tr><td width=\"120px\">&nbsp;&nbsp;&nbsp;Status</td><td>:</td><td width=\"200px\">&nbsp;$status2</td></tr>";
echo "</table>"
 
?>
<P>
 
<?php
if($status=='0'){
echo "<a href=\"pilihcalon.php\">PILIH CALON PRESMA >></a>";
}
else{
echo "<font color=red><b><blink>Anda Sudah Memilih</blink></b></font>";
}
?>
<p>
<a href="logout.php"><< KELUAR</a>
</div></center>
</body>
</html>