
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

    <title>ICT ZONE Resources</title>
   
</head>
<body>


<?php
require_once('./includes/connection.php');


if (isset($_GET['submit'])) {

$catagories = mysqli_real_escape_string($con,$_GET['catagories']);
$grade = mysqli_real_escape_string($con,$_GET['grade']);
$lang = mysqli_real_escape_string($con,$_GET['lang']);
    $output = "<table class='table'>";
    $output .="<thead>";
    $output .="<tr>";
    $output .= "<th>Grade</th>";
    $output .=  "<th>Language</th>";
    $output .= "<th>File</th>";
    $output .= "<th>Download</th>";
    $output .= "</tr>";
    $output .="</thead>";

    $query = "SELECT * FROM filies WHERE resources_id='{$catagories}' AND grade='{$grade}' AND lang='{$lang}'";
    
   $result = mysqli_query($con,$query);
   if(mysqli_num_rows($result)>=1){
      
        
    while ($resultset = mysqli_fetch_assoc($result)) {
        
            $squery = "SELECT * FROM grades WHERE id='{$resultset['grade']}'";
        $sresult = mysqli_query($con,$squery);
           if(mysqli_num_rows($sresult)>=1){
                if($sresultset = mysqli_fetch_assoc($sresult)){
                    
        $output .="<tr>";
        $output .=" <td>".$sresultset['grade']."</td>";
        $output .= "<td>".$resultset['lang']."</td>";
        $output .= "<td>".$resultset['file']."</td>";
        $output .= "<td><a href='download.php?file=".$resultset['file']."' class='btn btn-danger'>Download</a></td>";
        $output .="</tr>";
                }
           }
    } 
   }else{
        $output .= "<tr><th colspan='4' class='text-center'>File Will be Available Soon</th></tr>";
    }
    $output .= "</table>";
}


?>

 
<?php echo $output;?>
<div class="container mb-4">
    <div class="col">
    <a href="./resources.php" class="text-center btn btn-success text-white" >Back</a>
    </div>
</div>


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