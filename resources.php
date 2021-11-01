<?php $active = "resources";?>

<?php 


require_once('./includes/function.php');

?>  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta name="google-site-verification" content="UdliUPXDdlE2Ise_YBrTTQYyMLxEiyNaJpF3KVBgebY" />
    <meta name="keywords" content="ict past papers O/L &A/L, ict marking schemes O/L &A/L, ict zone grade 9,10,A/L &O/L ict classes">  
    <link rel="canonical" href="https://www.ictzone.lk/resources.php">
    <!--
    <meta name="description" content="Download Past Papers & Marking Schemes. Here you can download O/L ICT Exam Past Papers and Marking Schemes.">
    <meta name="description" content="Srilamlan Best ict education website"> -->
    <meta name="description" content="ict zone ksun Fernando's Personal website teaches Information comunication technology">
    
        <meta name="robots" content="index, follow">
        <meta property="og:type" content="website">
        <meta property="og:title" content="ICT ZONE">
        <meta property="og:description" content="ict zone  ksun Fernando's Personal website teaches Information comunication technology">
        <meta property="og:url" content="https://www.ictzone.lk/">
        <meta property="og:site_name" content="ict zone">


<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=GA_MEASUREMENT_ID"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){window.dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'GA_MEASUREMENT_ID');
</script>






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

    <title>ICT ZONE</title>
</head>
<body>
<?php require_once('./includes/nav.php')?>      

    <!-------------------Fixed image Start------------------------------>
    <div class="fx-image" style="background-image: url(./img/pexels-ann-nekr-5797997-min.jpg);">
    </div>
        <!-------------------Fixed image End------------------------------->

    <main>
        <!--Section-1 start-->

<div class="container p-3 my-5 rounded shadow">
    <div class="col-5 m-auto rounded shadow-lg text-center py-3 bg-dark">
    <h2 class="text-center text-warning">Download resources</h2>
    </div>
<div class="col col-12 col-md-10 col-sm-10 -lg p-3 my-5">
<form action="file.php" method="get">
  <div class="mb-3">
    <?php rescources();?>
  </div>
  <div class="mb-3">
  <?php grade();?>
  </div>
  
  <div class="mb-3">
    <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="lang">
  <option value="sinhala">Sinhala</option>
  <option value="english">English</option>
</select>
  </div>
  <button type="submit" name="submit" class="btn btn-primary col-5 m-auto d-block">Submit</button>
</form>
</div>
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