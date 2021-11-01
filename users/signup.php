<?php require('./includes/function.php');?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../img/logo.jpg" type="image/x-icon">
    <title>ICT Zone Student SignUp page</title>
    <style type="text/css">
      input [type='password']{
              position: relative;  
        }
        i#pbtn{
            position: absolute;
            right: 14%;
            bottom:31%;
            cursor: pointer;

        } 
        i#repbtn{
            position: absolute;
            right: 14%;
            bottom:22%;
            cursor: pointer;

        }
    .form-body{
        padding-top:140px;
    }
    .box{
        display: flex;
    }
    .box input{
        width: 50%;
        display: inline;
        margin: 2px 2px 15px !important;
    }
    </style>
    <link rel="stylesheet" type="text/css" href="./css/signup.css" />  
    <link rel="stylesheet" type="text/css" href="../icons/css/all.css" />
</head>
<body>
     <!-------------------loader  Start------------------------------->
     <div class="loader">
        <img src="../img/logo.jpg" alt="" srcset="">
    </div>
        <!-------------------loader  End------------------------------->
    <div class="form-body">

    <div class="form">
        <p class="alert"></p>
    <p>Signup</p>
    <form action="sprocess.php" method="post" id="form">
        <div class="box">
        <input class="firstname" type="text" id="firstname" name="firstname" placeholder="Firstname" />
        <input class="lastname" type="text" id="lastname" name="lastname" placeholder="Lastname" />
        </div>
        <div class="box">
        <input class="school" type="text" id="school" name="school" placeholder="School" />
            <?php get_grades();?>
        </div>  
         <input type="email" id="email" name="email" placeholder="E-mail" />
        <input type="text" id="address" name="address" placeholder="address" />
        <input type="text" id="mob" name="mob" placeholder="Mobile Number " />
        <input type="password" id="password" name="password" placeholder="Password" />
         <i class="fas fa-eye" id="pbtn"></i>
        <input type="password" id="repassword" name="repassword" placeholder=" Re Enter Your Password" />
         <i class="fas fa-eye" id="repbtn"></i>
        <button id="submit">Signup</button>
    </form>
     <p class="message"> <a href="./">&#8592; &nbsp;Back to Login Page</a></p>
    </div>
    </div>

    <script src="./js/jquery.min.js"></script>
    <script src="./js/jquery.form.js"></script>
<script src="./js/app.js"></script>
<script src="function.js"></script>
<script>
  signup();
  show_password()
  reshow_password()
</script>
</body>
</html>