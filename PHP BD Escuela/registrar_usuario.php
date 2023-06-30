<?php
include 'conexion.php';

$usuario = $_POST['usuario'];
$contraseña = $_POST['contraseña'];
$hashed_password = password_hash($contraseña, PASSWORD_DEFAULT);

$sql = "INSERT INTO admin (id, usuario, contraseña) VALUES ('id', '$usuario', '$hashed_password')";
$stmt = $conn->prepare($sql);
$success = $stmt->execute();
if ($success) {
    $data['success'] = TRUE;
    $data['message'] = "Te has registrado correctamente. Ya podes iniciar sesion.";
} else {
    $data['success'] = FALSE;
    $data['message'] = $stmt->error;
}

return $data;


