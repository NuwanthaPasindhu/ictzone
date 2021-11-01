<?php  session_start();

if (empty($_SESSION['id'])) {
 
?>


<script src="./js/app.js"></script>
<script>
  redirect_two()
</script>
  


<?php

}
include('./includes/connection.php');
?>
<?php 
include('./includes/header.php');?>
    <main>
      <div class="container my-5">
     <?php
     $grade =  $_SESSION['grades'];
     $query = " SELECT * FROM recordings WHERE grade ='{$grade}'AND is_deleted = '0'";
    $run = mysqli_query($con,$query);
     if ($run) {
       $output = "<table class='table'>
       <thead>
         <tr>
           <th>Recorded Date</th>
           <th>Expireration Date</th>
           <th>Action</th>
          
         </tr>
       </thead>";
        if (mysqli_fetch_assoc($run)) {
          while ($result = mysqli_fetch_assoc($run)) {
            
            $output .= "<tr>";
            $output .= "<th>".$result['rdate']."</th>";
          //  $output .= "<th>".$result['link']."</th>";
          $output .= "<th>".$result['del_date']."</th>";
            $output .= "<th><a href='".$result['link']."' class = 'btn btn-danger' target='_blank'>Watch Recording</a></th>";
           
          
          } 
            
          }else {
               $output.="<tr><th colspan='4' class='text-center'>Recordings will be Availble soon</th></tr>";
             }
      $output.="</table>";
      echo $output;
      
      
      }
     
     
     ?>
      </div>
    </main>
</body>
<script src="./js/bootstrap.js"></script>
<script src="./js/jquery.min.js"></script>

</html>