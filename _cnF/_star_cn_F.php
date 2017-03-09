<?php
$host = "localhost";
$username = "autobotlike_data";
$password = "Matkhau@123";	
$dbname = "autobotlike_data";
$connection = mysql_connect($host,$username,$password);
if (!$connection){
die('Could not connect: ' . mysql_error());
}
mysql_select_db($dbname) or die(mysql_error());
mysql_query("SET NAMES utf8");

?>