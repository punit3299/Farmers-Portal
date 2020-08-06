<?php

session_start();
$uname=$_SESSION['uname'];
$psw=$_SESSION['psw'];
$psw_hash=md5($psw);
$conn = new mysqli("localhost:3307","root","","portal");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$q="select * from farmer where email_id='$uname' && password='$psw_hash'";
$r=mysqli_query($conn,$q);
$r1=mysqli_fetch_assoc($r);

$id=$r1['id'];
$q1="select * from farmercomplain where id='$id'";
$r2=mysqli_query($conn,$q1);
$total=mysqli_num_rows($r2);


if($total!=0)
{

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>COMPLAIN STATUS VIEW </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="navbar.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<style>
    h1{
        font-family: 'Times New Roman', Times, serif;
    }  
    #customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color:green;
  color: white;
}
body{
   background-image: url(statuspic.jpg);
   background-repeat:no-repeat;
   background-position: 990px 135px;
  
   margin-right: 200px;
   background-size: right;
   background-attachment: fixed;
}

</style>
<body>
                                         <h1><center>FARMER'S PORTALS</center></h1>
        <ul>
           <li><a class="active" href="home.html">Home</a></li>
           <li><a class="active" href="complain.php">Complain</a></li>
           <li><a class="active" href="complainstatus.php">View Complain Status</a></li>
          <li><a class="active" href="FARMINGTIPS.php">Farming Tips</a></li>
          <li><a href="cropbuy.php">Crop Advertisement Details</a></li>
          <li><a href="php/logout.php">Logout</a></li>
       </ul>
<hr>
        <table id="customers">
                <tr>
                  
                  <th>Complain ID </th>
                  <th>Farmer ID</th>
                  <th>Issue type</th>
                  <th>Complain</th>
                  <th>Status</th>
                </tr>
                <?php

    while($r3=mysqli_fetch_assoc($r2))
    {
            echo "
            <tr>
                <td>".$r3['compid']."</td>
                <td>".$r3['farmid']."</td>
                <td>".$r3['issuetype']."</td>
                <td>".$r3['complain']."</td>
                <td>No</td>
            </tr>";
    }
}
?>      
              </table>
    
              <td onclick="myFunction()">  </td>
              <p id="demo"></p>

              <script>
              function myFunction() {
              document.getElementById("demo").innerHTML = "full description how problem is solved";
              }
          
              
              </script>

</body>