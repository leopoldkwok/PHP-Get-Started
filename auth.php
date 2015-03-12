<?php
session_start();

// if user is admin and admin is logged in

if(!isset($_SESSION['isAdmin']) || !$_SESSION['isAdmin']) {
	header('Location: login.php'); // redirect
}


?>