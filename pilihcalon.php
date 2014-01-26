<?php
include 'koneksi.php';
// memanggil script class
include 'class-captcha.php';
// membuat obyek class
$captcha1 = new mathcaptcha();
// panggil method untuk mengenerate kode
$captcha1->generatekode();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
	<title>Pemilihan PresMa 2013 | STMIK RAHARJA</title>
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
	<link href="favicon.ico" rel="icon" type="image/x-icon">
<script language="javascript">
function focuson()
{
document.form1.voting.focus()
}
function check()
{
	if (!document.form1.voting[0].checked && !document.form1.voting[1].checked && !document.form1.voting[2].checked && !document.form1.voting[3].checked && !document.form1.voting[4].checked) {
	alert("Anda Belum Memilih Calon");
	document.form1.voting.focus();
	return false;
	}
if(document.form1.kode.value==0)
	{
	alert("Masukkan Hasilnya Untuk Verifikasi");
	document.form1.kode.focus();
	return false;
	}
}
</script>
</head>
<body>
<div class="container" align="center">
</br>
<h1><b>PILIH CALON</b></h1>
	<form name="form1" action="proses.php" method="post" onSubmit="return check();">		
		<table width="700" border="0" cellpadding="0" cellspacing="0" align="center">
		<tr>
		<td align="center"><img src="img/Calon1.jpg"><br>Calon I<br><input type="radio" name="voting" value="calon_I"></td>
		<td align="center"><img src="img/Calon2.jpg"><br>Calon II<br><input type="radio" name="voting" value="calon_II"></td>
		<td align="center"><img src="img/Calon3.jpg"><br>Calon III<br><input type="radio" name="voting" value="calon_III"></td>
		<td align="center"><img src="img/Calon4.jpg"><br>Calon IV<br><input type="radio" name="voting" value="calon_IV"></td>
		<td align="center"><img src="img/Calon5.jpg"><br>Calon V<br><input type="radio" name="voting" value="calon_V"></td>
		</tr>
		</br>
		</table>
		</br>
	<p>
	<?php
	// menampilkan kode captcha berisi soal matematika
	$captcha1->showcaptcha();
	?>
	<input type="text" name="kode" placeholder="Ketikkan hasilnya" autofocus/>
	</p>
	<td><input class="btn btn-success" type="submit" value="Submit" name="tombol">&nbsp;&nbsp;&nbsp;&nbsp;<input class="btn btn-danger"type="reset" value="Reset" name="tombol"></td>
	</form>
	<a href="pemilih.php">KEMBALI</a>
</div>
</body>
</html>