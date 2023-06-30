<header class="p-3 bg-dark text-white">
    <div class="container">
        <ul class="nav col-12">
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
    </div>
</header>