<html>
<?php include('metadatos.php');?>
<script type="text/javascript">
    function comprobar() {
        var mirarLargo="no";
        var mirarIgual="no";
        var contra1 = document.formulario.clavehash
        var contra2 = document.formulario.clavehash2
        var aviso = document.getElementById("aviso");
        aviso.innerHTML = ""
        if (contra1.value.length >= 6) {
            mirarLargo = "si"
        }
        else {
            texto = "La contraseña debe tener más de 6 caracteres.<br/>"
            aviso.innerHTML += texto
        }
        if (contra1.value == contra2.value) {
            mirarIgual = "si"
        }
        else {
            texto = "La contraseña y su repetición deben ser iguales.<br/>"
            aviso.innerHTML += texto
        }
        if (mirarLargo == "no" || mirarIgual == "no") {
            return false
        }
    }
    function restaurar() {
        var aviso = document.getElementById("aviso");
        aviso.innerHTML = ""
    }
</script>
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
		
		
		
		<div class="contenedor_registro">
			<div class="row block05" align="center">
			
				<div class="titulo"><h2>Registro de Usuario</h2></div>
				<div class="col-2-3">
					<div class="contenedor_registro">
						<article>
                            <form name="formulario" action="insertar.php" method="post"  onsubmit="return comprobar()">


                                <div class="nuevo_registro">
                                    <h3>Datos Personales</h3>

                                    <div class="leftCol">
									<table>
										<tr>
                                        <td><label for="usuarioid">Nombre de Usuario</label></td>
                                        <td><input tabindex="1" type="text" name="usuarioid" id="usuarioid" class="txtBox" value="" /></td>
                                        
										</tr>
										<tr>
                                        <td><label for="clavehash">Contrase&ntilde;a</label></td>
                                        <td><input tabindex="2" type="password" name="clavehash" id="clavehash" class="txtBox" value="" /></td>
                                        
										</tr>
										<tr>
                                        <td><label for="clavehash2">Repetir Contrase&ntilde;a</label></td>
                                        <td><input tabindex="3" type="password" name="clavehash2" id="clavehash2" class="txtBox" value="" /></td>
                                        
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
                                        <td><label for="fechanac" style="padding-right: 0; width: 140px" >Fecha de nacimiento</label></td>
                                        <td><input tabindex="6" type="date" name="fechanac" min="1913-01-01" max="2014-07-07"/></td>
                                        
										</tr>
										<tr>
                                        <td><label for="sexo">Genero</label><br></td>
                                        <td><input tabindex="7" type="radio" name="sexo" value="m">Masculino<br></td>
                                        <td><input tabindex="7" type="radio" name="sexo" value="f">Femenino</td>
                                        
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
                            <p id="aviso"></p>
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