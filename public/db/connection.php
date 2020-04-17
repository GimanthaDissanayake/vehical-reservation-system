<?php
//<<<<<<< HEAD:public/db/connection.php
    $servername ="mysql";
    $username = "mysqluser";
    $password = "mysqluserpwd";
//=======
    $servername = "localhost";
    $username = "root";
    $password = "";
//>>>>>>> master:db/connection.php

    $conn = mysqli_connect($servername, $username, $password);

    if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
    }
//<<<<<<< HEAD:public/db/connection.php
    echo "Successfully connected".PHP_EOL;
//=======

    if(!mysqli_select_db($conn,'VRS'))
                        die("Selecting database failed: " . mysqli_error()); 
//>>>>>>> master:db/connection.php
?>