<?php session_start();
if (empty($_SESSION)) {
    ?>
    <script src="./js/app.js"></script>
    <script>redirect_two();</script>
    <?php
}
$page = "Add Recording";
include('./functions/function.php');
include('./includes/connection.php');
include('./includes/nav.php');
?>

    <div class="container my-5 py-5 shadow-lg rounded-3">
        <h1 class="text-center">
            Add Recordes
        </h1>
        <div class="row">
        <div class="col-12">
            <form action="record.php" method="POST">
                <div class="my-3">
                    <label>Grade</label>
                   <?php get_grades();?>
                </div>
                <div class="my-3">
                    <label>Recoded Date </label>
                    <input type="date" name="date" class="form-control">
                </div>
                <div class="my-3">
                    <label>Record LINK </label>
                    <input type="url" name="url" class="form-control">
                </div>
                <div class="my-3">
                    <input type="submit" class="btn btn-warning" value="Submit">
                </div>
            </form>
            </div>
        </div>
    </div>

 <div class="container my-5 py-5 shadow-lg rounded-3">
        <h1 class="text-center">
          All Recordings
        </h1>
        <div class="row">
        <div class="col-12">
           <table class="table">
  <thead>
    <tr>
      <th scope="col">Recorded Date</th>
      <th scope="col">Grade</th>
      <th scope="col" class="text-center">Link</th>
      <th scope="col">Added Date</th>
      <th scope="col">Delete Date</th>
      <th scope="col">Action</th>
  </tr>
  </thead>
  <tbody>
   <?php
   recordings();
      
   ?>
   </tr>
</table>
            </div>
        </div>
    </div>


</main>
</body>
</html>