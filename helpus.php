
<!doctype html>
<html lang="en">
  <head>

    <title>Farmer's Portal</title>
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
    
      .table-sortable tbody tr {
    cursor: move;
    }

    form{
        margin: 20px 0;
    }
    form input, button{
        padding: 5px;
    }
    table{
        width: 100%;
        margin-bottom: 20px;
        border-collapse: collapse;
    }
    table, th, td{
        border: 1px solid #cdcdcd;
    }
    table th, table td{
        padding: 10px;
        text-align: left;
    }

    form_main {
    width: 100%;
}
.form_main h4 {
    font-family: roboto;
    font-size: 20px;
    font-weight: 300;
    margin-bottom: 15px;
    margin-top: 20px;
    text-transform: uppercase;
}
.heading {
    border-bottom: 1px solid #fcab0e;
    padding-bottom: 9px;
    position: relative;
}
.heading span {
    background: #9e6600 none repeat scroll 0 0;
    bottom: -2px;
    height: 3px;
    left: 0;
    position: absolute;
    width: 75px;
}   
.form {
    border-radius: 7px;
    padding: 6px;
}
.txt[type="text"] {
    border: 1px solid #ccc;
    margin: 10px 0;
    padding: 10px 0 10px 5px;
    width: 100%;
}
.txt_3[type="text"] {
    margin: 10px 0 0;
    padding: 10px 0 10px 5px;
    width: 100%;
}
.txt2[type="submit"] {
    background: #242424 none repeat scroll 0 0;
    border: 1px solid #4f5c04;
    border-radius: 25px;
    color: #fff;
    font-size: 16px;
    font-style: normal;
    line-height: 35px;
    margin: 10px 0;
    padding: 0;
    text-transform: uppercase;
    width: 30%;
}
.txt2:hover {
    background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
    color: #5793ef;
    transition: all 0.5s ease 0s;
}


    </style>

    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
   
    
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
      <div class="col-lg-3 col-12 text-lg-right text-center" >

        <div id="google_translate_element"></div>
        <br>
        <script type="text/javascript">
    function googleTranslateElementInit(){
      new google.translate.TranslateElement({pageLanguageL: 'en'}, 'google_translate_element');
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
    <div class="row justify-content-center">
    <div class="col-md-4">
        <div class="form_main">
                <h4 class="heading"><strong><center>Be a Helping Hand for Us</center></strong></h4>
                <div class="form">
                <form action="insert.php" method="post" id="contactFrm" name="contactFrm">
                    <input type="text" required="" placeholder="Please input your Name" name="name" class="txt" required>
                    <input type="text" required="" placeholder="Please input your mobile No" name="number" class="txt" required>
                    
                     <textarea placeholder="Provide your valuable tip" name="mssg" type="text" class="txt_3" required></textarea>
                     <center><input type="submit" value="submit" name="submit" class="txt2"></center>
                </form>
            </div>
            </div>
            </div
    </div>
</div>

<br>
<hr>
<br>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>