<?php
include('../includes/connection.php');
session_start();

$email = $_POST['email'];
$password =$_POST['password'];
$enpassword= sha1($password);

$_SESSION['email']= $email;
$_SESSION['password'] = $enpassword;

$query ="SELECT * FROM teacher WHERE email = '{$email}' AND  `password` = '{$enpassword}' ";
$run =mysqli_query($con,$query);

if (mysqli_num_rows($run)==1) {
    
    echo "<div class='alert-success p-2'>Login Success Redirecting.... </div>";
   ?>
   <script src="./js/app.js"></script>
   <script>
       redirect_one();
   </script>
   <?php
}else{
    echo "<div class='alert-danger'>Login Faild </div>";
}


?>