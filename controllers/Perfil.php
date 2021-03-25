<?php

class Perfil extends Controller
{

    function __construct()
    {
        parent::__construct();
        session_start();
    }

    function render()
    {
        if (isset($_SESSION['idUsuario']) && $_SESSION['rol'] == 1) {
            $this->loadModel('usuario');
            $usuario = $this->model->obtener($_SESSION['idUsuario']);
            $this->view->usuario = $usuario;
            $this->view->render('Perfil/index');
        } else {
            echo "<script type='text/javascript'>location.href = '" . constant('URL') . "Login';</script>";
        }
    }

    function editar()
    {
        $this->loadModel('usuario');
        $id = $_SESSION['idUsuario'];
        $nombres = $_POST['nombres'];
        $apellidos = $_POST['apellidos'];
        $cedula = $_POST['cedula'];
        $telefono = $_POST['telefono'];
        $direccion = $_POST['direccion'];
        $municipio = $_POST['municipio'];
        $departamento = $_POST['departamento'];
        if ($this->model->editar([
            'id' => $id,
            'nombres' => $nombres,
            'apellidos' => $apellidos,
            'cedula' => $cedula,
            'telefono' => $telefono,
            'direccion' => $direccion,
            'municipio' => $municipio,
            'departamento' => $departamento
        ])) {
            echo "<script type='text/javascript'>window.alert('Se registro exitosamente.');location.href = '" . constant('URL') . "Perfil';</script>";
        } else {
            echo "<script type='text/javascript'>window.alert('No se pueden hacer las modificaciones, inténtelo más tarde.');location.href = '" . constant('URL') . "Perfil';</script>";
        }
    }

    function recuperar()
    {
        $this->loadModel('usuario');
        $passA = $_POST['passA'];
        $pass = $_POST['pass'];
        $passC = $_POST['passC'];
        if ($pass == $passC) {
            $persona = $this->model->obtener($_SESSION['idUsuario']);
            $md5passA = md5($passA);
            $respuesta = $this->model->loginPersona(['correo' => $persona->correo, 'clave' => $md5passA]);
            if ($respuesta) {
                $md5pass = md5($pass);
                $respuesta = $this->model->cambiarContrasena(['correo' => $persona['correo'], 'pass' => $md5pass]);
                echo "<script type='text/javascript'>window.alert('La nueva contraseña se ha actualizado con éxito');</script>";
                echo "<script type='text/javascript'>location.href = '" . constant('URL') . "Perfil';</script>";
            } else {
                echo "<script type='text/javascript'>window.alert('La contraseña actual es incorrecta');</script>";
                echo "<script type='text/javascript'>location.href = '" . constant('URL') . "Perfil';</script>";
            }
        } else {
            echo "<script type='text/javascript'>window.alert('Las contraseñas no coinciden');</script>";
            echo "<script type='text/javascript'>location.href = '" . constant('URL') . "Perfil';</script>";
        }
    }

}
