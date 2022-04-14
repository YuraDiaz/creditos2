<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="assets/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="view/css/login.css">
    <title>Login</title>
</head>

<body class="color">
    <nav class="navbar navbar-expand-lg navbar-dark bg-danger dflex justify-content-between fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="images/logo4.png" class="logonav" alt=""><em>nileMisak</em></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link" href="view/quienesSomos">Nosotros</a>
                    <a class="nav-link text-center" href="view/login">Ingresar<i class="bi bi-person-circle"></i></a>
                </div>
            </div>
        </div>
    </nav>
    <div class="container mt-5 pt-5 ">
        <div class="card mt-5">
            <p class="card-header text-center fw-bold fs-1"><em>BIENVENIDOS nileMisak</em></p>
            <div class="card-body">
                <p class="card-text text-center">Para ver el contenido de nuestra pagina registrate o inicia seción.</p>
                <div class="text-center">
                    <a href="view/login.php" class="btn btn-primary fw-bold">Login</a>
                    <a href="view/registro.php" class="btn btn-primary fw-bold">Registrarce</a>
                </div>
            </div>
        </div>
    </div>

    <?php include("view/footer.php"); ?>
    <script src="assets/bootstrap/js/bootstrap.js"></script>
    <script src="view/js/login.js"></script>
</body>

</html>