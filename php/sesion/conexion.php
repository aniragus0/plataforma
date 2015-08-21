<?php					
	$host_db = "localhost";	
	$user_db = "root";
	$password_db = "root";
	$basedatos = "unedeprom";	

	$link_unedeprom = mysql_connect($host_db,$user_db,$password_db);
	mysql_select_db($basedatos,$link_unedeprom);
?>
