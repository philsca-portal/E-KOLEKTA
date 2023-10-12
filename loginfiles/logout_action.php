<?php
	      		$servername = 'localhost';
				$username = 'root';
				$password = 'Ilovenature07';
				$database = 'maps';
				$connectionn = mysqli_connect($servername,$username,$password,$database);

				if($connectionn->connect_error){
						die('Connection failed: ' .$connectionn->connect_error);
					}

	    	if(isset($_POST['insert1'])){

				$adminnamee = $_POST['user1'];
				$statuss = $_POST['status1'];

				
				$queryy = "INSERT INTO `adminlogs`(`adminname`, `Status`) VALUES ('$adminnamee','$statuss')";
				$result = mysqli_query($connectionn,$queryy);

				echo '<script>alert("You are now successfully logged-out");</script>';
				echo "<script type='text/javascript'>window.top.location='../login.php';</script>";
	    	}
?>