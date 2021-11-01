<?php $active = "blog";?>
<?php include("./includes/connection.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="ICT PASS PAPERS KASUN FERNANDO ">

<meta name="description" content="Download Past Papers & Marking Schemes. Here you can download O/L ICT Exam Past Papers and Marking Schemes.">
<meta name="description" content="Srilamlan Best ict education website"> 
<meta name="description" content="ICT in education in Sri Lanka Stages of Information and communication technology in education.">
<meta name="description" content="ict zone  ksun Fernando's Personal website teaches Information comunication technology">
<meta name="description" content="You can download ICT passpapers syllabus and answersheet">
<meta name="description" content="Central Collage ICT Teacher Kasun Fernando">

<link rel="stylesheet" href="./css/bootstrap.css">
    <!--===========================================================================================================-->
    <link rel="stylesheet" href="./css/main.css">
    <!--===========================================================================================================-->
    <link rel="stylesheet" href="./css/style.css">
    <!--===========================================================================================================-->
    <link rel="stylesheet" href="./icons/css/all.css">
    <!--===========================================================================================================-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
     <!--===========================================================================================================-->
    <link rel="shortcut icon" href="./img/logo.jpg" type="image/x-icon">
    <!--===========================================================================================================-->
    <title>Ict Zone Blog Page</title>
</head>
<body>

<?php require_once('./includes/nav.php')?>  


<?php 
// cheking if url  parameter is present
if (isset($_GET['blog_id'])) {
	$blog_id= mysqli_real_escape_string($con,$_GET['blog_id']);
	$query= "SELECT * FROM blog WHERE blog_id = {$blog_id} LIMIT 1 ";
}else{
	// getting the latest blog post
	$query= "SELECT * FROM blog ORDER BY blog_id  DESC LIMIT 1 ";
}
// EXICUTING THE QUERY
	$resultset= mysqli_query($con,$query);
	
	// checking query success
if ($resultset) {
if (mysqli_num_rows($resultset) == 1) {
	// prepaer to dispaly result
	$blog_post  =mysqli_fetch_assoc($resultset);
	$blog_title =$blog_post['blog_title'];
	$blog_date  =$blog_post['blog_date'];
	$blog_text  =$blog_post['blog_text'];
	$creator =$blog_post['created_by'];

}
}
// preparing a list of previous records
$query = "SELECT blog_id, blog_short_title FROM blog ORDER BY blog_id DESC LIMIT 10 ";
	$resultset= mysqli_query($con,$query);
$blog_nav = '<ul>';
	if ($resultset) {
	if (mysqli_num_rows($resultset) > 0) {
	while ($result=mysqli_fetch_assoc($resultset)) {
$blog_nav .='<li><a href="blog.php?blog_id='.$result['blog_id'].'">'.$result['blog_short_title'].'</a></li>';		
	}
	}
	}else{
		echo "string";
	}
$blog_nav .= '</ul>';
 ?>
<div class="padding"></div>
   <div class="container-fluoid bg-light my-5">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <ul class="nav flex-column">
        <li class="nav-item">
         <!-- Button trigger modal -->
<button type="button" class="btn btn-primary mb-5 mt-5 mx-5" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Previos Blogs  . .
  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Previos Links</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
<?php echo "$blog_nav"; ?>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>

        </div>
      </div>
    </div>
  </div>
        </li>
      </ul>
</nav>

<main role="main" class="container">
	<h1 class="text-start mb-5 shadow-sm p-3"><?php echo "$blog_title"; ?></h1>	
    <h6 class="text-start mb-5 shadow-sm p-3">Date Posted :  <?php echo "$blog_date"; ?> </h6>
<div class="content border border-5 rounded p-3 col-lg-12 col-md-6   shadow-sm">

   <?php echo "$blog_text"; ?>

</div>
<h6 class="text-start mb-5 shadow-sm p-3">Blog Creator :  <?php echo "$creator"; ?></h6>
</main>
</div>




<?php require_once('./includes/footer.php')?>      
<script src="./js/jquery.min.js"></script>
    <!--===========================================================================================================-->
    <script src="./js/jquery.form.js"></script>
    <!--===========================================================================================================-->
    <script src="./js/bootstrap.js"></script>
    <!--===========================================================================================================-->
    <script src="./js/app.js"></script>
    <!--===========================================================================================================-->
</body>
</html>
