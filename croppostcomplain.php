<?php

session_start();
$u_name=$_SESSION['u_name'];
$pass=$_SESSION['pass'];
$con=mysqli_connect('localhost:3307','root');
mysqli_select_db($con,'portal');
$q="select * from cropdealer where email_id='$u_name' && password='$pass'";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
$results=mysqli_fetch_assoc($result);
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

  
    <title>Farmer's Portal</title>
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
    
    <style>

      *{
      margin: 0;
      padding: 0;
      font-family: 'Josefin Sans', sans-serif;
    }

.preview
{
    padding: 10px;
    position: relative;
}

.preview i
{
    color: white;
    font-size: 35px;
    transform: translate(50px,130px);
}

.preview-img
{
    border-radius: 100%;
    box-shadow: 0px 0px 5px 2px rgba(0,0,0,0.7);
}

.browse-button
{
    width: 200px;
    height: 200px;
    border-radius: 100%;
    position: absolute; /* Tweak the position property if the element seems to be unfit */
    top: 10px;
    left: 132px;
    background: linear-gradient(180deg, transparent, black);
    opacity: 0;
    transition: 0.3s ease;
}

.browse-button:hover
{
    opacity: 1;
}

.browse-input
{
    width: 200px;
    height: 200px;
    border-radius: 100%;
    transform: translate(-1px,-26px);
    opacity: 0;
}

.form-group
{
    width:  250px;
    margin: 10px auto;
}

.form-group input
{
    transition: 0.3s linear;
}

.form-group input:focus
{
    border: 1px solid crimson;
    box-shadow: 0 0 0 0;
}

.Error
{
    color: crimson;
    font-size: 13px;
}

    </style>
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
  <div class="col-sm" align="center"><a class="navbar-brand text-white" href="croppostad.php" onclick="showform();">Post Advertise</a></div>
  <div class="col-sm" align="center"><a class="navbar-brand text-white" href="cropstatus.php">Payment Status</a></div>
  <div class="col-sm" align="center"><a class="navbar-brand text-white" href="croppostcomplain.php">Complain Section</a></div>
  <div class="col-sm" align="center">
    <form action='php/logout.php' method='post'>
        <button type='submit'  name='submit' class='btn btn-dark'>Logout</button>
        </form>
  </div>
  </div>
</nav>
<div class="container">
<center>
<h3 class="mx-auto mt-3">Post Your Complains Here</h3>
<br>
<form action="cropcomplain.php" method="post" enctype="multipart/form-data">
            <div class="preview text-center">
                <img class="preview-img" src="https://cdn1.iconfinder.com/data/icons/garden-tools-glyph/128/yumminky-garden-tool-63-512.png" alt="Preview Image" width="150" height="150"/>
                 
                <span class="Error"></span>
            </div>
            <div class="form-group">
                <input class="form-control" type="text" name="dealerid" required value="<?php echo $results['id']; ?>"/>
                <span class="Error"></span>
            </div>
            <div class="form-group">
                <input class="form-control" type="text" name="pname" required value="<?php echo $results['u_name']; ?>" />
                <span class="Error"></span>
            </div>
            <div class="form-group">
                <textarea class="form-control"  name="comp" rows="5" cols="5" required placeholder="Enter your complain here"></textarea>
                <span class="Error"></span>
            </div>
            <div class="form-group">
                <input class="btn btn-success btn-block" type="submit" name="submit" value="Submit"/>
            </div>
        </form>

</center>
</div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>

