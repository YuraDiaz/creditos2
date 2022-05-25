<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once("head.php"); ?>

    <title>Nivel 2</title>
</head>

<body>
    <?php include_once("topbar2.php"); ?>

    <div class="container-fluid px-5  position-absolute h-100 d-flex align-items-center">
        <div class="card" style="width: 18rem;">
            <img src="../images/pronomb_personales.jpg" class="card-img-top" alt="pronombres personales">
            <div class="card-body">
                <h5 class="card-title">PRONOMBRES PERSONALES</h5>
                <p class="card-text">Aprende los pronombres personales en lenguaje Guambiano</p>
                <a href="level1" class="btn btn-primary">Aprender</a>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="../images/colores.png" class="card-img-top" alt="pronombres personales">
            <div class="card-body">
                <h5 class="card-title">COLORES</h5>
                <p class="card-text">Aprende algunos colores basicos</p>
                <a href="level2" class="btn btn-primary">Aprender</a>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="../images/cara.png" class="card-img-top" alt="pronombres personales">
            <div class="card-body">
                <h5 class="card-title">PARTES DE LA CARA</h5>
                <p class="card-text">Aprende como se escribe algunas partes de la cara en lenguaje Guambiano</p>
                <a href="level3" class="btn btn-primary">Aprender</a>
            </div>
        </div>
    </div>




    <?php include("footer.php"); ?>

    <script src="../assets/bootstrap/js/bootstrap.js"></script>
    <script src="js/niveles.js"></script>
</body>

</html>