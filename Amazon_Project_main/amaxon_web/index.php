<!DOCTYPE html> <!-- States this part of the document as a HTML file. -->
<?php
session_start();
$_SESSION['Title'] = "Home";
?>
<html> <!-- The start of the HTML page. -->
    <head> <!-- The head of the page, usually has the title, which is the tab's name as well as the link to the stylesheet to decorate the website. -->
        <title>Homepage</title>
        <link rel="stylesheet" href="assets/styles.css">
    </head>

    <body> <!-- The body of the html, contains a navigation bar, as well as buttons to other websites, a banner image and information. -->
        <?php
        require_once('assets/navi.php');
        require_once("assets/ai.php");
        ?>

        <div> <!-- The division for the image banner on the home page. -->
            <img src="assets/images/amazon_tlevel.png" alt="Amazon T-Level" id="imgbanner">
        </div>

        <div class="basics"> <!-- The information on the home page. -->

            <div class="label_div">
                <h1>T-Level Digital Support</h1>
                <p>Amazon can offer useful support for students on Digital T Levels in developing practical skills relevant to the industry.
                    Students are able to learn more about cloud computing, software development, cybersecurity, and data management by having access to technology, online tools, and learning resources.
                    Such support can help to close the gap between classroom learning and skills demanded in the digital workplace.</p>
            </div>

            <div class="label_div">
                <h1>Experience in the Industry and Opportunities.</h1>
                <p>Working or learning with a company like Amazon can also give Digital T Level students insight into how technology is used in a large organization.
                    Employers can lead projects, talks, mentoring, work placements and opportunities to learn about different digital careers that students are able to benefit from.
                    The experience can help students build confidence, develop professional skills and see how the knowledge gained during their T Level can be applied in a real working environment.</p>
            </div>

        </div>


    </body>
</html>