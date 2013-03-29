<?php

class material extends CI_Controller{
  
  public function __construct(){
    parent::__construct();
    $this->load->model('material_model');
  }

  public function index($curso_id){

    $data['libros'] = $this->material_model->get_libro_by_curso($curso_id);

    $data['ejemplos'] = $this->material_model->get_ejemplo_by_curso($curso_id);

    $this->load->view('material/index', $data);
  }

}