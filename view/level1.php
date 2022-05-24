<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once("head.php"); ?>

    <title>Nivel 1</title>
</head>

<body>
    <?php include_once("topbar2.php"); ?>

    <div class="container-fluid  position-absolute h-100 mt-5 pt-5  ">

        <!-- pestañas de control del contenido -->
        <div class="text-center">
            <ul class="nav nav-tabs mt-5 " id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="informacion-tab" data-bs-toggle="tab" data-bs-target="#informacion-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Información</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="p1-tab" data-bs-toggle="tab" data-bs-target="#p1-tab-pane" type="button" role="tab" aria-controls="p1-tab-pane" aria-selected="false">Pregunta 1</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="p2-tab" data-bs-toggle="tab" data-bs-target="#p2-tab-pane" type="button" role="tab" aria-controls="p2-tab-pane" aria-selected="false">Pregunta 2</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="p3-tab" data-bs-toggle="tab" data-bs-target="#p3-tab-pane" type="button" role="tab" aria-controls="p3-tab-pane" aria-selected="false">Pregunta 3</button>
                </li>
            </ul>
        </div>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="informacion-tab-pane" role="tabpanel" aria-labelledby="informacion-tab" tabindex="0">
                <div class="card mx-auto w-50">
                    <div class="card-header">Pronombres Personales</div>
                    <table class="table mx-auto">
                        <thead>
                            <tr>
                                <th>Guambiano:</th>
                                <th>Español:</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>na</td>
                                <td>Yo</td>
                            </tr>
                            <tr>
                                <td>ñi</td>
                                <td>Tu o Usted</td>
                            </tr>
                            <tr>
                                <td>n&theta;</td>
                                <td>El - Ella</td>
                            </tr>
                            <tr>
                                <td>nam</td>
                                <td>Nosotros</td>
                            </tr>
                            <tr>
                                <td>Ñim</td>
                                <td>Ustedes</td>
                            </tr>
                            <tr>
                                <td>n&theta;m</td>
                                <td>Ellos - Ellas</td>
                            </tr>

                        </tbody>
                    </table>
                </div>

            </div>
            <div class="tab-pane fade" id="p1-tab-pane" role="tabpanel" aria-labelledby="p1-tab" tabindex="0">
                <div class="card w-50 mx-auto mt-3">
                    <div class="mb-5">Como se escribe <strong>USTEDES</strong> en lengua Guambiana?</div>
                    <button class="btn btn-success mb-3" onclick="enviar(1, this);" value="n&theta;">n&theta;</button>
                    <button class="btn btn-primary mb-3" onclick="enviar(1, this);" value="Ñim">Ñim</button>
                    <button class="btn btn-secondary mb-3" onclick="enviar(1, this);" value="ñi">ñi</button>
                    <button class="btn btn-info mb-3" onclick="enviar(1, this);" value="nam">nam</button>

                </div>
            </div>
            <div class="tab-pane fade" id="p2-tab-pane" role="tabpanel" aria-labelledby="p2-tab" tabindex="0">
                <div class="card w-50 mx-auto mt-3">
                    <div class="mb-5">Como se escribe <strong>YO</strong> en lengua Guambiana?</div>
                    <button class="btn btn-success mb-3" onclick="enviar(2, this);" value="n&theta;">n&theta;</button>
                    <button class="btn btn-primary mb-3" onclick="enviar(2, this);" value="Ñim">Ñim</button>
                    <button class="btn btn-secondary mb-3" onclick="enviar(2, this);" value="ñi">ñi</button>
                    <button class="btn btn-info mb-3" onclick="enviar(2, this);" value="na">na</button>

                </div>
            </div>
            <div class="tab-pane fade" id="p3-tab-pane" role="tabpanel" aria-labelledby="p3-tab" tabindex="0">
                <div class="card w-50 mx-auto mt-3">
                    <div class="mb-5">Como se escribe <strong>ELLOS</strong> en lengua Guambiana?</div>
                    <button class="btn btn-success mb-3" onclick="enviar(3, this);" value="nom">n&theta;m</button>
                    <button class="btn btn-primary mb-3" onclick="enviar(3, this);" value="Ñim">Ñim</button>
                    <button class="btn btn-secondary mb-3" onclick="enviar(3, this);" value="ñi">ñi</button>
                    <button class="btn btn-info mb-3" onclick="enviar(3, this);" value="nam">nam</button>

                </div>
            </div>
        </div>

    </div>


    <?php include("footer.php"); ?>

    <script src="../assets/bootstrap/js/bootstrap.js"></script>
    <script src="js/niveles.js"></script>
</body>

</html>