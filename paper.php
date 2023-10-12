<?php
				include('dbconfig.php');
    			$ref = 'ALL DATA/';
    			$tag = 'tag';

    			$bottletag = 'Bottle';
    			$Bottle = $database->getReference($ref)->orderByChild($tag)->equalTo($bottletag)->getValue();

    			$cigarettebutttag = 'Cigarette Butt';
    			$CigaretteButt = $database->getReference($ref)->orderByChild($tag)->equalTo($cigarettebutttag)->getValue();

    			$facemasktag = 'Facemask';
    			$Facemask = $database->getReference($ref)->orderByChild($tag)->equalTo($facemasktag)->getValue();

    			$garbagepiletag = 'Garbage Pile';
    			$GarbagePile = $database->getReference($ref)->orderByChild($tag)->equalTo($garbagepiletag)->getValue();

    			$leaftag = 'Leaf';
    			$Leaf = $database->getReference($ref)->orderByChild($tag)->equalTo($leaftag)->getValue();

    			$papertag = 'Paper';
    			$Paper = $database->getReference($ref)->orderByChild($tag)->equalTo($papertag)->getValue();

    			$paperpackagetag = 'Paper Package';
    			$PaperPackage = $database->getReference($ref)->orderByChild($tag)->equalTo($paperpackagetag)->getValue();

    			$papercuptag = 'Paper Cup';
    			$PaperCup = $database->getReference($ref)->orderByChild($tag)->equalTo($papercuptag)->getValue();

    			$plasticcuptag = 'Plastic Cup';
    			$PlasticCup = $database->getReference($ref)->orderByChild($tag)->equalTo($plasticcuptag)->getValue();

    			$plasticstrawtag = 'Plastic Straw';
    			$PlasticStraw = $database->getReference($ref)->orderByChild($tag)->equalTo($plasticstrawtag)->getValue();

    			$plasticutensilstag = 'Plastic Utensils';
    			$PlasticUtensils = $database->getReference($ref)->orderByChild($tag)->equalTo($plasticutensilstag)->getValue();

    			$sticktag = 'Stick';
    			$Stick = $database->getReference($ref)->orderByChild($tag)->equalTo($sticktag)->getValue();

    			$styrofoamtag = 'Styrofoam';
    			$Styrofoam = $database->getReference($ref)->orderByChild($tag)->equalTo($styrofoamtag)->getValue();

    			$wrappertag = 'Wrapper';
    			$Wrapper = $database->getReference($ref)->orderByChild($tag)->equalTo($wrappertag)->getValue();

    			$paperplatetag = 'Paper Plate';
    			$PaperPlate = $database->getReference($ref)->orderByChild($tag)->equalTo($paperplatetag)->getValue();

    			$plastictag = 'Plastic';
    			$Plastic = $database->getReference($ref)->orderByChild($tag)->equalTo($plastictag)->getValue();
			?>
<?php echo ('(');?><?php echo (count($Paper));?><?php echo (')');?>           	
