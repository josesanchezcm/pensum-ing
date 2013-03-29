
<?php $curso_instance = $curso->row() ;
    $this->load->helper('url');
?>

<b> Curso: </b></h4> <?php echo $curso_instance->curso_nombre ?>
<br>
    <b> Codigo: </b> <?php echo $curso_instance->codigo ?>
<br>
    <b> Descripcion: </b> <?php echo $curso_instance->descripcion ?>

    <br> <b> Creditos: </b> <?php echo $curso_instance->creditos ?>

    <br> <b> Pre-requisitos: </b>
 
    <?php if ($prerrequisitos->num_rows > 0): ?>
	      <?php foreach ($prerrequisitos->result() as $pre): ?>
	      <br>
	      <?php echo $pre->codigo.' '.$pre->curso_nombre ?>
    <?php endforeach ?>
	      <?php endif; ?>
<br> <b> Post-requisitos: </b>
<?php if ($postrequisitos->num_rows > 0 ): ?>
			<?php foreach ($postrequisitos->result() as $post): ?>
              <br>
              <?php echo $post->codigo.' '.$post->curso_nombre ?>
    <?php endforeach ?>
			<?php endif; ?>
<br>
 <a href = "<?php echo site_url('/material/index/'. $curso_instance->curso_id); ?>" > 
 Material de Apoyo </a>