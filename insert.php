<?php

if(isset($_POST['submit'])){
    $number=$_POST['number'];

$url="www.way2sms.com/api/v1/sendCampaign";
$message = 'Thanks for your valuable feedback.';// urlencode your message
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

}


$name=$_POST['name'];
$phone=$_POST['number'];
$mssg=$_POST['mssg'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "portal";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO help (name, phone, description)
VALUES ('$name', '$phone', '$mssg')";

if ($conn->query($sql) == TRUE) {
    
    ?>
<script>alert("New Tip Added successfully");</script>
<META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/capstone/helpus.php">

<?php

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
