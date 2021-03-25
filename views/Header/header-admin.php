<?php
$mensaje = "";
if (isset($_SESSION['idUsuario']) && isset($_SESSION['nombres']) && $_SESSION['rol'] == 2) {
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
    <title></title>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="public/css/aulavirtual.css">
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
    <nav class="light-blue darken-4 main-nav" style="z-index: 10;">
        <div class="nav-wrapper">
            <a style="padding-left: 10px;padding-top: 5px;" href="#" class="brand-logo">
                <img class="responsive-img" width="200" src="<?php echo constant('URL') ?>public/img/Logo-Aula-Arriba.png" alt="">
            </a>
            <a href="" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="<?php echo constant('URL') ?>InicioAdmin">Inicio</a></li>
                <li><a href="<?php echo constant('URL') ?>ListaUsuarios/inicio">Usuarios</a></li>
                <li><a href="<?php echo constant('URL') ?>ListaConferencias/inicio">Conferencias</a></li>
                <li><a href="<?php echo constant('URL') ?>ListaPublicidad/inicio">Publicidad</a></li>
                <a class='dropdown-trigger btn-small' href='#' data-target='dropdown1'><?php echo $mensaje; ?></a>
                <!-- Dropdown Structure -->
                <ul id='dropdown1' style="margin-top: 20px;" class='dropdown-content'>
                    <li><a href="<?php echo constant('URL') ?>Inicio/cerrarSesion">Cerrar</a></li>
                </ul>
            </ul>
            <ul class="sidenav" id="mobile-demo">
                <a class="waves-effect waves-light btn-small">Cristian</a>
                <li><a href="<?php echo constant('URL') ?>InicioAdmin">Inicio</a></li>
                <li><a href="<?php echo constant('URL') ?>Usuarios">Usuarios</a></li>
                <li><a href="<?php echo constant('URL') ?>Capacitaciones">Capacitaciones</a></li>
                <li><a href="<?php echo constant('URL') ?>ListaPublicidad/inicio">Publicidad</a></li>
            </ul>
        </div>
    </nav>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            M.AutoInit();
        });
    </script>
</body>


</html>