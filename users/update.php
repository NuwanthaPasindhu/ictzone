<?php  
require('./includes/connection.php');

echo $id = mysqli_real_escape_string($con,$_POST['id']);
$firstname = mysqli_real_escape_string($con,$_POST['firstname']);
$lastname = mysqli_real_escape_string($con,$_POST['lastname']);
$school = mysqli_real_escape_string($con,$_POST['school']);
$grade = mysqli_real_escape_string($con,$_POST['grade']);
$email = mysqli_real_escape_string($con,$_POST['email']);
$address = mysqli_real_escape_string($con,$_POST['address']);
$mob = mysqli_real_escape_string($con,$_POST['mob']);
$password = mysqli_real_escape_string($con,$_POST['password']);


$query = "UPDATE users SET fname = '{$firstname}',lname='{$lastname}',grades='{$grade}',school='{$school}',`address`='{$address}',mobileNumber='{$mob}',email='{$email}',`password` = '{$password}'  WHERE id='{$id}' LIMIT 1";

$run = mysqli_query($con,$query);
if ($run) {

    echo" Profile Updated.. Refresh tis web page";


  }else {
    echo "Update Mission Failed";
  }




?>