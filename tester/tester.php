<?php 
require('../controller/DatabaseController.php');
require '../vendor/autoload.php';
use PHPMailer\PHPMailer\PHPMailer;
session_start();
// $user= $_SESSION['user']['username'].$_SESSION['user']['id'];
// $table_sql = "CREATE TABLE $user(
//     userid int(20),
//     ID int NOT NULL AUTO_INCREMENT,
//     PRIMARY KEY (ID)
// )";
// $table_qry = mysqli_query($Connect,$table_sql);
// $mail = new PHPMailer();
// $mail->isSMTP();
// $mail->Host = "smtp.gmail.com";
// $mail->SMTPSecure = "ssl";
// $mail->Port = 465;
// $mail->SMTPAuth = true;
// $mail->Username = 'tomennis1997@gmail.com';
// $mail->Password = 'Terrybinns1';
// $mail->setFrom('admin@ME2U.com', 'Password Reset');
// $mail->addAddress('tomennis1997@gmail.com');
// $mail->Subject = 'Reset key';
// $mail->Body = 'Copy and paste ';
// if ($mail->send()){
//     exit("Mail sent"); 
// }else{
//     exit($mail->ErrorInfo);
// }
$user="user".$_SESSION['user']['id'];
// echo $user;
$contact_sql ="SELECT * from $user";
$contact_qry =mysqli_query($Connect,$contact_sql);
$result = mysqli_fetch_all($contact_qry,MYSQLI_ASSOC);
// print_r($result);
foreach($result as $row):
$email= $row['email'];
$user_slq="SELECT * from user where email='$email'";
$user_qry =mysqli_query($Connect,$user_slq);
$friend=mysqli_fetch_assoc($user_qry);
print_r($friend);
endforeach;


