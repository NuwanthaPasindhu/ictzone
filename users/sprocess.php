<?php

require('./includes/connection.php');

 $firstname = mysqli_real_escape_string($con,$_POST['firstname']);
 $lastname = mysqli_real_escape_string($con,$_POST['lastname']);
 $school = mysqli_real_escape_string($con,$_POST['school']);
 $grade = mysqli_real_escape_string($con,$_POST['grade']);
 $email = mysqli_real_escape_string($con,$_POST['email']);
 $address = mysqli_real_escape_string($con,$_POST['address']);
 $mob = mysqli_real_escape_string($con,$_POST['mob']);
 $password = mysqli_real_escape_string($con,$_POST['password']);
  $enpassword =md5(sha1($password));
 $activationKey = sha1(date('Y-m-d-t-s-ms').$firstname.$lastname);
$link = "<a href='https://www.ictzone.lk/users/config/config.php/?code=".$activationKey."'>".$activationKey."</a>";
$query ="SELECT * FROM users WHERE email = '{$email}'";
$run =mysqli_query($con,$query);
if (mysqli_num_rows($run)==1) {
      echo "<div class=' alert alert-danger'>
      
      Email Already Exists Try Another Email
      
      </div>";
    
    
}else{
$query = "INSERT INTO users(fname,lname,grades,school,`address`,mobileNumber,email,`password`, activation_key,is_active) VALUES('{$firstname}','{$lastname}','{$grade}','{$school}','{$address}','{$mob}','{$email}','{$enpassword}','{$activationKey}','0')";
$result = mysqli_query($con,$query);
if ($result) {
  
 
    $from = 'ictzonel@ictzone.lk';
    $email_subject ='Activation Code';

    //start creating email body
    $email_body= "massage from contact Us page of the website <br>";
     $email_body.= "<b>Subject:</b> {$email_subject} <br>";
      $email_body.="<b>Massage:</b><br>
      <h4>This is System Ganerated Massage......<h4><br />
      <h1>Dont Forward this Massage.Click on the link heare to Active Your Account<h1>
      <br />
      <hr height='3px'/>
    <br />
        <i>'{$link}' </i>
      
      ";
     //end creating email body
    
      //start creating email header
    $header="From:{$from}\r\nContent-Type: text/html;";
      //end creating email body
      $sent_mail_results=mail($email, $email_subject, $email_body, $header);
      

      // check mail errors
if ($sent_mail_results) {
    echo "<div class='alert-success'> Dear ".$firstname." ".$lastname." Yor Account Activation Code Send Successfully.. Please Check Your Mail</div>";
    }else{
        echo "<div class='alert-danger'> Mail Not Send</div>";
    }
    

 }else {
     echo "Account Not Created";
 }
}

mysqli_close($con);

?>