<?php
include ('../pdo.php');
parcel_add();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Register Form</title>
     <meta name="viewport" content="width=device-width, initial-scale=1"> 
     <script src="https://kit.fontawesome.com/19d0cdd924.js" crossorigin="anonymous"></script>
     <link rel="stylesheet" type="text/css" href="../styler.css">
     <script src="parcel_add_validation.js"></script>
</head>
<style type="text/css">
    .header{
        background: #262626;
        border-bottom: 1px solid #f0f0f0;
        padding: 20px 40px;
    }
    .headerr{
        background: #262626;
    }
    .header h2{
        color: white;
    }
    .headerr h2{
        color: #262626;
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
}
    .containerrr{
    background-color: #fff;
    border-radius: 5px;
    box-shadow: 0 2px 5px rgba(0,0,0,0.3);
    overflow: hidden;
    width: 450px;
    max-width: 100%;
    margin-top: 10px;
    margin-left: 500px;
    margin-bottom: 150px;
}
    .containerrr input{
    background: #FAD02C;
    color:  #262626;
}
 .containerrr .buttonn{
    margin-bottom: 10px;
}
    .form .buttonn input{
    border: 2px solid black;
    border-radius: 4px;
    display: block;
    font-family: inherit;
    font-size: 16px;
    width: 100%;
    padding: 10px;
    background-color: #FAD02C; 
    margin-bottom: 10px;
}
    form .button a{
    border: 2px solid black;
    border-radius: 4px;
    display: block;
    font-family: inherit;
    font-size: 16px;
    width: 345.5px;
    padding: 10px;
    background-color: #FAD02C; 
    text-align: center;
    color:  #262626;
}
</style>
<body>


<div class="header">
        <header>
            <div class="wrapper">
                <div class="logo">
                    <img class="logo" src="../logo1.png">
                </div>
                <nav>
                <a href="../home.php">Home</a> <a href="../book.php">Book</a> <a href="../track.php">Track</a> <a href="../services.php">Services</a> <a href="../aboutus.php">About Us</a>
                </nav>
            </div>
        </header>
</div>

<div class="container">

    <center> <h3 style="font-family: 'Open Sans', sans-serif; ">HELLO,<?php echo $_POST['fName']; ?>THIS IS YOUR REFERENCE CODE:</h3><h1 style="font-family: 'Open Sans', sans-serif; color: green; "><?php echo $_POST['code']; ?></h1><h3 style="font-family: 'Open Sans', sans-serif; ">Please settle the Payment: With Our Courier through Cash on Delivery. The total amount of payment is</h3><h1 style="font-family: 'Open Sans', sans-serif; color:green; "><?php echo $_POST['cLass']; ?></h1></center>
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