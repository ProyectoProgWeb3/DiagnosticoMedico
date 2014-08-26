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
		<div class="grid_5 alpha">
		<p align="center"><b>Lista de Doctores Conectados</b></p>
		
		<ul>	
                <li>Doctor Goku</li>
                <li>Doctor House</li>
                <li>Doctor Mengeche</li>
                <li>Doctor Octoppus</li>
		</ul>	
		<br>
		<br>
		
		</div>
		
	
		<div class="grid_10 alpha">
		<p align="center"><b>Area de Chat</b></p>
		
			<p align="left"><b>- Stuart Little:</b>  Doctor Goku me podria decir que<br>
			contienen las semillas del hermitanio?<br>
			<br>
			<b>- Doctor Goku:</b>  Pues contienen una mezcla de Ginseg, Marihuana y Red Bull.<br>
			<br>
			</p>
			<p align="left"><b>- Peter Parker:</b>  Doctor House necesito ayuda!<br>
			no se que me esta pasando!,<br>
			solo pienso en el duende verde!<br>
			<br>
			<b>- Doctor House:</b>  Lo siento mi estimado, <br>
			pero lo que te pasa, ni yo lo puedo diagnosticar.<br>
			
			</p>
			
		<br>
		<br>
		
		</div>
		
		
		<div class="grid_5 alpha">
		<p align="center"><b>Lista de Usuarios Conectados</b></p>
		
		<ul>	
                <li>Krillin</li>
                <li>Stuart Little</li>
                <li>Peter Parker</li>
                <li>Bruce Banner</li>
		</ul>	
		<br>
		<br>
		
		</div>
		<div class="grid_20 alpha">
		<br>
		<p align="center"><b>Area de Entrada de texto</b></p>
		<br>
		
		
		</div>
	
	<div class="clear"></div>
	</div>
	
	<div class="clear"></div>
	<?php include('footer.php'); ?>
	
</div>
</body>
</html>
