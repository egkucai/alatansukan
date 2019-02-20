<?php
include 'linkdb.php';

$bil=$_GET['bil'];

$query="DELETE FROM alatan WHERE bil='$bil'";

if($result=mysqli_query($con,$query)) {
	echo " BERJAYA";
	header('location:index.php');
}
else{
	echo " TIDAK BERJAYA";
}

?>