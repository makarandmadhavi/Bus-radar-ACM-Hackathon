<?php
    include 'conn.php';
    session_start();
    $data = $_POST;
    $busstop = $data['busstop'];
    //$_SESSION['busstop'] = $busstop;
    //echo $_SESSION['busstop'];
    $sql = "SELECT DISTINCT * FROM stops WHERE UPPER(stopname) LIKE UPPER('%$busstop%')";
    $result = $conn->query($sql);
    
    if($result){
        $row = $result->fetch_assoc();
        //session_start();
        $_SESSION['busstop'] = $row['stopname'];
        echo $_SESSION['busstop'];
    }
?>