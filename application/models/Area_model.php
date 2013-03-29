<?php
class Usuario_model extends CI_Model {

  public function __construct()
  {
    $this->load->database();
  }

  public function get_user($carne = FALSE){
    if($carne === FALSE{
	$query = $this->db->get('usuario');
	return $query->result_array()
      }
      $query = $this->db->get_where('usuario', array('carne'=>$carne));

      return $query->row_array();
  }

 }