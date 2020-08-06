<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" <content="width=device-width,intial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <link rel="stylesheet" href="complainformstyle.css">
<title>Complain Page </title>
    </head>
<body>
        <h1><center>FARMER'S PORTAL </center></h1>
        <style>
            
            body{
        background-image: url(a3.jpg);
        background-repeat: no-repeat;
        background-position: center bottom;
        margin-right: 200px;
        background-size: cover;
        background-attachment: fixed;

   
        
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
                  color:black;
                  text-align: center;
                  padding: 14px 16px;
                  text-decoration: none;
                  font-weight: 900;
                }
                
                li a:hover {
                  background-color: lightgoldenrodyellow;
                }    
               
}
        
                </style>
                </head>
                <body>
                
                <ul>
           <li><a class="active" href="home.html">Home</a></li>
           <li><a class="active" href="complain.php">Complain</a></li>
           <li><a class="active" href="complainstatus.php">View Complain Status</a></li>
          <li><a class="active" href="FARMINGTIPS.php">Farming Tips</a></li>
          <li><a href="cropbuy.php">Crop Advertisement Details</a></li>
          <li><a href="php/logout.php">Logout</a></li>
       </ul>
                               <div>
               
                  
                                <div id="one">
                                <div id="one2">COMPLAIN PORTAL</div>
                                </div>
                                <div id="four"><div id = "animated-example" class = "animated fadeIn">"STOP FOR ALL YOUR QUERIES"</div></div>
                                <div id="three2">
                                <center><b> </b></center> 
                                <form  method="POST" action="farmpostcomplain.php">
                                <input type="number" name="n1"  placeholder="Complain ID">
                                <input type="number" name="n2"  placeholder="FARMER Id">
                                
                                <select id= "complain-select" name="n3" >
                                        <option value="Crop Issue">Crop Issue</option>
                                        <option value="Supplier Problem">Supplier Problem</option>
                                        <option value="Technical Problem"> Technical Problem</option>
                                        </select>
                                <input type="text" name="n4"  placeholder="Complain">
                                <br><br>
                                <input type="submit" name="submit"   value="Submit">
                                </div>
                                </div>
                                <body background="new.jpg">
                                </body>
                                </html>
                                      