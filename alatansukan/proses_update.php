<?php

include 'linkdb.php';

$bil=$_POST['bil'];
$nama_alatan=$_POST['nama_alatan'];
$kuantiti=$_POST['kuantiti'];

$query="UPDATE alatan SET bil='$bil', nama_alatan='$nama_alatan', kuantiti='$kuantiti' WHERE bil='$bil' ";

if($result=mysqli_query($con,$query)) {
	echo " BERJAYA";
	header('location:index.php');
}
else{
	echo " TIDAK BERJAYA";
}


?>
