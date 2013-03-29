<?php 
class curso extends CI_Controller{
  
  public function __construct(){
    parent::__construct();
    $this->load->model('curso_model');

  }

  public function index($curso_id){
    
    $current_curso = $this->curso_model->get_curso_by_id($curso_id);
    $data['curso'] = $current_curso;
    
    $data['prerrequisitos'] = 
      $this->curso_model->get_prerrequisitos($curso_id);

    $data['postrequisitos'] = 
      $this->curso_model->get_postrequisitos($curso_id);

    $this->load->view('curso/index', $data);

  }


}