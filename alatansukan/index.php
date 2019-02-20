<!DOCTYPE html>
<html>
<head>
	<title>Index</title>
</head>
<body style="background: url(image/background.jpg)">
<center>
<h1><b>SISTEM PENYIMPANAN ALATAN SUKAN</b></h1>

<?php

include 'linkdb.php';

$query="select bil, nama_alatan, kuantiti from alatan";
$result=mysqli_query($con,$query);
?>

<table align="center" border="5">
<p><h2><b>SELAMAT DATANG KE SISTEM PENYIMPANAN ALATAN SUKAN</b></h2></p>
<img src="image/kvs.png" width="300px" height="200px">
<h3>SENARAI NAMA ALATAN</h3>
	<td align="center" bgcolor="yellow">BIL</td>
	<td align="center" bgcolor="yellow">NAMA ALATAN</td>
	<td align="center" bgcolor="yellow">KUANTITI</td>
	<td align="center" bgcolor="red">UPDATE</td>
	<td align="center" bgcolor="red">DELETE</td>


<?php
while($alatan=mysqli_fetch_array($result)) {
	$bil=$alatan["bil"];

echo "<tr>";
echo "<td>".$alatan["bil"]."</td>";
echo "<td>".$alatan["nama_alatan"]."</td>";
echo "<td>".$alatan["kuantiti"]."</td>";
echo "<td>","<a href=\"form_update.php?bil=$bil\">UPDATE</a>";
echo "<td>","<a href=\"proses_delete.php?bil=$bil\">DELETE</a>";
}
echo "</tr>";
echo "</table>";
?>

</table>
<br>
<button type="submit" name="submit"><a href="form_alatan.php">DAFTAR ALATAN BARU</a></button>
<br>
<br>
</center>
</body>
</html>