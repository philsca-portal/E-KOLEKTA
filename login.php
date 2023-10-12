<!DOCTYPE html>
<html>
<head>
	<title>Login Form</title>
	<link rel="stylesheet" type="text/css" href="css/login.css">
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
    <script src="https://kit.fontawesome.com/19d0cdd924.js" crossorigin="anonymous"></script>
    <script src="loginfiles/login.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
	<style type="text/css">
		.formm{
			padding: 30px 40px;
		}
		.form-controll{
			margin-bottom: 10px;
			padding-bottom: 20px; 
			position: relative;
		}
		.form-controll label{
			display: inline-block;
			margin-bottom: 5px;
		}
		.form-controll input{
			border: 2px solid #f0f0f0;
			border-radius: 4px;
			display: block;
			font-family: inherit;
			font-size: 14px;
			padding: 10px;
			width: 100%;
		}

		.form-controll.success input{
			border-color: #2ecc71;
		}
		.form-controll.error input{
			border-color: #e74c3c;
		}
		.form-controll i{
			position: absolute;
			top: 37px;
			right: 10px;
			visibility: hidden;
		}
		.form-controll.success i.fa-check-circle{
			color: #2ecc71;
			visibility: visible;
		}
		.form-controll.error i.fa-exclamation-circle{
			color: #e74c3c;
			visibility: visible;	
		}
		.form-controll small{
			visibility: hidden;
			position: absolute;
			bottom: 0;
			left: 0;
		}
		.form-controll.success small{
			color: #2ecc71;
			visibility: visible;
		}
		.form-controll.error small{
			color: #e74c3c;
			visibility: visible;
		}
		.formm .button input{
			border: 2px solid black;
			border-radius: 4px;
			display: block;
			font-family: inherit;
			font-size: 16px;
			width: 100%;
			padding: 10px;
		}
		.containerr{
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
		.title{
			position: relative;
			float: left;
			left: -330px;
			line-height: 100px;	
		}
		.title h2{
			letter-spacing: 5px;
			transform: translateY(30px);
		}
	</style>
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

	<div class="containerr">
		<div class="headerr">
			<h2>Login</h2>
		</div>
		<form class="formm" id="formm" action="loginfiles/login_action.php" method="POST">
			<div class="form-controll">
                <label>Username</label>
                <input type="text" id="user" name="user" placeholder="Enter your Username">
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation-circle"></i>
                <small></small>
            </div>
            <div class="form-controll">
                <label>Password</label>
                <input type="password" id="pass" name="pass" placeholder="Enter your Password">
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation-circle"></i>
                <small></small>
            </div>
            <input type="text" id="status" name="status" value="Logged-in" hidden>
            <div class="button">
                <input type="submit" id="submit" name="insert" value="Log-in">
            </div>
              <div class="alreadyhaveanaccount">
                <p>Don't have an account? <a href="register.php">Click here</a></p> 
                <p>Change password?<button type="button" id="trigger" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#exampleModalz" style="height: 35px; width: 100px; margin-left: 5px;">Click here</button></p>
            </div>
		</form>
	</div>
	<div class="modal fade" id="exampleModalz" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-xl">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel" style=" font-size: 20px; font-weight: bold;">Enter your admin account to change password</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<div>
						<form class="form" id="formmm" action="loginfiles/change_password.php" method="POST">
							<div class="form-control">
								<label>Username</label>
								<input type="text" id="user" name="user1" placeholder="Enter your Username">
								<i class="fas fa-check-circle"></i>
								<i class="fas fa-exclamation-circle"></i>
								<small></small>
							</div>
							<div class="form-control">
								<label>Current-Password</label>
								<input type="password" id="pass" name="pass1" placeholder="Enter your Password">
								<i class="fas fa-check-circle"></i>
								<i class="fas fa-exclamation-circle"></i>
								<small></small>
							</div>
								<div class="form-control">
								<label>New-Password</label>
								<input type="password" id="pass" name="pass2" placeholder="Enter your Password">
								<i class="fas fa-check-circle"></i>
								<i class="fas fa-exclamation-circle"></i>
								<small></small>
							</div>
							<input type="text" id="status1" name="status1" value="Logged-out" hidden>
							<div class="button">
								<input type="submit" id="submit" name="insert1" value="Enter">
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
    <div class="footer">
		<footer>
			
		</footer>
	</div>


</body>
</html>