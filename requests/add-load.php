<?php
include_once('../db.php');
if(isset($_POST['id'])) {
    $id = $_POST['id'];
    for($x = $_POST['loadrow']; $x>0; $x--) {
        $sched = $_POST['schedCode-'.$x];
        $subj = $_POST['subjCode-'.$x];
        $sem = $_POST['semester-'.$x];
        $term = $_POST['term-'.$x];
        $lec = $_POST['lecture-'.$x];
        $lab = $_POST['laboratory-'.$x];
        $sql = "insert into studentload (student, sched_code, subj_code, semester, term, lecture, laboratory, units) 
        values($id, '$sched', '$subj', '$sem', '$term', $lec, $lab, $lec+$lab)";
        if ($conn->query($sql) === TRUE) {
            //header('location: ../pages/instructor.php?added=true');
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
            //header('location: ../pages/instructor.php?added=false');
        }
    }
    $conn->close();
    header('location: ../pages/enroll.php?enrolled=true');
}
?>
