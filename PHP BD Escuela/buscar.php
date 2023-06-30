<?php
require 'conexion.php';
if (empty($_SESSION['usuario']))
    header('Location: login.php');

if (isset($_POST['query'])) {

    $query = $_POST['query'];

    $sql = $conn->prepare(" SELECT * FROM alumnos WHERE id LIKE '%" . $query . "%' OR
                        nombre LIKE '%" . $query . "%'
						OR apellido LIKE '%" . $query . "%'
						OR fecha_nacimiento LIKE '%" . $query . "%'
						OR curso LIKE '%" . $query . "%'
						OR dni LIKE '%" . $query . "%'
						OR telefono LIKE '%" . $query . "%'
						OR contacto_emergencia LIKE '%" . $query . "%'
						");
} else {

    $sql = $conn->prepare("SELECT * FROM alumnos");
}

$sql->execute();

while ($row = $sql->fetch(PDO::FETCH_ASSOC)) {
    echo '<tr>' .
        '<td >' . $row['id'] . '</td>' .
        '<td>' . $row['nombre'] . '</td>' .
        '<td>' . $row['apellido'] . '</td>' .
        '<td>' . $row['fecha_nacimiento'] . '</td>' .
        '<td>' . $row['curso'] . '</td>' .
        '<td>' . $row['dni'] . '</td>' .
        '<td>' . $row['telefono'] . '</td>' .
        '<td>' . $row['contacto_emergencia'] . '</td>' .
        '<td class="d-flex p-2 justify-content-center"> 

        <a href="editar_alumno.php?id=' . $row['id'] . '" class="btn btn-warning">Editar</a> 
        <button type="button" class="btn btn-danger mx-1" data-bs-toggle="modal" data-bs-target="#exampleModal' . $row['id'] . '">Eliminar</button>

        <div class="modal fade" id="exampleModal' . $row['id'] . '" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-bs-backdrop="false">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Eliminar alumno</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    <p>Desea eliminar el alumno?</p>
                        <form action="eliminar_alumno.php" method="POST">
                        <button type="submit" name="eliminar" value="' . $row['id'] . '" class="btn btn-danger mx-1">Eliminar</button>
                        </form> 
                    </div>
                </div>
            </div>
        </div>

        </td>  '  .
        '</tr>';
}
