<?php

session_start(); # server side storage session lasts like 5 mins
require_once "assets/common.php";
require_once "assets/dbconn.php";

try {
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        if(!isset($_SESSION["student_id"])) {
            $_SESSION["usermessage"] = "You are already logged in.";
            header("Location: login.php");
            exit;
        } elseif ($_SERVER["REQUEST_METHOD"] == "POST") {
            $usr = login(dbconnect_insert(), $_POST["email"]);

            if($usr && password_verify($_POST["password"], $usr["password"])) {
                $_SESSION["usermessage"] = "You are now logged in.";
                $_SESSION["student_id"] = getuserid(dbconnect_insert(), $_POST["email"]);
                header("Location: index.php");
                exit;
            } elseif (!$usr) {
                $_SESSION["usermessage"] = "invalid email or password.";
                header("Location: login.php");
            } else{
                $_SESSION["usermessage"] = "something went wrong.";
                header("Location: login.php");
                exit;
            }
        }
    }
} catch (PDOException $e) {
    $_SESSION['usermessage'] = $e->getMessage();
    header("Location: login.php");
    exit;
} catch (Exception $e) {
    $_SESSION['usermessage'] = $e->getMessage();
    header("Location: login.php");
    exit;
}
?>


<html>
    <head>
        <title>SIGN IN</title>
        <link rel="stylesheet" href="assets/styles.css">
    </head>
    <body>
        <div class="navi">
            <a href="settings.php"><img src="assets/images/cog.png" alt="Settings" id="set"></a>
            <h1 id="m_title">Sign In</h1>
            <a href="https://www.amazon.co.uk"><img src="assets/images/availableatamazon.png" alt="Available at Amazon" id="azon"></a>
        </div>
        <hr id="thick_hr">
                <div class="navbar">
            <a href="index.php" class="button-link">Home</a>
            <a href="about.php" class="button-link">About</a>
            <a href="enroll.php" class="button-link">Enroll</a>
            <a href="contact.php" class="button-link">Contact</a>
            <a href="signin.php" class="button-link">Sign In</a>
        </div>

        <div class="text_box">
            <form method="post" action="">
                <div class="label">


                    <label for="email"><strong>Email address:</strong></label><br>
                    <input type="email" name="email" id="email" placeholder="Email" required>
                    <br><br>

                    <br><br>
                    <label for="password"><strong>Password</strong>:</label><br>
                    <input type="password" name="Password" id="Password" placeholder="Password" required>
                    <br><br>

                </div>


                <div class=submit>
                    <input type='submit' name='login' value='login' />
                </div>

            </form>
        </div>

    </body>
</html>