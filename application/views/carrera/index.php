<?php $carrera_instance = $carrera->row() ?>

    <b> Carrera: </b> <?php echo $carrera_instance->carrera_nombre ?><br>
    <b> URL: </b> <a href = "<?php echo $carrera_instance->pensum_url ?>">
    Pensum</a><br>
    <b> Escuela: </b> <?php echo $carrera_instance->escuela_nombre ?><br>
    <b> Direccion Escuela: </b> <?php echo $carrera_instance->direccion ?>
    <br>
    <?php if ($posgrados->num_rows > 0): ?>
    <b> Posgrados </b>
    <?php foreach ($posgrados->result() as $posgrado ): ?>
	<br>
	 <?php echo $posgrado->posgrado_nombre  ?>
       <?php endforeach ?>
       <?php endif; ?>
<?php if ($cursos->num_rows > 0 ) : ?>
    <br>
    <b>Cursos</b><br>
       <?php foreach ($cursos->result() as $curso ): ?>
<a href = "<?php $this->load->helper('url'); echo site_url('/curso/index/'.$curso->curso_id); ?>">
       <?php echo $curso->curso_nombre ?> </a> </br>
       <?php endforeach?>
       <?php endif;?>