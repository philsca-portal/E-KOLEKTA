<!DOCTYPE html>
<html>
<head>
	<title>Litter Map</title>
	<link rel="stylesheet" type="text/css" href="css/littermap.css">
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/19d0cdd924.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="googlemap.js"></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCeYqXQz7ljCWYkkQVrsY5wujuG04gBiK4&callback=loadMap"></script>
    <style type="text/css">
    	#data, #allData{
    		display: none;
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
				<nav>
					<a href="dashboard.php">Dashboard</a> <a href="littermap.php">Litter Map</a> <a href="announcement.php">Announcement</a><a href="logs.php">Logs</a>
				</nav>
				<div class="title">
					<h2>E-KOLEKTA</h2>
				</div>
			</div>
		</header>
	</div>
	<div class="cont" style="height: 500px; width:1200px; position: relative; margin: 20px; transform: translateX(50px);">
			<?php
				require 'getEntries.php';
				$get = new education;
				$get1 = $get->getCollegesBlankLatLng();
				$get1 = json_encode($get1, true);
				echo '<div id = "data">' . $get1 . '</div>';

				$allData = $get->getAllColleges();
				$allData = json_encode($allData, true);
				echo '<div id = "allData">' . $allData . '</div>';
			?>
		<div id="map"> 
		</div>
	</div>

    <div class="footer">
		<footer>
			
		</footer>
	</div>
</body>
</html>