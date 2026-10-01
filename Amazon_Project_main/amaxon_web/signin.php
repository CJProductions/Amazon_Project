<?php

require_once "assets/common.php";
require_once "assets/dbconn.php";

$_SESSION['Title'] = "Sign In";


try {
    if($_SERVER["REQUEST_METHOD"] == "POST") {

        if (!isset($_SESSION["student_id"])) {
            $_SESSION["usermessage"] = "You are already logged in.";
            header("Location: students.php");
            exit;
        }

        elseif ($_SERVER["REQUEST_METHOD"] == "POST") {
            $usr = login(dbconnect_insert(), $_POST["email"]);

            if($usr && password_verify($_POST["password"], $usr["password"])) {
                $_SESSION["usermessage"] = "You are now logged in.";
                $_SESSION["student_id"] = getuserid(dbconnect_insert(), $_POST["email"]);
                header("Location: students.php");
                exit;
            }
            elseif (!$usr) {
                $_SESSION["usermessage"] = "invalid email or password.";
                header("Location: signin.php");
            }
            else{
                $_SESSION["usermessage"] = "something went wrong.";
                header("Location: signin.php");
                exit;
            }
        }
    }
} catch (PDOException $e) {
    $_SESSION['usermessage'] = $e->getMessage();
    header("Location: signin.php");
    exit;
} catch (Exception $e) {
    $_SESSION['usermessage'] = $e->getMessage();
    header("Location: signin.php");
    exit;
}
?>


<html lang="">
    <head>
        <title>SIGN IN</title>
        <link rel="stylesheet" href="assets/styles.css">
    </head>
    <body>
    <?php
        require_once('assets/navi.php');
        require_once("assets/ai.php");
        ?>
            <form method="post" action=""> <!-- make a form for users to input information-->
                <?php echo user_message(); ?>
                <div class="label_div">

                    <label for="email"><strong>Email Address</strong></label><br>
                    <input type="email" name="email" id="email" placeholder="Email" required>
                    <br>

                    <label for="password"><strong>Password</strong></label><br>
                    <input type="password" name="password" id="Password" placeholder="Password" required>
                    <br>

                    <input type='submit' name='login' value='login' />

                </div>

            </form>

    </body>
</html>