<?php

require_once('connection.php');

function rescources(){

global $con;



 $query = "SELECT * FROM resources";
 $result = mysqli_query($con,$query);
 if ($result) {
     $output = "<select class='form-select form-select-lg mb-3' aria-label='form-select-lg example' name ='catagories'>";
     while ($resultset = mysqli_fetch_assoc($result)) {
        $output .=" <option value='".$resultset['id']."'>".$resultset['resources_name']."</option>";
     }
    $output .= "</select>";

     echo $output;
 }

}




function grade(){

    global $con;
    
    
    
     $query = "SELECT * FROM grades";
     $result = mysqli_query($con,$query);
     if ($result) {
         $output = "<select class='form-select form-select-lg mb-3' aria-label='form-select-lg example' name ='grade'>";
         while ($resultset = mysqli_fetch_assoc($result)) {
            $output .=" <option value='".$resultset['id']."'>Grade ".$resultset['grade']."</option>";
         }
        $output .= "</select>";
    
         echo $output;
     }
    
    }

        function blogs(){
    global $con;
    $query = "SELECT blog_id, blog_short_title FROM blog ORDER BY blog_id DESC LIMIT 5 ";
	$resultset= mysqli_query($con,$query);
    $blog_nav ='';
	if ($resultset) {
	if (mysqli_num_rows($resultset) > 0) {
	while ($result=mysqli_fetch_assoc($resultset)) {
    $blog_nav.='<p class="text-muted"><a href="blog.php?blog_id='.$result['blog_id'].'" class="text-muted">'.$result['blog_short_title'].'</a></p>';		
	}
	}
   
    }
    echo $blog_nav;
        }

?>