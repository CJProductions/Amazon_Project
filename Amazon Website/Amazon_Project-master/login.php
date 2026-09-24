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

<!DOCTYPE html>

<html>


<head>
    <title>Amazon Login</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
<div id="navi">
    <div class="sets">
        <a href="settings.php"><img src="assets/images/cog.png" alt="Settings" id="cog"></a>
    </div>
    <h1 id="title_text"><strong>Amazon Login</strong></h1>

    <img src="assets/images/availableatamazon.png" alt="Available at Amazon" id="amazonava_logo">
</div>

<?php
require_once "assets/navi.php"
?>

<form action='' method='post'>
    <br>
    <input type='email' name='email' placeholder='E-mail Address' required/>
    <br>
    <input type='password' name='password' placeholder='Enter Password' required/>
    <br>
    <input type='submit' name='submit' value='Login' />
    <br>

    <!-- Content goes here -->

</body>

</html>