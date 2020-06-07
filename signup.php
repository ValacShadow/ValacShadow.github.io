<?php
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];

  $conn = new mysqli('localhost','root','','user');
 if($conn->connect_error){
   die('Connection failed =  $conn->connect_error');
 }else{
  $stmt = $conn->prepare("insert into register(email,username,password)
      values(?, ?, ?)");
  $stmt->bind_param("sss",$email,$username,$password);
  $stmt->execute();
   echo '<script type="text/javascript">alert("Signup succesfull");</script>';
    header("location: myshow.php");
  $stmt->close();
  $conn->close();
}
?>