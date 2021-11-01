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
$page="All Student Class Payments";
require_once('./includes/nav.php');

?>
<div class="container col-12 py-5 shadow-lg rounded my-5">

<div class="my-3">
<input type="search" id="search" class="form-control" placeholder="Search here">
</div>
</div>

<div id="table" class="container-fluid shadow-lg rounded text-capitalize" >

</div>

</main>
<script src="./js/jquery.min.js"></script>
<script>
   $('document').ready(function(){
    get_data();

    $('#search').keyup(()=>{
        var txt =$('#search').val();
        if (txt != "") {
          $.ajax({
            url:'searchpayment.php',
            method:'GET',
            type:'JSON',
            data:{search:txt},
            success:function(data){
                $('#table').html(data);
            }
          })
        }else{
            get_data();
        }   
    })
   })
function get_data(){
$.ajax({
                url:'searchpayment.php',
                method:'POST',
                type:'JSON',
                success:function(data){

                $('#table').html(data);
            }
                })
}

</script>
</body>
</html>