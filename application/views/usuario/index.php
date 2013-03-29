
<h4> <?php echo $title;
$this->load->helper('url'); ?> </h4>
<a href="<?php echo site_url('/carrera/index/1'); ?>"> Carrera </a>
<br> 
<b> Nombre: </b> <?php echo $usuario->nombre ?>
<br>
<b> Apellido:</b> <?php echo $usuario->apellido ?>
<br>
<b> Correo:</b> <?php echo $usuario->correo ?>
<br><br>
<Carrera>: 

<br>
<b> Cursos Aprobados </b>
<?php if ($cursos_usuario->num_rows() > 0 ): ?>
   <?php foreach ($cursos_usuario->result() as $row): ?>
       <br>
       <?php  echo $row->curso_id.' '.$row->curso_nombre  ?>
       
   <?php endforeach ?>
<?php endif; ?>
<br>
<b> Total Creditos: </b> <?php echo $creditos->row()->total; ?>