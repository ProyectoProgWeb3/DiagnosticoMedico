<?php

include_once('Historia.php');
include_once('Collector.php');

class HistoriaCollector extends Collector
{
  
  function showDemos() {
    $rows = self::$db->getRows("SELECT * FROM historia");      
   
    $arrayDemo= array();        
    foreach ($rows as $c){
      $aux = new Demo($c{'codhistoriaclinica'},$c{'paciente'});
      array_push($arrayDemo, $aux);
    }
    return $arrayDemo;        
  }

}
?>

