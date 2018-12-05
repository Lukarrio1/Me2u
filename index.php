<?php include('includes/nav.php');
if(isset($_SESSION['user'])){?>
<div class="row">

</div>
<?php }else{
 header('location:./user/login.php');
} include('includes/footer.php');?>