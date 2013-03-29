<?php foreach ($usuario as $u): ?>

<h2> <?php echo $u['title'] ?> </h2>

<div id = "main">
				<?php echo $u['text']; ?>
</div>
 <p><a href="news/<?php echo $u['usuario']->nombre ?>">View article</a></p>

<?php endforeach ?>