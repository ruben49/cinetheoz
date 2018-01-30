<?php

 
class Perfil_UsuarioController extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('Perfil_Usuario');
        $this->load->library('session');

    }

    function index(){
        $this->load->view('cpanel/shared/Header');
        $this->load->view('cpanel/shared/Menu');
        $this->load->view('cpanel/Perfil_Usuario/Lista_Perfiles');
        $this->load->view('cpanel/shared/alert-window');
        $this->load->view('cpanel/shared/Footer');
    }
    
    function guardar(){
        
        $descripcion['descripcion'] = $this->input->post('descripcion');
        
        $resul = $this->Perfil_Usuario->guardar($descripcion);
        
        if($resul){
            echo "1";
        }else{
            echo "-1";
        }
    }
    
    public function obtenerPerfiles(){
         
        $datos = $this->Perfil_Usuario->obtenerPerfiles();
        $listaPerfiles = array();
        $aux = array();
        
        if($datos != '0'){
        foreach($datos as $perfil){
            
            $aux = array(
                $perfil['idPerfilUsuario'],$perfil['descripcion'], "<a class='btn btn-default btn-xs'><spam class='fa fa-edit fa-2x' title='Editar'></spam></a><div onClick=eliminar(".$perfil['idPerfilUsuario'].
            ") class='btn btn-default btn-xs'><spam class='fa fa-trash-o fa-2x' title='Eliminar'></spam></div>",
            );
           
             array_push($listaPerfiles, $aux);
            
            
            }
        }
 
            echo json_encode($listaPerfiles);
 
        
    }
}