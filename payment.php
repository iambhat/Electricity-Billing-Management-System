<!DOCTYPE HTML>
<html>

<head>
  <title>Electricity Billing System</title>
  <link rel="stylesheet" type="text/css" href="style/style.css" />
</head>

<body>
  <div id="main">
    <div id="header">
      <div id="logo">
        <div id="logo_text">
          <!-- class="logo_colour", allows you to change the colour of the text -->
          <h1><a href="index.php">Electricity Billing System</a></h1>
        </div>
      </div>
      <div id="menubar">
        <ul id="menu">
          <!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
          <li><a href="login.php">Log Out</a></li>
          <li><a href="home.php">Home</a></li>
          <li class="selected"><a href="profile.php">Consumer Profile</a></li>
          <li><a href="account.php">Bill Details</a></li>
          <li><a href="contactus.php">Contact Us</a></li>
        </ul>
      </div>
    </div>
    <div id="site_content">
      <div class="sidebar">
        <h1>Latest News</h1>
        <h4>New Website Launched</h4>
        <br>
        <h1>Search</h1>
        <form method="post" action="#" id="search_form">
          <p>
            <input class="search" type="text" name="search_field" value="Enter keywords....." />
            <input name="search" type="image" style="border: 0; margin: 0 0 -9px 5px;" src="style/search.png" alt="Search" title="Search" />
          </p>
        </form>
      </div>
      <div id="content">
        <h1>Consumer Bill Details</h1>
        <?php 
          include_once 'dbConnection.php'; 
          session_start();
          $id = $_SESSION['id'];
        {
         $result = mysqli_query($con,"SELECT * FROM users WHERE u_id = '$id' ") or die('<script type="text/javascript">alert("Error..!!Check Once Again"); history.back();</script>');
         $result1 = mysqli_query($con,"SELECT * FROM bildetails WHERE uid = '$id' ") or die('<script type="text/javascript">alert("Error..!!Check Once Again"); history.back();</script>');
         $count=mysqli_num_rows($result);
        echo  '<center><table style="width:100%; border-spacing:2;"><tr><th><b> </b></th><th></th>';
        if($count==1)
        {
       while($row = mysqli_fetch_array($result)) {
          $id = $row['u_id'];
          $name = $row['u_name'];
          $sex = $row['u_email'];
          $age = $row['u_add'];
          $add = $row['u_phone'];
          $time1 = $row['u_mtno'];
          while($row = mysqli_fetch_array($result1)) {
          $id = $row['total'];
          $name = $row['units'];

          echo '<tr><td >User ID </td><td>'.$id.'</td></tr>
                <tr><td>Name</td><td>'.$name.'</td></tr>
                <tr><td>E-Mail</td><td>'.$sex.'</td></tr>
                <tr><td>Address</td><td>'.$age.'</td></tr>
                <tr><td>Phone</td><td>'.$add.'</td></tr>
                <tr><td>Units Consumed </td><td>'.$name.'</td>
                <tr><td>Total Amount</td><td>'.$id.'</td></tr>';
              }
      }
    }
      echo '</table></center>';

      }?>
      <br><br>
      <h2>Mode of Payment:</h2>
       <form method="post" action="history.php">
        <label><b>User IDr</b></label>
          <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="user id" name="id" required><br><br>
        <label><b>Bank Account Number</b></label>
          <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter Account number" name="acno" required><br><br>
          <label><b>IFSC Code</b></label>
          <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter IFSC" name="ifsc" required><br><br>
          <button class="w3-button w3-block w3-green w3-section w3-padding" type="submit">Proceed To Pay</button>
        </form>
      </div>
    </div>
    <div id="footer">
      <p>Copyright &copy; EBMS</p>
    </div>
  </div>
</body>
</html>
