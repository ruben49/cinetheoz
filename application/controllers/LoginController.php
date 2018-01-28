<?php


class LoginController extends CI_Controller{
   
    function __construct(){
        parent::__construct();
        $this->load->model  (array('Usuario_Cliente','Usuarios'));
       
    $this->load->library('session');



    }
    function loginCliente(){ 
        
        $user = $this->input->post('Username');
        $passw = $this->input->post('Password');
        $resul =   $this->Usuario_Cliente->login($user,$passw);

        if ($resul == 1) {
           

            $this->load->view('sitio/shared/header');
            $this->load->view('sitio/Home');
            $this->load->view('sitio/shared/footer');

        }else{
            echo "error logueo cliente";

        }
    }
    function loginUsuario(){ 
        
        $cpuser = $this->input->post('user');
        $cppassw = $this->input->post('password');
        $cpresul =   $this->Usuarios->login($cpuser,$cppassw);

        if ($cpresul == 1) {
        $this->load->view('cpanel/shared/Header');
        $this->load->view('cpanel/shared/Menu');
        $this->load->view('cpanel/Home');
        $this->load->view('cpanel/shared/Footer');

        }else{
$data['mensaje'] = 'ERROR Verificar Contraseña o usuario';

      $this->load->view('cpanel/loginpanel',$data);

        }
    }
}
