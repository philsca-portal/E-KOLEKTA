<!DOCTYPE html>
<html>
<head>
	<title>Logs</title>
	<link rel="stylesheet" type="text/css" href="css/littermap.css">
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/19d0cdd924.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
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
	<table class="table table-striped" style="text-align: center;">
						<thead>
							<tr>
								<th>#</th>
								<th>ADMIN NAME</th>
								<th>DATE</th>
								<th>STATUS</th>
							</tr>
						</thead>
						<tbody id="tbody">
							<?php
							$servername = 'localhost';
							$username = 'root';
							$password = 'Ilovenature07';
							$database = 'maps';

							$connection = new mysqli($servername,$username,$password,$database);

							if($connection->connect_error){
								die('Connection failed: ' .$connection->connect_error);
							}

							$sql = "SELECT * FROM `adminlogs`";
							$display = $connection->query($sql);

							if(!$display){
								die('Invalid query: ' .$connection->error);
							}
								while ($row = $display->fetch_assoc()) {
									echo  "<tr>
												<td>". $row["id"]. "</td>
												<td>". $row["adminname"]. "</td>
												<td>". $row["Date"]. "</td>
												<td>". $row["Status"]. "</td>
											</tr>";
								}
							?>
			</tbody>
		</table>

    <div class="footer">
		<footer>
			
		</footer>
	</div>
</body>
</html>
	