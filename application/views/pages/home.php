<p> Hi! This is the Home Page! </p>
<?php echo anchor('lista','Lista');?> Lista de elementos cargados desde el modelo<br>
<?php echo anchor('news','Noticias');?> Listado de noticias <br>
<?php echo anchor('news/create','Crear_noticia');?>Añadir noticia a la bd <br>
<?php 
	$attrs = array(
        'width'       => 800,
        'height'      => 600,
        'scrollbars'  => 'yes',
        'status'      => 'yes',
        'resizable'   => 'yes',
        'screenx'     => 0,
        'screeny'     => 0,
        'window_name' => '_blank'
);

echo anchor_popup('news/create','popup!',$attrs); ?>
