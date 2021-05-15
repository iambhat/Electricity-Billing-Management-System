<?php 
include_once '../dbConnection.php';

$tid = $_POST['tariffid'];
$tname = $_POST['tariffname'];
$tprice = $_POST['tariffprice'];

$q3=mysqli_query($con,"INSERT INTO rate VALUES  ('$tid','$tname','$tprice')") or die ("Error");
header("location:admin.php");
 ?>
