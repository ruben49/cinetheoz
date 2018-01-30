<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Directores extends CI_Model{

    function __construct(){
        parent::__construct();

    }
    
    public function guardar($param){
        $campos = array(
            'nombreDirector' =>  $param['nombreDirector']
        );	
        $this->db->insert('directores', $campos);   

        if($this->db->affected_rows() > 0)
        {

            return true; 
        }else {
            return false;
        }

    } 

    public function obtenerDirectores(){
 
        $query = $this->db->query("select * from directores");
      
        
        if ( $query->num_rows() > 0 ){
      
            $row = $query->result_array();
            return $row;
        } else{
            return "0";
        }
         
    }
}
