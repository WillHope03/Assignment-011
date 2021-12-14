<!DOCTYPE html>
<html>
<head>
    <title>Staff Update Form</title>
    <link rel="stylesheet" href="Style2.css">
</head>
<body>
<section class="signup-form">
    <div class="signupbox">
        <div class="signupform">
        <h2>Staff Database</h2>
            <form action="DBH.3.Inc.php" method="post">
                <input type="text" name="ID" placeholder="ID..."><br>
                <input type="text" name="staffID" placeholder="Staff ID..."><br>
                <input type="text" name="firstName" placeholder="First Name..."><br>
                <input type="text" name="lastName" placeholder="Last Name..."><br>
                <input type="email" name="Email" placeholder="Email..."><br>
                <input type="text" name="Birthday" placeholder="Birthday..."><br>
                <input type="text" name="Course" placeholder="Course..."><br>
                <button type="submit" name="update">Submit</button>
                <a href="http://localhost/website-1/staff+.php">
                    <button type="button"><span></span>Back</button>
                </a>
            </form>
        </div>
    </div>
</body>
</html>