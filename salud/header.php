<html>
<head>
<div id="cabecera" class="grid_24">
	<nav id="menuTop" class="grid_24">
	<p> <a href="https://www.facebook.com/saludonline247"><img id="sociales" src="img/facebookicon.png"/></a><a href="https://plus.google.com/up/search/"><img id="sociales" src="img/googleicon.png"/></a><a href="https://twitter.com/"><img id="sociales" src="img/twittericon.png"/></a></p>
	<a href="registrar.php"><img src="img/registro.jpg"/></a> 
	    <?php
        session_start();
        if (isset($_SESSION["sesion_usuario"])) {
   		 echo '<a href="cerrar_sesion.php">Cerrar Sesion</a>';
    }else{
   		 echo '<a href="iniciar.php">Iniciar Sesion</a>';
  }
?>
</nav>
</div>
</head>
</html>