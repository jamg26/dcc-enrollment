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
            <form action="#" method="post">
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
                        <th scope="col">Student ID</th>
                        <th scope="col">Schedule Code</th>
                        <th scope="col">Subject Code</th>
                        <th scope="col">Semester</th>
                        <th scope="col">term</th>
                        <th scope="col">Lecture</th>
                        <th scope="col">Laboratory</th>
                        <form action="./studentload.php" method="post">
                            <input type="text" name="id" value="<?php echo $_POST['id'] ?>" hidden>
                            <input type="text" name="firstname" value="<?php echo $_POST['firstname'] ?>" hidden>
                            <input type="text" name="lastname" value="<?php echo $_POST['lastname'] ?>" hidden>
                            <input type="text" name="loadrow" value="<?php echo $_POST['loadrow']+1 ?>" hidden>
                            <th scope="col"><button type="submit" class="btn btn-success"><i class="fas fa-plus-square"></i></th>
                        </form>
                    </tr>
                </thead>
                <tbody>
                    <?php if(!isset($_POST['loadrow'])) { ?>
                    <!-- no row -->
                    <?php } 
                    if(isset($_POST['loadrow'])) {
                        for($x = $_POST['loadrow']; $x>0; $x--) {
                    ?>
                    <tr>
                    <th scope="row"><?php echo $_POST['id'] ?></th>
                    <td>
                        <select class="form-control" name="schedCode">
                            <?php
                                $sql = "select * from schedule";
                                $result = $conn->query($sql);
                                if ($result->num_rows > 0) {
                                    while ($row = $result->fetch_assoc()) {
                                        ?>
                            <option>
                                <?php echo $row['id']; ?>
                            </option>
                            <?php }} ?>
                        </select>
                    </td>
                    <td>
                        <select class="form-control" name="subjCode">
                            <?php
                                $sql = "select * from subject";
                                $result = $conn->query($sql);
                                if ($result->num_rows > 0) {
                                    while ($row = $result->fetch_assoc()) {
                                        ?>
                            <option>
                                <?php echo $row['code']; ?>
                            </option>
                            <?php }} ?>
                        </select>
                    </td>
                    <td>
                        <select class="form-control" name="semester">
                            <option>1</option>
                            <option>2</option>
                        </select>
                    </td>
                    <td>
                        <select class="form-control" name="term">
                            <option>1</option>
                            <option>2</option>
                        </select>
                    </td>
                    <td><input type="number" name="lecture" class="form-control"></td>
                    <td><input type="number" name="laboratory" class="form-control"></td>
                    <form action="./studentload.php" method="post">
                        <input type="text" name="id" value="<?php echo $_POST['id'] ?>" hidden>
                        <input type="text" name="firstname" value="<?php echo $_POST['firstname'] ?>" hidden>
                        <input type="text" name="lastname" value="<?php echo $_POST['lastname'] ?>" hidden>
                        <input type="text" name="loadrow" value="<?php echo $_POST['loadrow']-1 ?>" hidden>
                        <th scope="col"><button type="submit" class="btn btn-danger"><i class="fas fa-minus-square"></i></th>
                    </form>
                    </tr>
                    <?php }
                    } ?>
                </tbody>
            </table>
            <input type="text" name="id" value="<?php echo $_POST['id'] ?>" hidden>
            <button type="submit" class="btn btn-dark">Submit</button>
            </form>
		</div>
	</body>
</html>