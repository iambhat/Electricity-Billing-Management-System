<?php 
include_once '../dbConnection.php';

$uid = $_POST['uid'];
$username = $_POST['uname'];
$units = $_POST['units'];
$sql=mysqli_query($con,"SELECT * FROM rate");
$row = mysqli_fetch_array($sql);
$total=$units * $row['r_rate'];
$r = mt_rand(1,100);
$bno = 'EBMS'.$r;
$date = new DateTime();
$date->add(new DateInterval('P0Y0M15D'));
$due = date_format($date, 'Y-m-d H:i:s');

$q3=mysqli_query($con,"INSERT INTO bildetails VALUES  ('$bno',NOW(),'$due','$units','$total','no','$uid',null)") or die ('<script type="text/javascript">alert("Error..!!Check Once Again"); history.back();</script>');
header("location:admin.php");
 ?>

