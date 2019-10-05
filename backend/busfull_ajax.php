<?php
    include 'conn.php';
    $data = $_POST;
    $busno = $data['busno'];
    $status = $data['status'];
    $sql = "UPDATE bus SET isfull=$status WHERE busno='$busno'";
    $result = $conn->query($sql);
    if($result){
        echo 'SUCCESS';
    }
    else{
        print_r($result);
    }
?>