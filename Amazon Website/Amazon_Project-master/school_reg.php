<?php
# SCHOOL REG
session_start();
require_once "assets/common.php";  // bring in the common functions
require_once "assets/dbconn.php";  // bring in the dbconnection, not ideal way to execute

if ($_SERVER["REQUEST_METHOD"] == "POST") {  // checks for post condition

    try {  //
        if (reg_school(dbconnect_insert())) {  // ensures they are the only user and then registers them
            $_SESSION["usermessage"] = "school registration successful";
            header("Location: index.php");  // redirects them to login page
            exit;  // ensures no other code in executed
        }
    } catch (PDOException $e) {  // catch database error
        $_SESSION["usermessage"] = $e->getMessage();
        header("Location: index.php");
        exit;
    } catch (Exception $e) {
        $_SESSION["usermessage"] = $e->getMessage();
        header("Location: index.php");
        exit;
    }
}
?>


<!DOCTYPE html>

<html>

<head>
    <title>School Signup</title><!--the title displayed in the browser tab-->
    <link rel="stylesheet" href="assets/style.css"><!--uses the style sheet to change the web page to the style choices set in the web page-->
</head>

<body>
<div id="navi">
    <div class="sets">
        <a href="settings.php"><img src="assets/images/cog.png" alt="Settings" id="cog"></a>
    </div>
    <h1 id="title_text"><strong>School Sign Up</strong></h1>

    <img src="assets/images/availableatamazon.png" alt="Available at Amazon" id="amazonava_logo">
</div>


</body>
</html>

<?php
require_once "assets/navi.php"
?>

<form action='' method='post'>
    <br>
    <input type='email' name='email' placeholder='School E-mail Address' required/>
    <br>
    <input type='text' name='sname' placeholder='School name' required/>
    <br>
    <input type='text' name='phone' placeholder='School Phone' required/>
    <br>
    <input type='submit' name='submit' value='Register' />
    <br>
</form>


</body>

</html>