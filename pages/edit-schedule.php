<?php
include '../components/navigation.php';
include '../styles.php';
include '../requests/session.php';
?>


<html>
<head>
    <title>DCC | Edit Schedule</title>
</head>
<body>
    <div class="container">
    <div class="row">
        <div class="col-sm">
        </div>
        <div class="col-sm">
        <form action="../requests/update-schedule.php" method="post">
            <div class="form-group">
                <label for="exampleInputEmail1">Subject Code</label>
                <input type="text" name="subject" class="form-control" value="<?php echo $_POST['subject'] ?>" required>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Time</label>
                <input type="time" name="time" class="form-control" id="exampleInputPassword1" value="<?php echo $_POST['time'] ?>" required>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Room</label>
                <input type="text" name="room" class="form-control" id="exampleInputPassword1" value="<?php echo $_POST['room'] ?>" required>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Instructor</label>
                <input type="text" name="instructor" class="form-control" id="exampleInputPassword1" value="<?php echo $_POST['instructor'] ?>" required>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Semester</label>
                <input type="number" name="semester" class="form-control" id="exampleInputPassword1" value="<?php echo $_POST['semester'] ?>" required>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Term</label>
                <input type="number" name="term" class="form-control" id="exampleInputPassword1" value="<?php echo $_POST['term'] ?>" required>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Year</label>
                <input type="number" name="year" class="form-control" id="exampleInputPassword1" value="<?php echo $_POST['year'] ?>" required>
            </div>
            <input type="text" name="id" value="<?php echo $_POST['id'] ?>" hidden>
            <button type="submit" class="btn btn-primary">Edit Department</button>
        </form>
        </div>
        <div class="col-sm">
        </div>
    </div>
    </div>
</body>
</html>
