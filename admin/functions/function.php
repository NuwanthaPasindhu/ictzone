<?php
include('../includes/connection.php');
/*
function get_years(){
    global $con;

    $query = " SELECT * FROM years";
    $run = mysqli_query($con,$query);
    if ($run) {
        $output = "<select name ='year' class='form-control'>";
        while ($result= mysqli_fetch_assoc($run)) {
            $output .= "<option value='".$result['year_id']."'>".$result['year']."</option>";   
        }
        $output .= "</select>";
        echo $output;
    }

    
}
*/
function recordings(){
    global $con;
     $query = "SELECT * FROM recordings WHERE is_deleted='0' ORDER BY id desc";
    $run = mysqli_query($con,$query);
     while($result = mysqli_fetch_assoc($run)) {
          $out.= "<tr><td>".$result['rdate']."</td>";
           $grade= $result['grade'];
      $tquery = "SELECT * FROM grades WHERE id ='{$grade}'";
      $trun = mysqli_query($con,$tquery);
      if($tresult = mysqli_fetch_assoc($trun)) {
        $out.= "<td>".$tresult['grade']."</td>";
      }
     
      $out.= "<td><a href='".$result['link']."' target='_blank'>".$result['link']."</a></td>";
      $out.= "<td>".$result['add_on']."</td>";
      $out.= "<td>".$result['del_date']."</td>";
      $out.= "<td><a href='./action.php?id=".$result['id']."&action=delete' class='btn btn-danger' target='_blank'>".del."</a> <br /><br />
      <a href='./action.php?id=".$result['id']."&action=update' class='btn btn-success'  target='_blank'>Up</a></td>";
         
     }

     echo $out;
    
     
}


function get_grades(){
    global $con;

    $query = " SELECT * FROM grades";
    $run = mysqli_query($con,$query);
    if ($run) {
        $output = "<select name ='grade' class='form-control'>";
        while ($result= mysqli_fetch_assoc($run)) {
    $output .= "<option value='".$result['id']."'>".$result['grade']." ".$result['spacial_notes']."</option>";   
        }
        $output .= "</select>";
        echo $output;
    }

    
}
?>