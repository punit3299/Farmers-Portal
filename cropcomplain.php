<?php
session_start();

if(isset($_POST['submit']))
{ 

$id=$_POST['dealerid'];
$pname=$_POST['pname'];
$comp=$_POST['comp'];


$con = new mysqli("localhost:3307","root","","portal");
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
$sql = "INSERT INTO cropcomplain VALUES ('$id', '$pname', '$comp','NO')";


if(mysqli_query($con,$sql)) 
{
//echo "<img src=".$filepath." height=200 width=300 />";
  echo "<script>
alert('Complain Posted Successfully');
window.location.href='http://localhost/capstone/croppostcomplain.php';
</script>";
} 
else 
{
echo "Error !!";
}
}

?>
