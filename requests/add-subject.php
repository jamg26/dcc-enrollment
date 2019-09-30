<?php
include_once('../db.php');
if(isset($_POST['code'])) {
    $code = $_POST['code'];
    $name = $_POST['name'];
    $sql = "insert into subject (code, name) values('$code', '$name')";
    if ($conn->query($sql) === TRUE) {
        header('location: ../pages/subject.php?added=true');
    } else {
        //echo "Error: " . $sql . "<br>" . $conn->error;
        header('location: ../pages/subject.php?added=false');
    }
    $conn->close();
}
?>