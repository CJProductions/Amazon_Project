<?php

# user message
function user_message(){
    $message = "";
    if(isset($_SESSION["user_message"])) {
        $message = $_SESSION["user_message"];
        unset($_SESSION["user_message"]);
    }
    return $message;
}

function onlyschool($conn, $email){ // at registration check to make sure there none of the same
    $sql = "SELECT school_email FROM school WHERE school_email = ?"; // check if the inputted email is already in the emails
    $stmt = $conn->prepare($sql); // prepare sql
    $stmt->bindParam(1, $email);
    $stmt->execute(); //run sql
    $result = $stmt->fetch(PDO::FETCH_ASSOC); // bring results
    if ($result) { // if user is returned
        return false; // return false so y
    } else {
        return true;
    }

}

# only user
function onlyuser($conn, $email){ // at registration check to make sure there none of the same
    $sql = "SELECT student_email FROM t_level_student WHERE student_email = ?"; // check if the inputted email is already in the emails
    $stmt = $conn->prepare($sql); // prepare sql
    $stmt->bindParam(1, $email);
    $stmt->execute(); //run sql
    $result = $stmt->fetch(PDO::FETCH_ASSOC); // bring results
    if ($result) { // if user is returned
        return false; // return false so y
    } else {
        return true;
    }

}

# user reg
function reg_user($conn){
    // prepare sql
    $sql = "INSERT INTO t_level_student (f_name, s_name, student_email, password, year_group, pathway, school_id, amazon_id, career_id) VALUES(?,?,?,?,?,?,?,?,?)";
    $stmt = $conn->prepare($sql);

    // list and bind all parameters for security
    $stmt->bindParam(1, $_POST["f_name"]);
    $stmt->bindParam(2, $_POST["s_name"]);
    $stmt->bindParam(3, $_POST["student_email"]);
    $stmt->bindParam(4, password_hash($_POST["password"], PASSWORD_DEFAULT)); // use a hashing algorithm to encrypt the password
    $stmt->bindParam(5, $_POST["year_group"]);
    $stmt->bindParam(6, $_POST["pathway"]);
    $stmt->bindParam(7, $_POST["school_id"]);
    $stmt->bindParam(8, $_POST["amazon_id"]);
    $stmt->bindParam(9, $_POST["career_id"]);

    $stmt->execute(); // run the query
    $conn = null; // closes the connection so can't be abused
    return true; // register successful
}

# user login
function login($conn, $email){
    $sql = "SELECT student_id, password FROM t_level_student WHERE student_email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(1, $email);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    $conn = null;

    if ($result) {
        return $result;
    } else {
        return false;
    }
}

#get user id
function getuserid($conn, $email){
    $sql = "SELECT student_id FROM t_level_student WHERE student_email = ?"; // get only one student_id since there's unique emails (meaning only one can exist)
    $stmt = $conn->prepare($sql); // prepare
    $stmt->bind_param(1, $email); // bind the param for security
    $stmt->execute(); // run sql
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result["student_id"];
}

function reg_school($conn){

    // Prepare and execute the SQL query
    $sql = "INSERT INTO school (school_name, school_phone, school_email, amazon_id) VALUES (?, ?, ?, ?)";  //prepare the sql to be sent

    $stmt = $conn->prepare($sql); //prepare to sql

    $stmt->bindParam(1, $_POST['school_name']);  //bind parameters for security
    $stmt->bindParam(2, $_POST['school_phone']);
    $stmt->bindParam(3, $_POST['school_email']);
    $stmt->bindParam(4, $_POST['amazon_id']);

    $stmt->execute();  //run the query to insert
    $conn = null;  // closes the connection so cant be abused.
    return true; // Registration successful
}

function school_getter($conn){
    // function to get all the schools for a drop down

    $sql = "SELECT school_id, school_name FROM school";
    //get all schools in system
    $stmt = $conn->prepare($sql);

    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $conn = null;
    return $result;
}

function amazon_getter($conn){
    // function to get all the Amazon staff for a drop down

    $sql = "SELECT amazon_id, username FROM amazon_talent_team";
    //get all schools in system
    $stmt = $conn->prepare($sql);

    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $conn = null;
    return $result;
}

function career_getter($conn){
    // function to get all the Amazon staff for a drop down

    $sql = "SELECT career_id, f_name FROM career_adviser";
    //get all schools in system
    $stmt = $conn->prepare($sql);

    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $conn = null;
    return $result;
}

function data_sans($conn){ //im stupid ima just ask sir tomorrow
    $sql = ('update student set name = ?');
    $stmt = $conn->prepare($sql);
    $stmt->bindParam();
    $stmt->execute();
}