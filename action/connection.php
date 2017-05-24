<?php

$servername = "localhost";
$username = "root";
$password = "root";
$db_name = 'blog';

// Create connection
$con = mysql_connect($servername, $username, $password);
mysql_select_db($db_name, $con);

?>