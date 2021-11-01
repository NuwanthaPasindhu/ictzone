<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="./css/style.css" />
    <link rel="shortcut icon" href="../img/logo.jpg" type="image/x-icon">
    <title>ICT Zone Student Login page</title>
    <style>
        input [type='password']{
              position: relative;  
        }
        i{
            position: absolute;
            right: 15%;
            top: 48%;
            cursor: pointer;

        }
    </style>
</head>
<body>
 <!-------------------loader  Start------------------------------->
 <div class="loader">
        <img src="../img/logo.jpg" alt="" srcset="">
    </div>
        <!-------------------loader  End------------------------------->
    <div class="form">
        <div class="alert">

        </div>
    <p>Login</p>
    <form method="POST" action="./login.php" >
        <input type="email"  id="email" placeholder="Email" />
        <input type="password" id="password" placeholder="Password" />
        <i class="fas fa-eye" id="pbtn"></i>
        <button type="submit" id="submit">Login</button>

        <p class="message">Not registered? <a href="./signup.php">Sign up</a></p>
       <p class="message"> <a href="../">&#8592; &nbsp;Back</a> &nbsp; &#124; &nbsp;<a href="./forget.php">Forget Password</a></p>
    </form>
    </div>
<script src="./js/jquery.min.js"></script>
<script src="./js/jquery.form.js"></script>
<script src="./js/app.js"></script>
<script src="function.js"></script>
<script>
   login();
   show_password();
</script>
</body>
</html>