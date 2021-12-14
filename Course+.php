<?php
include "DBH.4.Inc.php";

if (isset($_GET['ID'])){
    $id=$_GET['ID'];
    $delete=mysqli_query($conn, "DELETE FROM courses WHERE ID=$id");
    header("location:Course+.php");
    die();
}

$select = "SELECT * FROM courses";
$query=mysqli_query($conn, $select);
?>

<!DOCTYPE html>
<html>

<head>
    <title>Courses</title>
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
        <th>Course Code</th>
        <th>Course Title</th>           
        <th>Course Type</th>
        <th>Modules</th>
        <th>Length</th>
        <th>Module Leader</th>
        <th>Operation</th>
    </tr>
    <?php
        $num=mysqli_num_rows($query);
        if ($num>0){
            while ($result=mysqli_fetch_assoc($query)){
                echo "
                <tr>
                    <td>".$result['ID']."</td>
                    <td>".$result['courseCode']."</td>
                    <td>".$result['courseTitle']."</td>
                    <td>".$result['courseType']."</td>
                    <td>".$result['Modules']."</td>
                    <td>".$result['courseLength']."</td>
                    <td>".$result['moduleLeader']."</td>
                    <td>
                        <a href='http://localhost/website-1/course+.insert.php' class='btn'>Add</a>
                        <a href='http://localhost/website-1/course+.update.php' class='btn'>Update</a>
                        <a href='http://localhost/website-1/course+.php?ID=".$result['ID']."' class='btn'>Delete</a>
                    </td>
                </tr>
                ";
            }
        }
    ?>
</table>
</body>
</html>
