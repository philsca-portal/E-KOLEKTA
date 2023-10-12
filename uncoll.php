<?php
	$servername = 'localhost';
	$username = 'root';
	$password = 'Ilovenature07';
	$database = 'maps';

	$connection = mysqli_connect($servername,$username,$password,$database);

	if($connection->connect_error){
		die('Connection failed: ' .$connection->connect_error);
	}

	$sql = "SELECT * FROM `entries` WHERE `tag` LIKE 'Garbage Pile'";
	$uncollectedres = mysqli_query($connection, $sql);
	$count1 = mysqli_num_rows($uncollectedres);
?>
<?php echo ($count1);?>