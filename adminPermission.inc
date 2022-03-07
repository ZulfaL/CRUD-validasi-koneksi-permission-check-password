<?php
	session_start();
	if (!isset($_SESSION['isAdmin'])){
		//user akan ke halaman login untuk authorization
		//header("Location: http://localhost/login.php");
		header("Location: http://{$_SERVER['HTTP_HOST']}/PHP/login.php");
		exit();
	}
?>