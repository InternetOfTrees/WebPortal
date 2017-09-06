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
				var data_temp = new google.visualization.arrayToDataTable([
				['Date', 'moyd_temp'],
				<?php
					$query = "SELECT id,date, AVG(temperature) AS moyd_temp FROM measures WHERE id IN (1) GROUP BY date";
					$exec = mysqli_query($con,$query);
					while($row = mysqli_fetch_array($exec)){
						echo "['".$row['date']."',".$row['moyd_temp']."],";
					}
				?>
				]);
				var options = {
					title: 'Temperature visualization',
					curveType: 'function',
					pointSize: 10,
					vAxis: {title: " °C "},
					hAxis: {title: "Days"}
				};
                    		var chart = new google.visualization.LineChart(document.getElementById('chart'));
				chart.draw(data_temp, options);
                    	}
		</script>
	</body>
</html>
