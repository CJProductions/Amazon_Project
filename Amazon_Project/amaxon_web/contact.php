<!DOCTYPE html>

<html>
    <head>
        <title>CONTACT</title>
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        <div class="navi">
            <a href="settings.php"><img src="cog.png" alt="Settings" id="set"></a>
            <h1 id="m_title">Contact</h1>
            <a href="https://www.amazon.co.uk"><img src="availableatamazon.png" alt="Available at Amazon" id="azon"></a>
        </div>
        <hr id="thick_hr">
                <div class="navbar">
            <a href="index.php" class="button-link">Home</a>
            <a href="about.php" class="button-link">About</a>
            <a href="enroll.php" class="button-link">Enroll</a>
            <a href="contact.php" class="button-link">Contact</a>
            <a href="signin.php" class="button-link">Sign In</a>
        </div>


        <div class="text_box">
            <form method="post" action="">

                <label for="email"><strong>Email address:</strong></label><br>
                <input type="email" name="email" id="email" placeholder="Email" required>
                <br>

                <br><br>
                <label for="subject">Subject of matter:</label><br>
                <input type="text" name="subject" id="subject" placeholder="Subject" required>
                <br>

                <label for="message">Message:</label><br>
                <input type="text" name="message" id="message" placeholder="Message" required>
                <br>
                <br><br>
                <input type='submit' name='send' value='send' />
            </form>
        </div>


    </body>
</html>