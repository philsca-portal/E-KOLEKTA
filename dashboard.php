<?php
session_start();
if(empty($_SESSION['adminLogin']) || $_SESSION['adminLogin'] == ''){
    header("Location: login.php");
    die();
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
	<link rel="stylesheet" type="text/css" href="css/dashboard.css">
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
    <script src="https://kit.fontawesome.com/19d0cdd924.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">



    <script>
    	/*global $, document */
    	$(document).ready(function(){
    		$('#piechart').load("ind.php");
    			setInterval(function(){
    				$('#piechart').load("ind.php");
    			},1000); 
    	});

    	$(document).ready(function(){
    		$('#barchart').load("ind.php");
    			setInterval(function(){
    				$('#barchart').load("ind.php");
    			},1000); 
    	});

    	$(document).ready(function(){
    		$('#curve_chart').load("ind.php");
    			setInterval(function(){
    				$('#curve_chart').load("ind.php");
    			},1000); 
    	});

    	$(document).ready(function(){
    		$('#curve_chart1').load("ind.php");
    			setInterval(function(){
    				$('#curve_chart1').load("ind.php");
    			},1000); 
    	});

    	$(document).ready(function(){
    		$('#biodeg').load("biodegradable.php");
    			setInterval(function(){
    				$('#biodeg').load("biodegradable.php");
    			},1000); 
    	});

    	$(document).ready(function(){
    		$('#nonbiodeg').load("nonbiodegradable.php");
    			setInterval(function(){
    				$('#nonbiodeg').load("nonbiodegradable.php");
    			},1000); 
    	});

    	$(document).ready(function(){
    		$('#recycl').load("recyclable.php");
    			setInterval(function(){
    				$('#recycl').load("recyclable.php");
    			},1000); 
    	});

    	$(document).ready(function(){
    		$('#total').load("total.php");
    			setInterval(function(){
    				$('#total').load("total.php");
    			},1000); 
    	});

    	$(document).ready(function(){
    		$('#bottle').load("bottle.php");
    			setInterval(function(){
    				$('#bottle').load("bottle.php");
    			},1000); 
    	});

    	$(document).ready(function(){
    		$('#cigarettebutt').load("cigarettebutt.php");
    			setInterval(function(){
    				$('#cigarettebutt').load("cigarettebutt.php");
    			},1000); 
    	});

    	$(document).ready(function(){
    		$('#facemask').load("facemask.php");
    			setInterval(function(){
    				$('#facemask').load("facemask.php");
    			},1000); 
    	});

    	$(document).ready(function(){
    		$('#garbagepile').load("garbagepile.php");
    			setInterval(function(){
    				$('#garbagepile').load("garbagepile.php");
    			},1000); 
    	});

    	$(document).ready(function(){
    		$('#leaf').load("leaf.php");
    			setInterval(function(){
    				$('#leaf').load("leaf.php");
    			},1000); 
    	});

    	$(document).ready(function(){
    		$('#paper').load("paper.php");
    			setInterval(function(){
    				$('#paper').load("paper.php");
    			},1000); 
    	});

    	$(document).ready(function(){
    		$('#papercup').load("papercup.php");
    			setInterval(function(){
    				$('#papercup').load("papercup.php");
    			},1000); 
    	});

    	$(document).ready(function(){
    		$('#paperpackage').load("paperpackage.php");
    			setInterval(function(){
    				$('#paperpackage').load("paperpackage.php");
    			},1000); 
    	});

    	$(document).ready(function(){
    		$('#plasticcup').load("plasticcup.php");
    			setInterval(function(){
    				$('#plasticcup').load("plasticcup.php");
    			},1000); 
    	});

    	$(document).ready(function(){
    		$('#plasticstraw').load("plasticstraw.php");
    			setInterval(function(){
    				$('#plasticstraw').load("plasticstraw.php");
    			},1000); 
    	});

    	$(document).ready(function(){
    		$('#plasticutensils').load("plasticutensils.php");
    			setInterval(function(){
    				$('#plasticutensils').load("plasticutensils.php");
    			},1000); 
    	});

    	$(document).ready(function(){
    		$('#stick').load("stick.php");
    			setInterval(function(){
    				$('#stick').load("stick.php");
    			},1000); 
    	});

    	$(document).ready(function(){
    		$('#styrofoam').load("styrofoam.php");
    			setInterval(function(){
    				$('#styrofoam').load("styrofoam.php");
    			},1000); 
    	});
    	
    	$(document).ready(function(){
    		$('#wrapper').load("wrapper.php");
    			setInterval(function(){
    				$('#wrapper').load("wrapper.php");
    			},1000); 
    	});

    	$(document).ready(function(){
    		$('#paperplate').load("paperplate.php");
    			setInterval(function(){
    				$('#paperplate').load("paperplate.php");
    			},1000); 
    	});

    	$(document).ready(function(){
    		$('#plastic').load("plastic.php");
    			setInterval(function(){
    				$('#plastic').load("plastic.php");
    			},1000); 
    	});

    	$(document).ready(function(){
    		$('#collected').load("coll.php");
    			setInterval(function(){
    				$('#collected').load("coll.php");
    			},1000); 
    	});

    	$(document).ready(function(){
    		$('#uncollected').load("uncoll.php");
    			setInterval(function(){
    				$('#uncollected').load("uncoll.php");
    			},1000); 
    	});

    	$(document).ready(function(){
    		$('#tbody').load("tbody.php");
    			setInterval(function(){
    				$('#tbody').load("tbody.php");
    			},1000); 
    	});
    </script>
    <script type="text/javascript">
		// Load google charts
		google.charts.load('current', {'packages':['corechart']});
		google.charts.setOnLoadCallback(drawChart);

		// Draw the chart and set the chart values
		function drawChart() {
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

    	$total = $database->getReference($ref)->orderByChild($type)->getSnapshot()->getValue();
    	?>
		  var data = google.visualization.arrayToDataTable([
		  ['Task', 'Hours per Day'],
		  ['Recyclable', <?php echo count($recyclable); ?>],
		  ['Non-Biodegradable', <?php echo count($nonbio); ?>],
		  ['Biodegradable', <?php echo count($bio); ?>],
		]);

		  // Optional; add a title and set the width and height of the chart
		  var options = {'width':300, 'height':300, is3D: true};

		  // Display the chart inside the <div> element with id="piechart"
		  var chart = new google.visualization.PieChart(document.getElementById('piechart'));
		  chart.draw(data, options);
		}
	</script>
	<script type="text/javascript">
    google.charts.load("current", {packages:['corechart']});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
    	<?php
    	include('dbconfig.php');
    	$ref = 'ALL DATA/';
    	$date = 'date';
    
    	$January = $database->getReference($ref)->orderByChild($date)->startAt("Jan 01, 2022")->endAt("Jan 31, 2022")->getValue();
    	$February = $database->getReference($ref)->orderByChild($date)->startAt("Feb 01, 2022")->endAt("Feb 28, 2022")->getValue();
    	$March = $database->getReference($ref)->orderByChild($date)->startAt("Mar 01, 2022")->endAt("Mar 31, 2022")->getValue();
    	$April = $database->getReference($ref)->orderByChild($date)->startAt("Apr 01, 2022")->endAt("Apr 30, 2022")->getValue();
    	$May = $database->getReference($ref)->orderByChild($date)->startAt("May 01, 2022")->endAt("May 31, 2022")->getValue();
    	$June = $database->getReference($ref)->orderByChild($date)->startAt("Jun 01, 2022")->endAt("Jun 30, 2022")->getValue();
    	$July = $database->getReference($ref)->orderByChild($date)->startAt("Jul 01, 2022")->endAt("Jul 31, 2022")->getValue();
    	$August = $database->getReference($ref)->orderByChild($date)->startAt("Aug 01, 2022")->endAt("Aug 31, 2022")->getValue();
    	$September = $database->getReference($ref)->orderByChild($date)->startAt("Sep 01, 2022")->endAt("Sep 30, 2022")->getValue();
    	$October = $database->getReference($ref)->orderByChild($date)->startAt("Oct 01, 2022")->endAt("Oct 31, 2022")->getValue();
    	$November = $database->getReference($ref)->orderByChild($date)->startAt("Nov 01, 2022")->endAt("Nov 30, 2022")->getValue();
      $December = $database->getReference($ref)->orderByChild($date)->startAt("Dec 01, 2022")->endAt("Dec 31, 2022")->getValue();
    	?>
      var data = google.visualization.arrayToDataTable([
        ["Element", "Total", { role: "style" } ],
        ["JANUARY",<?php echo (count($January)) ?>, "color: #FFB6C1;"],
        ["FEBRUARY",<?php echo (count($February)) ?>, "color: #FFB6C1;"],
        ["MARCH",<?php echo (count($March)) ?>, "color: #FFB6C1;"],
        ["APRIL",<?php echo (count($April)) ?>, "color: #FFB6C1;"],
        ["MAY",<?php echo (count($May)) ?>, "color: #FFB6C1;"],
        ["JUNE",<?php echo (count($June)) ?>, "color: #FFB6C1;"],
        ["JULY",<?php echo (count($July)) ?>, "color: #FFB6C1;"],
        ["AUGUST",<?php echo (count($August)) ?>, "color: #FFB6C1;"],
        ["SEPTEMBER",<?php echo (count($September)) ?>, "color: #FFB6C1;"],
        ["OCTOBER", <?php echo (count($October)) ?>, "color: #FFB6C1;"],
        ["NOVEMBER", <?php echo (count($November)) ?>, "color: #FFB6C1;"],
        ["DECEMBER", <?php echo (count($December)) ?>, "color: #FFB6C1;"]
      ]);

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);

      var options = {
        title: "MONTHLY DATA OVERVIEW",
         titleTextStyle: {
        color: "#A6A6A6", fontName: "arial"}, 
        width: 650,
        height: 400,
        bar: {groupWidth: "95%"},
        legend: { position: "none" },
      };
      var chart = new google.visualization.ColumnChart(document.getElementById("barchart"));
      chart.draw(view, options);
  }
  </script>
</head>
<body>
    <div class="header">
		<header>
			<div class="wrapper">
				<div class="logo">
					<img class="logo" src="images/ekalaticon.png">
				</div>
				<nav>
					<a href="dashboard.php">Dashboard</a> <a href="littermap.php">Litter Map</a> <a href="announcement.php">Announcement</a><a href="logs.php">Logs</a>
				</nav>
				<div class="title" style="margin-top: 30px;">
					<h2>E-KOLEKTA</h2>
				</div>
			</div>
		</header>
	</div>
	<div class="admin_name" style="display: inline-flex; width: 100%;">
		<span id="adminvalue" style="border: 2px solid #e8e8e8;
					 height: 20px;
					 width: 45px;
					 border-radius: 10px;
					 color: white;
					 background-color: #FFB6C1;
					 font-size: xx-small;
					 font-weight: bold;
					 text-align: center;
					 margin-left: 95%;">
		</span>
	</div>
	<div class="logout" style="display: inline-flex; width: 100%;">
		<button type="button" id="trigger" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#exampleModal11" style="border: 2px solid #e8e8e8;
					 height: 20px;
					 width: 60px;
					 border-radius: 10px;
					 color: white;
					 background-color: #FFB6C1;
					 font-size: 7px;
					 font-weight: bold;
					 text-align: center;
					 margin-left: 95%;
					 transform: translateX(-6.5px);">
						LOGOUT
					</button>
	</div>
	</div>
	<script>
			const admin = localStorage.getItem("valuename"); 

			document.getElementById("adminvalue").textContent = admin;
	</script>
	<div class="modal fade" id="exampleModal11" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
					  <div class="modal-dialog modal-xl">
					    <div class="modal-content">
					      <div class="modal-header">
					        <h5 class="modal-title" id="exampleModalLabel" style=" font-size: 20px; font-weight: bold;">Are you sure you want to logout?</h5>
					        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					      </div>
					      <div class="modal-body">
					        <div>
					        	<form class="form" id="formmm" action="loginfiles/logout_action.php" method="POST">
					        	<div class="form-control">
				                <label>Username</label>
				                <input type="text" id="user" name="user1" placeholder="Enter your Username">
				                <i class="fas fa-check-circle"></i>
				                <i class="fas fa-exclamation-circle"></i>
				                <small></small>
				            </div>
				            <div class="form-control">
				                <label>Password</label>
				                <input type="password" id="pass" name="pass1" placeholder="Enter your Password">
				                <i class="fas fa-check-circle"></i>
				                <i class="fas fa-exclamation-circle"></i>
				                <small></small>
				            </div>
				            <input type="text" id="status1" name="status1" value="Logged-out" hidden>
				            <div class="button">
				                <input type="submit" id="submit" name="insert1" value="Log-in">
				            </div>
				          </form>
					        </div>
					      </div>
					    </div>
					  </div>
			</div>
	<div class="box" style="position: relative;">
		<div class="containerrrr" style="height: 300px; 
										width: 300px; 
										background-color: white;
										margin: 20px;
										border-radius: 5px;
										box-shadow: 0 2px 5px rgba(0,0,0,0.4);
										overflow: hidden;
										float: left;">
			<h1 style="text-align: center; 
					   padding: 15px; 
					   margin: 5px; 
					   font-weight: bold; 
					   color: #FFB6C1;">
					TOTAL LITTER DATA</h1>
			<h1 style="text-align: center;
					   font-size: 80px; 
					   padding: 15px; 
					   margin: 15px; 
					   font-weight: bold; 
					   color: #A6A6A6;">
					   <div id="total">
					   		<?php echo ((count($total)-1));?>
						   </div>
					   
			</h1>

		</div>
		<div id="barchart" style="margin: 20px; height: 300px; width: 600px; border-radius: 5px;
								  box-shadow: 0 2px 5px rgba(0,0,0,0.4); overflow: hidden; background-color: white; transform: translateY(20px);">
		</div>
		<div id="legendchart"  style="margin: 20px; height: 620px; width: 370px; border-radius: 5px;
										box-shadow: 0 2px 5px rgba(0,0,0,0.4); background-color: white; 
										overflow-y: scroll; max-height: auto; position: absolute; transform: translate( 940px, -320px); display: flex; flex-direction: column; ">
				<div class="legend" style=" margin-left: 40px;">
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
					<div class="1" style="height: 15px; width: 15px; background-color: #FFB6C1;  border-radius:10px; margin: 40px; margin-top: 50px;">
						<h1 style="font-size: 20px; font-family: arial; margin-left: 30px; color:#A6A6A6; transform: translateY(-3px);">BOTTLE
							<div id="bottle" style="margin-left: 85px; transform: translateY(-24px);">(<?php echo (count($Bottle));?>)
							</div>	
						</h1>
					</div>
					<div class="2"style="height: 15px; width: 15px; background-color: #FFB6C1;  border-radius: 10px; margin: 40px;">
						<h1 style="font-size: 20px; font-family: arial; margin-left: 30px; color:#A6A6A6; transform: translateY(-3px);">CIGARETTE BUTT
							<div id="cigarettebutt"style="margin-left: 90px; transform: translateY(-24px);">(<?php echo (count($CigaretteButt));?>)
							</div>	
						</h1>
					</div>
					<div class="3"style="height: 15px; width: 15px; background-color: #FFB6C1;  border-radius: 10px; margin: 40px;">
						<h1 style="font-size: 20px; font-family: arial; margin-left: 30px; color:#A6A6A6; transform: translateY(-3px);">FACEMASK
							<div id="facemask"style="margin-left: 62px; transform: translateY(-24px);">(<?php echo (count($Facemask));?>)
							</div>	
						</h1>
					</div>
					<div class="4"style="height: 15px; width: 15px; background-color: #FFB6C1;  border-radius: 10px; margin: 40px;">
						<h1 style="font-size: 20px; font-family: arial; margin-left: 30px; color:#A6A6A6; transform: translateY(-3px);">GARBAGE PILE
							<div id="garbagepile"style="margin-left: 75px; transform: translateY(-25px);">(<?php echo (count($GarbagePile));?>)
							</div>	
						</h1>
					</div>
					<div class="5"style="height: 15px; width: 15px; background-color: #FFB6C1;  border-radius: 10px; margin: 40px;">
						<h1 style="font-size: 20px; font-family: arial; margin-left: 30px; color:#A6A6A6; transform: translateY(-3px);">LEAF
							<div id="leaf"style="margin-left: 103px; transform: translateY(-24px);">(<?php echo (count($Leaf));?>)
							</div>	
						</h1>
					</div>
					<div class="6"style="height: 15px; width: 15px; background-color: #FFB6C1;  border-radius: 10px; margin: 40px;">
						<h1 style="font-size: 20px; font-family: arial; margin-left: 30px; color:#A6A6A6; transform: translateY(-3px);">PAPER
							<div id="paper"style="margin-left: 105px; transform: translateY(-24px);">(<?php echo (count($Paper));?>)
							</div>	
						</h1>
					</div>
					<div class="7"style="height: 15px; width: 15px; background-color: #FFB6C1;  border-radius: 10px; margin: 40px;">
						<h1 style="font-size: 20px; font-family: arial; margin-left: 30px; color:#A6A6A6; transform: translateY(-3px);">PAPER CUP
							<div id="papercup"style="margin-left: 73px; transform: translateY(-24px);">(<?php echo (count($PaperCup));?>)
							</div>	
						</h1>
					</div>
					<div class="8"style="height: 15px; width: 15px; background-color: #FFB6C1;  border-radius: 10px; margin: 40px;">
						<h1 style="font-size: 20px; font-family: arial; margin-left: 30px; color:#A6A6A6; transform: translateY(-3px);">PAPER PACKAGE
							<div id="paperpackage"style="margin-left: 103px; transform: translateY(-24px);">(<?php echo (count($PaperPackage));?>)
							</div>	
						</h1>
					</div>
						<div class="9"style="height: 15px; width: 15px; background-color: #FFB6C1;  border-radius: 10px; margin: 40px;">
						<h1 style="font-size: 20px; font-family: arial; margin-left: 30px; color:#A6A6A6; transform: translateY(-3px);">PLASTIC CUP
							<div id="plasticcup"style="margin-left: 103px; transform: translateY(-24px);">(<?php echo (count($PlasticCup));?>)
							</div>	
						</h1>
					</div>
						<div class="10"style="height: 15px; width: 15px; background-color: #FFB6C1;  border-radius: 10px; margin: 40px;">
						<h1 style="font-size: 20px; font-family: arial; margin-left: 30px; color:#A6A6A6; transform: translateY(-3px);">PLASTIC STRAW
							<div id="plasticstraw"style="margin-left: 103px; transform: translateY(-24px);">(<?php echo (count($PlasticStraw));?>)
							</div>	
						</h1>
					</div>
						<div class="11"style="height: 15px; width: 15px; background-color: #FFB6C1;  border-radius: 10px; margin: 40px;">
						<h1 style="font-size: 20px; font-family: arial; margin-left: 30px; color:#A6A6A6; transform: translateY(-3px);">PLASTIC UTENSILS
							<div id="plasticutensils"style="margin-left: 103px; transform: translateY(-24px);">(<?php echo (count($PlasticUtensils));?>)
							</div>	
						</h1>
					</div>
						<div class="12"style="height: 15px; width: 15px; background-color: #FFB6C1;  border-radius: 10px; margin: 40px;">
						<h1 style="font-size: 20px; font-family: arial; margin-left: 30px; color:#A6A6A6; transform: translateY(-3px);">STICK
							<div id="stick"style="margin-left: 103px; transform: translateY(-24px);">(<?php echo (count($Stick));?>)
							</div>	
						</h1>
					</div>
					<div class="13"style="height: 15px; width: 15px; background-color: #FFB6C1;  border-radius: 10px; margin: 40px;">
						<h1 style="font-size: 20px; font-family: arial; margin-left: 30px; color:#A6A6A6; transform: translateY(-3px);">STYROFOAM
							<div id="styrofoam"style="margin-left: 103px; transform: translateY(-24px);">(<?php echo (count($Styrofoam));?>)
							</div>	
						</h1>
					</div>
					<div class="14"style="height: 15px; width: 15px; background-color: #FFB6C1;  border-radius: 10px; margin: 40px;">
						<h1 style="font-size: 20px; font-family: arial; margin-left: 30px; color:#A6A6A6; transform: translateY(-3px);">WRAPPER
							<div id="wrapper"style="margin-left: 103px; transform: translateY(-24px);">(<?php echo (count($Wrapper));?>)
							</div>	
						</h1>
					</div>
					<div class="15"style="height: 15px; width: 15px; background-color: #FFB6C1;  border-radius: 10px; margin: 40px;">
						<h1 style="font-size: 20px; font-family: arial; margin-left: 30px; color:#A6A6A6; transform: translateY(-3px);">PAPER PLATE
							<div id="paperplate"style="margin-left: 103px; transform: translateY(-24px);">(<?php echo (count($PaperPlate));?>)
							</div>	
						</h1>
					</div>
					<div class="16"style="height: 15px; width: 15px; background-color: #FFB6C1;  border-radius: 10px; margin: 40px;">
						<h1 style="font-size: 20px; font-family: arial; margin-left: 30px; color:#A6A6A6; transform: translateY(-3px);">Plastic
							<div id="plastic"style="margin-left: 103px; transform: translateY(-24px);">(<?php echo (count($Plastic));?>)
							</div>	
						</h1>
					</div>
				</div>
		</div>
   </div>

    <div class="box1" style="position: relative; display:flex; flex-direction: row;">
			<div id="piechart"style="margin: 20px; height: 300px; width: 300px; border-radius: 5px;
										box-shadow: 0 2px 5px rgba(0,0,0,0.4);
										overflow: hidden; transform: translate(-340px);">
			</div>
			<div id="typechart" style="margin: 20px; height: 300px; width: 600px; border-radius: 5px;
										box-shadow: 0 2px 5px rgba(0,0,0,0.4); background-color: white; overflow: hidden; transform: translateX(-360px); display: flex; flex-direction: row;">

				  <div class="biodegradable" style="margin: 30px; height: 250px; width: 150px; border-radius: 5px; box-shadow: 0 2px 5px rgba(0,0,0,0.4); overflow: hidden; background-color: #ff9900;">
				  	<h6 style="text-align: center; 
					   margin-top: 20px;
					   font-size: 13px;
					   font-weight: bold; 
					   color: white;">
					   BIODEGRADABLE
					 </h6>
					  <h3 style="text-align: center;
					   font-size: 60px;
					   margin-top: 50px;
					   font-weight: bold; 
					   color: white">
					   <div id="biodeg">
					   		<?php echo (count($bio));?>
						   </div>
					  </h3>
				  </div>
				   <div class="nonbiodegradable" style="margin: 30px; height: 250px; width: 150px; border-radius: 5px; box-shadow: 0 2px 5px rgba(0,0,0,0.4); overflow: hidden; background-color: #dc3912;">
				   	<h6 style="text-align: center; 
					   margin-top: 20px;
					   font-size: 14px;
					   font-weight: bold; 
					   color: white;">
					   NON-BIODEGRADABLE
					 </h6>
						 <h3 style="text-align: center;
						   font-size: 60px;
						   margin-top: 35px;
						   font-weight: bold; 
						   color: white">
						   <div id="nonbiodeg">
						   	<?php echo (count($nonbio));?>
						   </div>
						  </h3>
				  </div>

				   <div class="recyclable" style="margin: 30px; height: 250px; width: 150px; border-radius: 5px; box-shadow: 0 2px 5px rgba(0,0,0,0.4); overflow: hidden; background-color: #3366cc;">
				   	<h6 style="text-align: center; 
					   margin-top: 20px;
					   font-weight: bold; 
					   color: white;">
					   RECYCLABLE
					  </h6>

						  <h3 style="text-align: center;
						   font-size: 60px;
						   margin-top: 50px;
						   font-weight: bold; 
						   color: white"><div id="recycl">
						   	<?php echo (count($recyclable));?>
						   </div>
						  </h3>
				  </div>

				  <button type="button" id="trigger" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#exampleModal" style="height: 30px; width: 30px; margin: 5px;">
						<img src="https://i.ibb.co/c3h5Jcr/icons8-hamburger-menu-24-1.png" alt="icons8-hamburger-menu-24-1" border="0" style="height: 20px; width: 20px; transform: translate(-8px,-5px);">
					</button>
					   
					</div>
			</div>
		</div>

		<div class="box2" style="position: relative; display:flex; flex-direction: row;">

			<!--COLLECTED-->
			<?php
				$servername = 'localhost';
				$username = 'root';
				$password = 'Ilovenature07';
				$database = 'maps';

				$connection = mysqli_connect($servername,$username,$password,$database);

				if($connection->connect_error){
					die('Connection failed: ' .$connection->connect_error);
				}

				$sql = "SELECT * FROM `collected`";
				$collectedres = mysqli_query($connection, $sql);
				$count = mysqli_num_rows($collectedres);
			?>

			<!--UNCOLLECTED-->
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

			<div id="historychart"  style="margin: 20px; height: 300px; width: 370px; border-radius: 5px;
										box-shadow: 0 2px 5px rgba(0,0,0,0.4); background-color: white; 
										 position: absolute; transform: translate( 940px, 0px); display: flex;">

				 <div class="collected" style="margin: 20px; height: 250px; width: 150px; border-radius: 5px; box-shadow: 0 2px 5px rgba(0,0,0,0.4); overflow: hidden; background-color: #E0A96D">
				  	<h6 style="text-align: center; 
					   margin-top: 20px;
					   font-size: 13px;
					   font-weight: bold; 
					   color: white;">
					   COLLECTED
					 </h6>
					  <h3 style="text-align: center;
					   font-size: 60px;
					   margin-top: 50px;
					   font-weight: bold; 
					   color: white">
					   <div id="collected">
					   		<?php echo ($count);?>
						  </div>
					  </h3>
				  </div>
				   <div class="uncollected" style="margin: 20px; height: 250px; width: 150px; border-radius: 5px; box-shadow: 0 2px 5px rgba(0,0,0,0.4); overflow: hidden; background-color: #201E20;">
				   	<h6 style="text-align: center; 
					   margin-top: 20px;
					   font-size: 14px;
					   font-weight: bold; 
					   color: white;">
					   UNCOLLECTED
					 </h6>
						 <h3 style="text-align: center;
						   font-size: 60px;
						   margin-top: 50px;
						   font-weight: bold; 
						   color: white">
						   <div id="uncollected">
						   	<?php echo ($count1);?>
						   </div>
						  </h3>
				  </div>

				  <button type="button" id="trigger" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#exampleModal1" style="height: 30px; width: 30px; margin: 5px;">
						<img src="https://i.ibb.co/c3h5Jcr/icons8-hamburger-menu-24-1.png" alt="icons8-hamburger-menu-24-1" border="0" style="height: 20px; width: 20px; transform: translate(-8px,-5px);">
					</button>
			</div>
			<div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
					  <div class="modal-dialog modal-xl">
					    <div class="modal-content">
					      <div class="modal-header">
					        <h5 class="modal-title" id="exampleModalLabel" style=" font-size: 40px; font-weight: bold;">COLLECTED & UNCOLLECTED</h5>
					        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					      </div>
					      <div class="modal-body">
					        <div id="curve_chart1"></div>
					      </div>
					    </div>
					  </div>
			</div>

			 <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
      	<?php
					$servername = 'localhost';
					$username = 'root';
					$password = 'Ilovenature07';
					$database = 'maps';

					$connection = mysqli_connect($servername,$username,$password,$database);

					if($connection->connect_error){
						die('Connection failed: ' .$connection->connect_error);
					}
																/*COLLECTED*/
					$jan = "SELECT * FROM `entries` WHERE `date` LIKE '%Jan%' AND `tag` LIKE 'Garbage Pile'";
					$feb = "SELECT * FROM `entries` WHERE `date` LIKE '%Feb%' AND `tag` LIKE 'Garbage Pile'";
					$mar = "SELECT * FROM `entries` WHERE `date` LIKE '%Mar%' AND `tag` LIKE 'Garbage Pile'";
					$apr = "SELECT * FROM `entries` WHERE `date` LIKE '%Apr%' AND `tag` LIKE 'Garbage Pile'";
					$may = "SELECT * FROM `entries` WHERE `date` LIKE '%May%' AND `tag` LIKE 'Garbage Pile'";
					$jun = "SELECT * FROM `entries` WHERE `date` LIKE '%June%' AND `tag` LIKE 'Garbage Pile'";
					$jul = "SELECT * FROM `entries` WHERE `date` LIKE '%July%' AND `tag` LIKE 'Garbage Pile'";
					$aug = "SELECT * FROM `entries` WHERE `date` LIKE '%Aug%' AND `tag` LIKE 'Garbage Pile'";
					$sep = "SELECT * FROM `entries` WHERE `date` LIKE '%Sep%' AND `tag` LIKE 'Garbage Pile'";
					$oct = "SELECT * FROM `entries` WHERE `date` LIKE '%Oct%' AND `tag` LIKE 'Garbage Pile'";
					$nov = "SELECT * FROM `entries` WHERE `date` LIKE '%Nov%' AND `tag` LIKE 'Garbage Pile'";
					$dec = "SELECT * FROM `entries` WHERE `date` LIKE '%Dec%' AND `tag` LIKE 'Garbage Pile'";

					$collectedjan = mysqli_query($connection, $jan);
					$collectedfeb = mysqli_query($connection, $feb);
					$collectedmar = mysqli_query($connection, $mar);
					$collectedapr = mysqli_query($connection, $apr);
					$collectedmay = mysqli_query($connection, $may);
					$collectedjun = mysqli_query($connection, $jun);
					$collectedjul = mysqli_query($connection, $jul);
					$collectedaug = mysqli_query($connection, $aug);
					$collectedsep = mysqli_query($connection, $sep);
					$collectedoct = mysqli_query($connection, $oct);
					$collectednov = mysqli_query($connection, $nov);
					$collecteddec = mysqli_query($connection, $dec);

					$countjan = mysqli_num_rows($collectedjan);
					$countfeb = mysqli_num_rows($collectedfeb);
					$countmar = mysqli_num_rows($collectedmar);
					$countapr = mysqli_num_rows($collectedapr);
					$countmay = mysqli_num_rows($collectedmay);
					$countjun = mysqli_num_rows($collectedjun);
					$countjul = mysqli_num_rows($collectedjul);
					$countaug = mysqli_num_rows($collectedaug);
					$countsep = mysqli_num_rows($collectedsep);
					$countoct = mysqli_num_rows($collectedoct);
					$countnov = mysqli_num_rows($collectednov);
					$countdec = mysqli_num_rows($collecteddec);

															/*UNCOLLECTED*/
					$jann = "SELECT * FROM `collected` WHERE `date` LIKE '%Jan%'";
					$febb = "SELECT * FROM `collected` WHERE `date` LIKE '%Feb%'";
					$marr = "SELECT * FROM `collected` WHERE `date` LIKE '%Mar%'";
					$aprr = "SELECT * FROM `collected` WHERE `date` LIKE '%Apr%'";
					$mayy = "SELECT * FROM `collected` WHERE `date` LIKE '%May%'";
					$junn = "SELECT * FROM `collected` WHERE `date` LIKE '%June%'";
					$jull = "SELECT * FROM `collected` WHERE `date` LIKE '%July%'";
					$augg = "SELECT * FROM `collected` WHERE `date` LIKE '%Aug%'";
					$sepp = "SELECT * FROM `collected` WHERE `date` LIKE '%Sep%'";
					$octt = "SELECT * FROM `collected` WHERE `date` LIKE '%Oct%'";
					$novv = "SELECT * FROM `collected` WHERE `date` LIKE '%Nov%'";
					$decc = "SELECT * FROM `collected` WHERE `date` LIKE '%Dec%'";

					$uncollectedjan = mysqli_query($connection, $jann);
					$uncollectedfeb = mysqli_query($connection, $febb);
					$uncollectedmar = mysqli_query($connection, $marr);
					$uncollectedapr = mysqli_query($connection, $aprr);
					$uncollectedmay = mysqli_query($connection, $mayy);
					$uncollectedjun = mysqli_query($connection, $junn);
					$uncollectedjul = mysqli_query($connection, $jull);
					$uncollectedaug = mysqli_query($connection, $augg);
					$uncollectedsep = mysqli_query($connection, $sepp);
					$uncollectedoct = mysqli_query($connection, $octt);
					$uncollectednov = mysqli_query($connection, $novv);
					$uncollecteddec = mysqli_query($connection, $decc);

					$countjann = mysqli_num_rows($uncollectedjan);
					$countfebb = mysqli_num_rows($uncollectedfeb);
					$countmarr = mysqli_num_rows($uncollectedmar);
					$countaprr = mysqli_num_rows($uncollectedapr);
					$countmayy = mysqli_num_rows($uncollectedmay);
					$countjunn = mysqli_num_rows($uncollectedjun);
					$countjull = mysqli_num_rows($uncollectedjul);
					$countaugg = mysqli_num_rows($uncollectedaug);
					$countsepp = mysqli_num_rows($uncollectedsep);
					$countoctt = mysqli_num_rows($uncollectedoct);
					$countnovv = mysqli_num_rows($uncollectednov);
					$countdecc = mysqli_num_rows($uncollecteddec);
					
				?>
        var data = google.visualization.arrayToDataTable([
          ['Month', 'Collected', 'Uncollected'],
          ['January', <?php echo ($countjan);?>, <?php echo ($countjann);?>],
          ['February',<?php echo ($countfeb);?>,  <?php echo ($countfebb);?>],
          ['March',<?php echo ($countmar);?>,  <?php echo ($countmarr);?>],
          ['April',<?php echo ($countapr);?>, <?php echo ($countaprr);?>],
          ['May', <?php echo ($countmay);?>,  <?php echo ($countmayy);?>],
          ['June',<?php echo ($countjun);?>,  <?php echo ($countjunn);?>],
          ['July', <?php echo ($countjul);?>,  <?php echo ($countjull);?>],
          ['August', <?php echo ($countaug);?>,  <?php echo ($countaugg);?>],
          ['September',<?php echo ($countsep);?>,  <?php echo ($countsepp);?>],
          ['October', <?php echo ($countoct);?>,  <?php echo ($countoctt);?>],
          ['November',<?php echo ($countnov);?>, <?php echo ($countnovv);?>],
          ['December', <?php echo ($countdec);?>, <?php echo ($countdecc);?>],
        ]);

        var options = {
          curveType: 'function',
          legend: { position: 'bottom' },
          series:{
          	0:{
          		color:'#E0A96D'
          	},
          	1:{
          		color:'#201E20'
          	},
          },
          height: 500,
          width: 1100,
          chartArea: {'width': '100%', 'height': '85%'},
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart1'));

        chart.draw(data, options);
      }
    </script>



			<div class="boxinfo" style="margin: 20px; height: 300px; width: 920px; border-radius: 5px;
										box-shadow: 0 2px 5px rgba(0,0,0,0.4); background-color: white;
										overflow-y: auto; max-height: auto;">


					<table class="table table-striped" style="text-align: center;">
						<thead>
							<tr>
								<th>#</th>
								<th>TAG</th>
								<th>TYPE</th>
								<th>DATE</th>
								<th>IMAGE</th>
								<th>LOC</th>
								<th>ACTION</th>
							</tr>
						</thead>
						<tbody id="tbody">
							<?php
							$servername = 'localhost';
							$username = 'root';
							$password = 'Ilovenature07';
							$database = 'maps';

							$connection = new mysqli($servername,$username,$password,$database);

							if($connection->connect_error){
								die('Connection failed: ' .$connection->connect_error);
							}

							$sql = "SELECT * FROM `entries` WHERE `tag` LIKE 'Garbage Pile'";
							$display = $connection->query($sql);

							if(!$display){
								die('Invalid query: ' .$connection->error);
							}
								while ($row = $display->fetch_assoc()) {
									echo  "<tr>
													<td>". $row["id"]. "</td>
													<td>". $row["tag"]. "</td>
													<td>". $row["type"]. "</td>
													<td>". $row["date"]. "</td>
													<td><img src='".$row["image"]."'style='width: 100px; height: 150px;'></td>
													<td>". $row["loc"]. "</td>
													<td>
														<a class='btn btn-primary btn-sm' href='collected.php?id=$row[id]' style='margin-bottom: 10px;'>Collected</a>
														<a class='btn btn-danger btn-sm' href='delete.php?id=$row[id]'>Cancel</a>	
													</td>
												</tr>";
								}
							?>
						</tbody>
					</table>
			</div>
		</div>
		<div class="box3" style="position: relative; display:flex; flex-direction: row;">
		  <div class="userinfo" style="margin: 20px; height: 300px; width: 1310px; border-radius: 5px;
										box-shadow: 0 2px 5px rgba(0,0,0,0.4); background-color: white;
										overflow-y: auto; max-height: auto;">
				<?php
					include('dbconfig.php');
					$ref = 'Users/';
					$userRes = $database->getReference($ref)->getValue();
				?>
				<table class="table table-striped" style="text-align: center;">
					<thead>
						<th>BARRANGAY ID</th>
						<th>FULL NAME</th>
						<th>PHONE #</th>
						<th>POINTS</th>
					</thead>
					<tbody>
				<?php
					forEach($userRes as $key => $value){
						echo  "<tr>
									   <td>". $value["baranggayid"]. "</td>
										 <td>". $value["fullname"]. "</td>
									   <td>". $value["phoneno"]. "</td>
										 <td>". $value["points"]."</td>	
									 </tr>";
					}
				?>
				</tbody>
			</table>
		  </div>
		 </div>
		<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
					  <div class="modal-dialog modal-xl">
					    <div class="modal-content">
					      <div class="modal-header">
					        <h5 class="modal-title" id="exampleModalLabel" style=" font-size: 40px; font-weight: bold;">Analysis</h5>
					        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					      </div>
					      <div class="modal-body">
					        <div id="curve_chart"></div>
					      </div>
					    </div>
					  </div>
		</div>
		<script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
      	<?php
      	include('dbconfig.php');
	    	$bioref = "Biodegradable/";
	    	$nonbioref = "Non-Biodegradable/";
	    	$recref = "Recyclable/";
	    	$date = 'date';
	    
	    	$bioJanuary = $database->getReference($bioref)->orderByChild($date)->startAt("Jan 01, 2022")->endAt("Jan 31, 2022")->getValue();
	    	$bioFebruary = $database->getReference($bioref)->orderByChild($date)->startAt("Feb 01, 2022")->endAt("Feb 28, 2022")->getValue();
	    	$bioMarch = $database->getReference($bioref)->orderByChild($date)->startAt("Mar 01, 2022")->endAt("Mar 31, 2022")->getValue();
	    	$bioApril = $database->getReference($bioref)->orderByChild($date)->startAt("Apr 01, 2022")->endAt("Apr 30, 2022")->getValue();
	    	$bioMay = $database->getReference($bioref)->orderByChild($date)->startAt("May 01, 2022")->endAt("May 31, 2022")->getValue();
	    	$bioJune = $database->getReference($bioref)->orderByChild($date)->startAt("Jun 01, 2022")->endAt("Jun 30, 2022")->getValue();
	    	$bioJuly = $database->getReference($bioref)->orderByChild($date)->startAt("Jul 01, 2022")->endAt("Jul 31, 2022")->getValue();
	    	$bioAugust = $database->getReference($bioref)->orderByChild($date)->startAt("Aug 01, 2022")->endAt("Aug 31, 2022")->getValue();
	    	$bioSeptember = $database->getReference($bioref)->orderByChild($date)->startAt("Sep 01, 2022")->endAt("Sep 30, 2022")->getValue();
	    	$bioOctober = $database->getReference($bioref)->orderByChild($date)->startAt("Oct 01, 2022")->endAt("Oct 31, 2022")->getValue();
	    	$bioNovember = $database->getReference($bioref)->orderByChild($date)->startAt("Nov 01, 2022")->endAt("Nov 30, 2022")->getValue();
	      $bioDecember = $database->getReference($bioref)->orderByChild($date)->startAt("Dec 01, 2022")->endAt("Dec 31, 2022")->getValue();

	      $nonbioJanuary = $database->getReference($nonbioref)->orderByChild($date)->startAt("Jan 01, 2022")->endAt("Jan 31, 2022")->getValue();
	    	$nonbioFebruary = $database->getReference($nonbioref)->orderByChild($date)->startAt("Feb 01, 2022")->endAt("Feb 28, 2022")->getValue();
	    	$nonbioMarch = $database->getReference($nonbioref)->orderByChild($date)->startAt("Mar 01, 2022")->endAt("Mar 31, 2022")->getValue();
	    	$nonbioApril = $database->getReference($nonbioref)->orderByChild($date)->startAt("Apr 01, 2022")->endAt("Apr 30, 2022")->getValue();
	    	$nonbioMay = $database->getReference($nonbioref)->orderByChild($date)->startAt("May 01, 2022")->endAt("May 31, 2022")->getValue();
	    	$nonbioJune = $database->getReference($nonbioref)->orderByChild($date)->startAt("Jun 01, 2022")->endAt("Jun 30, 2022")->getValue();
	    	$nonbioJuly = $database->getReference($nonbioref)->orderByChild($date)->startAt("Jul 01, 2022")->endAt("Jul 31, 2022")->getValue();
	    	$nonbioAugust = $database->getReference($nonbioref)->orderByChild($date)->startAt("Aug 01, 2022")->endAt("Aug 31, 2022")->getValue();
	    	$nonbioSeptember = $database->getReference($nonbioref)->orderByChild($date)->startAt("Sep 01, 2022")->endAt("Sep 30, 2022")->getValue();
	    	$nonbioOctober = $database->getReference($nonbioref)->orderByChild($date)->startAt("Oct 01, 2022")->endAt("Oct 31, 2022")->getValue();
	    	$nonbioNovember = $database->getReference($nonbioref)->orderByChild($date)->startAt("Nov 01, 2022")->endAt("Nov 30, 2022")->getValue();
	      $nonbioDecember = $database->getReference($nonbioref)->orderByChild($date)->startAt("Dec 01, 2022")->endAt("Dec 31, 2022")->getValue();

	      $recJanuary = $database->getReference($recref)->orderByChild($date)->startAt("Jan 01, 2022")->endAt("Jan 31, 2022")->getValue();
	    	$recFebruary = $database->getReference($recref)->orderByChild($date)->startAt("Feb 01, 2022")->endAt("Feb 28, 2022")->getValue();
	    	$recMarch = $database->getReference($recref)->orderByChild($date)->startAt("Mar 01, 2022")->endAt("Mar 31, 2022")->getValue();
	    	$recApril = $database->getReference($recref)->orderByChild($date)->startAt("Apr 01, 2022")->endAt("Apr 30, 2022")->getValue();
	    	$recMay = $database->getReference($recref)->orderByChild($date)->startAt("May 01, 2022")->endAt("May 31, 2022")->getValue();
	    	$recJune = $database->getReference($recref)->orderByChild($date)->startAt("Jun 01, 2022")->endAt("Jun 30, 2022")->getValue();
	    	$recJuly = $database->getReference($recref)->orderByChild($date)->startAt("Jul 01, 2022")->endAt("Jul 31, 2022")->getValue();
	    	$recAugust = $database->getReference($recref)->orderByChild($date)->startAt("Aug 01, 2022")->endAt("Aug 31, 2022")->getValue();
	    	$recSeptember = $database->getReference($recref)->orderByChild($date)->startAt("Sep 01, 2022")->endAt("Sep 30, 2022")->getValue();
	    	$recOctober = $database->getReference($recref)->orderByChild($date)->startAt("Oct 01, 2022")->endAt("Oct 31, 2022")->getValue();
	    	$recNovember = $database->getReference($recref)->orderByChild($date)->startAt("Nov 01, 2022")->endAt("Nov 30, 2022")->getValue();
	      $recDecember = $database->getReference($recref)->orderByChild($date)->startAt("Dec 01, 2022")->endAt("Dec 31, 2022")->getValue();
	    	?>
        var data = google.visualization.arrayToDataTable([
          ['Month', 'Recyclable', 'Non-Biodegradable', 'Biodegradable'],
          ['January',  <?php echo (count($recJanuary)) ?>,      <?php echo (count($nonbioJanuary)) ?>,      <?php echo (count($bioJanuary)) ?>],
          ['February', <?php echo (count($recFebruary)) ?>,      <?php echo (count($nonbioFebruary)) ?>,      <?php echo (count($bioFebruary)) ?>],
          ['March',  <?php echo (count($recMarch)) ?>,      <?php echo (count($nonbioMarch)) ?>,      <?php echo (count($bioMarch)) ?>],
          ['April',  <?php echo (count($recApril)) ?>,      <?php echo (count($nonbioApril)) ?>,      <?php echo (count($bioApril)) ?>],
          ['May',  <?php echo (count($recMay)) ?>,      <?php echo (count($nonbioMay)) ?>,      <?php echo (count($bioMay)) ?>],
          ['June',  <?php echo (count($recJune)) ?>,      <?php echo (count($nonbioJune)) ?>,      <?php echo (count($bioJune)) ?>],
          ['July',  <?php echo (count($recJuly)) ?>,      <?php echo (count($nonbioJuly)) ?>,      <?php echo (count($bioJuly)) ?>],
          ['August',  <?php echo (count($recAugust)) ?>,      <?php echo (count($nonbioAugust)) ?>,      <?php echo (count($bioAugust)) ?>],
          ['September',  <?php echo (count($recSeptember)) ?>,      <?php echo (count($nonbioSeptember)) ?>,      <?php echo (count($bioSeptember)) ?>],
          ['October',  <?php echo (count($recOctober)) ?>,      <?php echo (count($nonbioOctober)) ?>,      <?php echo (count($bioOctober)) ?>],
          ['November',  <?php echo (count($recNovember)) ?>,      <?php echo (count($nonbioNovember)) ?>,      <?php echo (count($bioNovember)) ?>],
          ['December',  <?php echo (count($recDecember)) ?>,      <?php echo (count($nonbioDecember)) ?>,      <?php echo (count($bioDecember)) ?>],
        ]);

        var options = {
          curveType: 'function',
          legend: { position: 'bottom' },
          height: 500,
          width: 1100,
          chartArea: {'width': '100%', 'height': '85%'},
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
      }
    </script>
   
  <div class="footer">
		<footer>
		</footer>
	</div>
</body>
</html>