<?php
session_start();
$nam=$_POST['uname'];
$conn = new mysqli('localhost','root','','test') or die("Not Connecting");
$sql = "SELECT * FROM registered where fname = '$nam'";
$res=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($res);
if(mysqli_num_rows($res)!=0)
{
  $_SESSION['nam']=$row['startup_name'];
  header('location: admin_select.php');
}
else
{
  header('location: admin_user.html');
}
?>