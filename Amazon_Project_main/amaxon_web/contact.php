<!DOCTYPE html> <!-- States this part of the document as A HTML file. -->

<?php // start php
session_start(); // basic syntax for session variables
$_SESSION['Title'] = "Contact"; // link to Title variable and make is contact
?> <!-- close php-->

<html lang=""> <!-- start html -->

    <head>
        <title>Contact</title>
        <link rel="stylesheet" href="assets/styles.css"> <!-- refer to style.css to make everything stylised -->
    </head>

    <body>

    <?php // start php
    require_once('assets/navi.php'); // open both navi and AI and implement them to the website
    require_once("assets/ai.php");
    ?>

        <div class="label_div"> <!-- refer to label_div to style the content below -->
            <form method="post" action=""> <!-- form for user inputs -->

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

            </form> <!-- close form -->
        </div> <!-- close style refence -->


    </body>
</html>