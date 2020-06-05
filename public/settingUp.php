<?php
    //run this to set up two default logins for the application

    include("db/connection.php");

    $username = 'admin';
    $password =md5('admin');
    // echo $password;
    // echo '<br>';
    $role = 'admin';

    global $conn;
    $sql = "INSERT INTO User(username,password,role) VALUES('$username','$password','$role');";
    echo $sql;
    if(!mysqli_query($conn,$sql)){
        die("Failed to create user: ".mysqli_error($conn));
    }
?>