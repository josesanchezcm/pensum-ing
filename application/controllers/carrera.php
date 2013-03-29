<?php

class carrera extends CI_Controller{

  public function __construct(){
    parent::__construct();
    $this->load->model('carrera_model');
    $this->load->model('curso_model');
  }

  public function index ($carrera_id){
    
    $current_carrera = $this->carrera_model->get_carrera_by_id($carrera_id);

    $data['carrera'] = $current_carrera;
    
    $data['posgrados'] =
      $this->carrera_model->get_posgrados_by_carrera($carrera_id);

    $data['escuela'] = $this->carrera_model->get_escuela_by_carrera($carrera_id);

    $data['cursos'] = $this->curso_model->get_cursos_by_carrera($carrera_id);
    
    $this->load->view('carrera/index', $data);

  }

}