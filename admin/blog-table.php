<?php session_start();?>
<?php
if (empty($_SESSION)) {
    ?>
    <script src="./js/app.js"></script>
    <script>redirect_two();</script>
    <?php
}
$page="All Blog";
  require_once('./includes/nav.php');
?>
<div class="form container bg-light my-5">
	<form action="blog-editor.php" method="post">
 <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">blog_date</th>
      <th scope="col">blog_title</th>
      <th scope="col">edit</th>
      <th scope="col">delete</th>
    </tr>
  </thead>
  <tbody>
  <?php require_once('../includes/connection.php');?>

<?php 

$query= "SELECT * FROM blog ORDER BY blog_id DESC ";
$resultset= mysqli_query($con,$query);
if ($resultset) {
  while ($result= mysqli_fetch_assoc($resultset)) {
      $id= $result['blog_id'];
$date=$result['blog_date'];
$title=$result['blog_title'];
  echo "<tr><td>$id</td>";
  echo "<td>$date</td>";
  echo "<td>$title</td>";
  echo '<td><a href="blog-editor.php?blog_id='.$id.'" class=" btn btn-primary" target="_blank">'.'edite..'.'</a></td>';
  echo '<td><a href="blog-delete.php?blog_id='.$id.'" class=" btn btn-danger">'.'delete..'.'</a></td>' ;
  echo "</tr>";
}}

?>



  </tbody>
</table>

</div>
</form>
</div>
</main>
        <script src="../asset/js/jquery.min.js"></script>
        <script src="../asset/boostrap_js/bootstrap.min.js"></script>
        <script src="../asset/fontawesome-free-5.15.3-web/js/all.js"></script>
        <script src="../asset/js/script.js"></script>
        <script src="../asset/js/lazyloade.js"></script>
        <script src="../asset/ckeditor/ckeditor.js"></script>
        <script>
        //CKEDITOR.replace('edit-content');
        </script>
</body>
</html>