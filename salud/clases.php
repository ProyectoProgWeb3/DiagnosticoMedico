<?php
$pac="nuevo";
// se inlcuye el archivo de la conexion
require_once ("conexion.php");

class Clases
{
 public function login( $usuario, $pass ){

  // 
  $sql= "SELECT * FROM paciente WHERE login ='".$usuario."' AND passw ='".$pass."'";

  // se ejectua la consulta y se usa el metodo con de la clase class para la conexion, y se guarda en $res lo que devuelve la consulta  
  $res=mysql_query( $sql, Conectar::con() );

  // con mysql_num_rows verificamos que la cantidad de filas devuelve la consulta  
  
  if( mysql_num_rows( $res ) == 0 ){  

   // si es 0 filas, no hay usuario o password valido
   return 0;

  }else{

   // de lo contrario se guarda en un arrar lo que devuelve la consulta
   if( $reg = mysql_fetch_array( $res ) ){
    
    // se crean dos sesiones, una para mostrar el nombre de usuario del sistema y la otra para guardar en las tablas lo que realiza el usuario del sistema (integridad referencial)
    $_SESSION["sesion_usuario"] = $reg["login"];
    $_SESSION["sesion_id"] = $reg["codpaciente"];
    $_SESSION["autentificado"]= "SI";
    
   
    // se devuelve 1 para indicar que se logueo exitosamente
    return 1; 

   }
  }
 }
}

?>