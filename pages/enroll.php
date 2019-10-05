<?php
	include '../components/navigation.php';
	include '../styles.php';
	include '../requests/session.php';
	?>
<html>
	<head>
		<title>DCC | Enroll</title>
	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="col-sm">
				<h1>Studentload</h1>
					<form action="./enroll.php" method="get">
						<div class="form-group">
							<input type="text" name="search" class="form-control" value="<?php echo @$_GET['search'] ?>" placeholder="Search Student">
						</div>
						<button type="submit" class="btn btn-primary">Search</button>
					</form>
					<?php 
					if(isset($_GET['search'])) {
						?>
					<table class="table">
						<thead>
							<tr>
								<th scope="col">ID</th>
								<th scope="col">Firstname</th>
								<th scope="col">Lastname</th>
							</tr>
						</thead>
						<tbody>
					<?php
						}
					?>
					<?php
					if(isset($_GET['search'])) {
						include_once "../db.php";
						$student = $_GET['search'];
						$sql = "select * from student where firstname like '%$student%' or lastname like '%$student%'";
						$result = $conn->query($sql);
						$res = array();
						if ($result->num_rows > 0) {
							while ($row = $result->fetch_assoc()) {
								?>
								<tr>
								<th scope="row"><?php echo $row['id'] ?></th>
								<td><?php echo $row['firstname'] ?></td>
								<td><?php echo $row['lastname'] ?></td>
								<form action="./studentload.php" method="post">
									<input type="text" name="id" value="<?php echo $row['id'] ?>" hidden/>
									<input type="email" name="email" value="<?php echo $row['email'] ?>" hidden/>
									<input type="password" name="password" value="<?php echo $row['password'] ?>" hidden/>
									<input type="text" name="firstname" value="<?php echo $row['firstname'] ?>" hidden/>
									<input type="text" name="middlename" value="<?php echo $row['middlename'] ?>" hidden/>
									<input type="text" name="lastname" value="<?php echo $row['lastname'] ?>" hidden/>
									<input type="text" name="address" value="<?php echo $row['address'] ?>" hidden/>
									<input type="text" name="gender" value="<?php echo $row['gender'] ?>" hidden/>
									<input type="text" name="birthdate" value="<?php echo $row['birthdate'] ?>" hidden/>
									<input type="text" name="birthplace" value="<?php echo $row['birthplace'] ?>" hidden/>
									<input type="text" name="nationality" value="<?php echo $row['nationality'] ?>" hidden/>
									<input type="text" name="status" value="<?php echo $row['status'] ?>" hidden/>
									<input type="text" name="contact" value="<?php echo $row['contact'] ?>" hidden/>
									<input type="text" name="course" value="<?php echo $row['course'] ?>" hidden/>
									<input type="text" name="loadrow" value="1" hidden>
									<td><button type="submit" class="btn btn-success"><i class="fas fa-edit"></i></button></td>
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
			</div>
		</div>
	</body>
</html>