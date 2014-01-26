<?php
	include("koneksi.php");
	$id        = $_GET['id'];
	$query    = mysql_query("select * from pemilih where id='$id'") or die (mysql_error());
	$r        = mysql_fetch_array($query);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title>EDIT DATA PEMILIH</title>
<script language="javascript">
	function focuson()
	{ document.form1.nama.focus()
	document.form1.jurusan.focus()
	document.form1.konsentrasi.focus()
	}
	function check()
	{
	if(document.form1.nama.value==0)
	{
	alert("Masukkan nama pemilih");
	document.form1.nama.focus();
	return false;
	}
	 
	if(document.form1.jurusan.value==0)
	{
	alert("Masukkan jurusan pemilih");
	document.form1.jurusan.focus();
	return false;
	}
	 
	if(document.form1.konsentrasi.value==0)
	{
	alert("Masukkan konsentrasi pemilih");
	document.form1.konsentrasi.focus();
	return false;
	}
	}
	</script>
</head>
<link href="favicon.ico" rel="icon" type="image/x-icon">
<link rel="stylesheet" href="../css/bootstrap.css" type="text/css">
<body>
<div class="navbar">
		<div class="navbar-inner">
			<a class="brand" href="#">PilPresMaRhj 2013</a>
			<ul class="nav">
				<li class="active"><a href="admin.php">ADMIN</a></li>
				<li><a href="logout.php">KELUAR</a></li>
			</ul>
		</div>
	</div>
<div class="container" align="center">
<h1><b>EDIT DATA PEMILIH </b></h1>
</br>
<form action="aksiedit.php" method="POST">
<div class="table">
<table border="0">
<input type="hidden" name="id" value="<?php echo "$r[id]"; ?>" />
<tr><td width="130">NIM</td>        <td><input type="text" name="nim" value="<?php echo "$r[nim]"; ?>" ></td></tr>
<tr><td width="130">Password</td>    <td><input type="password" name="password" value="<?php echo ("$r[password]"); ?>" ></td></tr>
<tr><td width="130">Nama</td>            <td><input type="text" name="nama" value="<?php echo "$r[nama]"; ?>"></td></tr>
<tr><td width="130">Jurusan</td>            <td><input type="text" name="jurusan" value="<?php echo "$r[jurusan]"; ?>"></td></tr>
<tr><td width="130">Konsentrasi</td>    <td><input type="text" name="konsentrasi" value="<?php echo "$r[konsentrasi]"; ?>"></td></tr>
<tr><td width="130">Status</td><td><?php
if ($r['status'] == "0")
echo "<input type='radio' value='0' name='status' checked>Belum";
else echo "<input type='radio' name='status' value='0'>Belum";

if ($r['status'] == "1")
echo "<input type='radio' value='1' name='status' checked>Sudah";
else echo "<input type='radio' name='status' value='1'>Sudah";
?></td></tr>
<tr>
<td></td>
<td><input class="btn btn-success" type="submit" name="edit" value="UPDATE">&nbsp;&nbsp;&nbsp;&nbsp;<input class="btn btn-info" type=button onClick="location.href='admin.php'" value='KEMBALI'></td></tr>
</table>
</div>
</form>
</div>
</body>
</html>