<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro - 34 Congreso Fendipetroleo</title>
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
    <div class="container center-align">
        <h1 class="blue-text text-darken-4"><strong>REGISTRO</strong></h1>
        <div class="row z-depth-3" style="padding-bottom: 10px;background-color: rgba(255,255,255,0.9); border-radius: 20px;">
            <form class="col s12" action="<?php echo constant('URL'); ?>Registro/registrar" method="POST">
                <div class="row">
                    <div class="input-field col m6">
                        <input id="nombre" name="nombre" type="text" class="validate">
                        <label for="nombre">Nombres completos</label>
                    </div>
                    <div class="input-field col m6">
                        <input id="apellidos" name="apellidos" type="text" class="validate">
                        <label for="apellidos">Apellidos completos</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col m6">
                        <input id="telefono" name="telefono" type="text" class="validate">
                        <label for="telefono">Telefono</label>
                    </div>

                    <div class="input-field col m6">
                        <input id="cedula" name="cedula" type="text" class="validate">
                        <label for="cedula">N??mero de documento</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col m6">
                        <input id="correo" name="correo" type="email" class="validate">
                        <label for="correo">Correo</label>
                    </div>
                    <div class="input-field col m3">
                        <input id="clave" name="clave" type="password" class="validate">
                        <label for="clave">Contrase??a</label>
                    </div>
                    <div class="input-field col m3">
                        <label>
                            <input type="checkbox" class="filled-in" onclick="myFunction()" />
                            <span>Mostrar contrase??a</span>
                        </label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="direccion" name="direccion" type="text" class="validate">
                        <label for="direccion">Direcci??n</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        <input id="municipio" name="municipio" type="text" class="validate">
                        <label for="municipio">Municipio</label>
                    </div>
                    <div class="input-field col s6">
                        <select id="inputDepartamento" class="form-control" name="departamento" aria-required="true" aria-invalid="false" required>
                            <option value="" disabled selected>Seleccione</option>
                            <option value="Antioquia">Antioquia</option>
                            <option value="Amazonas">Amazonas</option>
                            <option value="Arauca">Arauca</option>
                            <option value="San Andres">Archipi??lago de San Andr??s, Providencia y Santa Catalina</option>
                            <option value="Atl??ntico">Atl??ntico</option>
                            <option value="Bol??var">Bol??var</option>
                            <option value="Bogot?? D.C.">Bogot?? D.C.</option>
                            <option value="Boyac??">Boyac??</option>
                            <option value="Caldas">Caldas</option>
                            <option value="Caquet??">Caquet??</option>
                            <option value="Casanare">Casanare</option>
                            <option value="Cauca">Cauca</option>
                            <option value="Cesar">Cesar</option>
                            <option value="Choc??">Choc??</option>
                            <option value="Cordoba">C??rdoba</option>
                            <option value="Cundinamarca">Cundinamarca</option>
                            <option value="Guain??a">Guain??a</option>
                            <option value="Guaviare">Guaviare</option>
                            <option value="Huila">Huila</option>
                            <option value="LaGuajira">La Guajira</option>
                            <option value="Magdalena">Magdalena</option>
                            <option value="Meta">Meta</option>
                            <option value="Nari??o">Nari??o</option>
                            <option value="Norte Santander">Norte de Santander</option>
                            <option value="Putumayo">Putumayo</option>
                            <option value="Quindio">Quindio</option>
                            <option value="Risaralda">Risaralda</option>
                            <option value="Santander">Santander</option>
                            <option value="Sucre">Sucre</option>
                            <option value="Tolima">Tolima</option>
                            <option value="Valle Cauca">Valle del Cauca</option>
                            <option value="Vaup??s">Vaup??s</option>
                            <option value="Vichada">Vichada</option>
                        </select>
                        <label>Departamento</label>
                    </div>
                </div>
                <button style="border-radius: 20px;" class="btn waves-effect waves-light" type="submit" name="action">ENVIAR <i class="material-icons right">send</i></button>
                <a style="border-radius: 20px;" href="<?php echo constant('URL') ?>Inicio" class="waves-effect waves-light btn red lighten-1">VOLVER <i class="material-icons right">close</i></a>
            </form>
        </div>
    </div>
    <br />
    <?php require "views/Footer/footer.php"; ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>

</html>