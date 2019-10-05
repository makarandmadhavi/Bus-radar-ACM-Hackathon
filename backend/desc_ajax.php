<?php
    session_start();
    $_SESSION['desc']=$_POST['desc'];
    echo $_SESSION['desc'];

?>