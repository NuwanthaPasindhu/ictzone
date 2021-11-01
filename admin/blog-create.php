
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.css">
        <title>ICT ZONE</title>
</head>
<body>   
<div class="form container bg-light">
<form action="blog-create.php" method="post">
 <div class="mb-3">
    <label class="form-label">Blog Title</label>
    <input type="text"   name="title" class="form-control">
  </div> <div class="mb-3">
    <label class="form-label">Blog Small Title</label>
    <input type="text"   name="stitle" class="form-control">
  </div><div class="mb-3">
    <label class="form-label">Blog Create Name</label>
    <input type="text"   name="cname" class="form-control">
  </div>
 <div class="mb-3">
    <label class="form-label">Blog Text</label>
  <textarea class="form-control" name="content" id="floatingTextarea"></textarea>
  </div>
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
  </div>
</form>
</div>

</div>
        <script src="../js/jquery.min.js"></script>
        <script src="../js/bootstrap.js"></script>
        <script src="./ckeditor/ckeditor.js"></script>
        <script>
        CKEDITOR.replace('content');
        </script>
</body>
</html>

<?php require_once('../includes/connection.php');?>
<?php 
if (isset($_POST['submit'])) {

 
  
$date   =date("Y/m/d");
$title  =mysqli_real_escape_string($con,$_POST['title']);
$stitle =mysqli_real_escape_string($con,$_POST['stitle']);
$name   =mysqli_real_escape_string($con,$_POST['cname']);
$content=$_POST['content'];

if (empty($_POST['title'])&empty($_POST['stitle'])&empty($_POST['name'])) {

echo "<script>alert('all are required');</script>";

}else{
/*
 $query = "INSERT INTO blog(blog_date,blog_title,blog_short_title,blog_text,created_on)
 VALUES('$date','$title','$stitle','$content','$name')";*/

 $query = "INSERT INTO blog(blog_date, blog_title,blog_short_title,blog_text,created_on,created_by)VALUES(
   '{$date}','{$title}','{$stitle}','{$content}','{$date}','{$name}')";
              $resultset= mysqli_query($con,$query);

             if ($resultset) {
              echo "<script>alert('New Blog Created Successfully');</script>";
             }else{
              echo "<script>alert('New Blog Not Created Successfully. Please Cheack Source Code');</script>";
            }
}
}
 ?>
