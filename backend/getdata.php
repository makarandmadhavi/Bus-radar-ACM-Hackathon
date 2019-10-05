<?php
    function getstops($busno){
        include 'conn.php';
        $data = array();
        //session_start();
        $desc="";
        if(isset($_SESSION['desc'])){
            $desc=$_SESSION['desc'];
        }
        $sql = "SELECT * FROM route WHERE BusNo='$busno' order by Position ".$desc;
        $result = $conn->query($sql);
        if($result){     
            while($row = $result -> fetch_assoc()){
            array_push($data,$row);
            }
        }
    return $data;
    }

    function getbussesbystop($busstop){
        include 'conn.php';
        $data = array();
        //session_start();
        $sql = "SELECT * FROM route WHERE StopName = '$busstop' AND time>0 order by time";
        $result = $conn->query($sql);
        if($result){     
            while($row = $result -> fetch_assoc()){
            array_push($data,$row);
            }
        }
    return $data;
    }

    function getbusdetails($busno){
        include 'conn.php';
        $data = array();
        //session_start();
        $sql = "SELECT * FROM bus WHERE busno = '$busno'";
        $result = $conn->query($sql);
        $row = $result -> fetch_assoc();
    return $row;
    }

    function setvisited($busstop,$busno){
        include 'conn.php';
        $data = array();
        //session_start();
        //$sql = "SELECT * FROM bus WHERE busno = '$busno'";
        //$result = $conn->query($sql);
        //$row = $result -> fetch_assoc();
    return $row;
    }

?>