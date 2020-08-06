<?php
session_start();

if(isset($_POST['submit']))
{ 

$id=$_POST['dealerid'];
$pname=$_POST['pname'];
$quant=$_POST['quant'];

$filepath = "fertbuy/" . $_FILES["file"]["name"];

$con = new mysqli("localhost:3307","root","","portal");
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
$sql = "INSERT INTO cropbuy VALUES ('','$id', '$pname', '$quant','$filepath','NO')";
mysqli_query($con,$sql);

if((move_uploaded_file($_FILES["file"]["tmp_name"], $filepath))) 
{

  echo "<script>
alert('Advertisement Posted Successfully');
window.location.href='http://localhost/capstone/croppostad.php';
</script>";
} 
else 
{
echo "Error !!";
}
}

?>
