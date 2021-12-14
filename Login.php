<head>
    <title>Login</title>
    <link rel="stylesheet" href="Style2.css">
</head>

<body>
<section class="signup-form">
    <div class="signupbox">
        <div class="signupform">    
            <h2>Login</h2>
            <form action="Includes/Login.Inc.php" method="post">
                <input type="text" name="uid" placeholder="Username/Email...">
                <input type="password" name="pwd" placeholder="Password...">
                <button type="submit" name="submit">Login</button>
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
        else if ($_GET["error"] == "wronglogin"){
            echo "<p>Incorrect login information</p>";
        }
    }
    ?>
</section>
</body>