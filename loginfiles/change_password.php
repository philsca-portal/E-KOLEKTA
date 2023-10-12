<?php
include('../config.php');
include('../firebase.php');

$user = $_POST['user1'];
$pass = $_POST['pass1'];
$pass1 = $_POST['pass2'];

$rdb = new firebaseRDB($databaseURL);
$retrieve = $rdb->retrieve("/admin","user","EQUAL", $user);
$data = json_decode($retrieve, 1);

if(count($data) == 0){
	echo '<script>alert("User is not registered");</script>';
	echo "<script type='text/javascript'>window.top.location='../login.php';</script>"; exit;
 	return false;
}else{
	$id = array_keys($data)[0];
	if($data[$id]['password'] == $pass){
		$_SESSION['admin'] = $data[$id];

			$update = $rdb->update("/admin",$id,[
			"password" =>$pass1
			]);
			echo '<script>alert("You have change your password");</script>';
			echo "<script type='text/javascript'>window.top.location='../login.php';</script>"; exit;
		
	}else{
		echo '<script>alert("Change password failed");</script>';
		echo "<script type='text/javascript'>window.top.location='../login.php';</script>";exit;
	}
}
?>