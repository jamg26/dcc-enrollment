<?php
	include '../components/navigation.php';
	include '../styles.php';
	include '../requests/session.php';
	$time = explode('-', $_POST['time']);
	$year = explode('-', $_POST['year']);
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
				<div class="col-sm mt-5">
					<hr>
					<form action="../requests/update-schedule.php" method="post">
						<div class="form-group">
							<label for="exampleInputEmail1">Subject Code</label>
							<input type="text" name="subject" class="form-control" value="<?php echo $_POST['subject'] ?>" required>
						</div>
						<label for="exampleInputPassword1">Time</label>
						<div class="form-row">
							<div class="col">
								<input type="time" name="timeFrom" class="form-control" value="<?php echo $time[0] ?>" required>
							</div>
							<div class="col">
								<input type="time" name="timeTo" class="form-control" value="<?php echo $time[1] ?>" required>
							</div>
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1">Room</label>
							<select class="form-control" name="room" id="exampleFormControlSelect1">
								<?php
									include_once '../db.php';
									$sql = "select * from room";
									$result = $conn->query($sql);
									if ($result->num_rows > 0) {
									    while ($row = $result->fetch_assoc()) {
									        $room = $row['name'];
									        ?>
								<option <?php if($_POST['room'] == $room) echo 'selected'?>>
									<?php echo $room; ?>
								</option>
								<?php }} ?>
							</select>
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1">Instructor</label>
							<select class="form-control" name="instructor" id="exampleFormControlSelect1">
								<?php
									include_once '../db.php';
									$sql = "select * from instructor";
									$result = $conn->query($sql);
									if ($result->num_rows > 0) {
									    while ($row = $result->fetch_assoc()) {
									        $instructor = $row['name'];
									        ?>
								<option <?php if($_POST['instructor'] == $instructor) echo 'selected'?>>
									<?php echo $instructor; ?>
								</option>
								<?php }} ?>
							</select>
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1">Semester</label>
							<input type="number" name="semester" class="form-control" id="exampleInputPassword1" value="<?php echo $_POST['semester'] ?>" required>
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1">Term</label>
							<input type="number" name="term" class="form-control" id="exampleInputPassword1" value="<?php echo $_POST['term'] ?>" required>
						</div>
						<label for="exampleInputPassword1">Year</label>
						<div class="form-row">
							<div class="col"><input type="number" name="yearFrom" class="form-control" value="<?php echo $year[0] ?>" required></div>
							<div class="col"><input type="number" name="yearTo" class="form-control" value="<?php echo $year[1] ?>" required></div>
						</div>
						<input type="text" name="id" value="<?php echo $_POST['id'] ?>" hidden>
						<button type="submit" class="btn btn-dark mt-3">Edit Schedule</button>
					</form>
					<hr>
				</div>
				<div class="col-sm">
				</div>
			</div>
		</div>
	</body>
</html>