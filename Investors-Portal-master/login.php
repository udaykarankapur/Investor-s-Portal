<?php
session_start();
$email=$_POST['email'];
$pass=$_POST['pass'];
$conn=new mysqli('localhost','root','','test') or die('Not Connecting');
$q="SELECT * FROM registered WHERE email='$email' AND pwd='$pass'";
$res=mysqli_query($conn,$q);
$row=mysqli_fetch_assoc($res);
if(mysqli_num_rows($res)!=0)
{
	$_SESSION["name"]=$row["fname"];
	$_SESSION["sname"]=$row["startup_name"];
	header('location: dashboard.php');
}
else
{
	header('location: login.html');
}
?>