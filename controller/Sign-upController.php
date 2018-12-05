<?php
include('../controller/DatabaseController.php');
include('../function/sanitize.php');
session_start();
if(isset($_POST['sign_up'])){
$errorname= 1;
$erroremail=1;
$checkemail =1;
$errorpassword =1;
$user = sanitize($_POST['user']);
$email = sanitize($_POST['email']);
$retype_password =sanitize($_POST['retype_password']);
$password =sanitize($_POST['password']);
$_key =sha1($user.$password);
$check_sql ="SELECT * FROM user WHERE email='$email'";
$check_qry= mysqli_query($Connect,$check_sql);
$check = mysqli_fetch_assoc($check_qry);
if(strlen($user)<3){
$errorname = 0;
exit("user_name_short");
}else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
$erroremail=0;
exit("not_email");
}else if($password != $retype_password || empty($password) || empty($retype_password) ||strlen($password)<5){
$errorpassword=0;
exit("password_does_not_match");
}else if($email == $check['email'] ){
$checkemail=0;
exit("already_exist");
}
if($errorname==1 && $erroremail==1 && $checkemail==1 && $errorpassword==1){
$encryp_password = sha1($password);
$signup_sql = "INSERT user(email,username,password,_key) VALUES('$email','$user','$encryp_password ','$_key')";
$signup_qry= mysqli_query($Connect,$signup_sql);
$login_sql = "SELECT * FROM user WHERE email='$email'";
$login_qry = mysqli_query($Connect,$login_sql);
$login = mysqli_fetch_assoc($login_qry);
$_SESSION['user']= $login;
$user= "user".$_SESSION['user']['id'];
$table_sql = "CREATE TABLE $user(
userid int(20),
ID int NOT NULL AUTO_INCREMENT,
PRIMARY KEY (ID)
)";
$table_qry = mysqli_query($Connect,$table_sql);
$active=1;
$id = $_SESSION['user']['id'];
$active_sql="UPDATE user set active='$active' WHERE id='$id'";
$active_qry=mysqli_query($Connect,$active_sql);
exit("success");
}
}

