<?php
include '../components/navigation.php';
include '../styles.php';
?>

<html>
<head>
    <title>DCC | Profile</title>
</head>
<body>
    <div class="container">
    <div class="row">
        <div class="col-sm">
            <img src="../images/profiles/15-001161.jpg" alt="..." class="img-thumbnail rounded mt-5" width="100px"/>
            <p><h1>Jamuel Galicia</h1></p>
            <p>15-00161</p>
            <p>Male</p>
            <p>December 26, 1994</p>
            <p>General Kangleon street Toril Davao City</p>
            <p>Single</p>
            <p>Filipino</p>
            <p>0930-469-9769</p>
        </div>
        <div class="col-sm">
            <p class="mt-5">ITE Department</p>
            <p>Bachelor of Science in Information Technology</p>
            <p>3rd Year</p>
            <a href="../components/studentload.php" onclick="window.open('../components/studentload.php',
                         'newwindow',
                         'width=800,height=600');
              return false;">Student Load</a>
        </div>
    </div>
    <h1>Schedule</h1>
    <table class="table">
        <thead>
            <tr>
            <th scope="col">Subj. Code</th>
            <th scope="col">Description</th>
            <th scope="col">Room</th>
            <th scope="col">Time</th>
            <th scope="col">Instructor</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <th scope="row">IT</th>
            <td>-</td>
            <td>SA 208</td>
            <td>5-7 PM</td>
            <td>Erwin Acedillo</td>
            </tr>
        </tbody>
    </table>
    </div>
</body>
</html>
