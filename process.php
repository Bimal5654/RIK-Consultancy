<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

   
   if(isset($_POST['send']))
   {
   	 $UName = $_POST['UName'];
   	 $email = $_POST['email'];
   	 $mobileNumber = $_POST['mobileNumber'];
   	 $msg = $_POST['msg'];

   	 require 'PHPMailer/Exception.php';
       require 'PHPMailer/PHPMailer.php';
       require 'PHPMailer/SMTP.php';

//Create an instance; passing `true` enables exceptions
      $mail = new PHPMailer(true);

     try {
    //Server settings
                             //Enable verbose debug output
         $mail->isSMTP();                                            //Send using SMTP
         $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
         $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
         $mail->Username   = 'bimal.rikcapital@gmail.com';                     //SMTP username
         $mail->Password   = 'zfbs uemx jckn kgbg';                               //SMTP password
         $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
         $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
         $mail->setFrom('bimal.rikcapital@gmail.com', 'Mailer');
         $mail->addAddress('singhbimal654@gmail.com', 'Clients');     //Add a recipient
    
    
        //Content
         $mail->isHTML(true);                                  //Set email format to HTML
         $mail->Subject = 'Contact Form';
         $mail->Body    = "Sender Name - $UName <br> Sender Email - $email <br> mobileNumber - $mobileNumber <br> message - $msg";
    

         $mail->send();
            echo 'Message has been sent';
      } catch (Exception $e) {
          echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
      }

}
?>