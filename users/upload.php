<?php  session_start();

if (empty($_SESSION['id'])) {
?>
<script src="./js/app.js"></script>
<script>
  redirect_two()
</script>
<?php
}
require('./includes/connection.php');
require('./includes/function.php');
?>

<?php  
if (isset($_FILES['recipt']['tmp_name'])) {

if ($_FILES['recipt']['type'] == "application/pdf" || $_FILES['recipt']['type'] == "image/png" || $_FILES['recipt']['type'] == "image/jpeg") {

    $email = $_SESSION['email'];
    $name = $_SESSION['fname']." ".$_SESSION['lname'];
    $rname = $_SESSION['fname']."_".$_SESSION['lname'];
    $grade = $_SESSION['grades'];
    $id = $_SESSION['id'];
    $month =$_POST['month'];
    $date =$_POST['date'];
    $class = $_POST['class'];
    $money = $_POST['currency'].".00";
  
    $fliname = $_FILES['recipt']['name'];
    $tmpname = $_FILES['recipt']['tmp_name'];
    $type = $_FILES['recipt']['type'];
    $uploadto = "./payments/";
      if ($_FILES['recipt']['type'] == "application/pdf") {
           $rename = $rname."-".$month."_".$class."_fees.pdf";
           }else {
           $rename = $rname."-".$month."_".$class."_fees.jpg";
          }
         $uploaded = move_uploaded_file($tmpname,$uploadto.$fliname);

        if ($uploaded) {
          $is_renamed =  rename($uploadto.$fliname,$uploadto.$rename);
            if ($is_renamed) {


     $fquery = "SELECT * FROM payments WHERE fullname='{$rname}'AND feesmonth='{$month}'LIMIT 1";
                  $frun = mysqli_query($con,$fquery);

        if(mysqli_num_rows($frun)== "1"){
             echo "<div class=' alert alert-danger'>Your ".$month." Fess Reciept All Ready uploaded...</div>";
        }else{
      
   $query = "INSERT INTO payments(userid,fullname, grade,class,feesmonth,paydate,currency,receipt)VALUES('{$id}','{$rname}','{$grade}','{$class}','{$month}','{$date}','{$money}','{$rename}')";
                  $run = mysqli_query($con,$query);

                if ($run) {
                  sentmail($name,$month,$class,$grade);

                $from = 'ictzonel@ictzone.lk ';
                    $email_subject ='ICT Class Payment Upload';
                    //start creating email body
                    $email_body= "massage from ICT Zone website <br>";
                     $email_body.= "<b>From:</b>{$email} <br>";
                     $email_body.= "<b>Subject:</b> {$email_subject} <br>";
                      $email_body.="<b>Massage:</b><br>
                     
                     <h4> Dear ".$name.", Receipt has been successfully uploaded. Do not delete this message. If at any time a problem arises, show this message to the teacher
                        <h4>

                      ";
                     //end creating email body
                    
                      //start creating email header
                    $header="From:{$from}\r\nContent-Type: text/html;";
                      //end creating email body
                      $sent_mail_results=mail($email, $email_subject, $email_body, $header);
                      
                
                      // check mail errors
                if ($sent_mail_results) {
                  //  echo "<div class=' alert alert-success'>Uploaded Succsess Please Check your Email</div>";
                  sentmail($name,$month,$class);
          echo "<div class=' alert alert-success'> Uploaded Successfull Thank you..</div>";

                    }else{
                        echo "<div class=' alert alert-danger'>System Error</div>";
    
                      }

                }else {
                  echo mysqli_error($con);
                }
            
            }
        }
        }

      }else {
        echo "<div class=' alert alert-danger'>.png .jpg AND .pdf Files Only.</div> ";
      }
    
}else {
    echo "<div class=' alert alert-danger'>All Fields are Requerd</div>";
    
}

?>
