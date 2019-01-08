<?php 
include('../includes/nav.php');
require('../controller/DatabaseController.php');
require('../function/sanitize.php');
if(isset($_SESSION['user'])){
if(isset($_GET['show'])){
if($_GET['show']!=null){
$user=sanitize($_GET['show']);
$sql = "SELECT * from user where id='$user'";
$qry= mysqli_query($Connect,$sql);
$res = mysqli_fetch_assoc($qry);
if($res['id']==$user){
?>
<div class="row">
<div class="col-md-8 offset-md-2 pt-2 pb-2">
<div class="card">
<div class="card-body">
<span>
<?php echo $res['username']; ?>
</span>
</div>
</div>
</div>
</div>
<?php }else{
header('location:../index.php');
}} else{
header('location:../index.php');
}
}
}
include("../includes/footer.php");
?>