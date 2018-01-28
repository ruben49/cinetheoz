<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Sucursal extends CI_Model{

    function __construct(){
        parent::__construct();

    }
    
    public function guardar($param){
        $campos = array(
            'descripcion' =>  $param['descripcion']
        );	
        $this->db->insert('sucursal', $campos);   

        if($this->db->affected_rows() > 0)
        {

            return true; 
        }else {
            return false;
        }

    } 

    public function obtenerSucursales(){
 
        $query = $this->db->query("select * from sucursal");
      
        
        if ( $query->num_rows() > 0 ){
      
            $row = $query->result_array();
            return $row;
        } 
         
    }
}