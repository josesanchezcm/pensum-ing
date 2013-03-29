
<H2> Material de Apoyo </H2>

<?php if ($libros->num_rows > 0): ?>
    <h3> Libros </h3>
       <?php foreach ($libros->result() as $libro) : ?>
       <br>
       <b> Titulo: </b><?php echo $libro->titulo ?><br>
       <b> Descripcion: </b><?php echo $libro->descripcion ?><br>
       <b> Fecha de publicacion </b> <?php echo $libro->fecha_publicacion ?></br>
       <b> Autor </b><?php echo $libro->nombre_autor ?> </br>
       <b> Fuente </b><?php echo $libro->fuente_url ?><br>
       <?php endforeach  ?>
       <?php endif; ?>

<?php if ($ejemplos->num_rows >0): ?>
   <h3> Ejemplos </h3>
      <?php foreach ($ejemplos->result() as $ejemplo) : ?>
      <br>
      <b> Titulo: </b><?php echo $ejemplo->titulo ?></br>
      <b> Descripcion </b><?php echo $ejemplo->descripcion ?></br>
      <b> Fecha de Publicacion </b><?php $ejemplo->fecha_publicacion ?></br>
      <b> Autor: </b> <?php echo $ejemplo->nombre_autor?> </br>
      <b> Fuente </b> <?php echo $ejemplo->fuente_url ?></br>
      <?php endforeach ?>
      <?php endif; ?>