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
}
