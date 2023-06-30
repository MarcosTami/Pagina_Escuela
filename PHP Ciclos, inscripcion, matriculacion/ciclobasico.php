<!DOCTYPE html>
<html lang="en">

<head>

    <?php include("../Templates/head.php"); ?>

    <!-- modals resources-->
    <link href="https://fonts.googleapis.com/css?family=Raleway|Roboto" rel="stylesheet">
    <link rel="stylesheet" href="../Css/modals/modals.css">

    <!-- custom bootstrap-->
    <link rel="stylesheet" href="../Css/custom/ciclobasico.css">

</head>

<body>
    <!-- showcase img-->
    <div class="showcase">

        <!-- header-->
        <?php include("../Templates/header.php"); ?>
        <div class="position-relative overflow-hidden m-5 pt-5 text-light">
            <div class="mx-auto mt-5" style="padding-top: 50px">
                <h1 class="pt-5 m-5" style="font-size: 3rem; font-weight: 700; line-height: 1.2; color: #f8f6f3">Ciclo Básico</h1>
                <h1 class="m-5" style="font-size: 3rem; font-weight: 700; line-height: 1.2; color: #f8f6f3">Educación Secundaria Técnica</h1>
            </div>
        </div>
    </div>

    <!-- main container -->
    <div class="container-fluid">
        <div class="d-flex flex-column">
            <div>
                <div class="container">
                    <div class="cb1 fs-5 text-center p-5 rounded-3">
                        <p>El <strong>ciclo basico</strong> técnico tiene una duracion de tres años y tiene una Formación Técnica
                            Específica la cual esta comprendida por los saberes del mundo del trabajo, el conocimiento del sistema socio-productivo local, la formacion ciudadana y la adquisicion de saberes en lo que respecta
                            a la produccion de conocimientos cientificos y tecnologicos.
                        </p>
                        <p>
                            Una de las características principales de la Formación Específica en el ciclo
                            Básico es favorecer el desarrollo de capacidades que resultarán necesarias en las diferentes
                            tecnicaturas que el alumno pueda elegir en el ciclo superior.
                        </p>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center" style="margin-bottom: 100px;">
                <div class="cb2 d-flex align-items-center">
                    <div class="modals mt-5">
                        <div class="text-center">
                            <div class="col-m-5 p-lg-4 mx-auto">
                                <h1 style="font-size: 1.8rem; font-weight: 700; line-height: 1.4;">Plan de estudios</h1>
                                <p style="max-height: 450px; overflow:hidden; position: relative; font-size: 1.2rem;">A continuacion podra visualizar la estructura curricular de cada año del ciclo basico.</p>
                            </div>
                        </div>
                        <div class="container-modals">
                            <a class="btn" data-bs-toggle="modal" href="#exampleModalToggle1" role="button">
                                <div class="items">
                                    <div class="icon-wrapper">
                                        <i class="fa-solid fa-1"></i>
                                    </div>
                                    <div class="project-name">
                                        <p>Primer año</p>
                                    </div>
                                </div>
                            </a>
                            <a class="btn" data-bs-toggle="modal" href="#exampleModalToggle2" role="button">
                                <div class="items">
                                    <div class="icon-wrapper">
                                        <i class="fa-solid fa-2"></i>
                                    </div>
                                    <div class="project-name">
                                        <p>Segundo año</p>
                                    </div>
                                </div>
                            </a>
                            <a class="btn" data-bs-toggle="modal" href="#exampleModalToggle3" role="button">
                                <div class="items">
                                    <div class="icon-wrapper">
                                        <i class="fa-solid fa-3"></i>
                                    </div>
                                    <div class="project-name">
                                        <p>Tercer año</p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="modal fade" id="exampleModalToggle1" aria-hidden="true" aria-labelledby="exampleModalToggleLabel1" tabindex="-1" data-bs-backdrop="false">
                            <div class="modal-dialog modal-xl">
                                <div class="modal-content">
                                    <div class="modal-header d-flex text-white">
                                        <div class="d-flex w-95 justify-content-center">
                                            <h5 class="modal-title" id="exampleModalToggleLabel1">1° AÑO DE EDUCACIÓN SECUNDARIA TÉCNICA</h5>
                                        </div>
                                        <div class="d-flex w-5 ">
                                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                    </div>

                                    <div class="modal-body">
                                        <table class="table table-bordered ">
                                            <thead class="thead-light">
                                                <tr class="text-center table-light">
                                                    <th style="background-color: rgba(35, 113, 177, 0.726)"></th>
                                                    <th>Ciencias Naturales</th>
                                                    <th>Ciencias Sociales</th>
                                                    <th>Educación Artística</th>
                                                    <th>Educación Física</th>
                                                    <th>Inglés</th>
                                                    <th>Matemática</th>
                                                    <th>Prácticas del Lenguaje</th>
                                                    <th>Construcción Ciudadana</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th class="text-center table-light">
                                                        <p>Formación General</p>
                                                        <p>y</p>
                                                        <p>Formación Científico Tecnológica</p>
                                                    </th>
                                                    <td class="text-center text-light">4 Módulos semanales</td>
                                                    <td class="text-center text-light">4 Módulos semanales</td>
                                                    <td class="text-center text-light">2 Módulos semanales</td>
                                                    <td class="text-center text-light">2 Módulos semanales</td>
                                                    <td class="text-center text-light">2 Módulos semanales</td>
                                                    <td class="text-center text-light">4 Módulos semanales</td>
                                                    <td class="text-center text-light">4 Módulos semanales</td>
                                                    <td class="text-center text-light">2 Módulos semanales</td>
                                                </tr>
                                            </tbody>
                                        </table>

                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th></th>
                                                    <th class="text-center table-light">Procedimientos Técnicos </th>
                                                    <th class="text-center table-light">Lenguajes Tecnológicos </th>
                                                    <th class="text-center table-light">Sistemas Tecnológicos </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th class="text-center table-light">
                                                        <p>Formación Cientifico Tecnologica</p>
                                                        <p>y</p>
                                                        <p>Formación Tecnico Especifica</p>
                                                    </th>
                                                    <td class="text-center text-light">72 horas reloj anual </td>
                                                    <td class="text-center text-light">72 horas reloj anual </td>
                                                    <td class="text-center text-light">72 horas reloj anual </td>
                                                </tr>
                                            </tbody>
                                        </table>

                                    </div>
                                    <div class="modal-footer d-flex flex-column justify-content-start text-white">
                                        <div class="d-flex">
                                            <a style="text-decoration: none; color:white" href="http://servicios.abc.gov.ar/lainstitucion/organismos/eductecnicaprofesional/direcciones/normativas/documentos/resolucion/ciclo_basico_tecnica.pdf">
                                                <p>
                                                    Resolucion 88/09 Anexo - 3
                                                </p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1" data-bs-backdrop="false">
                            <div class="modal-dialog modal-xl ">
                                <div class="modal-content">
                                    <div class="modal-header d-flex text-white">
                                        <div class="d-flex w-95 justify-content-center">
                                            <h5 class="modal-title" id="exampleModalToggleLabel2">2° AÑO DE EDUCACIÓN SECUNDARIA TÉCNICA</h5>
                                        </div>
                                        <div class="d-flex w-5 ">
                                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                    </div>

                                    <div class="modal-body">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr class="text-center table-light">
                                                    <th style="background-color: rgba(35, 113, 177, 0.726)"></th>
                                                    <th>Biología</th>
                                                    <th>Construcción de Ciudadanía</th>
                                                    <th>Educación Artística</th>
                                                    <th>Educación Física</th>
                                                    <th>Físico Química </th>
                                                    <th>Geografía</th>
                                                    <th>Historia</th>
                                                    <th>Inglés</th>
                                                    <th>Matemática</th>
                                                    <th>Prácticas del Lenguaje</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th class="text-center table-light">
                                                        <p>Formación General</p>
                                                        <p>y</p>
                                                        <p>Formación Científico Tecnológica</p>
                                                    </th>
                                                    <td class="text-center text-light">2 Módulos semanales</td>
                                                    <td class="text-center text-light">2 Módulos semanales</td>
                                                    <td class="text-center text-light">2 Módulos semanales</td>
                                                    <td class="text-center text-light">2 Módulos semanales</td>
                                                    <td class="text-center text-light">2 Módulos semanales</td>
                                                    <td class="text-center text-light">2 Módulos semanales</td>
                                                    <td class="text-center text-light">2 Módulos semanales</td>
                                                    <td class="text-center text-light">2 Módulos semanales</td>
                                                    <td class="text-center text-light">4 Módulos semanales</td>
                                                    <td class="text-center text-light">4 Módulos semanales</td>
                                                </tr>
                                            </tbody>
                                        </table>

                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th></th>
                                                    <th class="text-center table-light">Procedimientos Técnicos</th>
                                                    <th class="text-center table-light">Lenguajes Tecnológicos</th>
                                                    <th class="text-center table-light">Sistemas Tecnológicos</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th class="text-center table-light">
                                                        <p>Formación Cientifico Tecnologica</p>
                                                        <p>y</p>
                                                        <p>Formación Tecnico Especifica</p>
                                                    </th>
                                                    <td class="text-center text-light">144 horas reloj anual</td>
                                                    <td class="text-center text-light">72 horas reloj anual</td>
                                                    <td class="text-center text-light">72 horas reloj anual</td>
                                                </tr>
                                            </tbody>
                                        </table>

                                    </div>
                                    <div class="modal-footer d-flex flex-column justify-content-start text-white">
                                        <div class="d-flex">
                                            <a style="text-decoration: none; color: white" href="http://servicios.abc.gov.ar/lainstitucion/organismos/eductecnicaprofesional/direcciones/normativas/documentos/resolucion/ciclo_basico_tecnica.pdf">
                                                <p>
                                                    Resolucion 88/09 Anexo - 3
                                                </p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="modal fade" id="exampleModalToggle3" aria-hidden="true" aria-labelledby="exampleModalToggleLabel3" tabindex="-1" data-bs-backdrop="false">
                            <div class="modal-dialog modal-xl ">
                                <div class="modal-content">
                                    <div class="modal-header d-flex text-white">
                                        <div class="d-flex w-95 justify-content-center">
                                            <h5 class="modal-title" id="exampleModalToggleLabel3">3° AÑO DE EDUCACIÓN SECUNDARIA TÉCNICA</h5>
                                        </div>
                                        <div class="d-flex w-5 ">
                                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                    </div>

                                    <div class="modal-body">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr class="text-center table-light">
                                                    <th style="background-color: rgba(35, 113, 177, 0.726)"></th>
                                                    <th>Biología</th>
                                                    <th>Construcción de Ciudadanía</th>
                                                    <th>Educación Artística </th>
                                                    <th>Educación Física </th>
                                                    <th>Físico Química </th>
                                                    <th>Geografía</th>
                                                    <th>Historia</th>
                                                    <th>Inglés</th>
                                                    <th>Matemática </th>
                                                    <th>Prácticas del Lenguaje </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th class="text-center table-light">
                                                        <p>Formación General</p>
                                                        <p>y</p>
                                                        <p>Formación Científico Tecnológica</p>
                                                    </th>
                                                    <td class="text-center text-light">2 Módulos semanales</td>
                                                    <td class="text-center text-light">2 Módulos semanales</td>
                                                    <td class="text-center text-light">2 Módulos semanales</td>
                                                    <td class="text-center text-light">2 Módulos semanales</td>
                                                    <td class="text-center text-light">2 Módulos semanales</td>
                                                    <td class="text-center text-light">2 Módulos semanales</td>
                                                    <td class="text-center text-light">2 Módulos semanales</td>
                                                    <td class="text-center text-light">2 Módulos semanales</td>
                                                    <td class="text-center text-light">4 Módulos semanales</td>
                                                    <td class="text-center text-light">4 Módulos semanales</td>
                                                </tr>
                                            </tbody>
                                        </table>

                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>
                                                    </th>
                                                    <th class="text-center table-light">Procedimientos Técnicos </th>
                                                    <th class="text-center table-light">Lenguajes Tecnológicos </th>
                                                    <th class="text-center table-light">Sistemas Tecnológicos </th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th class="text-center table-light">
                                                        <p>Formación Cientifico Tecnologica</p>
                                                        <p>y</p>
                                                        <p>Formación Tecnico Especifica</p>
                                                    </th>
                                                    <td class="text-center text-light">72 horas reloj anual </td>
                                                    <td class="text-center text-light">72 horas reloj anual </td>
                                                    <td class="text-center text-light">144 horas reloj anual </td>
                                                </tr>
                                            </tbody>
                                        </table>

                                    </div>
                                    <div class="modal-footer d-flex flex-column justify-content-start text-white">
                                        <div class="d-flex">
                                            <a style="text-decoration: none; color: white" href="http://servicios.abc.gov.ar/lainstitucion/organismos/eductecnicaprofesional/direcciones/normativas/documentos/resolucion/ciclo_basico_tecnica.pdf">
                                                <p>
                                                    Resolucion 88/09 Anexo - 3
                                                </p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="text-center text-white container" style="margin-top: 120px;">
                            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2500">
                                <div class="carousel-indicators d-none">
                                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
                                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>
                                </div>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="./imagenes/carpinteria1.jpg" alt="" class="img-fluid" style="width:  900px; height: 600px;">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h5>Taller de carpinteria</h5>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="../imagenes/torneria2.jpg" alt="" class="img-fluid" style="width:  900px; height: 600px;">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h5>Taller de Torneria</h5>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="../imagenes/fundicion.jpg" alt="" class="img-fluid" style="width:  900px; height: 600px;">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h5>Taller de Fundicion</h5>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="../imagenes/dibujotecnico.jpg" alt="" class="img-fluid" style="width:  900px; height: 600px;">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h5>Salon de dibujo tecnico</h5>

                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="./imagenes/electricidad2.jpg" alt="" class="img-fluid" style="width:  900px; height: 600px;">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h5>Taller de electricidad</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- footer -->
    <?php include("../Templates/footer.php"); ?>
</body>

</html>