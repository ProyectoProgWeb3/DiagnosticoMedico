
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Salud</title>

<!-- xxxxxxxxxxxxxxxxxx   para menu desplegable  xxxxxxxxxxxxxxxxxxxxxxxx -->
<script language="javascript" src="Consultorio/jquery-1.3.min.js"></script>
<script src="SpryAssets/SpryEffects.js" type="text/javascript"></script>
<script type="text/javascript">
function mainmenu(){
$(" #nav ul ").css({display: "none"});
$(" #nav li").hover(function(){
	$(this).find('ul:first:hidden').css({visibility: "visible",display: "none"}).slideDown(400);
	},function(){
		$(this).find('ul:first').slideUp(400);
	});
}
$(document).ready(function(){
	mainmenu();
});
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}
function MM_effectAppearFade(targetElement, duration, from, to, toggle)
{
	Spry.Effect.DoFade(targetElement, {duration: duration, from: from, to: to, toggle: toggle});
}
</script>
<!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxx llamar hoja de estilo del menu xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
<link href="Consultorio/style.css" rel="stylesheet" type="text/css">

<!-- Start WOWSlider.com HEAD section -->
	<link rel="stylesheet" type="text/css" href="engine1//style.css" media="screen" />
	<script type="text/javascript" src="engine1//jquery.js"></script>
<!-- End WOWSlider.com HEAD section -->





<!-- Start WOWSlider.com HEAD section -->
	<link rel="stylesheet" type="text/css" href="engine2//style.css" media="screen" />
	<script type="text
/javascript" src="engine2//jquery.js"></script>
<!-- End WOWSlider.com HEAD section -->



<!-- Start WOWSlider.com HEAD section -->
	<link rel="stylesheet" type="text/css" href="engine3//style.css" media="screen" />


<?php include('metadatos.php');?>

<body>


<div class="container_24">
	<?php include('header.php'); ?>
	<div class="clear"></div>
	<?php include('menu.php'); ?>
	<div class="clear"></div>
<?php include('style.css'); ?>
	<div class="clear"></div>
	
	
	<div id="contenedor_izquierdo" class="grid_4">
				<nav id="iniciar_sesion" class="grid_4">
				<a href="iniciar.php">Iniciar Sesion</a>
				</nav>
				<nav id="consulta" class="grid_4">
				<a href="consultas.php">Consulta</a>
				</nav>
				<nav id="promociones" class="grid_4">
				<a href="promociones.php">Promociones</a>
				</nav>
				<nav id="Registrese" class="grid_4">
				<a href="registro.php">Registrese</a>
				</nav>
	</div>
	
	<div id="contenedor_derecho" class="grid_20">
	<?php include('banner.php'); ?> 
	<div class="clear"></div>
	</div>

	<div class="clear"></div>
	<?php include('footer.php'); ?>
	
</div>
</body>
</html>
