<?php

class PanelController extends CI_Controller{

    function __construct(){
        parent::__construct();
    
    }
    
    function index(){
        $this->load->view('cpanel/shared/Header');
        $this->load->view('cpanel/shared/Menu');
        $this->load->view('cpanel/Home');
        $this->load->view('cpanel/shared/Footer');
    }
    
}
