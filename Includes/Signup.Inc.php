<?php

if (isset($_POST["submit"])){
    
    $name = $_POST["name"];
    $email = $_POST["email"];
    $username = $_POST["uid"];
    $pwd = $_POST["pwd"];
    $pwdRepeat = $_POST["pwdrepeat"];
    
    require_once 'DBH.Inc.php';
    require_once 'Functions.Inc.php';
    
    if (emptyInputSignup($name, $email, $username, $pwd, $pwdRepeat) !== false){
        header("location: ../Signup.php?error=emptyinput");
        exit();
    }
    if (invalidUid($username) !== false){
        header("location: ../Signup.php?error=invalduid");
        exit();
    }
    if (invalidEmail($email) !== false){
        header("location: ../Signup.php?error=invalidemail");
        exit();
    }
    if (pwdMatch($pwd, $pwdRepeat) !== false){
        header("location: ../Signup.php?error=passwordsdontmatch");
        exit();
    }
    if (uidExists($conn, $username, $email) !== false){
        header("location: ../Signup.php?error=usernametaken");
        exit();
    }
    
    createUser($conn, $name, $email, $username, $pwd);
}
else{
    header("location: ../Signup.php");
    exit();
}

