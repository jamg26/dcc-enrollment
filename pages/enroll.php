<?php
include '../components/navigation.php';
include '../styles.php';
?>

<html>
<head>
    <title>DCC | Enroll</title>
</head>
<body>
<div class="container">
<form action="../api/enroll.php">
  <div class="row">
    <div class="col-sm">
    <?php if (isset($_GET['success'])) {echo '<div class="text-success"><small>Success! Please wait while we verify your form. We will send you an email after.</small></div>';}?>
    <div class="form-group">
            <label for="exampleInputPassword1">First Name</label>
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Jamuel" disabled>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Middle Name</label>
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="" disabled>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Last Name</label>
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Galicia" disabled>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Address</label>
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="General Kangleon st. Toril Davao City" disabled>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Status</label>
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Nationality</label>
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="">
        </div>



    </div>
    <div class="col-sm">
        <div class="form-group">
            <label for="exampleInputPassword1">Gender</label>
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Birthday</label>
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Contact Number</label>
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Course</label>
            <select class="form-control" id="exampleFormControlSelect1">
                <option>Accounting Technology Program</option>
                <option>Business Administration Program</option>
                <option>Criminal Justice Program</option>
                <option>College of Education and Liberal Arts</option>
                <option>Information Technology Program</option>
                <option>Hotel and Restaurant Management</option>
                <option>Basic Education Department</option>
            </select>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Year</label>
            <select class="form-control" id="exampleFormControlSelect1">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
  </form>
</div>
</body>
</html>
