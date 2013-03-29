<?php

class usuario extends CI_Controller{


  public function __construct(){
    parent::__construct();
    $this->load->model('usuario_model');
  }


  public function index(){
    $data['usuario'] = $this->usuario_model->get_user_by_carne('200718898');

    $data['title'] = 'usuarios';
    $this->load->view('usuario/index', $data);
  }


  public function view($carne){
    $data['usuario'] = $this->usuario_model->get_user_by_carne($carne);

    if(empty($data['usuario'])){
      $this->load->view('usuario/view', $data);
    }
  }


}