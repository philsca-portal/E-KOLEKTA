<?php
	$servername = 'localhost';
	$username = 'root';
	$password = 'Ilovenature07';
	$database = 'maps';

	$connection = mysqli_connect($servername,$username,$password,$database);

	if($connection->connect_error){
		die('Connection failed: ' .$connection->connect_error);
	}

	$sql = "SELECT * FROM `collected`";
	$collectedres = mysqli_query($connection, $sql);
	$count = mysqli_num_rows($collectedres);
?>
<?php echo ($count);?>
