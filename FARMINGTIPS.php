<?php

session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" <content="width=device-width,intial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <link rel="stylesheet" href="navbar.css">
            <link rel="stylesheet" href="textarea.css">
            
<title>FARMING TIPS PAGE </title>
<body>
        <style>
                 body{
                   background-image: url(a7.jpg);
                  background-repeat:no-repeat;
                  background-position:center bottom;
                  margin-right: 200px;
                  background-size: 1366px 768px;
                   background-attachment: fixed;
}
          h1{
            color:black;
            margin-left: 220px;
          }    
             
                ul {
                  list-style-type: none;
                  margin: 0;
                  padding: 0;
                  overflow: hidden;
                  background-color:transparent;
                }
                
                li {
                  float: left;
                }
                
                li a {
                  display: block;
                  color:white;
                  text-align: center;
                  padding: 14px 16px;
                  text-decoration: none;
                }
                
                li a:hover {
                  background-color:black;
                }    
}
            

 


  
        
                </style>
                <script>
                    function validateForm() {
                      var x = document.forms["myForm"]["fname"].value;
                      if (x == "") {
                        alert("Name must be filled out");
                        return false;
                      }
                    }
                    </script>
                </head>
                <body>
                 <h1><center>FARMER'S PORTALS</center></h1>

                <ul>
                  <li><a class="active" href="farmermain.php">Home</a></li>
                  <li><a class="active" href="complain.php">Complain</a></li>
                  <li><a href="FARMINGTIPS.php">Farming Tips</a></li>
                  <li><a  class="active" href="complainstatus.php">View Complain Status</a></li>
                  <li><a href="cropbuy.php">Crop Advertisement Details</a></li>
                  <li><a href="php/logout.php">Logout</a></li>
                </ul>

                
            <br>
          
            <div id="four"><div id = "animated-example" class = "animated fadeIn">"SHARE YOUR IDEAS & HELP FARMERS! "</div>
            <div id="form">
                <form action="/action_page.php">
                <label for="exampleFormControlTextarea3"></label>
                <textarea class="form-control" id="exampleFormControlTextarea3" rows="10" cols="161" autocomplete="off"></textarea>
            </div><br>
            <br>

            <div id="button">
            <center>  <input type="submit" name="n5"  value="Submit"> 
              
            </center>
            </form>
            </div>
          
          
               
            
</body>
  </html>