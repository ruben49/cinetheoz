<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Productoras extends CI_Model{

    function __construct(){
        parent::__construct();

    }
    
    public function guardar($param){
        $campos = array(
            'descripcion' =>  $param['descripcion']
        );	
        $this-> db->insert('descripcion	', $campos);   
    }
    
    public function obtenerProductoras(){
        $this->db->select('*');
        $this->db->from('Productoras');
        
        $query = $this->db->get();
        
        if ( $query->num_rows() > 0 ){
            
            $row = $query->row_array();
            return $row;
        } 
         
    }
    
}
