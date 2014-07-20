<html>
<?php include('metadatos.php');?>
<body>
<div class="container_24">
	<?php include('header.php'); ?>
	<div class="clear"></div>
	<?php include('menu.php'); ?>
	<div class="clear"></div>
	
	<div id="contenedor_izquierdo" class="grid_4">
				<nav id="iniciar_sesion" class="grid_4">
				<a href="iniciar.php">Iniciar Sesion</a>
				&nbsp;
				<a href="registro.php">Registro</a>
				</nav>
				<nav id="consulta" class="grid_4">
				<a href="consultas.php">Consultas</a>
				</nav>
				<nav id="promociones" class="grid_4">
				<a href="promociones.php">Promociones</a>
				</nav>
	</div>
	
	<div id="contenedor_derecho" class="grid_20">
		
		
		
		<div class="wrap-content zerogrid">
			<div class="row block05" align="center">
				<div class="title"><h2>Registro de Usuario</h2></div>
				<div class="col-2-3">
					<div class="wrap-col">
						<article>
							<div class="reg">
								
					
								<form action="registrado.php" method="post" name="contact">

					  
									<div class="contactForm nuevo_paciente">
										<h3>Datos Personales</h3>

										<div class="leftCol">
										<label for="usuario">Nombre de Usuario</label>
											<input tabindex="1" type="text" name="usuario" id="usuario" class="txtBox" value="" />
											<br class="clear" />
											<br> 										   
											<label for="contrasena">Contrasena</label>
											<input tabindex="2" type="text" name="contrasena" id="contrasena" class="txtBox" value="" />
											<br class="clear" />
											<br>
											<label for="nombres">Nombres</label>
											<input tabindex="1" type="text" name="nombres" id="nombres" class="txtBox" value="" />
											<br class="clear" />
											<br> 										   
											<label for="apellidos">Apellidos</label>
											<input tabindex="2" type="text" name="apellidos" id="apellidos" class="txtBox" value="" />
											<br class="clear" />
											<br>
											<label for="nacimiento" style="padding-right: 0; width: 140px" >Fecha de nacimiento</label>
											<input tabindex="8" type="text" name="nacimiento" id="nacimiento" class="txtBox" value="" />
											<br class="clear" />
											<br>
											<label for="genero">Genero</label>
											<input tabindex="4" type="text" name="genero" id="genero" class="txtBox" value="" />
											<br class="clear" />
											<br>
											<label for="email">E-mail</label>
											<input tabindex="6" type="text" name="email" id="email" class="txtBox" value="" />
											<br class="clear" />
											<br>
											
										</div> 
									</div>
									<p align="center"><input type="submit" class="button" value="Enviar" name="submit"></p>
								</form>
								
								
							</div>
						</article>
					</div>
				</div>
						
			</div>		
		
	
			
		</div>
	
	
	</div>
	
	<div class="clear"></div>
	<?php include('footer.php'); ?>
	
</div>
</body>
</html>
