<?php
	require 'getEntries.php';
		$get = new education;
		$get->setId($_REQUEST['id']);
		$get->setLat($_REQUEST['lat']);
		$get->setLng($_REQUEST['lng']);
		$status = $get->updateCollegesWithLatLng();

		if($status == true){
			echo 'Updated!';
		}else{
			echo 'Failed!';
		}
?> 