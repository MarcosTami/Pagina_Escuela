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

    <!-- custom css-->
    <link rel="stylesheet" href="./css/login.css">

    <!-- font awesome-->
    <script src="https://kit.fontawesome.com/c2239edec8.js" crossorigin="anonymous"></script>

</head>

<body>

    <header>
        <nav class="d-flex flex-column justify-content-center mt-4 navbar navbar-expand-lg fixed-top">
            <div class="d-flex justify-content-center ">
                <div class="d-flex" style="height: 67px;">
                    <a href="./index.php">
                        <img class="img-fluid justify-content-start" src="../logos/logo.png" alt="Logo" style="width: 55px; height: 57;">
                    </a>
                </div>
            </div>
        </nav>
    </header>

    <div class="login container d-flex flex-column justify-content-center">
        <div class="text-center">
            <h1>Iniciar sesion</h1>
        </div>
        <div>
            <form action="validar_usuario.php" method="POST">
                <div class="form-group">
                    <label class="form-label" for="usuario">Usuario</label>
                    <input class="form-control" type="user" id="usuario" name="usuario" required>
                </div>
                <div class="form-group">
                    <label class="form-label" for="password">Contraseña</label>
                    <input class="form-control" type="password" id="contraseña" name="contraseña" required>
                </div>
                <div>
                    <input class="btn btn-success w-100" type="submit" name="ingresar" value="Ingresar">
                </div>
            </form>
        </div>
    </div>

</body>

</html>