<!DOCTYPE html>
<html>

<head>
    <title>Student Search</title>
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
    <form method="post">
        <label for="inputSearch">Search</label>
        <input name="search" id="inputSearch">
        <button>Submit</button>
    </form> 
</body>
</html>

<?php
if (!empty($_POST["search"])){
    $con = new PDO("mysql:host=localhost;dbname=loginDatabase",'root','');
    $sth = $con->prepare("SELECT * FROM users WHERE StudentID = ?");
    $sth->execute([$_POST["search"]]); 
?> 

        <tr>
            <?php if($row = $sth->fetchObject()){?>
                <table border="1" cellpadding="0" id="table1">
                <tr>
                    <th>StudentID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Birthday</th>
                    <th>Course</th>
                </tr>
                <td><?= $row->studentID ?></td>
                <td><?= $row->firstName ?></td>
                <td><?= $row->lastName ?></td>
                <td><?= $row->Email ?></td>
                <td><?= $row->Birthday ?></td>
                <td><?= $row->Course ?></td>
            <?php } else { ?>
                <td colspan=2>Student cannot be found on our database</td>
            <?php } ?>
        </tr>
   </table>
<?php } ?>