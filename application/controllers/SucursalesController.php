<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class SucursalesController extends CI_Controller {

    function __construct(){
        parent::__construct();
    }

    function index(){
        $this->load->view('cpanel/shared/Header');
        $this->load->view('cpanel/shared/Menu');
        $this->load->view('cpanel/Sucursales/Lista_Sucursales');
        $this->load->view('cpanel/shared/Footer');
    }
}