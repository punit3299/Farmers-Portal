<?php

$conn = new mysqli("localhost","root","","portal");
$num=$_GET['ph'];
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$query= "DELETE FROM help WHERE phone='$num'";
$data = mysqli_query($conn,$query);

if($data)
{
?>

<script>alert("Record deleted successfully");</script>
<META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/capstone/helptable.php">

<?php
}

else
echo "Error Occurred";
?>