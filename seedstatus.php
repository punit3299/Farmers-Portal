<?php

session_start();
$uname=$_SESSION['uname'];
$psw=$_SESSION['psw'];
$psw_hash=md5($psw);
$conn = new mysqli("localhost:3307","root","","portal");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$q="select * from seeddealer where email_id='$uname' && password='$psw_hash'";
$r=mysqli_query($conn,$q);
$r1=mysqli_fetch_assoc($r);

$id=$r1['id'];
$q1="select * from seedbuy where id='$id'";
$r2=mysqli_query($conn,$q1);
$total=mysqli_num_rows($r2);


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
    <link rel="stylesheet" href="css/contact.css">
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
 

      </div>
    </div>
  </div>


  <nav class="navbar navbar-expand-lg navbar-light bg-dark mx-lg-5 mx-0 ">
    <button class="navbar-toggler mx-auto" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
      aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon text-white"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
  <!-- Navbar content -->
  <div class="col-sm" align="center"><a class="navbar-brand text-white" href="seedpostad.php" onclick="showform();">Post Advertise</a></div>
  <div class="col-sm" align="center"><a class="navbar-brand text-white" href="seedstatus.php">Payment Status</a></div>
  <div class="col-sm" align="center"><a class="navbar-brand text-white" href="seedpostcomplain.php">Complain Section</a></div>
  <div class="col-sm" align="center">
    <form action='php/logout.php' method='post'>
        <button type='submit'  name='submit' class='btn btn-dark'>Logout</button>
        </form>
  </div>
  </div>
</nav>
<div class="container">
    <center>
    <div class="row col-md-6 col-md-offset-2 custyle">
    	<h3 class="mt-4 mx-auto">Present Status of your Advertisements</h3>
    <table class="table table-striped custab mt-3">
    <thead>
        <tr>
            <th>Product</th>
            <th>Price</th>
            <th >Status</th>
        </tr>
    </thead>
    <?php

    while($r3=mysqli_fetch_assoc($r2))
    {
            echo "
            <tr>
                <td>".$r3['pname']."</td>
                <td>".$r3['price']."</td>
                <td>".$r3['status']."</td>
            </tr>";
    }
}
?>       
    </table>
    </div>
</div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>

