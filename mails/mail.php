<?php 
require './includes/connection.php';

// submit button check

$name =mysqli_real_escape_string($con,$_POST['Name']);
$email =mysqli_real_escape_string($con,$_POST['Email']);
$msg = $_POST['Massage'];

//echo "$name $email $subject $msg";
$to='ictzonel@ictzone.lk';
$email_subject ='massage frome ict zone.lk website';

//start creating email body

$email_body= "massage from contact Us page of the website <br>";
$email_body.= "<b>From:</b>{$name} <br>";
 $email_body.= "<b>Subject:</b> {$subject} <br>";
  $email_body.="<b>Massage:</b><br>".nl2br(strip_tags($msg));
 //end creating email body

  //start creating email header
$header="From:{$email}\r\nContent-Type: text/html;";
  //end creating email body
$sent_mail_results=mail($to, $email_subject, $email_body, $header);

// check mail errors
if ($sent_mail_results) {
echo "<div class='alert-success'> Mail Send Successfully</div>";
}else{
    echo "<div class='alert-danger'> Mail Not Send</div>";
}
mysqli_close($con);
 ?>