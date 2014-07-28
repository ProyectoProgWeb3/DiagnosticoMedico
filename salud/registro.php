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
		
		
		
		<div class="contenedor_registro">
			<div class="row block05" align="center">
			
				<div class="titulo"><h2>Registro de Usuario</h2></div>
				<div class="col-2-3">
					<div class="contenedor_registro">
						<article>
                            <form action="registrado.php" method="post" name="contact">


                                <div class="nuevo_registro">
                                    <h3>Datos Personales</h3>

                                    <div class="leftCol">
									<table>
										<tr>
                                        <td><label for="usuario">Nombre de Usuario</label></td>
                                        <td><input tabindex="1" type="text" name="usuario" id="usuario" class="txtBox" value="" /></td>
                                        
										</tr>
										<tr>
                                        <td><label for="contraseña">Contrase&ntilde;a</label></td>
                                        <td><input tabindex="2" type="text" name="contrasena" id="contrasena" class="txtBox" value="" /></td>
                                        
										</tr>
										<tr>
                                        <td><label for="contraseña">Repetir Contrase&ntilde;a</label></td>
                                        <td><input tabindex="3" type="text" name="contrasena" id="contrasena" class="txtBox" value="" /></td>
                                        
										</tr>
										<tr>
                                        <td><label for="nombres">Nombres</label></td>
                                        <td><input tabindex="4" type="text" name="nombres" id="nombres" class="txtBox" value="" /></td>
                                        
										</tr>
										<tr>
                                        <td><label for="apellidos">Apellidos</label></td>
                                        <td><input tabindex="5" type="text" name="apellidos" id="apellidos" class="txtBox" value="" /></td>
                                        
										</tr>
										<tr>
                                        <td><label for="nacimiento" style="padding-right: 0; width: 140px" >Fecha de nacimiento</label></td>
                                        <td><input tabindex="6" type="date" name="nacimiento" min="1913-01-01" max="2014-07-07"/></td>
                                        
										</tr>
										<tr>
                                        <td><label for="genero">Genero</label><br></td>
                                        <td><input tabindex="7" type="radio" name="genero" value="masculino">Masculino<br></td>
                                        <td><input tabindex="7" type="radio" name="genero" value="femenino">Femenino</td>
                                        
										</tr>
										<tr>
                                        <td><label for="email">E-mail</label></td>
                                        <td><input tabindex="8" type="email" name="email" id="email" class="txtBox" value="" /></td>
                                        
										</tr>

                                    </div>
									
									</table>
                                </div>
                                <p align="center"><input type="submit" class="button" value="Enviar" name="submit"></p>
                            </form>
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