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

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-danger dflex justify-content-between fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="images/logo4.png" class="logonav" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link" href="view/quienesSomos">Nosotros</a>
                    <a class="nav-link" href="view/comunidades">Comunidades</a>
                    <a class="nav-link" href="view/noticias">Noticias</a>

                </div>
            </div>
        </div>
    </nav>
    <div class="container-fluid p-0 ">
        <img src="images/imglogin2.jpg" class="imagenlogin d-none d-md-block " alt="img login">

        <div class="position-absolute h-100 w-100 d-flex justify-content-end p-5 align-items-center">
            <div class="card" id="ordenar">
                <div class="card-header text-center">
                    Iniciar Sesion
                </div>
                <div class="card-body ">
                    <form id="login">
                        <div class="mb-3">
                            <label for="correo" class="form-label">Correo Electronico</label>
                            <input type="email" class="form-control" id="correo" name="correo">

                        </div>
                        <div class="mb-3">
                            <label for="pass" class="form-label">Contraseña</label>
                            <input type="password" class="form-control" id="pass" name="pass">
                        </div>
                        <div class="text-center">
                            <input type="submit" name="enviar" id="enviar" value="Ingresar" class="form-control btn-primary">
                        </div>

                    </form>
                    <div class="mt-3 text-center">
                        Si no tienes cuenta. <a href="view/registro">Registrate</a>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <?php include("view/footer.php"); ?>
    <script src="assets/bootstrap/js/bootstrap.js"></script>
    <script src="view/js/login.js"></script>
</body>

</html>