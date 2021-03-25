<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sala Nacional - 34 Congreso Fendipetroleo</title>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="public/css/aulavirtual.css">
    <link rel="shortcut icon" href="<?php echo constant('URL'); ?>public/icon/favicon.png">
</head>

<body>
    <?php require "views/Header/header.php"; ?>
    <style>
        .contenedorIn {
            position: fixed;
            display: inline-block;
            z-index: 4;
            bottom: 90px;
        }

        body {
            background-color: #332927;
        }

        .gofullscreen {
            position: fixed;
            display: inline-block;
            right: 10px;
            bottom: 90px;
            border-radius: 20px;
            z-index: 4;
        }

        .modal {
            width: 50% !important;
            right: auto !important;
        }
    </style>

    <div class="contenedorIn">
        <a class="waves-effect btn modal-trigger" style="border-radius: 20px;" href="#modal1">Agenda Nacional</a>
        <!-- Modal Structure -->
        <div id="modal1" class="modal modal-fixed-footer">
            <div class="modal-content">
                <iframe src="<?php echo constant('URL'); ?>public/documentos/Agenda-Nacional.pdf" width="100%" height="95%" frameborder="0"></iframe>
            </div>
            <div class="modal-footer">
                <a style="border-radius: 20px;" class="modal-close waves-effect btn">Cerrar</a>
            </div>
        </div>
    </div>

    <div class="gofullscreen">
        <button onclick="fullscreen()" class="btn" style="border-radius: 20px;" href="">Fullscreen</button>
    </div>
    <svg version="1.1" style="position:fixed; margin-top: -55px;" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1770 900" preserveAspectRatio="xMinYMin meet">
        <image width="100%" height="100%" xlink:href="<?php echo constant('URL'); ?>public/img/RENDER.jpg">
        </image>
        <g>
            <foreignObject x="640" y="362" width="550" height="258">
                <iframe id="iframe1" width="550" height="258" src="<?php if ($_SESSION['idConferencia'] > 0) {
                                                            echo $this->conferencia->url;
                                                        } else {
                                                            echo 'https://www.youtube.com/embed/UxvacZkiMTk';
                                                        } ?>?autoplay=1&loop=1" frameborder="0" allow="autoplay; fullscreen">
                </iframe>
            </foreignObject>
        </g>

        <g>
            <a xlink:href="#">
                <image class="" x="359" y="350" width="180" height="149" xlink:href="<?php echo constant('URL') . $this->publicidadB[0]->imagen; ?>">

                </image>
            </a>
        </g>
        <g>
            <a xlink:href="#">
                <image class="" x="359" y="500" width="180" height="149" xlink:href="<?php echo constant('URL') . $this->publicidadB[1]->imagen; ?>">

                </image>
            </a>
        </g>
        <g>
            <a xlink:href="#">
                <image class="" x="1284" y="350" width="180" height="149" xlink:href="<?php echo constant('URL') . $this->publicidadB[2]->imagen; ?>">
                </image>
            </a>
        </g>
        <g>
            <a xlink:href="#">
                <image class="" x="1284" y="500" width="180" height="149" xlink:href="<?php echo constant('URL') . $this->publicidadB[3]->imagen; ?>">
                </image>
            </a>
        </g>

    </svg>
    <?php require "views/Footer/footer.php"; ?>
    <script>
        var iframe = document.querySelector('#iframe1');

        function fullscreen() {
            if (iframe.requestFullscreen) {
                iframe.requestFullscreen();
            } else if (iframe.webkitRequestFullscreen) {
                iframe.webkitRequestFullscreen();
            } else if (iframe.mozRequestFullScreen) {
                iframe.mozRequestFullScreen();
            } else if (iframe.msRequestFullscreen) {
                iframe.msRequestFullscreen();
            }
        }
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>

</html>