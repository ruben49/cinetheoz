<?php

class PanelController extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->model = array('Usuario_Cliente','Usuarios');
        $this->load->library('session');


    }
    
    function index(){






   $data['mensaje'] = '';
    $this->load->view('cpanel/loginpanel',$data);
        

  //      $this->load->view('cpanel/shared/Header');
    //    $this->load->view('cpanel/shared/Menu');
      //  $this->load->view('cpanel/Home');
       // $this->load->view('cpanel/shared/alert-window');
        //$this->load->view('cpanel/shared/Footer');

    
    }

    function logueout(){


    $this->session->sess_destroy();



    

    }

    function panel(){


    $this->load->view('cpanel/shared/Header');
        $this->load->view('cpanel/shared/Menu');
       $this->load->view('cpanel/Home');
    $this->load->view('cpanel/shared/Footer');

    }
}
