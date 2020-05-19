<?php
    session_start();

    require("../db/connection.php");

    $message='';    //message to display if login credentials are incorrect

    if(isset($_POST['submit'])){
        $username = $_POST["username"];
        $password = md5($_POST["password"]);
        echo "$password";
        $sql = "SELECT * FROM User WHERE username='$username' AND password='$password'";
        $result = mysqli_query($conn, $sql);
        print_r($result);
        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            $_SESSION['userId']=$row['userId'];
            $_SESSION['username']=$row['username'];
            $_SESSION['role']=$row['role'];
            if ($row['role']=='admin') {
                header('Location:admin.php');
            }
            else if ($row['role']=='customer') {
                header('Location:../index.php');
            }
        } else {
            $message='Enter valid Username/Password';
        } 
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
    <!--    &lt;!&ndash; Custom styles for this template &ndash;&gt;-->
    <link href="../styles/styles.css" rel="stylesheet" type="text/css">

    <title>Rent a Car by Vivoxa Labs</title>
</head>
<body class="text-center">
<!-- <header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="#">RentX</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="./index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Our Vehicle Fleet</a>
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
</header> -->
<br><br><br>
<div class="container-fluid">
<form class="form-signin" action="#" method="POST">
        <img class="mb-4" src="../images/rc_logo.png" alt="" width="72" height="72">
        <h1 class="h2 mb-2 font-weight-normal">Sign in to your account</h1>
        <label for="username" class="sr-only">Username</label>
        <input type="text" name="username" class="form-control" placeholder="Username" required autofocus>
        <label for="password" class="sr-only">Password</label>
        <input name="password" type="password" id="password" class="form-control" placeholder="Password" required>
        <div class="checkbox mb-3">
            <label>
                <input type="checkbox" value="remember-me"> Remember me
            </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" id="signup-toggle" name="submit" type="submit">Sign in</button>
    </form>
    <p>Don't have an account? <a href="./signup.php">Sign up</a></p>
</div>
    

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
