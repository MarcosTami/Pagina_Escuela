<?php
	require 'conexion.php';
	session_destroy();
	header('Location: login.php');
?>
