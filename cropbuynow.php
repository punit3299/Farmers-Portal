<?php

$id=$_POST['fid'];
$pname=$_POST['prod'];

$con = new mysqli("localhost:3307","root","","portal");
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

$query= "UPDATE cropbuy SET status = 'YES' where id = '$id' && pname='$pname' ";
$result=mysqli_query($con,$query);
if($result)
{
	echo "<script>
alert('Status Updated Successfully');
window.location.href='http://localhost/capstone/cropbuy.php';
</script>";
}

?>