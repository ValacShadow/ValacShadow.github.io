<?php
session_start();
$conn = new mysqli('localhost', 'root', '', 'user');
$user=$_SESSION['username'];
$sql = "SELECT seatname FROM seats WHERE username='$user'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    $_SESSION['seats' ]= $row["seatname"] ;
   $count=$_SESSION['count'];
    }
} else {
    echo "0 results";
}
?>  
<html>
<body>
<head>
<title>myshow/booktickets/invoice</title>
<body style="background:grey;">
<h1 style="text-align:center; color:blue; padding:20px;font-family:brush script mt;">MyShows</h1>
<style>
html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 80%;
 height:500px;
  margin-bottom: 16px;
  padding: 0 8px;
  background-color:silver;
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
<div class="row" >
<div class="column" style="width:10%;background-color:pink;>
<p>Advertisements</p>
<h2 style="text-align:center;">Saini Multiplex</h2>
   </div>
<div class="column" >
<h1 style="text-align:center;color:red;background-color:black;">INVOICE</h1>
<br>
<h2 style="text-align:center;">Saini Multiplex</h2>
<br>
<h3 style="float:left">Show Time : 9:00AM</h3><br><br>
<h2 style="text-align:center;"><?php echo $_SESSION['username'];?></h2>
<h2 style="float:left">Seats:<?php echo $_SESSION['seats'] ; ?></h2>
<br><br><br><br>
<h2 style="text-align:center;">Total amount =<?php echo $_SESSION['count'];?>*100</h2>
<h2 style="text-align:center; " id="total" ></h2>
</div>
<div class="column" style="width:10%;background-color:skyblue; ">
<br>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br>
<form action="..\welcome.php" >
<button type="submit" style="align:center" onclick="alert()">CONFIRM</button>
</form>
</div>
</div>
<script>
function alert() {
  alert("Ticket booked");
  location="..\welcome.php";
}
</script>
<script type="text/javascript">
var y = "<?php echo $count;?>";
var z = 100 * y
document.getElementById("total").innerHTML = z;
</script>
<footer style="background-color:black; color:white; border:10px; text-align:center;"> 
<p>Welcome <?php  echo $_SESSION['username']; ?></p>
<p >copyright &copy; of myshows</p>
</footer>
</body>
</html>
