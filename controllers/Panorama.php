<?php

class Panorama extends Controller
{

    function __construct()
    {
        parent::__construct();
        session_start();
    }

    function render()
    {
        $this->view->render('Panorama/index');
    }

}
