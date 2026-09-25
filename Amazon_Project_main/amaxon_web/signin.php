<?php

session_start(); # server side storage session lasts like 5 mins
require_once "assets/common.php";
require_once "assets/dbconn.php";


$_SESSION['Title'] = "Sign In";


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
    <?php
    require_once('assets/navi.php')
    ?>

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