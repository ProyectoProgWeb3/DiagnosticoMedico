<html>
<?php include('metadatos.php');?>
<?php
include_once("DoctoresCollector.php");
$DoctoresCollectorObj = new DoctoresCollector();
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
		<tr><td><a href="formularioDocInsert.php">Nuevo</a></td></tr>
		<?php
		foreach ($DoctoresCollectorObj->readDoc() as $c){
		  echo "<tr>";
		  echo "<td>".$c->getIdmedico() ."&nbsp</td>";
		  echo "<td>".$c->getNombre()."&nbsp</td>";
		  echo "<td>".$c->getEspecialidad()."&nbsp</td>";
		  echo "<td><a href='formularioDocEditar.php?id=".$c->getIdmedico()."'>&nbsp editar &nbsp</a></td>";
		  echo "<td><a href='eliminarDoc.php?id=".$c->getIdmedico()."'>eliminar</a></td>"; 
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
