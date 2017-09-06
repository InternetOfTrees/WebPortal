
<?php
$servername = "local host";
$username = "root";
$password = "bresil";

//create connection 
try {
	$conn = new PDO("mysql:host=$servername;dbname=donnees_capt", $username, $password)

	// set the PDO error mode to exception
	$conn ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	echo "Connected successfully"
	}
catch(PDOException $e)
	{
	echo "Connection failed: " . $e->getMessage();
	}
?>