<?php include('../includes/nav.php');
if(isset($_SESSION['user'])){?>
<div class="col-md-8 offset-md-2 pt-4 pb-4">
<div class="card">
<div class="card-header text-center bg-white">
<span class="text-primary h3 ">
Search
</span>
</div>
<div class="card-body">
<input type="text" class="form-control" id="search"  placeholder="find a friend.....">
</div>
</div>
</div>
<?php }else{
    header('location:../user/login.php');
}
include("../includes/footer.php");
?>