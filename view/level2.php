<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once("head.php"); ?>

    <title>Nivel 2</title>
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
                    <div class="card-header">Colores Basicos</div>
                    <table class="table mx-auto">
                        <thead>
                            <tr>
                                <th>Guambiano:</th>
                                <th>Español:</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Pul&theta;</td>
                                <td>Blanco</td>
                            </tr>
                            <tr>
                                <td>Yal&theta;</td>
                                <td>Negro</td>
                            </tr>
                            <tr>
                                <td>Pik&theta;</td>
                                <td>Rojo</td>
                            </tr>
                            <tr>
                                <td>Pilli</td>
                                <td>Azul</td>
                            </tr>
                            <tr>
                                <td>&Theta;sc&theta;</td>
                                <td>Amarillo</td>
                            </tr>
                            <tr>
                                <td>Chilka</td>
                                <td>Verde</td>
                            </tr>

                        </tbody>
                    </table>
                </div>

            </div>
            <div class="tab-pane fade" id="p1-tab-pane" role="tabpanel" aria-labelledby="p1-tab" tabindex="0">
                <div class="card w-50 mx-auto mt-3">
                    <div class="mb-5">Como se escribe <strong>AMARILLO</strong> en lengua Guambiana?</div>
                    <button class="btn btn-success mb-3" onclick="segundoNivel(1, this);" value="pulo">Pul&theta;</button>
                    <button class="btn btn-primary mb-3" onclick="segundoNivel(1, this);" value="piko">Pik&theta;</button>
                    <button class="btn btn-secondary mb-3" onclick="segundoNivel(1, this);" value="osco">&Theta;sc&theta;</button>
                    <button class="btn btn-info mb-3" onclick="segundoNivel(1, this);" value="pilli">Pilli</button>

                </div>
            </div>
            <div class="tab-pane fade" id="p2-tab-pane" role="tabpanel" aria-labelledby="p2-tab" tabindex="0">
                <div class="card w-50 mx-auto mt-3">
                    <div class="mb-5">Como se escribe <strong>ROJO</strong> en lengua Guambiana?</div>
                    <button class="btn btn-success mb-3" onclick="segundoNivel(2, this);" value="pulo">Pul&theta;</button>
                    <button class="btn btn-primary mb-3" onclick="segundoNivel(2, this);" value="piko">Pik&theta;</button>
                    <button class="btn btn-secondary mb-3" onclick="segundoNivel(2, this);" value="osco">&Theta;sc&theta;</button>
                    <button class="btn btn-info mb-3" onclick="segundoNivel(2, this);" value="pilli">Pilli</button>

                </div>
            </div>
            <div class="tab-pane fade" id="p3-tab-pane" role="tabpanel" aria-labelledby="p3-tab" tabindex="0">
                <div class="card w-50 mx-auto mt-3">
                    <div class="mb-5">Como se escribe <strong>NEGRO</strong> en lengua Guambiana?</div>
                    <button class="btn btn-success mb-3" onclick="segundoNivel(3, this);" value="pulo">Pul&theta;</button>
                    <button class="btn btn-primary mb-3" onclick="segundoNivel(3, this);" value="piko">Pik&theta;</button>
                    <button class="btn btn-secondary mb-3" onclick="segundoNivel(3, this);" value="osco">&Theta;sc&theta;</button>
                    <button class="btn btn-info mb-3" onclick="segundoNivel(3, this);" value="yalo">Yal&theta;</button>

                </div>
            </div>
        </div>

    </div>


    <?php include("footer.php"); ?>

    <script src="../assets/bootstrap/js/bootstrap.js"></script>
    <script src="js/niveles.js"></script>
</body>

</html>