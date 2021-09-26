<?php
    // Add dbh file
    require_once "./dbh.inc.php";

    // If user clicks the register button
    if(isset($_POST["register-btn"])){
        // Get form input data
        $fname = $_POST["fname"];
        $lname = $_POST["lname"];
        $email = $_POST["email"];
        $mobile = $_POST["mobile"];
        $pass = $_POST["pass"];
        $re_pass = $_POST["re_pass"];

        // Input validation
        if(inputsEmpty($fname, $lname, $email, $mobile, $pass, $re_pass)){
            header("location:../index.php?err=empty_inputs");
            exit();
        }
        else if(nameInvalid($fname, $lname)){
            header("location:../index.php?err=invalid_name");
            exit();
        }
        else if(emailInvalid($email)){
            header("location:../index.php?err=invalid_email");
            exit();
        }
        else if(mobileInvalid($mobile)){
            header("location:../index.php?err=invalid_mobile");
            exit();
        }
        else if(!passMatch($pass, $re_pass)){
            header("location:../index.php?err=different_pass");
            exit();
        }
        else if(emailAvailable($email)){
            header("location:../index.php?err=available_email");
            exit();
        }
        else if(mobileAvailable($mobile)){
            header("location:../index.php?err=available_mobile");
            exit();
        }
        else{
            // If all inputs are error free
            registerNewUser($fname, $lname, $email, $mobile, $pass);
        }
    }
    else{
        header("location:../index.php");
        exit();
    }
?>