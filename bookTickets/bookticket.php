<?php  
session_start();
$user=$_SESSION['username'];
if(isset($_POST['submit']))
  
$con = new mysqli('localhost', 'root', '', 'user');
{  
$checkbox1=$_POST['seat'];  
$check_count = count($_POST['seat']);
$chk="";  
    foreach($checkbox1 as $chk1)  
       {  
          $chk.= $chk1.",";  
       }  
$sql = "INSERT INTO seats(seatname,username)VALUES( '$chk','$user' )";

if(mysqli_query($con,$sql)) {

    echo'<script>alert("Inserted Successfully")</script>'; 
     $_SESSION['count']=$check_count ;  
  header("location: invoice.php");
} 
else {
     echo'<script>alert("Failed To Insert")</script>'. $sql . "<br>" . mysqli_error($con);
}
}
mysqli_close($con);
?>