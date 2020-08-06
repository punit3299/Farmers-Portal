<?php


$who=$_POST['state'];
$fp_email=$_POST['fp_email'];

      require 'phpmailer/PHPMailerAutoload.php';
      require 'credential.php';
      $mail = new PHPMailer;
      //$mail->SMTPDebug = 4;                               // Enable verbose debug output
      $mail->isSMTP();                                      // Set mailer to use SMTP
      $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
      $mail->SMTPAuth = true;                               // Enable SMTP authentication
      $mail->Username = EMAIL;                 // SMTP username
      $mail->Password = PASS;                           // SMTP password
      $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
      $mail->Port = 587;                                    // TCP port to connect to
      $mail->setFrom(EMAIL, 'Farmers Portal');
      $mail->addAddress($_POST['fp_email']);     // Add a recipient
      $mail->addReplyTo(EMAIL);
      
      $mail->isHTML(true);                                  // Set email format to HTML
      $mail->Subject = 'Password Reset Link';
      $mail->Body    = "<center><h3>Reset Your Password</h3><b>'.$who.'<br>
      <form action='resetpassword.php'>
      <input type='hidden' name='state' value='$who'>
      <input type='hidden' name='fp_email' value='$fp_email'>
      <button type='submit' name='submit' id='submit' class='btn btn-success'>Verify your Email</button>
      </form>
      </b></center>";
      //$mail->AltBody = $_POST['message'];
      if(!$mail->send()) {
          echo "<script>alert('Not sent')</script>";
      } else {
          echo "<script>alert('sent')</script>";
      }


?>