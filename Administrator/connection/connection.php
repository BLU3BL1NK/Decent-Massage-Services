<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$database = "decent";
	$cnn = new mysqli($servername, $username, $password, $database);
	if ($cnn->connect_error) {
		die("Connection failed: " . $cnn->connect_error);
	}
?>
