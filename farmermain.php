<?php

session_start();
$uname=$_POST['uname'];
$psw=$_POST['psw'];
$psw_hash=md5($psw);
//echo $uname;
$_SESSION['uname']=$uname;
$_SESSION['psw']=$psw;
$con=mysqli_connect('localhost:3307','root');
mysqli_select_db($con,'portal');
$q="select * from farmer where email_id='$uname' && password='$psw_hash'";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
$results=mysqli_fetch_assoc($result);
if($num==1){
  $_SESSION['u_name']=$uname;
  $_SESSION['pass']=$psw_hash;
  //header('location:http://localhost/capstone/fertdealerverify.php');   //Login successfull
}
else{
  header('location:http://localhost/capstone/farmerlogin.html');   //Login failed
}


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


<div class="container">


<div class="row" style="height: auto;">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="width:100%;">
  <button class="navbar-toggler mx-auto" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
      aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon text-white"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
  <!-- Navbar content -->
  <div class="col-sm" align="center"><a class="navbar-brand" href="sellcrops.php">Sell Your Crops</a></div>
  <div class="col-sm" align="center"><a class="navbar-brand" href="fertstatus.php">Buy Seeds</a></div>
  <div class="col-sm" align="center"><a class="navbar-brand" href="fertbuy.php">Buy Fertilizers/Pesticides</a></div>
  <div class="col-sm" align="center"><a class="navbar-brand" href="farmerspostcomplain.php">Complain Section</a></div>
  <div class="col-sm" align="center">
    <form action='php/logout.php' method='post'>
        <button type='submit'  name='submit' class='btn btn-dark'>Logout</button>
        </form>
  </div>
  </div>
</nav>
</div>
        </div>

<br>

<div class="row">
  <div class="col-sm"><center><h2>Welcome <?php echo $results['u_name']; ?> </h2></center></div>
</div>

<center>

<img src="images/fert.jpg" id="i" width="150x" height="150x">

</center>
</div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>

