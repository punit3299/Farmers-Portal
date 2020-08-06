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

.divider-text {
    position: relative;
    text-align: center;
    margin-top: 15px;
    margin-bottom: 15px;
}
.divider-text span {
    padding: 7px;
    font-size: 12px;
    position: relative;   
    z-index: 2;
}
.divider-text:after {
    content: "";
    position: absolute;
    width: 100%;
    border-bottom: 1px solid #ddd;
    top: 55%;
    left: 0;
    z-index: 1;
}

  </style>

    <title>Farmer's Portal</title>
  </head>

  <body background="back.jpg">
    <div class="container">
      <div class="row" style="outline: 1px solid black ;height: 100px;">
        <div class="col-lg-3" align="left">
          <img src="images/Logo.png" height="90px" >
        </div>
        <div class="col-lg-6" align="center">
          <h3 style="font-family: Jokerman;">Farmer's Portal</h3>
            <p class="lead" style="font-family: Jokerman;">One Stop Shop for Farmers !</p>
        </div>
        <div class="col-lg-3" align="right">
          <div id="google_translate_element"></div>
  <script type="text/javascript">
    function googleTranslateElementInit(){
      new google.translate.TranslateElement({pageLanguageL: 'en'}, 'google_translate_element');
    }
  </script>
  <script src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

      </div>
    </div>
</div>

<div class="container">
    <div class="row" style="outline: 1px solid black ;height: auto;">
        <nav class="navbar navbar-dark bg-dark" style="width: 100%">
  <!-- Navbar content -->
  <div class="col-lg-2" align="center"><a class="navbar-brand" href="home.html">Home</a></div>
  <div class="col-lg-2" align="center"><a class="navbar-brand" href="aboutus.html">About Us</a></div>
  <div class="col-lg-2" align="center">
    <div class="dropdown">
    <a class="navbar-brand" href="#">Major Crops</a>
    <div class="dropdown-content">
    <a href="wheat.html">Wheat</a>
    <a href="maize.html">Maize</a>
    <a href="rice.html">Rice</a>
    <a href="pulse.html">Pulse</a>
  </div>
  </div>
</div>
  <div class="col-lg-2" align="center"><a class="navbar-brand" href="training.html">Training</a></div>
  <div class="col-lg-2" align="center"><a class="navbar-brand" href="contactus.php">Contact Us</a></div>
</nav>
      </div>
     </div>

<section class="testimonial py-5" id="testimonial">
    <div class="container">
        <div class="row ">
            <div class="col-md-4 py-5 bg-primary text-white text-center ">
                <div class=" ">
                    <div class="card-body">
                        <img src="http://www.ansonika.com/mavia/img/registration_bg.svg" style="width:30%">
                        <h2 class="py-3">Registration</h2>
                    </div>
                </div>
            </div>
            <div class="col-md-8 py-5 border">
                <h4 class="pb-4">Please fill with your details</h4>
        
         
                <form action="php\insertData.php" method="POST">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                          <input id="Full Name" name="fullname" id="fullname" placeholder="Full Name" class="form-control" type="text" required>
                        </div>
                        <div class="form-group col-md-6">
                                  
                                  <select id="state" name="state" class="form-control">
                                    <option selected>I am a...</option>
                                    <option> Farmer</option>
                                    <option> Crop Dealer</option>
                                    <option> Seed Dealer</option>
                                    <option> Fertilizer/Pesticide Dealer</option>
                                  </select>
                        </div>
                        
                      </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <input id="Mobile No." name="MobileNo" placeholder="Mobile No." class="form-control" required="required" type="text" required>
                        </div>
                        
                        <div class="form-group col-md-6">
                          <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <input id="pass" name="pass" placeholder="Enter your password" class="form-control" required="required" type="password" required>
                        </div>
                        
                        <div class="form-group col-md-6">
                          <input type="password" class="form-control" name="cpass" id="cpass" placeholder="Confirm your password" required="required" required>
                        </div>
                    </div>
                    
                    
                    <div class="form-row">
                        <button type="submit" name="submit" id="submit" class="btn btn-default">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    
  </body>
</html>