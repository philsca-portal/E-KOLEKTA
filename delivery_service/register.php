<?php
include ('pdo.php');
register();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Register Form</title>
     <meta name="viewport" content="width=device-width, initial-scale=1"> 
     <script src="https://kit.fontawesome.com/19d0cdd924.js" crossorigin="anonymous"></script>
     <link rel="stylesheet" type="text/css" href="styler.css">
     <script src="registervalidation.js"></script>
</head>
<body>


<div class="header">
		<header>
			<div class="wrapper">
				<div class="logo">
					<img class="logo" src="logo1.png">
				</div>
				<nav>
                <a href="home.php">Home</a> <a href="book.php">Book</a> <a href="track.php">Track</a> <a href="services.php">Services</a> <a href="aboutus.php">About Us</a>
				</nav>
			</div>
		</header>
</div>

<div class="container">
        <div class="headerr">
            <h2>Register</h2>
        </div>
        <form class="form" id="form" action="" method="POST">
            <div class="form-control">
                <label>First Name</label>
                <input type="text" id="fName" name="fName" placeholder="Enter your First Name">
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation-circle"></i>
                <small></small>
            </div>
            <div class="form-control">
                <label>Last Name</label>
                <input type="text" id="lName" name="lName" placeholder="Enter your Last Name">
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation-circle"></i>
                <small></small>
            </div>
            <div class="form-control">
                <label>Contact #</label>
                <input type="" id="contact" name="contact" placeholder="Enter your Contact #">
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation-circle"></i>
                <small></small>
            </div>
            <div class="form-control">
                <label>Email</label>
                <input type="Text" id="email" name="email" placeholder="Enter your Email">
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation-circle"></i>
                <small></small>
            </div>
            <div class="form-control">
                <label>Address</label>
                <input type="text" id="address" name="address" placeholder="Enter your Address">
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation-circle"></i>
                <small></small>
            </div>
            <div class="form-control">
                <label>Username</label>
                <input type="text" id="username" name="username" placeholder="Enter your Username">
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
			<div class="brand">
				<h1> JJRGB Delivery Services</h1>
				<h3> Country's Leading Courier Services Provider </h3>
				<p class="copyright-text">Copyright &copy; 2021 All Rights Reserved by JJRGB</p>
			</div>	
			
			<div class="tabs">
                <div class="menu1">
                    <h2> My Account </h2>
                    <a href="login.php" style="text-decoration: none;"><p>Login</p></a>
                    <a href="register.php" style="text-decoration: none;"><p>Create an account</p></a>
                </div>
                <div class="menu2">
                    <h2> Services </h2>
                    <a href="book.php" style="text-decoration: none;"><p>Book a Pick-up</p></a>
                    <a href="track.php"style="text-decoration: none;"><p>Track & Trace </p></a>
                </div>
            </div>
		</footer>
	</div>
</body>
</html>