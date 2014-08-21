<?php

include_once('Clinico.php');
include_once('Collector.php');

class ClinicoCollector extends Collector
{
  function showDemos($usuario) {
    $rows = self::$db->getRows("SELECT * FROM historico where paciente = '".$usuario."' ");        
    $arrayDemo= array();        
    foreach ($rows as $c){
      $aux = new Paciente($c{'paciente'},$c{'tratamiento'});
      array_push($arrayDemo, $aux);
    }
    return $arrayDemo;        
  }

 
  }

}
?>



