<?php

class Internacional extends Controller
{

    function __construct()
    {
        parent::__construct();
        session_start();
    }

    function render()
    {
        if (isset($_SESSION['idUsuario']) && isset($_SESSION['nombres']) && $_SESSION['rol'] == 1) {
            $this->listaConferencias();
            if (!isset($_SESSION['idConferencia'])) {
                $_SESSION['idConferencia'] = 0;
            } else if ($_SESSION['idConferencia'] > 0) {
                $this->loadModel('conferencia');
                $conferencia =  $this->model->obtener($_SESSION['idConferencia']);
                $this->view->conferencia = $conferencia;
            }
            $this->view->render('Internacional/index');
        } else {
            echo "<script type='text/javascript'>alert('Debe iniciar sesión para participar de las conferencias.'); location.href = '" . constant('URL') . "Login';</script>";
        }
    }

    function listaConferencias()
    {
        $this->loadModel('conferencia');
        if (!isset($_SESSION['pagina'])) {
            $_SESSION['pagina'] = 1;
        }
        $limPagina =  $_SESSION['pagina'] - 1;
        $conferencias = $this->model->listar([
            'nombre' => "",
            'limPagina' => $limPagina
        ]);
        $this->view->agenda = $conferencias;
        $numPaginas = $this->model->numPaginasConferencias();
        $this->listarCuatro();
        $this->view->numPaginas = $numPaginas;
    }

    function inicio()
    {
        $_SESSION['pagina'] = 1;
        $_SESSION['idConferencia'] = 0;
        echo "<script type='text/javascript'>location.href = '" . constant('URL') . "Internacional';</script>";
    }

    function ver($param = null)
    {
        $_SESSION['idConferencia'] = $param[0];
        echo "<script type='text/javascript'>location.href = '" . constant('URL') . "Internacional';</script>";
    }

    function nuevaPagina($param = null)
    {
        $_SESSION['pagina'] = $param[0];
        echo "<script type='text/javascript'>location.href = '" . constant('URL') . "Internacional';</script>";
    }

    function listarCuatro()
    {
        $this->loadModel('publicidad');
        $publicidadB = $this->model->listarCuatro();
        $this->view->publicidadB = $publicidadB;        
    }
    
}

