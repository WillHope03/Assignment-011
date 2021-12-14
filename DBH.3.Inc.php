<?php

$serverName = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "loginDatabase"; 

$conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if(isset($_POST['submit'])){
    if(!empty($_POST['staffID']) && !empty($_POST['firstName']) && !empty($_POST['lastName']) && !empty($_POST['Email']) && !empty($_POST['Birthday']) && !empty($_POST['Course'])){
        $staffID = $_POST['staffID'];
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $Email = $_POST['Email'];
        $Birthday = $_POST['Birthday'];
        $Course = $_POST['Course'];

        $query = "INSERT INTO staff(staffID, firstName, lastName, Email, Birthday, Course) VALUES('$staffID', '$firstName', '$lastName', '$Email', '$Birthday', '$Course')";

        $run = mysqli_query($conn, $query);
        if ($run){
            echo "Form submitted successfully";
        }
        else{
            echo "Form not submitted";
        }
    }
    else{
        echo "All fields are required";
    }
}

if(isset($_POST['update'])){
    $ID = $_POST['ID'];
    $query = "UPDATE staff SET staffID='$_POST[staffID]', firstName='$_POST[firstName]', lastName='$_POST[lastName]', Email='$_POST[Email]', Birthday='$_POST[Birthday]', Course='$_POST[Course]' WHERE ID='$_POST[ID]'";
    $query_run = mysqli_query($conn, $query);

    if($query_run){
        echo "Form submitted successfully";
    }
    else{
        echo "Form not submitted";
    }
}