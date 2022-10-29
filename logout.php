
<?php
	session_start();
	unset($_SESSION['student']);
	unset($_SESSION['password']);
	header('location:index.php');
	die();
?>