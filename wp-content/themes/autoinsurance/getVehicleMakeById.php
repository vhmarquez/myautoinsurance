<?php
    include('dBConnect.php');
			
	// Contact Information   
	$id  = trim(file_get_contents("php://input"));		
	
	// $id = "'2216,9953'";	
	$id = substr($id, 1, -1);
	
	// echo $id;
	$id = explode(",", $id );	

	$extra = ''; $tmp = '';
	for ($i = 0; $i < count($id); $i++)  {
		$tmp .= $extra."'".$id[$i]."'";
		$extra = ',';
	}

	$sql = "SELECT make_name FROM auto_makes WHERE make_id in(".$tmp.")";
	
	$result = $conn->query($sql);
	
	$vals = '';
	if ($result->num_rows > 0) {
	
	  $extra = '';
	  // output data of each row
	  while($row = $result->fetch_assoc()) {
		$vals .= $extra.$row["make_name"];
		$extra = ',';
	  }
		echo json_encode($vals);
	} else {
	  echo "0";
	}
	
	closeConn();

?>