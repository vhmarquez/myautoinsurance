<?php
    // This file updates the track sql database
    include('dBConnect.php');
    
    function checkAndUpdate($conn,$ipaddr){
        $params = '';
        $cnt = count($_POST);
        if ($cnt < 3)
            return;
            
        $keys = array_keys($_POST);
        $vals = '';
        $trigger = false;
        for($i = 1; $i < $cnt; $i++){
            if($_POST[$keys[$i]]=='') {
                continue;
            }
            if($trigger == false){
                $vals.= $keys[$i].'='.'\''.$_POST[$keys[$i]].'\'';
                $trigger = true;
            }                
            else{
                $vals.= ",".$keys[$i]."=".'\''.$_POST[$keys[$i]].'\'';
            }
        }
        // echo 'TRIGGER: '.$trigger;
        // echo 'VALS: '.$vals;
        if($trigger == true){
            $sql = "UPDATE track SET $vals WHERE ipaddr='$ipaddr'";
            $result = $conn->query($sql);
        }
        // if(isset($_POST[$value]) && $_POST[$value] != ''){
            // $sql = "UPDATE track SET $value='$_POST[$value]' WHERE ipaddr='$ipaddr'";
            // $result = $conn->query($sql);
        // }
    }

    if(!empty($_SERVER['HTTP_CLIENT_IP'])){
        //ip from share internet
        $ipaddr = $_SERVER['HTTP_CLIENT_IP'];
    }elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
        //ip pass from proxy
        $ipaddr = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }else{
        $ipaddr = $_SERVER['REMOTE_ADDR'];
    }
    

    $duration = $_POST['duration'];
    // echo $ipaddr.' '.$duration;
    $sql = "SELECT ipaddr FROM track WHERE ipaddr = '$ipaddr'";

    $result = $conn->query($sql);

    // $row = $result->fetch_assoc();
    echo 'Num Posts'.count($_POST);
    if (mysqli_num_rows($result) > 0 ){
        // echo 'Updating';
        // echo print_r(array_keys($_POST));
        checkAndUpdate($conn,$ipaddr);

    }
    else {
        // echo 'Inserting';

        $sql = "INSERT INTO track (ipaddr) VALUES ('$ipaddr')";
        $result = $conn->query($sql);

    }
  
?>