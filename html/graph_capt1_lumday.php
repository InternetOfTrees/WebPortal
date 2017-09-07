<!-- CREATED BY OUMEIMA EL ISBIHANI -->

<?php
	include "../connexion.php";
?>
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="refresh" content="180">
    		<meta charset="utf-8">
	</head>
	<body>
		<div id="chart"></div>
		<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        	<script type="text/javascript" src="https://www.google.com/jsapi"></script>
		<script type="text/javascript">
			google.load("visualization", "1", {packages:["corechart"], "callback": drawChart});
                    	google.setOnLoadCallback(drawChart);
                    	function drawChart() {
				var data_lum = new google.visualization.arrayToDataTable([
				['Date','moyh_lum'],
				<?php
					$query = "SELECT id,date, HOUR(timestamp) as hours_day, AVG(luminosity) AS moyh_lum FROM measures WHERE id IN (1) GROUP BY  date, hours_day";
					$exec = mysqli_query($con,$query);
					while($row = mysqli_fetch_array($exec)){
						echo "[".$row['hours_day'].",".$row['moyh_lum']."],";
					}
				?>
				]);
				var options = {
					title: 'Luminosity visualization',
					curveType: 'function',
					pointSize: 10,
					vAxis: {title: " Lum "},
					hAxis: {title: "Time HH"}
				};

                    		var chart = new google.visualization.LineChart(document.getElementById('chart'));
				chart.draw(data_lum, options);
                    	}
		</script>
	</body>
</html>
