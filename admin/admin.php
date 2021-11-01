<?php session_start();
if (empty($_SESSION)) {
    ?>
    <script src="./js/app.js"></script>
    <script>redirect_two();</script>
    <?php
}
$page = "Admin";
?>
<?php 
include('./includes/connection.php');
require_once('./includes/nav.php');
?>
<div class="container col-12 py-5 shadow-lg rounded my-5">

    <div class="my-3">
  <?php 
 $out = "
<table class='table' style='width:100%;'>
  <thead>
    <tr>
  
      <th>File Name</th>
      <th>Grade</th>
      <th>Language</th>
      <th>File</th>
    </tr>
  </thead>";
  
  
 	 	 	 
   $query = "SELECT resources.resources_name, grades.grade,filies.lang,filies.file FROM filies INNER JOIN grades ON filies.grade = grades.id INNER JOIN resources ON filies.resources_id = resources.id ";
    $run = mysqli_query($con,$query);
    while($result=mysqli_fetch_assoc($run)){
         $out .= "<tr><td>".$result['resources_name']."</td>";
         $out .= "<td>".$result['grade']."</td>";
         $out .= "<td>".$result['lang']."</td>";
         $out .= "<td>".$result['file']."</td>";
    }
    
    
  $out.= "</tr></table>";
        echo $out;

?>
    </div>
</div>

</main>    
</body>
</html>