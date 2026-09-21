<?php
#school reg

require_once 'assets/common.php';
require_once 'assets/dbconn.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {  #checks for condition

    try{
        if(reg_school(dbconnect_insert())) {

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
    <title>School Registration</title>
</head>

<body>


<form action='' method="post">


    <input type="text" name="sname" placeholder="School Name" required/>
    <br>
    <input type="email" name="email" placeholder="School E-mail" required/>
    <br>
    <input type="text" name="phone" placeholder="Phone" required/>
    <br>
    <input type="submit" value="Register"/>


</form>

</body>

</html>