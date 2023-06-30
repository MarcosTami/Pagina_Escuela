<?php
require 'conexion.php';
if (empty($_SESSION['usuario']))
    header('Location: login.php');

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$nacimiento = $_POST['nacimiento'];
$curso = $_POST['curso'];
$dni = $_POST['dni'];
$telefono = $_POST['telefono'];
$emergencia = $_POST['emergencia'];

$sql = "UPDATE alumnos SET nombre='$nombre', apellido='$apellido', fecha_nacimiento='$nacimiento', curso='$curso', dni='$dni', telefono='$telefono', contacto_emergencia='$emergencia'
        WHERE id='$id' LIMIT 1";
$conn->exec($sql);

if ($conn) {
    header('Location: admin.php');
} else {
    header('Location: admin.php');
}
