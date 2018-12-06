<?php include('../includes/nav.php');
if(!isset($_SESSION['user'])){?>
<div class="col-md-6 offset-md-3 col-sm-12 pt-5 pb-5">
<div class="card rounded shadow">
<div class="card-body">
<div class="card-header text-center bg-white">
<span class="h2 text-primary">Password-Reset</span><br>
<span class="text-danger" id="mes_failed"></span>
</div>
<form>
<div class="form-group">
    <label for="user">Username</label>
    <input type="text" class="form-control" id="res-user" placeholder="username" name="user" autocomplete="off">
    <div class="text-center">
    <span class="text-danger" id="erroruser1">
    </span>
    </div>
  </div>
  <div class="form-group">
    <label for="email">Email address</label>
    <input type="email" class="form-control" id="res-email"  placeholder="Enter email" name="email" autocomplete="off">
    <div class="text-center">
    <span class="text-danger" id="erroremail1">
    </span>
    </div>
  </div>
  <div class="form-group text-center">
  <a class="btn btn-primary text-white" id="res-form">Send link</a>
  </div>
</form>
<div class="card-footer bg-white text-primary text-center">
</div>
</div>
</div>
</div>
<?php }else{
header("location:../index.php");
}
include('../includes/footer.php');?>