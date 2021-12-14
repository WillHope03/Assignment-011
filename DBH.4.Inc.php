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
    if(!empty($_POST['courseCode']) && !empty($_POST['courseTitle']) && !empty($_POST['courseType']) && !empty($_POST['Modules']) && !empty($_POST['courseLength']) && !empty($_POST['moduleLeader'])){
        $courseCode = $_POST['courseCode'];
        $courseTitle = $_POST['courseTitle'];
        $courseType = $_POST['courseType'];
        $Modules = $_POST['Modules'];
        $courseLength = $_POST['courseLength'];
        $moduleLeader = $_POST['moduleLeader'];

        $query = "INSERT INTO courses(courseCode, courseTitle, courseType, Modules, courseLength, moduleLeader) VALUES('$courseCode', '$courseTitle', '$courseType', '$Modules', '$courseLength', '$moduleLeader')";

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
    $query = "UPDATE courses SET courseCode='$_POST[courseCode]', courseTitle='$_POST[courseTitle]', courseType='$_POST[courseType]', Modules='$_POST[Modules]', courseLength='$_POST[courseLength]', moduleLeader='$_POST[moduleLeader]' WHERE ID='$_POST[ID]'";
    $query_run = mysqli_query($conn, $query);

    if($query_run){
        echo "Form submitted successfully";
    }
    else{
        echo "Form not submitted";
    }
}