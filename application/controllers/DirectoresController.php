<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class DirectoresController extends CI_Controller {

    function __construct(){
        parent::__construct();
    }

    function index(){
        $this->load->view('cpanel/shared/Header');
        $this->load->view('cpanel/shared/Menu');
        $this->load->view('cpanel/Directores/Lista_Directores');
        $this->load->view('cpanel/shared/Footer');
    }
}
