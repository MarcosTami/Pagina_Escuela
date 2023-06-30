<?php
require 'conexion.php';
require 'conexion2.php';
if (empty($_SESSION['usuario']))
	header('Location: login.php');


$targetfolder = "uploads/";

$targetfolder = $targetfolder . basename($_FILES['archivo']['name']);


$file_type = $_FILES['archivo']['type'];

if ($file_type == "application/pdf" || $file_type == "image/gif" || $file_type == "image/jpeg") {

	if (move_uploaded_file($_FILES['archivo']['tmp_name'], $targetfolder)) {

		$sql = "UPDATE pdf SET archivo = '$targetfolder' WHERE id = 1";
		$stmt = $conn->exec($sql);
		header('Location: ingresantes.php');

	} else {

		echo "Problem uploading file";
	}
} 
