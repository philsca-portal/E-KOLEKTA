<?php
	require __DIR__.'/vendor/autoload.php';
	
	use Kreait\Firebase\Factory;
	use Kreait\Firebase\ServiceAccount;

	$factory = (new Factory)
     ->withServiceAccount(__DIR__.'/e-kalat-firebase-adminsdk-oj80n-2dfd1ce7f2.json')
     ->withDatabaseUri('https://e-kalat-default-rtdb.firebaseio.com/');

$database = $factory->createDatabase();
?>