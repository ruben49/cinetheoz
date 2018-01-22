<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class GeneroController extends CI_Controller {

    function __construct(){
        parent::__construct();
    }

    function index(){
        $this->load->view('cpanel/shared/Header');
        $this->load->view('cpanel/shared/Menu');
        $this->load->view('cpanel/Genero/Lista_Genero');
        $this->load->view('cpanel/shared/Footer');
    }
}