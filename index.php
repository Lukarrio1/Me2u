<?php include('includes/nav.php');
require('./controller/DatabaseController.php');
if(isset($_SESSION['user'])){?>
<div class="row">
<div class="col-9">
<div class="text-center h3 text-primary">
Chats
</div>
</div>
<div class="col-3">
<div class="text-center h3 text-primary">
Active
</div>
<div class="h5" id="active-user">
</div>
</div>
</div>
<?php }else{
 header('location:./user/login.php');
} include('includes/footer.php');?>