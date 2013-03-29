<?php

class CursoQueries{

  public  $cursos_ganados_by_user_id = "SELECT c.curso_id, c.codigo, c.curso_nombre, c.creditos
   FROM  curso c
   JOIN usuario_has_curso uc ON (c.curso_id = uc.curso_id)
   WHERE uc.aprobado = 1
   AND  uc.usuario_id = ? ";

  public $cursos_by_user_id = "SELECT c.curso_id, c.codigo, c.curso_nombre, c.creditos, c
  FROM  curso c
  JOIN usuario_has_curso uc ON (c.curso_id = uc.curso_id)
  WHERE uc.usuario_id = ? ";

  public $cursos_by_id =  "SELECT c.curso_id, c.codigo, c.curso_nombre, c.creditos,
   c.descripcion FROM curso c
   WHERE c.curso_id = ? ";

  public $prerrequisitos = "SELECT curso.curso_nombre, curso.codigo
  FROM  curso ,
  ( SELECT curso_prerrequisito_id as p
    FROM curso
    WHERE curso_id = ? ) cp
  WHERE cp.p = curso.curso_id ;" ;

  public $postrequisitos = "SELECT curso.curso_nombre, curso.codigo 
   FROM curso,
   ( SELECT curso_postrequisito_id as p 
     FROM curso WHERE curso_id = ? ) cp 
    WHERE cp.p = curso.curso_id " ;

  public $creditos_aprobados =  "SELECT SUM(creditos) as total
   FROM curso
   JOIN usuario_has_curso ON (curso.curso_id = usuario_has_curso.curso_id) 
   WHERE usuario_has_curso.usuario_id = ? " ;


  public $cursos_by_carrera = "SELECT c.curso_id, c.codigo, c.curso_nombre, 
    c.creditos
    FROM curso c 
    JOIN carrera_has_curso chc ON (c.curso_id = chc.curso_id) 
    AND chc.carrera_id = ?";
}