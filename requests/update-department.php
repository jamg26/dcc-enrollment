<?php
include_once('../db.php');
$code = $_POST['code'];
$description = $_POST['description'];
$head = $_POST['head'];
echo $code, $description, $head;
if(isset($_POST['code'])) {
    $code = $_POST['code'];
    $description = $_POST['description'];
    $head = $_POST['head'];
    echo $code, $description, $head;
    $sql = "update department set code='$code', description='$description', head='$head' where code='$code'";
    if ($conn->query($sql) === TRUE) {
        header('location: ../pages/department.php?updated=true');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        //header('location: ../pages/department.php?updated=false');
    }
    $conn->close();
}

?>