<?php
$link = mysql_connect('localhost', 'root', 'bresil');
if (!$link) {
    die('Could not connect: ' . mysql_error());
    echo 'error';
}
echo 'connected successfully';
//mysql_close($link);
?>