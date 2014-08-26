<?php

echo <<< HERE
<nav id="menu" class="grid_24">
	<ul>	
		<li><a href="index.php">Inicio</a></li>
		<li><a href="noticias.php">Noticias</a></li>
		<li><a href="consultas.php">Consultas</a></li>
		<li><a href="promociones.php">Promociones</a></li>
		<li><a href="socios.php">Socios</a></li>
		<li><a href="empresa.php">La Empresa</a></li>
	</ul>	
</nav>
<!-- xxxxxxxxxxxxxxxxxx   para menu desplegable  xxxxxxxxxxxxxxxxxxxxxxxx -->
<script language="javascript" src="M_S/CSS_Menu/jquery-1.3.min.js"></script>
<script src="SpryAssets/SpryEffects.js" type="text/javascript"></script><script type="text/javascript">
function mainmenu(){
$(" #nav1 ul ").css({display: "none"});
$(" #nav1 li").hover(function(){
	$(this).find('ul:first:hidden').css({visibility: "visible",display: "none"}).slideDown(400);
	},function(){
		$(this).find('ul:first').slideUp(400);
	});
}
$(document).ready(function(){
	mainmenu();
});xxxxx -->

</script>
<link href="M_S/CSS_Menu/style.css" rel="stylesheet" type="text/css">

<!-- xxxxxxxxxxxxxxxxxx         menu desplegable  xxxxxxxxxxxxxxxxxxxxxxxx -->

HERE;

?>
