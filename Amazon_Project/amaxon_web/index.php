<!DOCTYPE html> <!-- States this part of the document as a HTML file. -->

<html> <!-- The start of the HTML page. -->
    <head> <!-- The head of the page, usually has the title, which is the tab's name as well as the link to the stylesheet to decorate the website. -->
        <title>HOMEPAGE</title>
        <link rel="stylesheet" href="styles.css">
    </head>
    <body> <!-- The body of the html, contains a navigation bar, as well as buttons to other websites, a banner image and information. -->
        <div class="navi"> <!-- The navigation stylesheet to align the icons and text to either side or the center -->
            <a href="settings.php"><img src="cog.png" alt="Settings" id="set"></a>
            <h1 id="m_title">Amazon T-Levels</h1>
            <a href="https://www.amazon.co.uk"><img src="availableatamazon.png" alt="Available at Amazon" id="azon"></a>
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
            <img src="amazon_tlevel.png" alt="Amazon T-Level" id="imgbanner">
        </div>
        <div class="basics"> <!-- The information on the home page. -->
            <h1>T-Level Digital Support</h1>
            <p>Amazon can offer useful support for students on Digital T Levels in developing practical skills relevant to the industry.
                Students are able to learn more about cloud computing, software development, cybersecurity, and data management by having access to technology, online tools, and learning resources.
                Such support can help to close the gap between classroom learning and skills demanded in the digital workplace.</p>
            <br>
            <h1>Experience in the Industry and Opportunities.</h1>
            <p>Working or learning with a company like Amazon can also give Digital T Level students insight into how technology is used in a large organization.
                Employers can lead projects, talks, mentoring, work placements and opportunities to learn about different digital careers that students are able to benefit from.
                The experience can help students build confidence, develop professional skills and see how the knowledge gained during their T Level can be applied in a real working environment.</p>
        </div>
    </body>
</html>