<?php
require 'conexion.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>

	<!-- bootstrap -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

	<!-- custom css -->
	<link rel="stylesheet" href="./css/admin.css">

	<!-- fontawesome -->
	<script src="https://kit.fontawesome.com/c2239edec8.js" crossorigin="anonymous"></script>

	<!-- js -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
	<script src="js/filtro_alumnos.js"></script>

</head>

<body>
	<header class="p-3 bg-dark text-white">
		<div class="container-fluid d-flex">

			<ul class="nav col-12 mt-3 d-flex w-25">
				<li class="mx-2">
					<div class="dropdown">
						<a href="#" class="nav-link px-2 text-white d-flex align-items-center text-white text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
							<strong> <i class="fa-solid fa-user-large me-2"></i><?php echo $_SESSION['usuario'] ?></strong>
						</a>
						<ul class="dropdown-menu dropdown-menu text-small shadow">
							<li><a class="dropdown-item " href="cerrar_sesion.php">Cerrar sesion</a></li>
						</ul>
					</div>
				</li>
				<li class="mx-2">
					<a href="admin.php" class="nav-link px-2 text-white">Alumnos</a>
				</li>
				<li class="mx-2">
					<a href="ingresantes.php" class="nav-link px-2 text-white">Ingresantes</a>
				</li>
			</ul>

			<div class="d-flex w-75" style="margin-left: 460px;">
				<div class="d-flex" style="height: 67px;">
					<a href="./index.php">
						<img class="img-fluid justify-content-start" src="../logos/logo.png" alt="Logo" style="width: 55px; height: 57;">
					</a>
				</div>
			</div>
		</div>
	</header>



	<main>
		<div class="container d-flex flex-column mt-2">
			<div class="d-flex flex-row justify-content-between">
				<div class="d-flex flex-row" style="margin-top: 20px;">
					<span class="p-2"><i class="fa-solid fa-magnifying-glass"></i></span>
					<input type="text" name="search_text" id="search_text" placeholder="Buscar alumno" class="form-control" style="height: 40px;" />
				</div>
				<div class="mt-2">
					<h1 class="text-center">Lista de alumnos</h1>
				</div>

				<div style="margin-top: 20px; margin-right: 60px;">
					<a href="agregar_alumno.php" class="btn btn-success mx-2">Agregar alumno</a>
				</div>
			</div>

			<div class="tabla mt-3" style="width: 1300px; height: 720px">
				<table class="table table-bordered table-striped">
					<thead class="table-dark">
						<th>ID</th>
						<th>Nombre</th>
						<th>Apellido</th>
						<th>Fecha de nacimiento</th>
						<th>Curso</th>
						<th>DNI</th>
						<th>Telefono</th>
						<th>Contacto de emergencia</th>
						<th class="text-center">Accion</th>
						</tr>
					</thead>
					<tbody class="table-light" id="result">

					</tbody>
				</table>
			</div>
		</div>
	</main>

</body>

</html>