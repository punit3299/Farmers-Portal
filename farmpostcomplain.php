<?php
session_start();

if(isset($_POST['submit']))
{ 

$cid=$_POST['n1'];
$fid=$_POST['n2'];
$type=$_POST['n3'];
$comp=$_POST['n4'];



$con = new mysqli("localhost:3307","root","","portal");
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
$sql = "INSERT INTO farmercomplain VALUES ('$cid', '$fid', '$type','$comp')";


if(mysqli_query($con,$sql)) 
{
//echo "<img src=".$filepath." height=200 width=300 />";
  echo "<script>
alert('Complain Posted Successfully');
window.location.href='http://localhost/capstone/complain.php';
</script>";
} 
else 
{
echo "Error !!";
}
}

?>
