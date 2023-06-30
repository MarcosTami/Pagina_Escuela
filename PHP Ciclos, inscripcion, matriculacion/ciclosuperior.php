<!DOCTYPE html>
<html lang="en">

<head>

    <?php include("../Templates/head.php"); ?>

    <!-- modals resources-->
    <link href="https://fonts.googleapis.com/css?family=Raleway|Roboto" rel="stylesheet">
    <link rel="stylesheet" href="../Css/modals/modals.scss">

    <!-- custom bootstrap-->
    <link rel="stylesheet" href="../Css/custom/ciclosuperior.css">

</head>


<body>
    <!-- showcase img -->
    <div class="showcase">
        <!-- header -->
        <?php include("../Templates/header.php"); ?>
        <div class="position-relative overflow-hidden m-5 pt-5  text-light ">
            <div class="mx-auto mt-5">
                <h1 class="pt-5 m-5" style="font-size: 3rem; font-weight: 700; line-height: 1.2; color: #f8f6f3">Ciclo Superior</h1>
                <h1 class="m-5" style="font-size: 3rem; font-weight: 700; line-height: 1.2; color: #f8f6f3">Educación Secundaria Técnica</h1>
            </div>
        </div>
    </div>

    <!-- main container -->
    <div class="container-fluid">
        <div class="d-flex flex-column">
            <div>
                <div class="container">
                    <div class="text-center p-5 rounded-3">
                        <p class="fs-5">El <strong>ciclo superior</strong> tiene una duracion de cuatro años y posee la modalidad de Educación Técnico Profesional en donde se definen las
                            tecnicaturas que se mostraran mas abajo. </p>
                        <p class="fs-5 mt-2">Cada una de estas orientaciones posee una Formacion cientifico-tecnologica, la cual tiene que ver con diferentes
                            saberes que otorgan conocimientos, habilidades, destrezas y valores. Esta organizada en modulos y su funcion es comprender, integrar y profundizar los contenidos que
                            introducen a los aspectos específicos de cada especialidad.
                        </p>
                    </div>
                </div>
            </div>
            <div class="d-flex flex-row justify-content-center" style="margin-bottom: 100px;">
                <div class="cb2 d-flex align-items-center">
                    <div class="modals mt-5">
                        <div class="text-center">
                            <div class="mx-auto">
                                <h1>Plan de estudios</h1>
                                <p class="fs-5">A continuacion podra visualizar la estructura curricular de cada una de las tecnicaturas.</p>
                            </div>
                        </div>
                        <div class="container-modals">
                            <a class="btn" data-bs-toggle="modal" href="#exampleModalToggle1" role="button">
                                <div class="items">
                                    <div class="icon-wrapper">
                                        <i class="fa fa-wrench"></i>
                                    </div>
                                    <div class="project-name">
                                        <p>Automotores</p>
                                    </div>
                                </div>
                            </a>
                            <a class="btn" data-bs-toggle="modal" href="#exampleModalToggle2" role="button">
                                <div class="items">
                                    <div class="icon-wrapper">
                                        <i class="fa-solid fa-gear"></i>
                                    </div>
                                    <div class="project-name">
                                        <p>Electromecánica</p>
                                    </div>
                                </div>
                            </a>
                            <a class="btn" data-bs-toggle="modal" href="#exampleModalToggle3" role="button">
                                <div class="items">
                                    <div class="icon-wrapper">
                                        <i class="fa-solid fa-microchip"></i>
                                    </div>
                                    <div class="project-name">
                                        <p>Informática</p>
                                    </div>
                                </div>
                            </a>
                            <a class="btn" data-bs-toggle="modal" href="#exampleModalToggle4" role="button">
                                <div class="items" style="height: 100px;">
                                    <div class="icon-wrapper">
                                        <i class="fa-solid fa-compass-drafting"></i>
                                    </div>
                                    <div class="project-name">
                                        <p>M. Mayor de obras</p>
                                    </div>
                                </div>
                            </a>
                            <a class="btn" data-bs-toggle="modal" href="#exampleModalToggle5" role="button">
                                <div class="items">
                                    <div class="icon-wrapper">
                                        <i class="fa fa-code"></i>
                                    </div>
                                    <div class="project-name">
                                        <p>Programación</p>
                                    </div>
                                </div>
                            </a>
                            <a class="btn" data-bs-toggle="modal" href="#exampleModalToggle6" role="button">
                                <div class="items">
                                    <div class="icon-wrapper">
                                        <i class="fa fa-flask"></i>
                                    </div>
                                    <div class="project-name">
                                        <p>Química</p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="modal fade" id="exampleModalToggle1" aria-hidden="true" aria-labelledby="exampleModalToggleLabel1" tabindex="-1" data-bs-backdrop="false">
                            <div class="modal-dialog modal-xl ">
                                <div class="modal-content">
                                    <div class="modal-header d-flex text-white">
                                        <div class="d-flex w-95 justify-content-center">
                                            <h5 class="modal-title" id="exampleModalToggleLabel1">Estructura curricular de la tecnicatura en Automotores</h5>
                                        </div>
                                        <div class="d-flex w-5 ">
                                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                    </div>
                                    <div class="modal-body">
                                        <table class="table table-borderless">
                                            <thead class="thead-light">
                                                <tr class="text-center table-primary">
                                                    <th>CUARTO AÑO</th>
                                                    <th>QUINTO AÑO</th>
                                                    <th>SEXTO AÑO</th>
                                                    <th>SEPTIMO AÑO</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="text-center table-light">
                                                    <th>Formacion General</th>
                                                    <th>Formacion General</th>
                                                    <th>Formacion General</th>
                                                    <th>Practicas Profesionalizantes</th>
                                                </tr>
                                                <tr class="text-center text-white">
                                                    <td>Literatura</td>
                                                    <td>Literatura</td>
                                                    <td>Literatura</td>
                                                    <td>Prácticas Profesionalizantes del Sector Automotriz</td>
                                                </tr>
                                                <tr class="text-center text-white">
                                                    <td>Ingles</td>
                                                    <td>Ingles</td>
                                                    <td>Ingles</td>
                                                    <td></td>
                                                </tr>
                                                <tr class="text-center text-white">
                                                    <td>Educación Física</td>
                                                    <td>Educación Física</td>
                                                    <td>Educación Física</td>
                                                    <td></td>

                                                </tr>
                                                <tr class="text-center text-white">
                                                    <td>Salud y Adolescencia</td>
                                                    <td>Política y Ciudadanía</td>
                                                    <td>Filosofía</td>
                                                    <td></td>
                                                </tr>
                                                <tr class="text-center text-white">
                                                    <td>Historia</td>
                                                    <td>Historia</td>
                                                    <td>Arte</td>
                                                    <td></td>
                                                </tr>
                                                <tr class="text-center text-white">
                                                    <td>Geografía</td>
                                                    <td>Geografía</td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr class="text-center table-light">
                                                    <th>Formación Científico Tecnológico </th>
                                                    <th>Formación Científico Tecnológico </th>
                                                    <th>Formación Científico Tecnológico </th>
                                                    <th>Formación Científico Tecnológico </th>

                                                </tr>
                                                <tr class="text-center text-white">
                                                    <td>Matemática-Ciclo Superior </td>
                                                    <td>Análisis Matemático</td>
                                                    <td>Matemática Aplicada </td>
                                                    <td>Emprendimientos Productivos y Desarrollo Local</td>

                                                </tr>
                                                <tr class="text-center text-white">
                                                    <td>Física</td>
                                                    <td>Resistencia y Ensayos de los Materiales</td>
                                                    <td>Sistemas Hidráulicos y Neumáticos </td>
                                                    <td>Técnicas de diagnóstico</td>
                                                </tr>
                                                <tr class="text-center text-white">
                                                    <td>Química </td>
                                                    <td>Termodinámica </td>
                                                    <td>Instrumental de Medición </td>
                                                    <td>Productos y Procesos de Manufactura Automotriz</td>

                                                </tr>
                                                <tr class="text-center text-white">
                                                    <td>Conocimiento de los Materiales </td>
                                                    <td>Mecánica de los motores endotérmicos</td>
                                                    <td>Combustión de los motores endotérmicos </td>
                                                    <td>Instalaciones de GNC y GLP</td>
                                                </tr>
                                                <tr class="text-center text-white">
                                                    <td>Conocimiento de las estructuras</td>
                                                    <td>Seguridad, Higiene y Protección Ambiental</td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr class="text-center text-white">
                                                    <td>Derechos del Trabajo</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr class="text-center table-light">
                                                    <th>Formación Técnico Específica</th>
                                                    <th>Formación Técnico Específica</th>
                                                    <th>Formación Técnico Específica</th>
                                                    <th>Formación Técnico Específica</th>
                                                </tr>
                                                <tr class="text-center text-white">
                                                    <td>Dibujo tecnológico</td>
                                                    <td>Sistemas de Suspensión, Dirección y Frenos</td>
                                                    <td>Sistemas de Inyección</td>
                                                    <td>Sistemas Autotrónicos</td>
                                                </tr>
                                                <tr class="text-center text-white">
                                                    <td>Electrotecnia del Automotor</td>
                                                    <td>Motores de Combustión Interna</td>
                                                    <td>Rectificación de Motores</td>
                                                    <td>Proyecto y Diseño de Carrocerías</td>
                                                </tr>
                                                <tr class="text-center text-white">
                                                    <td>Motores de combustión interna</td>
                                                    <td>Electrónica y Autotrónica</td>
                                                    <td>Laboratorio de Ensayo de Motores</td>
                                                    <td>Proyecto y Diseño de Chasis y Sistemas de Suspensión </td>
                                                </tr>
                                                <tr class="text-center text-white">
                                                    <td>Verificación y Mantenimiento Eléctrico del Automóvil</td>
                                                    <td>Sistemas Autotrónicos</td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr class="text-center text-white">
                                                    <td>Sistemas de Transmisión</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="modal-footer d-flex flex-column text-white">
                                        <div class="d-flex">
                                            <a style="text-decoration: none; color: white" href="http://servicios.abc.gov.ar/lainstitucion/organismos/eductecnicaprofesional/direcciones/normativas/documentos/resolucion/3828-09_anexo_3.pdf">
                                                <p>
                                                    Resolucion 3828/09 Anexo - 3
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
                                            <h5 class="modal-title" id="exampleModalToggleLabel2">Estructura curricular de la tecnicatura en Electromecanica</h5>
                                        </div>
                                        <div class="d-flex w-5">
                                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                    </div>
                                    <div class="modal-body">
                                        <table class="table table-borderless">
                                            <thead>
                                                <tr class="text-center table-primary">
                                                    <th>CUARTO AÑO</th>
                                                    <th>QUINTO AÑO</th>
                                                    <th>SEXTO AÑO</th>
                                                    <th>SEPTIMO AÑO</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="text-center table-light">
                                                    <th>Formacion General</th>
                                                    <th>Formacion General</th>
                                                    <th>Formacion General</th>
                                                    <th>Practicas Profesionalizantes</th>
                                                </tr>
                                                <tr class="text-white text-center">
                                                    <td>Literatura</td>
                                                    <td>Literatura</td>
                                                    <td>Literatura</td>
                                                    <td>Prácticas Profesionalizantes del Sector Electromecánico</td>
                                                </tr>
                                                <tr class="text-white text-center">
                                                    <td>Ingles</td>
                                                    <td>Ingles</td>
                                                    <td>Ingles</td>
                                                    <td></td>
                                                </tr>
                                                <tr class="text-white text-center">
                                                    <td>Educación Física</td>
                                                    <td>Educación Física</td>
                                                    <td>Educación Física</td>
                                                    <td></td>
                                                </tr>
                                                <tr class="text-white text-center">
                                                    <td>Salud y Adolescencia</td>
                                                    <td>Política y Ciudadanía</td>
                                                    <td>Filosofía</td>
                                                    <td></td>
                                                </tr>
                                                <tr class="text-white text-center">
                                                    <td>Historia</td>
                                                    <td>Historia</td>
                                                    <td>Arte</td>
                                                    <td></td>
                                                </tr>
                                                <tr class="text-white text-center">
                                                    <td>Geografía</td>
                                                    <td>Geografía</td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr class="text-center table-light">
                                                    <th>Formación Científico Tecnológico </th>
                                                    <th>Formación Científico Tecnológico </th>
                                                    <th>Formación Científico Tecnológico </th>
                                                    <th>Formación Científico Tecnológico </th>
                                                </tr>
                                                <tr class="text-white text-center">
                                                    <td>Matemática-Ciclo Superior </td>
                                                    <td>Análisis Matemático</td>
                                                    <td>Matemática Aplicada </td>
                                                    <td>Emprendimientos Productivos y Desarrollo Local</td>
                                                </tr>
                                                <tr class="text-white text-center">
                                                    <td>Física</td>
                                                    <td>Mecánica y Mecanismos</td>
                                                    <td>Termodinámica y Máquinas Térmicas </td>
                                                    <td>Electrónica Industrial</td>
                                                </tr>
                                                <tr class="text-white text-center">
                                                    <td>Química </td>
                                                    <td>Electrotecnia</td>
                                                    <td>Electrotecnia </td>
                                                    <td>Seguridad, Higiene y Protección Ambiental</td>
                                                </tr>
                                                <tr class="text-white text-center">
                                                    <td>Conocimiento de los Materiales </td>
                                                    <td>Resistencia y Ensayos de los Materiales</td>
                                                    <td>Sistemas Mecánicos</td>
                                                    <td>Máquinas Eléctricas</td>
                                                </tr>
                                                <tr class="text-white text-center">
                                                    <td>Derechos del Trabajo </td>
                                                    <td>Sistemas Mecánicos</td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr class="text-center table-light">
                                                    <th>Formación Técnico Específica</th>
                                                    <th>Formación Técnico Específica</th>
                                                    <th>Formación Técnico Específica</th>
                                                    <th>Formación Técnico Específica</th>
                                                </tr>
                                                <tr class="text-white text-center">
                                                    <td>Dibujo tecnológico</td>
                                                    <td>Laboratorio de Mediciones Eléctricas</td>
                                                    <td>Laboratorio de Metrología y Control de Calidad</td>
                                                    <td></td>
                                                </tr>
                                                <tr class="text-white text-center">
                                                    <td>Maquinas Eléctricas y Automatismos</td>
                                                    <td>Maquinas Eléctricas y Automatismos </td>
                                                    <td>Maquinas Eléctricas y Automatismos </td>
                                                    <td>Mantenimiento y Montaje Electromecánico</td>
                                                </tr>
                                                <tr class="text-white text-center">
                                                    <td>Diseño y Procesamiento Mecánico</td>
                                                    <td>Diseño y Procesamiento Mecánico</td>
                                                    <td>Diseño y Procesamiento Mecánico</td>
                                                    <td>Proyecto y Diseño Electromecánico</td>
                                                </tr>
                                                <tr class="text-white text-center">
                                                    <td>Instalaciones y Aplicaciones de la Energía</td>
                                                    <td>Instalaciones y Aplicaciones de la Energía</td>
                                                    <td>Instalaciones y Aplicaciones de la Energía</td>
                                                    <td>Proyecto y Diseño de Instalaciones Eléctricas</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="modal-footer d-flex flex-column justify-content-start text-white">
                                        <div class="d-flex">
                                            <a style="text-decoration: none; color: white" href="http://servicios.abc.gov.ar/lainstitucion/organismos/eductecnicaprofesional/direcciones/normativas/documentos/resolucion/3828-09_anexo_3.pdf">
                                                <p>
                                                    Resolucion 3828/09 Anexo - 3
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
                                            <h5 class="modal-title" id="exampleModalToggleLabel3">Estructura curricular de la tecnicatura en Informatica</h5>
                                        </div>
                                        <div class="d-flex w-5 ">
                                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                    </div>
                                    <div class="modal-body">
                                        <table class="table table-borderless">
                                            <thead>
                                                <tr class="text-center table-primary">
                                                    <th>CUARTO AÑO</th>
                                                    <th>QUINTO AÑO</th>
                                                    <th>SEXTO AÑO</th>
                                                    <th>SEPTIMO AÑO</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="text-center table-light">
                                                    <th>Formacion General</th>
                                                    <th>Formacion General</th>
                                                    <th>Formacion General</th>
                                                    <th>Practicas Profesionalizantes</th>
                                                </tr>
                                                <tr class="text-white text-center">
                                                    <td>Literatura</td>
                                                    <td>Literatura</td>
                                                    <td>Literatura</td>
                                                    <td>Prácticas Profesionalizantes del Sector Informática</td>
                                                </tr>
                                                <tr class="text-white text-center">
                                                    <td>Ingles</td>
                                                    <td>Ingles</td>
                                                    <td>Ingles</td>
                                                    <td></td>
                                                </tr>
                                                <tr class="text-white text-center">
                                                    <td>Educación Física</td>
                                                    <td>Educación Física</td>
                                                    <td>Educación Física</td>
                                                    <td></td>
                                                </tr>
                                                <tr class="text-white text-center">
                                                    <td>Salud y Adolescencia</td>
                                                    <td>Política y Ciudadanía</td>
                                                    <td>Filosofía</td>
                                                    <td></td>
                                                </tr>
                                                <tr class="text-white text-center">
                                                    <td>Historia</td>
                                                    <td>Historia</td>
                                                    <td>Arte</td>
                                                    <td></td>
                                                </tr>
                                                <tr class="text-white text-center">
                                                    <td>Geografía</td>
                                                    <td>Geografía</td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr class="text-center table-light">
                                                    <th>Formación Científico Tecnológico </th>
                                                    <th>Formación Científico Tecnológico </th>
                                                    <th>Formación Científico Tecnológico </th>
                                                    <th>Formación Científico Tecnológico </th>
                                                </tr>
                                                <tr class="text-white text-center">
                                                    <td>Matemática-Ciclo Superior </td>
                                                    <td>Análisis Matemático</td>
                                                    <td>Matemática Aplicada </td>
                                                    <td>Emprendimientos Productivos y Desarrollo Local</td>
                                                </tr>
                                                <tr class="text-white text-center">
                                                    <td>Física</td>
                                                    <td>Sistemas Digitales</td>
                                                    <td>Sistemas Digitales</td>
                                                    <td>Evaluación de Proyectos</td>
                                                </tr>
                                                <tr class="text-white text-center">
                                                    <td>Química</td>
                                                    <td>Teleinformática</td>
                                                    <td>Investigación Operativa</td>
                                                    <td>Modelos y Sistemas</td>
                                                </tr>
                                                <tr class="text-white text-center">
                                                    <td>Tecnologías Electrónicas</td>
                                                    <td>Seguridad Informática</td>
                                                    <td>Base de Datos</td>
                                                    <td></td>
                                                </tr>
                                                <tr class="text-white text-center">
                                                    <td>Derechos del Trabajo </td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr class="text-center table-light">
                                                    <th>Formación Técnico Específica</th>
                                                    <th>Formación Técnico Específica</th>
                                                    <th>Formación Técnico Específica</th>
                                                    <th>Formación Técnico Específica</th>
                                                </tr>
                                                <tr class="text-white text-center">
                                                    <td>Laboratorio de Programación </td>
                                                    <td>Laboratorio de Programación </td>
                                                    <td>Laboratorio de Programación </td>
                                                    <td>Proyecto, Diseño e implementación de Sistemas Computacionales </td>
                                                </tr>
                                                <tr class="text-white text-center">
                                                    <td>Laboratorio de Hardware</td>
                                                    <td>Laboratorio de Hardware</td>
                                                    <td>Laboratorio de Hardware</td>
                                                    <td>Instalación, Mantenimiento y Reparación de Sistemas Computacionales</td>
                                                </tr>
                                                <tr class="text-white text-center">
                                                    <td>Laboratorio de Sistemas Operativos</td>
                                                    <td>Laboratorio de Sistemas Operativos</td>
                                                    <td>Laboratorio de Sistemas Operativos</td>
                                                    <td>Instalación, Mantenimiento y Reparación de Redes Informáticas</td>
                                                </tr>
                                                <tr class="text-white text-center">
                                                    <td>Laboratorio de Aplicaciones </td>
                                                    <td>Laboratorio de Aplicaciones </td>
                                                    <td>Laboratorio de Aplicaciones </td>
                                                    <td></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="modal-footer d-flex flex-column justify-content-start text-white">
                                        <div class="d-flex">
                                            <a style="text-decoration: none; color: white" href="http://servicios.abc.gov.ar/lainstitucion/organismos/eductecnicaprofesional/direcciones/normativas/documentos/resolucion/3828-09_anexo_3.pdf">
                                                <p>
                                                    Resolucion 3828/09 Anexo - 3
                                                </p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="modal fade" id="exampleModalToggle4" aria-hidden="true" aria-labelledby="exampleModalToggleLabel4" tabindex="-1" data-bs-backdrop="false">
                            <div class="modal-dialog modal-xl ">
                                <div class="modal-content">
                                    <div class="modal-header d-flex text-white">
                                        <div class="d-flex w-95 justify-content-center">
                                            <h5 class="modal-title" id="exampleModalToggleLabel4">Estructura curricular de la tecnicatura de M. Mayor de Obras</h5>
                                        </div>
                                        <div class="d-flex w-5 ">
                                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                    </div>
                                    <div class="modal-body">
                                        <table class="table table-borderless">
                                            <thead>
                                                <tr class="text-center table-primary">
                                                    <th>CUARTO AÑO</th>
                                                    <th>QUINTO AÑO</th>
                                                    <th>SEXTO AÑO</th>
                                                    <th>SEPTIMO AÑO</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="text-center table-light">
                                                    <th>Formacion General</th>
                                                    <th>Formacion General</th>
                                                    <th>Formacion General</th>
                                                    <th>Practicas Profesionalizantes</th>
                                                </tr>
                                                <tr class="text-white text-center">
                                                    <td>Literatura</td>
                                                    <td>Literatura</td>
                                                    <td>Literatura</td>
                                                    <td>Prácticas Profesionalizantes del Sector Construcciones Edilicias</td>
                                                </tr>
                                                <tr class="text-white text-center">
                                                    <td>Ingles</td>
                                                    <td>Ingles</td>
                                                    <td>Ingles</td>
                                                    <td></td>
                                                </tr>
                                                <tr class="text-white text-center">
                                                    <td>Educación Física</td>
                                                    <td>Educación Física</td>
                                                    <td>Educación Física</td>
                                                    <td></td>
                                                </tr>
                                                <tr class="text-white text-center">
                                                    <td>Salud y Adolescencia</td>
                                                    <td>Política y Ciudadanía</td>
                                                    <td>Filosofía</td>
                                                    <td></td>
                                                </tr>
                                                <tr class="text-white text-center">
                                                    <td>Historia</td>
                                                    <td>Historia</td>
                                                    <td>Arte</td>
                                                    <td></td>
                                                </tr>
                                                <tr class="text-white text-center">
                                                    <td>Geografía</td>
                                                    <td>Geografía</td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr class="text-center table-light">
                                                    <th>Formación Científico Tecnológico </th>
                                                    <th>Formación Científico Tecnológico </th>
                                                    <th>Formación Científico Tecnológico </th>
                                                    <th>Formación Científico Tecnológico </th>
                                                </tr>
                                                <tr class="text-white text-center">
                                                    <td>Matemática-Ciclo Superior </td>
                                                    <td>Análisis Matemático</td>
                                                    <td>Matemática Aplicada </td>
                                                    <td>Emprendimientos Productivos y Desarrollo Local</td>
                                                </tr>
                                                <tr class="text-white text-center">
                                                    <td>Física</td>
                                                    <td>Instalaciones Eléctricas</td>
                                                    <td>Instalaciones Sanitarias y de Gas</td>
                                                    <td>Instalaciones de Acondicionamiento del Aire</td>
                                                </tr>
                                                <tr class="text-white text-center">
                                                    <td>Química </td>
                                                    <td>Resistencia y Ensayos de los Materiales</td>
                                                    <td>Estructuras</td>
                                                    <td>Estructuras</td>
                                                </tr>
                                                <tr class="text-white text-center">
                                                    <td>Conocimiento de los Materiales</td>
                                                    <td>Derechos del Trabajo</td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr class="text-center table-light">
                                                    <th>Formación Técnico Específica</th>
                                                    <th>Formación Técnico Específica</th>
                                                    <th>Formación Técnico Específica</th>
                                                    <th>Formación Técnico Específica</th>
                                                </tr>
                                                <tr class="text-white text-center">
                                                    <td>Dibujo tecnológico</td>
                                                    <td>Documentación Técnica </td>
                                                    <td>Proyectos de Instalaciones </td>
                                                    <td>Proyecto Final</td>
                                                </tr>
                                                <tr class="text-white text-center">
                                                    <td>Interpretación de anteproyectos </td>
                                                    <td>Materiales de Obra </td>
                                                    <td>Dirección de la Ejecución de Instalaciones</td>
                                                    <td>Dirección de Obra</td>
                                                </tr>
                                                <tr class="text-white text-center">
                                                    <td>Planificación de Obra </td>
                                                    <td>Sistemas Constructivos</td>
                                                    <td>Sistemas Constructivos </td>
                                                    <td>Ejercicio Profesional de la Construcción</td>
                                                </tr>
                                                <tr class="text-white text-center">
                                                    <td>Sistemas Constructivos</td>
                                                    <td>Proyecto</td>
                                                    <td>Proyecto</td>
                                                    <td></td>
                                                </tr>
                                                <tr class="text-white text-center">
                                                    <td>Proyecto</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="modal-footer d-flex flex-column justify-content-start text-white">
                                        <div class="d-flex">
                                            <a style="text-decoration: none; color: white" href="http://servicios.abc.gov.ar/lainstitucion/organismos/eductecnicaprofesional/direcciones/normativas/documentos/resolucion/3828-09_anexo_3.pdf">
                                                <p>
                                                    Resolucion 3828/09 Anexo - 3
                                                </p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="modal fade" id="exampleModalToggle5" aria-hidden="true" aria-labelledby="exampleModalToggleLabel5" tabindex="-1" data-bs-backdrop="false">
                            <div class="modal-dialog modal-xl ">
                                <div class="modal-content">
                                    <div class="modal-header d-flex text-white">
                                        <div class="d-flex w-95 justify-content-center">
                                            <h5 class="modal-title" id="exampleModalToggleLabel5">Estructura curricular de la tecnicatura en Programacion</h5>
                                        </div>
                                        <div class="d-flex w-5 ">
                                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                    </div>
                                    <div class="modal-body">
                                        <table class="table table-borderless">
                                            <thead>
                                                <tr class="text-center table-primary">
                                                    <th>CUARTO AÑO</th>
                                                    <th>QUINTO AÑO</th>
                                                    <th>SEXTO AÑO</th>
                                                    <th>SEPTIMO AÑO</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="text-center table-light">
                                                    <th>Formacion General</th>
                                                    <th>Formacion General</th>
                                                    <th>Formacion General</th>
                                                    <th>Practicas Profesionalizantes</th>
                                                </tr>
                                                <tr class="text-white text-center">
                                                    <td>Literatura</td>
                                                    <td>Literatura</td>
                                                    <td>Literatura</td>
                                                    <td>Prácticas Profesionalizantes del Sector Programacion</td>
                                                </tr>
                                                <tr class="text-white text-center">
                                                    <td>Ingles</td>
                                                    <td>Ingles</td>
                                                    <td>Ingles</td>
                                                    <td></td>
                                                </tr>
                                                <tr class="text-white text-center">
                                                    <td>Educación Física</td>
                                                    <td>Educación Física</td>
                                                    <td>Educación Física</td>
                                                    <td></td>
                                                </tr>
                                                <tr class="text-white text-center">
                                                    <td>Salud y Adolescencia</td>
                                                    <td>Política y Ciudadanía</td>
                                                    <td>Filosofía</td>
                                                    <td></td>
                                                </tr>
                                                <tr class="text-white text-center">
                                                    <td>Historia</td>
                                                    <td>Historia</td>
                                                    <td>Arte</td>
                                                    <td></td>
                                                </tr>
                                                <tr class="text-white text-center">
                                                    <td>Geografía</td>
                                                    <td>Geografía</td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr class="text-center table-light">
                                                    <th>Formación Científico Tecnológico </th>
                                                    <th>Formación Científico Tecnológico </th>
                                                    <th>Formación Científico Tecnológico </th>
                                                    <th>Formación Científico Tecnológico </th>
                                                </tr>
                                                <tr class="text-white text-center">
                                                    <td>Matemática-Ciclo Superior </td>
                                                    <td>Análisis Matemático</td>
                                                    <td>Matemática Aplicada</td>
                                                    <td>Emprendimientos Productivos y Desarrollo Local</td>
                                                </tr>
                                                <tr class="text-white text-center">
                                                    <td>Física</td>
                                                    <td>Sistemas Digitales</td>
                                                    <td>Sistemas Digitales</td>
                                                    <td>Evaluacion de proyectos</td>
                                                </tr>
                                                <tr class="text-white text-center">
                                                    <td>Química </td>
                                                    <td>Bases de datos</td>
                                                    <td>Sistemas de gestion y autogestion</td>
                                                    <td>Modelos y Sistemas</td>
                                                </tr>
                                                <tr class="text-white text-center">
                                                    <td>Arquitectura de Hardware</td>
                                                    <td>Modelos y Sistemas</td>
                                                    <td>Seguridad informatica</td>
                                                    <td>Organizacion y Metodos</td>
                                                </tr>
                                                <tr class="text-white text-center">
                                                    <td>Derechos del Trabajo</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr class="text-center table-light">
                                                    <th>Formación Técnico Específica</th>
                                                    <th>Formación Técnico Específica</th>
                                                    <th>Formación Técnico Específica</th>
                                                    <th>Formación Técnico Específica</th>
                                                </tr>
                                                <tr class="text-white text-center">
                                                    <td>Metodologias de Programacion</td>
                                                    <td>Lenguajes de Programacion</td>
                                                    <td>Lenguajes de Programacion</td>
                                                    <td>Proyecto integrador</td>
                                                </tr>
                                                <tr class="text-white text-center">
                                                    <td>Hardware y Componentes</td>
                                                    <td>Redes Informaticas</td>
                                                    <td>Programacion y Controles Automatizados</td>
                                                    <td>Desarrollo de Software para Plataformas Moviles</td>
                                                </tr>
                                                <tr class="text-white text-center">
                                                    <td>Sistemas Operativos</td>
                                                    <td>Diseño Web</td>
                                                    <td>Desarrollo de Aplicaciones Web Estaticas</td>
                                                    <td>Diseño e Implementacion de Sitios Web</td>
                                                </tr>
                                                <tr class="text-white text-center">
                                                    <td>Suite de Aplicaciones</td>
                                                    <td>Arquitectura de Base de Datos</td>
                                                    <td>Desarrollo de Aplicaciones Web Dinamicas</td>
                                                    <td></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="modal-footer d-flex flex-column justify-content-start text-white">
                                        <div class="d-flex">
                                            <a style="text-decoration: none; color: white" href="https://abc2.abc.gob.ar/consejo_general/sites/default/files/documentos/rsc-5187-2018-anexo_15-if-2018-31697559-gdeba-detecdgcye.pdf">
                                                <p>
                                                    GOB. PBA. - Anexo PROG. 2018
                                                </p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="modal fade" id="exampleModalToggle6" aria-hidden="true" aria-labelledby="exampleModalToggleLabel6" tabindex="-1" data-bs-backdrop="false">
                            <div class="modal-dialog modal-xl ">
                                <div class="modal-content">
                                    <div class="modal-header d-flex text-white">
                                        <div class="d-flex w-95 justify-content-center">
                                            <h5 class="modal-title" id="exampleModalToggleLabel6">Estructura curricular de la tecnicatura en Quimica</h5>
                                        </div>
                                        <div class="d-flex w-5 ">
                                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                    </div>
                                    <div class="modal-body">
                                        <table class="table table-borderless">
                                            <thead>
                                                <tr class="text-center table-primary">
                                                    <th>CUARTO AÑO</th>
                                                    <th>QUINTO AÑO</th>
                                                    <th>SEXTO AÑO</th>
                                                    <th>SEPTIMO AÑO</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="text-center table-light">
                                                    <th>Formacion General</th>
                                                    <th>Formacion General</th>
                                                    <th>Formacion General</th>
                                                    <th>Practicas Profesionalizantes</th>
                                                </tr>
                                                <tr class="text-white text-center">
                                                    <td>Literatura</td>
                                                    <td>Literatura</td>
                                                    <td>Literatura</td>
                                                    <td>Prácticas Profesionalizantes del Sector Industria de Procesos</td>
                                                </tr>
                                                <tr class="text-white text-center">
                                                    <td>Ingles</td>
                                                    <td>Ingles</td>
                                                    <td>Ingles</td>
                                                    <td></td>
                                                </tr>
                                                <tr class="text-white text-center">
                                                    <td>Educación Física</td>
                                                    <td>Educación Física</td>
                                                    <td>Educación Física</td>
                                                    <td></td>
                                                </tr>
                                                <tr class="text-white text-center">
                                                    <td>Salud y Adolescencia</td>
                                                    <td>Política y Ciudadanía</td>
                                                    <td>Filosofía</td>
                                                    <td></td>
                                                </tr>
                                                <tr class="text-white text-center">
                                                    <td>Historia</td>
                                                    <td>Historia</td>
                                                    <td>Arte</td>
                                                    <td></td>
                                                </tr>
                                                <tr class="text-white text-center">
                                                    <td>Geografía</td>
                                                    <td>Geografía</td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr class="text-center table-light">
                                                    <th>Formación Científico Tecnológico </th>
                                                    <th>Formación Científico Tecnológico </th>
                                                    <th>Formación Científico Tecnológico </th>
                                                    <th>Formación Científico Tecnológico </th>
                                                </tr>
                                                <tr class="text-white text-center">
                                                    <td>Matemática-Ciclo Superior </td>
                                                    <td>Análisis Matemático</td>
                                                    <td>Matemática Aplicada </td>
                                                    <td>Emprendimientos Productivos y Desarrollo Local</td>
                                                </tr>
                                                <tr class="text-white text-center">
                                                    <td>Quimica</td>
                                                    <td>Química Orgánica</td>
                                                    <td>Química Orgánica y Biológica</td>
                                                    <td>Química Industrial</td>
                                                </tr>
                                                <tr class="text-white text-center">
                                                    <td>Física</td>
                                                    <td>Química General e Inorgánica</td>
                                                    <td>Química Industrial</td>
                                                    <td>Química Analítica</td>
                                                </tr>
                                                <tr class="text-white text-center">
                                                    <td>Operaciones Unitarias y Tecnología de los Materiales </td>
                                                    <td>Procesos Químicos y Control</td>
                                                    <td>Química Analítica</td>
                                                    <td>Organización y Gestión Industrial</td>
                                                </tr>
                                                <tr class="text-white text-center">
                                                    <td>Introducción a la Biología Celular</td>
                                                    <td>Derechos del Trabajo</td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr class="text-center table-light">
                                                    <th>Formación Técnico Específica</td>
                                                    <th>Formación Técnico Específica</th>
                                                    <th>Formación Técnico Específica</th>
                                                    <th>Formación Técnico Específica</th>
                                                </tr>
                                                <tr class="text-white text-center">
                                                    <th>Laboratorio de Operaciones Unitarias y Tecnología de los Materiales </th>
                                                    <th>Laboratorio de Procesos Industriales</th>
                                                    <th>Laboratorio de Procesos Industriales</th>
                                                    <th>Laboratorio de Análisis Microbiológicos</th>
                                                </tr>
                                                <tr class="text-white text-center">
                                                    <td>Laboratorio de Ensayos Físicos</td>
                                                    <td>Laboratorio de Técnicas Analíticas</td>
                                                    <td>Laboratorio de Técnicas Analíticas</td>
                                                    <td>Laboratorio de Industrias</td>
                                                </tr>
                                                <tr class="text-white text-center">
                                                    <td>Laboratorio de Química </td>
                                                    <td>Laboratorio. de Química Orgánica</td>
                                                    <td>Laboratorio de Química Orgánica, Biológica y Microbiológica</td>
                                                    <td>Laboratorio de Técnicas Analíticas Instrumentales</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="modal-footer d-flex flex-column justify-content-start text-white">
                                        <div class="d-flex">
                                            <a style="text-decoration: none; color: white" href="http://servicios.abc.gov.ar/lainstitucion/organismos/eductecnicaprofesional/direcciones/normativas/documentos/resolucion/3828-09_anexo_3.pdf">
                                                <p>
                                                    Resolucion 3828/09 Anexo - 3
                                                </p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container mt-5" style="padding-top: 120px;">
                        <div class="text-center text-white container-fluid">
                            <div id="myCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2000">
                                <div class="carousel-indicators d-none">
                                    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
                                    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="4" aria-label="Slide 5"></button>
                                </div>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="../imagenes/quimica2.jpg" alt="" class="img-fluid" style="width:  900px;height: 600px;">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h5>Laboratorio de Quimica</h5>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="../imagenes/electro2.jpg" alt="" class="img-fluid" style="width:  900px;height: 600px;">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h5>Taller de Electromecanica</h5>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="../imagenes/automotores.jpg" alt="" class="img-fluid" style="width:  900px;height: 600px;">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h5>Taller de Automotores</h5>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="../imagenes/maestro.jpg" alt="" class="img-fluid" style="width:  900px;height: 600px;">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h5>Salon de M. Mayor de Obras</h5>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="../imagenes/informatica3.jpg" alt="" class="img-fluid" style="width:  900px;height: 600px;">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h5>Laboratorio de Informatica</h5>
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