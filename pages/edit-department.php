<?php
include '../components/navigation.php';
include '../styles.php';
include '../requests/session.php';
?>


<html>
<head>
    <title>DCC | Edit department</title>
</head>
<body>
    <div class="container">
    <div class="row">
        <div class="col-sm">
        </div>
        <div class="col-sm">
        <form action="../requests/update-department.php" method="post">
            <div class="form-group">
                <?php if (isset($_GET['success'])) { echo '<div class="text-success">Added!</div>'; }?>
                <?php if (isset($_GET['invalid'])) { echo '<div class="text-danger">Invalid!</div>'; }?>
                <label for="exampleInputEmail1">Code</label>
                <input type="text" name="code" value="<?php echo $_POST['code']?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" required>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Description</label>
                <input type="text" name="description" value="<?php echo $_POST['description']?>" class="form-control" id="exampleInputPassword1" placeholder="" required>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Program Head</label>
                <input type="text" name="head" value="<?php echo $_POST['head']?>" class="form-control" id="exampleInputPassword1" placeholder="" required>
            </div>
            <button type="submit" class="btn btn-primary">Update Department</button>
        </form>
        </div>
        <div class="col-sm">
        </div>
    </div>
    </div>
</body>
</html>
