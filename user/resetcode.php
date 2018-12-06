<?php include('../includes/nav.php');
if(!isset($_SESSION['user'])){?>
<div class="col-md-6 offset-md-3 col-sm-12 pt-5 pb-5">
<div class="card rounded shadow">
<div class="card-body">
<div class="card-header text-center bg-white">
<span class="h2 text-primary">Key</span><br>
<span class="text-danger" id="key_failed"></span>
</div>
<form>
<div class="form-group">
    <input type="text" class="form-control" id="res_key" placeholder="key here" name="key" autocomplete="off">
    <div class="text-center">
    <span class="text-danger" id="errorkey">
    </span>
    </div>
  </div>
<div class="form-group">
    <input type="password" class="form-control" id="New_password" placeholder="New password" name="np" autocomplete="off">
    <div class="text-center">
    <span class="text-danger" id="errornp">
    </span>
    </div>
  </div>
<div class="form-group">
    <input type="password" class="form-control" id="conf_password" placeholder="Confirm password" name="cp" autocomplete="off">
    <div class="text-center">
    <span class="text-danger" id="errorcp">
    </span>
    </div>
  </div>
  <div class="text-center">
  <a id="reset_confirm" class="btn btn-primary text-white">Reset</a>
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