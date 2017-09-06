<!--/*In this file we can see all the data collected by the sensors and put into the database, in addition to add some data of moisture and temperature if necessary.*/-->

<html>
<head>
   <title>Data of Sensor</title>
</head>
<body>
<h1>Data from the temperature and humidity sensors</h1>
<form action="add.php" method="get">
<TABLE>
<tr>
   <td>Temperature </td>
   <td><input type="text" name="temp" size="20" maxlength="30"></td>
</tr>
<tr>
   <td>humidity</td>
   <td><input type="text" name="humid" size="20" maxlength="30"></td>
</tr>
</TABLE>
<input type="submit" name="accion" value="Grabar">
</FORM>
<hr>
<?php
   $link=Conection();
   $result=mysql_query("SELECT * FROM donnees_capt order by id desc",$link);
?>
<table border="1" cellspacing="1" cellpadding="1">
      <tr>
         <td>&nbsp;Temperature &nbsp;</td>
         <td>&nbsp;humidity&nbsp;</td>
       </tr>
<?php  
	include("connectdatabase.php");	   
   while($row = mysql_fetch_array($result)) {
printf("<tr><td> &nbsp;%s </td><td> &nbsp;%s&nbsp; </td></tr>", $row["temperature"], $row["humidity"]);
   }
   mysql_free_result($result);
?>
</table>
</body>
</html>