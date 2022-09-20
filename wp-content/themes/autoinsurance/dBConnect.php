<?php
    
	// This file adds a new lead into the system
	$servername = "localhost";
	$username = "JonnyBoy";
	$password = "GYQoq1F48U7uY769";
	$dbname = "auto_insurance";

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