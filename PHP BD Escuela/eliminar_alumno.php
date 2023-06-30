<?php
require 'conexion.php';
if (empty($_SESSION['usuario']))
    header('Location: login.php');

$id = $_POST['eliminar'];
$sql = "DELETE FROM alumnos WHERE id='$id'";
$conn->exec($sql);

if ($conn) {
    header('Location: admin.php');
    exit(0);
} else {
    header('Location: admin.php');
    exit(0);
}
