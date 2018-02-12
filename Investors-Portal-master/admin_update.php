<?php
session_start();
$sname=$_SESSION['nam'];
$meeting=$_POST['meeting'];
$views=$_POST['views'];
$shares=$_POST['shares'];
$prod_reach=$_POST['prod_reach'];
$investors=$_POST['investors'];
$investment=$_POST['investment'];
$investor_poss=$_POST['investor_poss'];
$deals=$_POST['deals'];
$users=$_POST['users'];
$active=$_POST['active'];
$conn=new mysqli('localhost','root','','test') or die('Not Connecting');
$q="UPDATE stats SET meeting='$meeting',views='$views',shares='$shares',prod_reach='$prod_reach',investor='$investors',invest_made='$investment',investor_poss='$investor_poss',deals='$deals',users='$users',active='$active' WHERE sname='$sname'";
mysqli_query($conn,$q);
header('location: admin_select.html');
?>