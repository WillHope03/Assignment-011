<head>
    <title>Sign up</title>
    <link rel="stylesheet" href="Style2.css">
</head>

<body>
<section class="signup-form">
    <div class="signupbox">
        <div class="signupform">    
            <h2>Sign Up</h2>
            <form action="Includes/Signup.Inc.php" method="post">
                <input type="text" name="name" placeholder="Fullname...">
                <input type="text" name="email" placeholder="Email...">
                <input type="text" name="uid" placeholder="Username...">
                <input type="password" name="pwd" placeholder="Password...">
                <input type="password" name="pwdrepeat" placeholder="Repeat password...">
                <button type="submit" name="submit">Sign up</button>
                <a href="Starting.html">
                    <button type="button"><span></span>Back</button>
                </a>
            </form>
        </div>
    </div>
    
    <?php
    if (isset($_GET["error"])){
        if ($_GET["error"] == "emptyinput"){
            echo "<p>Fill in all fields!</p>";
        }
        else if ($_GET["error"] == "invaliduid"){
            echo "<p>Choose a proper username</p>";
        }
        else if ($_GET["error"] == "invalidemail"){
            echo "<p>Choose a proper Email</p>";
        }
        else if ($_GET["error"] == "passwordsdontmatch"){
            echo "<p>Passwords do not match</p>";
        }
        else if ($_GET["error"] == "usernametaken"){
            echo "<p>Username is already taken</p>";
        }
        else if ($_GET["error"] == "stmtfailed"){
            echo "<p>Something went wrong</p>";
        }
        else if ($_GET["error"] == "invaliduid"){
            echo "<p>Choose a proper username</p>";
        }
        else if ($_GET["error"] == "none"){
            echo "<p>You have successfully signed up</p>";
        }
    }
    ?>
</section>
</body>
