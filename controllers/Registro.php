<?php

class Registro extends Controller
{

    function __construct()
    {
        parent::__construct();
    }

    function render()
    {
        $this->view->render('Registro/index');
    }

    function registrar()
    {
        $this->loadModel('usuario');
        $nombres = $_POST['nombres'];
        $apellidos = $_POST['apellidos'];
        $cedula = $_POST['cedula'];
        $telefono = $_POST['telefono'];
        $correo = $_POST['correo'];
        $direccion = $_POST['direccion'];
        $municipio = $_POST['municipio'];
        $departamento = $_POST['departamento'];
        $clave = md5($_POST['clave']);
        if ($this->model->registrar([
            'nombres' => $nombres,
            'apellidos' => $apellidos,
            'cedula' => $cedula,
            'telefono' => $telefono,
            'correo' => $correo,
            'direccion' => $direccion,
            'municipio' => $municipio,
            'departamento' => $departamento,
            'clave' => $clave
        ])) {
            echo "<script type='text/javascript'>window.alert('Se registro exitosamente');location.href = '" . constant('URL') . "Login';</script>";
        } else {
            echo "<script type='text/javascript'>window.alert('El correo ya existe');location.href = '" . constant('URL') . "Registro';</script>";
        }
    }
}
