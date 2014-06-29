
<?php
echo 
<<<HERE
<nav id="content">
<div id="logo"><a href="#"><img src="images/logo1.jpg"/></a></div>
	<div class="wrap-header zerogrid">
		<div class="social">
			<ul>
				<li><a href="#"><img src="images/social/facebook-icon.png"/></a></li>
				<li><a href="#"><img src="images/social/google-icon.png" /></a></li>
				<li><a href="#"><img src="images/social//twitter-bird-icon.png" /></a></li>
			</ul>
		</div>
		<nav>
			<div class="wrap-nav">
				<div class="menu">
					<ul>
						<li><a href="index1.htm">Inicio</a></li>
						<li><a href="historia.html">La Empresa</a></li>
						<li><a href="gallery.html">Galeria</a></li>
						<li> <a href="noticias.html">Noticias</a></li>
						<li> <a href="noticias.html">Promociones</a></li>
						<li><a href="contactos.html">Contactos</a></li>
					</ul>
				</div> 
				
				<div class="minimenu"><div>MENU</div>
					<select onchange="location=this.value">
						<option></option>
						<option value="index.html">Inicio</option>
						<option value="historia.html">La Empresa</option>
						<option value="gallery.html">Galeria</option>
						<option value="noticias.html">Noticias</option>
						<option value="noticias.html">Promociones</option>
						<option value="contactos.html">Contactos</option>
					</select>
				</div>
			</div>
		</nav>
	</div>
</header>

<section>
<article id = "col1">
<a href="#"><img src="images/conslt2.jpeg" width="250"" height="180"></a>
<img src="images/doctores_201401.jpg" alt="doc" width="250" height="180">
<img src="images/mision.jpg" width="250" height="180">

 </article>
</section>

<section><article id = "col2"> 
 
    </br>
    </br>
    </br>
<center><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="360" height="680" id="FLVPlayer"></center>
      <param name="movie" value="FLVPlayer_Progressive.swf" />
      <param name="quality" value="high">
      <param name="wmode" value="opaque">
      <param name="scale" value="noscale">
      <param name="salign" value="lt">
      <param name="FlashVars" value="&amp;MM_ComponentVersion=1&amp;skinName=Clear_Skin_1&amp;streamName=Prevenci%C3%B3ndeenfermedades&amp;autoPlay=false&amp;autoRewind=false" />
      <param name="swfversion" value="8,0,0,0">
      <!-- Esta etiqueta param indica a los usuarios de Flash Player 6.0 r65 o posterior que descarguen la versión más reciente de Flash Player. Elimínela si no desea que los usuarios vean el mensaje. -->
      <param name="expressinstall" value="Scripts/expressInstall.swf">
      <!-- La siguiente etiqueta object es para navegadores distintos de IE. Ocúltela a IE mediante IECC. -->
      <!--[if !IE]>-->
      <object type="application/x-shockwave-flash" data="FLVPlayer_Progressive.swf" width="480" height="360">

        <!--<![endif]-->
        <param name="quality" value="high">
        <param name="wmode" value="opaque">
        <param name="scale" value="noscale">
        <param name="salign" value="lt">
        <param name="FlashVars" value="&amp;MM_ComponentVersion=1&amp;skinName=Clear_Skin_1&amp;streamName=Prevenci%C3%B3ndeenfermedades&amp;autoPlay=false&amp;autoRewind=false" />
        <param name="swfversion" value="8,0,0,0">
        <param name="expressinstall" value="Scripts/expressInstall.swf">
        <!-- El navegador muestra el siguiente contenido alternativo para usuarios con Flash Player 6.0 o versiones anteriores. -->
        <div>
          <h4>El contenido de esta página requiere una versión más reciente de Adobe Flash Player.</h4>
          <p><a href="http://www.adobe.com/go/getflashplayer"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Obtener Adobe Flash Player" /></a></p>
        </div>
        <!--[if !IE]>-->
      </object>
      <!--<![endif]-->
    </object>
 </article>
</section>
<section>
<article id = "col3">
<a href="#"><img src="images/consult3.jpeg" width="250" height="180"></a>
<a href="#"><img  src="images/niños.jpeg" alt="iajs" width="250" height="180">
<img src="images/conl.jpeg" width="250" height="180">
 </article>
</section>
</nav>


HERE;

?>



