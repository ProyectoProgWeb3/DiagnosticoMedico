<html>
<?php include('metadatos.php');?>
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
	
		<?php
		include_once("SociosCollector.php");

		$id =1;

		$SociosCollectorObj = new SociosCollector();

		foreach ($SociosCollectorObj->showsociPagina() as $c){
		  echo "<div>";

		  echo '<img id="logos" src='.$c->getFoto().'></img>';
		  echo $c->getIdsocios() . "   " .$c->getNombre();                                    
		  echo "</div>"; 
		}


		?>

		
	
	
	<div class="clear"></div>
	</div>
	
	<div class="clear"></div>
	<?php include('footer.php'); ?>
	
</div>
</body>
</html>
