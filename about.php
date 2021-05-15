
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
          <li><a href="login.php">Log In</a></li>
          <li><a href="index.php">Home</a></li>
          <li class="selected"><a href="about.php">About Us</a></li>
          <li><a href="contact.php">Contact Us</a></li>
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
        <h1>Welcome to the About Page</h1>       
        <p>The mission of <a href="index.php">EBMS</a> is to ensure complete customer satisfaction by providing quality & reliable service to its consumers. In order to achieve the same EBMS is devloped to give the best billing system.</p>

        <h3>Vision of EBMS</h3>
        <p><h4>Purpose:</h4> We exist to improve the conditions of society and contribute to the users through this portal.</p>

        <h3>Our Core Values</h3>
        <ul>
            <li>Customer focus and responsiveness.</li>
            <li>Commercial efficiency.</li>
            <li>Result oriented activities.</li>
            <li> Employee care and welfare.</li>
        </ul>
      </div>
    </div>
    <div id="footer">
      <p>Copyright &copy; EBMS</p>
    </div>
  </div>
</body>
</html>
