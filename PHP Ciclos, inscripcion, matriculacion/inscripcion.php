<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("../Templates/head.php"); ?>
    <!-- custom bootstrap-->
    <link rel="stylesheet" href="./css/custom/inscripcion.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>

<body>
    <!-- header -->
    <?php include("../Templates/header.php"); ?>

    <!-- main container-->
    <div class="container" style="height:750px;">
        <div class="d-flex flex-column mt-5">
            <div class="d-flex flex-column text-center justify-content-center">
                <h1>Inscripcion</h1>
                <p class="fs-5">
                    Descargar e imprimir la planilla.
                </p>
                <p class="fs-5">
                    Una vez completada esta misma se debe entregar en Mesa de Entrada.
                </p>
                <p class="fs-5">
                    Seras notificado/a via gmail en caso de ser admitido en el sorteo.
                </p>
                <p class="fs-5">
                    Los resultados del sorteo estaran publicados en la pagina.
                </p>
            </div>
            <div class="p-3 text-center d-flex justify-content-center">
                <div class="d-flex flex-column">
                    <div class="header mb-2">Completa el formulario si queres recibir notificaciones.</div>
                    <div id="msg"></div>
                    <form method="post" id="form-subscribe" action="./phpinscripcion/submit.php">
                        <div class="input-icon">
                            <input type="text" name="nombre" placeholder="Nombre completo" class="form-input" required autocomplete="off">
                        </div>
                        <div class="input-icon">
                            <input type="email" name="email" placeholder="Email" class="form-input" required autocomplete="off">
                        </div>
                        <div class="d-flex justify-content-between">
                            <div>
                                <button type="submit" class="btn bg-primary text-white mt-3" id="btn-subscriber">Enviar</button>
                            </div>
                            <div class="mb-2">
                                <button class="btn bg-primary mt-3">
                                    <a href="../Planillas/planilla-inscripcion.pdf" download class="text-white">Descargar planilla</a>
                                </button>
                            </div>
                        </div>
                    </form>

                </div>
                <script src="./phpinscripcion/inscripcion.js"></script>
            </div>
        </div>
    </div>

    <!-- footer -->
    <?php include("Templates/footer.php"); ?>

</body>

</html>