<?php

include_once('leccion.php');
include_once('Collector.php');

class LeccionCollector extends Collector
{
  
  function showDemos() {
    $rows = self::$db->getRows("SELECT * FROM notas ");        
    $arrayDemo= array();        
    foreach ($rows as $c){
      $aux = new leccion($c{'id'},$c{'nombre'},$c{'parcial'},$c{'final'}, ,$c{'mejoramiento'});
      array_push($arrayDemo, $aux);
    }
    return $arrayDemo;        
  }

 
  }

}
?>



