<?php
include('./includes/connection.php');
if (isset($_GET['id'])) {
   $id = $_GET['id'];
   $sid = $_GET['sid'];
    $link = $_GET['link'];

$cook = setcookie('id',$id,time()+60*60*60); 

if ($cook) {
    
    echo "<script>window.open('".$link."','_self')</script>";

}

}

?>