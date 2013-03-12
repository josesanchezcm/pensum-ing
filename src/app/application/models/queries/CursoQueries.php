<?php

class CursoQueries{

  $cursos_ganados_by_user_id = "SELECT c.curso_id, c.codigo, c.curso_nombre, c.creditos
   FROM  curso c
   JOIN usuario_has_curso uc ON (c.curso_id = uc.curso_id)
   WHERE uc.aprobado = 1
   AND  uc.usuario_id = ? ";

  $cursos_by_user_id = "SELECT c.curso_id, c.codigo, c.curso_nombre, c.creditos
  FROM  curso c
  JOIN usuario_has_curso uc ON (c.curso_id = uc.curso_id)
  WHERE uc.usuario_id = ? ";

  $cursos_by_id =  "SELECT c.curso_id, c.codigo, c.curso_nombre, c.creditos,
   c.descripcion FROM curso c
   WHERE c.curso_id = ? ";

  $prerrequisitos = "SELECT curso.nombre_nombre, curso.codigo
  FROM  curso ,
  ( SELECT curso_prerrequisito_id as p
    FROM curso
    WHERE curso_id = ? ) cp
  WHERE cp.p = curso.curso_id ;" ;

  $postrequisitos = "SELECT curso.nombre_nombre, curso.codigo 
   FROM curso,
   ( SELECT curso_prerrequisito_id as p 
     FROM curso WHERE curso_id = ? ) cp 
    WHERE cp.p = curso.curso_id " ;

  $creditos_aprobados =  "SELECT SUM(creditos) 
   FROM cursos 
   JOIN usuario_has_curso ON (curso.curso_id = usuario_has_curso.curso_id) 
   WHERE usuario_has_curso.usuario_id = ? " ;
}