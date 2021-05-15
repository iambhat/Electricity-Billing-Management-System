<?php 
include_once 'dbConnection.php';

$id = $_POST['rid'];
$name = $_POST['name'];
$rate = $_POST['rate'];

$q3=mysqli_query($con,"INSERT INTO rate VALUES  ('$id','$name','$rate')") or die ('<script type="text/javascript">alert("Error..!!Check Once Again"); history.back();</script>');
header("location:admin.php");
 ?>
