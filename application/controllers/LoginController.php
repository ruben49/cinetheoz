<?php

 defined('BASEPATH') OR exit('No direct script access allowed');

class LoginController {
    
    function __construct(){
        parent::__construct();
        $this->load->model('Cliente');
        $this->load->model('Usuario');
    }
    
    
    function loginCliente(){ 
        
        $user = $this->input->post('Usernamecliente');
        $passw = $this->input->post('Passwordcliente');
        $resul =   $this->Cliente->login($user,$passw);

        if ($resul == 1) {
            $this->load->view('sitio/shared/header');
            $this->load->view('sitio/welcome_message');
            $this->load->view('sitio/shared/footer');

        }else{
            echo "error logueo";

        }
    }
}
