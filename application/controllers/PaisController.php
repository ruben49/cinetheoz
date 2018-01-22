<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class PaisController extends CI_Controller {

    function __construct(){
        parent::__construct();
    }

    public function index(){
        $this->load->view('sitio/shared/header');
        $this->load->view('sitio/Home');
        $this->load->view('sitio/shared/footer');
    }
}
