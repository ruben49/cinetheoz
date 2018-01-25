<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Usuarios
 *
 * @author ruben
 */
class Usuarios extends CI_Model{

     function __construct(){
        parent::__construct();
        $this->load->library('session');
    }
    
    
    
    
    public function login($usu,$pass){
    
        $this->db->select('idUsuario, email');
        $this->db->from('usuarios');
  
        $this->db->where('login', $usu);
        $this->db->where('contrasena',$pass);

        $resul = $this->db->get();

        if ($resul->num_rows() == 1) {
            $res = $resul->row();

            $s_cliente = array('s_idUsuario' => $res ->idUsuario ,
           's_login' => $res->email );

            $this->session->set_userdata($s_cliente);
            return 1;
        }else{
            return 0;
        }

    }
    
}
