<?php
    session_start();
    
    include("db/connection.php");
    //require("Customer.php");
    require("User.php");

    //$u = new User();
    //echo $u->checkPassword(14);
    //$u->deleteUser(17);

    //$c = new Customer('444v','456456','fff123','mmm12','llll12','kdwath2','0713197773');
    //$c->insertCustomer('testUser','testPw');
    //$c->updateCustomer(2,'2345v','123123','fff','mmm','llll','kdwath','1231231231');
    //print_r($c->selectCustomer(3));
    /*
    $result = $c->selectAllCustomers();
    
    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            print_r($row);
        }
    } else {
        echo "0 results";
    }*/

/*
    function createUser(){
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
                if(!mysqli_query($conn,$sql))
                    die("Failed to create user :" . mysqli_connect_error());
            }             
            header('location:login.php');
        }        
    }

    function updateUser(){
        if(isset($_POST['updateUser'])){
            $username = $_POST['username'];
            $password = md5($_POST['password']);
            $role = 'customer';
    
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
            
        }
    }

    function updateCustomer(){
        
    }

    function deleteUser(){

    }*/

?>