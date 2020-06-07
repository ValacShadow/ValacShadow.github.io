<?php
 session_start();
if(isset($_POST["signup"])){
echo "<script type='text/javascript'>alert('signup succesfull');</script>";   
}
 ?>
<html>
<head>
<title>Mybooks</title>
<body style="background:grey;">
<h1 style="text-align:center; color:blue; padding:20px;font-family:brush script mt;">Mybooks</h1>
<style>
* {box-sizing: border-box;}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color:black;
  height:50px;
}

.topnav a {
  float: left;
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #2196F3;
  color: white;
}

.topnav .search-container {
  float: left;
}

.topnav input[type=text] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
}

.topnav .search-container button {
  float: right;
  padding: 6px 10px;
  margin-top: 8px;
  margin-right: 16px;
  background: #ddd;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

.topnav .search-container button:hover {
  background: #ccc;
}

@media screen and (max-width: 600px) {
  .topnav .search-container {
    float: none;
  }
  .topnav a, .topnav input[type=text], .topnav .search-container button {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .topnav input[type=text] {
    border: 1px solid #ccc;  
  }
}
</style>
</head>
<body>
<style>
#siu{
 float:right;
}
</style>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

/* Add a background color when the inputs get focus */
input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for all buttons */


button:hover {
  opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container {
  padding: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: #474e5d;
  padding-top: 50px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* Style the horizontal ruler */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}
 
/* The Close Button (x) */
.close {
  position: absolute;
  right: 35px;
  top: 15px;
  font-size: 40px;
  font-weight: bold;
  color: #f1f1f1;
}

.close:hover,
.close:focus {
  color: #f44336;
  cursor: pointer;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
     width: 100%;
  }
}
</style>
<body>

<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
  <form class="modal-content" action="signup.php" method="post">
    <div class="container">
      <h1>Sign Up</h1>
      <p>Please fill in this form to create an account.</p>
      <hr>
      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="email" required>

      <label for="username"><b>Username</b></label>
      <input type="text" placeholder="Username" name="username" required>

      <label for="password"><b>Password</b></label>
      <input type="password" placeholder="Password" name="password" required>
      
      <label>
        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
      </label>

      <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

      <div class="clearfix">
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
        <button type="submit" name="signup"class="signupbtn">Sign Up</button>
      </div>
    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
</body>
<style>
body {font-family: Arial, Helvetica, sans-serif;}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacitty: 0.8;
}

/* Extra styles for the cancel button */
.cancellbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainerr {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.containerr {
  padding: 16px;
}

span.pasw {
  float: right;
  padding-top: 16px;
}

/* The Modal (background) */
.modaal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.modaal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.closee {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.closee:hover,
.closee:focus {
  color: red;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.pasw {
     display: block;
     float: none;
  }
  .cancellbtn {
     width: 100%;
  }
}
</style>
</head>
<body>
<div id="id02" class="modaal">
  
  <form class="modaal-content animate" action="login.php" method="post">
    <div class="imgcontainerr">
      <span onclick="document.getElementById('id02').style.display='none'" class="closee" title="Closee Modaal">&times;</span>
      <img src="avatar.jpg" alt="Avatar" class="avatar">
    </div>

    <div class="containerr">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="Username" required>

      <label for="pasw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="Password" required>
        
      <button type="submit">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="containerr" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancellbtn">Cancel</button>
      <span class="pasw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
</div>

<script>
// Get the modal
var modaal = document.getElementById('id02');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modaal) {
        modaal.style.display = "none";
    }
}
</script>
</body>
<div class="topnav">
  <div class="search-container">
         <form action="/search_page.php">
      <input type="text" placeholder="Movies,cities" name="search">
    </form>
  </div>
  <a href="#Search">Search</a>
  <a  href="#home">Home</a>
  <a href="#about">About</a>
  <a href="#contact">Contact</a> 
   <a id="siu" <button onclick="document.getElementById('id02').style.display='block'" style="width:auto;">Login</button></a>
    <a id="siu" <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Sign Up</button></a>
</div>
<br>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box}
body {font-family: Verdana, sans-serif; margin:0}
.mySlides {display: none}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1500px;
  position: relative;
  margin: auto;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}
</style>
</head>
<body>

<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <a href="https://www.imdb.com/title/tt4154796/" target="_blank"><img src="endgame.jpg" width="1500" height="600"></a>
  <div class="text">Avengers Endgame</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <a href="https://www.imdb.com/title/tt8291224/" target="_blank"><img src="uri.jpg" width="1500" height="600"></a>
  <div class="text">Uri</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <a href="https://www.imdb.com/title/tt1663662/" target="_blank"><img src="pacificrim.jpg"width="1500" height="600"></a>
  <div class="text">Pacific Rim</div>
</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>
<h3 style="text-align:center; color:blue;background-color:black;padding:30px;">UPCOMING MOVIES</h3>
<style>
html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 25%;
  margin-bottom: 16px;
  padding: 0 8px;
}

@media screen and (max-width: 650px) {
  .column {
    width: 30%;
    display: block;
  }
}
.card {
  box-shadow: 0 4px 4px 0 rgba(0, 0, 0, 0.2);
 background-color:silver;
}

.containeer::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: White;
}
</style>
</head>
<body>
<div class="row">
  <div class="column">
<div class="card" >
      <a href="https://www.imdb.com/title/tt9614460/" target="_blank"><img src="chapak.jpg" alt="chapak" style="width:100px; height:30%">
      <div class="container">
        <h2>CHAPAK</h2>
        <p class="title">Depika padukone</p>
    </div>
  </div>
</a>
</div>

  <div class="column">
<div class="card">
      <a href="https://www.imdb.com/title/tt9648672/"target="_blank"><img src="streetdancer.jpg" alt="street dancer" style="width:30%; height:30%;">
      <div class="container">
        <h2>STREET DANCER</h2>
        <p class="title">Varun Dhawan,Shradha kapoor</p>
    </div>
</a>
</div>
  </div>
  <div class="column">
<div class="card">
      <a href="https://www.imdb.com/title/tt3480822/"target="_blank"><img src="blkwidow.jpg" alt="Black widow" style="width:30%; height:30%;">
      <div class="container">
        <h2>Black Widow</h2>
        <p class="title">Scarlett Jhonson</p>
    </div>
  </div>
</a>
</div>
<div class="column">
<div class="card">
      <a href="https://www.imdb.com/title/tt8108274/"target="_blank"><img src="tanhaji.jpg" alt="tanhaji" style="width:30%; height:30%;">
      <div class="container">
        <h2>Tanhaji</h2>
        <p class="title">Sanjay Dutt,Kriti Sanon</p>
    </div>
  </div>
</a>
</div>
</div>
<h3 style="text-align:center; color:blue;background-color:black;padding:30px;"> MOVIES IN THEATRE</h3>
<br>
<img src="endgame.jpg" alt="endgame" style="width:400px;height:400px;padding:30px">
<img src="pacificrim.jpg" alt="endgame" style="width:400px;height:400px;padding:30px">
<img src="uri.jpg" alt="uri" style="width:400px;height:400px;padding:30px">
<footer style="background-color:black; color:white; border:10px; text-align:center;"> 
<p>Welcome </p>
<p>copyright &copy; of myshows</p>
</footer>

</body>
</html>