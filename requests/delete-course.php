<?php
include_once('../db.php');
if(isset($_POST['course'])) {
    $course = $_POST['course'];
    $sql = "delete from course where code='$course'";
    if ($conn->query($sql) === TRUE) {
        header('location: ../pages/course.php?deleted=true');
    } else {
        //echo "Error: " . $sql . "<br>" . $conn->error;
        header('location: ../pages/course.php?deleted=false');
    }
    $conn->close();
}
?>