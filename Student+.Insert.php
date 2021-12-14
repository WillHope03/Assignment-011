<!DOCTYPE html>
<html>
<head>
    <title>Student Submit Form</title>
    <link rel="stylesheet" href="Style2.css">
</head>
<body>
<section class="signup-form">
    <div class="signupbox">
        <div class="signupform">
        <h2>Student Database</h2>
            <form action="DBH.2.Inc.php" method="post">
                <input type="text" name="studentID" placeholder="Student ID..."><br>
                <input type="text" name="firstName" placeholder="First Name..."><br>
                <input type="text" name="lastName" placeholder="Last Name..."><br>
                <input type="email" name="Email" placeholder="Email..."><br>
                <input type="text" name="Birthday" placeholder="Birthday..."><br>
                <input type="text" name="Course" placeholder="Course..."><br>
                <button type="submit" name="submit">Submit</button>
                <a href="http://localhost/website-1/student+.php">
                    <button type="button"><span></span>Back</button>
                </a>
            </form>
        </div>
    </div>
</body>
</html>