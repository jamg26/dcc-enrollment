<?php
include '../components/navigation.php';
include '../styles.php';
?>

<html>
<head>
    <title>DCC | Sign Up</title>
</head>
<body>
    <div class="container">
    <div class="row">
        <div class="col-sm">
        </div>
        <div class="col-sm">
            <form>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div><div class="form-group">
                    <label for="exampleInputPassword1">First Name</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Middle Name</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Last Name</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Address</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="">
                </div>
                <button type="submit" class="btn btn-primary">Sign Up</button>
            </form>
        </div>
        <div class="col-sm">
        </div>
    </div>
    </div>

</body>
</html>
