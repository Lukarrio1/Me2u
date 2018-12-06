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
<?php $user="user".$_SESSION['user']['id'];
$contact_sql ="SELECT * from $user";
$contact_qry =mysqli_query($Connect,$contact_sql);
$result = mysqli_fetch_all($contact_qry,MYSQLI_ASSOC);
foreach($result as $row):
$email= $row['email'];
$user_slq="SELECT * from user where email='$email'";
$user_qry =mysqli_query($Connect,$user_slq);
$friend=mysqli_fetch_assoc($user_qry); 
$active=1;
?>
<?php if($friend['active']==$active){?>
<div class="h5">
<?php echo $friend['username']?>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<i class="fa fa-star" aria-hidden="true"></i>
</div>
<?php }?>
</div>


</div>
<?php  endforeach;}else{
 header('location:./user/login.php');
} include('includes/footer.php');?>