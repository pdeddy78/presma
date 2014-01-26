<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
	<title>Tambah Data Pemilih</title>
	<link href="favicon.ico" rel="icon" type="image/x-icon">
	<link rel="stylesheet" href="../css/bootstrap.css" type="text/css">
</head>
<body>
	<div class="navbar">
		<div class="navbar-inner">
			<a class="brand" href="#">PilPresMaRhj 2013</a>
			<ul class="nav">
				<li><a href="admin.php">ADMIN</a></li>
				<li><a href="logout.php">KELUAR</a></li>
			</ul>
		</div>
	</div>
	<script language="javascript">
	function focuson()
	{ document.form1.nim.focus()
	document.form1.pass1.focus()
	document.form1.pass2.focus()
	document.form1.nama.focus()
	document.form1.jurusan.focus()
	document.form1.konsentrasi.focus()
	}
	function check()
	{
	if(document.form1.nim.value==0)
	{
	alert("Masukkan NIM Anda");
	document.form1.nim.focus();
	return false;
	}
	 
	if(document.form1.pass1.value==0)
	{
	document.form1.pass1.focus();
	return false;
	}
	 
	if(document.form1.pass2.value==0)
	{
	alert("Masukkan Password Lagi Untuk Verifikasi");
	document.form1.pass2.focus();
	return false;
	}
	 
	if(document.form1.nama.value==0)
	{
	alert("Masukkan Nama Pemilih");
	document.form1.nama.focus();
	return false;
	}
	 
	if(document.form1.jurusan.value==0)
	{
	alert("Masukkan jurusan Pemilih");
	document.form1.jurusan.focus();
	return false;
	}
	 
	if(document.form1.konsentrasi.value==0)
	{
	alert("Masukkan konsentrasi Pemilih");
	document.form1.konsentrasi.focus();
	return false;
	}
	}
	</script>
<div class="container" align="center">
	<h1><b>TAMBAH PEMILIH</b></h1>
	</br>
	<form method="post" action="submittambah.php" name="form1" onSubmit="return check();">
	<div class="table">
		<table border="0">
		<tr>
		<td width="130">NIM</td>
		<td><input name="nim" type="text" placeholder="Inputkan NIM" autofocus></td>
		</tr>
		<tr>
		<td width="130">Password</td>
		<td><input name="pass1" type="password" placeholder="Inputkan Password"></td>
		</tr>
		<tr>
		<td width="130">Password (ulangi)</td>
		<td><input name="pass2" type="password" placeholder="Ulangi Password"></td>
		</tr>
		<tr>
		<td width="130">Nama</td>
		<td><input name="nama" type="text" placeholder="Nama Pemilih"></td>
		</tr>
		<tr>
		<td width="130">Jurusan</td>
		<td><input name="jurusan" type="text" placeholder="Jurusan Pemilih"></td>
		</tr>
		<tr>
		<td width="130">Konsentrasi</td>
		<td><input name="konsentrasi" type="text" placeholder="Konsentrasi Pemilih"></td>
		</tr>
		<tr>
		<td></td>
		<td><input class="btn btn-success" type="submit" name="Submit" value="SUBMIT">&nbsp;&nbsp;&nbsp;&nbsp;<input class="btn btn-danger" type="reset" name="Reset" value="RESET"></td>
		</tr>
		</table>
	</div>
	</form>
	<button class="btn-link" onclick="window.location.href='admin.php'">KEMBALI</button>
</div>
</body>
</html>