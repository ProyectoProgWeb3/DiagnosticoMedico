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
                </nav>
                <nav id="consulta" class="grid_4">
                <a href="consultas.php">Consultas</a>
                </nav>
                <nav id="promociones" class="grid_4">
                <a href="promociones.php">Promociones</a>
                </nav>
            </div>
            <section id="content">
	<div class="wrap-content zerogrid">
	<div class="row block05">
			<div class="title"><span>REGISTRO</span></div>
			<div class="col-2-3">
				<div class="wrap-col">
					<article>
						<div class="reg">
							Campos Requeridos *
							<form action="registro.php" method="post" name="contact">

  
  <div class="contactForm nuevo_paciente">
    <h3>Datos Personales</h3>

    <div class="leftCol">
      <label for="nombre">Nombre completo</label>
      <input tabindex="1" type="text" name="nombre" id="nombre" class="txtBox" value="" />
      <br class="clear" />
    </div>    
    <div class="clear"></div>

    <div class="leftCol">
      <label for="direccion">Dirección</label>
      <input tabindex="2" type="text" name="direccion" id="direccion" class="txtBox" value="" />
      <br class="clear" />
      <label for="poblacion">Ciudad</label>
      <input tabindex="4" type="text" name="ciudad" id="poblacion" class="txtBox" value="" />
      <br class="clear" />
      <label for="email">E-mail</label>
      <input tabindex="6" type="text" name="email" id="email" class="txtBox" value="" />
      <br class="clear" />
      <label for="nacimiento" style="padding-right: 0; width: 140px" >Fecha de nacimiento</label>
      <input tabindex="8" type="text" name="nacimiento" id="nacimiento" class="txtBox" value="" />
      <br class="clear" />
            <label for="descripcion" style="width: auto">Describa con sus propias palabras su problema ortodóncico</label>
      <br class="clear" />
      <textarea tabindex="10" name="descripcion" id="descripcion" cols="10" rows="10"></textarea>
      <br class="clear" />
    </div>


    
  </div>
 <input type="submit" class="button" value="Enviar" name="submit">
</form>
						</div>
					</article>
				</div>
			</div>
			<div class="col-1-3">
				<div class="wrap-col">
					<div class="box">
						<div class="heading"><h2>Registrece</h2></div>
						<div class="content">
							<img src="images/registro.png"/>
							<p></p>
							
						</div>
					</div>
				</div>
			</div>
		</div>		
</section>
        <div class="clear"></div>
        <?php include('footer.php'); ?>
        </div>
    </body>
</html>
