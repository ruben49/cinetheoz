<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class DistribuidorasController extends CI_Controller {

    function __construct(){
        parent::__construct();
    }

    function index(){
        $this->load->view('cpanel/shared/Header');
        $this->load->view('cpanel/shared/Menu');
        $this->load->view('cpanel/Distribuidoras/Lista_Distribuidoras');
        $this->load->view('cpanel/shared/alert-window');
        $this->load->view('cpanel/shared/Footer');
    }
}
