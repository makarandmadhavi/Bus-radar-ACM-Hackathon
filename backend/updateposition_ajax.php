<?php
    include 'conn.php';
    $data = $_POST;
    $latitude = $data['latitude'];
    $longitude = $data['longitude'];
    $busno = $data['busno'];
    //echo $busno;

    $sql = "SELECT * FROM stops";
    $result = $conn->query($sql);
    $stops = array();
    while($row = $result->fetch_assoc()){
        array_push($stops,$row);
    }
    //print_r($stops);
    foreach ($stops as $stop) {
        $distance = sqrt(pow($latitude - $stop['latitude'],2) + pow($longitude - $stop['longitude'],2));
        $time = floor(pow($distance/0.01,1.5));
        echo $stop['stopname']." ".$distance." - ".$time."\n" ;
        $name = $stop['stopname'];
        $sql = "UPDATE route SET time='$time' WHERE StopName = '$name' AND BusNo = '$busno'";
        $result = $conn->query($sql);
        //print_r($result."\n");
    }
?>