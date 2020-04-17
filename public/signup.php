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
    <link href="./styles/styles.css" rel="stylesheet" type="text/css">

    <title>Rent a Car by Vivoxa Labs</title>
</head>
<body class="text-center">
    <div class="div-form container-fluid" id="signupform" >
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
    <script src="js/signup.js"></script>
</body>
</html>