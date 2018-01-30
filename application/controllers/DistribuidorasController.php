<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class DistribuidorasController extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('Distribuidoras');
        $this->load->library('session');
    }

    function index(){
        $this->load->view('cpanel/shared/Header');
        $this->load->view('cpanel/shared/Menu');
        $this->load->view('cpanel/Distribuidoras/Lista_Distribuidoras');
        $this->load->view('cpanel/shared/alert-window');
        $this->load->view('cpanel/shared/Footer');
    }
    
    function guardar(){
        
        $descripcion ['descripcion'] = $this->input->post('descripcion');
        
        $resul = $this->Distribuidoras->guardar($descripcion);
        
        if($resul){
            echo "1";
        }else{
            echo "-1";
        }
    }
    
    public function obtenerDistribuidoras(){
         
        $datos = $this->Distribuidoras->obtenerDistribuidoras();
        $listaDistribuidoras  = array();
        $aux = array();
        
        if($datos != '0'){
            foreach($datos as $distribuidora){
            
            $aux = array(
                $distribuidora['idDistribuidora'],$distribuidora['descripcion'], "<a class='btn btn-default btn-xs'><spam class='fa fa-edit fa-2x' title='Editar'></spam></a><div onClick=eliminar(".$distribuidora['idDistribuidora'].
            ") class='btn btn-default btn-xs'><spam class='fa fa-trash-o fa-2x' title='Eliminar'></spam></div>",
            );
           
            array_push($listaDistribuidoras, $aux);
            
            
            }
            
        } 
 
            echo json_encode($listaDistribuidoras);
            
 
             
    }
}
