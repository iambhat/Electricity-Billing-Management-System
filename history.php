<?php 
include_once 'dbConnection.php';


$id = $_POST['id'];
//$acno = $_POST['acno'];
//$ifsc = $_POST['ifsc'];

$q3=mysqli_query($con,"update bildetails set time_pay = NOW() where uid='$id' ") or die ('<script type="text/javascript">alert("Error..!!Check Once Again"); history.back();</script>');
echo '<h1>Payment is Successful....Thank you</h1>';
 ?>
