<?php
    $servername ="mysql";
    $username = "mysqluser";
    $password = "mysqluserpwd";

    $conn = mysqli_connect($servername, $username, $password);

    if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
    }
    echo "Successfully connected".PHP_EOL;
?>