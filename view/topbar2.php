<nav class="navbar navbar-expand-lg navbar-dark bg-danger dflex justify-content-between fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"><img src="../images/logo4.png" class="logonav" alt=""><em>nileMisak</em></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="quienesSomos2">Nosotros</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="juegos">JuegosMisak</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="informacion"> Información</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-person-circle"></i> <?php echo ($_SESSION["usuario_name"]); ?>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="perfil"><i class="bi bi-person"></i> Mi perfil</a></li>
                        <li onclick="closeSession();"><a class="dropdown-item"><i class="bi bi-arrow-bar-right"></i> Cerrar Sesion</a></li>

                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>