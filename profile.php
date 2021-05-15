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
        <h1>User Profile Details</h1>
        <?php 
          include_once 'dbConnection.php'; 
          session_start();
          $id = $_SESSION['id'];
        {
         $result = mysqli_query($con,"SELECT * FROM users WHERE u_id = '$id' ") or die('<script type="text/javascript">alert("Error..!!Check Once Again"); history.back();</script>');
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
          echo '<tr><td >User ID </td><td>'.$id.'</td></tr>
                <tr><td>Name</td><td>'.$name.'</td></tr>
                <tr><td>E-Mail</td><td>'.$sex.'</td></tr>
                <tr><td>Address</td><td>'.$age.'</td></tr>
                <tr><td>Phone</td><td>'.$add.'</td></tr>
                <tr><td>Meter Number</td><td>'.$time1.'</td></tr>';
      }
    }
      echo '</table></center>';

      }?>
        
      </div>
    </div>
    <div id="footer">
      <p>Copyright &copy; EBMS</p>
    </div>
  </div>
</body>
</html>
