<?php
require 'conexion.php';
if (empty($_SESSION['usuario']))
    header('Location: login.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            zoom: 80%;
            background-color: rgb(241, 237, 233);
        }
        
    </style>
</head>

<body>

    <div class="container d-flex justify-content-center" style="margin-top: 100px;">
        <div class="col-md-8 mt-4">
            <div class="card">
                <div class="card-header">
                    <h3>Agregar alumno
                        <a href="admin.php" class="btn btn-success float-end">Volver</a>
                    </h3>
                </div>
                <div class="card-body">
                    <form action="agregar.php" method="POST">
                        <div class="mb-3">
                            <label>Nombre</label>
                            <input type="text" name="nombre" class="form-control" required />
                        </div>
                        <div class="mb-3">
                            <label>Apellido</label>
                            <input type="text" name="apellido" class="form-control" required />
                        </div>
                        <div class="mb-3">
                            <label>Fecha de nacimiento</label>
                            <input type="date" name="nacimiento" class="form-control" required />
                        </div>
                        <div class="mb-3">
                            <label>Curso</label>
                            <input type="text" name="curso" class="form-control" required />
                        </div>
                        <div class="mb-3">
                            <label>DNI</label>
                            <input type="text" name="dni" class="form-control" required />
                        </div>
                        <div class="mb-3">
                            <label>Telefono</label>
                            <input type="text" name="telefono" class="form-control" required />
                        </div>
                        <div class="mb-3">
                            <label>Contacto de emergencia</label>
                            <input type="text" name="emergencia" class="form-control" required />
                        </div>
                        <div class="mb-3">
                            <button type="submit" name="agregar" class="btn btn-primary">Agregar alumno</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

</body>

</html>