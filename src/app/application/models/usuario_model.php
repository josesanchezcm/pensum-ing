<?php 
class Usuario_model extends CI_Model{
  
  protected $table_name = 'usuario';
  protected $primary_key = 'usuario_id';
  protected $to_object = 'UsuarioTO';

  public function __construct(){

    $this->load->database();
    $this->usuario_queries = new UsuarioQueries();

  }
  
  public function get_user_by_carne($carne){

    $usuario_by_carne = $this->usuario_queries->usuario_by_carne;
    $query = $this->db->query($usuario_by_carne, array($carne));

    return populate_to($query);
  }


  protected function populate_to($query){
    $row = $query->row();
    
    $usuario_to = new UsuarioTO();
    $usuario_to->usuario_id = $row->usuario_id;
    $usuario_to->nombre = $row->nombre;
    $usuario_to->apellido = $row->apellido;
    $usuario_to->correo = $row->correo;

    return $usuario_to;
    
  }
}