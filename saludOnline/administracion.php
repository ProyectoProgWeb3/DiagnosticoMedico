<html>
<?php include('metadatos.php');?>
<?php
include_once("EmpresasCollector.php");
$EmpresasCollectorObj = new EmpresasCollector();
?>
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
	
	
	<div id="contenedor_derecho" class="grid_20">
	<table>
		<tr>
		<td><a href="administracionEmpresas.php">Administracion de Empresas</a></td>
		</tr>
		<tr>
		<td><a href="administracionMedicos.php">Administracion de Medicos</a></td>
		</tr>
		<tr>
		<td>Administracion de Pacientes</td>
		</tr>
	</table>
	<div class="clear"></div>
	</div>
	
	<div class="clear"></div>
	<?php include('footer.php'); ?>
	
</div>
</body>
</html>
