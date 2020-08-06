<?php


//raj.punit3299@gmail.com
//password - abc
session_start();
$uname=$_POST['uname'];
$psw=$_POST['psw'];
$psw_hash=md5($psw);
//echo $uname;
$con=mysqli_connect('localhost:3307','root');
mysqli_select_db($con,'portal');
$q="select * from admin where u_name='$uname' && password='$psw_hash'";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
if($num==1){
  $_SESSION['u_name']=$uname;
  header('location:http://localhost/capstone/admincheckfarmer.php');   //Login successfull
}
else{
  header('location:http://localhost/capstone/adminlogin.html');   //Login failed
}

?>
