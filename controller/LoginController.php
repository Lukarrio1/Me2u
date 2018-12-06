<?php 
require('../controller/DatabaseController.php');
require('../function/sanitize.php');
if(isset($_POST['login'])){
    $email = sanitize($_POST['email']);
    $password = sha1(sanitize($_POST['password']));
  if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
   exit("invalid");
  }else{
      $login_sql = "SELECT * FROM user WHERE email='$email' AND password='$password'";
      $login_qry = mysqli_query($Connect ,$login_sql);
      $login = mysqli_fetch_assoc($login_qry);
      if(mysqli_num_rows($login_qry)<1){
      exit("null");
      }else{
    session_start();
    $_SESSION['user']=$login;
    $active = 1;
    $id = $_SESSION['user']['id'];
    $active_sql="UPDATE user set active='$active' WHERE id='$id'";
    $active_qry=mysqli_query($Connect,$active_sql);
    exit('success');
      }
  }
}

