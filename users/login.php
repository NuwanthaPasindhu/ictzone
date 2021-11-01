<?php
include('./includes/connection.php');
session_start();

global $con;


$email = mysqli_real_escape_string($con,$_POST['Email']);
$password = mysqli_real_escape_string($con,$_POST['Password']);
$enpassword= md5(sha1($password));

$query ="SELECT * FROM users WHERE email = '{$email}' AND  `password` = '{$enpassword}' AND	is_active = '1' ";
$run =mysqli_query($con,$query);
if (mysqli_num_rows($run)==1) {
if($result=mysqli_fetch_assoc($run)) {
    
   
   $_SESSION['id']= $result['id'];
   $_SESSION['fname']= $result['fname'];
   $_SESSION['lname']= $result['lname'];
   $_SESSION['grades']= $result['grades'];
   $_SESSION['school']= $result['school'];
   $_SESSION['address']= $result['address'];
   $_SESSION['mobileNumber']= $result['mobileNumber'];
   $_SESSION['email']= $result['email'];


echo "<div class='alert-success p-2'>Login Success Redirecting.... </div>";

?>

<script src="./js/app.js"></script>
<script>
   redirect_one();
</script>

<?php

}
}else{
echo "<div class='alert-danger'>Login Faild </div>";
}



?>