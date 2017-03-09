<?php
if ($_GET[goi]) {
	switch ($_GET['goi']) {
		case '1':
			$array = array(
			    "name" => "VIP Member",
			    "limit_liketus" => "700",
			    "limit_likecmt" => "500",
			    "limitday" => "6",
			    "price" => "3700" 
			);
			break;
		case '2':
			$array = array(
			    "name" => "Medium Member",
			    "limit_liketus" => "1000",
			    "limit_likecmt" => "700",
			    "limitday" => "6",
			    "price" => "7000" 
			);
			break;
		case '3':
			$array = array(
			    "name" => "Super Member",
			    "limit_liketus" => "1500",
			    "limit_likecmt" => "1000",
			    "limitday" => "6",
			    "price" => "10400" 
			);
			break;
		case '4':
			$array = array(
			    "name" => "Boss Member",
			    "limit_liketus" => "2000",
			    "limit_likecmt" => "1500",
			    "limitday" => "6",
			    "price" => "18700" 
			);
			break;
	}

	die(json_encode($array));
}
?>
