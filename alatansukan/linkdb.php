<?php

$host="localhost";
$user="root";
$password="";
$dbname="sistemsukan";

$con=mysqli_connect($host,$user,$password,$dbname);

if(!$con) {
	echo "not connected";
}
else {
	echo "";
}

?>