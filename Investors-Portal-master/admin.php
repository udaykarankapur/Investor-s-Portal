<?php
$id = $_POST['admin_name'];
$pass = $_POST['admin_password'];
$conn = new mysqli('localhost','root','','test') or die("not connecting");
$sql = "SELECT * FROM admin where name = '$id' AND password = '$pass'" ;
$res=mysqli_query($conn,$sql);
if(mysqli_num_rows($res)!=0)
{
    header('location: admin_user.html');
}
else
{
    header('location: admin_login.html');
}
?>