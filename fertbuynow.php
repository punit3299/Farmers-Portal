<?php

session_start();
$id=$_POST['fid'];
$pname=$_POST['prod'];

$con = new mysqli("localhost","root","","portal");
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

$query= "UPDATE fertbuy SET status = 'YES' where id = '$id' && pname='$pname' ";
$result=mysqli_query($con,$query);
if($result)
{
	header('location:https://imjo.in/VBExYX');
}

?>