<?php

class MaterialQueries{
  $libro_by_curso = "SELECT  m.material_id, m.titulo, m.descripcion, 
   m.fecha_de_publicacion, CONCAT(a.nombre, a.apellido) as nombre_autor,
   f.fuente_nombre, f.fuente_url 
   FROM material m 
   JOIN autor a ON (m.autor_id =  a.autor_id ) 
   JOIN fuente f ON (m.fuente_id = f.fuente_id) 
   JOIN tipo t ON (m.tipo_id = t.tipo_id)
   JOIN curso_has_material chm ON ( m.material_id = chm.material_id)
   WHERE chm.curso_id = ? 
   AND t.tipo_nombre = 'LIBRO' ";


  $ejemplo_by_curso = "SELECT m.material_id, m.titulo , m.descripcion,
   m.fecha_de_publicacion , CONCAT(a.nombre, a.appellido) as nombre_autor,
    f.fuente_nombre, f.fuente_url
    FROM material m 
    JOIN autor a ON (m.autor_id = a.autor_id) 
    JOIN fuente f ON (m.fuente_id = f.fuente_id)
    JOIN tipo t ON (m.tipo_id = t.tipo_id) 
    JOIN curso_has_material chm ON (m.material_id = chm.material_id)
    WHERE chm.curso_id = ? 
    AND t.tipo_nombre = 'EJEMPLO' ";

  $ejemplo_by_curso_id = "SELECT i.imagen_url 
   FROM imagen i 
   JOIN material m ON (i.material_id = m.material_id 
   JOIN curso_has_material chm ON (m.material_id = chm.material_id)
   WHERE chm.curso_id = ? ";
}