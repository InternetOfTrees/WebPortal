<html>
<body>
<head>
   <title>Data of Sensor</title>
</head>
<form action="insert.php" method="post">
Firstname: <input type="text" name="firstname">
Lastname: <input type="text" name="lastname">
Age: <input type="text" name="age">
<input type="submit">
</form>

</body>
</html>
<?php
include("exemple.php")
$sql="SELECT FROM donnees_capt (temperature, humidity, luminosity)
VALUES
('$_POST[temperature]','$_POST[humidity]','$_POST[luminosity]')";

if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
echo "1 record added";

mysqli_close($con);
?>