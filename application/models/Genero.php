<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Genero extends CI_Model{

    function __construct(){
        parent::__construct();

    }
    
    public function guardar($param){
        $campos = array(
            'descripcion' =>  $param['descripcion']
        );	
        $this->db->insert('genero', $campos);   

        if($this->db->affected_rows() > 0){
            return true; 
        }else {
            return false;
        }

    } 

    public function obtenerGeneros(){
 
        $query = $this->db->query("select * from genero"); 
        if ( $query->num_rows() > 0 ){
      
            $row = $query->result_array();
            return $row;
        }else{
            return "0";
        }
         
         
    }
}