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
          <li><a href="logout.php">Log Out</a></li>
          <li><a href="home.php">Home</a></li>
          <li><a href="profile.php">Consumer Profile</a></li>
          <li class="selected"><a href="account.php">Bill Details</a></li>
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
        <h1>Payment Account Details</h1>
        <?php 
          include_once 'dbConnection.php'; 
          session_start();
          $id = $_SESSION['id'];
        {
         $result = mysqli_query($con,"SELECT * FROM bildetails WHERE uid = '$id' ") or die('Error');
         $count=mysqli_num_rows($result);
        echo  '<center><table style="width:100%; border-spacing:2;"><tr><th><b>Bill No</b></th><th><b> Issue Date</b></th><th><b>Due Date</b></th><th><b> Units Consumed</b></th><th><b>Amount </b></th><th><b>Payment </b></th></tr>';
        if($count>0)
        {
       while($row = mysqli_fetch_array($result)) {
            $id = $row['bno'];
          $name = $row['issuedate'];
          $sex = $row['duedate'];
          $age = $row['units'];
          $time1 = $row['payment'];
          $result1 = mysqli_query($con,"SELECT r_rate FROM rate ") or die('Error');
          $row = mysqli_fetch_array($result1);
          $add = $row['r_rate'];
          $addd = $age * $add;
          echo '<tr><td>'.$id.'</td><td>'.$name.'</td><td>'.$sex.'</td><td>'.$age.'</td><td>'.$addd.'</td><td>'.$time1.'</td></tr>';
      }
    }
      echo '</table></center>';

      }?>
      </div>
      <form method="post" action="payment.php">
          <label><b>Select The Bill Number</b></label><br>
          <div class="col-md-5 col-sm-5 col-xs-5">
              <select class="form-control" name="billid">
                <?php    
                $id = $_SESSION['id'];
               $result1 = mysqli_query($con,"SELECT * FROM bildetails WHERE uid = '$id' ") or die('Error');
                  while($row = mysqli_fetch_array($result1)) {
                  $id = $row['id'];           
                  echo '<option value='.$id.'>'.$id.'</option>';
                  }

                ?>
              </select>
          </div><br>
          <button class="w3-button w3-block w3-green w3-section w3-padding" type="submit">Pay</button>
        </form>
    </div>
    <div id="footer">
      <p>Copyright &copy; EBMS</p>
    </div>
  </div>
</body>
</html>
