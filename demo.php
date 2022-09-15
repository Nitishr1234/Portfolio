<?php

$servername="localhost";
$username="root";
$password="";
$database="potfolio";


$conn=mysqli_connect($servername,$username,$password,$database);
if(!$conn)
{
  
  echo "Connection error".mysqli_error();
}

  if(isset($_POST['submit'])){

    $name=$_POST['name'];
    $email=$_POST['email'];
    $subject=$_POST['subject'];
    $message=$_POST['message'];

   $sql="INSERT INTO `contact` ( `name`, `email`, `subject`, `message`) VALUES ( ' $name', '$email', '$subject', '$message')";

$result=mysqli_query($conn,$sql);
 
if(!$result)
{
    echo "<br>". "your data is not inserted".mysqli_error();
}
else{
    
 }
 header("Location:portfolio.php");
  }
  
?>