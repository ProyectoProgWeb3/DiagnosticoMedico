<?php
echo 
<<<HERE
<div class="wrap-nav">
<div class="menu" >
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

HERE;

?>
