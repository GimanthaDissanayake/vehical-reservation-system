<?php
include("db/connection.php");

if(isset($_POST['submit'])){
    $username = $_POST["username"];
    $password = md5($_POST["password"]);
    $role = $_POST["role"];

    $sql = "INSERT INTO User(username,password,role) VALUES('$username','$password','$role')";
    if(!mysqli_query($conn,$sql)){
        die("Failed to create user: ".mysqli_error($conn));
    }
    echo "successful";
}