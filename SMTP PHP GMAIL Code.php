<?php 
session_start();
//add use in starting of the code
use PHPMailer\PHPMailer\PHPMailer;

if(isset($_POST['forgot_btn'])) {
require '../PHPMailer/vendor/autoload.php';

$mail = new PHPMailer(TRUE);

try {
   
   $mail->setFrom('rocketvishal48@gmail.com', 'PSG Indutech');
   $mail->addAddress('visukvs1234@gmail.com', 'Vishal');
   $mail->Subject = 'Password';
   $mail->Body = 'Please Check Your Password.';
   $mail->isSMTP();
   $mail->Host = 'smtp.gmail.com';
   $mail->SMTPAuth = TRUE;
   $mail->SMTPSecure = 'tls';
   $mail->Username = 'rocketvishal48@gmail.com';
   $mail->Password = 'Password';
   $mail->Port = 587;
   
   if($mail->send())
   {
	  echo "<script>alert('Password Sent Successfully');</script>"; 
   }
   else
   {
	 echo "<script>alert('Password Not Sent Successfully');</script>";   
   }
}
}
?>