


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
?>

<form action='' method='post'>
    <br>
    <input type='email' name='school_email' placeholder='School E-mail Address' required/>
    <br>
    <input type='text' name='school_name' placeholder='School name' required/>
    <br>
    <input type='text' name='school_phone' placeholder='School Phone' required/>
    <br>

    <input type='submit' name='submit' value='Register' />
    <br>
</form>


</body>

</html>