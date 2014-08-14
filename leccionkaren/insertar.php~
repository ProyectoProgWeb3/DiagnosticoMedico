<?php
include("database.php");

if (isset($_POST['id']) && !empty($_POST['id']) &&
	(isset($_POST['nombre']) && !empty($_POST['nombre']) &&
	isset($_POST['parcial']) && !empty($_POST['parcial']) &&
	isset($_POST['final']) && !empty($_POST['final']))&&
	isset($_POST['mejoramiento']) && !empty($_POST['mejoramiento']))
	{
		$conexion = mysql_connect($host,$user,$pw) or die("Error en la conexion");
		mysql_select_db($leccion,$conexion) or die("No se conecto con la base de datos");
		
		mysql_query("insert into Insertar (parcial,final,mejoramiento) values ('$_POST[parcial]','$_POST[final]','$_POST[mejoramiento]')",$conexion);
		echo("EXITO");
	}else{
		echo("PROBLEMAS AL MOSTRAR");	
	}
?>
