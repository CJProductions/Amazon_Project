


<!DOCTYPE html>
<?php
session_start();
$_SESSION['Title'] = "School Registration";
?>
<html>

<head>
    <title>School Signup</title><!--the title displayed in the browser tab-->
    <link rel="stylesheet" href="assets/styles.css">
</head>

<body>

<?php
require_once "assets/navi.php";
require_once("assets/ai.php");
require_once "assets/common.php";
require_once "assets/dbconn.php";
?>

<?php
/**
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
*/
?>

<form action='' method='post'>
    <br>
    <input type='email' name='school_email' placeholder='School E-mail Address' required/>
    <br>
    <input type='text' name='school_name' placeholder='School name' required/>
    <br>
    <input type='text' name='school_phone' placeholder='School Phone' required/>
    <br>
    <?php

    try {
        $amazons = amazon_getter(dbconnect_insert());
        echo '<select name="amazon_id" id="amazon_id">' . "\n";

        echo '    <option value="">-- Please select an Amazon staff member --</option>' . "\n";

        foreach ($amazons as $amazon) {


            echo ' <option value="' . $amazon["amazon_id"] . '">' . $amazon["username"] . '</option>' . "\n";
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

    <input type='submit' name='submit' value='Register'/>
    <br>
</form>


</body>

</html>