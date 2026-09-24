<?php

$email = $_POST["email"];
$subject = $_POST["password"];

?>

<html lang="">
<head>
    <title>Amazon Login</title> <!--the title displayed in the browser tab-->
    <link rel="stylesheet" href="assets/style.css"><!--uses the style sheet to change the web page to the style choices set in the web page-->
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

<div class="text_box">
    <form method="post" action="">
        <div class="label">


        <label for="email"><strong>Email address:</strong></label><br>
        <input type="email" name="email" id="email" placeholder="Email" required>
        <br><br>

        <br><br>
        <label for="password"><strong>Password</strong>:</label><br>
        <input type="password" name="Password" id="Password" placeholder="Password" required>
        <br><br>

        </div>


            <div class=submit>
                <input type='submit' name='login' value='login' />
            </div>

    </form>
</div>


</body>

