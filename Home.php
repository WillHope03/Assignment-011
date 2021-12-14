<?php
    session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <title>Anglia Ruskin University</title>
    <link rel="stylesheet" href="Style.css">
</head>

<body>
    <div class="banner">
        <div class="navbar">
            <img src="Logo.png" class="logo">
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

        <div class="content">
            <h1>Anglia Ruskin University</h1>
            <p>Excellence through partnerships</p>
            <?php
                echo "<p>You're currently logged in as " . $_SESSION["useruid"] . "</p>";
            ?>
        </div>
    </div>
</body>

</html>
