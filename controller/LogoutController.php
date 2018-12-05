<?php 
require('../controller/DatabaseController.php');
session_start();
$active=0;
$id = $_SESSION['user']['id'];
$active_sql="UPDATE user set active='$active' WHERE id='$id'";
$active_qry=mysqli_query($Connect,$active_sql);
unset($_SESSION['user']);
header('location:../user/login.php');