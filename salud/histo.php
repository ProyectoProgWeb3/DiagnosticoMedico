<html>
<?php 
include('metadatos.php');

?>
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf8" />
</head>
<body>
<div class="container_24">
	<?php include('header.php'); ?>
	<div class="clear"></div>
	<?php include('menu.php'); ?>
	<div class="clear"></div>
	
	<div id="contenedor_izquierdo" class="grid_4">
                <a href="registro.php"><nav id="iniciar_sesion" class="btn btn-lg btn-primary">
				Registro
				</nav></a>
                <a href="consultas.php"><nav id="consulta" class="btn btn-lg btn-success">
				Consultas
				</nav></a>
                <a href="promociones.php"><nav id="promociones" class="btn btn-lg btn-warning">
				Promociones
				</nav></a>
	</div>
	<div id="contenedor_derecho" class="grid_10" align: center>
		<div >
		   <br>
		   <br>
		    <label>Historia Clinica </label>
		    <p></p>  
		    <?php 
		    session_start();
			echo 'Hola Bienvenido, '.$_SESSION['sesion_usuario'];
			?>
	   </div>
	</div>
	<div></div>
	<div class="clear"></div>
	
	<div class="clear"></div>
	<?php include('footer.php'); ?>
	
</div>
</body>
</html>

