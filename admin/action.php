<?php session_start();
if (empty($_SESSION)) {
    ?>
    <script src="./js/app.js"></script>
    <script>redirect_two();</script>
    <?php
}
$page = "Record Delete or Update";
include('./functions/function.php');
include('./includes/connection.php');
include('./includes/nav.php');
?>
 <div class="container my-5 py-5 shadow-lg rounded-3">
        <h1 class="text-center">
          <?php  echo$page;?>
        </h1>
        <div class="row">
        <div class="col-12">
           <table class="table">
   <?php
   
   
   
      $id = $_GET['id'];
      $action = $_GET['action'];  
    $query = " SELECT * FROM grades";
    $run = mysqli_query($con,$query);
    if ($run) {
        $output = "<select name ='grade' class='form-control'>";
        while ($result= mysqli_fetch_assoc($run)) {
    $output .= "<option value='".$result['id']."'
    
    
    >".$result['grade']." ".$result['spacial_notes']."</option>";   
        }
        $output .= "</select>";
       
    }
   
      if($action == "update"){
               $out="<form action='action.php' method='get'>";
               
     $query = "SELECT * FROM recordings WHERE is_deleted='0' AND id='$id'";
    $run = mysqli_query($con,$query);
 
     if($result = mysqli_fetch_assoc($run)) {

         $out.= "<tr><th scope='col'>Id</th><td><input type='text' readonly name='id' value='".$id."'class='form-control'></td></tr>";
         
         $out.= "<tr><th scope='col'>Recorded Date</th><td><input type='date' name='date' value='".$result['rdate']."'class='form-control'></td></tr>";
         $out.= "<tr><th>Grade</th><td>$output</td></tr>";
         $out.= "<tr><th scope='col'>LInk</th><td><input type='link' name='link' value='".$result['link']."'class='form-control'></td></tr>";
              $out.="<input type='submit' name='submit' value='update'class='form-control btn btn-info'>";
              $out.="</form>";
     
         
     }

     echo $out;
     

      }
      
      if(isset($_GET['submit'])){
          $id = $_GET['id'];
          $date = $_GET['date'];
          $grade = $_GET['grade'];
          $link = $_GET['link'];
          $query="UPDATE recordings SET rdate='".$date."',grade='".$grade."', link= '".$link."' WHERE 	id='".$id."' LIMIT 1";
       		
          $run = mysqli_query($con,$query);
               if(mysqli_affected_rows($con)==1){
                   ?>
                   <script>
                      alert("Updated");
      window.open("add_recordings.php","_self");
                      </script>
                   <?php
               }else{
                   ?>
                   <script>alert("Un succsess");</script>
                   <?php
               }
          			
      }
      
      
      if($action == "delete"){
          echo "delete";
            $query="DELETE FROM recordings WHERE  id='".$id."' LIMIT 1";
       		
          $run = mysqli_query($con,$query);
               if(mysqli_affected_rows($con)==1){
                   ?>
               
                   <script> 
                   alert("Deleted");
      window.open("add_recordings.php","_self");
      </script>
                   <?php
               }else{
                   ?>
                   <script>alert("Un succsess");</script>
                   <?php
               }
      }
   ?>
</table>
            </div>
        </div>
    </div>

</main>
</body>
</html>