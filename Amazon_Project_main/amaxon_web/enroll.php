
<?php
session_start(); # server side storage session lasts like 5 mins
require_once "assets/common.php";  // bring in the common functions
require_once "assets/dbconn.php";  // bring in the dbconnection, not ideal way to execute


$_SESSION['Title'] = "Enroll";

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

<html lang="en">

    <head>
        <title>Enroll</title>
        <link rel="stylesheet" href="assets/styles.css">
    </head>
    <body>
    <?php
    require_once('assets/navi.php')
    ?>

            <form method="post" action="">
                <div class="labeldiv">


                    <label for="Firstname"><strong>First Name</strong></label><br>
                    <input type="text" name="Firstname" id="Firstname" placeholder="Firstname" required>
                    <label for="Surname"><strong>Last Name</strong></label><br>
                    <input type="text" name="Surname" id="Surname" placeholder="Surname" required>
                    <label for="email"><strong>School Email</strong></label><br>
                    <input type="email" name="email" id="email" placeholder="email" required>


                    <label for="School"><strong>School</strong></label><br>
                    <select id="School">
                        <option>UTC Leeds</option>
                        <option>UTC Leigh</option>
                        <option>UTC Leo</option>
                    </select>


                    <label for="Pathway"><strong>Pathway</strong></label><br>
                    <select id="Pathway">
                        <option>Digital</option>
                        <option>Health and Social</option>
                    </select>


                    <label for="Year"><strong>Year Group</strong></label>
                    <select id="Year">
                        <option>12</option>
                        <option>13</option>
                    </select>


                    <label for="Password"><strong>Password</strong>:</label><br>
                    <input type="password" name="password" id="Password" placeholder="Password" required>
                    <label for="cPassword"><strong>Password Confirmation</strong>:</label><br>
                    <input type="password" name="cPassword" id="cPassword" placeholder="Password confirm" required>
                    <br>
                    <input type='submit' name='login' value='login' />
                </div>



    </body>
</html>