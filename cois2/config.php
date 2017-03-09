<?php
$username = "coisexy9x_data";
$password = "Matkhau@123";
$hostname = "localhost";	
$database = "coisexy9x_data";
$con = @mysql_connect($hostname, $username, $password) or die('Muahahaha ... PYBoiz !');
@mysql_select_db($database) or die('Database Yenileniyor !'); 
?>