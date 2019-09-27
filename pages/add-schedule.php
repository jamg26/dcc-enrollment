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
				<div class="col-sm mt-5">
					<hr>
					<form action="../requests/add-schedule.php" method="post">
						<div class="form-group">
							<label for="exampleInputEmail1">Subject Code</label>
							<input type="text" name="code" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" required>
						</div>
						<label for="exampleInputPassword1">Time</label>
						<div class="form-row">
							<div class="col">
								<input type="time" name="timeFrom" class="form-control" id="exampleInputPassword1" placeholder="" required>
							</div>
							<div class="col">
								<input type="time" name="timeTo" class="form-control" id="exampleInputPassword1" placeholder="" required>
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
								<option>
									<?php echo $room; ?>
								</option>
								<?php }} ?>
							</select>
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
						<label for="exampleInputPassword1">Year</label>
						<div class="form-row">
							<div class="col"><input type="number" name="yearFrom" class="form-control" required></div>
							<div class="col"><input type="number" name="yearTo" class="form-control" required></div>
						</div>
						<button type="submit" class="btn btn-dark mt-3">Add Department</button>
					</form>
					<hr>
				</div>
				<div class="col-sm">
				</div>
			</div>
		</div>
	</body>
</html>