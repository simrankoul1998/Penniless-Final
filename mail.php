<?php
//date_default_timezone_set("Asia/Calcutta");
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
$mail->Username = "simrankoul7@gmail.com";
$mail->Password = "sheensimr210392";

 // if you are going to send HTML formatted emails
$mail->SingleTo = true; // if you want to send a same email to multiple users. multiple emails will be sent one-by-one.

$mail->From = "simrankoul7@gmail.com";
$mail->FromName = "Simran";


    
$mail->addAddress("ayush.suri@somaiya.edu");

$mail->Subject = "fgcjhfgjkgfkg";
$mail->Body = "ugjfcjhfcjfj";


$mail->Send(); 

$mail->ClearAllRecipients();
?>