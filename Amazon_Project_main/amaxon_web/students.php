<!DOCTYPE html> <!-- States this part of the document as a HTML file. -->
<?php
session_start();
$_SESSION['Title'] = " T-level Student";

require_once "assets/common.php";
require_once "assets/dbconn.php";

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


<div class="basics"> <!-- refer to basics style from the css style sheet -->
    <div class="label_div">
        <!-- text bulk -->
        <h2>Students</h2>
        <h1> Why placements are important.</h1>
        <p>Placements are important in amazon as it opens the window to a wide range of opportunities leading into careers with amazon.
        </p>
        <h1>Where Can This Take You</h1>
        <p>This includes roles such as degree apprenticeships in specialist fields in the country. For example, you will be learning from specialists at amazon and also gaining experience
        at university granting you an apprenticeships
        </p>
        <h1>Key Document Links</h1>
        <a href="https://amazonapprenticeships.co.uk/support"> support resources </a>
        <a href="https://www.aboutamazon.co.uk/amazon-for-schools/online-hub-offerings/t-level-placements">t-level placements</a>
        <a href="https://amazonapprenticeships.co.uk/our-programmes">programmes</a>
        <a href="assets/Amazonipcasestudy.pdf" download="Amazon in T-levels">Download the PDF</a>
    </div>


    </body>
    </html>