<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Perfil_Usuario extends CI_Model{

    function __construct(){
        parent::__construct();

    }
    
    public function guardar($param){
        $campos = array(
            'descripcion' =>  $param['descripcion']
        );	
        $this->db->insert('perfilusuario', $campos);   

        if($this->db->affected_rows() > 0)
        {

            return true; 
        }else {
            return false;
        }

    } 

    public function obtenerPerfiles(){
 
        $query = $this->db->query("select * from perfilusuario");
      
        
        if ( $query->num_rows() > 0 ){
      
            $row = $query->result_array();
            return $row;
        } 
         
    }
}