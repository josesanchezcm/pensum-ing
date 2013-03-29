<?php 

class Material_model extends CI_Model{
  
  public function __construct(){
    $this->load->database();
    $this->load->library('MaterialQueries');
  }
  

  public function get_libro_by_curso($curso_id){

    $libro_by_curso = $this->materialqueries->libro_by_curso;
    $query = $this->db->query($libro_by_curso, array($curso_id));
    return $query;
  }


  public function get_ejemplo_by_curso($curso_id){

    $ejemplo_by_curso = $this->materialqueries->ejemplo_by_curso;
    $query = $this->db->query($ejemplo_by_curso, array($curso_id));
    return $query;

  }


  public function get_imagen($material_id){
    $imagen_by_material_id = $this->materialqueries->imagen_by_material_id;
    $query=$this->db->query($imagen_by_material_id, array($material_id));
    return $query;
    
  }

}