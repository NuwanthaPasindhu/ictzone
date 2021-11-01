<?php  session_start();

if (empty($_SESSION['id'])) {
?>
<script src="./js/app.js"></script>
<script>
  redirect_two()
</script>
    
    
<?php
}
$active = "Profile";

?>
<?php require('./includes/header.php'); ?>

<div class="container my-5 py-5 shadow-lg rounded">

<div class="container">
    <div class="main-body">
          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body py-lg-5">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="./img/ales-nesetril-Im7lZjxeLhg-unsplash.jpg" alt="Admin" class="rounded-circle" width="150">
                    <div class="mt-3">
                      <h4><?php echo $_SESSION['fname']." ".$_SESSION['lname'];?></h4>
                      
                    </div>
                  </div>
                </div>
              </div>
             
            </div>
            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">System ID</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo $_SESSION['id']?>
                    </div>
                  </div>
                  <hr>
                   <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Full Name</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo $_SESSION['fname']." ".$_SESSION['lname'];?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                       <?php echo $_SESSION['email'];?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Phone</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo $_SESSION['mobileNumber'];?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">School</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo $_SESSION['school'];?>
                    </div>
                  </div>
                  <hr>
                   <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Grade</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php 
                    require('./includes/connection.php');
                        $id = $_SESSION['grades'];
                    $query = " SELECT * FROM grades WHERE id='{$id}' LIMIT 1";
                    $run = mysqli_query($con,$query);
                    if ($run) {
                            if ($result= mysqli_fetch_assoc($run)) {
                              echo  $result['grade'];
                            }

                    }
                    
                    
                    ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Address</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo $_SESSION['address'];?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-12">
                      <!-- Button trigger modal -->
<button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
        <i class="fas fa-edit"></i> Edite Profile
</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header text-center alert ">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

       <form action="#" id="form" method="POST">
       <?php 
       require('./includes/function.php');
       $id = $_SESSION['id'];
       details($id);
    
       ?>
    
</main>
</body>
<script src="./js/bootstrap.js"></script>
<script src="./js/jquery.min.js"></script>
<script src="function.js"></script>
<script> user_update();</script>



</html>