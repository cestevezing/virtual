<?php
$mensaje = "";
if (isset($_SESSION['idUsuario']) && isset($_SESSION['nombres']) && $_SESSION['rol'] == 1) {
    $nom = $_SESSION['nombres'];
    $lista = explode(' ', $nom);
    $mensaje = $lista[0];
}
?>

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
    <style>
        .main-nav {
            z-index: 200;
            width: 100%;
            left: 0;
            top: 0;
            position: sticky;
        }
    </style>
</head>

<body>
    <nav class="grey darken-3 main-nav" style="z-index: 10; padding-left: 10px;padding-right: 10px;">
        <div class="nav-wrapper">
            <a style="padding-left: 10px;padding-top: 5px;" href="" class="brand-logo">
                <img class="responsive-img" style="padding-bottom: 5px;" width="200" src="<?php echo constant('URL') ?>public/img/congreso.png" alt="">
            </a>
            <a href="" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="<?php echo constant('URL') ?>Panorama">Recorrido virtual</a></li>
                <li><a href="<?php echo constant('URL') ?>Nacional/inicio">Sala Nacional</a></li>
                <li><a href="<?php echo constant('URL') ?>Internacional/inicio">Sala Internacional</a></li>
                <li><a href="<?php echo constant('URL') ?>Galeria">Galería de fotos</a></li>
                <?php
                if ($mensaje == "") {
                    echo "
                        <a class='dropdown-trigger btn-small' href='#' data-target='dropdown1'>Ingresa</a>
                            <ul id='dropdown1' style='margin-top: 20px;' class='dropdown-content'>
                            <li><a href=" . constant('URL') . "Login>Login</a></li>
                            <li class='divider' tabindex='-1'></li>
                        </ul>                        
                        ";
                } else {
                    echo "
                    <a class='dropdown-trigger btn-small' href='#' data-target='dropdown1'>" . $mensaje . "</a>
                    <ul id='dropdown1' style='margin-top: 20px;' class='dropdown-content'>
                        <li><a href=" . constant('URL') . "Perfil>Perfil</a></li>
                        <li class='divider' tabindex='-1'></li>
                        <li><a href=" . constant('URL') . "Inicio/cerrarSesion>Cerrar</a></li>
                    </ul>
                        ";
                }
                ?>

            </ul>
        </div>
    </nav>
    <ul class="sidenav" id="mobile-demo">
        <li><a href="<?php echo constant('URL') ?>Panorama">Recorrido virtual</a></li>
        <li><a href="<?php echo constant('URL') ?>Nacional/inicio">Sala Nacional</a></li>
        <li><a href="<?php echo constant('URL') ?>Internacional/inicio">Sala Internacional</a></li>
        <li><a href="<?php echo constant('URL') ?>Galeria">Galería de fotos</a></li>
        <?php
        if ($mensaje == "") {
            echo "
                        <a class='dropdown-trigger btn-small' href='#' data-target='dropdown2'>Ingresa</a>
                            <ul id='dropdown2' style='margin-top: 20px;' class='dropdown-content'>
                            <li><a href=" . constant('URL') . "Login>Login</a></li>
                            <li class='divider' tabindex='-1'></li>
                        </ul>                        
                        ";
        } else {
            echo "
                    <a class='dropdown-trigger btn-small' href='#' data-target='dropdown2'>" . $mensaje . "</a>
                    <ul id='dropdown2' style='margin-top: 20px;' class='dropdown-content'>
                        <li><a href=" . constant('URL') . "Perfil>Perfil</a></li>
                        <li class='divider' tabindex='-1'></li>
                        <li><a href=" . constant('URL') . "Inicio/cerrarSesion>Cerrar</a></li>
                    </ul>
                        ";
        }
        ?>
    </ul>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            M.AutoInit();
        });
    </script>
</body>


</html>