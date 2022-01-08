<?php

require_once('./includes/connection.php');
$out = "
<table class='table' style='width:100%;'>
  <thead>
    <tr>
    <th>Name</th>
      <th>Grade</th>
      <th>Class</th>
      <th>Month</th>
      <th>Pay Date</th>
      <th>Amount</th>
      <th>Reciept</th>
    </tr>
  </thead>";


  if (empty($_GET['search'])) {
    $query = "SELECT * FROM payments ORDER BY id desc";
    $run = mysqli_query($con,$query);
    while($result = mysqli_fetch_assoc($run)) {
      $out.= "<tr><td>".$result['fullname']."</td>";
      $grade= $result['grade'];
      $tquery = "SELECT * FROM grades WHERE id ='{$grade}'";
      $trun = mysqli_query($con,$tquery);
      if($tresult = mysqli_fetch_assoc($trun)) {
        $out.= "<td>".$tresult['grade']."</td>";
      }
      $out.= "<td>".$result['class']."</td>";
      $out.= "<td>".$result['feesmonth']."</td>";
      $out.= "<td>".$result['paydate']."</td>";
      $out.= "<td>".$result['currency']."</td>";
      $out.= "<td><a href='../users/payments/".$result['receipt']."'><img src='../users/payments/".$result['receipt']."'width='200px' height='200px' target='_blank' ></a></td>";
    }
  
}else{
  $txt = $_GET['search'];
  $query = "SELECT * FROM payments  WHERE fullname LIKE '%$txt%' OR class LIKE '%$txt%' ORDER BY id desc";
  $run = mysqli_query($con,$query);
  while($result = mysqli_fetch_assoc($run)) {
    $out.= "<tr><td>".$result['fullname']."</td>";
    $grade= $result['grade'];
    $tquery = "SELECT * FROM grades WHERE id ='{$grade}'";
    $trun = mysqli_query($con,$tquery);
    if($tresult = mysqli_fetch_assoc($trun)) {
      $out.= "<td>".$tresult['grade']."</td>";
    }
    $out.= "<td>".$result['class']."</td>";
    $out.= "<td>".$result['feesmonth']."</td>";
    $out.= "<td>".$result['paydate']."</td>";
    $out.= "<td>".$result['currency']."</td>";
    $out.= "<td><a href='../users/payments/".$result['receipt']."'><img src='../users/payments/".$result['receipt']."'width='200px' height='200px' target=_blank></a></td>";

  }

}
$out.="</tr><td>";
echo $out;


mysqli_close($con);
?>