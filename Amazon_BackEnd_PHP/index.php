<?php

require_once 'assets/common.php';
require_once 'assets/dbconn.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {  #checks for condition

    try{
        if(reg_student(dbconnect_insert())) {

            header('Location: index.php');
            exit;
        }
    }
    catch(PDOException $e){
        echo $e->getMessage();
        exit;
    }
    catch(Exception $e){
        echo $e->getMessage();
        exit;
    }
}


?>

<!DOCTYPE html>

<html>

<head>
    <title>Test</title>
</head>

<body>


<form action='' method="post">


    <input type="text" name="fname" placeholder="First Name" required/>
    <br>
    <input type="text" name="sname" placeholder="Surname" required/>
    <br>
    <input type="text" name="year" placeholder="Year" required/>
    <br>
    <input type="text" name="pathway" placeholder="Pathway" required/>
    <br>
    <input type="email" name="email" placeholder="E-mail" required/>
    <br>

    <?php

    try{
        $schools = school_getter(dbconnect_insert());
        echo nl2br('<select name="School_ID" id="School_ID">' . "\n");

        echo nl2br('<option value="">-- Please Select A School --</option>' . "\n");

        foreach ($schools as $school) {
            echo nl2br('<option value="' . $school["School_ID"] . '">' . $school["School_Name"] . '</option>' . "\n");
        }

    echo '</select>';
    } catch(PDOException $e){
        echo $e->getMessage();
        exit;
    } catch(Exception $e) {
        echo $e->getMessage();
        exit;
    }

    ?>

    <br><br>
    <input type="submit" value="Register"/>



</form>

</body>

</html>