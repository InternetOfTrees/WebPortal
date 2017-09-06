<?php
 include'/var/www/testdatabase.php';

?>
<!DOCTYPE html>
<html lang="en-US">
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
						var data_hum = new google.visualization.arrayToDataTable([
							['Date', 'humidity'],
							<?php
								$sql = 'SELECT id, humidity, date_hour FROM donnees_capt';
								$exec = mysqli_query($link,$sql);
								while($row = mysqli_fetch_array($exec, MYSQL_ASSOC)){
									echo "['".$row['humidity']."',".$row['date_hour']."],";
								}
							?>

						]);

					var options = {
						title: 'Humidity visualization',
						colors: ['orange'],
						vAxis: {title: " % "},
						hAxis: {title: "Time HH:MM:SS"}
					};

                    var chart = new google.visualization.BarChart(document.getElementById('chart'));
					chart.draw(data_hum, options);
                    }
</script>
</body>
</html>
