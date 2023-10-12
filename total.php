<?php 
include('dbconfig.php');
    	$ref = 'ALL DATA/';
    	$type = 'type';

$total = $database->getReference($ref)->orderByChild($type)->getSnapshot()->getValue();
?>

<?php echo ((count($total)-1));?>