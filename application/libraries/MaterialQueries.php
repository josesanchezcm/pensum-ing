<?php

class MaterialQueries{
  public  $libro_by_curso = "SELECT  m.material_id, m.titulo, m.descripcion, 
   m.fecha_publicacion, CONCAT(a.nombre_autor, a.apellido_autor) as nombre_autor,
   f.fuente_nombre, f.fuente_url 
   FROM material m 
   JOIN autor a ON (m.autor_id =  a.autor_id ) 
   JOIN fuente f ON (m.fuente_id = f.fuente_id) 
   JOIN tipo_material t ON (m.tipo_material_id = t.tipo_material_id)
   JOIN curso_has_material chm ON ( m.material_id = chm.material_id)
   WHERE chm.curso_id = ? 
   AND t.tipo_nombre = 'LIBRO' ";


  public  $ejemplo_by_curso = "SELECT m.material_id, m.titulo , m.descripcion,
   m.fecha_publicacion , CONCAT(a.nombre_autor, a.apellido_autor) as nombre_autor,
    f.fuente_nombre, f.fuente_url
    FROM material m 
    JOIN autor a ON (m.autor_id = a.autor_id) 
    JOIN fuente f ON (m.fuente_id = f.fuente_id)
    JOIN tipo_material t ON (m.tipo_material_id = t.tipo_material_id) 
    JOIN curso_has_material chm ON (m.material_id = chm.material_id)
    WHERE chm.curso_id = ? 
    AND t.tipo_nombre = 'EJEMPLO' ";

  public  $imagen_by_material_id = "SELECT i.imagen_url 
   FROM imagen i 
   WHERE i.material_id = ? ";
}