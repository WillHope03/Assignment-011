<!DOCTYPE html>
<html>
<head>
    <title>Course Update Form</title>
    <link rel="stylesheet" href="Style2.css">
</head>
<body>
<section class="signup-form">
    <div class="signupbox">
        <div class="signupform">
        <h2>Course Database</h2>
            <form action="DBH.4.Inc.php" method="post">
                <input type="text" name="ID" placeholder="ID..."><br>
                <input type="text" name="courseCode" placeholder="Course Code..."><br>
                <input type="text" name="courseTitle" placeholder="Course Title..."><br>
                <input type="text" name="courseType" placeholder="Course Type..."><br>
                <input type="text" name="Modules" placeholder="Modules..."><br>
                <input type="text" name="courseLength" placeholder="Length..."><br>
                <input type="text" name="moduleLeader" placeholder="Module Leader..."><br>
                <button type="submit" name="update">Submit</button>
                <a href="http://localhost/website-1/course+.php">
                    <button type="button"><span></span>Back</button>
                </a>
            </form>
        </div>
    </div>
</body>
</html>