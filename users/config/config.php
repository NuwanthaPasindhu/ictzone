<?php

/*
$host="";
$name="ictzonel";
$password="uKf6c03t9I";
$db="ictzonel_kasundb";


$host="localhost";
$name="root";
$password="";
$db="kasundup";
// create database connection
$con= mysqli_connect($host,$name,$password,$db);

//check coneection errors

if ($con) {
//	echo "connection Success";
}else{
die("connection faild".mysqli_connect_error());
}
*/

require('../includes/connection.php');

if(!empty($_GET['code'])){
     $code = $_GET['code'];
 
         $query= "UPDATE users SET activation_key=Null, is_active ='1' WHERE activation_key='{$code}' AND is_active ='0' LIMIT 1";
   $run = mysqli_query($con,$query);

    if ($run) {
     if (mysqli_affected_rows($con) =='1') {
    ?>
       
                <script>
                     alert("Account Created Successfully.Redirecting to login page");
            setTimeout(function(){
         window.open("../../","_self");
            },100) 
                    </script>
       
      <?php 
     }
    
    
  }else{
        echo "Account not Activated Successfully.... Please contact Mr Kasun Fernando";
    }

        }


?>