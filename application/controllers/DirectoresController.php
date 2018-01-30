<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class DirectoresController extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('Directores');
        $this->load->library('session');
    }

    function index(){
        $this->load->view('cpanel/shared/Header');
        $this->load->view('cpanel/shared/Menu');
        $this->load->view('cpanel/Directores/Lista_Directores');
        $this->load->view('cpanel/shared/alert-window');
        $this->load->view('cpanel/shared/Footer');
    }
    
    function guardar(){
        
        $descripcion ['descripcion'] = $this->input->post('descripcion');
        
        $resul = $this->Accesos->guardar($descripcion);
        
        if($resul){
            echo "1";
        }else{
            echo "-1";
        }
    }
    
    public function obtenerDirectores(){
         
        $datos = $this->Directores->obtenerDirectores();
        $listaDirectores  = array();
        $aux = array();
        
        if($datos != '0'){
        foreach($datos as $director){
            
            $aux = array(
                $director['idDirector'],$director['nombreDirector'], "<a class='btn btn-default btn-xs'><spam class='fa fa-edit fa-2x' title='Editar'></spam></a><div onClick=eliminar(".$director['idDirector'].
            ") class='btn btn-default btn-xs'><spam class='fa fa-trash-o fa-2x' title='Eliminar'></spam></div>",
            );
           
            array_push($listaDirectores, $aux);
            
            
            }
        }
 
            echo json_encode($listaDirectores);
 
        
    }
}
