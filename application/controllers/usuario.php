<?php

class usuario extends CI_Controller{


  public function __construct(){
    parent::__construct();
    $this->load->model('usuario_model');
    $this->load->model('curso_model');

  }


  public function index(){

    $current_user = $this->usuario_model->get_user_by_carne('200718898');
    $data['usuario']= $current_user;
    
    $data['cursos_usuario'] = 
      $this->curso_model->get_cursos_ganados($current_user->usuario_id);
    
    $data['creditos'] = 
      $this->curso_model->get_creditos_aprobados($current_user->usuario_id);
    
        $data['title'] = 'Home';
        $this->load->view('usuario/index', $data);
    
  }


  public function view($carne){
    $data['usuario'] = $this->usuario_model->get_user_by_carne($carne);

    if(empty($data['usuario'])){
      $this->load->view('usuario/view', $data);
    }
  }


}