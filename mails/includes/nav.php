      
      
      
      <!-------------------loader  Start------------------------------->
        <div class="loader">
        <img src="../img/logo.jpg" alt="" srcset="">
    </div>
        <!-------------------loader  End------------------------------->

        <!-------------------Navigation Bar Start------------------------------->
    <nav class="navbar navbar-expand-lg bg-dark mb-5 fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand" href="../">
            <img src="../img/logo.jpg" class="logo" alt="logo" />
            <span>ICT ZONE</span>
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa fa-bars fa-1.5x navbar-toggler-icon text-white"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <div class="mr-auto"></div>
            <ul class="navbar-nav">
              <li class="nav-item">
               <a class="nav-link <?php if($active =="index")echo"active";?>" aria-current="page" href="../">Home</a>
              </li>
  
              <li class="nav-item">
                <a class="nav-link <?php if($active =="class")echo"active";?> " aria-current="page" href="../classes.php">Class</a>
              </li>
  
              <li class="nav-item">
                <a class="nav-link <?php if($active =="blog")echo"active";?> " aria-current="page" href="../blog.php">Blog</a>
              </li>
              <li class="nav-item">
  <a class="nav-link <?php if($active =="resources")echo"active";?> " aria-current="page" href="../resources.php">Resources</a>
              </li>
  
              <li class="nav-item">
               <a class="nav-link <?php if($active =="about")echo"active";?> " aria-current="page" href="./about.php">AboutUs</a>
              </li>
             <li class="nav-item">
              <a class="nav-link" aria-current="page" href="../users/">Login</a>
              </li>
  
            </ul>
          </div>
        </div>
      </nav>
    <!-------------------Navigation Bar End------------------------------->