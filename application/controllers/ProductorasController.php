<?php
 
class ProductorasController extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->model('Productoras');
    $this->load->library('session');


    }
    
    function index(){
        $this->load->view('cpanel/shared/Header');
        $this->load->view('cpanel/shared/Menu');
        $this->load->view('cpanel/Productoras/Lista_Productoras');
        $this->load->view('cpanel/shared/alert-window');
        $this->load->view('cpanel/shared/Footer');
    }
    
    function guardar(){
        
        $descripcion ['descripcion'] = $this->input->post('descripcion');
        
        $resul = $this->Productoras->guardar($descripcion);
        
        if($resul){
            echo "1";
        }else{
            echo "-1";
        }
    }
    

  

}
