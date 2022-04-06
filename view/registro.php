<!DOCTYPE html>
<html lang="es">

<head>
    <?php include_once("head.php"); ?>

    <title>Registro</title>
</head>

<body>
    <?php include_once("topbar1.php"); ?>
    <div class="container-fluid position-absolute h-100 my-5 py-5">
        <div class="card w-75 mx-auto mb-5 pb-5">
            <div class="card-header text-center">FORMULARIO DE REGISTRO</div>
            <div class="card-body mb-5 ">
                <form id="registrar" class="row">
                    <div class="mb-3 col-12">
                        <label for="identificacion" class="form-label">Identificacion</label>
                        <input type="text" class="form-control" id="identificacion" name="identificacion">

                    </div>
                    <div class="mb-3 col-sm-12 col-md-6">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="nombre" name="nombre">

                    </div>
                    <div class="mb-3 col-sm-12 col-md-6">
                        <label for="apellido" class="form-label">Apellido</label>
                        <input type="text" class="form-control" id="apellido" name="apellido">

                    </div>
                    <div class="mb-3 col-sm-12 col-md-6">
                        <label for="direccion" class="form-label">Dirección</label>
                        <input type="text" class="form-control" id="direccion" name="direccion">

                    </div>
                    <div class="mb-3 col-sm-12 col-md-6">
                        <label for="ciudad" class="form-label">Ciudad</label>
                        <input type="text" class="form-control" id="ciudad" name="ciudad">

                    </div>
                    <div class="mb-3 col-12">
                        <label for="correo" class="form-label">Correo Electronico</label>
                        <input type="email" class="form-control" id="correo" name="correo">

                    </div>
                    <div class="mb-3 col-sm-12 col-md-6">
                        <label for="pass" class="form-label">Contraseña</label>
                        <input type="password" class="form-control" id="pass" name="pass">
                    </div>
                    <div class="mb-3 col-sm-12 col-md-6">
                        <label for="pass2" class="form-label">Repetir Contraseña</label>
                        <input type="password" class="form-control" id="pass2" name="pass2">
                    </div>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert" id="alerta">
                        Las contraseñas no coinciden
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <div class="text-center">
                        <input type="submit" name="enviar" id="enviar" value="Ingresar" class="form-control btn-primary">
                    </div>

                </form>


            </div>
        </div>
    </div>

    <?php include("footer.php"); ?>
    <script src="../assets/bootstrap/js/bootstrap.js"></script>
    <script src="js/registro.js"></script>
</body>

</html>