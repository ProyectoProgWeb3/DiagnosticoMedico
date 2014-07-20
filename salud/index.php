<html>
<?php include('metadatos.php');?>
<body>
<div class="container_24">
	<?php include('header.php'); ?>
	<div class="clear"></div>
	<?php include('menu.php'); ?>
	<div class="clear"></div>
	
	<div id="contenedor_izquierdo" class="grid_4">
				<nav id="iniciar_sesion" class="grid_4">
				<a href="iniciar.php">Iniciar Sesion</a>
				&nbsp;
				<a href="registro.php">Registro</a>
				</nav>
				<nav id="consulta" class="grid_4">
				<a href="consultas.php">Consultas</a>
				</nav>
				<nav id="promociones" class="grid_4">
				<a href="promociones.php">Promociones</a>
				</nav>
	</div>
	
	<div id="contenedor_derecho" class="grid_20">
	<?php include('banner.php'); ?> 
	<div class="clear"></div>
	</div>
	
	<div class="clear"></div>
	<?php include('footer.php'); ?>
	
</div>
</body>
</html>
