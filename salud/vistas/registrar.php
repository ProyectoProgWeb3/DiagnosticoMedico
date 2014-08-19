<html>
<?php include('metadatos.php');?>
<?php
// mostrar potencial de Errores / retroalimentación (del objeto de registro)
if (isset($registro)) {
    if ($registro->errores) {
        foreach ($registro->errores as $error) {
            echo $error;
        }
    }
    if ($registro->mensajes) {
        foreach ($registro->mensajes as $message) {
            echo $message;
        }
    }
}
?>
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
		
		
		
		<div class="contenedor_registro">
			<div class="row block05" align="center">
			
				<div class="titulo"><h2>Registro de Usuario</h2></div>
				<div class="col-2-3">
					<div class="contenedor_registro">
						<article>
                            <form method="post" action="registrar.php" name="registerform">


                                <div class="nuevo_registro">
                                    <h3>Datos Personales</h3>

                                    <div class="leftCol">
									<table>
										<tr>
                                        <td><label for="usuario">Nombre de Usuario</label></td>
                                        <td><input tabindex="1" type="text" pattern="[a-zA-Z0-9]{2,64}" name="usuarioId" id="usuarioId" class="txtBox" value="" required/></td>
                                        
										</tr>
										<tr>
                                        <td><label for="contraseña">Contrase&ntilde;a</label></td>
                                        <td><input tabindex="2" type="password" name="clave" id="clave" class="txtBox" value=""  pattern=".{6,}" required autocomplete="off" /></td>
                                        
										</tr>
										<tr>
                                        <td><label for="contraseña">Repetir Contrase&ntilde;a</label></td>
                                        <td><input tabindex="3" type="password" name="claveRepetir" id="claveRepetir" class="txtBox" value="" pattern=".{6,}" required autocomplete="off"/></td>
                                        
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
                                        <td><input tabindex="8" type="email" name="email" id="email" class="txtBox" value="" required/></td>
                                        
										</tr>

                                    </div>
									
									</table>
                                </div>
                                <p align="center"><input type="submit"  name="registro" value="Registrar" /></p>
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