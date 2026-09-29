<!DOCTYPE html> <!-- States this part of the document as A HTML file. -->

<?php // start php
session_start(); // session variables expires after 5 minutes
require_once "assets/common.php";  // bring in the common functions
require_once "assets/dbconn.php";  // bring in the dbconnection, not ideal way to execute
$_SESSION['Title'] = "Contact"; // link to Title variable and make is contact
?> <!-- close php-->
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {  // checks for post condition

    try {  //
        if (reg_staff(dbconnect_insert())) {  // ensures they are the only user and then registers them
            $_SESSION['usermessage'] = "staff Registration Successful";
            header("Location: index.php");  // redirects them to login page
            exit;  // ensures no other code in executed
        }
    } catch (PDOException $e) {  // catch database error
        $_SESSION['usermessage'] = "School Registration Successful";
        header("Location: index.php");  // redirects them to login page
        exit;
    } catch (Exception $e) {  // Catches all other errors
        $_SESSION['usermessage'] = "School Registration Successful";
        header("Location: index.php");  // redirects them to login page
        exit;
    }
}
?>
<html lang=""> <!-- start html -->

    <head>
        <title>Contact</title>
        <link rel="stylesheet" href="assets/styles.css"> <!-- refer to style.css to make everything stylised -->
    </head>

    <body>

    <?php // start php
    require_once('assets/navi.php'); // open both navi and AI and implement them to the website
    require_once("assets/ai.php");
    ?>

        <div class="label_div"> <!-- refer to label_div to style the content below -->
            <form method="post" action=""> <!-- form for user inputs -->

                <label for="f_name">First name</label>
                <input type="text" name="f_name" id="f_name" placeholder="First name" required>
                <br>
                <label for="s_name">Second name</label>
                <input type="text" name="s_name" id="s_name" placeholder="Second name" required>
                <br>
                <label for="email"><strong>Email address:</strong></label><br>
                <input type="email" name="career_email" id="email" placeholder="Email" required>
                <br>
                <label for="password">Password</label>
                <input type="password" name="password" id="password" placeholder="Password" required>
                <br>
                <label for="school">School</label>
                <br>
                <?php

                try {
                    $schools = school_getter(dbconnect_insert());
                    echo '<select name="school_id" id="school_id">' . "\n";

                    echo '    <option value="">Please select a school</option>' . "\n";

                    foreach ($schools as $school) {


                        echo ' <option value="' . $school["school_id"] . '">' . $school["school_name"] . '</option>' . "\n";
                    }

                    echo '</select>';


                } catch (PDOException $e) {
                    echo $e->getMessage();
                    exit;
                } catch (Exception $e) {
                    echo $e->getMessage();
                    exit;
                }
                ?>
                <br>
                <label for="amazon_id">Amazon Mentor</label>
                <?php

                try {
                    $amazons = amazon_getter(dbconnect_insert());
                    echo '<select name="amazon_id" id="amazon_id">' . "\n";

                    echo '    <option value="">-- Please select an Amazon staff member --</option>' . "\n";

                    foreach ($amazons as $amazon) {


                        echo ' <option value="' . $amazon["amazon_id"] . '">' . $amazon["username"] . '</option>' . "\n";
                    }

                    echo '</select>';



                } catch (PDOException $e) {
                    echo $e->getMessage();
                    exit;
                } catch (Exception $e) {
                    echo $e->getMessage();
                    exit;
                }
                ?>
                <br>
                <input type='submit' name='send' value='send' >

            </form> <!-- close form -->
        </div> <!-- close style refence -->


    </body>
</html>