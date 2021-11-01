<?php


require_once('../includes/connection.php');
 $date = date('Y-m-d');

$query = "UPDATE recordings SET is_deleted = 1 WHERE del_date = '{$date}' ";
$run = mysqli_query($con,$query);

?>