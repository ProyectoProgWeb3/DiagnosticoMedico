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
		<tr><td><a href="formularioEmpreInsert.php">Nuevo</a></td></tr>
		<?php
		foreach ($EmpresasCollectorObj->readEmpre() as $c){
		  echo "<tr>";
		  echo "<td>".$c->getIdempresas() ."&nbsp</td>";
		  echo "<td>".$c->getNombre()."&nbsp</td>";
		  echo "<td><a href='formularioEmpreEditar.php?id=".$c->getIdempresas()."'>&nbsp editar &nbsp</a></td>";
		  echo "<td><a href='eliminarEmpre.php?id=".$c->getIdempresas()."'>eliminar</a></td>"; 
		  echo "</tr>"; 
		}
		?>
	</table>
	<a href="administracion.php">Volver a Administracion</a>
	<div class="clear"></div>
	</div>
	
	<div class="clear"></div>
	<?php include('footer.php'); ?>
	
</div>
</body>
</html>
