<?php
        $con = mysqli_connect('localhost','root','bresil','donnees');
        $query = "SELECT timestamp, battery_status FROM mesures WHERE (id IN (1)) AND (battery_status IS NOT NULL)";
        $exec = mysqli_query($con,$query);
        $resultat = "";
	$date = "";
        $alert = "CHARGING PROBLEM";
        while($row = mysqli_fetch_array($exec)){
			$resultat.=$row['battery_status'];
			$date.=$row['timestamp'];
	}
	if (empty($resultat)){
	}
	else{
		echo $date;
		echo "The charging circuit has a problem. The battery voltage level is low. Please verify the solar panels and the connexions with the prototype.";
	}

?>

