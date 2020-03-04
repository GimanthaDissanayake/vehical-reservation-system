<?php
    session_start();
    
    include("db/connection.php");

    if(!isset($_SESSION['userId']))
        header('Location:login.php');    
?>