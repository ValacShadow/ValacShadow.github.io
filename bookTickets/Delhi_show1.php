<?php
 session_start();
$con = new mysqli('localhost', 'root', '', 'user');
{  
$sql = " SELECT  seatname FROM seats";
if(mysqli_query($con,$sql)) {
$chk="";  
    foreach($checkbox1 as $chk1)  
       {  
          $chk.= $chk1.",";  
       }  
 $_SESSION['chk']=$checkbox1;
}
else {
     echo'<script>alert("Failed To Load")</script>'. $sql . "<br>" . mysqli_error($con);
}
}
mysqli_close($con);
 ?>
<html>
<head>
<title>myshow/booktickets</title>
<body style="background:grey;">
<h1 style="text-align:center; color:blue; padding:20px;font-family:brush script mt;">MyShows</h1>
<h2 style="text-align:center; background-color:black;color:blue;padding:10px;">Saini Multiplex</h2>
 <h3>show time 9:am</h3>
<style>
html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 45%;
  height:500px;
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

input.larger{
 width:60px;
 height:60px;
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
	<form  action="bookticket.php" method="post">
	<input type="checkbox" class="larger" name="seat[]" value="D1" <?php echo (isset($_SESSION['chk']))? "checked='checked'": "";?> >
	<input type="checkbox" class="larger" name="seat[]" value="D2" <?php echo (isset($_POST['seat[]']))? "checked='checked'": "";?>>
	<input type="checkbox" class="larger" name="seat[]"value="D3" <?php echo (isset($_POST['seat[]']))? "checked='checked'": "";?>>
           <input type="checkbox" class="larger" name="seat[]" value="D4" <?php echo (isset($_POST['seat[]']))? "checked='checked'": "";?>>
	<input type="checkbox" class="larger" name="seat[]" value="D5" <?php echo (isset($_POST['seat[]']))? "checked='checked'": "";?>>
	<input type="checkbox" class="larger" name="seat[]" value="D6" <?php echo (isset($_POST['seat[]']))? "checked='checked'": "";?>>
<pre>    D1       D2        D3        D4        D5       D6</pre>
<br>
	<input type="checkbox" class="larger" name="seat[]" value="C1" <?php echo (isset($_POST['seat[]']))? "checked='checked'": "";?>>
	<input type="checkbox" class="larger" name="seat[]" value="C2" <?php echo (isset($_POST['seat[]']))? "checked='checked'": "";?>>
	<input type="checkbox" class="larger"name="seat[]" value="C3" <?php echo (isset($_POST['seat[]']))? "checked='checked'": "";?>>
	<input type="checkbox" name="seat[]"class="larger" value="C4" <?php echo (isset($_POST['seat[]']))? "checked='checked'": "";?>>
	<input type="checkbox" name="seat[]"class="larger" value="C5" <?php echo (isset($_POST['seat[]']))? "checked='checked'": "";?>>
	<input type="checkbox" name="seat[]"class="larger" value="C6" <?php echo (isset($_POST['seat[]']))? "checked='checked'": "";?>>
<pre>    C1       C2        C3        C4        C5       C6</pre><br>
	<input type="checkbox" name="seat[]"class="larger" value="B1" <?php echo (isset($_POST['seat[]']))? "checked='checked'": "";?>>
	<input type="checkbox" name="seat[]"class="larger"value="B2" <?php echo (isset($_POST['seat[]']))? "checked='checked'": "";?>> 
	<input type="checkbox" name="seat[]"class="larger"value="B3" <?php echo (isset($_POST['seat[]']))? "checked='checked'": "";?>>
	<input type="checkbox" name="seat[]"class="larger"value="B4" <?php echo (isset($_POST['seat[]']))? "checked='checked'": "";?>>
	<input type="checkbox" name="seat[]"class="larger"value="B5" <?php echo (isset($_POST['seat[]']))? "checked='checked'": "";?>>
	<input type="checkbox" name="seat[]"class="larger"value="B6" <?php echo (isset($_POST['seat[]']))? "checked='checked'": "";?>>
<pre>    B1       B2        B3        B4        B5       B6</pre><br>
	<input type="checkbox" class="larger"name="seat[]" value="A1" <?php echo (isset($_POST['seat[]']))? "checked='checked'": "";?>>
	<input type="checkbox" name="seat[]"class="larger" value="A2" <?php echo (isset($_POST['seat[]']))? "checked='checked'": "";?>>
	<input type="checkbox" name="seat[]"class="larger"value="A3" <?php echo (isset($_POST['seat[]']))? "checked='checked'": "";?>>
	<input type="checkbox" name="seat[]"class="larger"value="A4" <?php echo (isset($_POST['seat[]']))? "checked='checked'": "";?>>
	<input type="checkbox" name="seat[]"class="larger"value="A5" <?php echo (isset($_POST['seat[]']))? "checked='checked'": "";?>>
	<input type="checkbox" name="seat[]"class="larger"value="A6" <?php echo (isset($_POST['seat[]']))? "checked='checked'": "";?>>
<pre>    A1       A2        A3        A4        A5       A6</pre>
	
          </div>
	<div class="column">
	<input type="checkbox" class="larger" name="seat[]" value="D7" <?php echo (isset($_POST['seat[]']))? "checked='checked'": "";?>>
	<input type="checkbox" class="larger" name="seat[]" value="D8" <?php echo (isset($_POST['seat[]']))? "checked='checked'": "";?>>
	<input type="checkbox" class="larger" name="seat[]" value="D9" <?php echo (isset($_POST['seat[]']))? "checked='checked'": "";?>>
	<input type="checkbox" class="larger" name="seat[]" value="D10" <?php echo (isset($_POST['seat[]']))? "checked='checked'": "";?>>
	<input type="checkbox" class="larger" name="seat[]" value="D11" <?php echo (isset($_POST['seat[]']))? "checked='checked'": "";?>>
	<input type="checkbox" class="larger" name="seat[]" value="D12" <?php echo (isset($_POST['seat[]']))? "checked='checked'": "";?>>
<pre>    D7       D8        D9        D10        D11       D12</pre><br>
	<input type="checkbox" class="larger" name="seat[]" value="C7" <?php echo (isset($_POST['seat[]']))? "checked='checked'": "";?>>
	<input type="checkbox" class="larger" name="seat[]" value="C8" <?php echo (isset($_POST['seat[]']))? "checked='checked'": "";?>>
	<input type="checkbox" class="larger"name="seat[]"value="C9" <?php echo (isset($_POST['seat[]']))? "checked='checked'": "";?>>
	<input type="checkbox" name="seat[]"class="larger"value="C10" <?php echo (isset($_POST['seat[]']))? "checked='checked'": "";?>>
	<input type="checkbox" name="seat[]"class="larger"value="C11" <?php echo (isset($_POST['seat[]']))? "checked='checked'": "";?>>
	<input type="checkbox" name="seat[]"class="larger"value="C12" <?php echo (isset($_POST['seat[]']))? "checked='checked'": "";?>>
<pre>    C7       C8        C9        C10        C11       C12</pre><br <?php echo (isset($_POST['seat[]']))? "checked='checked'": "";?>>
	<input type="checkbox" name="seat[]"class="larger" value="B7" <?php echo (isset($_POST['seat[]']))? "checked='checked'": "";?>>
	<input type="checkbox" name="seat[]"class="larger" value="B8"<?php echo (isset($_POST['seat[]']))? "checked='checked'": "";?>>
	<input type="checkbox" name="seat[]"class="larger" value="B9" <?php echo (isset($_POST['seat[]']))? "checked='checked'": "";?>>
	<input type="checkbox" name="seat[]"class="larger" value="B10" <?php echo (isset($_POST['seat[]']))? "checked='checked'": "";?>>
	<input type="checkbox" name="seat[]"class="larger" value="B11" <?php echo (isset($_POST['seat[]']))? "checked='checked'": "";?>>
	<input type="checkbox" name="seat[]"class="larger" value="B12" <?php echo (isset($_POST['seat[]']))? "checked='checked'": "";?>>
<pre>    B7       B8        B9        B10        B11       B12</pre><br>
	<input type="checkbox" class="larger"name="seat[]"value="A7" <?php echo (isset($_POST['seat[]']))? "checked='checked'": "";?>>
	<input type="checkbox" name="seat[]"class="larger"value="A8" <?php echo (isset($_POST['seat[]']))? "checked='checked'": "";?>>
	<input type="checkbox" name="seat[]"class="larger"value="A9" <?php echo (isset($_POST['seat[]']))? "checked='checked'": "";?>>
	<input type="checkbox" name="seat[]"class="larger"value="A10" <?php echo (isset($_POST['seat[]']))? "checked='checked'": "";?>>
	<input type="checkbox" name="seat[]"class="larger"value="A11" <?php echo (isset($_POST['seat[]']))? "checked='checked'": "";?>>
	<input type="checkbox" name="seat[]"class="larger"value="A12" <?php echo (isset($_POST['seat[]']))? "checked='checked'": "";?>>
<pre>    A7       A8        A9        A10        A11       A12</pre>
	</div>
     <div class="column" style="width:7%;">
       <div class="card">
       <button type=submit name="submit" value="submit"style="width=50%; height:35px;background-color:orange;text-align:center;" >Book Tickets</button>
</form>
 </div>
  </div>
</div>	
</body>
<footer style="background-color:black; color:white; border:10px; text-align:center;"> 
<p>Welcome <?php  echo $_SESSION['username']; ?></p>
<p>copyright &copy; of myshows</p>
</footer>
</body>
</html>