
<html>
<head>
   <title>Data of the sensors</title>
</head>
<h1>Data from the DHT 11 and the light sensor</h1>
<?php
include'/var/www/testdatabase.php';
$sql = 'SELECT id, temperature, humidity, luminosity, date_hour FROM donnees_capt';
   mysql_select_db('donnees_capt');
   $retval = mysql_query( $sql, $link );
   
   if(! $retval ) {
      die('Could not get data: ' . mysql_error());
   }
   
   while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {
      echo "id :{$row['id']}  <br> ".
         "temperature : {$row['temperature']} <br> ".
         "humidity : {$row['humidity']} <br> ".
	"luminosity : {$row['luminosity']} <br> ".
	"date_hour : {$row['date_hour']} <br> ".
         "--------------------------------<br>";
   }
   
   echo "Fetched data successfully\n";
   
   mysql_close($link);
?>
</html>