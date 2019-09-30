<?php
include_once('../db.php');
if(isset($_POST['id'])) {
    $id = $_POST['id'];
    $code = $_POST['code'];
    $name = $_POST['name'];
    $sql = "update subject set code='$code', name='$name' where id=$id";
    if ($conn->query($sql) === TRUE) {
        header('location: ../pages/subject.php?updated=true');
    } else {
        //echo "Error: " . $sql . "<br>" . $conn->error;
        header('location: ../pages/subject.php?updated=false');
    }
    $conn->close();
}
?>