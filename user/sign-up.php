<?php include('../includes/nav.php');
if(!isset($_SESSION['user'])){
?>
<div class="col-md-8 offset-md-2 col-sm-12 pt-5 pb-5">
<div class="card rounded shadow">
<div class="card-header text-center bg-white">
<span class="h2 text-primary">Sign-up</span>
</div>
<div class="card-body">
<form>
  <div class="form-group">
    <input type="text" class="form-control" id="user"  placeholder="Enter your user name..." name="user">
    <div class="text-center">
    <span id="empty-user" class="text-center text-danger"></span>
    </div>
  </div>
  <div class="form-group">
    <input type="email" class="form-control" id="email" placeholder="Enter  your email..." name="email">
    <div class="text-center">
    <span id="error-email" class="text-center text-danger"></span>
    </div>
  </div>
  <div class="form-group">
    <input type="password" class="form-control" id="password" placeholder="Password" name="password">
    <div class="text-center">
    <span id="error-password" class="text-center text-danger"></span>
    </div>
  </div>
  <div class="form-group">
    <input type="password" class="form-control" id="retype-password" placeholder="retype password" name="retype-password">
    <div class="text-center">
    <span id="error-retypepassword" class="text-center text-danger"></span>
    </div>
  </div>
  <span id="dont-match" class="text-center text-danger"></span>
  <div class="text-center">
  <button type="button" class="btn btn-primary" id="signup">Sign-up</button>
  </div>
</form>
</div>
</div>
</div>
<?php 
}else{
  header('location:../index.php');
}
include('../includes/footer.php');?>