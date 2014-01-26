<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="favicon.ico" rel="icon" type="image/x-icon">
<title>Pemilihan PresMa 2013 | STMIK RAHARJA</title>
<link href="../css/stylepemilih.css" rel="stylesheet" type="text/css" />
</head>
<body>
<?php
include "koneksi.php";

$totalbelum = mysql_query("select count(*) as tot from pemilih where status='0'");
list($belummemilih) = mysql_fetch_row($totalbelum);

$totalsemua = mysql_query("select count(*) as tot from pemilih");
list($totalsemuapemilih) = mysql_fetch_row($totalsemua);

$hasil = mysql_db_query($db,"select * from calon",$koneksi);
$row   = mysql_fetch_row($hasil);
list($calon_I,$calon_II,$calon_III,$calon_IV,$calon_V)=$row;
$total = (int)$calon_I+(int)$calon_II+(int)$calon_III+(int)$calon_IV+(int)$calon_V;

//menampilkan persentase
$persen_calon_I=round(((int)$calon_I/(int)$total)*100,2);
$persen_calon_II=round(((int)$calon_II/(int)$total)*100,2);
$persen_calon_III=round(((int)$calon_III/(int)$total)*100,2);
$persen_calon_IV=round(((int)$calon_IV/(int)$total)*100,2);
$persen_calon_V=round(((int)$calon_V/(int)$total)*100,2);

//mengkonversi persentasi menjadi ukuran pada diagram batang dengan mengalikan faktor 2, karena jika 100% artinya lebar maksimum digram adalah 100pt
$lebar_calon_I=$persen_calon_I*2;
$lebar_calon_II=$persen_calon_II*2;
$lebar_calon_III=$persen_calon_III*2;
$lebar_calon_IV=$persen_calon_IV*2;
$lebar_calon_V=$persen_calon_V*2;

?>
<center>
<h2>HASIL PEROLEHAN SUARA SEMENTARA</h2>
<table width="500" border="0" cellspacing="2" cellpadding="2">
 
<tr>
<td><table border="0" width="488">
 
<tr>
<td><img src="../img/Calon1.jpg"></td>
<td width="100" align="left"><font size="2" face="verdana">&nbsp;&nbsp;Calon I</font></td>
<td width="24" align="right"><?php echo $calon_I;?></td>
<td width="10">&nbsp;</td>
<td width="356" align="left"><img src="../img/stat.jpg" border="1" width="<?php echo $lebar_calon_I ?>" height="12"> <font size="2" face="verdana">
<?php echo $persen_calon_I."%"; ?></font></td>
</tr>
<tr>
<td><img src="../img/Calon2.jpg"></td>
<td align="left"><font size="2" face="verdana">&nbsp;&nbsp;Calon II</font></td>
<td align="right"><?php echo $calon_II;?></td>
<td>&nbsp;</td>
<td align="left"><img src="../img/stat.jpg" border="1" width="<?php echo $lebar_calon_II ?>" height="12"> <font size="2" face="verdana">
<?php echo $persen_calon_II."%";?></font> </td>
</tr>
<tr>
<td><img src="../img/Calon3.jpg"></td>
<td align="left"><font size="2" face="verdana">&nbsp;&nbsp;Calon III</font></td>
<td align="right"><?php echo $calon_III;?></td>
<td>&nbsp;</td>
<td align="left"><img src="../img/stat.jpg" border="1" width="<?php echo $lebar_calon_III ?>" height="12"> <font size="2" face="verdana">
<?php echo $persen_calon_III."%";?></font></td>
</tr>
<tr>
<td><img src="../img/Calon4.jpg"></td>
<td align="left"><font size="2" face="verdana">&nbsp;&nbsp;Calon IV</font></td>
<td align="right"><?php echo $calon_IV;?></td>
<td>&nbsp;</td>
<td align="left"><img src="../img/stat.jpg" border="1" width="<?php echo $lebar_calon_IV ?>" height="12"> <font size="2" face="verdana">
<?php echo $persen_calon_IV."%";?></font></td>
</tr>
<tr>
<td><img src="../img/Calon5.jpg"></td>
<td align="left"><font size="2" face="verdana">&nbsp;&nbsp;Calon V</font></td>
<td align="right"><?php echo $calon_V;?></td>
<td>&nbsp;</td>
<td align="left"><img src="../img/stat.jpg" border="1" width="<?php echo $lebar_calon_V ?>" height="12"> <font size="2" face="verdana">
<?php echo $persen_calon_V."%";?></font></td>
</tr>
</table></td>
</tr>
<tr>
<td align="left"><p><font face="verdana" size="2" color="#666666"><?php echo 'Total Voting : ',$total; ?><?php echo ' dari ',$totalsemuapemilih; echo ' pemilih'?></p>
<p><?php echo 'Belum Memilih : ',$belummemilih;?></font></p></td>
</tr>
</table>
<button onclick="window.location.href='admin.php'">KEMBALI</button>
</center>
</body>
</html>