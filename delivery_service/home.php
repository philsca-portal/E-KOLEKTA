<html>
    <head>
        <title>JJRGB Delivery Services</title>	
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="home.css">

		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Online Chating Bot</title>

		<style>
			/* FOOTER */
			.footer{
				position: relative;
				margin-top: 0px;
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
				text-align: left;
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
			}
			footer{
				display: flex;
			}
			.tabs{
				display: flex;
				margin-left: 450px;
			}
			.tabs h2{
				margin-left: 100px;
				color: white;
				padding-top: 80px;
				font-size: 24px;
			}
			.tabs p{
				margin-left: 100px;
				color: white;
			}
			#messageDisplaySection{
			    background:#babdbf;
			}
			.usersMessages{
			    background: white;
			}
			.faqs{
				background:#babdbf;
			}
			body{
				background:#babdbf;
			}
			#userInput{
				background:#babdbf;
			}
		</style>
	</head>

	<body>
		<!-- NAV BAR -->
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

		<!-- SLIDER -->

		<div class="slider">
		<!-- fade css -->
		<div class="myslide fade">
			<div class="txt">
				<h1>Send a Package</h1>
				<p>Avail our services in just few clicks!</p>
				<div id="button"> <a href="book.php"> <button> BOOK NOW </button> </a> </div>
			</div>
			<img src="A.jpg" style="width: 100%; height: 100%;">
		</div>
		
		<div class="myslide fade">
			<div class="txt">
				<h1>Track and Trace</h1>
				<p>Keep track of your parcels through JJRGB Online</p>
				<div id="button"> <a href="track.php"> <button> TRACK </button> </a> </div>
			</div>
			<img src="B.jpg" style="width: 100%; height: 100%;">
		</div>
		
		<div class="myslide fade">
			<div class="txt">
				<h1>Services</h1>
				<p>Learn about our services offerend and how we do them </p>
				<div id="button"> <a href="services.php"> <button> VIEW OUR SERVICES </button> </a> </div>
			</div>
			<img src="C.jpg" style="width: 100%; height: 100%;">
		</div>
		
		<div class="myslide fade">
			<div class="txt">
				<h1>Contact Us</h1>
				<p>Got any questions? We got you covered!</p>
				<div id="button"> <a href="#contact-us"> <button> CONTACT US </button> </a> </div>
			</div>
			<img src="D.jpg" style="width: 100%; height: 100%;">
		</div>

		<!-- /fade css -->
		
		<!-- onclick js -->
		<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  		<a class="next" onclick="plusSlides(1)">&#10095;</a>
		
		<div class="dotsbox" style="text-align:center">
			<span class="dot" onclick="currentSlide(1)"></span>
			<span class="dot" onclick="currentSlide(2)"></span>
			<span class="dot" onclick="currentSlide(3)"></span>
			<span class="dot" onclick="currentSlide(4)"></span>
		</div>
		<!-- /onclick js -->
	</div>

		
		

	</body>

<section2>
	<div id="contact-us" class="faqs">
			<div id="contact">
				<h1> Contact Us! </h1>
				<h3> JJRGB ChatBot </h3>
				<p> Drop your questions here and our ChatBot will get back to you right away! </p>

				<h3> Got other questions? </h3>
				<p>We would love to hear from you!
				If you would prefer to email us directly, you may reach us at customerservice@jjrgb.com
				For inquiries, please feel free to contact us here and we will get back to you as soon as possible.
				</p>
				<h3> You may also follow us on our social media! </h3>
				<p> facebook.com/jjrgb_delivery </p>

			</div>
			<div id="container">
				<div id="screen">
					<div id="header">JJRGB CHATBOT</div>
					<div id="messageDisplaySection">
						<!-- bot messages -->
						<!-- <div class="chat botMessages">Hello there, how can I help you?</div> -->

						<!-- usersMessages -->
						<!-- <div id="messagesContainer">
						<div class="chat usersMessages">I need your help to build a website.</div>
					</div> -->
				</div>
					<!-- messages input field -->
					<div id="userInput">
						<input type="text" name="messages" id="messages" autocomplete="OFF" placeholder="Type Your Message Here." required>
						<input type="submit" value="Send" id="send" name="send">
					</div>
				</div>
			</div>


		</div>

		<!-- jQuery CDN -->
		<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
		
		<!-- Jquery Start -->
		<script>
			$(document).ready(function(){
				$("#messages").on("keyup",function(){

					if($("#messages").val()){
						$("#send").css("display","block");
					}else{
						$("#send").css("display","none");
					}
				});
			});
			// when send button clicked
			$("#send").on("click",function(e){
				$userMessage = $("#messages").val();
				$appendUserMessage = '<div class="chat usersMessages">'+ $userMessage +'</div>';
				$("#messageDisplaySection").append($appendUserMessage);

				// ajax start
				$.ajax({
					url: "bot.php",
					type: "POST",
					// sending data
					data: {messageValue: $userMessage},
					// response text
					success: function(data){
						// show response
						$appendBotResponse = '<div id="messagesContainer"><div class="chat botMessages">'+data+'</div></div>';
						$("#messageDisplaySection").append($appendBotResponse);
					}
				});
				$("#messages").val("");
				$("#send").css("display","none");
			});
		</script>
</section2>

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

	<script src="slider.js"></script>



</html>
