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
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="" value="<?php echo $_SESSION['user']['1'] ?>" disabled>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Middle Name</label>
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="" value="<?php echo $_SESSION['user']['2'] ?>" disabled>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Last Name</label>
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="" value="<?php echo $_SESSION['user']['3'] ?>" disabled>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Address</label>
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="" value="<?php echo $_SESSION['user']['4'] ?>" disabled>
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
        <label for="exampleFormControlSelect1">Gender</label>
        <select class="form-control" id="exampleFormControlSelect1">
        <option>Male</option>
        <option>Female</option>
        <option>Prefer not to say</option>
        </select>
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
                <?php 
                include('../db.php');
                
                $sql = "select * from course";
                $result = $conn->query($sql);
                echo $result->num_rows;
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        $course = $row['description'];
                        ?>
                        <option>
                        <?php
                        echo $course;
                        ?> 
                        </option>     
                        <?php
                    }
                }
                ?>
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
