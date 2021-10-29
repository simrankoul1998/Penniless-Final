<?php 
$name=$_POST['name'];
$email=$_POST['email'];
$sub=$_POST['subject'];
$com=$_POST['comments'];
require 'PHPMailer/PHPMailerAutoload.php';

$sum=0;


$mail = new phpmailer();
$mail->IsSMTP();
$mail->Mailer = 'smtp';
$mail->SMTPAuth = true;
$mail->Host = "smtp.gmail.com"; 
$mail->Port = 465;
$mail->SMTPSecure = 'ssl';

$mail->IsHTML(true);
$mail->Username = "pennyless2020@gmail.com";
$mail->Password = "pennyless@123";

 // if you are going to send HTML formatted emails
$mail->SingleTo = true; // if you want to send a same email to multiple users. multiple emails will be sent one-by-one.

$mail->From = "pennyless2020@gmail.com";
$mail->FromName = "Pennyless";


    
$mail->addAddress($email);

$mail->Subject = $sub;
$mail->Body = $name . $com;


$mail->Send(); 

$mail->ClearAllRecipients();
?>