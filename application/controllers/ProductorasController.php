<?php
 
class ProductorasController extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->model('Productoras');
    
    }
    
    function index(){
        $this->load->view('cpanel/shared/Header');
        $this->load->view('cpanel/shared/Menu');
        $this->load->view('cpanel/Productoras/Lista_Productoras');
        $this->load->view('cpanel/shared/Footer');
    }
    
    function ingresar(){
        
        $descripcion = $this->input->post('descripcion');
        $resul =   $this->Productoras->login($descripcion);
        
        if($resul == 1){
            echo "1";
        }else{
            echo "-1";
        }
    }
    
}
