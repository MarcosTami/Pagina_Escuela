<?php
require 'conexion.php';

$usuario = $_POST['usuario'];
$contraseña = $_POST['contraseña'];
$hashed_password = password_hash($contraseña, PASSWORD_DEFAULT);

try {
    $sql = $conn->prepare("SELECT id, usuario, contraseña FROM admin WHERE usuario = :usuario");
    $sql->execute(array(':usuario' => $usuario));
    $data = $sql->fetch(PDO::FETCH_ASSOC);

    if ($data == false) {
        header('Location: login.php');
    } else {
        if ((password_verify($contraseña, $hashed_password)) == $data['contraseña']) {
            $_SESSION['usuario'] = $data['usuario'];
            $_SESSION['contraseña'] = $data['contraseña'];
            header('Location: admin.php');
        } else
            header('Location: login.php');
    }
} catch (PDOException $e) {
    echo "error" . $e->getMessage();
}
