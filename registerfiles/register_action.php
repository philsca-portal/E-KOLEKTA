<?php
include('../config.php');
include('../firebase.php');

$name = $_POST['nAme'];
$user = $_POST['user'];
$pass = $_POST['password'];

$rdb = new firebaseRDB($databaseURL);
$retrieve = $rdb->retrieve("/admin","user","EQUAL", $user);
$data = json_decode($retrieve, 1);

	if(isset($data['user'])){
		echo"Username already used";
	}else{
		$insert = $rdb->insert("/admin",[
		"name" =>$name,
		"user" =>$user,
		"password" =>$pass
		]);
		echo '<script>alert("Register success");</script>';
		echo "<script type='text/javascript'>window.top.location='../login.php';</script>"; exit;
	}
?>
