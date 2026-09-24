<?php
$email = $_POST["email"];
$subject = $_POST["subject"];
$message = $_POST["message"];


?>

    <html>
    <head>
        <title>Amazon Contacts</title><!--the title displayed in the browser tab-->
        <link rel="stylesheet" href="assets/style.css"><!--uses the style sheet to change the web page to the style choices set in the web page-->
    </head>

        <body>
        <div id="navi">
            <div class="sets">
                <a href="settings.php"><img src="assets/images/cog.png" alt="Settings" id="cog"></a>
            </div>
            <h1 id="title_text"><strong>Contact us</strong></h1>

            <img src="assets/images/availableatamazon.png" alt="Available at Amazon" id="amazonava_logo">
        </div>
        <?php
        require_once "assets/navi.php"
        ?>

        <div class="text_box">
            <form method="post" action="">

                <label for="email">Email</label><br>
                <input type="email" name="email" id="email" placeholder="Email" required>
                <br>


                <label for="subject">Subject of matter</label><br>
                <input type="text" name="subject" id="subject" placeholder="Subject" required>
                <br>

                <label for="message">Message</label><br>
                <input type="text" name="message" id="message" placeholder="Message" required>
                <br>

                <input type='submit' name='send' value='send' />
            </form>
        </div>

        </body>
    </html>





<div class="content">
