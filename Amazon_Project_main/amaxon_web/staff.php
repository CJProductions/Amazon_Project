<!DOCTYPE html> <!-- States this part of the document as a HTML file. -->
<?php
session_start();
$_SESSION['Title'] = " Staff Page";

require_once "assets/common.php";
require_once "assets/dbconn.php";

?>
<html> <!-- The start of the HTML page. -->
<head> <!-- The head of the page, usually has the title, which is the tab's name as well as the link to the stylesheet to decorate the website. -->
    <title>Staff Page</title>
    <link rel="stylesheet" href="assets/styles.css">
</head>

<body> <!-- The body of the html, contains a navigation bar, as well as buttons to other websites, a banner image and information. -->
<?php
require_once('assets/navi.php');
require_once("assets/ai.php");
?>


