<?php

class ClienteController  extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->model('Cliente');
    }
    
    function registrarCliente(){
        
        $param['nombres'] =  $this->input->post('Nombrescliente');
        $param['apellidos'] =  $this->input->post('Apellidoscliente');
        $param['direccion'] =  $this->input->post('Direccioncliente');
        $param['ciudad'] =  $this->input->post('Ciudadcliente');
        $param['usercliente'] =  $this->input->post('Usernamecliente');
        $param['passcliente'] =  $this->input->post('Passwordcliente');
        $param['correocliente'] =  $this->input->post('Emailcliente');

        $this->Cliente->guardar($param);

    }
}
