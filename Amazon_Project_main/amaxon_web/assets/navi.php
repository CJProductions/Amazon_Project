<link rel="stylesheet" href="style.css"><!--uses the style sheet to change the web page to the style choices set in the web page-->


<div class="navi"> <!-- The navigation stylesheet to align the icons and text to either side or the center -->
    <a href="settings.php"><img src="assets/images/cog.png" alt="Settings" id="set"></a>
    <h1 id="m_title">
        <?php
        $Title = $_SESSION['Title'];
        echo $Title;
        ?>
    </h1>
    <a href="https://www.amazon.co.uk"><img src="assets/images/availableatamazon.png" alt="Available at Amazon" id="azon"></a>
</div>
<hr id="thick_hr"> <!-- Outputs a thick horizontal rule to split the navigation bar and the buttons. -->
<div class="navbar"> <!-- The nav bar for the buttons to each page. -->
    <a href="index.php" class="button-link">Home</a>
    <a href="about.php" class="button-link">About</a>
    <a href="enroll.php" class="button-link">Enroll</a>
    <a href="contact.php" class="button-link">Contact</a>
    <a href="signin.php" class="button-link">Sign In</a>
</div>

