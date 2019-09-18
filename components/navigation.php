<?php
@include '../styles.php';
?>
<html>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand text-info" href="../">DCC</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
        <a id="enroll" class="nav-item nav-link" href="../pages/enroll.php">Enroll</a>
        <a id="profile" class="nav-item nav-link" href="../pages/profile.php">Profile</a>
        <a id="signup" class="nav-item nav-link" href="../pages/signup.php">Sign Up</a>
        <a id="signin" class="nav-item nav-link" href="../pages/signin.php">Sign In</a>
        <a class="nav-item nav-link" href="#">Logout</a>
        </div>
    </div>
    </nav>
    <script>
    var pathname = window.location.pathname;
    pathname = pathname.split('/');
    name = pathname[2].replace('.php', "");
    $("#" + name).attr('class', 'nav-item nav-link active text-success');
    </script>
</body>
</html>
