<?php include('../includes/nav.php'); 
if(isset($_SESSION['user'])){
?>
<div class="col-md-8 offset-md-2 pt-4 pb-4">
<div class="card text-center shadow rounded">
  <div class="card-body">
    <table class="table table-borderless">
  <tbody>
    <tr>
      <th scope="row"><?php echo $_SESSION['user']['username']?></th>
      <td><a href="">Edit</a></td>
    </tr>
    <tr>
      <th scope="row"><?php echo $_SESSION['user']['email'] ?> </th>
      <td><a href="">Edit</a></td>
    </tr>
  </tbody>
</table>
  </div>
  </div>
</div>
<?php }else{
    header('location:../user/login.php');
} include('../includes/footer.php') ?>