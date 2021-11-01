<?php require_once('../includes/connection.php');?>
<?php 

$catagories = $_POST['catagories'];
$grade = $_POST['grade'];
$lang = $_POST['lang'];
$filename = $_FILES['file']['name'];
$temp = $_FILES['file']['tmp_name'];
$path = "uploads/";


if (isset($temp)) {
$query = "INSERT INTO filies(resources_id,grade,lang ,`file`)VALUES('{$catagories}','{$grade}','{$lang}','{$filename}')";
$run = mysqli_query($con,$query);

if ($run) {
    move_uploaded_file($temp,$path.$filename);
}

}





?>