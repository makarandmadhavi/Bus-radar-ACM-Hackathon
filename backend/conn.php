<?php
    $conn = mysqli_connect("localhost", "root", "", "busradar");
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    } 
?>