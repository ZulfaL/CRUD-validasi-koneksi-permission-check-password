<?php
session_start();
unset($_SESSION['isAdmin']);
header("Location: http://{$_SERVER['HTTP_HOST']}/PHP/home.php");
?>