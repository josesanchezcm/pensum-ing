<?php 


class UsuarioQueries extends Query{
 

  $usuario_by_carne = "SELECT usuario_id , nombre, apellido, correo, 
  FROM usuario
  WHERE carne = ? ";

}