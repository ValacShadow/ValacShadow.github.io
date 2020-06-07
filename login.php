<?php
   include("connect.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($con,$_POST['Username']);
      $mypassword = mysqli_real_escape_string($con,$_POST['Password']); 
      
      $sql = "SELECT id,email FROM register WHERE username = '$myusername' and password = '$mypassword' ";
      $result = mysqli_query($con,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
     $count = mysqli_num_rows($result);
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         $_SESSION['username'] = $myusername; 
         $_SESSION['email']  = $row["email"];      
         header("location: welcome.php");
      }else  
   echo "<script type='text/javascript'>alert('wrong username or password');</script>";   
   }
?>