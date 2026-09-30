


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
if ($_SERVER["REQUEST_METHOD"] == "POST") {  // checks for post condition

try {  //
if (reg_school(dbconnect_insert())) {  // ensures they are the only user and then registers them
$_SESSION['usermessage'] = "School Registration Successful";
header("Location: index.php");  // redirects them to login page
exit;  // ensures no other code in executed
}
} catch (PDOException $e) {  // catch database error
$_SESSION['usermessage'] = "School Registration Successful";
header("Location: index.php");  // redirects them to login page
exit;
} catch (Exception $e) {  // Catches all other errors
$_SESSION['usermessage'] = "School Registration Successful";
header("Location: index.php");  // redirects them to login page
exit;
}
}
?>

<form action='' method='post'>
    <div class="label_div">
        <input type='text' name='school_name' placeholder='School name' required/>
        <input type='text' name='school_phone' placeholder='School Phone' required/>
        <input type='email' name='school_email' placeholder='School E-mail Address' required/>
        <input type='submit' name='submit' value='Register' />


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


    </div>
</form>


</body>

</html>