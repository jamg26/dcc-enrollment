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
				<div class="col-sm mt-5">
					<hr>
					<form action="../requests/update-schedule.php" method="post">
						<div class="form-group">
							<label for="exampleInputEmail1">Subject Code</label>
							<input type="text" name="subject" class="form-control" value="<?php echo $_POST['subject'] ?>" required>
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1">Time</label>
							<input type="text" name="time" class="form-control" id="exampleInputPassword1" value="<?php echo $_POST['time'] ?>" required>
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
							<input type="text" name="year" class="form-control" id="exampleInputPassword1" value="<?php echo $_POST['year'] ?>" required>
						</div>
						<input type="text" name="id" value="<?php echo $_POST['id'] ?>" hidden>
						<button type="submit" class="btn btn-dark">Edit Department</button>
					</form>
					<hr>
				</div>
				<div class="col-sm">
				</div>
			</div>
		</div>
	</body>
</html>