<?php
session_start(); # server side storage session lasts like 5 mins
require_once "assets/common.php";  // bring in the common functions
require_once "assets/dbconn.php";  // bring in the dbconnection, not ideal way to execute

#check if post

#check password match

#check if only user

# register user
try {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if ($_POST["password"] == $_POST["c_password"]) {
            if (onlyuser(dbconnect_insert(), $_POST["email"])) {
                if (reg_user(dbconnect_insert())) {
                    $_SESSION["usermessage"] = "You are successfully registered.";
                    header("Location: login.php");
                    exit;
                } else {
                    $_SESSION["usermessage"] = "There was an error registering your account.";
                    header("Location: register.php");
                    exit;
                }
            } else {
                $_SESSION["usermessage"] = "Email not unique.";
                header("Location: register.php");
            }
        } else {
            $_SESSION["usermessage"] = "Passwords do not match.";
            header("Location: register.php");
            exit;
        }
    }

} catch (PDOException $e) {
    $_SESSION["usermessage"] = $e->getMessage();
    header("Location: register.php");
    exit;
} catch (Exception $e) {
    $_SESSION["usermessage"] = $e->getMessage();
    header("Location: register.php");
    exit;
}
?>

<!DOCTYPE html>

<html>

<head>
    <title>Amazon Enroll</title><!--the title displayed in the browser tab-->
    <link rel="stylesheet" href="assets/style.css"><!--uses the style sheet to change the web page to the style choices set in the web page-->
</head>

<body>
<div id="navi">
    <div class="sets">
        <a href="settings.php"><img src="assets/images/cog.png" alt="Settings" id="cog"></a>
    </div>
    <h1 id="title_text"><strong>Amazon enroll</strong></h1>

    <img src="assets/images/availableatamazon.png" alt="Available at Amazon" id="amazonava_logo">
</div>




<?php
require_once "assets/navi.php"
?>

<!-- Content goes here -->

<form action='' method='post'>
    <br>
    <input type='email' name='email' placeholder='E-mail Address' required/>
    <br>
    <input type='password' name='password' placeholder='Enter Password' required/>
    <br>
    <input type='password' name='c_password' placeholder='Confirm Password' required/>
    <br>
    <input type='text' name='fname' placeholder='Firstname' required/>
    <br>
    <input type='text' name='sname' placeholder='Surname' required/>
    <br>
    <input type="text" name="pathway" placeholder="Pathway" required/>
    <br>
    <input type="text" name="year" placeholder="Year Group" required/>
    <br>

    <?php

    try {
        $schools = school_getter(dbconnect_insert());
        echo '<select name="school_id" id="school_id">' . "\n";

        echo '    <option value="">-- Please select a school --</option>' . "\n";

        foreach ($schools as $school) {


            echo ' <option value="' . $school["school_id"] . '">' . $school["school_name"] . '</option>' . "\n";
        }

        echo '</select>';


    } catch (PDOException $e) {
        echo $e->getMessage();
        exit;
    } catch (Exception $e) {
        echo $e->getMessage();
        exit;
    }
    ?>


    <br>
    <input type='submit' name='submit' value='Register' />
    <br>
</form>

</body>

</html>