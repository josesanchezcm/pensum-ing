<?php

class Usuario extends CI_Controller{


  public function __construct(){
    parent::__construct();
    $this->load->model('Usuario_model');
  }


  public function index(){
    $data['usuario'] = $this->Usuario_model->get_user();

    $data['title'] = 'usuarios';
    $this->load->view('usuario/index', $data);
  }


  public function view($carne){
    $data['usuario'] = $this->Usuario_model->get_user($carne);

    if(empty($data['usuario'])){
      $this->load->view('usuario/view', $data);
    }
  }


}