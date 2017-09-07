<?php
        include "/var/www/connexion.php";
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="refresh" content="240">
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
			var data_sap = new google.visualization.arrayToDataTable([
				['Date','moyh_sap'],
				<?php
					$query = "SELECT id, date, HOUR(timestamp) as hours_day, AVG(sapflow) AS moyh_sap FROM mesures WHERE id IN (1) GROUP BY  date, hours_day";
					$exec = mysqli_query($con,$query);
					while($row = mysqli_fetch_array($exec)){
						echo "[".$row['hours_day'].",".$row['moyh_sap']."],";
					}
				?>
			]);
			var options = {
				title: 'Sapflow',
				colors: ['orange'],
				vAxis: {title: " Sap flow"},
				hAxis: {title: "Time HH"}
			};
                    	var chart = new google.visualization.LineChart(document.getElementById('chart'));
			chart.draw(data_sap, options);
                }
	</script>
</body>
</html>
