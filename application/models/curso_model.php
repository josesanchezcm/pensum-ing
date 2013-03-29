<?php

class Curso_model extends CI_Model{


  public function __construct(){

    $this->load->database();
    $this->load->library('CursoQueries');
  }
  
  public function get_curso_by_id($curso_id){
    
    $curso_by_id = $this->cursoqueries->cursos_by_id;
    $query = $this->db->query($curso_by_id, array($curso_id));
    return $query;
  }


  public function get_cursos_ganados($user_id){
    
    $cursos_ganados = $this->cursoqueries->cursos_ganados_by_user_id;
    $query = $this->db->query($cursos_ganados, array($user_id));
    return $query;
  }

  public function get_prerrequisitos($curso_id){
    $prerrequisitos = $this->cursoqueries->prerrequisitos;
    $query = $this->db->query($prerrequisitos, array($curso_id));
    return $query;
  }

  public function get_postrequisitos($curso_id){
    $postrequisitos = $this->cursoqueries->postrequisitos;
    $query = $this->db->query($postrequisitos, array($curso_id));
    return $query;
  }

  public function get_creditos_aprobados($user_id){
    $creditos_aprobados = $this->cursoqueries->creditos_aprobados;
    $query = $this->db->query($creditos_aprobados, array($user_id));
    return $query;
  }

  public function get_cursos_by_carrera($carrera_id){
    $cursos_by_carrera = $this->cursoqueries->cursos_by_carrera;
    $query = $this->db->query($cursos_by_carrera, array($carrera_id));
    return $query;
  }
}