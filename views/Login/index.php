<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio Sesión - 34 Congreso Fendipetroleo</title>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="public/css/aulavirtual.css">
    <link rel="shortcut icon" href="<?php echo constant('URL'); ?>public/icon/favicon.png">
    <style>
        .imagen-aqui {
            background-image: url('<?php echo constant('URL') ?>public/img/cortinilla.png');
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

<body class="">
    <?php require "views/Header/header.php"; ?>
    <div class="center-align">
        <div class="row">
            <div class="col m8" style="padding: 0px;">
                <img class="responsive-img" src="<?php echo constant('URL'); ?>public/img/cortinilla.png" style="height: 85vh;width: 900px;margin-left: -20px;">
            </div>
            <div class=" col m4" style="padding-top: 100px;">
                <div class="col m12 z-depth-3" style="background-color: rgba(255,255,255,0.9); border-radius: 20px;">
                    <div class="card">
                        <form class="col " action="<?php echo constant('URL'); ?>Login/login" method="POST">
                            <div class="card-content" style="padding: 0px;">
                                <div class="row">
                                    <div class="input-field col m12">
                                        <i class="material-icons prefix">markunread</i>
                                        <input id="correo" name="correo" type="email" class="validate">
                                        <label for="correo">Correo</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col m12">
                                        <i class="material-icons prefix">visibility</i>
                                        <input id="clave" name="clave" type="password" class="validate">
                                        <label for="clave">Contraseña</label>
                                    </div>
                                    <div class="col m6">
                                        <label>
                                            <input type="checkbox" class="filled-in" onclick="myFunction()" />
                                            <span>Mostrar contraseña</span>
                                        </label>
                                    </div>
                                    <div class="col m6">
                                        <a href="<?php echo constant('URL'); ?>RecuperarUsuario">¿Olvidó su contraseña?</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-action">
                                <button style="border-radius: 20px;" class="btn waves-effect waves-light" type="submit" name="action">INGRESAR <i class="material-icons right">send</i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php require "views/Footer/footer.php"; ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>

</html>