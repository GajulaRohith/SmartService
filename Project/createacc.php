<?php
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
  $ufname=$_POST['fname'];
  $ulname=$_POST['lname'];
  $uphno=$_POST['phno'];
  $uemail=$_POST['email']
  $upwd=$_POST['pwd'];
  
$sql="insert into account(fname,lname,phno,email,pwd) values($ufname,$ulname,$uphno,$uemail,$upwd)";
if(mysqli_connect($conn,$sql))
{
    echo "new record successfully";
}
else
{
    echo "Error".$sql."<br>".mysqli_error($conn);
}
?>