<?php

$host="";
$name="ictzonel";
$password="pMhZGnp(0*Dm";
$db="ictzonel_kasundb";

// create database connection

$con= mysqli_connect($host,$name,$password,$db);
if($con){
// Geting month number
    $month_num =date("m"); 
    // convert to name 
    $month_name = date("F", mktime(0, 0, 0, $month_num, 10));
   
$query = "SELECT * FROM payments WHERE feesmonth LIKE'{$month_name}' ORDER BY  	paydate";
    $run = mysqli_query($con,$query);
    if( $data = mysqli_num_rows($run)){
       
      $out = "<table class='table' style='width:100%; border:1px solid black; border-collapse: collapse;'>
    <thead>
    
    <tr style='padding: 10px;  border:1px solid black;'><th colspan = '6' style='padding: 10px;  border:1px solid black;'>".$data." Data Found</th></tr>
      <tr style='padding: 10px;  border:1px solid black;'>
      <th style='padding: 10px;  border:1px solid black;'>Name</th>
        <th style='padding: 10px;  border:1px solid black;'>Grade</th>
        <th style='padding: 10px;  border:1px solid black;'>Class</th>
        <th style='padding: 10px;  border:1px solid black;'>Month</th>
        <th style='padding: 10px;  border:1px solid black;'>Payed Date</th>
        <th style='padding: 10px;  border:1px solid black;'>Amount</th>
      </tr>
      <tbody>";
      while($result = mysqli_fetch_assoc($run)) {
        $out.= "<tr style='padding: 10px;  border:1px solid black;'><th style='padding: 10px;  border:1px solid black;'>".$result['fullname']."</th>";
        $grade= $result['grade'];
        $tquery = "SELECT * FROM grades WHERE id ='{$grade}'";
        $trun = mysqli_query($con,$tquery);
        if($tresult = mysqli_fetch_assoc($trun)) {
          $out.= "<th style='padding: 10px;  border:1px solid black;'>".$tresult['grade']."</th>";
        }
        $out.= "<th style='padding: 10px;  border:1px solid black;'>".$result['class']."</th>";
        $out.= "<th style='padding: 10px;  border:1px solid black;'>".$result['feesmonth']."</th>";
        $out.= "<th style='padding: 10px;  border:1px solid black;'>".$result['paydate']."</th>";
        $out.= "<th style='padding: 10px;  border:1px solid black;'>Rs:".$result['currency']."</th>";
        $full = $full + $result['currency'];
       
    }
   $out.= "</tr><tr style='padding: 10px ;  border:1px solid black;'><th colspan='6'style='padding: 10px 50px;  border:1px solid black; text-align:right;'> Total Month Fees &nbsp Rs: \t".$full.".00</th></tr></tbody></table>";

  $from = 'ictzonel@ictzone.lk';
    $email_subject =$month_name." Month Payment Report";

    //start creating email body
 
   
      $email_body='<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
'.$out.'</body>
</html>';
 //end creating email body $out
    
      //start creating email header
    $header="From:{$from}\r\nContent-Type: text/html;";
      //end creating email body
   $sent_mail_results=mail("kasunrosh@gmail.com", $email_subject, $email_body, $header);
  
    }
}


?>