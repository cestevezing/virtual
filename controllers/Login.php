<?php

class Login extends Controller
{

    function __construct()
    {
        parent::__construct();
        session_start();
    }

    function render()
    {
        $this->view->render('Login/index');
    }

    function login()
    {
        $this->loadModel('usuario');
        $email = $_POST['correo'];
        $password  = $_POST['clave'];
        $md5pass = md5($password);
        $respuesta = $this->model->loginPersona(['correo' => $email, 'clave' => $md5pass]);
        if ($respuesta) {
            $_SESSION['idUsuario'] = $respuesta['idUsuario'];
            $_SESSION['rol'] = $respuesta['rol'];
            $_SESSION['nombres'] = $respuesta['nombres'];
            if ($respuesta['rol'] == 1) {
                echo "<script type='text/javascript'>location.href = '" . constant('URL') . "Conferencias/inicio';</script>";
            } else {
                echo "<script type='text/javascript'>location.href = '" . constant('URL') . "InicioAdmin';</script>";
            }
        } else {
            echo "<script type='text/javascript'>window.alert('Correo o contraseña incorrectos');location.href = '" . constant('URL') . "Login';</script>";
        }
    }
}
