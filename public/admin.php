<?php
session_start();

include("db/connection.php");

if(!isset($_SESSION['userId']) && $_SESSION['role']!='admin')
    header('Location:login.php');
?>

<html>
<head>

</head>
<body>
    <h1>Admin Panel</h1>
</body>
</html>
