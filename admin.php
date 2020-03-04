<?php
    session_start();
    
    include("db/connection.php");

    if(!isset($_SESSION['userId']) && $_SESSION['role']!='admin')
        header('Location:login.php');    
?>