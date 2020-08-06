<?php

$conn = new mysqli("localhost:3307","root","","portal");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$query= "SELECT * FROM alert";
$data = mysqli_query($conn,$query);
$total=mysqli_num_rows($data);
  
//fetch table as arrays

if($total!=0)
{

    ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link rel="stylesheet" href="css/styles.css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
    
    <style>

      *{
      margin: 0;
      padding: 0;
      font-family: 'Josefin Sans', sans-serif;
    }
  </style>
    <title>Farmer's Portal</title>
  </head>
<style type="text/css">

table, th, td {
  border: 1px solid black;
}
</style>

  <body background="back.jpg">
  <div class="container">
    <div class="row py-2" style="outline: 1px solid black ;">
      <div class="col-lg-3 col-12 text-lg-left text-center">
        <img src="images/Logo.png" height="90px" class="">
      </div>
      <div class="col-lg-6 col-12 text-center">
        <h3 style="font-family: Jokerman;">Farmer's Portal</h3>
        <p class="lead" style="font-family: Jokerman;">One Stop Shop for Farmers !</p>
      </div>
      <div class="col-lg-3 col-12 text-lg-right text-center">

        <div id="google_translate_element"></div>
        <br>
        <script type="text/javascript">
          function googleTranslateElementInit() {
            new google.translate.TranslateElement({ pageLanguageL: 'en' }, 'google_translate_element');
          }
        </script>
        <script src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

        <a href="adminlogin.html" class="btn btn-dark">Admin Login</a>

      </div>
    </div>
  </div>

  <!-- navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-dark mx-lg-5 mx-0">
    <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
      aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon text-white"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav w-100">
        <li class="nav-item active mx-auto">
          <a class="navbar-brand text-white" href="home.html">Home</a>
        </li>
        <li class="nav-item mx-auto">
          <a class="navbar-brand text-white" href="aboutus.html">About Us</a>
        </li>

        <li class="nav-item dropdown mx-auto">
          <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdownMenuLink" role="button"
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Major Crops
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="wheat.html">Wheat</a>
            <a class="dropdown-item" href="maize.html">Maize</a>
            <a class="dropdown-item" href="rice.html">Rice</a>
            <a class="dropdown-item" href="pulse.html">Pulse</a>
          </div>
        </li>
        <li class="nav-item mx-auto">
          <a class="navbar-brand text-white" href="training.html">Training</a>
        </li>
        <li class="nav-item mx-auto">
          <a class="navbar-brand text-white" href="contactus.php">Contact Us</a>
        </li>
      </ul>
    </div>
  </nav>

<div class="container">
        <div class="col-sm" align="center" style="outline: 1px solid black ;height: auto;">
          <br>
		<h3>EXTREME WEATHER ALERTS</h3>
		<p style="font-size:15px;color:red;">Registered Farmers will receive SMSs only in case of SEVERE THUNDERSTORM, THUNDERSTORM WITH SQUALL AND THUNDERSTORM WITH HAIL </p>
		<center>
    <div class="row col-md-9 col-md-offset-2 custyle">
    <table class="table table-striped table-hover custab">
    <thead>
        <tr>
            <th>Name</th>
            <th>Phone</th>
            <th>Description</th>
        </tr>
    </thead>
    <?php

    while($result=mysqli_fetch_assoc($data))
    {
            echo "
            <tr>
                <td>".$result['name']."</td>
                <td>".$result['type']."</td>
                <td>".$result['mssg']."</td>
            </tr>";
    }
}
?>
</table>
</div>
</center>
</div>
</div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>