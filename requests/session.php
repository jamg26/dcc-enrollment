<?php
if(!isset($_SESSION['user'])) {
	header('location: /pages/signin.php');
}
?>
