<?php

 
class Perfil_UsuarioController extends CI_Controller {

    function __construct(){
        parent::__construct();
   $this->load->library('session');

if ($this->session->userdata('s_idUsuario')){


redirect('loginpanel');


    }
    }

    function index(){
        $this->load->view('cpanel/shared/Header');
        $this->load->view('cpanel/shared/Menu');
        $this->load->view('cpanel/Perfil_Usuario/Lista_Perfiles');
        $this->load->view('cpanel/shared/alert-window');
        $this->load->view('cpanel/shared/Footer');
    }
}