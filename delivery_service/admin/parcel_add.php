<?php
include ('../pdo.php');
generateRandomString();
parcel_add();
parcel_track_add();
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
        <div class="header">
            <h2 style="text-align: center;">BOOKING DELIVERY</h2>
        </div>
        <form class="form" id="form" action="givereferencecode.php" method="POST">
            <div class="headerr" style="background:#FAD02C; margin-bottom: 15px;">
             <h2 style="text-align: center;">SENDER'S INFORMATION</h2>
             </div>
             <div class="form-group">
                <input type="hidden" id="code" name="code" class="form-control" placeholder="Enter Parcel Codes" value="<?php echo generateRandomString();?>">
            </div>
            <div class="form-control">
                <label>First Name</label>
                <input type="text" id="fName" name="fName" placeholder="Enter your First Name">
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation-circle"></i>
                <small></small>
            </div>
            <div class="form-control">
                <label>Middle</label>
                <input type="text" id="mName" name="mName" placeholder="Enter your Middle Name">
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
                <label>Contact Number</label>
                <input type="" id="cOntact" name="cOntact" placeholder="Enter your Contact #">
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation-circle"></i>
                <small></small>
            </div>
            <div class="form-control">
                <label>Address</label>
                <input type="text" id="aDdress" name="aDdress" placeholder="Enter your Address">
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation-circle"></i>
                <small></small>
            </div>
            <div class="headerr" style="background:#FAD02C; margin-bottom: 15px;">
            <h2 style="text-align: center;">RECIPIENT'S INFORMATION</h2>
             </div>
            <div class="form-control">
                <label>First Name</label>
                <input type="text" id="FName" name="FName" placeholder="Enter your First Name">
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation-circle"></i>
                <small></small>
            </div>
            <div class="form-control">
                <label>Middle</label>
                <input type="text" id="MName" name="MName" placeholder="Enter your Middle Name">
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation-circle"></i>
                <small></small>
            </div>
            <div class="form-control">
                <label>Last Name</label>
                <input type="text" id="LName" name="LName" placeholder="Enter your Last Name">
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation-circle"></i>
                <small></small>
            </div>
            <div class="form-control">
                <label>Contact Number</label>
                <input type="" id="COntact" name="COntact" placeholder="Enter your Contact #">
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation-circle"></i>
                <small></small>
            </div>
            <div class="form-control">
                <label>Destination</label>
                <input type="text" id="DEstination" name="DEstination" placeholder="Enter the Destination">
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation-circle"></i>
                <small></small>
            </div>
            <div class="headerr" style="background:#FAD02C; margin-bottom: 15px;">
            <h2 style="text-align: center;">SHIPMENT INFORMATION</h2>
        </div>
            <div class="form-control">
                <label>Type:</label>
                <select name="tYpe" id="tYpe" select style="border: 2px solid #f0f0f0;
                                                            border-radius: 4px;
                                                            display: block;
                                                            font-family: inherit;
                                                            font-size: 14px;
                                                            padding: 10px;
                                                            width: 100%;">
                    <option value="Document"> Document </option>
                    <option value="Pouch"> Pouch </option>
                    <option value="Small Box"> Small Box </option>
                    <option value="Medium Box"> Medium Box </option>
                    <option value="Large Box"> Large Box </option>
                </select>
            </div>
            <div class="form-control">
                <label>Size (WxH inches):</label>
                <input type="text" id="sIze" name="sIze" placeholder="Enter Size">
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation-circle"></i>
                <small></small>
            </div>
            <div class="form-control">
                <label>Weight:</label>
                <input type="text" id="wEight" name="wEight" placeholder="Enter Weight">
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation-circle"></i>
                <small></small>
            </div>
            <div class="form-control">
                <label>Class:</label>
                <select name="cLass" id="cLass" select style="border: 2px solid #f0f0f0;
                                                            border-radius: 4px;
                                                            display: block;
                                                            font-family: inherit;
                                                            font-size: 14px;
                                                            padding: 10px;
                                                            width: 100%;">
                    <option value="Regular - 50 php"> Regular - 50 php </option>
                    <option value="Silver - 100 php"> Silver - 100 php </option>
                    <option value="Platinum - 150 php"> Platinum - 150 php </option>
                </select>
            </div>
            <div class="headerr" style="background:#FAD02C; margin-bottom: 15px;">
            <h2 style="text-align: center;">PICK-UP INFORMATION</h2>
        </div>
           <div class="form-control">
                <label>Type of Delivery:</label>
                <select name="dElivery" id="dElivery" select style="border: 2px solid #f0f0f0;
                                                            border-radius: 4px;
                                                            display: block;
                                                            font-family: inherit;
                                                            font-size: 14px;
                                                            padding: 10px;
                                                            width: 100%;">
                    <option value="Deliver to Recipient's Address"> Deliver to Recipient's Address </option>
                    <option value="Pick-up at the nearest Branch"> Pick-up at the nearest Branch </option>
                </select>
            </div>
            <div class="form-control">
                <label>Type of Pick-up:</label>
                <select name="pIck" id="pIck" select style="border: 2px solid #f0f0f0;
                                                            border-radius: 4px;
                                                            display: block;
                                                            font-family: inherit;
                                                            font-size: 14px;
                                                            padding: 10px;
                                                            width: 100%;">
                    <option value="Pick-up at your Address"> Pick-up at your Address </option>
                    <option value="Pick-up at the nearest Branch"> Pick-up at the nearest Branch </option>
                </select>
            </div>
            <div class="form-control">
                <label>Date of Pick-up:</label>
                <input type="Date" id="dAte" name="dAte" placeholder="Enter Date of Pick-up">
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation-circle"></i>
                <small></small>
            </div>
            <div class="form-control">
                <label>Time of Pick-up:</label>
                <input type="time" id="tIme" name="tIme" placeholder="Enter Time of Pick-up">
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation-circle"></i>
                <small></small>
            </div>
            <div class="form-group" style="visibility: hidden;">
                <label>Status:</label>
                <input type="" name="sTatus" id="sTatus" value="0">
            </div> 
         <div class="buttonn">
                <input type="submit" id="submitparcel" name="submit_parcel" value="Submit">
            </div>
            <div class="button">
                <a href="../home.php" class="btn btn-danger">Close</a>
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
					<p>Login</p>
					<p>Create an account</p>
				</div>
				<div class="menu2">
					<h2> Services </h2>
					<p>Book a Pick-up</p>
					<p>Track & Trace </p>
				</div>
			</div>
		</footer>
	</div>
</body>
</html>