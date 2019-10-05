<?php
	include '../components/navigation.php';
	include '../styles.php';
	include '../db.php';
	include '../requests/session.php';
	?>
<html>
	<head>
		<title>DCC | Studentload</title>
	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="col-sm">
                    <div class="form-group">
                        <label for="exampleInputEmail1">ID</label>
                        <input type="text" name="id" class="form-control" value="<?php echo $_POST['id'] ?>" disabled>
                    </div>
				</div>
				<div class="col-sm">
                        <div class="form-group">
							<label for="exampleInputEmail1">First Name</label>
							<input type="text" name="firstname" class="form-control" value="<?php echo $_POST['firstname'] ?>" disabled>
						</div>
				</div>
				<div class="col-sm">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Last Name</label>
                        <input type="text" name="lastname" class="form-control" value="<?php echo $_POST['lastname'] ?>" disabled>
                        
                        
                    </div>
				</div>
			</div>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Load ID</th>
                        <th scope="col">Student ID</th>
                        <th scope="col">Schedule Code</th>
                        <th scope="col">Subject Code</th>
                        <th scope="col">Semester</th>
                        <th scope="col">term</th>
                        <th scope="col">Lecture</th>
                        <th scope="col">Laboratory</th>
                        <th scope="col">Units</th></tr>
                </thead>
                <tbody>
                <?php
					if(isset($_POST['id'])) {
						include_once "../db.php";
						$studentid = $_POST['id'];
						$sql = "select * from studentload where student=$studentid";
						$result = $conn->query($sql);
						$res = array();
						if ($result->num_rows > 0) {
							while ($row = $result->fetch_assoc()) {
								?>
								<tr>
								<th scope="row"><?php echo $row['id'] ?></th>
								<td><?php echo $row['student'] ?></td>
								<td><?php echo $row['sched_code'] ?></td>
								<td><?php echo $row['subj_code'] ?></td>
								<td><?php echo $row['semester'] ?></td>
								<td><?php echo $row['term'] ?></td>
								<td><?php echo $row['lecture'] ?></td>
								<td><?php echo $row['laboratory'] ?></td>
								<td><?php echo $row['units'] ?></td>
								<form action="../requests/delete-studentload.php" method="post">
									<input type="text" name="id" value="<?php echo $row['id'] ?>" hidden/>
									<td><button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button></td>
								</form>
								</tr>
								<?php
							}
                        }
                    }
					?>
                </tbody>
            </table>
		</div>
	</body>
</html>