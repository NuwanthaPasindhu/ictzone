<?php

$host="";
$name="ictzonel";
$password="pMhZGnp(0*Dm";
$db="ictzonel_kasundb";

// create database connection

$con= mysqli_connect($host,$name,$password,$db);

//check coneection errors

if ($con) {
//	echo "connection Success";
}else{
die("connection faild".mysqli_connect_error());
}

?>