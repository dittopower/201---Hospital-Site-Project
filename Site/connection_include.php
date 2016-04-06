<?php 
	
	$mysqli = new mysqli('sqladdress', 'username', 'password', 'databasename');

	if ($mysqli->connect_error) {
		die('Connect Error (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
	}

?>
