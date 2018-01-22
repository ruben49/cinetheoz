<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Clientes extends CI_Model{

    function __construct(){
        parent::__construct();

    }

    
    public function login($usu,$pass){
    
        $this->db->select('idUsuarioCliente, nombres, apellidos, direccion, ciudad, email,');
        $this->db->from('usuario_cliente');
        $this->db->where('login', $usu);
        $this->db->where('contrasena',$pass);

        $resul = $this->db->get();

        if ($resul->num_rows()==1) {
            $res = $resul->row();

            $s_cliente = array('s_idUsuarioCliente' => $res ->idUsuarioCliente ,
             's_login' => $res->nombres.",".$res->apellidos );

            $this->session->userdata($s_cliente);
            return 1;
        }else{
            return 0;
        }

    }
    
    public function guardar($param){
     $campos = array(
     	'nombres' =>  $param['nombres'],
     	'apellidos' =>  $param['apellidos'] ,
        'direccion' =>  $param['direccion'],
        'ciudad' =>  $param['ciudad'],
        'login' =>  $param['usercliente'],
        'contrasena' =>  $param['passcliente'],
        'email' =>  $param['correocliente']
     );	
     $this-> db->insert('usuario_cliente	', $campos);   
    }
    
    
}
