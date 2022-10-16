<?php
    
	// This file adds a new lead into the system
	// $servername = "localhost";
	// $username = "root";
	// $password = "";
	// $dbname = "myflautoinsurance";
	$servername = "localhost";
	$username = "admin";
	$password = "FLinsurance2021!";
	$dbname = "myflautoinsurance";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	  die("Connection failed: " . $conn->connect_error);
	}
		
	function closeConn() {
		$GLOBALS['conn']->close();
	}

?>