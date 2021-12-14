<?php
include "DBH.3.Inc.php";

if (isset($_GET['ID'])){
    $id=$_GET['ID'];
    $delete=mysqli_query($conn, "DELETE FROM staff WHERE ID=$id");
    header("location:Staff+.php");
    die();
}

$select = "SELECT * FROM staff";
$query=mysqli_query($conn, $select);
?>

<!DOCTYPE html>
<html>

<head>
    <title>Staff</title>
    <link rel="stylesheet" href="Style4.css">
</head>

<body>
    <div class="navbar">
        <img src="Logo2.png" class="logo">
        <ul>
            <li><a href="http://localhost/website-1/home.php">Home</a></li>
            <li><a href="http://localhost/website-1/student.php">Students</a></li>
            <li><a href="http://localhost/website-1/student+.php">Students +</a></li>
            <li><a href="http://localhost/website-1/staff.php">Staff</a></li>
            <li><a href="http://localhost/website-1/staff+.php">Staff +</a></li>
            <li><a href="http://localhost/website-1/course.php">Courses</a></li>
            <li><a href="http://localhost/website-1/course+.php">Courses +</a></li>
            <li><a href="Starting.html">Logout</a></li>
        </ul>
    </div>
<table border="1" cellpadding="0" id="table2">
    <tr>
        <th>ID</th>
        <th>StaffID</th>
        <th>First Name</th>           
        <th>Last Name</th>
        <th>Email</th>
        <th>Birthday</th>
        <th>Course</th>
        <th>Operation</th>
    </tr>
    <?php
        $num=mysqli_num_rows($query);
        if ($num>0){
            while ($result=mysqli_fetch_assoc($query)){
                echo "
                <tr>
                    <td>".$result['ID']."</td>
                    <td>".$result['staffID']."</td>
                    <td>".$result['firstName']."</td>
                    <td>".$result['lastName']."</td>
                    <td>".$result['Email']."</td>
                    <td>".$result['Birthday']."</td>
                    <td>".$result['Course']."</td>
                    <td>
                        <a href='http://localhost/website-1/staff+.insert.php' class='btn'>Add</a>
                        <a href='http://localhost/website-1/staff+.update.php' class='btn'>Update</a>
                        <a href='http://localhost/website-1/staff+.php?ID=".$result['ID']."' class='btn'>Delete</a>
                    </td>
                </tr>
                ";
            }
        }
    ?>
</table>
</body>
</html>
