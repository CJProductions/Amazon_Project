<!DOCTYPE html>

<html>
    <head>
        <title>SIGN IN</title>
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        <div class="navi">
            <a href="settings.php"><img src="cog.png" alt="Settings" id="set"></a>
            <h1 id="m_title">Sign In</h1>
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
</html>