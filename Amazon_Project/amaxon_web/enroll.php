
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

<html>
    <head>
        <title>ENROLL</title>
        <link rel="stylesheet" href="assets/styles.css">
    </head>
    <body>
        <div class="navi">
            <a href="settings.php"><img src="assets/images/cog.png" alt="Settings" id="set"></a>
            <h1 id="m_title">Enroll</h1>
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


                    <label for="text"><strong>firstname:</strong></label><br>
                    <input type="text" name="Firstname" id="Firstname" placeholder="Firstname" required>
                    <br><br>
                    <label for="text"><strong>Surname:</strong></label><br>
                    <input type="text" name="Surname" id="Surname" placeholder="Surname" required>
                    <br><br>
                    <label for="email"><strong>School email:</strong></label><br>
                    <input type="email" name="email" id="email" placeholder="email" required>
                    <br><br>
                    <label for="text"><strong>School:</strong></label><br>
                    <input type="text" name="School" id="School" placeholder="School" required>
                    <br><br>
                    <label for="text"><strong>Pathway:</strong></label><br>
                    <input type="text" name="pathway" id="Pathway" placeholder="pathway" required>
                    <br><br>
                    <label for="text"><strong>Year group:</strong></label><br>
                    <input type="text" name="year group" id="Year group" placeholder="Year group" required>
                    <br><br>
                    <hr>
                    <label for="password"><strong>Password</strong>:</label><br>
                    <input type="password" name="Password_c" id="Password" placeholder="Password" required>
                    <br><br>
                    <label for="password"><strong>Password Confirmation</strong>:</label><br>
                    <input type="password" name="Password" id="Password" placeholder="Password confirm" required>
                    <br><br>

                </div>


                <div class=submit>
                    <input type='submit' name='login' value='login' />
                </div>
    </body>
</html>