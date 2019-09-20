<?php
include '../components/navigation.php';
include '../styles.php';
?>


<html>
<head>
    <title>DCC | Add Course</title>
</head>
<body>
    <div class="container">
    <div class="row">
        <div class="col-sm">
        </div>
        <div class="col-sm">
        <form action="#" method="post">
            <div class="form-group">
                <?php if (isset($_GET['invalid'])) { echo '<div class="text-danger">Invalid.</div>'; }?>
                <label for="exampleInputEmail1">Code</label>
                <input type="text" name="code" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" required>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Description</label>
                <input type="text" name="description" class="form-control" id="exampleInputPassword1" placeholder="" required>
            </div>
            <div class="form-group">
            <label for="exampleInputPassword1">Department</label>
            <select class="form-control" id="exampleFormControlSelect1">
                <?php
                include '../db.php';
                $sql = "select * from department";
                $result = $conn->query($sql);
                echo $result->num_rows;
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        $department = $row['code'];
                        ?>
                        <option>
                        <?php echo $department; ?>
                        </option>
                    <?php }} ?>
            </select>
        </div>
            <button type="submit" class="btn btn-primary">Add Course</button>
        </form>
        </div>
        <div class="col-sm">
        </div>
    </div>
    </div>
</body>
</html>
