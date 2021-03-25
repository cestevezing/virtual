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
    <script type="text/javascript">
        function myFunction() {
            var x = document.getElementById("passA");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
            var y = document.getElementById("pass");
            if (y.type === "password") {
                y.type = "text";
            } else {
                y.type = "password";
            }
            var z = document.getElementById("passC");
            if (z.type === "password") {
                z.type = "text";
            } else {
                z.type = "password";
            }
        }
    </script>
</head>

<body>
    <?php require "views/Header/header.php"; ?>
    <div class="container center-align" style="padding-bottom: 20px;">
        <h4><strong>Datos usuario</strong></h4>
        <hr style="border: 1px solid;" />
        <div class="" style="margin-bottom: 0px;margin-top: 10px;">
            <div class="row  z-depth-3" style="padding-bottom: 10px;background-color: rgba(255,255,255,0.9); border-radius: 20px;">
                <form class="col s12" action="<?php echo constant('URL'); ?>Perfil/editar" method="POST">
                    <div class="row">
                        <div class="input-field col m6">
                            <input id="nombre" name="nombres" value="<?php echo $this->usuario->nombres; ?>" type="text" class="validate">
                            <label for="nombre">Nombres completos</label>
                        </div>
                        <div class="input-field col m6">
                            <input id="apellidos" name="apellidos" value="<?php echo $this->usuario->apellidos; ?>" type="text" class="validate">
                            <label for="apellidos">Apellidos completos</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col m6">
                            <input id="telefono" name="telefono" value="<?php echo $this->usuario->telefono; ?>" type="text" class="validate">
                            <label for="telefono">Telefono</label>
                        </div>

                        <div class="input-field col m6">
                            <input id="cedula" name="cedula" value="<?php echo $this->usuario->cedula; ?>" type="text" class="validate">
                            <label for="cedula">Número de documento</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col m12">
                            <input id="correo" disabled name="correo" value="<?php echo $this->usuario->correo; ?>" type="email" class="validate">
                            <label for="correo">Correo</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="direccion" name="direccion" value="<?php echo $this->usuario->direccion; ?>" type="text" class="validate">
                            <label for="direccion">Dirección</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s6">
                            <input id="municipio" name="municipio" value="<?php echo $this->usuario->municipio; ?>" type="text" class="validate">
                            <label for="municipio">Municipio</label>
                        </div>
                        <div class="input-field col s6">
                            <select id="inputDepartamento" class="form-control" name="departamento" aria-required="true" aria-invalid="false" required>
                                <option value="" disabled>Seleccione</option>
                                <option <?php if ($this->usuario->departamento == 'Antioquia') echo 'selected'; ?> value="Antioquia">Antioquia</option>
                                <option <?php if ($this->usuario->departamento == 'Amazonas') echo 'selected'; ?> value="Amazonas">Amazonas</option>
                                <option <?php if ($this->usuario->departamento == 'Arauca') echo 'selected'; ?> value="Arauca">Arauca</option>
                                <option <?php if ($this->usuario->departamento == 'San Andres') echo 'selected'; ?> value="San Andres">Archipiélago de San Andrés, Providencia y Santa Catalina</option>
                                <option <?php if ($this->usuario->departamento == 'Atlántico') echo 'selected'; ?> value="Atlántico">Atlántico</option>
                                <option <?php if ($this->usuario->departamento == 'Bolívar') echo 'selected'; ?> value="Bolívar">Bolívar</option>
                                <option <?php if ($this->usuario->departamento == 'Bogotá D.C.') echo 'selected'; ?> value="Bogotá D.C.">Bogotá D.C.</option>
                                <option <?php if ($this->usuario->departamento == 'Boyacá') echo 'selected'; ?> value="Boyacá">Boyacá</option>
                                <option <?php if ($this->usuario->departamento == 'Caldas') echo 'selected'; ?> value="Caldas">Caldas</option>
                                <option <?php if ($this->usuario->departamento == 'Caquetá') echo 'selected'; ?> value="Caquetá">Caquetá</option>
                                <option <?php if ($this->usuario->departamento == 'Casanare') echo 'selected'; ?> value="Casanare">Casanare</option>
                                <option <?php if ($this->usuario->departamento == 'Cauca') echo 'selected'; ?> value="Cauca">Cauca</option>
                                <option <?php if ($this->usuario->departamento == 'Cesar') echo 'selected'; ?> value="Cesar">Cesar</option>
                                <option <?php if ($this->usuario->departamento == 'Chocó') echo 'selected'; ?> value="Chocó">Chocó</option>
                                <option <?php if ($this->usuario->departamento == 'Cordoba') echo 'selected'; ?> value="Cordoba">Córdoba</option>
                                <option <?php if ($this->usuario->departamento == 'Cundinamarca') echo 'selected'; ?> value="Cundinamarca">Cundinamarca</option>
                                <option <?php if ($this->usuario->departamento == 'Guainía') echo 'selected'; ?> value="Guainía">Guainía</option>
                                <option <?php if ($this->usuario->departamento == 'Guaviare') echo 'selected'; ?> value="Guaviare">Guaviare</option>
                                <option <?php if ($this->usuario->departamento == 'Huila') echo 'selected'; ?> value="Huila">Huila</option>
                                <option <?php if ($this->usuario->departamento == 'LaGuajira') echo 'selected'; ?> value="LaGuajira">La Guajira</option>
                                <option <?php if ($this->usuario->departamento == 'Magdalena') echo 'selected'; ?> value="Magdalena">Magdalena</option>
                                <option <?php if ($this->usuario->departamento == 'Meta') echo 'selected'; ?> value="Meta">Meta</option>
                                <option <?php if ($this->usuario->departamento == 'Nariño') echo 'selected'; ?> value="Nariño">Nariño</option>
                                <option <?php if ($this->usuario->departamento == 'Norte Santander') echo 'selected'; ?> value="Norte Santander">Norte de Santander</option>
                                <option <?php if ($this->usuario->departamento == 'Putumayo') echo 'selected'; ?> value="Putumayo">Putumayo</option>
                                <option <?php if ($this->usuario->departamento == 'Quindio') echo 'selected'; ?> value="Quindio">Quindio</option>
                                <option <?php if ($this->usuario->departamento == 'Risaralda') echo 'selected'; ?> value="Risaralda">Risaralda</option>
                                <option <?php if ($this->usuario->departamento == 'Santander') echo 'selected'; ?> value="Santander">Santander</option>
                                <option <?php if ($this->usuario->departamento == 'Sucre') echo 'selected'; ?> value="Sucre">Sucre</option>
                                <option <?php if ($this->usuario->departamento == 'Tolima') echo 'selected'; ?> value="Tolima">Tolima</option>
                                <option <?php if ($this->usuario->departamento == 'Valle Cauca') echo 'selected'; ?> value="Valle Cauca">Valle del Cauca</option>
                                <option <?php if ($this->usuario->departamento == 'Vaupés') echo 'selected'; ?> value="Vaupés">Vaupés</option>
                                <option <?php if ($this->usuario->departamento == 'Vichada') echo 'selected'; ?> value="Vichada">Vichada</option>
                            </select>
                            <label>Departamento</label>
                        </div>
                    </div>
                    <button style="border-radius: 20px;" class="btn waves-effect waves-light" type="submit" name="action">GUARDAR <i class="material-icons right">send</i></button>
                    <a style="border-radius: 20px;" href="<?php echo constant('URL') ?>ListaUsuarios/inicio" class="waves-effect waves-light btn red lighten-1">VOLVER <i class="material-icons right">close</i></a>
                </form>
            </div>
        </div>
        <hr style="border: 1px solid;" />
    </div>
    <div class="container center-align">
        <h4 class="blue-text text-darken-4"><strong>CAMBIAR CONTRASEÑA</strong></h4>
        <div class="row z-depth-3" style="padding-bottom: 10px;background-color: rgba(255,255,255,0.9); border-radius: 20px;">
            <form class="col s12" action="<?php echo constant('URL'); ?>Perfil/recuperar" method="POST">
                <div class="row">
                    <div class="input-field col m12">
                        <input id="passA" name="passA" type="password" class="validate">
                        <label for="passA">Contraseña actual</label>
                    </div>
                    <div class="input-field col m6">
                        <input id="pass" name="pass" type="password" class="validate">
                        <label for="pass">Nueva Contraseña</label>
                    </div>
                    <div class="input-field col m6">
                        <input id="passC" name="passC" type="password" class="validate">
                        <label for="passC">Confirmación contraseña</label>
                    </div>
                    <div class="input-field col m3">
                        <label>
                            <input type="checkbox" class="filled-in" onclick="myFunction()" />
                            <span>Mostrar contraseña</span>
                        </label>
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