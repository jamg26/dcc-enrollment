<?php
include '../components/navigation.php';
include '../styles.php';
include '../requests/session.php';
?>


<html>
<head>
    <title>DCC | Add Schedule</title>
</head>
<body>
    <div class="container">
    <div class="row">
        <div class="col-sm">
        </div>
        <div class="col-sm">
        <form action="../requests/add-schedule.php" method="post">
            <div class="form-group">
                <label for="exampleInputEmail1">Subject Code</label>
                <input type="text" name="code" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" required>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Time</label>
                <input type="time" name="time" class="form-control" id="exampleInputPassword1" placeholder="" required>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Room</label>
                <input type="text" name="room" class="form-control" id="exampleInputPassword1" placeholder="" required>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Instructor</label>
                <input type="text" name="instructor" class="form-control" id="exampleInputPassword1" placeholder="" required>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Semester</label>
                <input type="number" name="semester" class="form-control" id="exampleInputPassword1" placeholder="" required>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Term</label>
                <input type="number" name="term" class="form-control" id="exampleInputPassword1" placeholder="" required>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Year</label>
                <input type="number" name="year" class="form-control" id="exampleInputPassword1" placeholder="" required>
            </div>
            <button type="submit" class="btn btn-primary">Add Department</button>
        </form>
        </div>
        <div class="col-sm">
        </div>
    </div>
    </div>
</body>
</html>
