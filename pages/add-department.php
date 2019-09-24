<?php
include '../components/navigation.php';
include '../styles.php';
include '../requests/session.php';
?>


<html>
<head>
    <title>DCC | Add Department</title>
</head>
<body>
    <div class="container">
    <div class="row">
        <div class="col-sm">
        </div>
        <div class="col-sm">
        <form action="../requests/add-department.php" method="post">
            <div class="form-group">
                <label for="exampleInputEmail1">Code</label>
                <input type="text" name="code" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" required>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Description</label>
                <input type="text" name="description" class="form-control" id="exampleInputPassword1" placeholder="" required>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Program Head</label>
                <input type="text" name="head" class="form-control" id="exampleInputPassword1" placeholder="" required>
            </div>
            <button type="submit" class="btn btn-primary">Add Department</button>
        </form>
        </div>
        <div class="col-sm">
        </div>
    </div>
    </div>
</body>
</html>
