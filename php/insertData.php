<?php

 $number=$_POST['MobileNo'];

$url="www.way2sms.com/api/v1/sendCampaign";
$message = 'Welcome to Farmers Portal Name :'.$_POST['fullname'].'Username : '.$_POST['email'].'Password : '.$_POST['pass'];// urlencode your message
$curl = curl_init();
curl_setopt($curl, CURLOPT_POST, 1);// set post data to true
curl_setopt($curl, CURLOPT_POSTFIELDS, "apikey=G5TE9D7YZREHVUQ5JVGU0FG8WSYS2DON&secret=ORW0L8PYCE8QURJV&usetype=stage&phone=$number&senderid=raj.punit3299@gmail.com&message=$message");// post data
// query parameter values must be given without squarebrackets.
 // Optional Authentication:
curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
$result = curl_exec($curl);
curl_close($curl);
echo $result;




      $name=$_POST['fullname'];
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
      $mail->addAddress($_POST['email']);     // Add a recipient
      $mail->addReplyTo(EMAIL);
      
      $mail->isHTML(true);                                  // Set email format to HTML
      $mail->Subject = 'Sign Up';
      $mail->Body    = '<center><h3>Welcome to Farmers Portal</h3><b>'.$_POST['state'].'</b></center><br>Name :'.$_POST['fullname'].'<br> Username : '.$_POST['email'].'<br>Password : '.$_POST['pass'];
      //$mail->AltBody = $_POST['message'];
      if(!$mail->send()) {
          echo "<script>alert('Not sent')</script>";
      } else {
          echo "<script>alert('sent')</script>";
      }
    

session_start();
$fullname=$_POST['fullname'];
$who=$_POST['state'];
$mob_no=$_POST['MobileNo'];
$email=$_POST['email'];
$pass=$_POST['pass'];
$pass_hash=md5($pass);
$cpass=$_POST['cpass'];
 
// if pass and cpass mismatch
if($pass != $cpass){
	
	header('location:http://localhost/capstone/php/test.html');	
}

$con=mysqli_connect('localhost:3307','root');
mysqli_select_db($con,'portal');

//if farmer
if($who=="Farmer"){
	$q="insert into farmer (u_name,mob_no,email_id,password) values ('$fullname',$mob_no,'$email','$pass_hash')";
	$status=mysqli_query($con,$q);
	// if successful account created then divert to Farmer login  page
	
	if($status==1){
		header('location:http://localhost/capstone/farmerlogin.html');
	}
	// else divert to same page
	else{
		header('location:http://localhost/capstone/signup.html');
	}
	
}


// if crop dealer

 else if($who=="Crop Dealer"){
 $q="insert into cropdealer (u_name,mob_no,email_id,password) values ('$fullname',$mob_no,'$email','$pass_hash')";
 $status=mysqli_query($con,$q);
 // if successful account created then divert to Farmer login  page
 
 if($status==1){
		header('location:http://localhost/capstone/cropdealerlogin.html');
	}
// else divert to same page
 else{
		header('location:http://localhost/capstone/signup.php');
	}	

}


// if seeddealer

else if($who=="Seed Dealer"){
 $q="insert into seeddealer (u_name,mob_no,email_id,password) values ('$fullname',$mob_no,'$email','$pass_hash')";
 $status=mysqli_query($con,$q);
 // if successful account created then divert to Farmer login  page
 
 if($status==1){
		header('location:http://localhost/capstone/seedlogin.html');
	}
// else divert to same page
 else{
		header('location:http://localhost/capstone/signup.php');
	}	

}


// if fertdeale

else if($who=="Fertilizer/Pesticide Dealer"){
 $q="insert into fertdealer (u_name,mob_no,email_id,password) values ('$fullname',$mob_no,'$email','$pass_hash')";
 $status=mysqli_query($con,$q);
 // if successful account created then divert to Farmer login  page
 
 if($status==1){
		header('location:http://localhost/capstone/fertlogin.html');
	}
// else divert to same page
 else{
		header('location:http://localhost/capstone/signup.php');
	}	

}


mysqli_close($con);
?>


