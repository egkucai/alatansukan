<?php

include 'linkdb.php';

$bil=$_POST['bil'];
$nama_alatan=$_POST['nama_alatan'];
$kuantiti=$_POST['kuantiti'];

$query="INSERT INTO alatan (bil,nama_alatan,kuantiti) VALUES ('$bil','$nama_alatan','$kuantiti')";

if (mysqli_query($con,$query)) {
	echo "BERJAYA";
	header('location:index.php');
}
else{
	echo "TIDAK BERJAYA";
}
?>
?>