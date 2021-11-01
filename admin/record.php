<?php session_start();
if (empty($_SESSION)) {
    ?>
    <script src="./js/app.js"></script>
    <script>redirect_two();</script>
    <?php
}
?>
<?php

include('./includes/connection.php');
        $url = mysqli_real_escape_string($con,$_POST['url']);
        $grade = mysqli_real_escape_string($con,$_POST['grade']);
        $date = mysqli_real_escape_string($con,$_POST['date']);
        $tdate = date('Y-m-d');
        $deldate = date('Y-m-d', strtotime($tdate. ' + 14 days'));
        if (empty($url)||empty($date) ) {
            ?>
                <script src="./js/app.js"></script>
                 <script>redirect_five();</script>   
            <?php
        }else {
            
            $query = "INSERT INTO recordings(rdate, grade, link,add_on, del_date)VALUES('{$date}','{$grade}','{$url}','{$tdate}','{$deldate}')";
            $run = mysqli_query($con,$query);
            if ($run) {
               ?>
                <script src="./js/app.js"></script>
                 <script>redirect_four();</script>
               <?php
            }
        }

?>