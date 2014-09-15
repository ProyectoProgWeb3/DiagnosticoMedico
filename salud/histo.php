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
		    <label>Detalle de consultas  y tratamientos del Paciente </label>
		    <p></p>  
		    <?php 
		    session_start();
			echo 'Hola Bienvenido  , '.$_SESSION['sesion_usuario'];
			
			echo 'Codigo de Paciente '.$_SESSION['sesion_id'];
			
			include_once("HistoriaCollector.php");
			$HistoriaCollectorObj = new HistoriaCollector();
			foreach ($HistoriaCollectorObj->showDemos() as $c)
			{
  			echo "<div>";
  			echo "<label>Numero de Historia Clinica: </label>";
  			echo  $c->getcodhistoriaclinica();  			
  			echo "</div>"; 	
  			}	

  			echo "<label>Detalle de Consultas y tratamientos   </label>";
  			
  			  $conexion = mysqli_connect(
			  'localhost',
			  'root',
			  'root',
			  'proyecto'
			);

			if ($conexion == FALSE){
			  echo('Error en la conexión.');
			  exit();
			}

			$resultado = mysqli_query($conexion,'SELECT * FROM tratamiento where historia='.$_SESSION['sesion_id']);

			if ($resultado == FALSE){
			  echo('Error en la consulta.');
			  mysqli_close($conexion);
			  exit();
			}

			?>

			<table border="2">
			  <tr>
			    <th>Codigo</th>
			    <th>Serie</th>
			    <th>Fecha</th>
			    <th>Receta Medica</th>
			    <th width="200"> Cometario del Doctor</th>
			  </tr>

			<?php

			while($fila = mysqli_fetch_row($resultado)){
			  printf('<tr>');
			  printf(
			    "<td>%u</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td>",
			    $fila[0], $fila[1], $fila[2], $fila[3], $fila[4]
			  );
			  printf('</tr>');
			}

			?>

			</table>

			<?php

			mysqli_free_result($resultado);
			mysqli_close($conexion);

			
			?>
	   </div>
	</div>
	
	<div class="clear"></div>
	
	<div class="clear"></div>
	<?php include('footer.php'); ?>
	
</div>
</body>
</html>