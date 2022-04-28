<!DOCTYPE html>
<html lang="es">

<head>
    <?php include_once("head.php"); ?>

    <title>Mi Perfil</title>
</head>

<body>
    <?php include_once("topbar2.php"); ?>


    <div class="container-fluid position-absolute h-100 d-flex align-items-center ">
        <div class="w-100 text-center">
            <img src="../images/icono.png" id="icono_user" class="mb-3">
            <div class="container row">
                <form id="form_user" class="col-10">
                    <input type="hidden" name="id" id="id">
                    <div class="row mb-3">
                        <div class="col-3">
                            <label for="identificacion" class="form-label">Identificacion:</label>
                        </div>
                        <div class="col-9">
                            <input type="text" name="identificacion" id="identificacion" class="form-control" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-3">
                            <label for="nombres" class="form-label">Nombres:</label>
                        </div>
                        <div class="col-9">
                            <input type="text" name="nombres" id="nombres" class="form-control" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-3">
                            <label for="apellidos" class="form-label">Apellidos:</label>
                        </div>
                        <div class="col-9">
                            <input type="text" name="apellidos" id="apellidos" class="form-control" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-3">
                            <label for="direccion" class="form-label">Dirección:</label>
                        </div>
                        <div class="col-9">
                            <input type="text" name="direccion" id="direccion" class="form-control" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-3">
                            <label for="ciudad" class="form-label">Ciudad:</label>
                        </div>
                        <div class="col-9">
                            <input type="text" name="ciudad" id="ciudad" class="form-control" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-3">
                            <label for="correo" class="form-label">Correo Electronico:</label>
                        </div>
                        <div class="col-9">
                            <input type="text" name="correo" id="correo" class="form-control" required>
                        </div>
                    </div>
                </form>
                <div class="col-2">
                    <div>
                        <button class="btn btn-primary w-100 mb-3" onclick="habilitarForm();" id="btneditar">Editar</button>
                        <button class="btn btn-primary w-100 mb-3" data-bs-toggle="modal" data-bs-target="#modalPass">Cambiar Contraseña</button>
                        <button class="btn btn-secondary w-100 mb-3" onclick="deshabilitarForm();" id="btncancelar">Cancelar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="modalPass" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Cambiar Contraseña</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form onsubmit="cambiarPass(event, this);">
                        <input type="hidden" name="idPass" id="idPass">
                        <div class="mb-3">
                            <label for="pass" class="form-label">Contraseña:</label>
                            <div class="input-group mb-3">
                                <input type="password" class="form-control" placeholder="Contraseña Anterior" aria-label="Contraseña" aria-describedby="pass1" name="pass" id="pass" minlength="4" required>
                                <span class="input-group-text" id="pass1"><i class="bi bi-key-fill"></i></span>

                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="contrasenia" class="form-label">Contraseña:</label>
                            <div class="input-group mb-3">
                                <input type="password" class="form-control" placeholder="Nueva Contraseña" aria-label="Contraseña" aria-describedby="pass1" name="contrasenia" id="contrasenia" minlength="4" required>
                                <span class="input-group-text" id="pass1"><i class="bi bi-key-fill"></i></span>

                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="contraseniarep" class="form-label">Repetir Contraseña:</label>
                            <div class="input-group mb-3">
                                <input type="password" class="form-control" placeholder="Repetir contraseña" aria-label="Repetir Contraseña" aria-describedby="pass2" name="contraseniarep" id="contraseniarep" onkeyup="compararPass();" required>
                                <span class="input-group-text" id="pass2"><i class="bi bi-key-fill"></i></span>
                            </div>
                        </div>
                        <div class="alert alert-danger alert-dismissible fade show" id="alertaPass" role="alert">

                            <div>
                                Las contraseñas no coinciden !!
                            </div>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>

                        <input type="submit" id="envFormPass" value="Cambiar Contraseña" class="btn btn-primary">
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>

                </div>
            </div>
        </div>
    </div>


    <?php include("footer.php"); ?>
    <script src="../assets/bootstrap/js/bootstrap.js"></script>
    <script src="js/perfil.js"></script>
</body>

</html>