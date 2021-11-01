<?php session_start();
if (empty($_SESSION)) {
    ?>
    <script src="./js/app.js"></script>
    <script>redirect_two();</script>
    <?php
}
?>



<?php

include('./includes/connection.php');
$page="Class Payments";
require_once('./includes/nav.php');
?>

<div class="container col-12 py-5 shadow-lg rounded my-5">


<?php

$out = "
<table class='table' style='width:100%;'>
            <thead>
            </tr>
        <th>Friest Name</th>
      <th>Last Name</th>
      <th>Grade</th>
      <th>Class</th>
      <th>Last Payed Month</th>
      <th>Last Payed Date</th>
      <th>Reciept</th>
      </tr></thead>
      
      ";

$query = " SELECT users.fname,users.lname,users.grades, payments.class,payments.feesmonth,payments.paydate,payments.receipt FROM users LEFT JOIN payments ON payments.userid = users.id WHERE users.is_active = '1' ";
$run = mysqli_query($con,$query);

while($result=mysqli_fetch_assoc($run)){
//    print_r($result);
     $out.= "<tr><td>".$result['fname']."</td>";
    $out.= "<td>".$result['lname']."</td>";
    $grade = $result['grades'];
     $tquery = "SELECT * FROM grades WHERE id ='{$grade}'";
      $trun = mysqli_query($con,$tquery);
      if($tresult = mysqli_fetch_assoc($trun)) {
        $out.= "<td>".$tresult['grade']."</td>";
      }
    $out.= "<td>".$result['class']."</td>";
    $out.= "<td>".$result['feesmonth']."</td>";
    $out.= "<td>".$result['paydate']."</td>";
    $out.= "<td><a href='../users/payments/".$result['receipt']."'><img src='../users/payments/".$result['receipt']."'width='200px' height='200px' target='_blank' ></a></td>";
}


$out.="</tr></table>";
echo $out;


mysqli_close($con);

?>
</div>
</main>
</body>
</html>
