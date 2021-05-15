
<!DOCTYPE html>
<html>
    <head> 
    <title>Login</title>
    <link rel="shortcut icon" href="../style/favicon.ico"> 
    <link rel="stylesheet" type="text/css" href="style/css/style.css" />
	<script src="style/js/modernizr.custom.63321.js"></script>
    </head>
    <body>
    	<div class="container">
    		<header>
				<h1><strong>Login </strong></h1>
			</header>
			<section class="main">
				<form class="form-1" action="login_code.php" method="POST">
					<p class="field">
						<input type="text" id="username" name="username" placeholder="User ID">
						<i class="icon-user icon-large"></i>
					</p>
						<p class="field">
							<input type="password" id="password" name="password" placeholder="Password">
							<i class="icon-lock icon-large"></i>
					</p>
					<p class="submit">
						<button type="submit" name="submit"><i class="icon-arrow-right icon-large"></i></button>
					</p>
				</form>
			</section>
        </div>
    </body>
</html>