<?php
require('../controller/DatabaseController.php');
require('../function/sanitize.php');
require '../vendor/autoload.php';
use PHPMailer\PHPMailer\PHPMailer;
if(isset( $_POST['PasswordReset'])){
$username = sanitize(strtolower($_POST['user']));
$email =sanitize($_POST['email']);
if(strlen($username)<3){
exit("too_short");
}else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
exit("not_valid");
}else{
$sql="SELECT * FROM user where email='$email' AND username='$username'";
$qry= mysqli_query($Connect,$sql);
$result = mysqli_fetch_assoc($qry);
    $mail = new PHPMailer();
    $mail->isSMTP();
    $mail->Host = "smtp.gmail.com";
    $mail->SMTPSecure = "ssl";
    $mail->Port = 465;
    $mail->SMTPAuth = true;
    $mail->Username = 'tomennis1997@gmail.com';
    $mail->Password = 'Terrybinns1';
    $mail->setFrom('admin@ME2U.com', 'Password Reset');
    $mail->addAddress($result['email']);
    $mail->Subject = 'Reset key';
    $mail->Body = 'Copy and paste '.$result['_key'];
    if ($mail->send()){
        exit("Mail_sent"); 
    }else{
        exit("Mail_failed");
} 
}
}

if(isset($_POST['_key'])){
    $key =sanitize($_POST['code_key']);
    $newpasword =sanitize($_POST['New_password']);
    $confpassword= sanitize($_POST['conf_password']);
    $key_sql="SELECT * FROM user where _key='$key'";
    $key_qry= mysqli_query($Connect,$key_sql);
    $key_result = mysqli_fetch_assoc($key_qry);
    if($key_result['_key']==$key){
        if(strlen($newpasword)>3){
        if($newpasword == $confpassword ){
            $encryp_password =sha1($newpasword);
            $update_sql ="UPDATE user set password='$encryp_password' WHERE _key='$key'";  
            if(mysqli_query($Connect,$update_sql)){
                exit("password_reset");
            }     
        }else{
            exit("dont_match");
        }
     }else{
    exit('too_short');
     }
        
    }else{
        exit("invaild_key");
    }
}
