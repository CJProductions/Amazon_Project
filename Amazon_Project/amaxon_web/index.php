<!DOCTYPE html> <!-- States this part of the document as a HTML file. -->

<html> <!-- The start of the HTML page. -->
    <head> <!-- The head of the page, usually has the title, which is the tab's name as well as the link to the stylesheet to decorate the website. -->
        <title>HOMEPAGE</title>
        <link rel="stylesheet" href="assets/styles.css">
    </head>
    <body> <!-- The body of the html, contains a navigation bar, as well as buttons to other websites, a banner image and information. -->
        <div class="navi"> <!-- The navigation stylesheet to align the icons and text to either side or the center -->
            <a href="settings.php"><img src="assets/images/cog.png" alt="Settings" id="set"></a>
            <h1 id="m_title">Amazon T-Levels</h1>
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
        <div> <!-- The division for the image banner on the home page. -->
            <img src="assets/images/amazon_tlevel.png" alt="Amazon T-Level" id="imgbanner">
        </div>
        <div class="basics"> <!-- The information on the home page. -->
            <h1>Header 1</h1>
            <p>Paragraph 1</p>
            <br>
            <h1>Header 2</h1>
            <p>Paragraph 2</p>
        </div>
    </body>
</html>