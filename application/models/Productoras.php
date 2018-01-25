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
        $this->db->insert('productoras', $campos);   

        if($this->db->affected_rows() > 0)
        {

            return true; 
        }else {
            return false;
        }

    } 

    public function obtenerProductoras(){
        $this->db->select('*');
        $this->db->from('productoras');
        
        $query = $this->db->get();
        
        if ( $query->num_rows() > 0 ){
      
            $row = $query->row_array();
            return $row;
        } 
         
    }
    
}
