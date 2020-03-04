<?php
    session_start();
    
    include("db/connection.php");

    if(isset($_POST['createUser'])){
        $username = $_POST['username'];
        $password = md5($_POST['password']);
        $role = 'customer';
        $nic = $_POST['nic'];
        $name = $_POST['name'];
        $address = $_POST['address'];
        $contactNo = $_POST['contact'];

        $sql = "INSERT INTO User(username,password,role) VALUES('$username','$password','$role')";        
        if(!mysqli_query($conn,$sql)){
            die("Failed to create user :" . mysqli_connect_error());
        }else{
            $last_id = mysqli_insert_id($conn);
            $sql = "INSERT INTO Customer VALUES('$nic','$name','$address','$contactNo','$last_id')";
            echo 'yo';
            if(!mysqli_query($conn,$sql))
                die("Failed to create user :" . mysqli_connect_error());
        } 
        
        header('location:login.php');
    }
?>