<?php #THIS IS COMMON

function reg_student($conn){


    $sql = "INSERT INTO student (FName, SName, Year, Pathway, Email, School_ID) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);

    $stmt->bindParam(1, $_POST['fname']);
    $stmt->bindParam(2, $_POST['sname']);  #bind params
    $stmt->bindParam(3, $_POST['year']);
    $stmt->bindParam(4, $_POST['pathway']);
    $stmt->bindParam(5, $_POST['email']);
    $stmt->bindParam(6, $_POST['School_ID']);

    $stmt->execute();  #run

    $conn = null;  #closes connection
    return true;  #reg = success
}

function reg_school($conn){


    $sql = "INSERT INTO school (School_Name, School_Email, School_Phone) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);

    $stmt->bindParam(1, $_POST['sname']);
    $stmt->bindParam(2, $_POST['email']);  #bind params
    $stmt->bindParam(3, $_POST['phone']);

    $stmt->execute();  #run

    $conn = null;  #closes connection
    return true;  #reg = success
}

function school_getter($conn){
    $sql = "SELECT School_ID, School_Name FROM school";

    $stmt = $conn->prepare($sql);

    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC); //gets the results back as associative array
    $conn = null;
    return $result;
}

