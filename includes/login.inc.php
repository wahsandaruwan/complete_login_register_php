<?php
    // --Add dbh file--
    require_once "./dbh.inc.php";
    // --Add validation file--
    require_once "./validations.inc.php";

    // If user clicks the login button
    if(isset($_POST["login-btn"])){
        // Get form input data
        $email = $_POST["email"];
        $pass = $_POST["pass"];

        // Input validation
        if(inputsEmptyLogin($email, $pass)){
            header("location:../index.php?err=empty_inputs");
        }
        else if(emailInvalid($email)){
            header("location:../index.php?err=invalid_email");
        }
        else if(passwordInvalid($pass)){
            header("location:../index.php?err=invalid_password");
        }
        else{
            // If all inputs are error free
            loginUser($conn, $email, $pass);
        }
    }
    else{
        header("location:../index.php");
        exit();
    }
?>