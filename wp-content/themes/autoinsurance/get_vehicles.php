<?php
    header('Access-Control-Allow-Origin: *'); 
    header("Content-Type: application/json;"); 
    require_once("../../../wp-load.php");

    $contentType = isset($_SERVER["CONTENT_TYPE"]) ? trim($_SERVER["CONTENT_TYPE"]) : '';
	// echo "Hello world! $contentType";
    if ($contentType === "application/json") {
        //Receive the RAW post data.
        $content = trim(file_get_contents("php://input"));

        $make_id = $content;

        global $wpdb;
        $result = $wpdb->get_results("SELECT * FROM auto_makes ORDER BY make_name ASC");
        echo json_encode($result);

        //If json_decode failed, the JSON is invalid.
        if(! is_array($decoded)) {

        } else {
            // Send error back to user.
        }
    }
    
    


?>