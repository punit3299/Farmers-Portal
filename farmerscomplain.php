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
$sql = "INSERT INTO farmercomplain VALUES ($id', '$pname', '$comp','NO')";

mysqli_query($con,$sql);
 
//echo "<img src=".$filepath." height=200 width=300 />";
  echo "<script>
alert('Advertisement Posted Successfully');
window.location.href='http://localhost/capstone/farmerpostcomplain.php';
</script>";

}

?>
