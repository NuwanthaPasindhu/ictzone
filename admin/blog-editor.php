<?php session_start();
if (empty($_SESSION)) {
    ?>
    <script src="./js/app.js"></script>
    <script>redirect_two();</script>
    <?php
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../icons/css/all.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="shortcut icon" href="../img/logo.jpg" type="image/x-icon">
    <title>DashBoard</title>
</head>
<body>
<?php include('./includes/nav.php')?>
    <section class="section-1">


    </section>
</div>
</body>
</html>






<?php require_once('../includes/connection.php');?>
<?php 
$id =mysqli_real_escape_string($con,$_GET['blog_id']);
//echo "$id";
$query = "SELECT * FROM blog WHERE blog_id={$id} LIMIT 1";
$resultset= mysqli_query($con,$query);
if ($resultset) {
   $result= mysqli_fetch_assoc($resultset);
$title=$result['blog_title'];
$stitle=$result['blog_short_title'];
$name=$result['created_by'];
$content=$result['blog_text'];  
  // print_r($result);
}else{
    echo "unstring";
}
 ?>
<div class="form container bg-light my-5 py-4">
	<form action="blog-update.php" method="post">


 <div class="mb-3">
    <input type="hidden" name="id" class="form-control" value='<?php echo $id; ?>'>
  </div> 
  <div class="mb-3"> <div class="mb-3">
    <label class="form-label">Blog Title</label>
    <input type="text"   name="title" class="form-control" value='<?php echo $title ?>' >
  </div> <div class="mb-3">
    <label class="form-label">Blog Small Title</label>
    <input type="text"   name="stitle" class="form-control" value='<?php echo"$stitle" ?>' >
  </div><div class="mb-3">
    <label class="form-label">Blog Create Name</label>
    <input type="text"   name="name" class="form-control" value='<?php echo"$name" ?>' >
  </div>
 <div class="mb-3">
    <label class="form-label">Blog Text</label>
  <textarea class="form-control"  name="content" id="floatingTextarea"><?php echo $content ?></textarea>
  </div>
<button type="submit" class="btn btn-danger" name="submit">submit</button>
  </div>
</form>
</div>
</div>
        <script src="../js/jquery.min.js"></script>
        <script src="../css/bootstrap.min.js"></script>

        <script src="./ckeditor/ckeditor.js"></script>
        <script>
        CKEDITOR.replace('content');
        </script>
</body>
</html>
