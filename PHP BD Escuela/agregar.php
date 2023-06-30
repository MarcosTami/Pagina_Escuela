<?php
require 'conexion.php';
if (empty($_SESSION['usuario']))
    header('Location: login.php');

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$nacimiento = $_POST['nacimiento'];
$curso = $_POST['curso'];
$dni = $_POST['dni'];
$telefono = $_POST['telefono'];
$emergencia = $_POST['emergencia'];

$sql = "INSERT INTO alumnos (nombre, apellido, fecha_nacimiento, curso, dni, telefono, contacto_emergencia) 
        VALUES ('$nombre', '$apellido', '$nacimiento', '$curso', '$dni', '$telefono', '$emergencia')";
$conn->exec($sql);

if ($conn) {
    header('Location: admin.php');
} else {
    header('Location: admin.php');
}
