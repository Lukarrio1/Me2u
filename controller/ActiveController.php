
<?php 
require('../controller/DatabaseController.php');
session_start();
$user="user".$_SESSION['user']['id'];
$contact_sql ="SELECT * from $user";
$contact_qry =mysqli_query($Connect,$contact_sql);
$result = mysqli_fetch_all($contact_qry,MYSQLI_ASSOC);
foreach($result as $row):
$email= $row['email'];
$user_slq="SELECT * from user where email='$email'";
$user_qry =mysqli_query($Connect,$user_slq);
$friend=mysqli_fetch_assoc($user_qry); 
$active=1;
if($friend['active']==$active){
 echo json_encode($friend);
}
endforeach;