<?php
require 'conexion.php';
if (empty($_SESSION['usuario']))
    header('Location: login.php');

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            zoom: 80%;
            background-color: rgb(241, 237, 233);
        }
    </style>
</head>

<body>

    <div class="container d-flex justify-content-center"  style="margin-top: 100px;">
        <div class="col-md-8 mt-4">
            <div class="card">
                <div class="card-header">
                    <h3>Editar alumno
                        <a href="admin.php" class="btn btn-success float-end">Volver</a>
                    </h3>
                </div>
                <div class="card-body">
                    <?php
                    if (isset($_GET['id'])) {
                        $id = $_GET['id'];
                        $sql = "SELECT * FROM alumnos WHERE id=:id LIMIT 1";
                        $stmt = $conn->prepare($sql);
                        $data = [':id' => $id];
                        $stmt->execute($data);
                        $resultado = $stmt->fetch(PDO::FETCH_OBJ);
                    }

                    if ($_POST) {
                        $nombre = $_POST['nombre'];
                        $apellido = $_POST['apellido'];
                        $nacimiento = $_POST['nacimiento'];
                        $curso = $_POST['curso'];
                        $dni = $_POST['dni'];
                        $telefono = $_POST['telefono'];
                        $emergencia = $_POST['emergencia'];

                        $sql = "SELECT * FROM alumnos WHERE nombre=:nombre, apellido=:apellido, fecha_nacimiento=:nacimiento, curso=:curso, dni=:dni, telefono=:telefono, contacto_emergencia=:emergencia";
                        $stmt = $conn->prepare($sql);
                        $data = [
                            ':nombre' => $nombre,
                            ':apellido' => $apellido,
                            ':nacimiento' => $nacimiento,
                            ':curso' => $curso,
                            ':dni' => $dni,
                            ':telefono' => $telefono,
                            ':emergencia' => $emergencia,
                        ];
                        $stmt->execute($data);
                        $resultado = $stmt->fetch(PDO::FETCH_ASSOC);
                    }

                    ?>
                    <form action="editar.php" method="POST">
                        <input type="hidden" name="id" value="<?= $resultado->id ?>" />

                        <div class="mb-3">
                            <label>Nombre</label>
                            <input type="text" name="nombre" class="form-control" value="<?= $resultado->nombre ?>" required />
                        </div>
                        <div class="mb-3">
                            <label>Apellido</label>
                            <input type="text" name="apellido" class="form-control" value="<?= $resultado->apellido ?>" required />
                        </div>
                        <div class="mb-3">
                            <label>Fecha de nacimiento</label>
                            <input type="date" name="nacimiento" class="form-control" value="<?= $resultado->fecha_nacimiento ?>" required />
                        </div>
                        <div class="mb-3">
                            <label>Curso</label>
                            <input type="text" name="curso" class="form-control" value="<?= $resultado->curso ?>" required />
                        </div>
                        <div class="mb-3">
                            <label>DNI</label>
                            <input type="text" name="dni" class="form-control" value="<?= $resultado->dni ?>" required />
                        </div>
                        <div class="mb-3">
                            <label>Telefono</label>
                            <input type="text" name="telefono" class="form-control" value="<?= $resultado->telefono ?>" required />
                        </div>
                        <div class="mb-3">
                            <label>Contacto de emergencia</label>
                            <input type="text" name="emergencia" class="form-control" value="<?= $resultado->contacto_emergencia ?>" required />
                        </div>
                        <div class="mb-3">
                            <button type="submit" name="editar" class="btn btn-primary">Editar alumno</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>


</body>

</html>