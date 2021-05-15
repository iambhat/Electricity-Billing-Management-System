
<!DOCTYPE html>
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
          <li class="selected"><a href="home.php">Home</a></li>
          <li><a href="profile.php">Consumer Profile</a></li>
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
        <h1>Welcome to the Electricity Billing Portal</h1>       
        
      </div>
    </div>
    <div id="footer">
      <p>Copyright &copy; EBMS</p>
    </div>
  </div>
</body>
</html>
