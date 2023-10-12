<?php
include('../config.php');
include('../firebase.php');
session_start();

$user = $_POST['user'];
$pass = $_POST['pass'];

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
		$_SESSION['adminLogin'] = "Loggedin";
		header('location: ../dashboard.php');
		echo "<script>
    	const form = document.getElementById('formm');
    	const username = document.getElementById('user');

    	form.addEventListener('submit', function(e){
    		e.preventDefault();

    		const adminnamevalue = username.value;

    		localStorage.setItem('valuename',adminnamevalue);
    	})
</script>";
	}else{
		echo '<script>alert("Login failed");</script>';
		echo "<script type='text/javascript'>window.top.location='../login.php';</script>";exit;
	}
}
?>
<?php
            $servername = 'localhost';
			$username = 'root';
			$password = '';
			$database = 'maps';
			$connection = mysqli_connect($servername,$username,$password,$database);

			if($connection->connect_error){
					die('Connection failed: ' .$connection->connect_error);
				}

    	if(isset($_POST['insert'])){

			$adminname = $_POST['user'];
			$status = $_POST['status'];

			
			$query = "INSERT INTO `adminlogs`(`adminname`, `Status`) VALUES ('$adminname','$status')";
			$result = mysqli_query($connection,$query);
    	}
?>
