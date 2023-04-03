<?php
session_start();
if (isset($_SESSION["username"])) {
    $username = $_SESSION["username"];
    session_write_close();
} else {
    // since the username is not set in session, the user is not-logged-in
    // he is trying to access this page unauthorized
    // so let's clear all session variables and redirect him to index
    session_unset();
    session_write_close();
    $url = "./index.php";
    header("Location: Scouting.html");
}

?>
<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="/w3css/3/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<body style="background-image: url('bg.png');">
  <style>
    body {
      margin: 0;
      font-family: Arial, Helvetica, sans-serif;
    }
    
    .topnav {
      overflow: hidden;
      background-image: url('bg.png');
      margin-left: 5px;
    }
    
    .topnav a {
      float: left;
      color: #f2f2f2;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
      font-size: 17px;
    }
    
    .topnav a:hover {
      background-color: #ddd;
      color: rgb(90, 86, 86);
    }
    
    .topnav a.active {
      background-color: #04AA6D;
      color: white;
    }
    {
    box-sizing: border-box;
    }

    .column {
     float: left;
    width: 33.33%;
    padding: 5px;
    }

    /* Clearfix (clear floats) */
    .row::after {
    content: "";
    clear: both;
    display: table;
    }
    .center {
    display: block;
    margin-left: auto;
    margin-right: auto;
    width: 50%;
    }
    .footer {
  position: static;
  left: 0;
  bottom: 0;
  width: 100%;
  height: 10%;
  color: rgb(0, 0, 0);
  text-align: center;
    }
    </style>
    </head>
    <body>
    
    <div class="topnav">
      <img style="float: left;" src="Logo.jpg" height="80px" width="80px"> 
      <a class="" href="">Home</a>
      <a href="Porfolio.html">Portfolio</a>
      <a href="">Officers</a>
      <a href="">Contact Me</a>
      <a style="float: right;" href="Portfolio.html">Log Out</a>
    </div>
    <!-- Slide Show -->
<section style="align-items: center;">
    <img class="mySlides" src="Slide1.jpg" style="width:100%">
    <img class="mySlides" src="Slide2.jpg" style="width:100%">
    <img class="mySlides" src="Slide3.JPG" style="width:100%">
    <img class="mySlides" src="Slide4.JPG" style="width:100%">
    <img class="mySlides" src="Slide6.JPG" style="width:100%">
  </section>
  <!-- Band Description -->
  <section class="w3-container w3-center w3-content" style="text-align: center ;   color: white; ">
    <h2 style="font-family: 'Times New Roman', Times, serif; font-size: 60px" class="w3-wide">Scout Oath</h2>
    <h3 class="w3-justify" style="margin-left: 5%; margin-right: 5%">On my honor, I will do my best
      To do my duty to God and my country, the Republic of the Philippines, and to obey the Scout law.
      To help other people at all times,
      To keep myself physically strong, mentally awake and morally straight.</h3>
  </section>
  <section class="w3-container w3-center w3-content" style="text-align: center ; color: white;">
    <h2 style="font-family: 'Times New Roman', Times, serif; font-size: 60px" class="w3-wide"> Scout Law </h2>
    <h3 class="w3-justify" style="margin-left: 5%; margin-right: 5%;">A Scout is:
      Trustworthy;
      Loyal;
      Helpful;
      Friendly;
      Courteous;
      Kind;
      Obedient;
      Cheerful;
      Thrifty;
      Brave;
      Clean; and
      Reverent</h3>
  </section>

<section class="w3-container w3-center w3-content" style="text-align: center;  color: white; ">
  <h2 style="font-family: 'Times New Roman', Times, serif; font-size: 60px " class="w3-wide" >VISION</h2>
  <h3 class="w3-justify" style="margin-left: 5%; margin-right: 5%;">Foremost in preparing the youth to become agents of change in communities, guided by the Scout Oath and Law.</h3>
</section>
<section class="w3-container w3-center w3-content" style="text-align: center;  color: white; ">
  <h2 style="font-family: 'Times New Roman', Times, serif; font-size: 60px" class="w3-wide">MISSION</h2>
  <h3 class="w3-justify" style="margin-left: 5%; margin-right: 5%;">To help the youth develop values and acquire competencies to become responsible citizens and capable leaders anchored on the Scout Oath and Law.</h3>
</section>
    <!-- Band Members -->
<table>

  <a href="Old1.jpg"><img src="Old1.jpg" width="396" height="400"></a>  
  <a href="Old2.jpg"><img src="Old2.jpg" width="396" height="400"></a> 
  <a href="Old3.jpg"><img src="Old3.jpg" width="396" height="400"></a> 
  <a href="Old4.jpg"><img src="Old4.jpg" width="395" height="400"></a>  
  <a href="Old5.jpg"><img src="Old5.jpg" width="395" height="400"></a>  
  <a href="Old6.jpg"><img src="Old6.jpg" width="395" height="400"></a>  
  <a href="Old7.jpg"><img src="Old7.jpg" width="395" height="400"></a>  
  <a href="Old8.jpg"><img src="Old8.jpg" width="395" height="400"></a>  

  </table>
  <br>
  <br>
  <!-- Footer -->
<div class="footer">
  <h3> Social Media Account</h3>
  <h4>Boyscout Of Ernesto Rondon Official</h4>
  <a href="https://www.facebook.com/ERHS413"> <img src="Fb.png" width="70" height="40">
</div>







  <script>
    // Automatic Slideshow - change image every 3 seconds
    var myIndex = 0;
    carousel();
    
    function carousel() {
      var i;
      var x = document.getElementsByClassName("mySlides");
      for (i = 0; i < x.length; i++) {
         x[i].style.display = "none";
      }
      myIndex++;
      if (myIndex > x.length) {myIndex = 1}
      x[myIndex-1].style.display = "block";
      setTimeout(carousel, 3000);
    }
    </script>
</body>
</html>


