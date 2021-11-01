<?php require_once('../includes/connection.php');?>

<?php

if (isset($_POST['submit'])) {
$id=mysqli_real_escape_string($con,$_POST['id']);
$title  =mysqli_real_escape_string($con,$_POST['title']);
$stitle =mysqli_real_escape_string($con,$_POST['stitle']);
$name   =mysqli_real_escape_string($con,$_POST['name']);
$content=$_POST['content'];
//echo $id. $title. $stitle. $name. $content;
   $query="UPDATE blog SET blog_title='{$title}',
blog_short_title='{$stitle}',
blog_text='{$content}',
created_by='{$name}'
 WHERE  blog_id = '{$id}' LIMIT 1";
   $resultset = mysqli_query($con,$query);
              $resultset= mysqli_query($con,$query);

           if ($resultset) {
            //   echo "aaaaa";
            header('Location:../blog.php');
         }else{
            echo "Update mission faild";
             }
}
 ?>