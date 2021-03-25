<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>34 Congreso Fendipetroleo</title>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="<?php echo constant('URL') ?>public/css/aulavirtual.css">
    <link rel="shortcut icon" href="https://congresofendipetroleo.com/congreso2019/img/Fevicon.png">
    <style>
        .imagen-aqui {
            background-image: url('<?php echo constant('URL') ?>public/img/fondo.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            margin: 0px;
        }
    </style>
</head>

<body class="imagen-aqui">
    <div class="center-align" style="height: 100%;">
        <div class="row">
            <div class="col m4">
                <!--<img style="width: 400px;" src="<?php echo constant('URL') ?>public/img/fendipetroleo.png" alt="">-->
            </div>
            <div class="col m4">

            </div>
            <div class="col m4">
                <!--img style="width: 400px;" src="<?php echo constant('URL') ?>public/img/congreso.png" alt="">-->
            </div>
        </div>
        <div class="row" style="height: 50%;">
            <div class="col m12" style="padding-top: 7%; padding-bottom: 2%;">
                <img src="<?php echo constant('URL') ?>public/img/congreso.png" style="width: 55%;" class="responsive-img" alt="">

            </div>
            <div class="col m4">

            </div>
            <div class="col m4">
                <a style="border-radius: 20px; padding-right: 40px;padding-left: 40px;" href="<?php echo constant('URL') ?>Panorama" class="waves-effect waves-light btn pulse">Ingresar</a>
            </div>
            <div class="col m4">

            </div>
        </div>
        <div class="row" style="height: 25%; padding-top: 3%;">
            <div class="col m5">
            </div>
            <div class="col m2">
                <div class="row">
                    <div class="col m3">
                        <a href="https://www.facebook.com/aulatoday.elearning">
                            <img src="<?php echo constant('URL'); ?>public/icon/facebook.png" width="20px" style="margin: 2px;" alt="F">
                        </a></div>
                    <div class="col m3">
                        <a href="https://www.instagram.com/aulatoday/">
                            <img src="<?php echo constant('URL'); ?>public/icon/instagram.png" width="20x" style="margin: 2px;" alt="F">
                        </a>
                    </div>
                    <div class="col m3">
                        <a href="https://twitter.com">
                            <img src="<?php echo constant('URL'); ?>public/icon/twitter.png" width="20px" style="margin: 2px;" alt="F">
                        </a>
                    </div>
                    <div class="col m3">
                        <a href="https://www.youtube.com/channel/UCl_DFAOH6VuYZnlsenYzzNw">
                            <img src="<?php echo constant('URL'); ?>public/icon/youtube.png" width="20px" style="margin: 2px;" alt="F">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col m5">

            </div>
        </div>
    </div>
    <?php require "views/Footer/footer.php"; ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>

</html>