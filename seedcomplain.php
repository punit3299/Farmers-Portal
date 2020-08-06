
<?php
session_start();

if(isset($_POST['submit']))
{ 

$id=$_POST['dealerid'];
$pname=$_POST['pname'];
$comp=$_POST['comp'];


$conn = new mysqli("localhost:3307","root","","portal");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "INSERT INTO seedcomplain VALUES ('$id', '$pname', '$comp','NO')";


if(mysqli_query($conn,$sql)) 
{
  echo "<script>
alert('Complain Posted Successfully');
window.location.href='http://localhost/capstone/seedpostcomplain.php';
</script>";

} 
else 
{
echo "Error !!";
}
}

?>
