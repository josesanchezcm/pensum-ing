<?php 

class Carrera_model extends CI_Model{
  
  public function __construct(){
    $this->load->database();
    $this->load->library('CarreraQueries');
  }

  public function get_carrera_by_id($carrera_id){
    $carrera_by_id = $this->carreraqueries->carrera_by_id;
    $query = $this->db->query($carrera_by_id, array($carrera_id));
    return $query;
  }
  
  public function get_posgrados_by_carrera($carrera_id){
    
    $posgrados = $this->carreraqueries->posgrados_by_carrera_id;
    $query = $this->db->query($posgrados, array($carrera_id));
    return $query;
  }

  public function get_escuela_by_carrera($carrera_id){
    $escuela_by_carrera = $this->carreraqueries->escuela_by_carrera_id;
    $query = $this->db->query($escuela_by_carrera, array($carrera_id));
    return $query;
  }
}