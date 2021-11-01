<?php
require('./includes/connection.php');
 $email= mysqli_real_escape_string($con,$_POST['email']);
 $activationKey = sha1(date('Y-m-d-t-s-ms').$email);
$link = "<a href='https://www.ictzone.lk/users/config/passwordconfig.php/?code=".$activationKey."&email=".$email."'>".$activationKey."</a>";



$query ="SELECT * FROM users WHERE email = '{$email}'";
$run =mysqli_query($con,$query);
if (mysqli_num_rows($run)==1) {
    
    $from = 'ictzonel@ictzone.lk';
    $email_subject ='Email Verification  Code';

    //start creating email body
    $email_body= "massage from  ICTZONE Website <br>";
      $email_body.="<b>Massage:</b><br>
      <h4>This is System Ganerated Massage......<h4><br />
      <h1>Dont Forward this Massage.Click on the link heare to Change Your Password<h1>
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
    echo "<div class='alert alert-success'>Your Email Verification Code Send Successfully.. Please Check Your Mail</div>";
    }else{
        echo "<div class='alert-danger'> Mail Not Send</div>";
    }

    
}else{
  echo "<div class=' alert alert-danger'>Email Not Exists Try Another Email</div>";
    

}









?>