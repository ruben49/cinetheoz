<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class AccesosController extends CI_Controller {

    function __construct(){
        parent::__construct();
    }

    function index(){
        $this->load->view('cpanel/shared/Header');
        $this->load->view('cpanel/shared/Menu');
        $this->load->view('cpanel/Accesos/Lista_Accesos');
        $this->load->view('cpanel/shared/Footer');
    }
}