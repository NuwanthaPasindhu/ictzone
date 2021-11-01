<?php   
require_once('./includes/connection.php');
$out = "
<table class='table' style='width:100%;'>
  <thead>
    <tr>
    <th>ID</th>
      <th>Friest Name</th>
      <th>Last Name</th>
      <th>Grade</th>
      <th>School</th>
      <th>Address</th>
      <th>Mobile</th>
      <th>Email</th>
    </tr>
  </thead>";

if (empty($_GET['search'])) {
    $query = "SELECT * FROM users WHERE is_active='1' ORDER BY id DESC";
    $run = mysqli_query($con,$query);
    while($result = mysqli_fetch_assoc($run)) {
      $out.= "<tr><td>".$result['id']."</td>";
      $out.= "<td>".$result['fname']."</td>";
      $out.= "<td>".$result['lname']."</td>";
      $grade= $result['grades'];

      $tquery = "SELECT * FROM grades WHERE id ='{$grade}'";
      $trun = mysqli_query($con,$tquery);
      if($tresult = mysqli_fetch_assoc($trun)) {
        $out.= "<td>".$tresult['grade']."</td>";
      }
      $out.= "<td>".$result['school']."</td>";
      $out.= "<td>".$result['address']."</td>";
      $out.= "<td>".$result['mobileNumber']."</td>";
      $out.= "<td>".$result['email']."</td>";
    }
  
 
}else{
  $txt = $_GET['search'];

  $squery = "SELECT * FROM users WHERE fname LIKE '%$txt%' OR lname LIKE '%$txt%'  ";
  $srun = mysqli_query($con,$squery);
  while($sresult = mysqli_fetch_assoc($srun)) {
    $out.= "<tr><td>".$sresult['id']."</td>";
    $out.= "<td>".$sresult['fname']."</td>";
    $out.= "<td>".$sresult['lname']."</td>";
    $grade= $sresult['grades'];

    $tquery = "SELECT * FROM grades WHERE id ='{$grade}'";
    $trun = mysqli_query($con,$tquery);
    if($tresult = mysqli_fetch_assoc($trun)) {
      $out.= "<td>".$tresult['grade']."</td>";
    }
    $out.= "<td>".$sresult['school']."</td>";
    $out.= "<td>".$sresult['address']."</td>";
    $out.= "<td>".$sresult['mobileNumber']."</td>";
    $out.= "<td>".$sresult['email']."</td>";
  }
  $out.= "</tr></table>";
}

  
  $out.= "</tr></table>";
   echo $out;




?>