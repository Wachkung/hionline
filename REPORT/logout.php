<?php
 ob_start();
 
 
	session_start();
	unset($_SESSION['Username']);
	unset($_SESSION['ADMIN']);
	unset($_SESSION['SERVICE']);
	session_destroy();
	header("location:../index.php");
?>
