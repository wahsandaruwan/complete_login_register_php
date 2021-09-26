<?php
    // DB connection parameters
    $dbServer = "localhost";
    $dbUser = "root";
    $dbPass = "";
    $database = "loginreg";

    // Connect
    $conn = mysqli_connect($dbServer, $dbUser, $dbPass, $database);

    if(!$conn){
        die("Connection Failed : ".mysqli_connect_error())
    }
?>