<!DOCTYPE html> <!-- States this part of the document as a HTML file. -->
<?php
session_start();
$_SESSION['Title'] = " T-level Student";
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
        <h1>Discover your Future with T-Level.</h1>
        <p>T Levels are two-year technical qualifications that help you develop the knowledge and practical skills you need to build a career in the digital industry.
            You will blend classroom learning with industry experience, with the chance to explore areas such as software development, cybersecurity, networking, data and digital production.
            Supported by companies like Amazon, you can learn more about how digital skills are used in real workplaces and start gaining experience for your future career.
        </p>

        <h1>Build Career Skills</h1>
        <p>A Digital T Level can help you develop more than just technical knowledge.
            You’ll have opportunities to improve your teamwork, communication, problem-solving and professional skills while working on realistic projects.
            Whether you’re interested in working in technology, continuing into higher education or exploring an apprenticeship, a T Level can help you take the next step towards your career.</p>
        <br>
    </div>