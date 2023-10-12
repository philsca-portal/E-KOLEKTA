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

		$sql = "DELETE FROM `entries` WHERE id = $id";
		$execute= $connection->query($sql);
		
		 if($execute){
		    echo '<script>alert("Data has been deleted");window.location.href="dashboard.php";</script>';
		  }else{
		    echo '<script>alert("Data has not been deleted");</script>';
		    header("location:dashboard.php");
		  }
	}
?>