<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of HomeController
 *
 * @author ruben
 */

class HomeController {

    function __construct(){
        parent::__construct();
    }

    public function index(){
        $this->load->view('sitio/shared/header');
        $this->load->view('sitio/welcome_message');
        $this->load->view('sitio/shared/footer');
    }
    
    function nosotros(){
        $this->load->view('sitio/shared/header');
        $this->load->view('sitio/nosotros');
        $this->load->view('sitio/shared/footer');

    }   
    
    function promos(){
        $this->load->view('sitio/shared/header');
        $this->load->view('sitio/promos');
        $this->load->view('sitio/shared/footer');
    }
    
    function contacto(){
        $this->load->view('sitio/shared/header');
        $this->load->view('sitio/contact');
        $this->load->view('sitio/shared/footer');

    }



}