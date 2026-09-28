
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
            if (onlyuser(dbconnect_insert(), $_POST["student_email"])) {
                if (reg_user(dbconnect_insert())) {
                    $_SESSION["usermessage"] = "You are successfully registered.";
                    header("Location: signin.php");
                    exit;
                } else {
                    $_SESSION["usermessage"] = "There was an error registering your account.";
                    header("Location: enroll.php");
                    exit;
                }
            } else {
                $_SESSION["usermessage"] = "Email not unique.";
                header("Location: enroll.php");
            }
        } else {
            $_SESSION["usermessage"] = "Passwords do not match.";
            header("Location: enroll.php");
            exit;
        }
    }

} catch (PDOException $e) {
    $_SESSION["usermessage"] = $e->getMessage();
    header("Location: enroll.php");
    exit;
} catch (Exception $e) {
    $_SESSION["usermessage"] = $e->getMessage();
    header("Location: enroll.php");
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
    require_once('assets/navi.php');
    require_once("assets/ai.php");
    ?>

            <form method="post" action="">
                <div class="label_div">


                    <label for="Firstname"><strong>First Name</strong></label><br>
                    <input type="text" name="f_name" id="Firstname" placeholder="Firstname" required>
                    <label for="Surname"><strong>Last Name</strong></label><br>
                    <input type="text" name="s_name" id="Surname" placeholder="Surname" required>
                    <label for="email"><strong>School Email</strong></label><br>
                    <input type="email" name="email" id="email" placeholder="Email" required><br>
                    <label for="school">School</label>
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

                    <label for="Pathway"><strong>Pathway</strong></label><br>
                    <select id="Pathway">
                        <option>Digital</option>
                        <option>Business</option>
                        <option>Finance</option>
                        <option>Media</option>
                        <option>Engineering</option>
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