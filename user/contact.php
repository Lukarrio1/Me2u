<?php include('../includes/nav.php');
require('../controller/DatabaseController.php');
if(isset($_SESSION['user'])){
    $user="user".$_SESSION['user']['id'];
    $contact_sql ="SELECT * from $user";
    $contact_qry =mysqli_query($Connect,$contact_sql);
    $result = mysqli_fetch_all($contact_qry,MYSQLI_ASSOC);
    foreach($result as $row):
    $email= $row['email'];
    $user_slq="SELECT * from user where email='$email'";
    $user_qry =mysqli_query($Connect,$user_slq);
    $friend=mysqli_fetch_assoc($user_qry);   
?>
<div class="col-md-8 offset-md-2 pt-2 pb-1">
<div class="card">
<div class="card-body text-center">
<!-- <img src="../user/profile_img/<?php echo $friend['img']?>" alt=""><br> -->
<span class="h5"><?php echo $friend['username']?></span> &nbsp;
<span class="h5"><?php echo $friend['email']?></span>
</div>
</div>
</div>
<?php  endforeach;} else{
    header('location:../user/login.php');
} include('../includes/footer.php');