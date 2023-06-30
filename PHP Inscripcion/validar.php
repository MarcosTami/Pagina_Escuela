<?php
include 'conexion.php';

// obtener datos
$nombre = $_POST['nombre'];
$email = $_POST['email'];

$sql = "INSERT INTO inscriptos (id, nombre, email) VALUES ('id', '$nombre', '$email')";
$conn->exec($sql);
if ($conn) {
  $data['success'] = TRUE;
  $data['message'] = "Hola " . $nombre . "!<br />Recibiras actualizaciones a traves de tu email.";
} else {
  $data['success'] = FALSE;
  $data['message'] = $stmt->error;
}

return $data;
