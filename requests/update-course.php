<?php
include_once('../db.php');
if(isset($_POST['code'])) {
    $code = $_POST['code'];
    $description = $_POST['description'];
    $department = $_POST['department'];
    $sql = "update course set code='$code', description='$description', department='$department' where code='$code'";
    if ($conn->query($sql) === TRUE) {
        header('location: ../pages/course.php?updated=true');
    } else {
        //echo "Error: " . $sql . "<br>" . $conn->error;
        header('location: ../pages/add-course.php?updated=false');
    }
    $conn->close();
}

?>