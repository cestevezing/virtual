<?php

class Video extends Controller
{
    function __construct()
    {
        parent::__construct();
        session_start();
    }

    function render()
    {
        $this->view->render('Video/index');
    }
}
