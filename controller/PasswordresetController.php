<?php
require('../controller/DatabaseController.php');
require('../function/sanitize.php');
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require '../vendor/autoload.php';

// if(isset( $_POST['PasswordReset'])){
// $username = sanitize($_POST['user']);
// $email =sanitize($_POST['email']);
// if(strlen($username)<3){
// exit("too_short");
// }else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
// exit("not_valid");
// }else{
// $sql="SELECT * FROM user where email='$email' and username='$username'";
// $qry= mysqli_query($Connect,$sql);
// $result = mysqli_fetch_all($qry,MYSQLI_ASSOC);
// if(count($result)>1){
// $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 1;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'ennis4427@gmail.com';                 // SMTP username
    $mail->Password = 'lukarrio';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('ME2U', 'Mailer');
    $mail->addAddress("tomennis1997@gmail.com", "jason");     // Add a recipient

    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');        
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Reset Key';
    $mail->Body    = 'Copy the key:</b>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}
// }
// }
// }