<?php include('../includes/nav.php');
if(!isset($_SESSION['user'])){?>
<div class="col-md-6 offset-md-3 col-sm-12 pt-5 pb-5">
<div class="card rounded shadow">
<div class="card-body">
<div class="card-header text-center bg-white">
<span class="h2 text-primary">Login</span>
</div>
<form>
  <div class="form-group">
    <label for="email">Email address</label>
    <input type="email" class="form-control" id="logemail"  placeholder="Enter email" name="email" autocomplete="off">
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" id="logpassword" placeholder="Password" name="password" autocomplete="off">
  </div>
</form>
<div class="card-footer bg-white text-primary text-center">
  <a class=" btn btn-defualt" id="reg-link">
  Click here if you don't have an account ...
  </a>
  <br>
  <a  class="btn btn-defualt" id="reset-link">Password Reset</a>
</div>
</div>
</div>
</div>
<?php }else{
header("location:../index.php");
}
  include('../includes/footer.php');?>