<?php
// se incluye el archivo de las clases que contiene el metodo de login
require_once( "clases.php" );

// creamos un objeto instanciando la clase Clase
$objClases = new Clases();

// en la variable $respuesta guardamos lo que nos devuelva la consulta
$respuesta = $objClases->login( $_POST["nombUsuario"], $_POST["pass"]);

// realizamos una condicion, si $respuesta es 1 existe, de lo contrario no esta en la base de datos
if( $respuesta == 1 ){

 //echo "Hola ".$_SESSION['sesion_usuario'];
	header("Location:user_page.php");

}else{

 echo "No existes en la base de datos :(";

}

?>