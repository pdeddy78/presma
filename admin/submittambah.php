<?php
 	$nim          = $_POST['nim'];
	$pass1 		= $_POST['pass1'];
	$pass2 		= $_POST['pass2'];
	$nama             = $_POST['nama'];
	$jurusan               = $_POST['jurusan'];
	$konsentrasi    = $_POST['konsentrasi'];
	 
	// cek kesamaan password
	if ($pass1 == $pass2)
	{
	mysql_connect("localhost", "root", "1234");
	mysql_select_db("presma");
	 
	// cek keberadaan nim dalam database
	 
	$query = "SELECT * FROM pemilih WHERE nim = '$nim'";
	$hasil = mysql_query($query);
	$jumNIM  = mysql_num_rows($hasil);
	 
	if ($jumNIM > 0) echo "<center>"."</br>"."<h2>"."Maaf, NIM yang dimasukkan sudah terdaftar \n"."</h2>"."</br>"."<a href='tambahpemilih.php'>Kembali</a>";
	else
	{	 
	// menyimpan username, password terenkripsi, dan email  ke database
	$query = "INSERT INTO pemilih VALUES(null, '$nim', MD5('$pass1'), '$nama', '$jurusan', '$konsentrasi', '0')";
	$hasil = mysql_query($query);
	 
	// menampilkan status pendaftaran
	if ($hasil) echo "<center>"."</br>"."<h2>"."User sudah berhasil terdaftar"."</h2>"."</br>"."<a href='admin.php'>Kembali</a>";
	else echo "<center>"."</br>"."<h2>"."Gagal.. Username sudah ada yang memiliki \n"."</h2>"."</br>"."<a href='tambahpemilih.php'>Kembali</a>";
	}
	}
	else echo "<center>"."</br>"."<h2>"."Password yang dimasukkan tidak sama \n"."</h2>"."</br>"."<a href='tambahpemilih.php'>Kembali</a>";
 
?>