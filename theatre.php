<?php
 session_start();
 ?>
<html>
<head> 
<title>MyShowsEndgame</title>
</head>
<body style="background:grey;">
<h2 style="color:Red;background-color:black;text-align:center;">AVENGERS-ENDGAME</h2>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box}
body {font-family: Verdana, sans-serif; margin:0}
.mySlides {display: none}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1280px;
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
  color:white;
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
  <div class="numbertext">1 / 2</div>
  <a href="https://www.imdb.com/title/tt8108274/"target="_blank"><img src="tanhaji.jpg" alt="tanhaji" style="width:1280px; height:400px;">
  <div class="text">Tanhaji</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 2</div>
  <a href="https://www.imdb.com/title/tt3480822/"target="_blank"><img src="blkwidow.jpg" alt="Black widow" style="width:1280px; height:400px;"></a>
  <div class="text" style="color:darkblue;">Black Widow</div>
</div>
<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
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
<h2 Style="text-align:center;color:red;Background-color:black;">Delhi</h2>
<style>
html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 100%;
  margin-bottom: 16px;
  padding: 0 8px;
}

@media screen and (max-width: 650px) {
  .column {
    width: 20%;
    display: block;
  }
}
.card {
  box-shadow: 0 4px 4px 0 rgba(0, 0, 0, 0.2);
}

.containeer::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color:red;
}
</style>
</head>
<style>
a:link {
  color: green;
  background-color: transparent;
  text-decoration: none;
}
a:visited {
  color: pink;
  background-color: transparent;
  text-decoration: none;
}
a:hover {
  color: red;
  background-color: transparent;
  text-decoration: underline;
}
a:active {
  color: yellow;
  background-color: transparent;
  text-decoration: underline;
}
</style>
<div class="row" >
  <div class="column" style="width:15%;height:300px;">
<div class="card" style="background-color:fuchsia;" >
<p><b>Select city</b></p>
<form action="/city.php">
  <select name="City" style="color:blue;">
    <option value="Delhi">Delhi</option>
    <option value="Mumbai">Mumbai</option>
    <option value="Jaipur">Jaipur</option>
    <option value="Ahmedabad">Ahmedabad</option>
  </select>
  <br>
  <input type="submit">
</form>
</div>
</div>
 <div class="column"style="width:85%;background-color:white;">
<h2 style="text-align:center;color:blue;"><mark style="color:blue;">Theatres in Delhi<mark><h2>
<h6 style="color:black;float:left;border:1px solid maroon;padding:10px;background-color:silver;">Saini Multiplex<h6>
<div class="row">
<div class="column" style="width:10%;padding:7px;">
<br><br><br>
<div class="card"style="background-color:orange;">
<a href="bookTickets/Delhi_show1.php" title="100Rs"><p style="border:1px solid black;" tittle="100Rs">9:00 am</p>
</div></a>
</div>
<div class="column"style="width:10%;padding:7px;">
<br><br><br>
<div class="card" style="background-color:orange;">
<a href="#show"><p style="border:1px solid black;"title="150Rs">6:00 pm</p>
</div></a>
</div>
</div>
 <div class="column" >
<h4 style="color:black;float:left;border:1px solid maroon;padding:10px;background-color:silver;">PVR Multiplex<h4>
<div class="row">
<div class="column" style="width:10%;padding:8px;">
<br><br><br>
<div class="card"style="background-color:orange;">
<a href="#show" ><p style="border:1px solid black;"title="100Rs">9:00 am</p>
</div></a>
</div>
<div class="column"style="width:10%;padding:8px;">
<br><br><br>
<div class="card"style="background-color:orange;">
<a href="#show" ><p style="border:1px solid black;"title="150Rs">9:00 pm</p>
</div></a>
</div>
</div>
<footer style="background-color:black; color:white; border:1px solid black; text-align:center;"> 
<p>Welcome <?php echo $_SESSION['username']; ?></p>
<p>copyright &copy; of myshows</p>
</footer>
</div>
</body>
</html>