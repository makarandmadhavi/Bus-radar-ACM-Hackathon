<?php
include 'templates/header.php';
//session_start();
session_destroy();
header('location: index.php');
include 'templates/footer.php';
?>