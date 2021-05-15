<?php

if(isset($_SESSION['name'])){
session_destroy();
}
include_once 'dbConnection.php';
$email = $_POST['username'];
$password = $_POST['password'];

$result = mysqli_query($con,"select * from users where u_id = '$email' and password = '$password'");
$result1 = mysqli_query($con,"select id from admin where id = '$email' and password = '$password'");
$count=mysqli_num_rows($result);
$count1=mysqli_num_rows($result1);
if($count==1)
{
	while($row = mysqli_fetch_array($result))
	{
		$id = $row['u_id'];
	}
	session_start();
	$_SESSION['id'] = $id;
	header("location:home.php");
}
else if($count1==1)
{
	while($row = mysqli_fetch_array($result1))
	{
		$name = $row['id'];
	}
	session_start();
	$_SESSION['name'] = $name;
	header("location:admin/admin.php");
}
else
header("location:login.php");
?>

