<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeria - 34 Congreso Fendipetroleo</title>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="public/css/aulavirtual.css">
    <link rel="shortcut icon" href="<?php echo constant('URL'); ?>public/icon/favicon.png">
</head>

<body>
    <?php require "views/Header/header.php"; ?>

    <div class="container">
        <h2 class="center-align">GALERÍA DE IMÁGENES</h2>
        <hr />
        <div style="width: 100%;" class="carousel center-align">
            <a style="width: 500px;" class="carousel-item" href=""><img src="<?php echo constant('URL'); ?>public/congreso/DSC_0684-min.jpg"></a>
            <a style="width: 500px;" class="carousel-item" href=""><img src="<?php echo constant('URL'); ?>public/congreso/DSC_0756-min.jpg"></a>
            <a style="width: 500px;" class="carousel-item" href=""><img src="<?php echo constant('URL'); ?>public/congreso/DSC_0801-min.jpg"></a>
            <a style="width: 500px;" class="carousel-item" href=""><img src="<?php echo constant('URL'); ?>public/congreso/DSC_0818-min.jpg"></a>
            <a style="width: 500px;" class="carousel-item" href=""><img src="<?php echo constant('URL'); ?>public/congreso/DSC_0888-min.jpg"></a>
            <a style="width: 500px;" class="carousel-item" href=""><img src="<?php echo constant('URL'); ?>public/congreso/DSC_0908-min.jpg"></a>
            <a style="width: 500px;" class="carousel-item" href=""><img src="<?php echo constant('URL'); ?>public/congreso/DSC_0912-min.jpg"></a>
            <a style="width: 500px;" class="carousel-item" href=""><img src="<?php echo constant('URL'); ?>public/congreso/DSC_0951-min.jpg"></a>
            <a style="width: 500px;" class="carousel-item" href=""><img src="<?php echo constant('URL'); ?>public/congreso/DSC_0993-min.jpg"></a>
            <a style="width: 500px;" class="carousel-item" href=""><img src="<?php echo constant('URL'); ?>public/congreso/DSC_1026-min.jpg"></a>
        </div>
    </div>
    <?php require "views/Footer/footer.php"; ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>

</html>