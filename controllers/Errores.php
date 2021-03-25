<?php

class Errores extends Controller
{

    function __construct()
    {
        parent::__construct();
        session_start();
        $this->view->render('Errores/index');
    }
}
