<?php
    include 'conn.php';
    $data = $_POST;
    $busno = $data['busno'];
   
    $sql = "SELECT * FROM bus WHERE busno='$busno'";
    $result = $conn->query($sql);
    if($result){
        $row = $result->fetch_assoc();
        echo $row['busno'];
    }
    else{
        echo 'fail';
    }
?>