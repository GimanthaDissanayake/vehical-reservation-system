<?php
session_start();

include("db/connection.php");

$message='';    //message to display if login credentials are incorrect

if(isset($_POST['submit'])){
    $username = $_POST["username"];
    $password = md5($_POST["password"]);
    $sql = "SELECT * FROM User WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    print_r($conn);
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['userId']=$row['userId'];
        $_SESSION['username']=$row['username'];
        $_SESSION['role']=$row['role'];
        if ($row['role']=='admin') {
            header('Location:admin.php');
        }
        else if ($row['role']=='customer') {
            header('Location:index.php');
        }
    } else {
        $message='Enter valid Username/Password';
    }
}