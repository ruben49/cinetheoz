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
    
    public function obtenerProductoras(){
         
        $datos = $this->Productoras->obtenerProductoras();
        $listaProductoras  = array();
        $aux = array();
        
        foreach($datos as $productora){
            
            $aux = array(
                $productora['idProductora'],$productora['descripcion'], "<a class='btn btn-default btn-xs'><spam class='fa fa-edit fa-2x' title='Editar'></spam></a><div onClick=eliminar(".$productora['idProductora'].
            ") class='btn btn-default btn-xs'><spam class='fa fa-trash-o fa-2x' title='Eliminar'></spam></div>",
            );
           
            array_push($listaProductoras, $aux);
            
            
            }
        
        echo json_encode($listaProductoras);
        
    }

  

}
