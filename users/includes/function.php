<?php   

include('./includes/connection.php');


function get_grades(){
    global $con;

    $query = " SELECT * FROM grades";
    $run = mysqli_query($con,$query);
    if ($run) {
        $output = "<select id ='grade' name ='grade' class='form-control grade'>";
        $output .= "<option selected  class='disable'> Grade</option>";
        while ($result= mysqli_fetch_assoc($run)) {
            $output .= "<option value='".$result['id']."'>".$result['grade']."</option>";   
        }
        $output .= "</select>";
        echo $output;
    }

    
}



function details($id){
    global $con;
    //echo $id;
    $query = " SELECT * FROM users WHERE id ='{$id}'";
    $run = mysqli_query($con,$query);
     if ($run) {
        if ($result = mysqli_fetch_assoc($run)) {
           // print_r($result);
           
            ?>           
            <input type="hidden" class="form-control" id="id" name="id" value="<?php echo $result['id'];?>" >
            <input type="hidden" class="form-control" id="g" name="id" value="<?php echo $result['grades'];?>">
            <label>Friest Name</label>
            <input type="text" class="form-control" id="fn" name="fn" value="<?php echo $result['fname'];?>" >
            <label>Lastst Name</label>
            <input type="text" class="form-control" id="ln" name="ln" value="<?php echo $result['lname'];?>" >
            <label>School</label>
            <input type="text" class="form-control" id="sc" name="sc" value="<?php echo $result['school'];?>" >
            <label>Address</label>
            <input type="text" class="form-control" id="add" name="add" value="<?php echo $result['address'];?>" >
            <label>Mobile Number</label>
            <input type="text" class="form-control" id="mbn" name="mbn" value="<?php echo $result['mobileNumber'];?>" >
            <label>Email</label>
            <input type="email" class="form-control" id="e" name="e" value="<?php echo $result['email'];?>" >
            <label>Password <span class="text-danger">You Cant Change Your Password</span></label>
            <input type="password" readonly class="form-control" id="pas" name="pas" value="<?php echo $result['password'];?>" >

           
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" id="btnsub" class="btn btn-primary">Save changes</button>
             </div>
            </div>
        </div>
            </div>  
         </form>
            <?php

        }
    
    }

}





function sentmail($name,$month,$class,$grade){

   

    $from = 'ictzonel@ictzone.lk ';
    $email = 'kasunrosh@gmail.com';
    $email_subject ='Fees';
    //start creating email body
    $email_body= "massage from ICT Zone website <br>
    <hr>
    <br>

     ".$grade." ".$name." ".$month." monthly ".$class." class payments uploaded
      ";
     //end creating email body
    
      //start creating email header
    $header="From:{$from}\r\nContent-Type: text/html;";
      //end creating email body
      $sent_mail_results=mail($email, $email_subject, $email_body, $header);
      

      // check mail errors
if ($sent_mail_results) {

    }else{
        echo "<div class='alert-danger'>System Error</div>";
    }






}



















?>