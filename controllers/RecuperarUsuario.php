<?php

class RecuperarUsuario extends Controller
{

    function __construct()
    {
        parent::__construct();
        session_start();
    }
    function render()
    {
        $this->view->render('RecuperarUsuario/index');
    }

    function recuperar()
    {
        $this->loadModel('usuario');
        $email = $_POST['correo'];
        $pass = substr(md5(microtime()), 1, 8);
        $md5pass = md5($pass);
        $respuesta = $this->model->cambiarContrasena(['correo' => $email, 'pass' => $md5pass]);
        if ($respuesta) {
            $to = $_POST['correo'];
            $from = 'From: direccion.academica@aulatoday.com';
            $subject = 'Recuperar contraseña';
            $message = 'El sistema le asigno esta nueva contraseña: ' . $pass;

            mail($to, $subject, $message, $from);
            echo "<script type='text/javascript'>window.alert('La nueva contraseña a sido enviada a su correo, por favor verifique en los correos no deseados.');</script>";
            echo "<script type='text/javascript'>location.href = '" . constant('URL') . "Login';</script>";
        } else {
            $this->view->render('RecuperarUsuario/index');
        }
    }
}
