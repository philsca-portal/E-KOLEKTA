<?php
if (isset($_GET["id"])) {
		
		$id = $_GET["id"];

		$servername = 'localhost';
		$username = 'root';
		$password = '';
		$database = 'maps';

		$connection = new mysqli($servername,$username,$password,$database);

		if($connection->connect_error){
			die('Connection failed: ' .$connection->connect_error);
		}

		$sql = " INSERT INTO `collected`(`id`,`tag`,`type`,`date`,`image`,`loc`,`lat`,`lng`) SELECT  `id`,`tag`,`type`,`date`,`image`,`loc`,`lat`,`lng` FROM `entries` WHERE id = $id";

		$sql1 = "DELETE FROM `entries` WHERE id=$id";

		$execute= $connection->query($sql);
		$connection->query($sql1);

		if($execute){
		    echo '<script>alert("Collected");window.location.href="dashboard.php";</script>';
		  }else{
		    echo '<script>alert("Not Collected");</script>';
		    header("location:dashboard.php");
		  }

}
?>