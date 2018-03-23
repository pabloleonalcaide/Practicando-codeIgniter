	<h2> Lista con enlaces </h2>
	<ul>
	<?php foreach ($links as $link): ?>
		<li><a href="<?php echo $link['ruta']; ?>"> <?php echo $link['nombre'] ?></a></li>
	<?php endforeach; ?>
	</ul>
