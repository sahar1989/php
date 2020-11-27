<?php
	$host         = "localhost";
	$username     = "root";
	$password     = "";
	$dbname       = "usersDB";
	$result_array = array();

	//create connection
	$conn = new mysqli($host, $username, $password, $dbname);
	//check connection
	if ($conn->connect_error) {
		 die("Connection to database failed: " . $conn->connect_error);
	}
?>