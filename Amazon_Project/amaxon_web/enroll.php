<!DOCTYPE html> <!-- States this part of the document as a HTML file. -->

<html>
    <head>
        <title>ENROLL</title>
        <link rel="stylesheet" href="assets/styles.css">
    </head>
    <body>
        <div class="navi">
            <a href="settings.php"><img src="assets/images/cog.png" alt="Settings" id="set"></a>
            <h1 id="m_title">Enroll</h1>
            <a href="https://www.amazon.co.uk"><img src="assets/images/availableatamazon.png" alt="Available at Amazon" id="azon"></a>
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


                    <label for="text"><strong>firstname:</strong></label><br>
                    <input type="text" name="Firstname" id="Firstname" placeholder="Firstname" required>
                    <br><br>
                    <label for="text"><strong>Surname:</strong></label><br>
                    <input type="text" name="Surname" id="Surname" placeholder="Surname" required>
                    <br><br>
                    <label for="email"><strong>School email:</strong></label><br>
                    <input type="email" name="email" id="email" placeholder="email" required>
                    <br><br>
                    <label for="text"><strong>School:</strong></label><br>
                    <input type="text" name="School" id="School" placeholder="School" required>
                    <br><br>
                    <label for="text"><strong>Pathway:</strong></label><br>
                    <input type="text" name="pathway" id="Pathway" placeholder="pathway" required>
                    <br><br>
                    <label for="text"><strong>Year group:</strong></label><br>
                    <input type="text" name="year group" id="Year group" placeholder="Year group" required>
                    <br><br>
                    <hr>
                    <label for="password"><strong>Password</strong>:</label><br>
                    <input type="password" name="Password_c" id="Password" placeholder="Password" required>
                    <br><br>
                    <label for="password"><strong>Password Confirmation</strong>:</label><br>
                    <input type="password" name="Password" id="Password" placeholder="Password confirm" required>
                    <br><br>

                </div>


                <div class=submit>
                    <input type='submit' name='login' value='login' />
                </div>
    </body>
</html>