<?php 
include_once '../dbConnection.php';

$userid = $_POST['userid'];
$username = $_POST['username'];
$email = $_POST['email'];
$add = $_POST['add'];
$phno = $_POST['phno'];
$mtno = $_POST['mtno'];
$phase = $_POST['phase'];
$password = $_POST['password'];
$cid = $_POST['cid'];
$bid = $_POST['bid'];

$q3=mysqli_query($con,"INSERT INTO users VALUES  ('$userid','$username','$email','$add','$phno','$mtno','$phase','$cid','$bid','$password')") or die ("Error");
header("location:admin.php");
 ?>
