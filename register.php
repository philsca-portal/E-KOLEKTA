<!DOCTYPE html>
<html>
<head>
	<title>Register Form</title>
	<link rel="stylesheet" type="text/css" href="css/login.css">
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
    <script src="https://kit.fontawesome.com/19d0cdd924.js" crossorigin="anonymous"></script>
    <script src="registerfiles/registervalidation.js"></script>

</head>
<body>

    <div class="header">
		<header>
			<div class="wrapper">
				<div class="logo">
					<img class="logo" src="images/ekalaticon.png">
				</div>
				<div class="title">
					<h2>E-KOLEKTA</h2>
				</div>
			</div>
		</header>
	</div>

	<div class="container">
		<div class="headerr">
			<h2>Register</h2>
		</div>
		<form class="form" id="form" action="registerfiles/register_action.php" method="POST">
			  <div class="form-control">
                <label>Name</label>
                <input type="text" id="nAme" name="nAme" placeholder="Enter your Name">
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation-circle"></i>
                <small></small>
            </div>
            <div class="form-control">
                <label>Username</label>
                <input type="text" id="user" name="user" placeholder="Enter your Username">
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation-circle"></i>
                <small></small>
            </div>
            <div class="form-control">
                <label>Password</label>
                <input type="password" id="password" name="password" placeholder="Enter your Password">
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation-circle"></i>
                <small></small>
            </div>
            <div class="form-control">
                <label>Confirm Password</label>
                <input type="password" id="repassword" name="repassword" placeholder="Confirm your Password">
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation-circle"></i>
                <small></small>
            </div>
            <div class="button">
                <input type="submit" id="submit" name="submit" value="Submit">
            </div>
            <div class="alreadyhaveanaccount">
                <p>Already have an account? <a href="login.php">Click here</a></p>
            </div>
		</form>
	</div>

    <div class="footer">
		<footer>
			
		</footer>
	</div>


</body>
</html>