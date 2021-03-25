<?php

class Inicio extends Controller
{

    function __construct()
    {
        parent::__construct();
        session_start();
    }

    function render()
    {
        $this->view->render('Inicio/index');
    }

    function cerrarSesion()
    {
        session_unset();
        session_destroy();
        echo "<script type='text/javascript'>location.href = '" . constant('URL') . "Inicio';</script>";
    }

}
