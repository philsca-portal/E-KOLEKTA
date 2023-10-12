
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

        $total = $database->getReference($ref)->getSnapshot()->getValue();
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

  <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        <?php
          $servername = 'localhost';
          $username = 'root';
          $password = '';
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