<?php 
  include_once '../dbConnection.php'; 
  {
         $result = mysqli_query($con,"SELECT * FROM users ") or die('Error');
         $result1 = mysqli_query($con,"SELECT * FROM company ") or die('Error');
         $result2 = mysqli_query($con,"SELECT * FROM branches  ") or die('Error');
  }
?>

<!DOCTYPE html>
<html>
<head>
  <title>Electricity Billing System</title>
  <link rel="stylesheet" type="text/css" href="../style/style.css" />

  <link rel="stylesheet" type="text/css" href="../css1/style.css" />
  <link rel="stylesheet" type="text/css" href="../css1/bootstrap.css" />
  <link rel="stylesheet" type="text/css" href="../css1/bootstrap-select.css" />
  <style>
.city {display:none}
  </style>

  <link rel="stylesheet" type="text/css" href="style.css" />
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
          <li><a href="../logout.php">Log Out</a></li>
        </ul>
      </div>
    </div>
    <div id="site_content">
      <div id="content">
        
    <h2>Click To Add User : </h2><button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-green w3-large">Add User</button>
    <h2>Click To Add Tariff : </h2><button onclick="document.getElementById('id02').style.display='block'" class="w3-button w3-green w3-large">Add Tariff</button>
    <h2>Click To Generate Bill : </h2><button onclick="document.getElementById('id03').style.display='block'" class="w3-button w3-green w3-large">Bill Generate</button>
    <h2>Click To Display EBMS Details : </h2><button onclick="document.getElementById('id04').style.display='block'" class="w3-button w3-green w3-large">Display EBMS</button>

  <div id="id01" class="w3-modal">
    <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">

      <div class="w3-center"><br>
        <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-xlarge w3-hover-red w3-display-topright" title="Close Modal">&times;</span>
      </div>

      <form class="w3-container" action="adduser.php" method="POST">
        <div class="w3-section">
          <label><b>Select The Company Name</b></label>&nbsp&nbsp&nbsp&nbsp
          <label><b>Select The Branch Name</b></label><br>
          <div class="col-md-5 col-sm-5 col-xs-5">
              <select class="form-control" name="cid">
                <?php
                  while($row = mysqli_fetch_array($result1)) {
                  $id = $row['c_id'];           
                  echo '<option value='.$id.'>'.$id.'</option>';
                  }

                ?>
              </select>
          </div>
          <div class="col-md-5 col-sm-5 col-xs-5">
              <select class="form-control" name="bid">
                <?php
                  while($row = mysqli_fetch_array($result2)) {
                  $id = $row['b_id'];           
                  echo '<option value='.$id.'>'.$id.'</option>';
                  }

                ?>
              </select>
          </div> <br/><br/>
          <label><b>User ID</b></label>
          <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter User ID" name="userid" required>
          <label><b>User Name</b></label>
          <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter Username" name="username" required>
          <label><b>User E-Mail</b></label>
          <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="E-mail" name="email" required>
          <label><b>Address</b></label>
          <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Address" name="add" required>
          <label><b>Phone Number</b></label>
          <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Phone Number" name="phno" required>
          <label><b>Metre Number</b></label>
          <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter Metre Number" name="mtno" required>
          <label><b>Phase</b></label>
          <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter Phase" name="phase" required>
          <label><b>Password</b></label>
          <input class="w3-input w3-border" type="password" placeholder="Enter Password" name="password" required>
          <button class="w3-button w3-block w3-green w3-section w3-padding" type="submit">Submit</button>
        </div>
      </form>

      <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
        <button onclick="document.getElementById('id01').style.display='none'" type="button" class="w3-button w3-red">Cancel</button>
      </div>

    </div>
  </div>

  <div id="id02" class="w3-modal">
    <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">

      <div class="w3-center"><br>
        <span onclick="document.getElementById('id02').style.display='none'" class="w3-button w3-xlarge w3-hover-red w3-display-topright" title="Close Modal">&times;</span>
      </div>

      <form class="w3-container" action="inserttariff.php" method="POST">
        <div class="w3-section">
          <label><b>Tariff ID</b></label>
          <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter Tariff ID" name="tariffid" 
          id="tariffid" required>
          <label><b>Tariff Name</b></label>
          <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter Tariff Name" name="tariffname" id="tariffname" required>
          <label><b>Tariff Price</b></label>
          <input class="w3-input w3-border" type="text" placeholder="Enter Price" name="tariffprice" id="tariffprice" required>
          <button class="w3-button w3-block w3-green w3-section w3-padding" type="submit">Submit</button>
        </div>
      </form>

      <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
        <button onclick="document.getElementById('id02').style.display='none'" type="button" class="w3-button w3-red">Cancel</button>
      </div>

    </div>
  </div>

  <div id="id03" class="w3-modal">
    <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">

      <div class="w3-center"><br>
        <span onclick="document.getElementById('id03').style.display='none'" class="w3-button w3-xlarge w3-hover-red w3-display-topright" title="Close Modal">&times;</span>
      </div>

      <form class="w3-container" action="billgenerate.php" method="POST">
        <div class="w3-section">
          <label><b>Select The User</b></label><br>
          <div class="col-md-5 col-sm-5 col-xs-5">
              <select class="form-control" name="uid">
                <?php
                  while($row = mysqli_fetch_array($result)) {
                  $id = $row['u_id'];           
                  echo '<option value='.$id.'>'.$id.'</option>';
                  }

                ?>
              </select>
          </div> 

          <br><br><br><label><b>Select the Username</b></label><br>
          <div class="col-md-5 col-sm-5 col-xs-5">
              <select class="form-control" name="uname">
                <?php
         $result = mysqli_query($con,"SELECT * FROM users ") or die('Error');
                  while($row = mysqli_fetch_array($result)) {
                  $id = $row['u_name'];           
                  echo '<option value='.$id.'>'.$id.'</option>';
                  }

                ?>
              </select>
          </div> <br><br>
          <label><b>Units Consumed</b></label>
          <input class="w3-input w3-border" type="text" placeholder="Enter Units" name="units" required>
          <button class="w3-button w3-block w3-green w3-section w3-padding" type="submit">Submit</button>
        </div>
      </form>

      <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
        <button onclick="document.getElementById('id03').style.display='none'" type="button" class="w3-button w3-red">Cancel</button>
      </div>

    </div>
  </div>


<div id="id04" class="w3-modal">
 <div class="w3-modal-content w3-card-4 w3-animate-zoom" >
  

  <div class="w3-bar w3-border-bottom">
   <button class="tablink w3-bar-item w3-button" onclick="openCity(event, 'users')">Users</button>
   <button class="tablink w3-bar-item w3-button" onclick="openCity(event, 'tariff')">Tariff</button>
   <button class="tablink w3-bar-item w3-button" onclick="openCity(event, 'pay')">Payments</button>
   <button class="tablink w3-bar-item w3-button" onclick="openCity(event, 'feed')">Feedback</button>
  </div>

  <div id="users" class="w3-container city">
   <h1>Users</h1>
   <?php 
        {
         $result = mysqli_query($con,"SELECT * FROM users ") or die('Error');
         $count=mysqli_num_rows($result);
        echo  '<center><table style="width:100%; border-spacing:2;"<tr><th><b>User ID</b></th><th><b> Name</b></th><th><b>E-Mail</b></th><th><b> Address</b></th><th><b>Phone </b></th><th><b>Meter Number </b></th></tr>';
        if($count>0)
        {
       while($row = mysqli_fetch_array($result)) {
          $id = $row['u_id'];
          $name = $row['u_name'];
          $sex = $row['u_email'];
          $age = $row['u_add'];
          $add = $row['u_phone'];
          $time1 = $row['u_mtno'];
          echo '<tr><td>'.$id.'</td>
                <td>'.$name.'</td>
                <td>'.$sex.'</td>
                <td>'.$age.'</td>
                <td>'.$add.'</td>
                <td>'.$time1.'</td></tr>';
      }
    }
      echo '</table></center>';

      }?>
  </div>

  <div id="tariff" class="w3-container city">
   <h1>Tariff</h1>
   <?php 
        {
         $result = mysqli_query($con,"SELECT * FROM rate ") or die('Error');
         $count=mysqli_num_rows($result);
        echo  '<center><table style="width:100%; border-spacing:2;"<tr><th><b>Rate ID</b></th><th><b>Rate Name</b></th><th><b>Price</b></th></tr>';
        if($count>0)
        {
       while($row = mysqli_fetch_array($result)) {
          $id = $row['r_id'];
          $name = $row['r_name'];
          $rate = $row['r_rate'];
          echo '<tr><td>'.$id.'</td>
                <td>'.$name.'</td>
                <td>'.$rate.'</td></tr>';
      }
    }
      echo '</table></center>';

      }?>
  </div>

  <div id="pay" class="w3-container city">
   <h1>Payments</h1>
   <?php 
        {
        echo  '<br><br><center><table style="width:100%; border-spacing:2;"<tr><th><b>Bill No</b></th><th><b>Isuue Date </b></th><th><b>Due Date</b></th><th><b> Total</b></th><th><b>Payment </b></th><th><b>User ID </b></th></tr>';
         $result = mysqli_query($con,"SELECT * FROM bildetails ") or die('Error');
         $count=mysqli_num_rows($result);
        if($count>0)
        {
       while($row = mysqli_fetch_array($result)) {
          $id = $row['uid'];
          $bno = $row['bno'];
          $idate = $row['issuedate'];
          $ddate = $row['duedate'];
          $total = $row['total'];
          $pay = $row['payment'];
          echo '<tr><td>'.$bno.'</td>
                <td>'.$idate.'</td>
                <td>'.$ddate.'</td>
                <td>'.$total.'</td>
                <td>'.$pay.'</td>
                <td>'.$id.'</td></tr>';
      }
    }
      echo '</table></center>';

      }?>
  </div>
  <div id="feed" class="w3-container city">
   <h1>Feedback</h1>
   <?php 
        {
         $result = mysqli_query($con,"SELECT * FROM feedback ") or die('Error');
         $count=mysqli_num_rows($result);
        echo  '<center><table style="width:100%; border-spacing:2;"<tr><th><b>S.No</b></th><th><b>User Name</b></th><th><b>E-Mail</b></th><th><b>Phone Number</b></th><th><b>Message</b></th></tr>';
        $c=1;
        if($count>0)
        {
       while($row = mysqli_fetch_array($result)) {
          $phno = $row['phno'];
          $name = $row['name'];
          $email = $row['email'];
          $msg = $row['msg'];
          echo '<tr><td>'.$c++.'</td>
                <td>'.$name.'</td>
                <td>'.$phno.'</td>
                <td>'.$email.'</td>
                <td>'.$msg.'</td></tr>';
      }
    }
      echo '</table></center>';

      }?>
  </div>

  <div class="w3-container w3-light-grey w3-padding">
   <button class="w3-button w3-right w3-white w3-border" 
   onclick="document.getElementById('id04').style.display='none'">Close</button>
  </div>
 </div>
</div>


<script>
document.getElementsByClassName("tablink")[0].click();

function openCity(evt, cityName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("city");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
    tablinks[i].classList.remove("w3-light-grey");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.classList.add("w3-light-grey");
}
</script>


      </div>
    </div>
    <div id="footer">
      <p>Copyright &copy; EBMS</p>
    </div>
  </div>
</body>
</html>
