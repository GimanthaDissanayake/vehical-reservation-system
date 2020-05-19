<?php
include("../db/connection.php");
require("../classes/Customer.php");

if(isset($_POST['submit'])){
    $c = new Customer($_POST["nic"],$_POST["licenseNumber"],$_POST["FName"],$_POST["MName"],$_POST["LName"],$_POST["email"],$_POST["address"],$_POST["telephone"]);

    $username = $_POST["username"];
    $password = md5($_POST["password"]);
    
    $c->insertCustomer($username,$password);
    header('Location:../login.php');
    // $sql = "INSERT INTO User(username,password,role) VALUES('$username','$password','$role')";
    // if(!mysqli_query($conn,$sql)){
    //     die("Failed to create user: ".mysqli_error($conn));
    // }
    // echo "successful";
}
?>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <!--    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/sign-in/">-->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- styles for icons -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
    <!--    &lt;!&ndash; Custom styles for this template &ndash;&gt;-->
    <link href="../styles/styles.css" rel="stylesheet" type="text/css">

    <title>Rent a Car by Vivoxa Labs</title>
</head>
<body class="text-center">

    <header>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <a class="navbar-brand" href="./index.html">RentX</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                    aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="../index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../fleet.html">Our Vehicle Fleet</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Our Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact Us</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <br><br>

    <div class="card bg-light">
        <article class="card-body mx-auto" style="max-width: 400px;">
            <h4 class="card-title mt-3 text-center">Create Account</h4>
            <p class="text-center">Get started with your free account</p>
            <form action="#" method="POST">
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                    </div>
                    <input name="nic" class="form-control" placeholder="NIC Number" type="text" >
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                    </div>
                    <input name="licenseNumber" class="form-control" placeholder="License Number" type="text" >                
                </div> <!-- form-group// -->                
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                    </div>
                    <input name="FName" class="form-control" placeholder="First Name" type="text" >

                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                    </div>
                    <input name="MName" class="form-control" placeholder="Middle Name" type="text" >

                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                    </div>
                    <input name="LName" class="form-control" placeholder="Last Name" type="text" >
                </div> <!-- form-group// -->
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
                    </div>
                    <input name="email" class="form-control" placeholder="Email address" type="email" >
                </div> <!-- form-group// -->
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
                    </div>
                    <input name="address" class="form-control" placeholder="Address" type="text" >
                </div> <!-- form-group// -->
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
                    </div>
                    <input name="telephone" class="form-control" placeholder="Phone number" type="text" >
                </div> <!-- form-group// -->
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                    </div>
                    <input name="username" class="form-control" placeholder="Username" type="text" >
                </div> <!-- form-group// -->
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                    </div>
                    <input class="form-control" placeholder="Create password" type="password" >
                </div> <!-- form-group// -->
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                    </div>
                    <input name="password" class="form-control" placeholder="Repeat password" type="password" >
                </div> <!-- form-group// -->                                      
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block" name="submit"> Create Account  </button>
                </div> <!-- form-group// -->      
                <p class="text-center">Have an account? <a href="./login.php">Log In</a> </p>                                                                 
            </form>
        </article>
    </div> <!-- card.// -->

    <!-- <div class="div-form container-fluid" id="signupform" >
        <form class="form-signin"   method="post" action="./signup.php">
            <input class="form-control" type="text" name="username" placeholder="Username" required autofocus>
            <input class="form-control" type="password" name="password" required placeholder="Password">
            <input type="password" class="form-control" name="conf-pass" required placeholder="Re-enter password">
            <select class="custom-select" name="role">
                <option selected value="1">Self Drive</option>
                <option value="2">With Driver</option>
                <option value="3">Wedding Ride</option>
            </select>
            <button type="button" class=" btn btn-success " name="signup" type="submit">Sign up</button>
        </form>
    </div> -->

    <p class="mt-5 mb-3 text-muted">&copy; 2020</p>
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
            crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
            crossorigin="anonymous"></script>
    <script src="../js/signup.js"></script>
</body>
</html>