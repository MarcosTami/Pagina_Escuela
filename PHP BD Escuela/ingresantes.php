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
	<title>Document</title>

	<!-- bootstrap -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

	<!-- custom css -->
	<link rel="stylesheet" href="./css/admin.css">

	<!-- fontawesome -->
	<script src="https://kit.fontawesome.com/c2239edec8.js" crossorigin="anonymous"></script>

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
		<div class="container mt-4 d-flex justify-content-center">
			<div class="card w-50">
				<div class="p-2 text-white text-center bg-primary">
					<h3>Subir pdf</h3>
				</div>
				<div class="p-2 d-flex justify-content-center">
					<form method='post' action='subir_archivo.php' enctype='multipart/form-data'>
						<div class="d-flex flex-column ">
							<input type='file' class=" m-2" name='archivo' multiple />
							<input type='submit' class="btn btn-success" value='Subir' name='enviar' />
						</div>
					</form>

				</div>
				<div class="card-body">
					<p class="fs-5">A traves de este sistema se podra subir un archivo PDF el cual podra ser publicado en la pagina web
						con el fin de dar a conocer los estudiantes que ingresaran a primer año.
					</p>
				</div>
			</div>
		</div>

	</main>

</body>

</html>