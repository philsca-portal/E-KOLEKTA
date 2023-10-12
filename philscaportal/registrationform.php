<?php
include('pdo.php');
register();
?>
<!DOCTYPE html>
<html>
<head>
	<title>REGISTRATION FORM</title>
	<link rel="stylesheet" type="text/css" href="registyle.css">
	<script type="text/javascript" defer src="validationn.js"></script>
</head>
<body>
	<center><div class="line">
		_________________________________________________________________
	</div></center>
	<center><div class="pic">
		<img src="philsca.png">
	</div></center>ss
	<div class="title">
		<h1 align="CENTER">PHILIPPINE STATE COLLEGE OF AERONAUTICS</h1>
	</div>
	<div class="alert" id="alert" style="font-weight: bold;"></div>
	<div class="alert1" id="alert1" style="font-weight: bold;"></div>

		<center><div class="container">
			<div class="icon">
				<img src="1.6.png">
			</div>
			<div class="icon2">
				<img src="1.6.png">
			</div>
			<div class="icon3">
				<img src="1.6.png">
			</div>
			<div class="icon4">
				<img src="1.png">
			</div>
			<div class="icon5">
				<img src="4.png">
			</div>
			<div class="icon6">
				<img src="5.png">
			</div>
			<div class="icon7">
				<img src="2.png">
			</div>
			<div class="icon8">
				<img src="6.png">
			</div>
			<div class="icon9">
				<img src="7.png">
			</div>
			<div class="icon10">
				<img src="8.png">
			</div>
			<div class="icon11">
				<img src="9.png">
			</div>
			<div class="icon12">
				<img src="10.png">
			</div>
			<div class="icon13">
				<img src="11.png">
			</div>
			<div class="icon16">
				<img src="11.png">
			</div>
		<form id="porma" action="" method="POST">
			<div class="inputControls">
				<div class="inputControl">
					<div class="inputText1.5">
						<input type="text" id="fName" name="fName" value="" placeholder="Firstname">
					</div>
				</div>
				<div class="inputControl2">
					<div class="inputText2">
						<input type="text" id="mName" name="mName" value="" placeholder="Middlename">
					</div>
				</div>
				<div class="inputControl3">
					<div class="inputText3">
						<input type="text" id="lName" name="lName" value="" placeholder="Lastname">
					</div>
				</div>
				<div class="inputControlB">
					<div class="inputTextB">
						<input type="date" id="bDay" name="bDay" value="" placeholder="Birthday">
					</div>
				</div>
				<div class="inputControlG">
					<div class="inputTextG">
						<input type="text" id="gender" name="gender" value="" placeholder="Gender">
					</div>
				</div>
				<div class="inputControlC">
					<div class="inputTextC">
						<input type="text" id="contact" name="contact" value="" placeholder="Contact No.">
					</div>
				</div>
				<div class="inputControl5">
					<div class="inputText5">
						<input type="text" id="email" name="email" value="" placeholder="Email Adress">
					</div>
				</div>
				<div class="inputControlH">
					<div class="inputTextH">
						<input type="text" id="home" name="home" value="" placeholder="Home #">
					</div>
				</div>
				<div class="inputControlS">
					<div class="inputTextS">
						<input type="text" id="street" name="street" value="" placeholder="Street">
					</div>
				</div>
				<div class="inputControlBa">
					<div class="inputTextBa">
						<input type="text" id="barangay" name="barangay" value="" placeholder="Barangay">
					</div>
				</div>
				<div class="inputControlM">
					<div class="inputTextM">
						<input type="text" id="city" name="city" value="" placeholder="City/Municipality">
					</div>
				</div>
				<div class="inputControlUsername">
					<div class="inputTextUs">
						<input type="text" id="username" name="username" value="" placeholder="Username">
					</div>
				</div>
				<div class="inputControlPassword">
					<div class="inputTextPa">
						<input type="password" id="password" name="password" value="" placeholder="Password">
					</div>
				</div>
				<div class="inputControlConPassword">
					<div class="inputTextCo">
						<input type="password" id="repassword" name="repassword" value="" placeholder="Confirm Password">
					</div>
				</div>
			</div>
			<div class="inputText">
					<input type="submit" name="submit" value="Sign Up">
					<p>Already have an account? <a href="loginform.php">Click here</a></p>
			</div>
		</form>
	</div></center>
	<center><div class="line1">
		_________________________________________________________________
	</div></center>
</body>
</html>