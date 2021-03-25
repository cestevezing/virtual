<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="public/css/aulavirtual.css">
    <link rel="shortcut icon" href="https://congresofendipetroleo.com/congreso2019/img/Fevicon.png">
</head>

<body>
    <style>
        .footer {
            position: fixed;
            z-index: 10;
            bottom: 0px;
            height: 25px;
            width: 100%;
            text-align: center;
            padding: 0px;
            margin: 0px;
        }

        .footer-text {
            margin: 0px;
            margin-top: 2px;
            padding: 0px;
            font-size: 15px;
            font-weight: bold;
        }

        @media (orientation: portrait) {
            .footer-text {
                font-size: 6px;
            }
        }

        @media (orientation: landscape) and (max-width: 850px) {
            .footer-text {
                font-size: 10px;
            }
        }

        @media (orientation: portrait) and (min-width: 1000px) and (max-width: 1367px) {
            .footer-text {
                font-size: 12px;
            }
        }
    </style>
    <footer class="page-footer footer grey darken-3" style="padding-top: 0px !important;">
        <div class="row">
            <div class="col m3">

            </div>
            <div class="col m5">
                34 Congreso Fendipetroleo | Santafé de Bogotá D.C. 2020 | Todos los derechos reservados.
            </div>
            <div class="col m4">
                <div class="row">
                    <div class="col m3">
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
                </div>
            </div>

        </div>
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            M.AutoInit();
        });
    </script>
</body>

</html>