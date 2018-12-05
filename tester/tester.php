<?php 
require('../controller/DatabaseController.php');
session_start();
$user= $_SESSION['user']['username'].$_SESSION['user']['id'];
$table_sql = "CREATE TABLE $user(
    userid int(20),
    ID int NOT NULL AUTO_INCREMENT,
    PRIMARY KEY (ID)
)";
$table_qry = mysqli_query($Connect,$table_sql);
