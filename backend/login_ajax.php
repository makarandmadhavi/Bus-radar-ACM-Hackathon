<?php
    include 'conn.php';
    $data = $_POST;
    $username = $data['username'];
    $password = $data['password'];
    $sql = "SELECT * FROM login WHERE username='$username' AND password='$password'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    if($row){
        session_start();
        $_SESSION['username'] = $row['username'];
        echo 'SUCCESS';
    }
?>