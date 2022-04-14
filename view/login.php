<!DOCTYPE html>
<html lang="es">

<head>
    <?php include_once("head.php"); ?>

    <title>Inicio</title>
</head>

<body>
    <?php include_once("topbar1_1.php"); ?>
    <div class="container-fluid p-0 ">
        <img src="../images/imglogin2.jpg" class="imagenlogin d-none d-md-block " alt="img login">

        <div class="position-absolute h-100 w-100 d-flex justify-content-end p-5 align-items-center">
            <div class="card" id="ordenar">
                <div class="card-header text-center">
                    Iniciar Sesion
                </div>
                <div class="card-body ">
                    <form id="login">
                        <label for="correo" class="form-label">Correo Electronico</label>
                        <div class="mb-3 input-group">
                            <span class="input-group-text" id="basic-addon1">@</span>
                            <input type="email" class="form-control" id="correo" name="correo" aria-describedby="basic-addon1">
                        </div>

                        <label for="pass" class="form-label">Contraseña</label>
                        <div class="mb-3 input-group">
                            <span class="input-group-text" id="basic-addon2"><i class="bi bi-lock"></i></span>

                            <input type="password" class="form-control" id="pass" name="pass" aria-describedby="basic-addon2">
                        </div>
                        <div class="text-center">
                            <input type="submit" name="enviar" id="enviar" value="Ingresar" class="form-control btn-primary">
                        </div>

                    </form>
                    <div class="mt-3 text-center">
                        Si no tienes cuenta. <a href="registro">Registrate</a>
                    </div>

                </div>
            </div>
        </div>
    </div>


    <?php include("footer.php"); ?>
    <script src="../assets/bootstrap/js/bootstrap.js"></script>
    <script src="js/login.js"></script>
</body>

</html>