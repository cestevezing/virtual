<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperar contraseña - 34 Congreso Fendipetroleo</title>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="public/css/aulavirtual.css">
    <link rel="shortcut icon" href="<?php echo constant('URL'); ?>public/icon/favicon.png">
    <style>
        .imagen-aqui {
            background-image: url('<?php echo constant('URL') ?>public/img/fondo-login.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            margin: 0px;
        }
    </style>
    <script type="text/javascript">
        function myFunction() {
            var x = document.getElementById("clave");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
    </script>
</head>

<body class="imagen-aqui">
    <?php require "views/Header/header.php"; ?>
    <div class="center-align">
        <div class="row">
            <div class="col m3">
                <a href="<?php echo constant('URL') ?>Fendipetroleo">
                    <img class="responsive-img" src="<?php echo constant('URL') ?>public/img/fendipetroleo.png" alt="">
                </a>
            </div>
            <div class="col m6">

            </div>
            <div class="col m3">
                <a href="<?php echo constant('URL') ?>Congreso">
                    <img class="responsive-img" src="<?php echo constant('URL') ?>public/img/congreso.png" alt="">
                </a>
            </div>
        </div>
        <div class="container">
            <h4 class="blue-text text-darken-4">RECUPERAR CONTRASEÑA</h4>
            <div class="row">
                <div class="col m2"></div>
                <div class="col m8">
                    <div class="row">
                        <div class="col m12 z-depth-3" style="background-color: rgba(255,255,255,0.9); border-radius: 20px;">
                            <div class="card">
                                <form class="col m12" action="<?php echo constant('URL'); ?>RecuperarUsuario/recuperar" method="POST">
                                    <div class="card-content" style="padding: 0px;">
                                        <div class="row">
                                            <div class="input-field col m12">
                                                <i class="material-icons prefix">markunread</i>
                                                <input id="correo" name="correo" type="email" class="validate">
                                                <label for="correo">Correo</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-action">
                                        <button style="border-radius: 20px;" class="btn waves-effect waves-light" type="submit" name="action">RECUPERAR <i class="material-icons right">send</i></button>
                                        <a style="border-radius: 20px;" href="<?php echo constant('URL') ?>Login" class="waves-effect waves-light btn red lighten-1">VOLVER <i class="material-icons right">close</i></a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php require "views/Footer/footer.php"; ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>

</html>