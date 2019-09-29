<?php
include_once('../db.php');
if(isset($_POST['code'])) {
    $code = $_POST['code'];
    $time = $_POST['timeFrom']."-".$_POST['timeTo'];
    $room = $_POST['room'];
    $instructor = $_POST['instructor'];
    $semester = $_POST['semester'];
    $term = $_POST['term'];
    $year = $_POST['yearFrom']."-".$_POST['yearTo'];

    $sql = "insert into schedule (subject, time, room, instructor, semester, term, year) values('$code', '$time', '$room', '$instructor', '$semester', '$term', '$year')";
    if ($conn->query($sql) === TRUE) {
        header('location: ../pages/schedule.php?added=true');
    } else {
        //echo "Error: " . $sql . "<br>" . $conn->error;
        header('location: ../pages/schedule.php?added=false');
    }
    $conn->close();
}
?>