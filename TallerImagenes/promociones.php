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
	
		<br>
		<p><img id="empresas" src="img/aspirina.jpg"/ align="left">
		<b>50% de Descuento</b>
		<br>
		<br>
		Al comprar una caja de aspirina<br>
		recibe el 50% de Descuento!!
		</p>
		<br>
		
		<p align="right"><img id="empresas" src="img/lemonflu.jpg"/ align="right">
		<b>20% de Descuento</b>
		<br>
		<br>
		Recibe el 20% de Descuento<br>
		por la compra de una caja de LemonFlu!
		</p>
		<br>
		
		<p align="left"><img id="empresas" src="img/berocca.jpg"/ align="left">
		<b>30% de Descuento</b>
		<br>
		<br>
		Obten el 30% de Descuento<br>
		por la compra de una caja de Berocca Perfomance!
		</p>
		<br>
	
	
	<div class="clear"></div>
	</div>
	
	<div class="clear"></div>
	<?php include('footer.php'); ?>
	
</div>
</body>
</html>
