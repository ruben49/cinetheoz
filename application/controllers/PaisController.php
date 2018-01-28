<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class PaisController extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('Pais');
        $this->load->library('session');
    }

    function index(){
        $this->load->view('cpanel/shared/Header');
        $this->load->view('cpanel/shared/Menu');
        $this->load->view('cpanel/Pais/Lista_Paises');
        $this->load->view('cpanel/shared/alert-window');
        $this->load->view('cpanel/shared/Footer');
    }
    
    
        function guardar(){
        
        $descripcion ['descripcion'] = $this->input->post('descripcion');
        
        $resul = $this->Pais->guardar($descripcion);
        
        if($resul){
            echo "1";
        }else{
            echo "-1";
        }
    }
    
    public function obtenerPaises(){
         
        $datos = $this->Pais->obtenerPaises();
        $listaPaises  = array();
        $aux = array();
        
        foreach($datos as $pais){
            
            $aux = array(
                $pais['idPais'],$pais['descripcion'], "<a class='btn btn-default btn-xs'><spam class='fa fa-edit fa-2x' title='Editar'></spam></a><div onClick=eliminar(".$pais['idPais'].
            ") class='btn btn-default btn-xs'><spam class='fa fa-trash-o fa-2x' title='Eliminar'></spam></div>",
            );
           
            array_push($listaPaises, $aux);
            
            
            }
        
        echo json_encode($listaPaises);
        
    }
    
    
    
}
