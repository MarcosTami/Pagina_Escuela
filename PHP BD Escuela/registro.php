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

    <!-- jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- custom css-->
    <link rel="stylesheet" href="./css/registro.css">

    <!-- font awesome-->
    <script src="https://kit.fontawesome.com/c2239edec8.js" crossorigin="anonymous"></script>

</head>

<body>
   

    <div class="registro container d-flex flex-column justify-content-center">
        <div class="text-center">
            <h1>Registro</h1>
        </div>
        <div>
            <div id="msg"></div>
            <form method="post" id="form-registro" action="submit.php" class="needs-validation">
                <div class="form-group">
                    <label class="form-label" for="usuario">Usuario</label>
                    <input class="form-control" type="user" id="usuario" name="usuario" required>
                </div>
                <div class="form-group">
                    <label class="form-label" for="password">Contraseña</label>
                    <input class="form-control" type="password" id="contraseña" name="contraseña" required>
                </div>
                <div class="d-flex justify-content-center">
                    <button type="submit" class="btn bg-success text-white mt-3" id="btn-registro">Registrarse</button>
                </div>
            </form>
        </div>
        <script src="./js/mensajes.js"></script>
    </div>
</body>

</html>