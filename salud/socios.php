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
				</nav>
				<nav id="consulta" class="grid_4">
				<a href="consultas.php">Consultas</a>
				</nav>
				<nav id="promociones" class="grid_4">
				<a href="promociones.php">Promociones</a>
				</nav>
	</div>
	
	<div id="contenedor_derecho" class="grid_20">
	
		<div id="socios" class="grid_10 alpha">
		
		<p align="center">
		<br>
		<br>
		<br>
		
		<b>Doctores Asociados</b>
		<br>
		<br>
		<a href="doctores.php"><img id="fotos" src="img/doctores.jpg"/></a></p>
		<br>
		</div>
	
		
		
		
		<div id="socios" class="grid_10 omega">
		<br>
		<p align="center">
		<br>
		<br>
		<br>
		
		<b>Empresas Asociadas</b>
		<br>
		<br>
		<br>
		<br>
		<a href="empresas.php"><img id="fotos" src="img/empresas.jpg"/></a></p>
		<br>
		</div>
		
		
	
	
	<div class="clear"></div>
	</div>
	
	<div class="clear"></div>
	<?php include('footer.php'); ?>
	
</div>
</body>
</html>
