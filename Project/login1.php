```<?php
 $host='localhost';
 $user='root';
 $pass="";
 $db="login";
  $conn=mysqli_connect($host,$user,$pass,$db);
  if(!$conn)
  {
    die('could not correc:'.mysqli_error());
  }
  else{
    echo "connected established succesfully";
  }
  $uemail=$_POST['email'];
  $upwd=$_POST['pwd'];
  $sql="select * from users where Email="$uemail" and password="$upwd";
  if(mysqli_query($conn,$sql)
  {
    echo "login successfully";
  }
  else
  {
    echo "enter your name and password properly";
  }
  ?>