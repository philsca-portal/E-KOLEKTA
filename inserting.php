<?php
	$con = mysqli_connect("localhost","root","","maps");

	$tag = $_POST['tag'];
	$type = $_POST['type'];
	$date = $_POST['date'];
	$image = $_POST['image'];
	$loc = $_POST['loc'];

	$query = "INSERT INTO `entries`(`tag`, `type`, `date`, `image`, `loc`) VALUES ('$tag','$type','$date','$image','$loc')";

	if($con->query($query) === TRUE){
		echo "Inserted";
	}else{
		echo "Error";
	}
?>