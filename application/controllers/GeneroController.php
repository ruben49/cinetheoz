<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class GeneroController extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('Genero');
        $this->load->library('session');
    }

    function index(){
        $this->load->view('cpanel/shared/Header');
        $this->load->view('cpanel/shared/Menu');
        $this->load->view('cpanel/Genero/Lista_Genero');
        $this->load->view('cpanel/shared/alert-window');
        $this->load->view('cpanel/shared/Footer');
    }
    
    function guardar(){
        
        $descripcion ['descripcion'] = $this->input->post('descripcion');
        
        $resul = $this->Genero->guardar($descripcion);
        
        if($resul){
            echo "1";
        }else{
            echo "-1";
        }
    }
    
    public function obtenerGeneros(){
         
        $datos = $this->Genero->obtenerGeneros();
        $listaGeneros  = array();
        $aux = array();
        
        foreach($datos as $genero){
            
            $aux = array(
                $genero['idGenero'],$genero['descripcion'], "<a class='btn btn-default btn-xs'><spam class='fa fa-edit fa-2x' title='Editar'></spam></a><div onClick=eliminar(".$genero['idGenero'].
            ") class='btn btn-default btn-xs'><spam class='fa fa-trash-o fa-2x' title='Eliminar'></spam></div>",
            );
           
            array_push($listaGeneros, $aux);
            
            
            }
        
        echo json_encode($listaGeneros);
        
    }
    
    
    
}