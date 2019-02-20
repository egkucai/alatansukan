<!DOCTYPE html>
<html>
<head>
	<title>UPDATE</title>
</head>
<body style="background: url(image/background.jpg)">
<center>

<?php
include 'linkdb.php';
$bil=$_GET['bil'];

$course=mysqli_query($con,"SELECT * FROM alatan WHERE bil='$bil'");
$row=mysqli_fetch_array($course);
?>

<p><h1><b>FORM KEMASKINI ALATAN SUKAN</b></h1></p>
<img src="image/kvs.png" width="300px" height="200px">
<form action="proses_update.php" method="POST">
<center>
<br>BIL:</br>
<br><input align="center" type="text" name="bil" value="<?php echo $row['bil'];?>"></br>
<br>NAMA ALATAN:</br>
<br><input align="center" type="text" name="nama_alatan" value="<?php echo $row['nama_alatan'];?>"></br>
<br>KUANTITI:</br>
<br><input align="center" type="text" name="kuantiti" value="<?php echo $row['kuantiti'];?>"></br>
<br>
<button type="submit" name="submit">SUBMIT</button>
<br><br>	
<button type="submit" name="submit"><a href="index.php">HOME</a></button>
</center>

</form>
</body>
</html>