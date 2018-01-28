<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class SucursalesController extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('Sucursal');
        $this->load->library('session');
    }

    function index(){
        $this->load->view('cpanel/shared/Header');
        $this->load->view('cpanel/shared/Menu');
        $this->load->view('cpanel/Sucursales/Lista_Sucursales');
        $this->load->view('cpanel/shared/alert-window');
        $this->load->view('cpanel/shared/Footer');
    }
    
    function guardar(){
        
        $descripcion ['descripcion'] = $this->input->post('descripcion');
        
        $resul = $this->Sucursal->guardar($descripcion);
        
        if($resul){
            echo "1";
        }else{
            echo "-1";
        }
    }
    
    public function obtenerSucursales(){
         
        $datos = $this->Sucursal->obtenerSucursales();
        $listaSucursales  = array();
        $aux = array();
        
        foreach($datos as $sucursal){
            
            $aux = array(
                $sucursal['idSucursal'],$sucursal['descripcion'], "<a class='btn btn-default btn-xs'><spam class='fa fa-edit fa-2x' title='Editar'></spam></a><div onClick=eliminar(".$sucursal['idSucursal'].
            ") class='btn btn-default btn-xs'><spam class='fa fa-trash-o fa-2x' title='Eliminar'></spam></div>",
            );
           
            array_push($listaSucursales, $aux);
            
            
            }
        
        echo json_encode($listaSucursales);
        
    }
}