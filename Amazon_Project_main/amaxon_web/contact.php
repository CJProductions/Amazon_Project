<!DOCTYPE html> <!-- States this part of the document as a HTML file. -->
<?php
session_start();
$_SESSION['Title'] = "Contact";
?>

<html>
    <head>
        <title>CONTACT</title>
        <link rel="stylesheet" href="assets/styles.css">
    </head>
    <body>

    <?php
    require_once('assets/navi.php');
    require_once("assets/ai.php");
    ?>

        <div class="labeldiv">
            <form method="post" action="">

                <label for="email"><strong>Email address:</strong></label><br>
                <input type="email" name="email" id="email" placeholder="Email" required>
                <br>

                <label for="subject">Subject:</label><br>
                <input type="text" name="subject" id="subject" placeholder="Subject" required>
                <br>

                <label for="message">Message:</label><br>
                <input type="text" name="message" id="message" placeholder="Message" required>
                <br>
                <input type='submit' name='send' value='send' >
            </form>
        </div>


    </body>
</html>