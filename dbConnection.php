<?php
$con= new mysqli('localhost','root','')or die("Could not connect to mysql".mysqli_error($con));
mysqli_select_db($con,"ebms")  or die("Could connect to Database");
?>