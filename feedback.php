<?php 
include_once 'dbConnection.php';

$username = $_POST['username'];
$email = $_POST['email'];
$msg = $_POST['msg'];
$phno = $_POST['phno'];

$q3=mysqli_query($con,"INSERT INTO feedback VALUES  ('$username','$phno','$email','$msg')") or die ('<script type="text/javascript">alert("Error..!!Check Once Again"); history.back();</script>');
header("location:contact.php");
 ?>
