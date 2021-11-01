<?php require_once('../includes/connection.php');?>
<?php 
$id =mysqli_real_escape_string($con,$_GET['blog_id']);
$query ="DELETE FROM blog WHERE blog_id ='{$id}'";
$resultset = mysqli_query($con,$query);
if ($resultset){
            header('Location:./blog-table.php');
         }else{
            echo "Delete Mission Faild";
             }
 ?>
