<!doctype html>
<html lang="es">

<head>
  <!-- hero resources -->
  <link rel="stylesheet" href="Css/hero/hero.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/lodash.js/3.10.1/lodash.min.js"></script>
  <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
  <script src="Javascript/hero/hero.js"></script>

  <!-- index css -->
  <link rel="stylesheet" href="Css/index/index.css">

  <?php include("Templates/head.php") ?>
</head>

<body>

  <header>
    <nav class="d-flex flex-column justify-content-center mt-4 navbar navbar-expand-lg fixed-top">
      <div class="d-flex justify-content-center ">
        <div class="d-flex " style="height: 67px;">
          <a href="index.php">
            <img class="img-fluid justify-content-start" src="Imagenes/Logo escuela/logo.png" alt="Logo" style="width: 55px; height: 57;">
          </a>
        </div>
      </div>
    </nav>
  </header>
  
  <div class="content">
    <section class="background">
      <div class="content-wrapper">
        <p class="content-title h1 m-1">Bienvenido a la Escuela Tecnica Nº2</p>
        <p class="content-subtitle h1 m-4"> de Tandil</p>
        <div class="scrolldown">
          <span></span>
          <span></span>
        </div>
      </div>
    </section>
    <section class="background">
      <div class="content-wrapper">
        <p class="content-title h1 m-1">Veni y proyecta tu futuro con nosotros</p>
        <p class="content-subtitle h1 m-4"></p>
        <div class="scrolldown">
          <span></span>
          <span></span>
        </div>
      </div>
    </section>
    <section class="background">
      <div class="content-wrapper d-flex flex-column justify-content-center">
        <p class="content-title h1 m-1">¿Queres informarte mas sobre la institucion?</p>
        <p><a href="historia.php" style="text-decoration:none;"><button class="button-index w-25 fs-6" role="button"><span class="text">Saber mas</span></button></a></p>
      </div>
    </section>
  </div>

  <footer class="text-center fixed-bottom">

    <hr class="border border-1 border-light m-5 mt-auto mb-auto">
    <nav class="navbar navbar-expand">
      <div class="container-fluid d-flex flex-row justify-content-center">
        <div>
          <ul class="navbar-nav ">
            <li class="nav-item box">
              <a class=" nav-link  fs-5" href="PHP Ciclos, inscripcion, matriculacion/index.php">
                <p class="itemp">Inicio</p>
              </a>
            </li>
            <li class="nav-item box">
              <a class="nav-link  fs-5" href="PHP Ciclos, inscripcion, matriculacion/historia.php">
                <p class="itemp">Historia y actualidad</p>
              </a>
            </li>
            <li class="nav-item box">
              <a class="nav-link  fs-5" href="PHP Ciclos, inscripcion, matriculacion/ciclobasico.php">
                <p class="itemp">Ciclo basico</p>
              </a>
            </li>
            <li class="nav-item box">
              <a class="nav-link  fs-5" href="PHP Ciclos, inscripcion, matriculacion/ciclosuperior.php">
                <p class="itemp">Ciclo superior</p>
              </a>
            </li>
            <li class="nav-item box dropup">
              <div>
                <a class="nav-link fs-5 dropbtn">
                  <p class="itemp">Tramites</p>
                </a>
                <div class="dropup-content">
                  <a href="PHP Ciclos, inscripcion, matriculacion/inscripcion.php" style="color: #ffffff" class="itemp box">Inscripción</a>
                  <a href="PHP Ciclos, inscripcion, matriculacion/matriculacion.php" style="color: #ffffff" class="itemp box">Matriculación</a>
                  <a href="PHP Ciclos, inscripcion, matriculacion/ingresantes.php" style="color: #ffffff" class="itemp box">Ingresantes</a>
                </div>
              </div>
            </li>
          </ul>
        </div>
     
      </div>

    </nav>
  </footer>

</body>

</html>