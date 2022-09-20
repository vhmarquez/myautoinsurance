<?php
    include('dBConnect.php');
	
	if(isset($_POST["TYPE"])){
				
		// Contact Information   
		$type  = $_POST["TYPE"];		
		$first_name  = $_POST["first_name"];
		$last_name  = $_POST["last_name"];
		$email = $_POST["email"];
		$dob = $_POST["dob"];
		$zip_code = $_POST["zip_code"];
		$marital_status = $_POST["marital_status"];
		$accidents = $_POST["accidents"];
		$dui = $_POST["dui"];
		$current_insurance = $_POST["current_insurance"];
		$insured_more_than_one_year = $_POST["insured_more_than_one_year"];
		$rent_or_own = $_POST["rent_or_own"];
		$property_type = $_POST["property_type"];
		$credit = $_POST["credit"];
		// $yes = $_POST["yes"];
			
		$d_first_name = explode(",",$_POST["d_first_name"]);
		$d_last_name = explode(",",$_POST["d_last_name"]);
		
		$v_make = explode(",",$_POST["v_make"]);
		$v_model = explode(",",$_POST["v_model"]);
		$v_year = explode(",",$_POST["v_year"]);
		
		$sql = "INSERT INTO ai_leads ( type, first_name, last_name, email, 
			dob, zip_code,credit,marital_status,rent_or_own,property_type, current_insurance,
			insured_more_than_one_year, accidents, dui)
			VALUES ('$type', '$first_name', '$last_name', '$email', 
			'$dob', '$zip_code', '$credit', '$marital_status', '$rent_or_own', '$property_type', '$current_insurance',
			'$insured_more_than_one_year', '$accidents', '$dui')";

		if ($conn->query($sql) === TRUE) {
			$id_client = $conn->insert_id;			
			
			echo "Success: $id_client </br>";
			
			echo "Names: ".count($d_first_name)." </br>";
			// Drivers
			for($i = 0; $i < count($d_first_name); $i++){
				$sql = "INSERT INTO drivers ( id_client, first_name, last_name)
			VALUES ('$id_client', '$d_first_name[$i]', '$d_last_name[$i]')";
				$conn->query($sql);
			}
			
			echo "Success: Drivers </br>";
			echo "Vehicles: ".count($v_make)." </br>";
			// Vehicles
			for($i = 0; $i < count($v_make); $i++){
				$sql = "INSERT INTO vehicles ( id_client, make, model, year)
			VALUES ('$id_client', '$v_make[$i]', '$v_model[$i]', '$v_year[$i]')";
				$conn->query($sql);
			}
			
			echo "Success: Vehicles";
		  // echo "New record created successfully. Last inserted ID is: " . $last_id;
		} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}
				
		closeConn();
	}
	else {
		echo "Connection Failure";
	}
	
	// closeConn();
?>