<?php 

class CarreraQueries{

  $carrera_by_id = "SELECT c.carrera_id, c.carrera_nombre, c.pensum_url
  e.name, e.escuela_nombre, e.direccion 
  FROM carrera c 
  JOIN escuela e ON (c.escuela_id = e.escuela_id) 
  WHERE c.carrera_id = ? ";

  $posgrados_by_carrera_id = "SELECT posgrado_nombre 
   FROM posgrado 
   JOIN posgrado_has_carrera phc ON (posgrado.posgrado_id = phc.posgrado_id)
   WHERE phc.carrera_id = ? " ;
  

}