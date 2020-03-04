<?php
    $servername = "localhost";
    $username = "root";
    $password = "";

    $conn = mysqli_connect($servername, $username, $password);

    if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
    }

    if(!mysqli_select_db($conn,'VRS'))
			die("Selecting database failed: " . mysqli_error()); 
?>