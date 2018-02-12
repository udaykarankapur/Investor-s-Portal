<?php
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$sname=$_POST['sname'];
$pass=$_POST['pass'];
$conn=new mysqli('localhost','root','','test') or die('Not Connecting');
$q="SELECT * FROM registered WHERE email='$email'";
$res=mysqli_query($conn,$q);
if(mysqli_num_rows($res)!=0)
{
	header('location: signup.html');
}
else
{
	$r="INSERT INTO registered VALUES('$fname','$lname','$email','$sname','$pass')";
	mysqli_query($conn,$r);
}
?>