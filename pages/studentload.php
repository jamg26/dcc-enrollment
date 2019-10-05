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
            <form action="../requests/add-load.php" method="post">
			<div class="row">
				<div class="col-sm">
                    <div class="form-group">
                        <label for="exampleInputEmail1">ID</label>
                        <input type="text" name="id" class="form-control" value="<?php echo $_GET['id'] ?>" disabled>
                    </div>
				</div>
				<div class="col-sm">
                        <div class="form-group">
							<label for="exampleInputEmail1">First Name</label>
							<input type="text" name="firstname" class="form-control" value="<?php echo $_GET['firstname'] ?>" disabled>
						</div>
				</div>
				<div class="col-sm">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Last Name</label>
                        <input type="text" name="lastname" class="form-control" value="<?php echo $_GET['lastname'] ?>" disabled>
                        
                        
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
                        <th scope="col"><button type="button" onclick="location.href='./studentload.php?id=<?php echo $_GET['id'] ?>&firstname=<?php echo $_GET['firstname'] ?>&lastname=<?php echo $_GET['lastname'] ?>&loadrow=<?php echo $_GET['loadrow']+1 ?>';" class="btn btn-success"><i class="fas fa-plus-square"></i></th>
                        <th scope="col"><button type="button" onclick="location.href='./studentload.php?id=<?php echo $_GET['id'] ?>&firstname=<?php echo $_GET['firstname'] ?>&lastname=<?php echo $_GET['lastname'] ?>&loadrow=<?php echo $_GET['loadrow']-1 ?>';" class="btn btn-danger"><i class="fas fa-minus-square"></i></th>
                    </tr>
                </thead>
                <tbody>
                    <?php if(!isset($_GET['loadrow'])) { ?>
                    <!-- no row -->
                    <?php } 
                    if(isset($_GET['loadrow'])) {
                        for($x = $_GET['loadrow']; $x>0; $x--) {
                    ?>
                    <tr>
                    <th scope="row"><?php echo $_GET['id'] ?></th>
                    <td>
                        <select class="form-control" name="schedCode-<?php echo $x ?>">
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
                        <select class="form-control" name="subjCode-<?php echo $x ?>">
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
                        <select class="form-control" name="semester-<?php echo $x ?>">
                            <option>1</option>
                            <option>2</option>
                        </select>
                    </td>
                    <td>
                        <select class="form-control" name="term-<?php echo $x ?>">
                            <option>1</option>
                            <option>2</option>
                        </select>
                    </td>
                    <td><input type="number" name="lecture-<?php echo $x ?>" class="form-control" required></td>
                    <td><input type="number" name="laboratory-<?php echo $x ?>" class="form-control" required></td>
                    </tr>
                    <?php }
                    } ?>
                </tbody>
            </table>
            <input type="text" name="id" value="<?php echo $_GET['id'] ?>" hidden>
            <input type="text" name="loadrow" value="<?php echo $_GET['loadrow'] ?>" hidden>
            <button type="submit" class="btn btn-dark">Submit</button>
            </form>
		</div>
	</body>
</html>