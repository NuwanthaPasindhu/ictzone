<?php  session_start();

if (empty($_SESSION['id'])) {
?>
<script src="./js/app.js"></script>
<script>
  redirect_two()
</script>
<?php
}
?>

<?php   require('./includes/header.php'); ?>


<div class="container shadow-lg rounded-3 ">
     <h1 class="text-center text-danger">
                Submit Your Payment Details
            </h1>
        <div class="col-12 py-4">
            <form action="upload.php" method="post" enctype="multipart/form-data" id="form">
            
            <div class="my-3">
            <label class="my-2">Class</label>
            <select name="class" class="form-control">
                <option value="theory" selected>Theory Class</option>
                <option value="paper">Paper Class</option>
                <option value="theory_and_paper">Both</option>
            </select>
            </div>

            <div class="my-3">
                <label class="my-2"><i class="fas fa-calendar-alt"></i>&nbsp;Month Relevent To The Payment Of Class Fees </label>
               <select name="month" class="form-control">
                   <option value="January">January</option>
                   <option value="February">February</option>
                   <option value="March">March</option>
                   <option value="April">April</option> 
                   <option value="May">May</option>
                   <option value="June">June</option>
                   <option value="July">July</option>
                   <option value="August">August</option>
                   <option value="September">September</option>
                   <option value="October">October</option>
                   <option value="November">November</option>
                   <option value="December">December</option>
               </select>
            </div>
            <div class="my-3">
                <label for="" class="my-2"><i class="fas fa-calendar-week"></i> &nbsp; Date of Paiment</label>
                <input type="date" name="date" class="form-control">
            </div>
            <div class="my-3">
                <label for="" class="my-2"><i class="fas fa-dollar-sign"></i> &nbsp; class fees</label>
                <input type="number" min="1000"  step="50" name="currency" class="form-control">
            </div>
            <div class="my-3">
                <label for="file" class="my-2"><i class="fas fa-receipt"></i> &nbsp;Upload Your Payment Recipt</label>
                <span class="text-danger">* .jpg .png .pdf filies only</span>
                <input type="file" name="recipt" id="file" class="form-control" />
            </div>
            <div class="my-3">
            <div class="alert"></div>
                <button type="submit" class="btn btn-info">&nbsp;&nbsp;&nbsp;<i class="fas fa-paper-plane"></i> &nbsp;&nbsp;&nbsp;Submit</button>
            </div>
        </div>
    </div>

        </form>
        </div>
</div>

</main>
<script src="./js/jquery.min.js"></script>
<script src="./js/jquery.form.js"></script>
<script src="./function.js"></script>
<script>
    payment();
</script>
</body>
</html>