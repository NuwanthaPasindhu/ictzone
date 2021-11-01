
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin pannel</title>
    <link rel="stylesheet" href="./css/bootstrap.css">
    <link rel="stylesheet" href="../icons/css/all.css">
    <link rel="shortcut icon" href="../img/logo.jpg" type="image/x-icon">
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
              <a class="navbar-brand" href="./admin.php">Wellcome To <?php echo $page; ?> Page </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="offcanvas offcanvas-end bg-dark text-light" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
   
                  <button type="button" class="btn-close bg-light" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                  <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="./input.php"><h5><i class="fas fa-upload"></i>&nbsp;&nbsp;File Upload</h5></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link active" href="./add_recordings.php"><h5><i class="fas fa-record-vinyl"></i>&nbsp;&nbsp; Add Recordings</h5></a>
                    </li>
                    <hr>
                    <li class="nav-item">
                       <a class="nav-link active" href="./blog-table.php"><h5><i class="fas fa-table"></i>&nbsp;&nbsp;All Blogs</h5></a>
                    </li>  
                    <li class="nav-item">
                       <a class="nav-link active" href="./blog-create.php"><h5><i class="fas fa-newspaper"></i>&nbsp;&nbsp; Blog Creator</h5></a>
                    </li>  
                    <li class="nav-item">
                       <a class="nav-link active" href="./students.php"><h5><i class="fas fa-users"></i>&nbsp;&nbsp; Student Details</h5></a>
                    </li>
                    <hr>
                    <li class="nav-item">
                       <a class="nav-link active" href="./fees.php"><h5><i class="fas fa-money-check-alt"></i>&nbsp;&nbsp;Paid vs All</h5></a>
                    </li>
                          <li class="nav-item">
                       <a class="nav-link active" href="./paiment.php"><h5><i class="fas fa-dollar-sign"></i>&nbsp;&nbsp;  Paid records  </h5></a>
                    </li>  
                    <hr>
                    <li class="nav-item">
                        <a class="nav-link active text-danger" href="./logout.php"><h5><i class="fas fa-power-off text-danger"></i>&nbsp;&nbsp;Logout</h5></a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </nav>
    </header>
    <main>