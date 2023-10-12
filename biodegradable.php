<?php 
        include('dbconfig.php');
        $ref = 'ALL DATA/';
        $type = 'type';
        
        $start = 'Recyclable';
        $recyclable = $database->getReference($ref)->orderByChild($type)->equalTo($start)->getValue();

        $start1 = 'Non-Biodegradable';
        $nonbio = $database->getReference($ref)->orderByChild($type)->equalTo($start1)->getValue();

        $start2 = 'Biodegradable';
        $bio = $database->getReference($ref)->orderByChild($type)->equalTo($start2)->getValue();

        $total = $database->getReference($ref)->getSnapshot()->getValue();
?>
<?php echo (count($bio));?>
