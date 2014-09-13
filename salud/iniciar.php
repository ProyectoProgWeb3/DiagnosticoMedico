<html>
<?php include('metadatos.php');?>
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
	<div id="contenedor_derecho" class="grid_6">
		<div>
		   <br>
		   <br>
		    <label>Acceso a Pacientes </label>
		    <p></p> 
		    <form method="post" action="logueo.php" autocomplete="off">
		    Usuario:<br>
		    <input type="text" name="nombUsuario" id="nombUsuario" title="Ingresa tu usuario"><br><br>
		    Contraseña:<br>
		    <input type="password" name="pass" id="pass" title="Ingresa tu contraseña"><br><br>
		    <input type="submit" name="submit" value="Ingresar">
		</form>
	   </div>
	</div>
	<DIV STYLE="position:absolute; top:200px; left:400px; width:500px; height:405px; background-image: url(../salud/img/pareja.jpg)">
		<br>
		<label>¡Queremos estar más cerca de tí!</label>
		</br>
		Aquí podrás realizar todas tus consultas de una manera ágil, directa y sencilla; además de tener acceso a todos los servicios que creamos pensando en tu comodidad!
		<h2>Bienvenido a <h2>
		<h2>tu Mundo</h2> 
		<h2>Salud 24/7</h2>
	</DIV>
	<div class="clear"></div>
	
	<div class="clear"></div>
	<?php include('footer.php'); ?>
	
</div>
</body>
</html>

