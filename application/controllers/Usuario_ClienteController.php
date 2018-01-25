<?php

class Usuario_clienteController  extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->model('Usuario_Cliente');
    }
    
    function registrarCliente(){
        
        $param['nombres'] =  $this->input->post('Nombrescliente');
        $param['apellidos'] =  $this->input->post('Apellidoscliente');
        $param['direccion'] =  $this->input->post('Direccioncliente');
        $param['ciudad'] =  $this->input->post('Ciudadcliente');
        $param['usercliente'] =  $this->input->post('Usernamecliente');
        $param['passcliente'] =  $this->input->post('Passwordcliente');
        $param['correocliente'] =  $this->input->post('Emailcliente');

        $this->Usuario_Cliente->guardar($param);



          $this->load->view('sitio/shared/header');
        $this->load->view('sitio/Home');
        $this->load->view('sitio/shared/footer');
        
    }
}
