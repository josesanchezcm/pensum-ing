<?php 
class Usuario_model extends CI_Model{

  protected $table_name = 'usuario';
  protected $primary_key = 'usuario_id';
  protected $to_object = 'UsuarioTO';

  public function __construct(){

    $this->load->database();
    $this->load->library('UsuarioQueries');
    $this->load->library('UsuarioTO');
  }
  
  public function get_user_by_carne($carne){

    $usuario_by_carne = $this->usuarioqueries->usuario_by_carne;
    $query = $this->db->query($usuario_by_carne, array($carne));

    return $this->populate_to($query);
  }


  protected function populate_to($query){
    $row = $query->row();
    $usuarioto->usuario_id = $row->usuario_id;
   
    $usuarioto->nombre = $row->nombre;
    $usuarioto->apellido = $row->apellido;

    $usuarioto->correo = $row->correo;

    return $usuarioto;
    
  }
}