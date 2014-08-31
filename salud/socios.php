<html>
<?php include('metadatos.php');?>
<body>
<div class="container_24">
	<?php include('header.php'); ?>
	<div class="clear"></div>
	<?php include('menu.php'); ?>
	<div class="clear"></div>

    <div id="contenedor_izquierdo" class="grid_4">
        <a href="registrar.php"><nav id="iniciar_sesion" class="btn btn-lg btn-primary">
                Registro
            </nav></a>
        <a href="consultas.php"><nav id="consulta" class="btn btn-lg btn-success">
                Consultas
            </nav></a>
        <a href="promociones.php"><nav id="promociones" class="btn btn-lg btn-warning">
                Promociones
            </nav></a>
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
		<a href="Especialidad.php"><img id="fotos" src="img/doctores.jpg"/></a></p>
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
