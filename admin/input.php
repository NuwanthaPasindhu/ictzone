<?php session_start();
if (empty($_SESSION['email'])) {
    ?>
    <script src="./js/app.js"></script>
    <script>redirect_two();</script>
    <?php
}

?>
<?php include('../includes/function.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.css">
    <script src="./js/bootstrap.js"></script>
    <script src="./js/jquery.min.js"></script>
    <script src="./js/jquery.form.js"></script>
    <title>Document</title>
</head>
<body>
               <div class="container my-5 p-5 rounded shadow">
               
                   <div class="main">
                       <form action="upload.php" method="POST" enctype="multipart/form-data">
                       <div class="mb-3">
               <?php rescources();?>
             </div>
             <div class="mb-3">
             <?php grade();?>
             </div>

             <div class="mb-3">
               <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="lang">
             <option value="sinhala">Sinhala</option>
             <option value="english">English</option>
</select>
             </div>
                <div class="mb-3">
                  <input type="file" class="form-control" name="file" id="file">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="reset" class="btn btn-danger">Clear</button>
                <button class="btn btn-warning" onclick="reload();">Reload</button>
                <a href="./admin.php" class="btn btn-info" >Back</a>
              </form>
              <div class="progress my-3" style="display: none;">
                <div class="progress-bar progress-bar-striped progress-bar-animated bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 0%"></div>
              </div>
              <div class="alert alert-primary" role="alert" style="display: none;">
                        File uploaded successfully.....
              </div>
        </div>
    </div>
<script>
    $(document).ready(function(){      
      $('.alert').css("display","none");

    $("form").ajaxForm({

            beforeSend:function(){
              $('.progress').css("display","");
              var precentVal = "0%";
              $(".progress-bar").css("width",precentVal);
            },
            uploadProgress:function(e,p,t,presentComplete){
                var precentVal = presentComplete + "%";
                $(".progress-bar").css("width",precentVal);
            },
            complete:function(xhr){
              $('.alert').css("display","");

            }
          });

        });
        
</script>
<script src="./js/app.js"></script>
</body>
</html>