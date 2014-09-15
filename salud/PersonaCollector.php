<?php

include_once('Persona.php');
include_once('Collector.php');

class PersonaCollector extends Collector
{
  
  function mostrarPersonas() {
    $rows = self::$db->getRows("SELECT * FROM persona ");
    $arrayPersona= array();
    foreach ($rows as $c){
      $aux = new Persona($c{'idpersona'},$c{'nombre'},$c{'apellido'},$c{'sexo'},$c{'fechanac'},$c{'direccion'});
      array_push($arrayPersona, $aux);
    }
    return $arrayPersona;
  }
  function insertarRegistro($parametros){
      self::$db->insertRow("insert into persona values ",$parametros);
  }

}
?>

