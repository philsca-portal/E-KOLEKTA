<?php  
include ('pdo.php');
login();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login Form</title>
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
    <script src="https://kit.fontawesome.com/19d0cdd924.js" crossorigin="anonymous"></script>
    <script src="loginvalid.js"></script>
</head>
<style type="text/css">
	
body{
	font-family: 'Open Sans', sans-serif;
	align-items: center;
	justify-content: center;
}

.container{
	background-color: #fff;
	border-radius: 5px;
	box-shadow: 0 2px 5px rgba(0,0,0,0.3);
	overflow: hidden;
	width: 450px;
	max-width: 100%;
	margin-top: 90px;
	margin-left: 500px;
	margin-bottom: 150px;
}


.headerr{
	background: #f7f7f7;
	border-bottom: 1px solid #f0f0f0;
	padding: 20px 40px;
}
.headerr h2{
	margin: 0;
}
.form{
	padding: 30px 40px;
}
.form-control{
	margin-bottom: 10px;
	padding-bottom: 20px; 
	position: relative;
}
.form-control label{
	display: inline-block;
	margin-bottom: 5px;
}
.form-control input{
	border: 2px solid #f0f0f0;
	border-radius: 4px;
	display: block;
	font-family: inherit;
	font-size: 14px;
	padding: 10px;
	width: 100%;
}

.form-control.success input{
	border-color: #2ecc71;
}
.form-control.error input{
	border-color: #e74c3c;
}
.form-control i{
	position: absolute;
	top: 37px;
	right: 10px;
	visibility: hidden;
}
.form-control.success i.fa-check-circle{
	color: #2ecc71;
	visibility: visible;
}
.form-control.error i.fa-exclamation-circle{
	color: #e74c3c;
	visibility: visible;	
}
.form-control small{
	visibility: hidden;
	position: absolute;
	bottom: 0;
	left: 0;
}
.form-control.success small{
	color: #2ecc71;
	visibility: visible;
}
.form-control.error small{
	color: #e74c3c;
	visibility: visible;
}
.form .button input{
	border: 2px solid black;
	border-radius: 4px;
	display: block;
	font-family: inherit;
	font-size: 16px;
	width: 100%;
	padding: 10px;
}
.alreadyhaveanaccount p{
	text-align: center; 
	padding-top: 10px;
}

/* NAV BAR */
@import url('https://fonts.googleapis.com/css2?family=Titillium+Web:wght@300&display=swap');

* {
	margin: 0;
	padding: 0;
	scroll-behavior: smooth;
}

.wrapper {
	width: 1170px;
	margin: 0 auto;
}

header {
	height: 100px;
	background: #262626;
	width: 100%;
	z-index: 10;
	position: fixed;
	position: relative;
}

.logo {
	width: 30%;
	float: left;
	line-height: 100px;
}
.logo a {
	text-decoration: none;
	font-size: 30px;
	font-family: poppins;
	color: #fff;
	letter-spacing: 5px;
}
nav {
	float: right;
	line-height: 100px;
}
nav a {
	text-decoration: none;
	font-family: 'Titillium Web', sans-serif;
	letter-spacing: 4px;
	font-size: 20px;
	margin: 0 10px;
	color: #fff;
}

/** FOOTER **/

.footer{
	position: relative;
	margin-top: 0px;
	font-family: 'Titillium Web', sans-serif;
}


.wrapper-footer {
	width: 1170px;
	margin: 0 auto;
}


footer {
	height: 250px;
	background: #262626;
	width: 100%;
	z-index: 10;
	font-family: 'Titillium Web', sans-serif;
}


foot {
	float: right;
	line-height: 100px;
	padding-top: 80px;
}

foot a {
	text-decoration: none;
	letter-spacing: 4px;
	font-size: 20px;
	margin: 0 10px;
	color: #fff;
}

.copyright-text
{
  margin-left: 100px;
  color: white;
  padding-top: 0px;
  font-size: 14px;
}

footer h1{
	margin-left: 100px;
	color: white;
	padding-top: 80px;
	font-size: 24px;
}

footer h3{
	margin-left: 100px;
	color: white;
	font-size: 16px;
	font-family: 'Titillium Web', sans-serif;
}

footer{
	display: flex;
}

.tabs{
	display: flex;
	margin-left: 300px;
}

.tabs h2{
	margin-left: 100px;
	color: white;
	padding-top: 80px;
	font-size: 24px;
	font-family: 'Titillium Web', sans-serif;
}

.tabs p{
	margin-left: 100px;
	color: white;
	font-family: 'Titillium Web', sans-serif;
}


</style>
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
			<h2>Login</h2>
		</div>
		<form class="form" id="form" action="" method="POST">
			<div class="form-control">
                <label>Username</label>
                <input type="text" id="user" name="user" placeholder="Enter your Username">
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation-circle"></i>
                <small></small>
            </div>
            <div class="form-control">
                <label>Password</label>
                <input type="password" id="pass" name="pass" placeholder="Enter your Password">
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation-circle"></i>
                <small></small>
            </div>
            <div class="button">
                <input type="submit" id="submit" name="login" value="Log-in">
            </div>
            <div class="alreadyhaveanaccount">
                <p>Don't have an account? <a href="register.php">Click here</a></p>
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