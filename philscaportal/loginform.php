<?php
include('pdo.php');
login();
?>
<!DOCTYPE html>
<html>
<head>
	<title>LOGIN FORM</title>
	<link rel="stylesheet" type="text/css" href="registyle.css">
	<script type="text/javascript" defer src="validation.js"></script>
</head>
<body>
	<center><div class="line">
		_________________________________________________________________
	</div></center>
	<center><div class="pic">
		<img src="philsca.png">
	</div></center>
	<div class="title">
		<h1 align="CENTER">PHILIPPINE STATE COLLEGE OF AERONAUTICS</h1>
	</div>
	<div class="alertt" id="alert2" style="font-weight: bold;"></div>
	<div class="alerttt" id="alert3" style="font-weight: bold;"></div>

		<center><div class="container1">
			<div class="icon14">
				<img src="10.png">
			</div>
			<div class="icon15">
				<img src="11.png">
			</div>
		<form id="fOrm" action="" method="POST">	
			<div class="inputControls1">
				<div class="inputControlUser">
					<div class="inputTextUser">
						<input type="text" id="user" name="user" value="" placeholder="Username">
					</div>
				</div>
				<div class="inputControlPass">
					<div class="inputTextPass">
						<input type="Password" id="pass" name="pass" value="" placeholder="Password">
					</div>
				</div>
			</div>
			<div class="inputText1">
					<input type="submit" name="login" value="Log-in">
					<p>Dont have an account? <a href="registrationform.php">Click here</a></p>
			</div>
		</form>
	</div></center>
	<center><div class="line11">
		_________________________________________________________________
	</div></center>
</body>
</html>