<?php 
session_start();
$_SESSION['email'] = "";
$_SESSION['password'] = "";
session_destroy();
?>
 <script src="./js/app.js"></script>
    <script>redirect_two();</script>