
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin pannel</title>
    <link rel="stylesheet" href="./css/bootstrap.css">
    <link rel="stylesheet" href="../icons/css/all.css">
    <link rel="stylesheet" href="./css/account.css">
    <link rel="shortcut icon" href="../../img/logo.jpg" type="image/x-icon">
    <script src="./js/bootstrap.js"></script>
    <style>
      h4{
        text-transform: capitalize;
      }
    </style>
</head>
<body>
    <header>
        <nav class="navbar navbar-dark bg-dark fixed-top">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">Wellcome</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="offcanvas offcanvas-end bg-dark text-light" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
    <h4 class="offcanvas-title" id="offcanvasNavbarLabel"><?php echo $_SESSION['fname']." ".$_SESSION['lname'];?></h4>
                  <button type="button" class="btn-close bg-light" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                  <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    <li class="nav-item">
                      <a class="nav-link <?php if($active = "home")echo "active";?> " aria-current="page" href="./account.php"><h5><i class="fas fa-home"></i>Home</h5></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link <?php if($active = "Recordings")echo "active";?> " href="./recoding.php"><h5><i class="fas fa-record-vinyl"></i>Recordings</h5></a>
                    </li>
                    <li class="nav-item">
                       <a class="nav-link <?php if($active = "Profile")echo "active";?> " href="./profile.php"><h5><i class="fas fa-user-alt"></i>Your Profile</h5></a>
                    </li>
                    <li class="nav-item">
                       <a class="nav-link" href="./paiment.php"><h5><i class="fas fa-money-check-alt"></i>Payment Recipt</h5></a>
                    </li>
                     <hr>
                    <li class="nav-item">
                        <a class="nav-link text-danger" href="./logout.php"><h5><i class="fas fa-power-off text danger"></i>Logout</h5></a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </nav>
    </header>
    <main>